<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c1d79d306fb826b3ee5c32323332ee9778605ff0b610f60372a419d69131209f extends Twig_Template
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
        $__internal_143486c01e6d9055d4f9330cbd29d87e8f72b3f649db206fc04302b3b7a44dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143486c01e6d9055d4f9330cbd29d87e8f72b3f649db206fc04302b3b7a44dfa->enter($__internal_143486c01e6d9055d4f9330cbd29d87e8f72b3f649db206fc04302b3b7a44dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_143486c01e6d9055d4f9330cbd29d87e8f72b3f649db206fc04302b3b7a44dfa->leave($__internal_143486c01e6d9055d4f9330cbd29d87e8f72b3f649db206fc04302b3b7a44dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
