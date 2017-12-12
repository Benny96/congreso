<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_864bc065b4049f7dcbb50bc10da891fe8a473888403c2c762b125cc430fd1be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c96324d401a1e401f8e5174a089c7e4407edb68bf188ad5ee30ea5e16790eb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96324d401a1e401f8e5174a089c7e4407edb68bf188ad5ee30ea5e16790eb78->enter($__internal_c96324d401a1e401f8e5174a089c7e4407edb68bf188ad5ee30ea5e16790eb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96324d401a1e401f8e5174a089c7e4407edb68bf188ad5ee30ea5e16790eb78->leave($__internal_c96324d401a1e401f8e5174a089c7e4407edb68bf188ad5ee30ea5e16790eb78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c8a27772eee95c6c1c2a61065392f93c0fa356e9d952aa77dc49724dfc1f44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8a27772eee95c6c1c2a61065392f93c0fa356e9d952aa77dc49724dfc1f44f->enter($__internal_9c8a27772eee95c6c1c2a61065392f93c0fa356e9d952aa77dc49724dfc1f44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9c8a27772eee95c6c1c2a61065392f93c0fa356e9d952aa77dc49724dfc1f44f->leave($__internal_9c8a27772eee95c6c1c2a61065392f93c0fa356e9d952aa77dc49724dfc1f44f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ad9c41125e85ae41c623650fd76f44b11b7eef055ac5bb92bc9fde22405c0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad9c41125e85ae41c623650fd76f44b11b7eef055ac5bb92bc9fde22405c0d2->enter($__internal_1ad9c41125e85ae41c623650fd76f44b11b7eef055ac5bb92bc9fde22405c0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ad9c41125e85ae41c623650fd76f44b11b7eef055ac5bb92bc9fde22405c0d2->leave($__internal_1ad9c41125e85ae41c623650fd76f44b11b7eef055ac5bb92bc9fde22405c0d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8386100ac2c600fed945e5e97bb70dc3b9faba2c35e655dd8a7b29243674b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8386100ac2c600fed945e5e97bb70dc3b9faba2c35e655dd8a7b29243674b82f->enter($__internal_8386100ac2c600fed945e5e97bb70dc3b9faba2c35e655dd8a7b29243674b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8386100ac2c600fed945e5e97bb70dc3b9faba2c35e655dd8a7b29243674b82f->leave($__internal_8386100ac2c600fed945e5e97bb70dc3b9faba2c35e655dd8a7b29243674b82f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
