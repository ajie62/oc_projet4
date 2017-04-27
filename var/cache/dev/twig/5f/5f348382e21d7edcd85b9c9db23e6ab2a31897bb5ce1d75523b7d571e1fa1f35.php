<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_10f4a1add9192f9abe145f9513a50bef61915636f38fe2520d372305a4ce51d4 extends Twig_Template
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
        $__internal_f2b2a2c440562790282c7be5860e7d881d92f46cdd7bfaaf05eafc17829f13b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b2a2c440562790282c7be5860e7d881d92f46cdd7bfaaf05eafc17829f13b0->enter($__internal_f2b2a2c440562790282c7be5860e7d881d92f46cdd7bfaaf05eafc17829f13b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d1ff109772cc7cd3b630292a3264a728970f55a8db0bf5d53ea3d8ad7453aa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ff109772cc7cd3b630292a3264a728970f55a8db0bf5d53ea3d8ad7453aa87->enter($__internal_d1ff109772cc7cd3b630292a3264a728970f55a8db0bf5d53ea3d8ad7453aa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f2b2a2c440562790282c7be5860e7d881d92f46cdd7bfaaf05eafc17829f13b0->leave($__internal_f2b2a2c440562790282c7be5860e7d881d92f46cdd7bfaaf05eafc17829f13b0_prof);

        
        $__internal_d1ff109772cc7cd3b630292a3264a728970f55a8db0bf5d53ea3d8ad7453aa87->leave($__internal_d1ff109772cc7cd3b630292a3264a728970f55a8db0bf5d53ea3d8ad7453aa87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
