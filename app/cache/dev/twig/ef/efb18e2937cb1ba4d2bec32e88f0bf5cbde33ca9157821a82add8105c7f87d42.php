<?php

/* CongresoCongresoBundle:Track:list.html.twig */
class __TwigTemplate_053761990ce9fec8e26fd4f87a3702388eb09949c2062eeb6b6ac5a20ce6171f extends Twig_Template
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
        $__internal_532dff98ce9b5e51cb7cf0ae2746dfaae5a694f427ac83b194f31d88ae870b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532dff98ce9b5e51cb7cf0ae2746dfaae5a694f427ac83b194f31d88ae870b31->enter($__internal_532dff98ce9b5e51cb7cf0ae2746dfaae5a694f427ac83b194f31d88ae870b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:list.html.twig"));

        // line 2
        echo "
<p class=\"continue\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        echo "</a></p>
";
        
        $__internal_532dff98ce9b5e51cb7cf0ae2746dfaae5a694f427ac83b194f31d88ae870b31->leave($__internal_532dff98ce9b5e51cb7cf0ae2746dfaae5a694f427ac83b194f31d88ae870b31_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Track:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/list.html.twig #}

<p class=\"continue\"><a href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></p>
", "CongresoCongresoBundle:Track:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/list.html.twig");
    }
}
