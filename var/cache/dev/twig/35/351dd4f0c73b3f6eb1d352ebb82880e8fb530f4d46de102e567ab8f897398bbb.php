<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_dfeaa606c9d97cc28a839ce74b13bfdf31298925d3b79b059aa66592307f8f09 extends Twig_Template
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
        $__internal_971056fb062469650bf3bf40bf49ae7dc64cc0dcc8276266bedbc0182da71295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971056fb062469650bf3bf40bf49ae7dc64cc0dcc8276266bedbc0182da71295->enter($__internal_971056fb062469650bf3bf40bf49ae7dc64cc0dcc8276266bedbc0182da71295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c37de93129e858390a4b0980a072d2ffcd1132cd8ea86ae7a46cb170763f8dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37de93129e858390a4b0980a072d2ffcd1132cd8ea86ae7a46cb170763f8dab->enter($__internal_c37de93129e858390a4b0980a072d2ffcd1132cd8ea86ae7a46cb170763f8dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_971056fb062469650bf3bf40bf49ae7dc64cc0dcc8276266bedbc0182da71295->leave($__internal_971056fb062469650bf3bf40bf49ae7dc64cc0dcc8276266bedbc0182da71295_prof);

        
        $__internal_c37de93129e858390a4b0980a072d2ffcd1132cd8ea86ae7a46cb170763f8dab->leave($__internal_c37de93129e858390a4b0980a072d2ffcd1132cd8ea86ae7a46cb170763f8dab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
