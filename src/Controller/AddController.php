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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AddController extends AbstractController
{

    /**
     * @Route("/add/anime", name="add-anime")
     */
    public function AddAnime(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        //tchat

      //  TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();


        //$log = AnimeManager::mangaCall();
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
        return $this->render('main/Add-Anime.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }

      /**
     * @Route("/add/episode", name="add-episode")
     */
    public function AddEpisode(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //tchat

        //TchatClass::Tchat($request);
        //$message = $em->getRepository('App:Tchat')->findAll();


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
        return $this->render('main/Add-Episode.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }

    /**
     * @Route("/add/video", name="add video")
     */
    public function AddVideo(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //tchat

       // TchatClass::Tchat($request);
        //$message = $em->getRepository('App:Tchat')->findAll();


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
        return $this->render('anime/add-video.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }
}
