<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1a53130a05d3060f631f3ed28c533733cf26e7c30c2320c73b45076c72161116 extends Twig_Template
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
        $__internal_d910a76cb3c4740dfdbd3da7706948f44637897a4d062cab178dddab76732af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d910a76cb3c4740dfdbd3da7706948f44637897a4d062cab178dddab76732af8->enter($__internal_d910a76cb3c4740dfdbd3da7706948f44637897a4d062cab178dddab76732af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f6292bd35e4fc438906f4e06d791cb382c46fcbf717953a6782e9e7ed58264ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6292bd35e4fc438906f4e06d791cb382c46fcbf717953a6782e9e7ed58264ad->enter($__internal_f6292bd35e4fc438906f4e06d791cb382c46fcbf717953a6782e9e7ed58264ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d910a76cb3c4740dfdbd3da7706948f44637897a4d062cab178dddab76732af8->leave($__internal_d910a76cb3c4740dfdbd3da7706948f44637897a4d062cab178dddab76732af8_prof);

        
        $__internal_f6292bd35e4fc438906f4e06d791cb382c46fcbf717953a6782e9e7ed58264ad->leave($__internal_f6292bd35e4fc438906f4e06d791cb382c46fcbf717953a6782e9e7ed58264ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
