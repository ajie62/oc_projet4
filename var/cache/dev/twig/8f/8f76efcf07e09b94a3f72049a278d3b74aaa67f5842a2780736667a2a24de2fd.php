<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7a425ba5388fe4406214097b75afb0faeeb4be3767c9a03b90e453885b090b26 extends Twig_Template
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
        $__internal_e4738a671dc9d4da3619d07be306a49605f096267a0d144fdd2f702849ae99b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4738a671dc9d4da3619d07be306a49605f096267a0d144fdd2f702849ae99b0->enter($__internal_e4738a671dc9d4da3619d07be306a49605f096267a0d144fdd2f702849ae99b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_07d5b622c0f94a54516c52f7893a6e3abe1793ecdb45bc6f42b32ab39ddfce35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d5b622c0f94a54516c52f7893a6e3abe1793ecdb45bc6f42b32ab39ddfce35->enter($__internal_07d5b622c0f94a54516c52f7893a6e3abe1793ecdb45bc6f42b32ab39ddfce35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e4738a671dc9d4da3619d07be306a49605f096267a0d144fdd2f702849ae99b0->leave($__internal_e4738a671dc9d4da3619d07be306a49605f096267a0d144fdd2f702849ae99b0_prof);

        
        $__internal_07d5b622c0f94a54516c52f7893a6e3abe1793ecdb45bc6f42b32ab39ddfce35->leave($__internal_07d5b622c0f94a54516c52f7893a6e3abe1793ecdb45bc6f42b32ab39ddfce35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
