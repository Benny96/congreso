<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b33b7f950c74757db2775401d87959064e958e013faba844a36f28af6403706f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33b7f950c74757db2775401d87959064e958e013faba844a36f28af6403706f->enter($__internal_b33b7f950c74757db2775401d87959064e958e013faba844a36f28af6403706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33b7f950c74757db2775401d87959064e958e013faba844a36f28af6403706f->leave($__internal_b33b7f950c74757db2775401d87959064e958e013faba844a36f28af6403706f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_285cc5de605c5cb681dcd86b02863446cbe1b4991eb9d1f74c20d0915747a441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285cc5de605c5cb681dcd86b02863446cbe1b4991eb9d1f74c20d0915747a441->enter($__internal_285cc5de605c5cb681dcd86b02863446cbe1b4991eb9d1f74c20d0915747a441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_285cc5de605c5cb681dcd86b02863446cbe1b4991eb9d1f74c20d0915747a441->leave($__internal_285cc5de605c5cb681dcd86b02863446cbe1b4991eb9d1f74c20d0915747a441_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33054d67c3291931ca560252f8fd56d2e8563360a85b8dc0734ad396e7d73f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33054d67c3291931ca560252f8fd56d2e8563360a85b8dc0734ad396e7d73f98->enter($__internal_33054d67c3291931ca560252f8fd56d2e8563360a85b8dc0734ad396e7d73f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33054d67c3291931ca560252f8fd56d2e8563360a85b8dc0734ad396e7d73f98->leave($__internal_33054d67c3291931ca560252f8fd56d2e8563360a85b8dc0734ad396e7d73f98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_327b64989f294a8e54b8181b3b0ba910b5c288541ef59bbb6e30cfc665260b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327b64989f294a8e54b8181b3b0ba910b5c288541ef59bbb6e30cfc665260b32->enter($__internal_327b64989f294a8e54b8181b3b0ba910b5c288541ef59bbb6e30cfc665260b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_327b64989f294a8e54b8181b3b0ba910b5c288541ef59bbb6e30cfc665260b32->leave($__internal_327b64989f294a8e54b8181b3b0ba910b5c288541ef59bbb6e30cfc665260b32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
