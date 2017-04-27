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
        $__internal_1d312e6c1e2ff807b644da36625cb410aa2a40a55916be5871e3ceb85ac756bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d312e6c1e2ff807b644da36625cb410aa2a40a55916be5871e3ceb85ac756bd->enter($__internal_1d312e6c1e2ff807b644da36625cb410aa2a40a55916be5871e3ceb85ac756bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9e1e22d131f5608435913c6353a380a073f46f1f40d093d448a522e05b5fdd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1e22d131f5608435913c6353a380a073f46f1f40d093d448a522e05b5fdd80->enter($__internal_9e1e22d131f5608435913c6353a380a073f46f1f40d093d448a522e05b5fdd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1d312e6c1e2ff807b644da36625cb410aa2a40a55916be5871e3ceb85ac756bd->leave($__internal_1d312e6c1e2ff807b644da36625cb410aa2a40a55916be5871e3ceb85ac756bd_prof);

        
        $__internal_9e1e22d131f5608435913c6353a380a073f46f1f40d093d448a522e05b5fdd80->leave($__internal_9e1e22d131f5608435913c6353a380a073f46f1f40d093d448a522e05b5fdd80_prof);

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
