<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b6c4c0d453b1463867ca872d52765e84603070e81fd6c8b2bd6c05fc833fab2f extends Twig_Template
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
        $__internal_31e7ac7460a41ba5b3d9cda1fc9a243f4544852cce4b4e3b043ee3adfdb0c542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e7ac7460a41ba5b3d9cda1fc9a243f4544852cce4b4e3b043ee3adfdb0c542->enter($__internal_31e7ac7460a41ba5b3d9cda1fc9a243f4544852cce4b4e3b043ee3adfdb0c542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_31e7ac7460a41ba5b3d9cda1fc9a243f4544852cce4b4e3b043ee3adfdb0c542->leave($__internal_31e7ac7460a41ba5b3d9cda1fc9a243f4544852cce4b4e3b043ee3adfdb0c542_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}