<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2075be373b54ace421faf0284d3d48988b8a99c22724cda39017aa3d2132ffc5 extends Twig_Template
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
        $__internal_952be64aed854c88cf63349ba042b9f9965816b3f6ae16ec605f29c848151fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952be64aed854c88cf63349ba042b9f9965816b3f6ae16ec605f29c848151fca->enter($__internal_952be64aed854c88cf63349ba042b9f9965816b3f6ae16ec605f29c848151fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_743e9206b25296efb45d3f912bba8f7ca228d242b674b0465d6002aa4c987369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743e9206b25296efb45d3f912bba8f7ca228d242b674b0465d6002aa4c987369->enter($__internal_743e9206b25296efb45d3f912bba8f7ca228d242b674b0465d6002aa4c987369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_952be64aed854c88cf63349ba042b9f9965816b3f6ae16ec605f29c848151fca->leave($__internal_952be64aed854c88cf63349ba042b9f9965816b3f6ae16ec605f29c848151fca_prof);

        
        $__internal_743e9206b25296efb45d3f912bba8f7ca228d242b674b0465d6002aa4c987369->leave($__internal_743e9206b25296efb45d3f912bba8f7ca228d242b674b0465d6002aa4c987369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
