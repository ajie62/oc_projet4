<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_63c1d323467bdbe7e480cb76c4ea0383141e425b716ec17b4393e0cd0785f2f3 extends Twig_Template
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
        $__internal_48b78ff7a6bd4996e474a44218fc7ac85883a282bd06c39cd6593543eb7a4b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b78ff7a6bd4996e474a44218fc7ac85883a282bd06c39cd6593543eb7a4b98->enter($__internal_48b78ff7a6bd4996e474a44218fc7ac85883a282bd06c39cd6593543eb7a4b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_754ed7503addc3dd3237bef34bac9e586d6d3c96950faba8fd0e9b933cceaedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754ed7503addc3dd3237bef34bac9e586d6d3c96950faba8fd0e9b933cceaedf->enter($__internal_754ed7503addc3dd3237bef34bac9e586d6d3c96950faba8fd0e9b933cceaedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_48b78ff7a6bd4996e474a44218fc7ac85883a282bd06c39cd6593543eb7a4b98->leave($__internal_48b78ff7a6bd4996e474a44218fc7ac85883a282bd06c39cd6593543eb7a4b98_prof);

        
        $__internal_754ed7503addc3dd3237bef34bac9e586d6d3c96950faba8fd0e9b933cceaedf->leave($__internal_754ed7503addc3dd3237bef34bac9e586d6d3c96950faba8fd0e9b933cceaedf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
