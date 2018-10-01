<?php

namespace App\Controller;

use App\Utils\TchatClass;

use App\Entity\Anime;
use App\Entity\Episode;
use App\Entity\Groupe;
use App\Entity\Video;
use App\Entity\Tchat;
use App\Form\AddAnimeType;
use App\Form\AddEpisodeType;
use App\Form\VideoType;
use App\Form\TchatType;
use App\Utils\AnimeManager;
use App\Form\CreateGroupeType;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;



class MainController extends AbstractController
{
    
    public function __construct(ObjectManager $objectManager)
     {
         TchatClass::setObjectManager($objectManager);
     }        

    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        TchatClass::Tchat($request);
 
        $db = $this->getDoctrine()->getManager();
        $message = $db->getRepository('App:Tchat')->findAll();
        $episode = $db->getRepository('App:Episode')->findByPage(
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController', 'listarticle' => $episode, 'message' => $message
        ]);
    }

    /**
     *  @Route("/Anime", name="anime")
     */
    public function Anime($id, $ep, Request $request)
    {
        TchatClass::Tchat($request);
 
        $db = $this->getDoctrine()->getManager();
        $message = $db->getRepository('App:Tchat')->findAll();

        // afficher l'anime en fonction de son id
        $article = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Anime')
        ->findOneById($id)
      ;
      $episode = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Video')
        ->findByEp($id, $ep)
      ;
      
       // $article = $this->getDoctrine()->getRepository(Anime::class)->findOneByIds($id);
        return $this->render('main/Anime.html.twig', array('id' => $id, 'article' => $article, 'episode' => $episode, 'message' => $message));
    }

    public function recherche($nom)
    {
    $db = $this->getDoctrine()->getManager();

        $episode = $db->getRepository('App:Anime')->recherche($nom);
        return $this->render('main/recherche.html.twig', ['listarticle' => $episode
        ]);
    }

    
}

       //chercher tous les episodes
        /*
        $episode = $this->getDoctrine()
      ->getManager()
      ->getRepository('App:Episode')
      ->findAll()
    ;
    */