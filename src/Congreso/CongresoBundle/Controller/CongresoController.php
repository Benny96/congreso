<?php
// src/Congreso/CongresoBundle/Controller/CongresoController.php
namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CongresoController extends Controller
{

	public function listAction()
	{
	$tracks = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Track')->getTracks();
	$articulos = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Articulo')->getLatestArticulos();

	return $this->render('CongresoCongresoBundle:Congreso:list.html.twig', array('articulos' => $articulos,'tracks' => $tracks));
	}

	/*public function getBody($length = null)
{
	if (false === is_null($length) && $length > 0 && strlen($this->body) > $length)
		return substr($this->body, 0, $length) . "(...)";
	else
		return $this->body;
}*/

public function showAction($id)
{
	$articulo = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Articulo')->find($id);
	
	if (!$articulo) {
		throw $this->createNotFoundException('No se ha encontrado el articulo.');
	}

	$track = $articulo->getTrack();
	$cientificos = $articulo->getCientificos();
	$comments = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Comment')->getCommentsForArticulo($articulo->getId());

	return $this->render('CongresoCongresoBundle:Congreso:show.html.twig', array('articulo' => $articulo, 'comments' => $comments ,'track' => $track, 'cientificos' => $cientificos));
}

	public function contactAction()
	{
	return $this->render('CongresoCongresoBundle:Congreso:contact.html.twig');
	}

	public function showAjaxAction($id)
{
	$track = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Track')->find($id);
	
	if (!$track) {
		throw $this->createNotFoundException('No se ha encontrado el track.');
	}

	return $this->render('CongresoCongresoBundle:Congreso:showAjax.html.twig', array('track' => $track));
}
}
?>