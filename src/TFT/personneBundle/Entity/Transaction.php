<?php
namespace TFT\personneBundle\Entity;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Beelab\PaypalBundle\Entity\Transaction as BaseTransaction;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Transaction extends BaseTransaction
{
    // if you need other properties, or relationships, add them here...
    public function getDescription()
    {
        // here you can return a generic description, if you don't want to list items
    }
    public function getItems()
    {
        // here you can return an array of items, with each item being an array of name, quantity, price
        // Note that if the total (price * quantity) of items doesn't match total amount, this won't work
    }
    public function getShippingAmount()
    {
        // here you can return shipping amount. This amount MUST be already in your total amount
    }
}
