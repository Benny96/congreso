<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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

        // congreso_congreso_list
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'congreso_congreso_list');
            }

            return array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::listAction',  '_route' => 'congreso_congreso_list',);
        }

        // congreso_congreso_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_congreso_show')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::showAction',));
        }

        if (0 === strpos($pathinfo, '/co')) {
            // congreso_congreso_contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'BloggerBlogBundle:Blog:contact',  '_route' => 'congreso_congreso_contact',);
            }

            // congreso_comment_create
            if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<articulo_id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'ARTICULO') {
                    $allow[] = 'ARTICULO';
                    goto not_congreso_comment_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'congreso_comment_create')), array (  '_controller' => 'Congreso\\CongresoBundle\\Controller\\CommentController::createAction',));
            }
            not_congreso_comment_create:

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
