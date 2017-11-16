<?php

/* :default:layout.html.twig */
class __TwigTemplate_b68422589f8a02d627620d8c8951c1d77bd376aed4d8872967ef9999e330393a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10dd632a6e58460d5b619d64917e657cca7004af8bf906f4df6a385609685454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10dd632a6e58460d5b619d64917e657cca7004af8bf906f4df6a385609685454->enter($__internal_10dd632a6e58460d5b619d64917e657cca7004af8bf906f4df6a385609685454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_10dd632a6e58460d5b619d64917e657cca7004af8bf906f4df6a385609685454->leave($__internal_10dd632a6e58460d5b619d64917e657cca7004af8bf906f4df6a385609685454_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a29d8a490ada87f4b3737bff748d044d344431ed6958068768da067adf17ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a29d8a490ada87f4b3737bff748d044d344431ed6958068768da067adf17ecf->enter($__internal_6a29d8a490ada87f4b3737bff748d044d344431ed6958068768da067adf17ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_6a29d8a490ada87f4b3737bff748d044d344431ed6958068768da067adf17ecf->leave($__internal_6a29d8a490ada87f4b3737bff748d044d344431ed6958068768da067adf17ecf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab28e5948c93c7e1e975e4fd1245e1ad77a8f73a78ddfd993215da997344e027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab28e5948c93c7e1e975e4fd1245e1ad77a8f73a78ddfd993215da997344e027->enter($__internal_ab28e5948c93c7e1e975e4fd1245e1ad77a8f73a78ddfd993215da997344e027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab28e5948c93c7e1e975e4fd1245e1ad77a8f73a78ddfd993215da997344e027->leave($__internal_ab28e5948c93c7e1e975e4fd1245e1ad77a8f73a78ddfd993215da997344e027_prof);

    }

    public function getTemplateName()
    {
        return ":default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", ":default:layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/default/layout.html.twig");
    }
}