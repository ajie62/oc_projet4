<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_54a49bd882fd89318ed8e9ed6e45ad27c0eefea373a657282027ca351c71c3a2 extends Twig_Template
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
        $__internal_e5116d0d015174364cef2b63a93aa2e0e0b9823f0ecf41f9a9011de9e32aa6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5116d0d015174364cef2b63a93aa2e0e0b9823f0ecf41f9a9011de9e32aa6e7->enter($__internal_e5116d0d015174364cef2b63a93aa2e0e0b9823f0ecf41f9a9011de9e32aa6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9923327a35508e7190b99021c142ee7ecee2b8b7b08c6e090c2489821f46d140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9923327a35508e7190b99021c142ee7ecee2b8b7b08c6e090c2489821f46d140->enter($__internal_9923327a35508e7190b99021c142ee7ecee2b8b7b08c6e090c2489821f46d140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e5116d0d015174364cef2b63a93aa2e0e0b9823f0ecf41f9a9011de9e32aa6e7->leave($__internal_e5116d0d015174364cef2b63a93aa2e0e0b9823f0ecf41f9a9011de9e32aa6e7_prof);

        
        $__internal_9923327a35508e7190b99021c142ee7ecee2b8b7b08c6e090c2489821f46d140->leave($__internal_9923327a35508e7190b99021c142ee7ecee2b8b7b08c6e090c2489821f46d140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
