<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_873a968dd5199e9135921159b6258678948c5ec655c67f9d5d58381bbf075786 extends Twig_Template
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
        $__internal_7d5369736c73ee403ead026cb8aaf0ffa1ca92bd0cc5363538b8d511c944d55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5369736c73ee403ead026cb8aaf0ffa1ca92bd0cc5363538b8d511c944d55d->enter($__internal_7d5369736c73ee403ead026cb8aaf0ffa1ca92bd0cc5363538b8d511c944d55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d0a36c0258f48bb79841078698c78129d66e0e9797876fbf46050ae78d18ce81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a36c0258f48bb79841078698c78129d66e0e9797876fbf46050ae78d18ce81->enter($__internal_d0a36c0258f48bb79841078698c78129d66e0e9797876fbf46050ae78d18ce81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7d5369736c73ee403ead026cb8aaf0ffa1ca92bd0cc5363538b8d511c944d55d->leave($__internal_7d5369736c73ee403ead026cb8aaf0ffa1ca92bd0cc5363538b8d511c944d55d_prof);

        
        $__internal_d0a36c0258f48bb79841078698c78129d66e0e9797876fbf46050ae78d18ce81->leave($__internal_d0a36c0258f48bb79841078698c78129d66e0e9797876fbf46050ae78d18ce81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
