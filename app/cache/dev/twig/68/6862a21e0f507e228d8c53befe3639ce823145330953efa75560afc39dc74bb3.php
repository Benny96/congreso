<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c8e32ec1fc292c603c9a99cd563775965d100a2f6671b3c59f28ef2c96b0e139 extends Twig_Template
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
        $__internal_36f15d57d3bcd2e78cf68e25fde8e9ffd6b3f81a2135133d713b3072c94f198b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f15d57d3bcd2e78cf68e25fde8e9ffd6b3f81a2135133d713b3072c94f198b->enter($__internal_36f15d57d3bcd2e78cf68e25fde8e9ffd6b3f81a2135133d713b3072c94f198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_36f15d57d3bcd2e78cf68e25fde8e9ffd6b3f81a2135133d713b3072c94f198b->leave($__internal_36f15d57d3bcd2e78cf68e25fde8e9ffd6b3f81a2135133d713b3072c94f198b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
