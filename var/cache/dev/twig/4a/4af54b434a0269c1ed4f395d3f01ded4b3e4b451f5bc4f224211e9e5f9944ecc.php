<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0adc651a122259162d9c9952e4e54c95b27fc08ca5c9a6d3f319acc7b990e919 extends Twig_Template
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
        $__internal_692e6903f0ba2e7e934b7c7c80892e56b06e334c984497635156ebed5e9c1f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692e6903f0ba2e7e934b7c7c80892e56b06e334c984497635156ebed5e9c1f51->enter($__internal_692e6903f0ba2e7e934b7c7c80892e56b06e334c984497635156ebed5e9c1f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cb630fcb6d62ebb56a89f41b16a1524b6ebb173f944571fa87879d7f80827714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb630fcb6d62ebb56a89f41b16a1524b6ebb173f944571fa87879d7f80827714->enter($__internal_cb630fcb6d62ebb56a89f41b16a1524b6ebb173f944571fa87879d7f80827714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_692e6903f0ba2e7e934b7c7c80892e56b06e334c984497635156ebed5e9c1f51->leave($__internal_692e6903f0ba2e7e934b7c7c80892e56b06e334c984497635156ebed5e9c1f51_prof);

        
        $__internal_cb630fcb6d62ebb56a89f41b16a1524b6ebb173f944571fa87879d7f80827714->leave($__internal_cb630fcb6d62ebb56a89f41b16a1524b6ebb173f944571fa87879d7f80827714_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
