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
        $__internal_0ecf3d9309289f1f5eb94b849995214cd4b51f07dbd430d2ff1fc8d511734fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecf3d9309289f1f5eb94b849995214cd4b51f07dbd430d2ff1fc8d511734fed->enter($__internal_0ecf3d9309289f1f5eb94b849995214cd4b51f07dbd430d2ff1fc8d511734fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c27a020b8d9909bb75f8798cfc48a35db2806f0142227b45fb19079e1a3c8207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27a020b8d9909bb75f8798cfc48a35db2806f0142227b45fb19079e1a3c8207->enter($__internal_c27a020b8d9909bb75f8798cfc48a35db2806f0142227b45fb19079e1a3c8207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0ecf3d9309289f1f5eb94b849995214cd4b51f07dbd430d2ff1fc8d511734fed->leave($__internal_0ecf3d9309289f1f5eb94b849995214cd4b51f07dbd430d2ff1fc8d511734fed_prof);

        
        $__internal_c27a020b8d9909bb75f8798cfc48a35db2806f0142227b45fb19079e1a3c8207->leave($__internal_c27a020b8d9909bb75f8798cfc48a35db2806f0142227b45fb19079e1a3c8207_prof);

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
