<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d3b327203596c862b72fb9bf7194241e61458698f0799395ff60e9a7578f6abc extends Twig_Template
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
        $__internal_55ccfda5d846fb7a28950e3859afb2e391c862337411044a64a700ff813515a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ccfda5d846fb7a28950e3859afb2e391c862337411044a64a700ff813515a1->enter($__internal_55ccfda5d846fb7a28950e3859afb2e391c862337411044a64a700ff813515a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ee7291a2c73319e23b406c9665bb7787d55b8e5be8f3eba1b9c47d082a2fbcd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7291a2c73319e23b406c9665bb7787d55b8e5be8f3eba1b9c47d082a2fbcd7->enter($__internal_ee7291a2c73319e23b406c9665bb7787d55b8e5be8f3eba1b9c47d082a2fbcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_55ccfda5d846fb7a28950e3859afb2e391c862337411044a64a700ff813515a1->leave($__internal_55ccfda5d846fb7a28950e3859afb2e391c862337411044a64a700ff813515a1_prof);

        
        $__internal_ee7291a2c73319e23b406c9665bb7787d55b8e5be8f3eba1b9c47d082a2fbcd7->leave($__internal_ee7291a2c73319e23b406c9665bb7787d55b8e5be8f3eba1b9c47d082a2fbcd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
