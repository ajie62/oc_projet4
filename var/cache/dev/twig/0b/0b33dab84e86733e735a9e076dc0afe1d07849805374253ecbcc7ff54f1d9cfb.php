<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_775191e24aa794cc7ea3237facfc36e38760631eb90b19ade025aa6b8d6b4f16 extends Twig_Template
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
        $__internal_f7ae37172f0b70becaa6077dfc21f83020d2c6859021b97980818cc51de19d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ae37172f0b70becaa6077dfc21f83020d2c6859021b97980818cc51de19d8c->enter($__internal_f7ae37172f0b70becaa6077dfc21f83020d2c6859021b97980818cc51de19d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bca304fe434201f5d923e4867e94c2d25f6e567029af2d6ae1a9c5618a14a943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca304fe434201f5d923e4867e94c2d25f6e567029af2d6ae1a9c5618a14a943->enter($__internal_bca304fe434201f5d923e4867e94c2d25f6e567029af2d6ae1a9c5618a14a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f7ae37172f0b70becaa6077dfc21f83020d2c6859021b97980818cc51de19d8c->leave($__internal_f7ae37172f0b70becaa6077dfc21f83020d2c6859021b97980818cc51de19d8c_prof);

        
        $__internal_bca304fe434201f5d923e4867e94c2d25f6e567029af2d6ae1a9c5618a14a943->leave($__internal_bca304fe434201f5d923e4867e94c2d25f6e567029af2d6ae1a9c5618a14a943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
