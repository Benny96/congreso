<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_79a38a94ef95ccd4f299af2532aaa9c14989e2222d45370a261deb698ec0683c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_74bed51366882272fe910c32263fa74897f08f9ba4ab9a6d9780c1ffa241143a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bed51366882272fe910c32263fa74897f08f9ba4ab9a6d9780c1ffa241143a->enter($__internal_74bed51366882272fe910c32263fa74897f08f9ba4ab9a6d9780c1ffa241143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74bed51366882272fe910c32263fa74897f08f9ba4ab9a6d9780c1ffa241143a->leave($__internal_74bed51366882272fe910c32263fa74897f08f9ba4ab9a6d9780c1ffa241143a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e40918fe2fc41659f3c4ec29b595c6e95b567bea0be723fd20a5d748f19379a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40918fe2fc41659f3c4ec29b595c6e95b567bea0be723fd20a5d748f19379a9->enter($__internal_e40918fe2fc41659f3c4ec29b595c6e95b567bea0be723fd20a5d748f19379a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e40918fe2fc41659f3c4ec29b595c6e95b567bea0be723fd20a5d748f19379a9->leave($__internal_e40918fe2fc41659f3c4ec29b595c6e95b567bea0be723fd20a5d748f19379a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b8ee9fcdb558d35f8634c2e031303f4e923269ba48163ace0337d3a50ab2fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8ee9fcdb558d35f8634c2e031303f4e923269ba48163ace0337d3a50ab2fe6->enter($__internal_9b8ee9fcdb558d35f8634c2e031303f4e923269ba48163ace0337d3a50ab2fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b8ee9fcdb558d35f8634c2e031303f4e923269ba48163ace0337d3a50ab2fe6->leave($__internal_9b8ee9fcdb558d35f8634c2e031303f4e923269ba48163ace0337d3a50ab2fe6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1634ba2438e0aae966f58f7d99b3d8a56f6808153971d7e05d61f25eb05269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1634ba2438e0aae966f58f7d99b3d8a56f6808153971d7e05d61f25eb05269->enter($__internal_de1634ba2438e0aae966f58f7d99b3d8a56f6808153971d7e05d61f25eb05269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de1634ba2438e0aae966f58f7d99b3d8a56f6808153971d7e05d61f25eb05269->leave($__internal_de1634ba2438e0aae966f58f7d99b3d8a56f6808153971d7e05d61f25eb05269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
