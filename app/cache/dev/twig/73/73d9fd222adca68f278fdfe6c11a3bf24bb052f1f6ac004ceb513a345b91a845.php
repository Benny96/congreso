<?php

/* CongresoCongresoBundle:Congreso:showAjax.html.twig */
class __TwigTemplate_63af8dc845f0e7858788bb380d29817dfb0a4f1e95fbe66b6628e3ae622cd35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76371567bbfb3aaf942735295db93d8af7cec5f62c0e8e6f60720d4a773e22db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76371567bbfb3aaf942735295db93d8af7cec5f62c0e8e6f60720d4a773e22db->enter($__internal_76371567bbfb3aaf942735295db93d8af7cec5f62c0e8e6f60720d4a773e22db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showAjax.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        
        $__internal_76371567bbfb3aaf942735295db93d8af7cec5f62c0e8e6f60720d4a773e22db->leave($__internal_76371567bbfb3aaf942735295db93d8af7cec5f62c0e8e6f60720d4a773e22db_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:showAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/showAjax.html.twig #}
{{ track.info }}", "CongresoCongresoBundle:Congreso:showAjax.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/showAjax.html.twig");
    }
}