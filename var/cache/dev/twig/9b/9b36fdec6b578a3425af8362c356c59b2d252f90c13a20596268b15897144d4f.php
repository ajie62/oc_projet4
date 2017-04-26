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
        $__internal_72b1b4133d6f8fb16bfe92d38021f02c391dff1f1a730f27cb323c850efd7611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b1b4133d6f8fb16bfe92d38021f02c391dff1f1a730f27cb323c850efd7611->enter($__internal_72b1b4133d6f8fb16bfe92d38021f02c391dff1f1a730f27cb323c850efd7611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_889fd111af6872df5dcced5e9306f4dcf5940a7c07fddfd96bf0583d6e406852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889fd111af6872df5dcced5e9306f4dcf5940a7c07fddfd96bf0583d6e406852->enter($__internal_889fd111af6872df5dcced5e9306f4dcf5940a7c07fddfd96bf0583d6e406852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_72b1b4133d6f8fb16bfe92d38021f02c391dff1f1a730f27cb323c850efd7611->leave($__internal_72b1b4133d6f8fb16bfe92d38021f02c391dff1f1a730f27cb323c850efd7611_prof);

        
        $__internal_889fd111af6872df5dcced5e9306f4dcf5940a7c07fddfd96bf0583d6e406852->leave($__internal_889fd111af6872df5dcced5e9306f4dcf5940a7c07fddfd96bf0583d6e406852_prof);

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
