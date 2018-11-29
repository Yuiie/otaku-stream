<?php

/* @TilowebPagination/pagination.html.twig */
class __TwigTemplate_6655d3d7e7831f9f548af72570a2be087738ff44852b17f9547d7e66f12516b8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TilowebPagination/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TilowebPagination/pagination.html.twig"));

        // line 1
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    ";
            $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "query", array()), "int", array(0 => (isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 2, $this->source); })()), 1 => 1), "method");
            // line 3
            echo "                        <ul class=\"c-pagination__list\">
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
                    <<
                </a>
            </li>
        ";
            }
            // line 11
            echo "
        <li class=\"page-item prev ";
            // line 12
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 12, $this->source); })()) == 1)) {
                echo "disabled";
            }
            echo "\">

            <li class=\"c-pagination__item\">
                                <a class=\"c-pagination__control\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 15, $this->source); })()) => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()) - 1))))), "html", null, true);
            echo "\" ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()) > 1)) {
                echo "rel=\"prev\"";
            }
            echo ">
                                    <i class=\"fa fa-caret-left\"></i>
                                </a>
                            </li>
        </li>

        ";
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 22, $this->source); })()) - 4), 1), min(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 22, $this->source); })()) + 4), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 22, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "            <li class=\"page-item ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->source); })()))) {
                    echo "active";
                } else {
                    echo "hidden-xs";
                }
                echo "\">
                  <li class=\"c-pagination__item\"><a class=\"c-pagination__link\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 24, $this->source); })()) => $context["p"])))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a></li>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        <li class=\"page-item next ";
            // line 28
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 28, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 28, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
        <li class=\"c-pagination__item\">
                                <a class=\"c-pagination__control\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 30, $this->source); })()) => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->source); })()) + 1))))), "html", null, true);
            echo "\" ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 30, $this->source); })()))) {
                echo "rel=\"next\"";
            }
            echo ">
                                    <i class=\"fa fa-caret-right\"></i>
                                </a>
                            </li>
        </li>

        ";
            // line 36
            if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 36, $this->source); })()) > 2)) {
                // line 37
                echo "            <li class=\"page-item end ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 37, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 37, $this->source); })()))) {
                    echo "disabled";
                }
                echo "\">
                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "request", array()), "query", array()), "all", array()), array((isset($context["get"]) || array_key_exists("get", $context) ? $context["get"] : (function () { throw new Twig_Error_Runtime('Variable "get" does not exist.', 38, $this->source); })()) => (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 38, $this->source); })()))))), "html", null, true);
                echo "\" class=\"page-link\">
                    >>
                </a>
            </li>
        ";
            }
            // line 43
            echo "     </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@TilowebPagination/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  135 => 38,  128 => 37,  126 => 36,  113 => 30,  106 => 28,  103 => 27,  92 => 24,  83 => 23,  78 => 22,  65 => 15,  57 => 12,  54 => 11,  46 => 6,  39 => 5,  37 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pages > 1 %}
    {% set page =  app.request.query.int(get, 1) %}
                        <ul class=\"c-pagination__list\">
        {% if pages > 2 %}
            <li class=\"page-item start {% if page == 1 %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): 1}))) }}\" class=\"page-link\">
                    <<
                </a>
            </li>
        {% endif %}

        <li class=\"page-item prev {% if page == 1 %}disabled{% endif %}\">

            <li class=\"c-pagination__item\">
                                <a class=\"c-pagination__control\" href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page - 1}))) }}\" {% if page > 1 %}rel=\"prev\"{% endif %}>
                                    <i class=\"fa fa-caret-left\"></i>
                                </a>
                            </li>
        </li>

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(page - 4, 1), min(page + 4, pages)) %}
            <li class=\"page-item {% if p == page %}active{% else %}hidden-xs{% endif %}\">
                  <li class=\"c-pagination__item\"><a class=\"c-pagination__link\" href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): p}))) }}\">{{ p }}</a></li>
            </li>
        {% endfor %}

        <li class=\"page-item next {% if page == pages %}disabled{% endif %}\">
        <li class=\"c-pagination__item\">
                                <a class=\"c-pagination__control\" href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): page +1 }))) }}\" {% if page < pages %}rel=\"next\"{% endif %}>
                                    <i class=\"fa fa-caret-right\"></i>
                                </a>
                            </li>
        </li>

        {% if pages > 2 %}
            <li class=\"page-item end {% if page == pages %}disabled{% endif %}\">
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all|merge({(get): pages}))) }}\" class=\"page-link\">
                    >>
                </a>
            </li>
        {% endif %}
     </ul>
{% endif %}
", "@TilowebPagination/pagination.html.twig", "C:\\xampp\\htdocs\\airi\\vendor\\tiloweb\\pagination-bundle\\Tiloweb\\PaginationBundle\\Resources\\views\\pagination.html.twig");
    }
}
