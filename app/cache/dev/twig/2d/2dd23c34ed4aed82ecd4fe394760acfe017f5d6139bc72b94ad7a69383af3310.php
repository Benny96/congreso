<?php

/* ::base.html.twig */
class __TwigTemplate_dd32c3c690bb7a8dbb216eceda006c8c689e6ee2f067a1733fd259d5c620d65c extends Twig_Template
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
        $__internal_934f3e1f9a9016b6a34f0d889de6bd1451658776bd7826540cd255e73b6edd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934f3e1f9a9016b6a34f0d889de6bd1451658776bd7826540cd255e73b6edd95->enter($__internal_934f3e1f9a9016b6a34f0d889de6bd1451658776bd7826540cd255e73b6edd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_934f3e1f9a9016b6a34f0d889de6bd1451658776bd7826540cd255e73b6edd95->leave($__internal_934f3e1f9a9016b6a34f0d889de6bd1451658776bd7826540cd255e73b6edd95_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e2ad9c74c2fd4bf8530d189282a73c59429323ef95d0f14eb60d26df7d50891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2ad9c74c2fd4bf8530d189282a73c59429323ef95d0f14eb60d26df7d50891->enter($__internal_2e2ad9c74c2fd4bf8530d189282a73c59429323ef95d0f14eb60d26df7d50891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2e2ad9c74c2fd4bf8530d189282a73c59429323ef95d0f14eb60d26df7d50891->leave($__internal_2e2ad9c74c2fd4bf8530d189282a73c59429323ef95d0f14eb60d26df7d50891_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b08a3609fcaa1f322fbbfbcbf9c7af7091de27b023e48212c40f69b7f193080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b08a3609fcaa1f322fbbfbcbf9c7af7091de27b023e48212c40f69b7f193080->enter($__internal_3b08a3609fcaa1f322fbbfbcbf9c7af7091de27b023e48212c40f69b7f193080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_3b08a3609fcaa1f322fbbfbcbf9c7af7091de27b023e48212c40f69b7f193080->leave($__internal_3b08a3609fcaa1f322fbbfbcbf9c7af7091de27b023e48212c40f69b7f193080_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_44e6333ebdaa67705e3b4b6df0e0ba6e231ddaebc728b6bdf1359e3e4905b285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e6333ebdaa67705e3b4b6df0e0ba6e231ddaebc728b6bdf1359e3e4905b285->enter($__internal_44e6333ebdaa67705e3b4b6df0e0ba6e231ddaebc728b6bdf1359e3e4905b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_44e6333ebdaa67705e3b4b6df0e0ba6e231ddaebc728b6bdf1359e3e4905b285->leave($__internal_44e6333ebdaa67705e3b4b6df0e0ba6e231ddaebc728b6bdf1359e3e4905b285_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ba9fe234fa62ceb99a64a7fdc3f8a64f336a8f34dfa5fbcf47d653c9273bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ba9fe234fa62ceb99a64a7fdc3f8a64f336a8f34dfa5fbcf47d653c9273bba->enter($__internal_d8ba9fe234fa62ceb99a64a7fdc3f8a64f336a8f34dfa5fbcf47d653c9273bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d8ba9fe234fa62ceb99a64a7fdc3f8a64f336a8f34dfa5fbcf47d653c9273bba->leave($__internal_d8ba9fe234fa62ceb99a64a7fdc3f8a64f336a8f34dfa5fbcf47d653c9273bba_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f1a9541052410e5bb7c05cb7045a5f5518c5971837ac66e436ad4552e59eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f1a9541052410e5bb7c05cb7045a5f5518c5971837ac66e436ad4552e59eb7->enter($__internal_d7f1a9541052410e5bb7c05cb7045a5f5518c5971837ac66e436ad4552e59eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7f1a9541052410e5bb7c05cb7045a5f5518c5971837ac66e436ad4552e59eb7->leave($__internal_d7f1a9541052410e5bb7c05cb7045a5f5518c5971837ac66e436ad4552e59eb7_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_57284b3172939863bf473b2be7d4923175ec4df8cdc4a19e129fc8ff21b44218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57284b3172939863bf473b2be7d4923175ec4df8cdc4a19e129fc8ff21b44218->enter($__internal_57284b3172939863bf473b2be7d4923175ec4df8cdc4a19e129fc8ff21b44218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_57284b3172939863bf473b2be7d4923175ec4df8cdc4a19e129fc8ff21b44218->leave($__internal_57284b3172939863bf473b2be7d4923175ec4df8cdc4a19e129fc8ff21b44218_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_91a2e4116b0bbd509144a8b05c45d865e8030d6d3a933decbb6c5baee63450e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a2e4116b0bbd509144a8b05c45d865e8030d6d3a933decbb6c5baee63450e6->enter($__internal_91a2e4116b0bbd509144a8b05c45d865e8030d6d3a933decbb6c5baee63450e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_91a2e4116b0bbd509144a8b05c45d865e8030d6d3a933decbb6c5baee63450e6->leave($__internal_91a2e4116b0bbd509144a8b05c45d865e8030d6d3a933decbb6c5baee63450e6_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_35e09d21b49b7729b165302fd47c7e3f4e1e09ed8284d09b23eb76f52eb61d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e09d21b49b7729b165302fd47c7e3f4e1e09ed8284d09b23eb76f52eb61d8a->enter($__internal_35e09d21b49b7729b165302fd47c7e3f4e1e09ed8284d09b23eb76f52eb61d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_35e09d21b49b7729b165302fd47c7e3f4e1e09ed8284d09b23eb76f52eb61d8a->leave($__internal_35e09d21b49b7729b165302fd47c7e3f4e1e09ed8284d09b23eb76f52eb61d8a_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_6ac2480f229c6c2fbfadd795d8bfa72721d41ae255eda1e4147faaf04b2a2ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac2480f229c6c2fbfadd795d8bfa72721d41ae255eda1e4147faaf04b2a2ea4->enter($__internal_6ac2480f229c6c2fbfadd795d8bfa72721d41ae255eda1e4147faaf04b2a2ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_6ac2480f229c6c2fbfadd795d8bfa72721d41ae255eda1e4147faaf04b2a2ea4->leave($__internal_6ac2480f229c6c2fbfadd795d8bfa72721d41ae255eda1e4147faaf04b2a2ea4_prof);

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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}