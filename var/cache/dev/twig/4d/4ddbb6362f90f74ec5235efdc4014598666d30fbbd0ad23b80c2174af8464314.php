<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1fc27556285e89f27223a94a4a15169060a85223e538b5a974c90defdf8497f4 extends Twig_Template
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
        $__internal_ff6eb54d5f1f2c414e43b20cf3115cb43e575a42f2bbbacc6c5f426f37c69461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6eb54d5f1f2c414e43b20cf3115cb43e575a42f2bbbacc6c5f426f37c69461->enter($__internal_ff6eb54d5f1f2c414e43b20cf3115cb43e575a42f2bbbacc6c5f426f37c69461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ec9a85ead636178b84739fc3f3ddf31df1280508664a5d0d706da9b287613bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9a85ead636178b84739fc3f3ddf31df1280508664a5d0d706da9b287613bde->enter($__internal_ec9a85ead636178b84739fc3f3ddf31df1280508664a5d0d706da9b287613bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ff6eb54d5f1f2c414e43b20cf3115cb43e575a42f2bbbacc6c5f426f37c69461->leave($__internal_ff6eb54d5f1f2c414e43b20cf3115cb43e575a42f2bbbacc6c5f426f37c69461_prof);

        
        $__internal_ec9a85ead636178b84739fc3f3ddf31df1280508664a5d0d706da9b287613bde->leave($__internal_ec9a85ead636178b84739fc3f3ddf31df1280508664a5d0d706da9b287613bde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
