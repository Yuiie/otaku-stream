<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/':
                // main
                return array('_route' => 'main', '_controller' => 'App\\Controller\\MainController::index');
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\MainController::index');
                break;
            case '/profile/':
                // fos_user_profile_show
                $ret = array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_profile_show;
                }

                return $ret;
                not_fos_user_profile_show:
                // login
                return array('_route' => 'login');
                break;
            default:
                $routes = array(
                    '/add/anime' => array(array('_route' => 'add_anime', '_controller' => 'App\\Controller\\AddController::AddAnime'), null, null, null),
                    '/add/episode' => array(array('_route' => 'add_episode', '_controller' => 'App\\Controller\\AddController::AddEpisode'), null, null, null),
                    '/add/video' => array(array('_route' => 'add_video', '_controller' => 'App\\Controller\\AddController::AddVideo'), null, null, null),
                    '/group' => array(array('_route' => 'group', '_controller' => 'App\\Controller\\GroupeController::Group'), null, null, null),
                    '/group/create' => array(array('_route' => 'group_create', '_controller' => 'App\\Controller\\GroupeController::CreateGroup'), null, null, null),
                    '/group/apply' => array(array('_route' => 'group_apply', '_controller' => 'App\\Controller\\GroupeController::GroupMember'), null, null, null),
                    '/group/accept' => array(array('_route' => 'group_accept', '_controller' => 'App\\Controller\\GroupeController::GroupAccept'), null, null, null),
                    '/tchat' => array(array('_route' => 'ma', '_controller' => 'App\\Controller\\MainController::dkd'), null, null, null),
                    '/dbtchat' => array(array('_route' => 'db tchat', '_controller' => 'App\\Controller\\MainController::dbTchat'), null, null, null),
                    '/Anime' => array(array('_route' => 'anime', '_controller' => 'App\\Controller\\MainController::Anime'), null, null, null),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/menu' => array(array('_route' => 'menu', '_controller' => 'App\\Controller\\BuilderController::mainMenu'), null, null, null),
                    '/recherche/' => array(array('_route' => 'recherche', '_controller' => 'App\\Controller\\MainController::recherche'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/A(?'
                        .'|nime(?'
                            .'|s/([^/]++)(*:29)'
                            .'|/(\\d+)/([^/]++)(*:51)'
                        .')'
                        .'|rticle/([^/]++)(*:74)'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:111)'
                        .'|setting/reset/([^/]++)(*:141)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:181)'
                        .'|wdt/([^/]++)(*:201)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:247)'
                                .'|router(*:261)'
                                .'|exception(?'
                                    .'|(*:281)'
                                    .'|\\.css(*:294)'
                                .')'
                            .')'
                            .'|(*:304)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            29 => array(array('_route' => 'animes', '_controller' => 'App\\Controller\\MainController::HomeAnime'), array('letter'), null, null),
                            51 => array(array('_route' => 'Anime', '_controller' => 'App\\Controller\\MainController::Anime', 'id' => 1), array('id', 'ep'), null, null),
                            74 => array(array('_route' => 'Article', '_controller' => 'App\\Controller\\MainController::Article'), array('page'), null, null),
                            111 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null),
                            141 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                            181 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            201 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            247 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            261 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            281 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            294 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            304 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (304 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
