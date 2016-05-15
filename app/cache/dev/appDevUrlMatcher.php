<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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

        if (0 === strpos($pathinfo, '/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/threads/new') && preg_match('#^/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        if (0 === strpos($pathinfo, '/a')) {
            // ajout_admin_match
            if ($pathinfo === '/ajoutmatch') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::ajoutmatchAction',  '_route' => 'ajout_admin_match',);
            }

            if (0 === strpos($pathinfo, '/affichermatch')) {
                // afficher_user_match
                if ($pathinfo === '/affichermatchuser') {
                    return array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::afficherMatchuserAction',  '_route' => 'afficher_user_match',);
                }

                // afficher_admin_match
                if ($pathinfo === '/affichermatchadmin') {
                    return array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::afficherMatchadminAction',  '_route' => 'afficher_admin_match',);
                }

            }

        }

        // supprimer_match
        if (0 === strpos($pathinfo, '/supprimermatch') && preg_match('#^/supprimermatch/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_match')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::supprimermatchAction',));
        }

        // rechercher_admin_match
        if (0 === strpos($pathinfo, '/recherchermatch') && preg_match('#^/recherchermatch/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercher_admin_match')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::recherchermatchAction',));
        }

        // modifier_match
        if (0 === strpos($pathinfo, '/modifiermatch') && preg_match('#^/modifiermatch/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_match')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::modifiermatchAction',));
        }

        if (0 === strpos($pathinfo, '/afficherresultat')) {
            // afficher_admin_resultat
            if ($pathinfo === '/afficherresultatadmin') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::afficheradminresultatAction',  '_route' => 'afficher_admin_resultat',);
            }

            // afficher_user_resultat
            if ($pathinfo === '/afficherresultatuser') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::afficheruserresultatAction',  '_route' => 'afficher_user_resultat',);
            }

        }

        // rechercher_admin_resultat
        if (0 === strpos($pathinfo, '/rechercherresultat') && preg_match('#^/rechercherresultat/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercher_admin_resultat')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::rechercherresultatAction',));
        }

        // tft_resultat_ajouter_homepage
        if ($pathinfo === '/ajouterresultat') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::ajoutresultatAction',  '_route' => 'tft_resultat_ajouter_homepage',);
        }

        // modifier_admin_resultat
        if (0 === strpos($pathinfo, '/modifierresultat') && preg_match('#^/modifierresultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_admin_resultat')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::modifierresultatAction',));
        }

        // supprimer_admin_resultat
        if (0 === strpos($pathinfo, '/supprimerresultat') && preg_match('#^/supprimerresultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_admin_resultat')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ResultatController::supprimerresultatAction',));
        }

        if (0 === strpos($pathinfo, '/aff')) {
            // tft_match_affich_homepage
            if ($pathinfo === '/affichermatchuser') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::affichMatchuserAction',  '_route' => 'tft_match_affich_homepage',);
            }

            // tft_match_affecterarbitre_homepage
            if ($pathinfo === '/affecterarbitre') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\matchController::affecterarbitreAction',  '_route' => 'tft_match_affecterarbitre_homepage',);
            }

        }

        // tft_ticket_cancelpaiement_homepage
        if ($pathinfo === '/cancelpaiement') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\TicketController::CancelAction',  '_route' => 'tft_ticket_cancelpaiement_homepage',);
        }

        // tft_ticket_okpaiement_homepage
        if ($pathinfo === '/okpaiement') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\TicketController::okpaiementAction',  '_route' => 'tft_ticket_okpaiement_homepage',);
        }

        // tft_ticket_paiement_homepage
        if (0 === strpos($pathinfo, '/paiement') && preg_match('#^/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_ticket_paiement_homepage')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\TicketController::paiementAction',));
        }

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

        if (0 === strpos($pathinfo, '/affi')) {
            // comment_article
            if ($pathinfo === '/affi') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\CommentController::CommentaireAction',  '_route' => 'comment_article',);
            }

            // comment_forum
            if ($pathinfo === '/afficher') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\CommentController::AjoutForumAction',  '_route' => 'comment_forum',);
            }

        }

        // repondre_forum
        if (0 === strpos($pathinfo, '/rep') && preg_match('#^/rep/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'repondre_forum')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\CommentController::repondreAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // ajout_admin_stade
            if ($pathinfo === '/ajoutStade') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::ajoutStadeAction',  '_route' => 'ajout_admin_stade',);
            }

            // admin_index_homepage
            if ($pathinfo === '/adminIndex') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::adminIndexAction',  '_route' => 'admin_index_homepage',);
            }

            // ajout_admin_pronostic
            if ($pathinfo === '/ajoutPronostic') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::ajoutPronosticAction',  '_route' => 'ajout_admin_pronostic',);
            }

            // affich_pronostic
            if ($pathinfo === '/affichPronostic') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PronosticController::affichPronosticAction',  '_route' => 'affich_pronostic',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            // resultatPronostic
            if ($pathinfo === '/resultatPronostic') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PronosticController::resultatPronosticAction',  '_route' => 'resultatPronostic',);
            }

            // recherchePronostic
            if ($pathinfo === '/recherchePronostic') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PronosticController::recherchePronosticAction',  '_route' => 'recherchePronostic',);
            }

        }

        // affich_admin_stade
        if ($pathinfo === '/affichStade') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::affichStadeAction',  '_route' => 'affich_admin_stade',);
        }

        // supprimer_admin_stade
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_admin_stade')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::supprimerStadeAction',));
        }

        // modifier_admin_stade
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_admin_stade')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::modifierStadeAction',));
        }

        // rechercher_admin_stade
        if (0 === strpos($pathinfo, '/rechercher') && preg_match('#^/rechercher/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercher_admin_stade')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::rechercherStadeAction',));
        }

        // exporter_admin_stade
        if ($pathinfo === '/exporter') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::exporterStadeAction',  '_route' => 'exporter_admin_stade',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // rediriger_admin_stade
            if ($pathinfo === '/rediriger') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::redirigerStadeAction',  '_route' => 'rediriger_admin_stade',);
            }

            // rechercherForum_forum
            if (0 === strpos($pathinfo, '/rechercherForum') && preg_match('#^/rechercherForum/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercherForum_forum')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\CommentController::rechercherForumAction',));
            }

        }

        // AdminForum
        if ($pathinfo === '/Adminad') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\CommentController::AdminforumAction',  '_route' => 'AdminForum',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // _afficherclassement
            if ($pathinfo === '/classement') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ClassementController::affichageClassementAction',  '_route' => '_afficherclassement',);
            }

            // _grapheChartLine
            if ($pathinfo === '/chartLine') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\GrapheController::chartLineAction',  '_route' => '_grapheChartLine',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // ajoutjeu_match
            if ($pathinfo === '/ajoutJeu') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PronosticController::ajoutJeuDQLAction',  '_route' => 'ajoutjeu_match',);
            }

            // tft_personne_aff
            if ($pathinfo === '/affses') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::listeAction',  '_route' => 'tft_personne_aff',);
            }

        }

        // tft_personne_templ
        if ($pathinfo === '/vue') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::vueAction',  '_route' => 'tft_personne_templ',);
        }

        // tft_personne_ajout
        if ($pathinfo === '/ajout') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::ajoutAction',  '_route' => 'tft_personne_ajout',);
        }

        // tft_personne_listsup
        if ($pathinfo === '/listsup') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::listsupAction',  '_route' => 'tft_personne_listsup',);
        }

        // tft_personne_sup
        if (0 === strpos($pathinfo, '/sup') && preg_match('#^/sup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_personne_sup')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::supprimerAction',));
        }

        // tft_personne_listup
        if ($pathinfo === '/listup') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::listupAction',  '_route' => 'tft_personne_listup',);
        }

        // tft_personne_upd
        if (0 === strpos($pathinfo, '/mod') && preg_match('#^/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_personne_upd')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\PersonneController::modifierAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // tft_ajout_article
            if ($pathinfo === '/ajt') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::ajoutAction',  '_route' => 'tft_ajout_article',);
            }

            // tft_aff_article
            if ($pathinfo === '/afff') {
                return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::listeAction',  '_route' => 'tft_aff_article',);
            }

        }

        // tft_sup_article
        if (0 === strpos($pathinfo, '/supar') && preg_match('#^/supar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_sup_article')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::supprimerAction',));
        }

        // tft_listsup_article
        if ($pathinfo === '/lasup') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::listsupAction',  '_route' => 'tft_listsup_article',);
        }

        // tft_mod_article
        if (0 === strpos($pathinfo, '/modar') && preg_match('#^/modar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_mod_article')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::modifierAction',));
        }

        // tft_listup_article
        if ($pathinfo === '/laup') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ArticleController::listupAction',  '_route' => 'tft_listup_article',);
        }

        // tft_ajout_image
        if ($pathinfo === '/ajtimg') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ImageController::uploadAction',  '_route' => 'tft_ajout_image',);
        }

        // tft_liste_image
        if ($pathinfo === '/liste') {
            return array (  '_controller' => 'TFT\\personneBundle\\Controller\\ImageController::listAction',  '_route' => 'tft_liste_image',);
        }

        // tft_aff_image
        if (0 === strpos($pathinfo, '/aff') && preg_match('#^/aff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_aff_image')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ImageController::afficheAction',));
        }

        // tft_image_route
        if (0 === strpos($pathinfo, '/image') && preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_image_route')), array (  '_controller' => 'TFT\\personneBundle\\Controller\\ImageController::photoAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
