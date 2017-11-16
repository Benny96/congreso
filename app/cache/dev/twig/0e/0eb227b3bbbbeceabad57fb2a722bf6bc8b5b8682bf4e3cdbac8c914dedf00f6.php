<?php

/* @CongresoCongreso/Congreso/show.html.twig */
class __TwigTemplate_f891846c724c50c8122fb8eb3c18e92221ff7c32335b4cd283c82352770f18e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 2);
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
        $__internal_ce6ee64f1630428c61461038ddadd057ef68a58d60929b631a1e8f3dd782f314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6ee64f1630428c61461038ddadd057ef68a58d60929b631a1e8f3dd782f314->enter($__internal_ce6ee64f1630428c61461038ddadd057ef68a58d60929b631a1e8f3dd782f314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6ee64f1630428c61461038ddadd057ef68a58d60929b631a1e8f3dd782f314->leave($__internal_ce6ee64f1630428c61461038ddadd057ef68a58d60929b631a1e8f3dd782f314_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9092ff3784a44668de7f27f6231facacb319cf52180e704da2c9dac92b033c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9092ff3784a44668de7f27f6231facacb319cf52180e704da2c9dac92b033c6f->enter($__internal_9092ff3784a44668de7f27f6231facacb319cf52180e704da2c9dac92b033c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_9092ff3784a44668de7f27f6231facacb319cf52180e704da2c9dac92b033c6f->leave($__internal_9092ff3784a44668de7f27f6231facacb319cf52180e704da2c9dac92b033c6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c59f3ce0050918aae51d09dc73df0859cece7b1ab9b169867ec8ab83140d29ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59f3ce0050918aae51d09dc73df0859cece7b1ab9b169867ec8ab83140d29ce->enter($__internal_c59f3ce0050918aae51d09dc73df0859cece7b1ab9b169867ec8ab83140d29ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h1>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"date\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 13
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 13)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 14
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_c59f3ce0050918aae51d09dc73df0859cece7b1ab9b169867ec8ab83140d29ce->leave($__internal_c59f3ce0050918aae51d09dc73df0859cece7b1ab9b169867ec8ab83140d29ce_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7207a4a95269ab054bb9c78168cb5bf8d9ceaf912824614d8fec9049e041e4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7207a4a95269ab054bb9c78168cb5bf8d9ceaf912824614d8fec9049e041e4e9->enter($__internal_7207a4a95269ab054bb9c78168cb5bf8d9ceaf912824614d8fec9049e041e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_7207a4a95269ab054bb9c78168cb5bf8d9ceaf912824614d8fec9049e041e4e9->leave($__internal_7207a4a95269ab054bb9c78168cb5bf8d9ceaf912824614d8fec9049e041e4e9_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cd914191ffe40f88c9ef9fa45d55b11af98e8f4f52216b71ea39e10436bc5e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd914191ffe40f88c9ef9fa45d55b11af98e8f4f52216b71ea39e10436bc5e16->enter($__internal_cd914191ffe40f88c9ef9fa45d55b11af98e8f4f52216b71ea39e10436bc5e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_cd914191ffe40f88c9ef9fa45d55b11af98e8f4f52216b71ea39e10436bc5e16->leave($__internal_cd914191ffe40f88c9ef9fa45d55b11af98e8f4f52216b71ea39e10436bc5e16_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_2795aaa7122bb32e8834a89ed9881c61de0d28b8d43b0d37dcc60d1d61dcc75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2795aaa7122bb32e8834a89ed9881c61de0d28b8d43b0d37dcc60d1d61dcc75e->enter($__internal_2795aaa7122bb32e8834a89ed9881c61de0d28b8d43b0d37dcc60d1d61dcc75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_2795aaa7122bb32e8834a89ed9881c61de0d28b8d43b0d37dcc60d1d61dcc75e->leave($__internal_2795aaa7122bb32e8834a89ed9881c61de0d28b8d43b0d37dcc60d1d61dcc75e_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_97c5b0f5e8e5b4292537943862814386c26343eaad4ac6e3dc6410079f2e7395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c5b0f5e8e5b4292537943862814386c26343eaad4ac6e3dc6410079f2e7395->enter($__internal_97c5b0f5e8e5b4292537943862814386c26343eaad4ac6e3dc6410079f2e7395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_97c5b0f5e8e5b4292537943862814386c26343eaad4ac6e3dc6410079f2e7395->leave($__internal_97c5b0f5e8e5b4292537943862814386c26343eaad4ac6e3dc6410079f2e7395_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  151 => 37,  148 => 36,  142 => 35,  134 => 32,  128 => 31,  120 => 28,  118 => 27,  115 => 26,  109 => 25,  100 => 22,  96 => 21,  90 => 20,  80 => 16,  76 => 14,  74 => 13,  67 => 9,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
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
{% block title %}List of Articulos{% endblock %}

{% block body %}
\t<h1>{{ articulo.titulo }}</h1>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"date\">{{ articulo.publicacion |date('d-m-Y') }}</div>
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
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}
</div>
{% endblock %}

{% block linea %}
<p>-----------------</p>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}


", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
