<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a34b33f1313327d7aa5be2a8ddd81ecc7f9d4fb7f4c526113974189ca6f325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a34b33f1313327d7aa5be2a8ddd81ecc7f9d4fb7f4c526113974189ca6f325->enter($__internal_d4a34b33f1313327d7aa5be2a8ddd81ecc7f9d4fb7f4c526113974189ca6f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a34b33f1313327d7aa5be2a8ddd81ecc7f9d4fb7f4c526113974189ca6f325->leave($__internal_d4a34b33f1313327d7aa5be2a8ddd81ecc7f9d4fb7f4c526113974189ca6f325_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ed21aa6294eef28e3dd67e796c1cd96883d8eaff86634efd23af38a1240608c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed21aa6294eef28e3dd67e796c1cd96883d8eaff86634efd23af38a1240608c->enter($__internal_0ed21aa6294eef28e3dd67e796c1cd96883d8eaff86634efd23af38a1240608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0ed21aa6294eef28e3dd67e796c1cd96883d8eaff86634efd23af38a1240608c->leave($__internal_0ed21aa6294eef28e3dd67e796c1cd96883d8eaff86634efd23af38a1240608c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ed53eb19b60057b2e0a202d4374a7a080f66fa21a792f212a0461746962b245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed53eb19b60057b2e0a202d4374a7a080f66fa21a792f212a0461746962b245->enter($__internal_9ed53eb19b60057b2e0a202d4374a7a080f66fa21a792f212a0461746962b245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9ed53eb19b60057b2e0a202d4374a7a080f66fa21a792f212a0461746962b245->leave($__internal_9ed53eb19b60057b2e0a202d4374a7a080f66fa21a792f212a0461746962b245_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4beb5eebb9ebe5ef37ed83b57cdbc86f8b687dbf8b72711647a8ae523efb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4beb5eebb9ebe5ef37ed83b57cdbc86f8b687dbf8b72711647a8ae523efb83->enter($__internal_0a4beb5eebb9ebe5ef37ed83b57cdbc86f8b687dbf8b72711647a8ae523efb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_0a4beb5eebb9ebe5ef37ed83b57cdbc86f8b687dbf8b72711647a8ae523efb83->leave($__internal_0a4beb5eebb9ebe5ef37ed83b57cdbc86f8b687dbf8b72711647a8ae523efb83_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_92d4eeadeb92432f3202604181b342c6182451cb3f9dd91f03a67b43c58ae478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d4eeadeb92432f3202604181b342c6182451cb3f9dd91f03a67b43c58ae478->enter($__internal_92d4eeadeb92432f3202604181b342c6182451cb3f9dd91f03a67b43c58ae478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_92d4eeadeb92432f3202604181b342c6182451cb3f9dd91f03a67b43c58ae478->leave($__internal_92d4eeadeb92432f3202604181b342c6182451cb3f9dd91f03a67b43c58ae478_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
