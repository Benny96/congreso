<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_020237e06e507a7b608d2bbbc15ca898d3035882242226b7c632e755b591e903 extends Twig_Template
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
        $__internal_18db138de4f1d5b0195de79e09f5189b1980956f28a92a9fb1e96bdc1b3fa589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18db138de4f1d5b0195de79e09f5189b1980956f28a92a9fb1e96bdc1b3fa589->enter($__internal_18db138de4f1d5b0195de79e09f5189b1980956f28a92a9fb1e96bdc1b3fa589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_18db138de4f1d5b0195de79e09f5189b1980956f28a92a9fb1e96bdc1b3fa589->leave($__internal_18db138de4f1d5b0195de79e09f5189b1980956f28a92a9fb1e96bdc1b3fa589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
