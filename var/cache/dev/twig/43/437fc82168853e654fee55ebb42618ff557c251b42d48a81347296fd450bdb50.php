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
        $__internal_ada33a8305c92f4d1e3974cfdd64a5bd941bb85d5d80f883b7cf211bc96276da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada33a8305c92f4d1e3974cfdd64a5bd941bb85d5d80f883b7cf211bc96276da->enter($__internal_ada33a8305c92f4d1e3974cfdd64a5bd941bb85d5d80f883b7cf211bc96276da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_307ba881ce99743b18c96d3126b9302389e0a005ec046c81dac4c3bda781a710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307ba881ce99743b18c96d3126b9302389e0a005ec046c81dac4c3bda781a710->enter($__internal_307ba881ce99743b18c96d3126b9302389e0a005ec046c81dac4c3bda781a710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ada33a8305c92f4d1e3974cfdd64a5bd941bb85d5d80f883b7cf211bc96276da->leave($__internal_ada33a8305c92f4d1e3974cfdd64a5bd941bb85d5d80f883b7cf211bc96276da_prof);

        
        $__internal_307ba881ce99743b18c96d3126b9302389e0a005ec046c81dac4c3bda781a710->leave($__internal_307ba881ce99743b18c96d3126b9302389e0a005ec046c81dac4c3bda781a710_prof);

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
