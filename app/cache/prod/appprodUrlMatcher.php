<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/job')) {
            // push_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'push_job');
                }

                return array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'push_job',);
            }

            // push_job_show
            if (preg_match('#^/job/(?<company>[^/]+)/(?<location>[^/]+)/(?<id>\\d+)/(?<position>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::showAction',)), array('_route' => 'push_job_show'));
            }

            // push_job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'push_job_new',);
            }

            // push_job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_push_job_create;
                }

                return array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'push_job_create',);
            }
            not_push_job_create:

            // push_job_edit
            if (preg_match('#^/job/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::editAction',)), array('_route' => 'push_job_edit'));
            }

            // push_job_update
            if (preg_match('#^/job/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_push_job_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::updateAction',)), array('_route' => 'push_job_update'));
            }
            not_push_job_update:

            // push_job_delete
            if (preg_match('#^/job/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_push_job_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::deleteAction',)), array('_route' => 'push_job_delete'));
            }
            not_push_job_delete:

        }

        // PushJobeetBundle_job_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PushJobeetBundle_job_default');
            }

            return array (  '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'PushJobeetBundle_job_default',);
        }

        // PushJobeetBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Push\\JobeetBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'PushJobeetBundle_homepage'));
        }

        // PushJobeetBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?<slug>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'PushJobeetBundle:Category:show',)), array('_route' => 'PushJobeetBundle_category'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
