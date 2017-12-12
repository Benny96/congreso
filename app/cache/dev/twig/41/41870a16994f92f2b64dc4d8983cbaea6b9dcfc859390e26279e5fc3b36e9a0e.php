<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
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
        $__internal_73104bcb9ac636092d9b5b259bae73cd617907a23439a3fcab869ac7f1b9aa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73104bcb9ac636092d9b5b259bae73cd617907a23439a3fcab869ac7f1b9aa6f->enter($__internal_73104bcb9ac636092d9b5b259bae73cd617907a23439a3fcab869ac7f1b9aa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73104bcb9ac636092d9b5b259bae73cd617907a23439a3fcab869ac7f1b9aa6f->leave($__internal_73104bcb9ac636092d9b5b259bae73cd617907a23439a3fcab869ac7f1b9aa6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e0b50434c3966412f75bff1156b24b92a39772448d3b0133ce7695e53795436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0b50434c3966412f75bff1156b24b92a39772448d3b0133ce7695e53795436->enter($__internal_6e0b50434c3966412f75bff1156b24b92a39772448d3b0133ce7695e53795436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e0b50434c3966412f75bff1156b24b92a39772448d3b0133ce7695e53795436->leave($__internal_6e0b50434c3966412f75bff1156b24b92a39772448d3b0133ce7695e53795436_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1c9582c86d0a8b746cc1cae946b783b7317ff0774608fb19773e34a9e65e64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c9582c86d0a8b746cc1cae946b783b7317ff0774608fb19773e34a9e65e64f->enter($__internal_b1c9582c86d0a8b746cc1cae946b783b7317ff0774608fb19773e34a9e65e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1c9582c86d0a8b746cc1cae946b783b7317ff0774608fb19773e34a9e65e64f->leave($__internal_b1c9582c86d0a8b746cc1cae946b783b7317ff0774608fb19773e34a9e65e64f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4f5cbe33e5a2dc3eb5cd1e35bc208e90f3eecdb73f3ede298ed1bab1199626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4f5cbe33e5a2dc3eb5cd1e35bc208e90f3eecdb73f3ede298ed1bab1199626->enter($__internal_6c4f5cbe33e5a2dc3eb5cd1e35bc208e90f3eecdb73f3ede298ed1bab1199626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c4f5cbe33e5a2dc3eb5cd1e35bc208e90f3eecdb73f3ede298ed1bab1199626->leave($__internal_6c4f5cbe33e5a2dc3eb5cd1e35bc208e90f3eecdb73f3ede298ed1bab1199626_prof);

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
