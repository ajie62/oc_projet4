<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b88afbe5ac8819732840aa77d3d8418e6176402cc5a4bb74344c2caf3da6b863 extends Twig_Template
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
        $__internal_a34bfad31e9cca2f1a5b49a8aba7109ebea8814bbf24b9f81688b51ec4094ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34bfad31e9cca2f1a5b49a8aba7109ebea8814bbf24b9f81688b51ec4094ac1->enter($__internal_a34bfad31e9cca2f1a5b49a8aba7109ebea8814bbf24b9f81688b51ec4094ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_477a54adaa6e37f6e33f97ade58adda832b5f86c6b640f7f17a88c4aa6da6c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477a54adaa6e37f6e33f97ade58adda832b5f86c6b640f7f17a88c4aa6da6c14->enter($__internal_477a54adaa6e37f6e33f97ade58adda832b5f86c6b640f7f17a88c4aa6da6c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a34bfad31e9cca2f1a5b49a8aba7109ebea8814bbf24b9f81688b51ec4094ac1->leave($__internal_a34bfad31e9cca2f1a5b49a8aba7109ebea8814bbf24b9f81688b51ec4094ac1_prof);

        
        $__internal_477a54adaa6e37f6e33f97ade58adda832b5f86c6b640f7f17a88c4aa6da6c14->leave($__internal_477a54adaa6e37f6e33f97ade58adda832b5f86c6b640f7f17a88c4aa6da6c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
