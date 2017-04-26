<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b6beaf9787e5ce0fcd282433f12571fd3184cd40579d035db41bf67a73e2f1ef extends Twig_Template
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
        $__internal_378dd630b1141d2b304299ab698c184052307e8b28cd5788bcd41c07ed240e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378dd630b1141d2b304299ab698c184052307e8b28cd5788bcd41c07ed240e0f->enter($__internal_378dd630b1141d2b304299ab698c184052307e8b28cd5788bcd41c07ed240e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bad0c392ed82fe1a5c2756188020072c0faa8b6158fcfabba7d88e9d32585b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad0c392ed82fe1a5c2756188020072c0faa8b6158fcfabba7d88e9d32585b00->enter($__internal_bad0c392ed82fe1a5c2756188020072c0faa8b6158fcfabba7d88e9d32585b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_378dd630b1141d2b304299ab698c184052307e8b28cd5788bcd41c07ed240e0f->leave($__internal_378dd630b1141d2b304299ab698c184052307e8b28cd5788bcd41c07ed240e0f_prof);

        
        $__internal_bad0c392ed82fe1a5c2756188020072c0faa8b6158fcfabba7d88e9d32585b00->leave($__internal_bad0c392ed82fe1a5c2756188020072c0faa8b6158fcfabba7d88e9d32585b00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
