<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8498a6b3710d7e60d98772c43147217e818176d27199eba45e23c7e8a702ce94 extends Twig_Template
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
        $__internal_05971f6c847287cd9c1343f1df25aa32d0a64d8a191e8e349a62725854d68ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05971f6c847287cd9c1343f1df25aa32d0a64d8a191e8e349a62725854d68ccc->enter($__internal_05971f6c847287cd9c1343f1df25aa32d0a64d8a191e8e349a62725854d68ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_289701e86981cb38798c5ed27caf698c5a127719db9b6e34a41df1d54f649139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289701e86981cb38798c5ed27caf698c5a127719db9b6e34a41df1d54f649139->enter($__internal_289701e86981cb38798c5ed27caf698c5a127719db9b6e34a41df1d54f649139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_05971f6c847287cd9c1343f1df25aa32d0a64d8a191e8e349a62725854d68ccc->leave($__internal_05971f6c847287cd9c1343f1df25aa32d0a64d8a191e8e349a62725854d68ccc_prof);

        
        $__internal_289701e86981cb38798c5ed27caf698c5a127719db9b6e34a41df1d54f649139->leave($__internal_289701e86981cb38798c5ed27caf698c5a127719db9b6e34a41df1d54f649139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
