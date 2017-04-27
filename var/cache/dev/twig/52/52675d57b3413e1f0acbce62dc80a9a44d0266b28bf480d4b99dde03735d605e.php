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
        $__internal_a261d4a4fffa21393ddf7770bb15c06906f00f44731380131e940fae6180851f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a261d4a4fffa21393ddf7770bb15c06906f00f44731380131e940fae6180851f->enter($__internal_a261d4a4fffa21393ddf7770bb15c06906f00f44731380131e940fae6180851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8a5526c69f3a55e10d2e3abd044fe6a013f3e1a4821f099f5650c953ac1edfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5526c69f3a55e10d2e3abd044fe6a013f3e1a4821f099f5650c953ac1edfe4->enter($__internal_8a5526c69f3a55e10d2e3abd044fe6a013f3e1a4821f099f5650c953ac1edfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a261d4a4fffa21393ddf7770bb15c06906f00f44731380131e940fae6180851f->leave($__internal_a261d4a4fffa21393ddf7770bb15c06906f00f44731380131e940fae6180851f_prof);

        
        $__internal_8a5526c69f3a55e10d2e3abd044fe6a013f3e1a4821f099f5650c953ac1edfe4->leave($__internal_8a5526c69f3a55e10d2e3abd044fe6a013f3e1a4821f099f5650c953ac1edfe4_prof);

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
