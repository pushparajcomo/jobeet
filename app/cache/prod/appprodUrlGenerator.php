<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'push_job' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/',    ),  ),),
        'push_job_show' => array (  0 =>   array (    0 => 'company',    1 => 'location',    2 => 'id',    3 => 'position',  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'position',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'location',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'company',    ),    4 =>     array (      0 => 'text',      1 => '/job',    ),  ),),
        'push_job_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/new',    ),  ),),
        'push_job_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/create',    ),  ),),
        'push_job_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),),
        'push_job_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),),
        'push_job_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/job',    ),  ),),
        'PushJobeetBundle_job_default' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'PushJobeetBundle_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Push\\JobeetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'PushJobeetBundle_category' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'PushJobeetBundle:Category:show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
