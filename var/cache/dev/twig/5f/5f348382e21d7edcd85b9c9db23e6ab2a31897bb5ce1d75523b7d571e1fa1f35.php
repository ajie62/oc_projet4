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
        $__internal_7aca5700e7c60df15ab6d95c75c758ef257e7785527c3ce2e62e80a252d136d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aca5700e7c60df15ab6d95c75c758ef257e7785527c3ce2e62e80a252d136d7->enter($__internal_7aca5700e7c60df15ab6d95c75c758ef257e7785527c3ce2e62e80a252d136d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d68c0db74964e820189e46a2879bb8cd2df643d51a0adb37668e3bf818d1e6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68c0db74964e820189e46a2879bb8cd2df643d51a0adb37668e3bf818d1e6b4->enter($__internal_d68c0db74964e820189e46a2879bb8cd2df643d51a0adb37668e3bf818d1e6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7aca5700e7c60df15ab6d95c75c758ef257e7785527c3ce2e62e80a252d136d7->leave($__internal_7aca5700e7c60df15ab6d95c75c758ef257e7785527c3ce2e62e80a252d136d7_prof);

        
        $__internal_d68c0db74964e820189e46a2879bb8cd2df643d51a0adb37668e3bf818d1e6b4->leave($__internal_d68c0db74964e820189e46a2879bb8cd2df643d51a0adb37668e3bf818d1e6b4_prof);

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
