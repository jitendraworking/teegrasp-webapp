<?php

namespace TeeGrasp\ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use TeeGrasp\WebBundle\Entity\User;
class ApiController extends FOSRestController
{
	    /**
     * @Rest\Get("/user")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('TeeGraspWebBundle:User')->findAll();
        if ($restresult === null) {
          return new View("there are no users exist", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }
}