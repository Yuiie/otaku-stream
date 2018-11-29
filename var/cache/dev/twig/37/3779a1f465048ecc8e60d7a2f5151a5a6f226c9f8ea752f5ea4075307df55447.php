<?php

/* feed/index.html.twig */
class __TwigTemplate_7b3307660732d11d6af044ef5caaeba3fa9046271f872481f4ea7a16b3949b2f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "feed/index.html.twig", 1);
        $this->blocks = array(
            'body_home' => array($this, 'block_body_home'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "native.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

        // line 2
        $context["message"] = (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->source); })());
        // line 3
        $context["listanime"] = (isset($context["anime"]) || array_key_exists("anime", $context) ? $context["anime"] : (function () { throw new Twig_Error_Runtime('Variable "anime" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "/css/feed/index.css\" rel=\"stylesheet\">
            <br /><br />
        ";
        // line 13
        $context["count"] = 0;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayFeed"]) || array_key_exists("arrayFeed", $context) ? $context["arrayFeed"] : (function () { throw new Twig_Error_Runtime('Variable "arrayFeed" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 15
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) == 0) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 15, $this->source); })()) == 0))) {
                // line 16
                echo "                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                            <p style=\"padding-left: 20px\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                            <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                    <input class=\"c-input\" id=\"msg_";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                                var parent = '";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                            <div style=\"margin-bottom:10px\"></div>
            ";
            }
            // line 52
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) == 0) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 52, $this->source); })()) != 0))) {
                // line 53
                echo "                    </div>
                </div>
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                        <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                        <div style=\"margin-top: 10px\" id=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                            <!-- Formulaire -->
                            <form method=\"POST\" name=\"form_";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                <input class=\"c-input\" id=\"msg_";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form_";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg_";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                            var parent = '";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                            <!-- End Formulaire -->
                        </div>
                        <div style=\"margin-bottom:10px\"></div>
            ";
            }
            // line 91
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) != 0)) {
                // line 92
                echo "                    <div class=\"my-card1\">
                        <div class=\"text\">
                            <p style=\"margin-left: 10px\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                                <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                    <input class=\"c-input\" id=\"msg_";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                                var parent = '";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"";
                // line 117
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                        </div>
                    </div>
            ";
            }
            // line 129
            echo "            ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 129, $this->source); })()) + 1);
            // line 130
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>
    </div>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "feed/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 9,  321 => 8,  309 => 133,  305 => 131,  299 => 130,  296 => 129,  281 => 117,  267 => 106,  263 => 105,  258 => 103,  251 => 99,  245 => 98,  240 => 96,  236 => 95,  230 => 94,  226 => 92,  223 => 91,  209 => 80,  195 => 69,  191 => 68,  186 => 66,  179 => 62,  173 => 61,  168 => 59,  164 => 58,  158 => 57,  152 => 53,  149 => 52,  135 => 41,  121 => 30,  117 => 29,  112 => 27,  105 => 23,  99 => 22,  94 => 20,  90 => 19,  84 => 18,  80 => 16,  77 => 15,  72 => 14,  70 => 13,  64 => 11,  62 => 8,  59 => 7,  50 => 6,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'native.html.twig' %}
{% set message = message %}
{% set listanime = anime %}


{% block body_home %}

    {% block stylesheets %}
            {{ parent() }}
    {% endblock %}
    <link href=\"{{ path('index') }}/css/feed/index.css\" rel=\"stylesheet\">
            <br /><br />
        {% set count = 0 %}
        {% for feed in arrayFeed %}
            {% if feed.parent == 0 and count == 0 %}
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                            <p style=\"padding-left: 20px\">{{ feed.pseudo }} {{ feed.message }}</p>
                            <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                    <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_{{ feed.id }}').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_{{ feed.id }}\").val();
                                                var parent = '{{ feed.id }}';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"{{ path('index') }}dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                            <div style=\"margin-bottom:10px\"></div>
            {% endif %}
            {% if feed.parent == 0 and count != 0 %}
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">{{ feed.pseudo }} {{ feed.message }}</p>
                        <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                        <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                            <!-- Formulaire -->
                            <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form_{{ feed.id }}').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg_{{ feed.id }}\").val();
                                            var parent = '{{ feed.id }}';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"{{ path('index') }}dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                            <!-- End Formulaire -->
                        </div>
                        <div style=\"margin-bottom:10px\"></div>
            {% endif %}
            {% if feed.parent != 0 %}
                    <div class=\"my-card1\">
                        <div class=\"text\">
                            <p style=\"margin-left: 10px\">{{ feed.pseudo }} {{ feed.message }}</p>
                                <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                    <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_{{ feed.id }}').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_{{ feed.id }}\").val();
                                                var parent = '{{ feed.id }}';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"{{ path('index') }}dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                        </div>
                    </div>
            {% endif %}
            {% set count = count + 1 %}
        {% endfor %}
        </div>
    </div>
    <script src=\"{{ asset('js/tabs.js') }}\"></script>
{% endblock %}

", "feed/index.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\feed\\index.html.twig");
    }
}
