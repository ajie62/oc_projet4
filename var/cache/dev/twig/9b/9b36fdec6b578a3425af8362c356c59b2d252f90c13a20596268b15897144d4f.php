<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d593f4458299476fc6b7d678190acab5d057489d282bdb6ae1dacf3df889929f extends Twig_Template
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
        $__internal_427ac5260570585b7a8aa2119b21b7950f1363c6bedf6487f64e706e47020a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427ac5260570585b7a8aa2119b21b7950f1363c6bedf6487f64e706e47020a3e->enter($__internal_427ac5260570585b7a8aa2119b21b7950f1363c6bedf6487f64e706e47020a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_106d0d223e8548a8c32c9045b6b9f72880a7ff7f983a25f4e78a049362ce7ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106d0d223e8548a8c32c9045b6b9f72880a7ff7f983a25f4e78a049362ce7ffa->enter($__internal_106d0d223e8548a8c32c9045b6b9f72880a7ff7f983a25f4e78a049362ce7ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_427ac5260570585b7a8aa2119b21b7950f1363c6bedf6487f64e706e47020a3e->leave($__internal_427ac5260570585b7a8aa2119b21b7950f1363c6bedf6487f64e706e47020a3e_prof);

        
        $__internal_106d0d223e8548a8c32c9045b6b9f72880a7ff7f983a25f4e78a049362ce7ffa->leave($__internal_106d0d223e8548a8c32c9045b6b9f72880a7ff7f983a25f4e78a049362ce7ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
