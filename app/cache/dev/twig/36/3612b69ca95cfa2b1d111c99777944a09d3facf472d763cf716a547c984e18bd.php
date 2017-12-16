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
        $__internal_a66341fba2c481e43b675ed627a592a63ae27c9724637abe9a1bcddd16595b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66341fba2c481e43b675ed627a592a63ae27c9724637abe9a1bcddd16595b5e->enter($__internal_a66341fba2c481e43b675ed627a592a63ae27c9724637abe9a1bcddd16595b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66341fba2c481e43b675ed627a592a63ae27c9724637abe9a1bcddd16595b5e->leave($__internal_a66341fba2c481e43b675ed627a592a63ae27c9724637abe9a1bcddd16595b5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5dac1f6bbe9ea220d10fa3d524c8798eff00da75e6d8673c533a80da62ad2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dac1f6bbe9ea220d10fa3d524c8798eff00da75e6d8673c533a80da62ad2df->enter($__internal_a5dac1f6bbe9ea220d10fa3d524c8798eff00da75e6d8673c533a80da62ad2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a5dac1f6bbe9ea220d10fa3d524c8798eff00da75e6d8673c533a80da62ad2df->leave($__internal_a5dac1f6bbe9ea220d10fa3d524c8798eff00da75e6d8673c533a80da62ad2df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cccfef548de05da50087c2d5b794ba41715887fbe3fe811429628d7a6648b290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccfef548de05da50087c2d5b794ba41715887fbe3fe811429628d7a6648b290->enter($__internal_cccfef548de05da50087c2d5b794ba41715887fbe3fe811429628d7a6648b290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cccfef548de05da50087c2d5b794ba41715887fbe3fe811429628d7a6648b290->leave($__internal_cccfef548de05da50087c2d5b794ba41715887fbe3fe811429628d7a6648b290_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b609d4059957aad87466a7382380f2c65bf475a9b1c323bb6e987d7056c797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b609d4059957aad87466a7382380f2c65bf475a9b1c323bb6e987d7056c797->enter($__internal_56b609d4059957aad87466a7382380f2c65bf475a9b1c323bb6e987d7056c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56b609d4059957aad87466a7382380f2c65bf475a9b1c323bb6e987d7056c797->leave($__internal_56b609d4059957aad87466a7382380f2c65bf475a9b1c323bb6e987d7056c797_prof);

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
