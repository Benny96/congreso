<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7eeb1019dccae825fe64718f67852177825e8be6aa882fe1688bcef2a47e26b9 extends Twig_Template
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
        $__internal_872ced69e09814fbc297aff4408aac4e7fc2c9fb0aeb787e3edb6c9424095a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ced69e09814fbc297aff4408aac4e7fc2c9fb0aeb787e3edb6c9424095a74->enter($__internal_872ced69e09814fbc297aff4408aac4e7fc2c9fb0aeb787e3edb6c9424095a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_872ced69e09814fbc297aff4408aac4e7fc2c9fb0aeb787e3edb6c9424095a74->leave($__internal_872ced69e09814fbc297aff4408aac4e7fc2c9fb0aeb787e3edb6c9424095a74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
