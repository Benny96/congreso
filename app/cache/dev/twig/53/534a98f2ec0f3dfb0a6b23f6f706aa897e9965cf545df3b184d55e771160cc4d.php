<?php

/* default/layout.html.twig */
class __TwigTemplate_d1c51e62866c61f75d85dcc95e341de3a1f7594b4dba98bb040fb629a91d497c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f338324945b49fcf0d021e4a64a21378fb696b3666a26e41270dcc2ab7b7c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f338324945b49fcf0d021e4a64a21378fb696b3666a26e41270dcc2ab7b7c5b->enter($__internal_4f338324945b49fcf0d021e4a64a21378fb696b3666a26e41270dcc2ab7b7c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_4f338324945b49fcf0d021e4a64a21378fb696b3666a26e41270dcc2ab7b7c5b->leave($__internal_4f338324945b49fcf0d021e4a64a21378fb696b3666a26e41270dcc2ab7b7c5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef476474e06a439053d609cd722d41a6871b6d0f78c339a42cc4f15d0e28e1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef476474e06a439053d609cd722d41a6871b6d0f78c339a42cc4f15d0e28e1d5->enter($__internal_ef476474e06a439053d609cd722d41a6871b6d0f78c339a42cc4f15d0e28e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_ef476474e06a439053d609cd722d41a6871b6d0f78c339a42cc4f15d0e28e1d5->leave($__internal_ef476474e06a439053d609cd722d41a6871b6d0f78c339a42cc4f15d0e28e1d5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56e9fcaac9b9f97949b16c23c508c262167eff1982cb95d63068a1090cf2443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56e9fcaac9b9f97949b16c23c508c262167eff1982cb95d63068a1090cf2443->enter($__internal_e56e9fcaac9b9f97949b16c23c508c262167eff1982cb95d63068a1090cf2443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e56e9fcaac9b9f97949b16c23c508c262167eff1982cb95d63068a1090cf2443->leave($__internal_e56e9fcaac9b9f97949b16c23c508c262167eff1982cb95d63068a1090cf2443_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", "default/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\default\\layout.html.twig");
    }
}
