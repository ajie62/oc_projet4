<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_eff53437209e532b1ff6797c9a97f69a6594f1e7562e6a05f9e0e43cc54d8a7d extends Twig_Template
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
        $__internal_f5e11591cc2f27b9f157046c63927c5785c1d5aa8b3c3c5ab0d400327ed0ef09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e11591cc2f27b9f157046c63927c5785c1d5aa8b3c3c5ab0d400327ed0ef09->enter($__internal_f5e11591cc2f27b9f157046c63927c5785c1d5aa8b3c3c5ab0d400327ed0ef09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_124c79bf7d5c1ffcec1b4832a398008dc8d5f7d9dab56af303705543bd84f603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124c79bf7d5c1ffcec1b4832a398008dc8d5f7d9dab56af303705543bd84f603->enter($__internal_124c79bf7d5c1ffcec1b4832a398008dc8d5f7d9dab56af303705543bd84f603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f5e11591cc2f27b9f157046c63927c5785c1d5aa8b3c3c5ab0d400327ed0ef09->leave($__internal_f5e11591cc2f27b9f157046c63927c5785c1d5aa8b3c3c5ab0d400327ed0ef09_prof);

        
        $__internal_124c79bf7d5c1ffcec1b4832a398008dc8d5f7d9dab56af303705543bd84f603->leave($__internal_124c79bf7d5c1ffcec1b4832a398008dc8d5f7d9dab56af303705543bd84f603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
