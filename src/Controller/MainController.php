<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Episode;
use App\Entity\Groupe;
use App\Entity\Video;
use App\Form\AddAnimeType;
use App\Form\AddEpisodeType;
use App\Form\VideoType;
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
use Symfony\Component\HttpFoundation\Request;



class MainController extends AbstractController
{
    
    public function __construct(ObjectManager $objectManager)
    {
        date_default_timezone_set( 'Europe/Paris' );
        AnimeManager::setObjectManager($objectManager);
    }



    /**
     * @Route("/tchat", name="tchat")
     */
    public function tchat(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tchat = new Tchat();

        $form = $this->createForm(TchatType::class, $tchat);

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
     *  @Route("/Anime", name="anime")
     */
    public function Anime($id, $ep)
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
        ->findEp($id, $ep)
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

    public function recherche($nom)
    {
    $db = $this->getDoctrine()->getManager();

        $episode = $db->getRepository('App:Anime')->recherche($nom);
        return $this->render('main/recherche.html.twig', ['listarticle' => $episode
        ]);
    }

    /**
     * @Route("/add/video", name="add video")
     */
    public function AddVideo(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);

        // verifie que l'utillisateur est bien connecter et recupere les data
            // verifie que le formulaire est valide
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
            {
               // $episode = $form["episode"]->getData();
               // $url = $form["url"]->getData();
                
                $em->persist($video);
                $em->flush();

                //ajouter un flashbag, oublie pas aussi dans la vue twig
                $this->get('session')->getFlashBag()->add('notice', 'Video enregistré');
 
        }
        return $this->render('anime/add-video.html.twig', ['form' => $form->createView()]);
    }
}

