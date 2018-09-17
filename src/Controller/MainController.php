<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Episode;
use App\Entity\Groupe;
use App\Form\AddAnimeType;
use App\Form\AddEpisodeType;
use App\Utils\AnimeManager;

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
use Symfony\Component\HttpFoundation\Request;



class MainController extends AbstractController
{
    
    public function __construct(ObjectManager $objectManager)
    {
        date_default_timezone_set( 'Europe/Paris' );
        AnimeManager::setObjectManager($objectManager);
    }
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        //chercher tous les episodes
        /*
        $episode = $this->getDoctrine()
      ->getManager()
      ->getRepository('App:Episode')
      ->findAll()
    ;
    */
    $db = $this->getDoctrine()->getManager();

        $episode = $db->getRepository('App:Episode')->findByPage(
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController', 'listarticle' => $episode
        ]);
    }

    /**
     * @Route("/Anime", name="anime")
     */
    public function Anime($id)
    {

        // afficher l'anime en fonction de son id
        $article = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Anime')
        ->findOneById($id)
      ;
      $episode = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Episode')
        ->findOneById(27)
      ;
      
       // $article = $this->getDoctrine()->getRepository(Anime::class)->findOneByIds($id);
        return $this->render('main/Anime.html.twig', array('id' => $id, 'article' => $article, 'episode' => $episode));
    }

    /**
     * @Route("/add/anime", name="add-anime")
     */
    public function AddAnime(Request $request)
    {
        //$log = AnimeManager::mangaCall();
        $em = $this->getDoctrine()->getManager();
        $Anime = new Anime();
        $Anime->setDate(new \datetime('now'));
        $form = $this->createForm(AddAnimeType::class, $Anime);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){


            $file = $Anime->getBrochure();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('brochures_directory'),$fileName);

            $Anime->setBrochure($fileName);
            $url_image = $this->generateUrl('index')."uploads/".$fileName;
            $Anime->setImage($url_image);
            
            $em->persist($Anime);
            $em->flush();
           // return $this->redirect($this->generateUrl('main/Add-Anime.html.twig'));
        }
        return $this->render('main/Add-Anime.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/add/episode", name="add-episode")
     */
    public function AddEpisode(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Episode = new Episode();
        $Episode->setDate(new \datetime('now'));
        $form = $this->createForm(AddEpisodeType::class, $Episode);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $nom = $Episode->getNom();
            //trouver dans la table anime l'anime qui correspond a lepisode anime_id
            $article = $this->getDoctrine()
        ->getManager()
        ->getRepository('App:Anime')
        ->findOneByNom($nom)
      ;
      $Episode->setAnime($article);
      $em->persist($Episode);
            $em->flush();
        }
        return $this->render('main/Add-Episode.html.twig', ['form' => $form->createView()]);
    }

     /**
     * @Route("/groupe", name="groupe")
     */
    public function groupe(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new Groupe();

        $user = $this->getDoctrine()->getManager()->getRepository('App:User')->findOneById(1);
      $Groupe->setMember($user);
      $Groupe->setNom("morgan");
      $Groupe->setRank(4);
      $em->persist($Groupe);
            $em->flush();
        return $this->render('main/groupe.html.twig');
    }

    public function recherche($nom)
    {
    $db = $this->getDoctrine()->getManager();

        $episode = $db->getRepository('App:Anime')->recherche($nom);
        return $this->render('main/recherche.html.twig', ['listarticle' => $episode
        ]);
    }
}

