<?php

/* main/home.html.twig */
class __TwigTemplate_3943f58348ac4a50160d150895b3e44932a55552b93282c32ccaf635b627ce25 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "main/home.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_home' => array($this, 'block_body_home'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "native.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        // line 2
        $context["message"] = (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->source); })());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"css/main.min.css\">
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 15
        echo "
     <div class=\"row u-m-small\">
     ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listarticle"]) || array_key_exists("listarticle", $context) ? $context["listarticle"] : (function () { throw new Twig_Error_Runtime('Variable "listarticle" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 18
            echo "                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "image", array()), "html", null, true);
            echo "\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "id", array()), "ep" => twig_get_attribute($this->env, $this->source, $context["article"], "episode", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "episode", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Gourmet | Last Update: 29 Dec 2017</p>
                                        </div>
                                        

                                        <div class=\"c-project-card__meta\">
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " ";
        // line 42
        echo " <tfoot>
 
        <tr>
                ";
        // line 45
        echo $this->extensions['Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension']->paginationFunction((isset($context["listarticle"]) || array_key_exists("listarticle", $context) ? $context["listarticle"] : (function () { throw new Twig_Error_Runtime('Variable "listarticle" does not exist.', 45, $this->source); })()), "page");
        echo "
        </tr>
</tfoot>
        </div><!-- // .row -->
        <script src=\"js/main.min.js\"></script>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  132 => 42,  130 => 40,  106 => 26,  99 => 22,  93 => 18,  89 => 17,  85 => 15,  76 => 14,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'native.html.twig' %}
{% set message = message %}

{% block stylesheets %}
            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"css/main.min.css\">
            
{% endblock %}

{% block body_home %}

     <div class=\"row u-m-small\">
     {% for article in listarticle %}
                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"{{ article.anime.image }}\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': article.anime.id , 'ep': article.episode }) }}\">{{ article.anime.nom }} {{ article.episode }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Gourmet | Last Update: 29 Dec 2017</p>
                                        </div>
                                        

                                        <div class=\"c-project-card__meta\">
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 {% endfor %}
 {#
 #}
 <tfoot>
 
        <tr>
                {{ pagination(listarticle, 'page') }}
        </tr>
</tfoot>
        </div><!-- // .row -->
        <script src=\"js/main.min.js\"></script>
    

{% endblock %}
", "main/home.html.twig", "C:\\xampp\\htdocs\\Otaku-Stream\\templates\\main\\home.html.twig");
    }
}
