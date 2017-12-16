<?php

/* ::base.html.twig */
class __TwigTemplate_667bd328f123b816040981999141982f6cbf19b0d2ea556d84210f86e4c44f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'tabla' => array($this, 'block_tabla'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda5a6f54ef9369231c38daed0a60bbfff9dde4613f1aa76cae8108f40dd64e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda5a6f54ef9369231c38daed0a60bbfff9dde4613f1aa76cae8108f40dd64e5->enter($__internal_fda5a6f54ef9369231c38daed0a60bbfff9dde4613f1aa76cae8108f40dd64e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 48
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 54
        echo "        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_fda5a6f54ef9369231c38daed0a60bbfff9dde4613f1aa76cae8108f40dd64e5->leave($__internal_fda5a6f54ef9369231c38daed0a60bbfff9dde4613f1aa76cae8108f40dd64e5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2258c0d862bbbb62dcf7133b600a866814e9d7655e13ffcc2f2b66349e7f5cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2258c0d862bbbb62dcf7133b600a866814e9d7655e13ffcc2f2b66349e7f5cdb->enter($__internal_2258c0d862bbbb62dcf7133b600a866814e9d7655e13ffcc2f2b66349e7f5cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2258c0d862bbbb62dcf7133b600a866814e9d7655e13ffcc2f2b66349e7f5cdb->leave($__internal_2258c0d862bbbb62dcf7133b600a866814e9d7655e13ffcc2f2b66349e7f5cdb_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5340c700708a2d2e7ed83a25c8b5eac0d2be7602b1a32cdd7107abef258a604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5340c700708a2d2e7ed83a25c8b5eac0d2be7602b1a32cdd7107abef258a604->enter($__internal_a5340c700708a2d2e7ed83a25c8b5eac0d2be7602b1a32cdd7107abef258a604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_a5340c700708a2d2e7ed83a25c8b5eac0d2be7602b1a32cdd7107abef258a604->leave($__internal_a5340c700708a2d2e7ed83a25c8b5eac0d2be7602b1a32cdd7107abef258a604_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b55aa642ebe335b4931652100edd7836710b9acc5b87dd94676d964389e50547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55aa642ebe335b4931652100edd7836710b9acc5b87dd94676d964389e50547->enter($__internal_b55aa642ebe335b4931652100edd7836710b9acc5b87dd94676d964389e50547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 28
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 30
        echo "                            </ul>
                        </nav>
                    ";
        
        $__internal_b55aa642ebe335b4931652100edd7836710b9acc5b87dd94676d964389e50547->leave($__internal_b55aa642ebe335b4931652100edd7836710b9acc5b87dd94676d964389e50547_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_2755345923904d1b65ad41dc3a83f56760adea4d68d35487d9310ea9b90cc643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2755345923904d1b65ad41dc3a83f56760adea4d68d35487d9310ea9b90cc643->enter($__internal_2755345923904d1b65ad41dc3a83f56760adea4d68d35487d9310ea9b90cc643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2755345923904d1b65ad41dc3a83f56760adea4d68d35487d9310ea9b90cc643->leave($__internal_2755345923904d1b65ad41dc3a83f56760adea4d68d35487d9310ea9b90cc643_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_455d706e11e84a4ec763fef1ace59dd0bbd33630faabb0d07a70ceb29b1c0dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455d706e11e84a4ec763fef1ace59dd0bbd33630faabb0d07a70ceb29b1c0dd7->enter($__internal_455d706e11e84a4ec763fef1ace59dd0bbd33630faabb0d07a70ceb29b1c0dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_455d706e11e84a4ec763fef1ace59dd0bbd33630faabb0d07a70ceb29b1c0dd7->leave($__internal_455d706e11e84a4ec763fef1ace59dd0bbd33630faabb0d07a70ceb29b1c0dd7_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_0ce3244c998be3a3177466b97d9cefdb733741a21728441a8a04b0344ee8bec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce3244c998be3a3177466b97d9cefdb733741a21728441a8a04b0344ee8bec7->enter($__internal_0ce3244c998be3a3177466b97d9cefdb733741a21728441a8a04b0344ee8bec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_0ce3244c998be3a3177466b97d9cefdb733741a21728441a8a04b0344ee8bec7->leave($__internal_0ce3244c998be3a3177466b97d9cefdb733741a21728441a8a04b0344ee8bec7_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3533e81c9b068b90975fc8e253ec1884069f659c93fb9d909087db939610236e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3533e81c9b068b90975fc8e253ec1884069f659c93fb9d909087db939610236e->enter($__internal_3533e81c9b068b90975fc8e253ec1884069f659c93fb9d909087db939610236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3533e81c9b068b90975fc8e253ec1884069f659c93fb9d909087db939610236e->leave($__internal_3533e81c9b068b90975fc8e253ec1884069f659c93fb9d909087db939610236e_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e4a439bf1732797bb8c821aace113658283feaef68b3a9600fa32809d3734d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a439bf1732797bb8c821aace113658283feaef68b3a9600fa32809d3734d72->enter($__internal_e4a439bf1732797bb8c821aace113658283feaef68b3a9600fa32809d3734d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e4a439bf1732797bb8c821aace113658283feaef68b3a9600fa32809d3734d72->leave($__internal_e4a439bf1732797bb8c821aace113658283feaef68b3a9600fa32809d3734d72_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_9653df4c37e42f9888ca6c62b9cc5ce09e58fba6b048a74a6d2f326e15d073b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9653df4c37e42f9888ca6c62b9cc5ce09e58fba6b048a74a6d2f326e15d073b6->enter($__internal_9653df4c37e42f9888ca6c62b9cc5ce09e58fba6b048a74a6d2f326e15d073b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_9653df4c37e42f9888ca6c62b9cc5ce09e58fba6b048a74a6d2f326e15d073b6->leave($__internal_9653df4c37e42f9888ca6c62b9cc5ce09e58fba6b048a74a6d2f326e15d073b6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 53,  227 => 52,  216 => 51,  205 => 47,  194 => 46,  183 => 34,  174 => 30,  168 => 28,  162 => 26,  160 => 25,  156 => 24,  152 => 23,  148 => 21,  142 => 20,  134 => 14,  128 => 13,  119 => 11,  113 => 7,  107 => 6,  87 => 54,  84 => 53,  81 => 52,  79 => 51,  74 => 48,  71 => 47,  69 => 46,  54 => 34,  51 => 33,  49 => 20,  43 => 16,  40 => 13,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        {% block javascripts %}
            
        {% endblock %}
    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"{{ path('congreso_congreso_list')}}\">Inicio</a></li>
                                <li><a href=\"{{ path('congreso_congreso_contact')}}\">Contacto</a></li>
                                {% if is_granted('ROLE_ADMIN')%}
                                    <li><a href=\"{{ path('congreso_admin_logout')}}\">Salir</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('congreso_admin_login')}}\">Entrar</a></li>
                                {% endif %}
                            </ul>
                        </nav>
                    {% endblock %}
                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">{% block title %}{% endblock %}</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
            {% block tabla %}{% endblock %}
        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            {% block sidebar %}{% endblock %}
            {% block linea %}{% endblock %}
            {% block sidebar1 %}{% endblock %}
        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
