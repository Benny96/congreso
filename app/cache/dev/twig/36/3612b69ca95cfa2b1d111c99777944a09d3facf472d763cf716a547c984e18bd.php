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
        $__internal_1b005712fb6089535db4725e8b7fd30e9aea2ac6b181c0081bee611b451f70da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b005712fb6089535db4725e8b7fd30e9aea2ac6b181c0081bee611b451f70da->enter($__internal_1b005712fb6089535db4725e8b7fd30e9aea2ac6b181c0081bee611b451f70da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b005712fb6089535db4725e8b7fd30e9aea2ac6b181c0081bee611b451f70da->leave($__internal_1b005712fb6089535db4725e8b7fd30e9aea2ac6b181c0081bee611b451f70da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9bad2aafc96dd396f88a3102bbff0c4579646a662b62cbcd6fca000c502e18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bad2aafc96dd396f88a3102bbff0c4579646a662b62cbcd6fca000c502e18c->enter($__internal_d9bad2aafc96dd396f88a3102bbff0c4579646a662b62cbcd6fca000c502e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9bad2aafc96dd396f88a3102bbff0c4579646a662b62cbcd6fca000c502e18c->leave($__internal_d9bad2aafc96dd396f88a3102bbff0c4579646a662b62cbcd6fca000c502e18c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f640e635f694bc453d43fcde98d30ee6c0c7803aad48bf87d88b416350f64fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f640e635f694bc453d43fcde98d30ee6c0c7803aad48bf87d88b416350f64fb->enter($__internal_6f640e635f694bc453d43fcde98d30ee6c0c7803aad48bf87d88b416350f64fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f640e635f694bc453d43fcde98d30ee6c0c7803aad48bf87d88b416350f64fb->leave($__internal_6f640e635f694bc453d43fcde98d30ee6c0c7803aad48bf87d88b416350f64fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33f9fcca611e678bd78e91040da4d0c59fdcb226a60155cb02076f019caafc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9fcca611e678bd78e91040da4d0c59fdcb226a60155cb02076f019caafc97->enter($__internal_33f9fcca611e678bd78e91040da4d0c59fdcb226a60155cb02076f019caafc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33f9fcca611e678bd78e91040da4d0c59fdcb226a60155cb02076f019caafc97->leave($__internal_33f9fcca611e678bd78e91040da4d0c59fdcb226a60155cb02076f019caafc97_prof);

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
