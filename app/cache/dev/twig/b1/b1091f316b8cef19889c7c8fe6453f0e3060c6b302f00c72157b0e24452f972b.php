<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3caa8cea35237c267b3e33abd03498d29fa8b1d095349910f17268c6d760d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47343e58f9cf9cfcb920f43fbbff467f1a2d231c1c5cea8c9756884f49d05eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47343e58f9cf9cfcb920f43fbbff467f1a2d231c1c5cea8c9756884f49d05eac->enter($__internal_47343e58f9cf9cfcb920f43fbbff467f1a2d231c1c5cea8c9756884f49d05eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47343e58f9cf9cfcb920f43fbbff467f1a2d231c1c5cea8c9756884f49d05eac->leave($__internal_47343e58f9cf9cfcb920f43fbbff467f1a2d231c1c5cea8c9756884f49d05eac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df826f77d98a257f4ea752cdf4449354400101d34324efa362581960d6ef0954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df826f77d98a257f4ea752cdf4449354400101d34324efa362581960d6ef0954->enter($__internal_df826f77d98a257f4ea752cdf4449354400101d34324efa362581960d6ef0954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df826f77d98a257f4ea752cdf4449354400101d34324efa362581960d6ef0954->leave($__internal_df826f77d98a257f4ea752cdf4449354400101d34324efa362581960d6ef0954_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f65fb57c27fc0ae0483cf9e2282f53727d954405d23bd79fef18623e04874e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f65fb57c27fc0ae0483cf9e2282f53727d954405d23bd79fef18623e04874e->enter($__internal_a9f65fb57c27fc0ae0483cf9e2282f53727d954405d23bd79fef18623e04874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9f65fb57c27fc0ae0483cf9e2282f53727d954405d23bd79fef18623e04874e->leave($__internal_a9f65fb57c27fc0ae0483cf9e2282f53727d954405d23bd79fef18623e04874e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
