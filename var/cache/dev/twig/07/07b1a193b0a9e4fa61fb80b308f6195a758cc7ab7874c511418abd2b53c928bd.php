<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3bc0cf96bdaa9c8c8e443f61cdc31e16e5063f50479053e8940558d236fe6eb3 extends Twig_Template
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
        $__internal_193a0f1f57e462cca7bbda544395964a290a284f6e3379eb570cc0375e4fca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193a0f1f57e462cca7bbda544395964a290a284f6e3379eb570cc0375e4fca93->enter($__internal_193a0f1f57e462cca7bbda544395964a290a284f6e3379eb570cc0375e4fca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7127b97672c6954fbf74b35afd362ed2235272bbf3e3fa5083b578e013465121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7127b97672c6954fbf74b35afd362ed2235272bbf3e3fa5083b578e013465121->enter($__internal_7127b97672c6954fbf74b35afd362ed2235272bbf3e3fa5083b578e013465121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_193a0f1f57e462cca7bbda544395964a290a284f6e3379eb570cc0375e4fca93->leave($__internal_193a0f1f57e462cca7bbda544395964a290a284f6e3379eb570cc0375e4fca93_prof);

        
        $__internal_7127b97672c6954fbf74b35afd362ed2235272bbf3e3fa5083b578e013465121->leave($__internal_7127b97672c6954fbf74b35afd362ed2235272bbf3e3fa5083b578e013465121_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
