<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_09f57fdc096c2fa445d0a549bf55a5781b4a46df10ff858bbab987900b12c25e extends Twig_Template
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
        $__internal_9d4189a40de410141554b82f09626f4bd6798447cacb7dc4df62552ae34b16ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4189a40de410141554b82f09626f4bd6798447cacb7dc4df62552ae34b16ea->enter($__internal_9d4189a40de410141554b82f09626f4bd6798447cacb7dc4df62552ae34b16ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ce040246fd09ea17ce4bc4822a6705e927fa944f3a5fc57af8c2cd126dea2631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce040246fd09ea17ce4bc4822a6705e927fa944f3a5fc57af8c2cd126dea2631->enter($__internal_ce040246fd09ea17ce4bc4822a6705e927fa944f3a5fc57af8c2cd126dea2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9d4189a40de410141554b82f09626f4bd6798447cacb7dc4df62552ae34b16ea->leave($__internal_9d4189a40de410141554b82f09626f4bd6798447cacb7dc4df62552ae34b16ea_prof);

        
        $__internal_ce040246fd09ea17ce4bc4822a6705e927fa944f3a5fc57af8c2cd126dea2631->leave($__internal_ce040246fd09ea17ce4bc4822a6705e927fa944f3a5fc57af8c2cd126dea2631_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
