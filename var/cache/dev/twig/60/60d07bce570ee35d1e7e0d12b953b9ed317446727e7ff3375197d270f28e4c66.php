<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_37ab8e39fa2b3a7c2bdd4028659400af6747a6bdb9ef1fd47c1e2c9c7d47c7bc extends Twig_Template
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
        $__internal_62acac9b1ae1d12d3c56496d056ca739a572174d59927f68887142e06cd44acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62acac9b1ae1d12d3c56496d056ca739a572174d59927f68887142e06cd44acd->enter($__internal_62acac9b1ae1d12d3c56496d056ca739a572174d59927f68887142e06cd44acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6411d217f584cd6f0c2404f7e6d0b0ebe8ef271afbd5dd131dac9a8467c8e794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6411d217f584cd6f0c2404f7e6d0b0ebe8ef271afbd5dd131dac9a8467c8e794->enter($__internal_6411d217f584cd6f0c2404f7e6d0b0ebe8ef271afbd5dd131dac9a8467c8e794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_62acac9b1ae1d12d3c56496d056ca739a572174d59927f68887142e06cd44acd->leave($__internal_62acac9b1ae1d12d3c56496d056ca739a572174d59927f68887142e06cd44acd_prof);

        
        $__internal_6411d217f584cd6f0c2404f7e6d0b0ebe8ef271afbd5dd131dac9a8467c8e794->leave($__internal_6411d217f584cd6f0c2404f7e6d0b0ebe8ef271afbd5dd131dac9a8467c8e794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
