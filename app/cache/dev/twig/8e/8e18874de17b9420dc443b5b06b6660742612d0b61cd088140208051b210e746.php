<?php

/* @CongresoCongreso/Congreso/showAjax.html.twig */
class __TwigTemplate_be3072b3a8089c23b74354971c4055bda5c33e58cf56d2dfc37c565361e91458 extends Twig_Template
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
        $__internal_0a9203a5757ba0a9de80c8538ae3e6a55083eb3d7d2d0592c73a7f85cfb97900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9203a5757ba0a9de80c8538ae3e6a55083eb3d7d2d0592c73a7f85cfb97900->enter($__internal_0a9203a5757ba0a9de80c8538ae3e6a55083eb3d7d2d0592c73a7f85cfb97900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/showAjax.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        
        $__internal_0a9203a5757ba0a9de80c8538ae3e6a55083eb3d7d2d0592c73a7f85cfb97900->leave($__internal_0a9203a5757ba0a9de80c8538ae3e6a55083eb3d7d2d0592c73a7f85cfb97900_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/showAjax.html.twig";
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
{{ track.info }}", "@CongresoCongreso/Congreso/showAjax.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\showAjax.html.twig");
    }
}
