<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a29f0d0947a8e4e7288f85f1e8446c6f20406aafc88cd93ec6160750dd96d261 extends Twig_Template
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
        $__internal_bc090816ef3305e02c2f3665d97960e7dc6af4d719f49cb4eec681924934f77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc090816ef3305e02c2f3665d97960e7dc6af4d719f49cb4eec681924934f77d->enter($__internal_bc090816ef3305e02c2f3665d97960e7dc6af4d719f49cb4eec681924934f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f759497e99275dc1898f316b6dd6c7a1c07a52824729303d55f262d3e9c3d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f759497e99275dc1898f316b6dd6c7a1c07a52824729303d55f262d3e9c3d5a0->enter($__internal_f759497e99275dc1898f316b6dd6c7a1c07a52824729303d55f262d3e9c3d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bc090816ef3305e02c2f3665d97960e7dc6af4d719f49cb4eec681924934f77d->leave($__internal_bc090816ef3305e02c2f3665d97960e7dc6af4d719f49cb4eec681924934f77d_prof);

        
        $__internal_f759497e99275dc1898f316b6dd6c7a1c07a52824729303d55f262d3e9c3d5a0->leave($__internal_f759497e99275dc1898f316b6dd6c7a1c07a52824729303d55f262d3e9c3d5a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
