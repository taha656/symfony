<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TFT\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TFT\personneBundle\Entity\matches;
use TFT\personneBundle\Entity\Transaction;
use TFT\personneBundle\Form\matchesForm;
use Beelab\PaypalBundle\Paypal\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TicketController extends Controller {

    public function okpaiementAction(Request $request) {
        $response = new \Symfony\Component\HttpFoundation\Response();
        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('TFTpersonneBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $this->get('beelab_paypal.service')->setTransaction($transaction)->complete();
        $this->getDoctrine()->getManager()->flush();
        if (!$transaction->isOk()) {
            return array(); // or a Response (in case of error)
        }
        $req = $this->get('request');
        $coo = $req->cookies;

        if ($coo->has('id-ticket')) {
            $id = $coo->get('id-ticket');
        }

        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('TFTpersonneBundle:ticket')->findOneById($id);
        if ($ticket->getNombreTotal() > 0) {
            $ticket->setNombreTotal($ticket->getNombreTotal() - 1);
            $em->persist($ticket); //requet SQL
            $em->flush(); //execute la requete
        }


        $response->headers->clearCookie('id-ticket');
        $response->send();
        return $this->redirect($this->generateUrl("tft_match_affich_homepage"));
        
    }

    public function cancelpaiementAction(Request $request) {
        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('TFTpersonneBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $transaction->cancel(null);
        $this->getDoctrine()->getManager()->flush();

        return $this->render('TFTpersonneBundle:Ticket:cancelpaiement.html.twig');
    }

    public function paiementAction(Request $request, $id) {

        $response = new \Symfony\Component\HttpFoundation\Response();
//bech najem naccedi lel cokies

        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('TFTpersonneBundle:ticket')->findOneById($id);

        $response->headers->setCookie(new Cookie('id-ticket', $id));
        //sset cokies
        $response->send();
        //b3athneha lel browser

        $amount = floatval($ticket->getPrix());  // get an amount, e.g. from your cart
        $transaction = new Transaction($amount);
        try {
            $response = $this->get('beelab_paypal.service')->setTransaction($transaction)->start();
            $this->getDoctrine()->getManager()->persist($transaction);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($response->getRedirectUrl());
        } catch (Exception $e) {
            throw new HttpException(503, 'Payment error', $e);
        }
    }

}
