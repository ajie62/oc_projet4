<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1fc27556285e89f27223a94a4a15169060a85223e538b5a974c90defdf8497f4 extends Twig_Template
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
        $__internal_d6423f9230ac9e8d74daed9128b538af994fef5831348ccc566dc24995416412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6423f9230ac9e8d74daed9128b538af994fef5831348ccc566dc24995416412->enter($__internal_d6423f9230ac9e8d74daed9128b538af994fef5831348ccc566dc24995416412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8b6ba1416262f8392466bcf8cff8f31e559d1671639f8e29503bd58186f61e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6ba1416262f8392466bcf8cff8f31e559d1671639f8e29503bd58186f61e84->enter($__internal_8b6ba1416262f8392466bcf8cff8f31e559d1671639f8e29503bd58186f61e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d6423f9230ac9e8d74daed9128b538af994fef5831348ccc566dc24995416412->leave($__internal_d6423f9230ac9e8d74daed9128b538af994fef5831348ccc566dc24995416412_prof);

        
        $__internal_8b6ba1416262f8392466bcf8cff8f31e559d1671639f8e29503bd58186f61e84->leave($__internal_8b6ba1416262f8392466bcf8cff8f31e559d1671639f8e29503bd58186f61e84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
