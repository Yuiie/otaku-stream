<?php

/* TilowebPaginationBundle::pagination.html.twig */
class __TwigTemplate_5a95bfeaf71b0ff33074130bb6a3a62102486cf84e1c54b53bcfb9e0f8964855 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TilowebPaginationBundle::pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TilowebPaginationBundle::pagination.html.twig"));

        // line 1
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    ";
            $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "query", array()), "int", array(0 => (isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 2, $this->source); })()), 1 => 1), "method");
            // line 3
            echo "    <ul class=\"pagination\">
        ";
            // line 4
            if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 4, $this->source); })()) > 2)) {
                // line 5
                echo "            <li class=\"page-item start ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->source); })()) == 1)) {
                    echo "disabled";
                }
                echo "\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 6, $this->source); })()) => 1)))), "html", null, true);
                echo "\" class=\"page-link\">
                    ";
                // line 10
                echo "                </a>
            </li>
        ";
            }
            // line 13
            echo "
        <li class=\"page-item prev ";
            // line 14
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 14, $this->source); })()) == 1)) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 15, $this->source); })()) => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()) - 1))))), "html", null, true);
            echo "\" class=\"page-link\" ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()) > 1)) {
                echo "rel=\"prev\"";
            }
            echo ">
                <img src=\"https://www.pngfactory.net/_png/_1536962425/7840-martin4671-Flechegaucherouge.png\" width=\"20\" height=\"20\">
            </a>
        </li>

        ";
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 21, $this->source); })()) - 4), 1), min(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 21, $this->source); })()) + 4), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 21, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 22
                echo "            <li class=\"page-item ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 22, $this->source); })()))) {
                    echo "active";
                } else {
                    echo "hidden-xs";
                }
                echo "\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 23, $this->source); })()) => $context["p"])))), "html", null, true);
                echo "\" class=\"page-link\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        <li class=\"page-item next ";
            // line 29
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 29, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 29, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 30, $this->source); })()) => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->source); })()) + 1))))), "html", null, true);
            echo "\" class=\"page-link\" ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 30, $this->source); })()))) {
                echo "rel=\"next\"";
            }
            echo ">
                    <img src=\"https://www.pngfactory.net/_png/_1536962425/7839-martin4671-Flechedroiterouge.png\" width=\"20\" height=\"20\">
            </a>
        </li>

        ";
            // line 35
            if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 35, $this->source); })()) > 2)) {
                // line 36
                echo "            <li class=\"page-item end ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 36, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 36, $this->source); })()))) {
                    echo "disabled";
                }
                echo "\">
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 37, $this->source); })()) => (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 37, $this->source); })()))))), "html", null, true);
                echo "\" class=\"page-link\">
                    ";
                // line 39
                echo "                </a>
            </li>
        ";
            }
            // line 42
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TilowebPaginationBundle::pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  138 => 39,  134 => 37,  127 => 36,  125 => 35,  113 => 30,  107 => 29,  104 => 28,  94 => 24,  90 => 23,  81 => 22,  76 => 21,  64 => 15,  58 => 14,  55 => 13,  50 => 10,  46 => 6,  39 => 5,  37 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pages > 1 %}
    {% set page =  app.request.query.int(get, 1) %}
    <ul class=\"pagination\">
        {% if pages > 2 %}
            <li class=\"page-item start {% if page == 1 %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): 1}))) }}\" class=\"page-link\">
                    {#
                    <<
                    #}
                </a>
            </li>
        {% endif %}

        <li class=\"page-item prev {% if page == 1 %}disabled{% endif %}\">
            <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page - 1}))) }}\" class=\"page-link\" {% if page > 1 %}rel=\"prev\"{% endif %}>
                <img src=\"https://www.pngfactory.net/_png/_1536962425/7840-martin4671-Flechegaucherouge.png\" width=\"20\" height=\"20\">
            </a>
        </li>

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(page - 4, 1), min(page + 4, pages)) %}
            <li class=\"page-item {% if p == page %}active{% else %}hidden-xs{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): p}))) }}\" class=\"page-link\">
                    {{ p }}
                </a>
            </li>
        {% endfor %}

        <li class=\"page-item next {% if page == pages %}disabled{% endif %}\">
            <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page +1 }))) }}\" class=\"page-link\" {% if page < pages %}rel=\"next\"{% endif %}>
                    <img src=\"https://www.pngfactory.net/_png/_1536962425/7839-martin4671-Flechedroiterouge.png\" width=\"20\" height=\"20\">
            </a>
        </li>

        {% if pages > 2 %}
            <li class=\"page-item end {% if page == pages %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): pages}))) }}\" class=\"page-link\">
                    {#>>#}
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "TilowebPaginationBundle::pagination.html.twig", "C:\\laragon\\www\\Otaku-Stream\\vendor\\tiloweb\\pagination-bundle\\Tiloweb\\PaginationBundle/Resources/views/pagination.html.twig");
    }
}
