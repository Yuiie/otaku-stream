<?php

namespace App\Utils;

use App\Form\TchatType;
use App\Entity\Tchat;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;


class LevelClass
{
    protected $requestStack;
    
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        //$request = $requestStack->getCurrentRequest();
    }

    /**
     * @var ObjectManager
     */
    private static $em;

    /**
     * @param ObjectManager $manager
     */
    public static function setObjectManager(ObjectManager $manager)
    {
        self::$em = $manager;
    }

    public function showLevel($request)
    {
        $session = $request->getSession();
        
        $my = $session->get('4');
        $a = json_decode($my);
        
        return ($a);
    }

    public function addLevel($request)
    {
        $session = $request->getSession();

        $lvl = 2;
        $exp = 70;
        $max = 100;
        $timeout = 20;

        $myJSON = json_encode(array(
            'lvl' => $lvl,
            'exp' => $exp,
            'max' => $max,
            'timeout' => $timeout                
        ));

        $session->set('4', $myJSON);
    }
}