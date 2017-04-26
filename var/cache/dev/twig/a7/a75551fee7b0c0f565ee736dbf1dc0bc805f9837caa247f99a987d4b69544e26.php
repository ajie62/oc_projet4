<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_08e0eff8729188651c2d6f7b322706a4f7064819e2470e93bb1c486a40c2b451 extends Twig_Template
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
        $__internal_c9a1ec8129d6a66fdc394ba50250a105cfdeb735db4e7aa66058e6f14198a18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a1ec8129d6a66fdc394ba50250a105cfdeb735db4e7aa66058e6f14198a18b->enter($__internal_c9a1ec8129d6a66fdc394ba50250a105cfdeb735db4e7aa66058e6f14198a18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_78a911409f382122b9cc06fbebc91f8e146640929b4124274c0e275d162c4b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a911409f382122b9cc06fbebc91f8e146640929b4124274c0e275d162c4b23->enter($__internal_78a911409f382122b9cc06fbebc91f8e146640929b4124274c0e275d162c4b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c9a1ec8129d6a66fdc394ba50250a105cfdeb735db4e7aa66058e6f14198a18b->leave($__internal_c9a1ec8129d6a66fdc394ba50250a105cfdeb735db4e7aa66058e6f14198a18b_prof);

        
        $__internal_78a911409f382122b9cc06fbebc91f8e146640929b4124274c0e275d162c4b23->leave($__internal_78a911409f382122b9cc06fbebc91f8e146640929b4124274c0e275d162c4b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
