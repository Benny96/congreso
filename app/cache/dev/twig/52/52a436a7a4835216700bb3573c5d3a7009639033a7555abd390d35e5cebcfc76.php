<?php

/* @EasyAdmin/default/field_raw.html.twig */
class __TwigTemplate_e4896d4e838fc2638e9b8bbb3fb1af6eb6be5fb254e69e33647da1f258a3062a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81c8b9e88e59b8cc394cc44fb12541e978a83f4ac13ff8460bd5640dc7aeec9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c8b9e88e59b8cc394cc44fb12541e978a83f4ac13ff8460bd5640dc7aeec9a->enter($__internal_81c8b9e88e59b8cc394cc44fb12541e978a83f4ac13ff8460bd5640dc7aeec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_81c8b9e88e59b8cc394cc44fb12541e978a83f4ac13ff8460bd5640dc7aeec9a->leave($__internal_81c8b9e88e59b8cc394cc44fb12541e978a83f4ac13ff8460bd5640dc7aeec9a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|raw }}
", "@EasyAdmin/default/field_raw.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_raw.html.twig");
    }
}