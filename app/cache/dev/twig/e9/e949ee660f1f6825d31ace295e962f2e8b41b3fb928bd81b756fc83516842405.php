<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_984d50fa7e54c7ee4e4bf05e4948da7dcc5a77c5f502914224f01861cff5e94c extends Twig_Template
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
        $__internal_c574d23e793eeeb23ada8dcf4e6530633eb536a2b5918ea264b44e68ee65347a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c574d23e793eeeb23ada8dcf4e6530633eb536a2b5918ea264b44e68ee65347a->enter($__internal_c574d23e793eeeb23ada8dcf4e6530633eb536a2b5918ea264b44e68ee65347a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c574d23e793eeeb23ada8dcf4e6530633eb536a2b5918ea264b44e68ee65347a->leave($__internal_c574d23e793eeeb23ada8dcf4e6530633eb536a2b5918ea264b44e68ee65347a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}