<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8bfea18e871773f1de32ba9ec16a7c19b38cd9ef2f5a3d3cd2d33fba768a3e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a651115b56ba8610287b802414e0bdb2b956691f033d4117211739b2b6d0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a651115b56ba8610287b802414e0bdb2b956691f033d4117211739b2b6d0f1->enter($__internal_b4a651115b56ba8610287b802414e0bdb2b956691f033d4117211739b2b6d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a651115b56ba8610287b802414e0bdb2b956691f033d4117211739b2b6d0f1->leave($__internal_b4a651115b56ba8610287b802414e0bdb2b956691f033d4117211739b2b6d0f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba9526ebcd4fd6571257affbf69105108e0ac7c9bc57d6f5a8320085c6ae1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba9526ebcd4fd6571257affbf69105108e0ac7c9bc57d6f5a8320085c6ae1dd->enter($__internal_9ba9526ebcd4fd6571257affbf69105108e0ac7c9bc57d6f5a8320085c6ae1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ba9526ebcd4fd6571257affbf69105108e0ac7c9bc57d6f5a8320085c6ae1dd->leave($__internal_9ba9526ebcd4fd6571257affbf69105108e0ac7c9bc57d6f5a8320085c6ae1dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77198e5e1cc8a3ec6a695e313ba55d9fa5b66300933d0f326dbd8572f1e5b882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77198e5e1cc8a3ec6a695e313ba55d9fa5b66300933d0f326dbd8572f1e5b882->enter($__internal_77198e5e1cc8a3ec6a695e313ba55d9fa5b66300933d0f326dbd8572f1e5b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77198e5e1cc8a3ec6a695e313ba55d9fa5b66300933d0f326dbd8572f1e5b882->leave($__internal_77198e5e1cc8a3ec6a695e313ba55d9fa5b66300933d0f326dbd8572f1e5b882_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
