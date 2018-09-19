<?php

namespace App\Controller;
use App\Entity\Groupe;
use App\Form\CreateGroupeType;
use App\Entity\GroupeMember;
use App\Form\GroupMemberType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GroupeController extends AbstractController
{

     /**
     * @Route("/group", name="group")
     */
    public function Group(Request $request)
    {

        $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
        $id = $bdd->getId();

        $db = $this->getDoctrine()->getManager();

        $group = $db->getRepository('App:Groupe')->findAll();
        $my_group = $db->getRepository('App:GroupeMember')->findByMembre($id);
        return $this->render('groupe/group.html.twig', [
            'controller_name' => 'MainController', 'listarticle' => $group, 'mygroup' => $my_group
        ]);
    }

     /**
     * @Route("/group/create", name="group create")
     */
    public function CreateGroup(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new Groupe();
        $form = $this->createForm(CreateGroupeType::class, $Groupe);

        // verifie que l'utillisateur est bien connecter et recupere les data
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            // verifie que le formulaire est valide
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
            {
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $bdd->getId();
                
                $id = $this->getDoctrine()->getManager()->getRepository('App:User')->findOneById($id);
                $Groupe->setMember($id);
                $Groupe->setRank(1);
                $em->persist($Groupe);
                
                
                $Groupe_member = new GroupeMember();
                $Groupe_member->setMember($id);
                $Groupe_member->setGroupe($Groupe);
                $Groupe_member->setConfirm(1);
                $Groupe_member->setRank(1);

                $em->persist($Groupe_member);
                
                $em->flush();

                //ajouter un flashbag, oublie pas aussi dans la vue twig
                $this->get('session')->getFlashBag()->add('notice', 'Groupe créer !');
 
            }
        }
        return $this->render('groupe/create-groupe.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/group/apply", name="group apply")
     */
    public function GroupMember(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Groupe = new GroupeMember();
        $form = $this->createForm(GroupMemberType::class, $Groupe);

        // verifie que l'utillisateur est bien connecter et recupere les data
        if ( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            // verifie que le formulaire est valide
            if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
            {
                $bdd = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $bdd->getId();
                
                $id = $this->getDoctrine()->getManager()->getRepository('App:User')->findOneById($id);
                $Groupe->setMember($id);
                $Groupe->setConfirm(0);
                $Groupe->setRank(0);
                $em->persist($Groupe);
                $em->flush();

                //ajouter un flashbag, oublie pas aussi dans la vue twig
                $this->get('session')->getFlashBag()->add('notice', 'Vous avez postulé');
 
            }
        }
        return $this->render('groupe/group-member.html.twig', ['form' => $form->createView()]);
    }
}
