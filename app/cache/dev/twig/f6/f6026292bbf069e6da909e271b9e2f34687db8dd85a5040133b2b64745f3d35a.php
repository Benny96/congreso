<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_55df709132766dbf6088b85b498fc7385d2c18995ba0d4df6e422a0f7b072995 extends Twig_Template
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
        $__internal_111860b0e6c7a4f1b9f28befd12961a2915c0fb8cb70f80258e742cf74440e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111860b0e6c7a4f1b9f28befd12961a2915c0fb8cb70f80258e742cf74440e16->enter($__internal_111860b0e6c7a4f1b9f28befd12961a2915c0fb8cb70f80258e742cf74440e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_111860b0e6c7a4f1b9f28befd12961a2915c0fb8cb70f80258e742cf74440e16->leave($__internal_111860b0e6c7a4f1b9f28befd12961a2915c0fb8cb70f80258e742cf74440e16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
