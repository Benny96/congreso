<?php

/* @CongresoCongreso/Default/index.html.twig */
class __TwigTemplate_90221abd4fe5c8685b8d39050186c1e81f575d40d0633600dc7f95c878aec261 extends Twig_Template
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
        $__internal_1f056307e8f835d67a108ac76aab8d7055f252c2255805c5028e3f5ab88ac41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f056307e8f835d67a108ac76aab8d7055f252c2255805c5028e3f5ab88ac41a->enter($__internal_1f056307e8f835d67a108ac76aab8d7055f252c2255805c5028e3f5ab88ac41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1f056307e8f835d67a108ac76aab8d7055f252c2255805c5028e3f5ab88ac41a->leave($__internal_1f056307e8f835d67a108ac76aab8d7055f252c2255805c5028e3f5ab88ac41a_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@CongresoCongreso/Default/index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Default\\index.html.twig");
    }
}