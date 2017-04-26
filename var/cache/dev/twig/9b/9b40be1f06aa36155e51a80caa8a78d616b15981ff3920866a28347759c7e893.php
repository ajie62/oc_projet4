<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ecc7744c98b5237cdc12fe5b944d57d02363bb1bdacb8e49b043c21201e3e96f extends Twig_Template
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
        $__internal_f168c01d4288b87d919fd0a427890ecf12192d8a83bd6eec0e47aca5b3ce84be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f168c01d4288b87d919fd0a427890ecf12192d8a83bd6eec0e47aca5b3ce84be->enter($__internal_f168c01d4288b87d919fd0a427890ecf12192d8a83bd6eec0e47aca5b3ce84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e35e75f8f06386ce23669481a814c7b354187f9c6e0a7c7035490a6dc1f53838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35e75f8f06386ce23669481a814c7b354187f9c6e0a7c7035490a6dc1f53838->enter($__internal_e35e75f8f06386ce23669481a814c7b354187f9c6e0a7c7035490a6dc1f53838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f168c01d4288b87d919fd0a427890ecf12192d8a83bd6eec0e47aca5b3ce84be->leave($__internal_f168c01d4288b87d919fd0a427890ecf12192d8a83bd6eec0e47aca5b3ce84be_prof);

        
        $__internal_e35e75f8f06386ce23669481a814c7b354187f9c6e0a7c7035490a6dc1f53838->leave($__internal_e35e75f8f06386ce23669481a814c7b354187f9c6e0a7c7035490a6dc1f53838_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
