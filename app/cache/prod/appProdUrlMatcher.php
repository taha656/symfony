<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // tf_tpersonne_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tf_tpersonne_homepage')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::indexAction',));
        }

        // Dopage
        if ($pathinfo === '/dop') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::dopAction',  '_route' => 'Dopage',);
        }

        // Medecin
        if ($pathinfo === '/med') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::medAction',  '_route' => 'Medecin',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // Arbitre
            if ($pathinfo === '/arb') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::arbAction',  '_route' => 'Arbitre',);
            }

            // Admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::admAction',  '_route' => 'Admin',);
            }

        }

        // Joueur
        if ($pathinfo === '/joueur') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::joueurAction',  '_route' => 'Joueur',);
        }

        // FAN
        if ($pathinfo === '/fan') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::fanAction',  '_route' => 'FAN',);
        }

        // Utilisateur
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::userAction',  '_route' => 'Utilisateur',);
        }

        if (0 === strpos($pathinfo, '/List')) {
            // afficherListUser
            if ($pathinfo === '/Listuser') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::listuserAction',  '_route' => 'afficherListUser',);
            }

            // afficherListEncours
            if ($pathinfo === '/List') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::afficheuserAction',  '_route' => 'afficherListEncours',);
            }

        }

        if (0 === strpos($pathinfo, '/Trait')) {
            // Accepter
            if (0 === strpos($pathinfo, '/TraitAccepter') && preg_match('#^/TraitAccepter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Accepter')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::AccepterAction',));
            }

            // Refuser
            if ($pathinfo === '/TraitRefuser') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::RefuserAction',  '_route' => 'Refuser',);
            }

        }

        // Inscription_all
        if ($pathinfo === '/inscri') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\DefaultController::adminAction',  '_route' => 'Inscription_all',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // tft_arbitre_registration
        if ($pathinfo === '/arbitre/register') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\RegistrationAController::registerArbitreAction',  '_route' => 'tft_arbitre_registration',);
        }

        // tft_dopage_registration
        if ($pathinfo === '/dopage/register') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\RegistrationDController::registerDopageAction',  '_route' => 'tft_dopage_registration',);
        }

        // tft_fan_registration
        if ($pathinfo === '/fan/register') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\RegistrationFController::registerfanAction',  '_route' => 'tft_fan_registration',);
        }

        // tft_joueur_registration
        if ($pathinfo === '/joueur/register') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\RegistrationJController::registerJoueurAction',  '_route' => 'tft_joueur_registration',);
        }

        // tft_medecin_registration
        if ($pathinfo === '/medecin/register') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\RegistrationMController::registerMedecinAction',  '_route' => 'tft_medecin_registration',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
