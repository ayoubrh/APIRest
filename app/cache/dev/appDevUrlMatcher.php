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

        // prof_api_homepage
        if (0 === strpos($pathinfo, '/test/hello') && preg_match('#^/test/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_api_homepage')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/newp')) {
                // api_newpersonne
                if (0 === strpos($pathinfo, '/api/newpersonne') && preg_match('#^/api/newpersonne(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_newpersonne;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_newpersonne')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::newpersonneAction',  '_format' => 'json',));
                }
                not_api_newpersonne:

                // api_newprof
                if (0 === strpos($pathinfo, '/api/newprof') && preg_match('#^/api/newprof(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_newprof;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_newprof')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::newprofAction',  '_format' => 'json',));
                }
                not_api_newprof:

            }

            if (0 === strpos($pathinfo, '/api/professeurs')) {
                // api_get_professeurs
                if (preg_match('#^/api/professeurs(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_professeurs;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_professeurs')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getProfesseursAction',  '_format' => 'json',));
                }
                not_api_get_professeurs:

                // api_get_professeur
                if (preg_match('#^/api/professeurs/(?P<prof>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_professeur;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_professeur')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getProfesseurAction',  '_format' => 'json',));
                }
                not_api_get_professeur:

            }

            // api_get_listetudiant
            if (0 === strpos($pathinfo, '/api/listetudiants') && preg_match('#^/api/listetudiants/(?P<prof>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_listetudiant;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_listetudiant')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getListetudiantAction',  '_format' => 'json',));
            }
            not_api_get_listetudiant:

            // api_get_etudiant
            if (0 === strpos($pathinfo, '/api/etudiants') && preg_match('#^/api/etudiants/(?P<etd>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_etudiant;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_etudiant')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getEtudiantAction',  '_format' => 'json',));
            }
            not_api_get_etudiant:

            if (0 === strpos($pathinfo, '/api/add')) {
                // api_post_addprof
                if (0 === strpos($pathinfo, '/api/addprofs') && preg_match('#^/api/addprofs(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_addprof;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_addprof')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::postAddprofAction',  '_format' => 'json',));
                }
                not_api_post_addprof:

                // api_post_addetudiant
                if (0 === strpos($pathinfo, '/api/addetudiants') && preg_match('#^/api/addetudiants/(?P<prof>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_addetudiant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_addetudiant')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::postAddetudiantAction',  '_format' => 'json',));
                }
                not_api_post_addetudiant:

            }

            // api_get_supetudiant
            if (0 === strpos($pathinfo, '/api/supetudiants') && preg_match('#^/api/supetudiants/(?P<etd>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_supetudiant;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_supetudiant')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getSupetudiantAction',  '_format' => 'json',));
            }
            not_api_get_supetudiant:

            // api_post_test
            if (0 === strpos($pathinfo, '/api/tests') && preg_match('#^/api/tests(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_test;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_test')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::postTestAction',  '_format' => 'json',));
            }
            not_api_post_test:

            // api_post_modifetudiant
            if (0 === strpos($pathinfo, '/api/modifetudiants') && preg_match('#^/api/modifetudiants/(?P<etd>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_modifetudiant;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_modifetudiant')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::postModifetudiantAction',  '_format' => 'json',));
            }
            not_api_post_modifetudiant:

            // api_get_note
            if (0 === strpos($pathinfo, '/api/notes') && preg_match('#^/api/notes/(?P<etd>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_note')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getNoteAction',  '_format' => 'json',));
            }
            not_api_get_note:

            // api_get_allnote
            if (0 === strpos($pathinfo, '/api/allnotes') && preg_match('#^/api/allnotes/(?P<prof>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_allnote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_allnote')), array (  '_controller' => 'Prof\\APIBundle\\Controller\\ProfAPIController::getAllnoteAction',  '_format' => 'json',));
            }
            not_api_get_allnote:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
