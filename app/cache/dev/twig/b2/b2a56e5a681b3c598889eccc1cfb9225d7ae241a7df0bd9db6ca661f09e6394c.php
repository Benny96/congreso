<?php

/* CongresoCongresoBundle:Default:index.html.twig */
class __TwigTemplate_da31f742065308901b34e3a8eedef9ff6c4a334157954760184e177b504bc34c extends Twig_Template
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
        $__internal_9cc2e6890bf432434e18c7cc9e6d56eef351aacdf4ca71d5f5d03b714a7546c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc2e6890bf432434e18c7cc9e6d56eef351aacdf4ca71d5f5d03b714a7546c0->enter($__internal_9cc2e6890bf432434e18c7cc9e6d56eef351aacdf4ca71d5f5d03b714a7546c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9cc2e6890bf432434e18c7cc9e6d56eef351aacdf4ca71d5f5d03b714a7546c0->leave($__internal_9cc2e6890bf432434e18c7cc9e6d56eef351aacdf4ca71d5f5d03b714a7546c0_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Default:index.html.twig";
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
", "CongresoCongresoBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Default/index.html.twig");
    }
}
