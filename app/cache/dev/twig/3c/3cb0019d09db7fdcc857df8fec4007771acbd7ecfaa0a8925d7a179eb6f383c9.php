<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_a96937c89f43115c6621aebd4ad4d0b5934e47fd66b941307de51be46a23737f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bfd93b3d409a2d0397e6731e5afb03b2e3c3a2107e976a3a48425ff604af62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfd93b3d409a2d0397e6731e5afb03b2e3c3a2107e976a3a48425ff604af62e->enter($__internal_6bfd93b3d409a2d0397e6731e5afb03b2e3c3a2107e976a3a48425ff604af62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bfd93b3d409a2d0397e6731e5afb03b2e3c3a2107e976a3a48425ff604af62e->leave($__internal_6bfd93b3d409a2d0397e6731e5afb03b2e3c3a2107e976a3a48425ff604af62e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f62d254873edf7cbc3fbbd9a7d7a4c12f072cead773435faec99cf45ff984ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62d254873edf7cbc3fbbd9a7d7a4c12f072cead773435faec99cf45ff984ae5->enter($__internal_f62d254873edf7cbc3fbbd9a7d7a4c12f072cead773435faec99cf45ff984ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_f62d254873edf7cbc3fbbd9a7d7a4c12f072cead773435faec99cf45ff984ae5->leave($__internal_f62d254873edf7cbc3fbbd9a7d7a4c12f072cead773435faec99cf45ff984ae5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_804fa027412de3e5e4a6b32ca3bf8036a5a14e392dc38ef8caf98accdefed87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804fa027412de3e5e4a6b32ca3bf8036a5a14e392dc38ef8caf98accdefed87c->enter($__internal_804fa027412de3e5e4a6b32ca3bf8036a5a14e392dc38ef8caf98accdefed87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "ParsearFecha", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_804fa027412de3e5e4a6b32ca3bf8036a5a14e392dc38ef8caf98accdefed87c->leave($__internal_804fa027412de3e5e4a6b32ca3bf8036a5a14e392dc38ef8caf98accdefed87c_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a5c80eb72451c2f61e18818f514cc6c6561cb5ae3c8142220b7f04e30229e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5c80eb72451c2f61e18818f514cc6c6561cb5ae3c8142220b7f04e30229e0a->enter($__internal_9a5c80eb72451c2f61e18818f514cc6c6561cb5ae3c8142220b7f04e30229e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_9a5c80eb72451c2f61e18818f514cc6c6561cb5ae3c8142220b7f04e30229e0a->leave($__internal_9a5c80eb72451c2f61e18818f514cc6c6561cb5ae3c8142220b7f04e30229e0a_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3fe769b053db91b39b3895817b6d17bcb503d2dee01e134da175e620773e06cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe769b053db91b39b3895817b6d17bcb503d2dee01e134da175e620773e06cc->enter($__internal_3fe769b053db91b39b3895817b6d17bcb503d2dee01e134da175e620773e06cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_3fe769b053db91b39b3895817b6d17bcb503d2dee01e134da175e620773e06cc->leave($__internal_3fe769b053db91b39b3895817b6d17bcb503d2dee01e134da175e620773e06cc_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_8620ebf24e7be5c953950bd32e345b9ce8ad67cc10dc258172adf4c4eb1c668a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8620ebf24e7be5c953950bd32e345b9ce8ad67cc10dc258172adf4c4eb1c668a->enter($__internal_8620ebf24e7be5c953950bd32e345b9ce8ad67cc10dc258172adf4c4eb1c668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_8620ebf24e7be5c953950bd32e345b9ce8ad67cc10dc258172adf4c4eb1c668a->leave($__internal_8620ebf24e7be5c953950bd32e345b9ce8ad67cc10dc258172adf4c4eb1c668a_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_68c41dfbc5a6c94638bb6d53debd6d1c536a105b61ca28df91e1ef047ad96555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c41dfbc5a6c94638bb6d53debd6d1c536a105b61ca28df91e1ef047ad96555->enter($__internal_68c41dfbc5a6c94638bb6d53debd6d1c536a105b61ca28df91e1ef047ad96555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_68c41dfbc5a6c94638bb6d53debd6d1c536a105b61ca28df91e1ef047ad96555->leave($__internal_68c41dfbc5a6c94638bb6d53debd6d1c536a105b61ca28df91e1ef047ad96555_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  153 => 39,  150 => 38,  144 => 37,  136 => 34,  130 => 33,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  102 => 24,  98 => 23,  92 => 22,  82 => 18,  78 => 16,  76 => 15,  68 => 10,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/show.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Artículo seleccionado{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: {{ articulo.ParsearFecha }}</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t{% include 'CongresoCongresoBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'CongresoCongresoBundle:Comment:new', { 'articulo_id': articulo.id } )) }}
    </section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('css/congreso.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
<div class=\"tracks\">
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'track': track } %}
</div>
{% endblock %}

{% block linea %}
<div class=\"separator\"></div>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
