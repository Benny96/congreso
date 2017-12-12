<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_9a9abb82a8a5479857aa6d906a4e0d21f90a9633f6c0d25ec840819c723e53d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:list.html.twig", 2);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e344bc83debbc5cd5403120174a59db11a8a1203e2b066afd62b38f373ed366e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e344bc83debbc5cd5403120174a59db11a8a1203e2b066afd62b38f373ed366e->enter($__internal_e344bc83debbc5cd5403120174a59db11a8a1203e2b066afd62b38f373ed366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e344bc83debbc5cd5403120174a59db11a8a1203e2b066afd62b38f373ed366e->leave($__internal_e344bc83debbc5cd5403120174a59db11a8a1203e2b066afd62b38f373ed366e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21e370bcca00e250a7f027161e625d894380598c0feddd0b3034a8f840b29490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e370bcca00e250a7f027161e625d894380598c0feddd0b3034a8f840b29490->enter($__internal_21e370bcca00e250a7f027161e625d894380598c0feddd0b3034a8f840b29490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_21e370bcca00e250a7f027161e625d894380598c0feddd0b3034a8f840b29490->leave($__internal_21e370bcca00e250a7f027161e625d894380598c0feddd0b3034a8f840b29490_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebbb954e13cc0abf0ff8ff704d77680b79a520e1dc1f4038981ddf4533c709db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbb954e13cc0abf0ff8ff704d77680b79a520e1dc1f4038981ddf4533c709db->enter($__internal_ebbb954e13cc0abf0ff8ff704d77680b79a520e1dc1f4038981ddf4533c709db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "Congreso Científico
";
        
        $__internal_ebbb954e13cc0abf0ff8ff704d77680b79a520e1dc1f4038981ddf4533c709db->leave($__internal_ebbb954e13cc0abf0ff8ff704d77680b79a520e1dc1f4038981ddf4533c709db_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_337281598113d18b3783c6089093fe2127681c3929c17a354881c0370934a7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337281598113d18b3783c6089093fe2127681c3929c17a354881c0370934a7ea->enter($__internal_337281598113d18b3783c6089093fe2127681c3929c17a354881c0370934a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"lista-ocultar\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 21
            echo "    <holi class=\"track\">
        <header>
            <h3><a id=\"nombre-temas\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h3>            
        </header>
        <div id=\"lista-ocultar1\">
        ";
            // line 26
            $context["i"] = 0;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 28
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($context["articulo"], "track", array()), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 29
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 30
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    ";
                    // line 32
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                        // line 33
                        echo "                        1
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 34
$context["articulo"], "publicacion", array()), "d") == "02")) {
                        // line 35
                        echo "                        2
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 36
$context["articulo"], "publicacion", array()), "d") == "03")) {
                        // line 37
                        echo "                        3
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 38
$context["articulo"], "publicacion", array()), "d") == "04")) {
                        // line 39
                        echo "                        4
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 40
$context["articulo"], "publicacion", array()), "d") == "05")) {
                        // line 41
                        echo "                        5
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 42
$context["articulo"], "publicacion", array()), "d") == "06")) {
                        // line 43
                        echo "                        6
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 44
$context["articulo"], "publicacion", array()), "d") == "07")) {
                        // line 45
                        echo "                        7
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 46
$context["articulo"], "publicacion", array()), "d") == "08")) {
                        // line 47
                        echo "                        8
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 48
$context["articulo"], "publicacion", array()), "d") == "09")) {
                        // line 49
                        echo "                        9
                    ";
                    } else {
                        // line 51
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 53
                    echo "
                    de 

                    ";
                    // line 56
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                        // line 57
                        echo "                        enero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 58
$context["articulo"], "publicacion", array()), "m") == "02")) {
                        // line 59
                        echo "                        febrero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 60
$context["articulo"], "publicacion", array()), "m") == "03")) {
                        // line 61
                        echo "                        marzo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 62
$context["articulo"], "publicacion", array()), "m") == "04")) {
                        // line 63
                        echo "                        abril
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 64
$context["articulo"], "publicacion", array()), "m") == "05")) {
                        // line 65
                        echo "                        mayo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 66
$context["articulo"], "publicacion", array()), "m") == "06")) {
                        // line 67
                        echo "                        junio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 68
$context["articulo"], "publicacion", array()), "m") == "07")) {
                        // line 69
                        echo "                        julio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 70
$context["articulo"], "publicacion", array()), "m") == "08")) {
                        // line 71
                        echo "                        agosto
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 72
$context["articulo"], "publicacion", array()), "m") == "09")) {
                        // line 73
                        echo "                        septiembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 74
$context["articulo"], "publicacion", array()), "m") == "10")) {
                        // line 75
                        echo "                        octubre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 76
$context["articulo"], "publicacion", array()), "m") == "11")) {
                        // line 77
                        echo "                        noviembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 78
$context["articulo"], "publicacion", array()), "m") == "12")) {
                        // line 79
                        echo "                        diciembre
                    ";
                    }
                    // line 81
                    echo "                    
                     de ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
                    echo "</p>
                    <header>
                        <h2><a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 88
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 97
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 98
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
        </div>
    </holi>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "        <p>aaaaa</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </div>
";
        
        $__internal_337281598113d18b3783c6089093fe2127681c3929c17a354881c0370934a7ea->leave($__internal_337281598113d18b3783c6089093fe2127681c3929c17a354881c0370934a7ea_prof);

    }

    // line 110
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1e2ff13546b67cb00dd56eeb58e5a9e8cd03aa04fd80ca0a6e7d5047d152bee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2ff13546b67cb00dd56eeb58e5a9e8cd03aa04fd80ca0a6e7d5047d152bee7->enter($__internal_1e2ff13546b67cb00dd56eeb58e5a9e8cd03aa04fd80ca0a6e7d5047d152bee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 111
        echo "




    <ul>
        <li><a href=\"/contact\">Contacto</a></li>
    </ul>

    <div class=\"separator\"></div>
    <p>¿Quieres saber la fecha y hora actuales?</p>


    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
";
        
        $__internal_1e2ff13546b67cb00dd56eeb58e5a9e8cd03aa04fd80ca0a6e7d5047d152bee7->leave($__internal_1e2ff13546b67cb00dd56eeb58e5a9e8cd03aa04fd80ca0a6e7d5047d152bee7_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 111,  316 => 110,  308 => 107,  300 => 104,  292 => 100,  285 => 98,  280 => 97,  273 => 93,  266 => 89,  262 => 88,  253 => 84,  248 => 82,  245 => 81,  241 => 79,  239 => 78,  236 => 77,  234 => 76,  231 => 75,  229 => 74,  226 => 73,  224 => 72,  221 => 71,  219 => 70,  216 => 69,  214 => 68,  211 => 67,  209 => 66,  206 => 65,  204 => 64,  201 => 63,  199 => 62,  196 => 61,  194 => 60,  191 => 59,  189 => 58,  186 => 57,  184 => 56,  179 => 53,  173 => 51,  169 => 49,  167 => 48,  164 => 47,  162 => 46,  159 => 45,  157 => 44,  154 => 43,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  137 => 36,  134 => 35,  132 => 34,  129 => 33,  127 => 32,  123 => 30,  120 => 29,  117 => 28,  111 => 27,  109 => 26,  101 => 23,  97 => 21,  92 => 20,  89 => 19,  83 => 18,  75 => 15,  69 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/list.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}


{% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery1.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.qtip-1.0.0-rc3.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script1.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script2.js') }}\"></script>
{% endblock %}


{% block title %}
Congreso Científico
{% endblock %}

{% block body %}
    <div id=\"lista-ocultar\">
    {% for track in tracks %}
    <holi class=\"track\">
        <header>
            <h3><a id=\"nombre-temas\" href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></h3>            
        </header>
        <div id=\"lista-ocultar1\">
        {% set i = 0 %}
        {% for articulo in articulos %}
            {% if track.id==articulo.track.id and i<2 %}
                {% set i = i+1 %}
                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    {% if articulo.publicacion|date('d') ==  \"01\" %}
                        1
                    {% elseif articulo.publicacion|date('d') ==  \"02\" %}
                        2
                    {% elseif articulo.publicacion|date('d') ==  \"03\" %}
                        3
                    {% elseif articulo.publicacion|date('d') ==  \"04\" %}
                        4
                    {% elseif articulo.publicacion|date('d') ==  \"05\" %}
                        5
                    {% elseif articulo.publicacion|date('d') ==  \"06\" %}
                        6
                    {% elseif articulo.publicacion|date('d') ==  \"07\" %}
                        7
                    {% elseif articulo.publicacion|date('d') ==  \"08\" %}
                        8
                    {% elseif articulo.publicacion|date('d') ==  \"09\" %}
                        9
                    {% else %}
                        {{ articulo.publicacion|date('d') }}
                    {% endif %}

                    de 

                    {% if articulo.publicacion|date('m') ==  \"01\" %}
                        enero
                    {% elseif articulo.publicacion|date('m') ==  \"02\" %}
                        febrero
                    {% elseif articulo.publicacion|date('m') ==  \"03\" %}
                        marzo
                    {% elseif articulo.publicacion|date('m') ==  \"04\" %}
                        abril
                    {% elseif articulo.publicacion|date('m') ==  \"05\" %}
                        mayo
                    {% elseif articulo.publicacion|date('m') ==  \"06\" %}
                        junio
                    {% elseif articulo.publicacion|date('m') ==  \"07\" %}
                        julio
                    {% elseif articulo.publicacion|date('m') ==  \"08\" %}
                        agosto
                    {% elseif articulo.publicacion|date('m') ==  \"09\" %}
                        septiembre
                    {% elseif articulo.publicacion|date('m') ==  \"10\" %}
                        octubre
                    {% elseif articulo.publicacion|date('m') ==  \"11\" %}
                        noviembre
                    {% elseif articulo.publicacion|date('m') ==  \"12\" %}
                        diciembre
                    {% endif %}
                    
                     de {{ articulo.publicacion|date('Y') }}</p>
                    <header>
                        <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>{{ articulo.cuerpo|slice(0, 400) ~ '...' }}</p>
                        <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: {{articulo.numberofcomments}}</p>
                    </footer>
                </article>
            {% endif %}
        {% else %}
            <p>No hay entradas en este blog</p>
        {% endfor %}

        </div>
    </holi>
    {% else %}
        <p>aaaaa</p>

    {% endfor %}
    </div>
{% endblock %}

{% block sidebar %}





    <ul>
        <li><a href=\"/contact\">Contacto</a></li>
    </ul>

    <div class=\"separator\"></div>
    <p>¿Quieres saber la fecha y hora actuales?</p>


    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
{% endblock %}

", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
