<?php

namespace App\Controller;

use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;
use App\Utils\TchatClass;
use App\Utils\LevelClass;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends AbstractController
{
    public function recursiveResponse($parent, $array, $myarray)
    {
        foreach ($array as $a)
            {
                if ($a->parent == $parent)
                {
                    $i = 0;
                    foreach ($myarray as $count)
                        { 
                            $i++;
                        }
                    $myarray[$i] = $a;
                    $myarray = $this->recursiveResponse($a->id, $array, $myarray);
                }
            }
            return ($myarray);
    }

    public function showResponse($array)
    {
        $myarray = array();
        $i = 0;
        foreach ($array as $com)
            {
                if ($com->parent == 0)
                {
                    $i = 0;
                    foreach ($myarray as $count)
                        { 
                            $i++;
                        }
                    $myarray[$i] = $com;
                    $myarray = $this->recursiveResponse($com->id, $array, $myarray);
                }
            }
            return ($myarray);
    }

    /**
     * @Route("/feed", name="feed")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Level
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->getUser()->getId();
                $level = LevelClass::showLevel($request, $user);
            } else {
                $level = null;
            }

        ## Search Bar
        $anime = $em->getRepository('App:Anime')->findBy(
            array(),
            array('nom' => 'ASC')
        );

        $reqFeed = $em->getRepository('App:Commentaire')->findAll();
        $arrayFeed = $this->showResponse($reqFeed);

        return $this->render('feed/index.html.twig', [
            'message' => $message, 'anime' => $anime, 'level' => $level, 'arrayFeed' => $arrayFeed
        ]);
    }
}
