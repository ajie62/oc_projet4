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
        $__internal_6012112678d618ac3b061123f8772a3b0428147bd07ea5d34f325baaa1f720ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6012112678d618ac3b061123f8772a3b0428147bd07ea5d34f325baaa1f720ee->enter($__internal_6012112678d618ac3b061123f8772a3b0428147bd07ea5d34f325baaa1f720ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2edc25815f5b8cb88493c7882e3553f9190ce6d4be4ab7652a3b2c0515c0b28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edc25815f5b8cb88493c7882e3553f9190ce6d4be4ab7652a3b2c0515c0b28e->enter($__internal_2edc25815f5b8cb88493c7882e3553f9190ce6d4be4ab7652a3b2c0515c0b28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6012112678d618ac3b061123f8772a3b0428147bd07ea5d34f325baaa1f720ee->leave($__internal_6012112678d618ac3b061123f8772a3b0428147bd07ea5d34f325baaa1f720ee_prof);

        
        $__internal_2edc25815f5b8cb88493c7882e3553f9190ce6d4be4ab7652a3b2c0515c0b28e->leave($__internal_2edc25815f5b8cb88493c7882e3553f9190ce6d4be4ab7652a3b2c0515c0b28e_prof);

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
