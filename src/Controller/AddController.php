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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AddController extends AbstractController
{

    public function __construct(ObjectManager $objectManager)
     {
         TchatClass::setObjectManager($objectManager);
     }        
     
    /**
     * @Route("/add/anime", name="add-anime")
     */
    public function AddAnime(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();


        $Anime = new Anime();
        $Anime->setDate(new \datetime('now'));
        $form = $this->createForm(AddAnimeType::class, $Anime);

        ## Check Connexion
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                ## Check Form
                if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
                    {
                        $file = $Anime->getBrochure();

                        $fileName = md5(uniqid()).'.'.$file->guessExtension();
                        $file->move($this->getParameter('brochures_directory'),$fileName);

                        $Anime->setBrochure($fileName);
                        $url_image = $this->generateUrl('index')."uploads/".$fileName;
                        $Anime->setImage($url_image);
                        
                        $em->persist($Anime);
                        $em->flush();
                    }
                }
            else {
                return $this->redirect('http://airi.ovh');
            }
        return $this->render('add/Add-Anime.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }

      /**
     * @Route("/add/episode", name="add-episode")
     */
    public function AddEpisode(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();

        ## tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();

        ## Check Connexion
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                ## Get user info
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $nom = $bdd->getUsername();

                $Episode = new Episode();
                $Episode->setDate(new \datetime('now'));
                $form = $this->createForm(AddEpisodeType::class, $Episode);

                ## Check form
                if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
                    {
                        $Episode->setAuteur($nom);
                        $em->persist($Episode);
                        $em->flush();
                    }
            }
            else {
                return $this->redirect('http://airi.ovh');
            }
        return $this->render('add/Add-Episode.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }

    /**
     * @Route("/add/video", name="add video")
     */
    public function AddVideo(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        ## Tchat
        TchatClass::Tchat($request);
        $message = $em->getRepository('App:Tchat')->findAll();


        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);

        ## Check Connexion
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
            
                ## Check form
                if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
                    {   
                        $em->persist($video);
                        $em->flush();

                        //ajouter un flashbag, oublie pas aussi dans la vue twig
                        $this->get('session')->getFlashBag()->add('notice', 'Video enregistré');
                    }
    
            }
            else {
                return $this->redirect('http://airi.ovh');
            }
        return $this->render('add/add-video.html.twig', ['form' => $form->createView(), 'message' => $message]);
    }
}
