<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/built/layout')) {
            // _assetic_caad23a
            if ($pathinfo === '/css/built/layout.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'caad23a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_caad23a',);
            }

            if (0 === strpos($pathinfo, '/css/built/layout_')) {
                if (0 === strpos($pathinfo, '/css/built/layout_event')) {
                    // _assetic_caad23a_0
                    if ($pathinfo === '/css/built/layout_event_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'caad23a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_caad23a_0',);
                    }

                    // _assetic_caad23a_1
                    if ($pathinfo === '/css/built/layout_events_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'caad23a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_caad23a_1',);
                    }

                }

                // _assetic_caad23a_2
                if ($pathinfo === '/css/built/layout_main_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'caad23a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_caad23a_2',);
                }

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

        }

        // email_formEmail
        if ($pathinfo === '/formEmail') {
            return array (  '_controller' => 'Yoda\\EmailBundle\\Controller\\EmailController::formEmailAction',  '_route' => 'email_formEmail',);
        }

        // email_sendMail
        if ($pathinfo === '/sendMail') {
            return array (  '_controller' => 'Yoda\\EmailBundle\\Controller\\EmailController::sendMailAction',  '_route' => 'email_sendMail',);
        }

        // event_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_homepage')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\DefaultController::indexAction',));
        }

        // event_show
        if (preg_match('#^/(?P<slug>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::showAction',));
        }

        // event_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
        }

        // event_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_event_create;
            }

            return array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
        }
        not_event_create:

        // event_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::editAction',));
        }

        // event_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_event_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::updateAction',));
        }
        not_event_update:

        // event_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_event_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::deleteAction',));
        }
        not_event_delete:

        // event_attend
        if (preg_match('#^/(?P<id>[^/]++)/attend(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_attend')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::attendAction',  'format' => 'html',));
        }

        // event_unattend
        if (preg_match('#^/(?P<id>[^/]++)/unattend(?:\\.(?P<format>json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_unattend')), array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::unattendAction',  'format' => 'html',));
        }

        // event
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'event');
            }

            return array (  '_controller' => 'Yoda\\EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
        }

        // yoda_event_report_updatedevents
        if ($pathinfo === '/events/report/recentlyUpdated.csv') {
            return array (  '_controller' => 'Yoda\\EventBundle\\Controller\\ReportController::updatedEventsAction',  '_route' => 'yoda_event_report_updatedevents',);
        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\RegisterController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login_form
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_form',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Yoda\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/yoda')) {
                if (0 === strpos($pathinfo, '/admin/yoda/event/event')) {
                    // admin_yoda_event_event_list
                    if ($pathinfo === '/admin/yoda/event/event/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_list',  '_route' => 'admin_yoda_event_event_list',);
                    }

                    // admin_yoda_event_event_create
                    if ($pathinfo === '/admin/yoda/event/event/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_create',  '_route' => 'admin_yoda_event_event_create',);
                    }

                    // admin_yoda_event_event_batch
                    if ($pathinfo === '/admin/yoda/event/event/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_batch',  '_route' => 'admin_yoda_event_event_batch',);
                    }

                    // admin_yoda_event_event_edit
                    if (preg_match('#^/admin/yoda/event/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_event_event_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_edit',));
                    }

                    // admin_yoda_event_event_delete
                    if (preg_match('#^/admin/yoda/event/event/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_event_event_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_delete',));
                    }

                    // admin_yoda_event_event_show
                    if (preg_match('#^/admin/yoda/event/event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_event_event_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_show',));
                    }

                    // admin_yoda_event_event_export
                    if ($pathinfo === '/admin/yoda/event/event/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.event',  '_sonata_name' => 'admin_yoda_event_event_export',  '_route' => 'admin_yoda_event_event_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/yoda/user/user')) {
                    // admin_yoda_user_user_list
                    if ($pathinfo === '/admin/yoda/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_list',  '_route' => 'admin_yoda_user_user_list',);
                    }

                    // admin_yoda_user_user_create
                    if ($pathinfo === '/admin/yoda/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_create',  '_route' => 'admin_yoda_user_user_create',);
                    }

                    // admin_yoda_user_user_batch
                    if ($pathinfo === '/admin/yoda/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_batch',  '_route' => 'admin_yoda_user_user_batch',);
                    }

                    // admin_yoda_user_user_edit
                    if (preg_match('#^/admin/yoda/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_edit',));
                    }

                    // admin_yoda_user_user_delete
                    if (preg_match('#^/admin/yoda/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_delete',));
                    }

                    // admin_yoda_user_user_show
                    if (preg_match('#^/admin/yoda/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_yoda_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_show',));
                    }

                    // admin_yoda_user_user_export
                    if ($pathinfo === '/admin/yoda/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_yoda_user_user_export',  '_route' => 'admin_yoda_user_user_export',);
                    }

                }

            }

        }

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/generate-captcha') && preg_match('#^/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
