<?php

/* native.html.twig */
class __TwigTemplate_969c3ef9ebf703cd09cd0a9a121e44b508a034cce7fed4c4223f04d986d69e4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body_home' => array($this, 'block_body_home'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "native.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "native.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Otaku-Stream</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"o-page\" style=\"background-color: #524D4C\">
        <div class=\"o-page__sidebar js-page-sidebar\">
            <div class=\"c-sidebar\">
                <a class=\"c-sidebar__brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    <img class=\"c-sidebar__brand-img\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"> Otaku-Stream
                </a>
                <h4 class=\"c-sidebar__title\">Dashboards</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                            <i class=\"fa fa-home u-mr-xsmall\"></i>Acceuil
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"performance.html\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Performance <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"analytics.html\">
                            <i class=\"fa fa-line-chart u-mr-xsmall\"></i>Analytics
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"index.html\">
                            <i class=\"fa fa-rocket u-mr-xsmall\"></i>Landing
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"projects.html\">
                            <i class=\"fa fa-table u-mr-xsmall\"></i>Projects
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Apps</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"boards.html\">
                            <i class=\"fa fa-hand-paper-o u-mr-xsmall\"></i>Boards (CRM)
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"calendar.html\">
                            <i class=\"fa fa-calendar u-mr-xsmall\"></i>Calendar
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"news-feed.html\">
                            <i class=\"fa fa-newspaper-o u-mr-xsmall\"></i>News Feed
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"messanger.html\">
                            <i class=\"fa fa-comments-o u-mr-xsmall\"></i>Messanger
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"projects-board.html\">
                            <i class=\"fa fa-window-restore u-mr-xsmall\"></i>Projects Board
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Pages</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"user-profile.html\">
                            <i class=\"fa fa-street-view u-mr-xsmall\"></i>User Profile 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"candidates.html\">
                            <i class=\"fa fa-users u-mr-xsmall\"></i>Candidates
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"invoices.html\">
                            <i class=\"fa fa-files-o u-mr-xsmall\"></i>Invoices
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"invoice.html\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Single Invoice 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"browse.html\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Browse
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link is-active\" href=\"active-projects.html\">
                            <i class=\"fa fa-folder u-mr-xsmall\"></i>Active Projects
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"project-overview.html\">
                            <i class=\"fa fa-flag-checkered u-mr-xsmall\"></i>Project Overview <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"chat-dialogue.html\">
                            <i class=\"fa fa-comment-o u-mr-xsmall\"></i>Chat Dialogue <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                            <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Events
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ios-apps-list.html\">
                            <i class=\"fa fa-apple u-mr-xsmall\"></i>iOS Apps List
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"plans.html\">
                            <i class=\"fa fa-bullhorn u-mr-xsmall\"></i>Pricing
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"under-maintenance.html\">
                            <i class=\"fa fa-cogs u-mr-xsmall\"></i>Under Maintenance 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"404.html\">
                            <i class=\"fa fa-chain-broken u-mr-xsmall\"></i>404 Page
                        </a>
                    </li>


                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#sidebar-submenu\" aria-expanded=\"false\" aria-controls=\"sidebar-submenu\">
                            <i class=\"fa fa-caret-square-o-down u-mr-xsmall\"></i>Sub Menu
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"sidebar-submenu\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                        </ul>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Account</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                            <i class=\"fa fa-user-circle u-mr-xsmall\"></i>Account Details
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"account-settings.html\">
                            <i class=\"fa fa-cog u-mr-xsmall\"></i>Account Settings
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                            <i class=\"fa fa-user-plus u-mr-xsmall\"></i>Register
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"forgot-password.html\">
                            <i class=\"fa fa-lock u-mr-xsmall\"></i>Forgot Password
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"reset-password.html\">
                            <i class=\"fa fa-refresh u-mr-xsmall\"></i>Reset Password
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                            <i class=\"fa fa-sign-in u-mr-xsmall\"></i>Login
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Dashboard UI Kit</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ui-overview.html\">
                            <i class=\"fa fa-mouse-pointer u-mr-xsmall\"></i>UI Overview <span class=\"c-badge c-badge--info c-badge--xsmall u-ml-xsmall\">Updated</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/docs\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Documentation
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/changelog\">
                            <i class=\"fa fa-tag u-mr-xsmall\"></i>Changelog
                        </a>
                    </li>
                </ul>

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->
        
        <div class=\"o-page__content\" style=\"background-color: #524D4C\">
             <header class=\"c-navbar\" style=\"background-color: #2e333a;border-bottom: 1px solid #b1e1e7;\">

                <button class=\"c-sidebar-toggle js-sidebar-toggle\">
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                </button>


                <h2 class=\"c-navbar__title u-mr-auto\" style=\"\">Projects</h2>

<!-- Barre de recherche -->
    <div class=\"c-dropdown dropdown u-mr-medium u-hidden-down@mobile\">
            <a class=\"c-notification dropdown-toggle inline\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <label class=\"u-hidden-visually\" for=\"navbar-search-small\">Seach</label>
                    <input class=\"c-input\" id=\"navbar-search-small\" type=\"text\" placeholder=\"Search\">
            </a>

            <a class=\"c-notification dropdown-toggle inline\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"c-field__icon\">
                        <i class=\"fa fa-search\"></i> 
                </span> 
            </a>
    </div>

                <div class=\"c-dropdown dropdown u-mr-medium\">
                    <a class=\"c-notification dropdown-toggle\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"c-notification__icon\">
                            <i class=\"fa fa-bell-o\"></i>
                        </span>
                        <span class=\"c-notification__number\">3</span>
                    </a>

                    <div class=\"c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuAlerts\">
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-check u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Completed a task</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-calendar u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Company meetup</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-info u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Someone mentioned you</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"c-dropdown dropdown\">
                    <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"c-avatar__img\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar-72.jpg"), "html", null, true);
        echo "\" alt=\"User's Profile Picture\">
                    </a>

                    <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                        <a class=\"c-dropdown__item dropdown-item\" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Edit Profile</a>
                        <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                        <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Logout</a>
                    </div>
            </header>
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 col-xl-9 u-p-zero\" style=\"background-color: #524D4C\">
                        

                    ";
        // line 344
        echo "                    ";
        // line 345
        echo "                    ";
        $this->displayBlock('body_home', $context, $blocks);
        // line 347
        echo "                    </div>

                   
                </div>
            </div>

        </div>
        ";
        // line 362
        echo "

    </body>

         ";
        // line 366
        $this->loadTemplate("tchat.html.twig", "native.html.twig", 366)->display(array_merge($context, array("message" => (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 366, $this->source); })()))));
        // line 367
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 345
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 346
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "native.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 346,  436 => 345,  426 => 367,  424 => 366,  418 => 362,  409 => 347,  406 => 345,  404 => 344,  390 => 332,  383 => 328,  267 => 215,  246 => 197,  231 => 185,  73 => 30,  65 => 25,  61 => 24,  53 => 19,  49 => 18,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Otaku-Stream</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/main.min.css') }}\" rel=\"stylesheet\">
    </head>
    <body class=\"o-page\" style=\"background-color: #524D4C\">
        <div class=\"o-page__sidebar js-page-sidebar\">
            <div class=\"c-sidebar\">
                <a class=\"c-sidebar__brand\" href=\"{{ path('index') }}\">
                    <img class=\"c-sidebar__brand-img\" src=\"{{ asset('assets/img/logo.png') }}\" alt=\"Logo\"> Otaku-Stream
                </a>
                <h4 class=\"c-sidebar__title\">Dashboards</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"{{ path('index') }}\">
                            <i class=\"fa fa-home u-mr-xsmall\"></i>Acceuil
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"performance.html\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Performance <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"analytics.html\">
                            <i class=\"fa fa-line-chart u-mr-xsmall\"></i>Analytics
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"index.html\">
                            <i class=\"fa fa-rocket u-mr-xsmall\"></i>Landing
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"projects.html\">
                            <i class=\"fa fa-table u-mr-xsmall\"></i>Projects
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Apps</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"boards.html\">
                            <i class=\"fa fa-hand-paper-o u-mr-xsmall\"></i>Boards (CRM)
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"calendar.html\">
                            <i class=\"fa fa-calendar u-mr-xsmall\"></i>Calendar
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"news-feed.html\">
                            <i class=\"fa fa-newspaper-o u-mr-xsmall\"></i>News Feed
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"messanger.html\">
                            <i class=\"fa fa-comments-o u-mr-xsmall\"></i>Messanger
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"projects-board.html\">
                            <i class=\"fa fa-window-restore u-mr-xsmall\"></i>Projects Board
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Pages</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"user-profile.html\">
                            <i class=\"fa fa-street-view u-mr-xsmall\"></i>User Profile 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"candidates.html\">
                            <i class=\"fa fa-users u-mr-xsmall\"></i>Candidates
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"invoices.html\">
                            <i class=\"fa fa-files-o u-mr-xsmall\"></i>Invoices
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"invoice.html\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Single Invoice 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"browse.html\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Browse
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link is-active\" href=\"active-projects.html\">
                            <i class=\"fa fa-folder u-mr-xsmall\"></i>Active Projects
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"project-overview.html\">
                            <i class=\"fa fa-flag-checkered u-mr-xsmall\"></i>Project Overview <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"chat-dialogue.html\">
                            <i class=\"fa fa-comment-o u-mr-xsmall\"></i>Chat Dialogue <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                            <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Events
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ios-apps-list.html\">
                            <i class=\"fa fa-apple u-mr-xsmall\"></i>iOS Apps List
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"plans.html\">
                            <i class=\"fa fa-bullhorn u-mr-xsmall\"></i>Pricing
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"under-maintenance.html\">
                            <i class=\"fa fa-cogs u-mr-xsmall\"></i>Under Maintenance 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"404.html\">
                            <i class=\"fa fa-chain-broken u-mr-xsmall\"></i>404 Page
                        </a>
                    </li>


                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#sidebar-submenu\" aria-expanded=\"false\" aria-controls=\"sidebar-submenu\">
                            <i class=\"fa fa-caret-square-o-down u-mr-xsmall\"></i>Sub Menu
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"sidebar-submenu\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Submenu link</a></li>
                        </ul>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Account</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"{{ path('login') }}\">
                            <i class=\"fa fa-user-circle u-mr-xsmall\"></i>Account Details
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"account-settings.html\">
                            <i class=\"fa fa-cog u-mr-xsmall\"></i>Account Settings
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"{{ path('login') }}\">
                            <i class=\"fa fa-user-plus u-mr-xsmall\"></i>Register
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"forgot-password.html\">
                            <i class=\"fa fa-lock u-mr-xsmall\"></i>Forgot Password
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"reset-password.html\">
                            <i class=\"fa fa-refresh u-mr-xsmall\"></i>Reset Password
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"{{ path('login') }}\">
                            <i class=\"fa fa-sign-in u-mr-xsmall\"></i>Login
                        </a>
                    </li>
                </ul>

                <h4 class=\"c-sidebar__title\">Dashboard UI Kit</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ui-overview.html\">
                            <i class=\"fa fa-mouse-pointer u-mr-xsmall\"></i>UI Overview <span class=\"c-badge c-badge--info c-badge--xsmall u-ml-xsmall\">Updated</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/docs\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Documentation
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/changelog\">
                            <i class=\"fa fa-tag u-mr-xsmall\"></i>Changelog
                        </a>
                    </li>
                </ul>

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->
        
        <div class=\"o-page__content\" style=\"background-color: #524D4C\">
             <header class=\"c-navbar\" style=\"background-color: #2e333a;border-bottom: 1px solid #b1e1e7;\">

                <button class=\"c-sidebar-toggle js-sidebar-toggle\">
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                </button>


                <h2 class=\"c-navbar__title u-mr-auto\" style=\"\">Projects</h2>

<!-- Barre de recherche -->
    <div class=\"c-dropdown dropdown u-mr-medium u-hidden-down@mobile\">
            <a class=\"c-notification dropdown-toggle inline\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <label class=\"u-hidden-visually\" for=\"navbar-search-small\">Seach</label>
                    <input class=\"c-input\" id=\"navbar-search-small\" type=\"text\" placeholder=\"Search\">
            </a>

            <a class=\"c-notification dropdown-toggle inline\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"c-field__icon\">
                        <i class=\"fa fa-search\"></i> 
                </span> 
            </a>
    </div>

                <div class=\"c-dropdown dropdown u-mr-medium\">
                    <a class=\"c-notification dropdown-toggle\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"c-notification__icon\">
                            <i class=\"fa fa-bell-o\"></i>
                        </span>
                        <span class=\"c-notification__number\">3</span>
                    </a>

                    <div class=\"c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuAlerts\">
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-check u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Completed a task</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-calendar u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Company meetup</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-info u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Someone mentioned you</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"c-dropdown dropdown\">
                    <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"c-avatar__img\" src=\"{{ asset('assets/img/avatar-72.jpg') }}\" alt=\"User's Profile Picture\">
                    </a>

                    <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                        <a class=\"c-dropdown__item dropdown-item\" href=\"{{ path('login') }}\">Edit Profile</a>
                        <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                        <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Logout</a>
                    </div>
            </header>
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12 col-xl-9 u-p-zero\" style=\"background-color: #524D4C\">
                        

                    {# block recherche %}{% endblock #}
                    {# block body_tchat %}{% endblock #}
                    {% block body_home %}
                    {% endblock %}
                    </div>

                   
                </div>
            </div>

        </div>
        {# Recherche 
{% if app.request.query.get(\"recherche\") is not empty %}
{{ render(controller(
        'App\\\\Controller\\\\MainController::recherche',
        { 'nom': app.request.query.get(\"recherche\") }
    )) }}
{% endif %}
        #}


    </body>

         {% include 'tchat.html.twig' with {\"message\": message } %}
</html>", "native.html.twig", "C:\\xampp\\htdocs\\Otaku-Stream\\templates\\native.html.twig");
    }
}
