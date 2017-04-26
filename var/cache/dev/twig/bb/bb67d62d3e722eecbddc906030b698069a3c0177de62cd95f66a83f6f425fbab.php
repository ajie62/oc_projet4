<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ea294f2e7259562bf9f96625486c06b4e2da4469bbaef87f051ef1826e89836f extends Twig_Template
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
        $__internal_86e296b6ea70c4d0abd8dea7c7003302da0cba86b5aedef24f61b20a518e6540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e296b6ea70c4d0abd8dea7c7003302da0cba86b5aedef24f61b20a518e6540->enter($__internal_86e296b6ea70c4d0abd8dea7c7003302da0cba86b5aedef24f61b20a518e6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4646b2336f6de1b1e17e9eea1515bc77a2e5676785bc1188308b6b2c38ed7792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4646b2336f6de1b1e17e9eea1515bc77a2e5676785bc1188308b6b2c38ed7792->enter($__internal_4646b2336f6de1b1e17e9eea1515bc77a2e5676785bc1188308b6b2c38ed7792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_86e296b6ea70c4d0abd8dea7c7003302da0cba86b5aedef24f61b20a518e6540->leave($__internal_86e296b6ea70c4d0abd8dea7c7003302da0cba86b5aedef24f61b20a518e6540_prof);

        
        $__internal_4646b2336f6de1b1e17e9eea1515bc77a2e5676785bc1188308b6b2c38ed7792->leave($__internal_4646b2336f6de1b1e17e9eea1515bc77a2e5676785bc1188308b6b2c38ed7792_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
