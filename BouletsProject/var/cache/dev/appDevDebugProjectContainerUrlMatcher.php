<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/d39fe82')) {
            // _assetic_d39fe82
            if ($pathinfo === '/css/d39fe82.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd39fe82',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d39fe82',);
            }

            if (0 === strpos($pathinfo, '/css/d39fe82_')) {
                // _assetic_d39fe82_0
                if ($pathinfo === '/css/d39fe82_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd39fe82',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d39fe82_0',);
                }

                // _assetic_d39fe82_1
                if ($pathinfo === '/css/d39fe82_responsive_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd39fe82',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d39fe82_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/e017c7d')) {
            // _assetic_e017c7d
            if ($pathinfo === '/js/e017c7d.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e017c7d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e017c7d',);
            }

            if (0 === strpos($pathinfo, '/js/e017c7d_')) {
                // _assetic_e017c7d_0
                if ($pathinfo === '/js/e017c7d_jquery-1.9.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e017c7d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e017c7d_0',);
                }

                // _assetic_e017c7d_1
                if ($pathinfo === '/js/e017c7d_bootstrap-alert_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e017c7d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e017c7d_1',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

<<<<<<< HEAD
        if (0 === strpos($pathinfo, '/back')) {
            // back_homepage
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_homepage');
                }

                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_homepage',);
            }

            // back_createincident
            if ($pathinfo === '/back/createincident') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\IncidentsController::createincidentAction',  '_route' => 'back_createincident',);
            }

            // back_indexallincidents
            if ($pathinfo === '/back/allincidents') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\IncidentsController::allincidentsAction',  '_route' => 'back_indexallincidents',);
            }

            if (0 === strpos($pathinfo, '/back/incident')) {
                // back_indexincident
                if (preg_match('#^/back/incident/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_indexincident')), array (  '_controller' => 'Boulets\\BackBundle\\Controller\\IncidentsController::incidentAction',));
                }

                if (0 === strpos($pathinfo, '/back/incidentend')) {
                    // back_incidentend
                    if (preg_match('#^/back/incidentend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_incidentend')), array (  '_controller' => 'Boulets\\BackBundle\\Controller\\IncidentsController::incidentendAction',));
                    }

                    // back_alladmins
                    if (preg_match('#^/back/incidentend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_alladmins')), array (  '_controller' => 'Boulets\\BackBundle\\Controller\\IncidentsController::incidentendAction',));
                    }

                }

            }

            // login
            if ($pathinfo === '/back/login') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::loginAction',  '_route' => 'login',);
            }

            // create
            if ($pathinfo === '/back/createAdmin') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::createAction',  '_route' => 'create',);
            }

            // profil
            if ($pathinfo === '/back/profilAdmin') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::profilAction',  '_route' => 'profil',);
            }

            // logout
            if ($pathinfo === '/back/logout') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::logoutAction',  '_route' => 'logout',);
            }

            // AllAdmin
            if ($pathinfo === '/back/admin/list') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::allAdminAction',  '_route' => 'AllAdmin',);
            }

            // update
            if ($pathinfo === '/back/update') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\AdministrateurController::updateAction',  '_route' => 'update',);
            }

        }

        if (0 === strpos($pathinfo, '/back/machine')) {
            // back_machine
            if ($pathinfo === '/back/machine') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\MachineController::indexAction',  '_route' => 'back_machine',);
            }

            // back_machine_create
            if ($pathinfo === '/back/machine/create') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\MachineController::createAction',  '_route' => 'back_machine_create',);
            }

            // back_machine_update
            if ($pathinfo === '/back/machine/update') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\MachineController::updateAction',  '_route' => 'back_machine_update',);
            }

            // back_machine_delete
            if ($pathinfo === '/back/machine/delete') {
                return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\MachineController::deleteAction',  '_route' => 'back_machine_delete',);
            }

=======
        // back_homepage
        if ($pathinfo === '/back') {
            return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_homepage',);
>>>>>>> origin/Salle
        }

        // back_createsalle
        if ($pathinfo === '/createSalle') {
            return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\SalleController::createSalleAction',  '_route' => 'back_createsalle',);
        }

        // back_updatesalle
        if ($pathinfo === '/updateSalle') {
            return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\SalleController::updateSalleAction',  '_route' => 'back_updatesalle',);
        }

        // back_deletesalle
        if ($pathinfo === '/deleteSalle') {
            return array (  '_controller' => 'Boulets\\BackBundle\\Controller\\SalleController::deleteSalleAction',  '_route' => 'back_deletesalle',);
        }

        // front_homepage
        if (rtrim($pathinfo, '/') === '/front') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_homepage');
            }

            return array (  '_controller' => 'Boulets\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
