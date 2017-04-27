<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_dea05a16990ecce5c4d4f705d6b312e6eaee5410cbc723b2cf9731a21c18b04a extends Twig_Template
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
        $__internal_46fe08b89ec42faabdf6cbd50ae1924cf6c013e9c70ed6a8cb05064c34031022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fe08b89ec42faabdf6cbd50ae1924cf6c013e9c70ed6a8cb05064c34031022->enter($__internal_46fe08b89ec42faabdf6cbd50ae1924cf6c013e9c70ed6a8cb05064c34031022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d9e5af2d861411d0f0c338cdcd63ac5f3fa9358a538b605d0d5a4986474546ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e5af2d861411d0f0c338cdcd63ac5f3fa9358a538b605d0d5a4986474546ab->enter($__internal_d9e5af2d861411d0f0c338cdcd63ac5f3fa9358a538b605d0d5a4986474546ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_46fe08b89ec42faabdf6cbd50ae1924cf6c013e9c70ed6a8cb05064c34031022->leave($__internal_46fe08b89ec42faabdf6cbd50ae1924cf6c013e9c70ed6a8cb05064c34031022_prof);

        
        $__internal_d9e5af2d861411d0f0c338cdcd63ac5f3fa9358a538b605d0d5a4986474546ab->leave($__internal_d9e5af2d861411d0f0c338cdcd63ac5f3fa9358a538b605d0d5a4986474546ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
