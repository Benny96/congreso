<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ecf30ceceb457ef50e60f6e990cff107904e3cdf88a3dac483421cb0487bebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecf30ceceb457ef50e60f6e990cff107904e3cdf88a3dac483421cb0487bebd->enter($__internal_8ecf30ceceb457ef50e60f6e990cff107904e3cdf88a3dac483421cb0487bebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecf30ceceb457ef50e60f6e990cff107904e3cdf88a3dac483421cb0487bebd->leave($__internal_8ecf30ceceb457ef50e60f6e990cff107904e3cdf88a3dac483421cb0487bebd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_256b8549a9793b19e3598c11950f8d8d98ae8ff2734d16125b5bbb361cef8e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256b8549a9793b19e3598c11950f8d8d98ae8ff2734d16125b5bbb361cef8e47->enter($__internal_256b8549a9793b19e3598c11950f8d8d98ae8ff2734d16125b5bbb361cef8e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_256b8549a9793b19e3598c11950f8d8d98ae8ff2734d16125b5bbb361cef8e47->leave($__internal_256b8549a9793b19e3598c11950f8d8d98ae8ff2734d16125b5bbb361cef8e47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70ddbcb42fdb9bca1c5e1a325e0ca2aeb22e6122430357f8fc8a0ac67ba94f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ddbcb42fdb9bca1c5e1a325e0ca2aeb22e6122430357f8fc8a0ac67ba94f9a->enter($__internal_70ddbcb42fdb9bca1c5e1a325e0ca2aeb22e6122430357f8fc8a0ac67ba94f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_70ddbcb42fdb9bca1c5e1a325e0ca2aeb22e6122430357f8fc8a0ac67ba94f9a->leave($__internal_70ddbcb42fdb9bca1c5e1a325e0ca2aeb22e6122430357f8fc8a0ac67ba94f9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72c5c4a5862cc653b5a662319b7b68fab7722d6d20524e7eb0d31f246dd99974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c5c4a5862cc653b5a662319b7b68fab7722d6d20524e7eb0d31f246dd99974->enter($__internal_72c5c4a5862cc653b5a662319b7b68fab7722d6d20524e7eb0d31f246dd99974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72c5c4a5862cc653b5a662319b7b68fab7722d6d20524e7eb0d31f246dd99974->leave($__internal_72c5c4a5862cc653b5a662319b7b68fab7722d6d20524e7eb0d31f246dd99974_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
