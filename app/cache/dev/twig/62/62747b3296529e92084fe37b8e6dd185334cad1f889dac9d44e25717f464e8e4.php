<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1702c812ecef6b6aa971837c089f4f729d904517d5057f28f68bd2fe41cfc005 extends Twig_Template
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
        $__internal_00a13a97bbd2da4dcc6959b8224e05ad0b9ba02599bdad2fd7cd2f3d810b92cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a13a97bbd2da4dcc6959b8224e05ad0b9ba02599bdad2fd7cd2f3d810b92cd->enter($__internal_00a13a97bbd2da4dcc6959b8224e05ad0b9ba02599bdad2fd7cd2f3d810b92cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_00a13a97bbd2da4dcc6959b8224e05ad0b9ba02599bdad2fd7cd2f3d810b92cd->leave($__internal_00a13a97bbd2da4dcc6959b8224e05ad0b9ba02599bdad2fd7cd2f3d810b92cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
