<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_da15a56bdd00dbe6db43a0fef215a7c585dbc8762353c937aeeae5705d8ed832 extends Twig_Template
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
        $__internal_2acf6ed5c16de3b6ebc8f560dde52abe70f5de8c5556a63ea82cf8056b18bc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acf6ed5c16de3b6ebc8f560dde52abe70f5de8c5556a63ea82cf8056b18bc58->enter($__internal_2acf6ed5c16de3b6ebc8f560dde52abe70f5de8c5556a63ea82cf8056b18bc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_409bdbce33ba07c44c6c7427a1c69c3000d09b22d0cc6fec3a5ffd0aed34430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409bdbce33ba07c44c6c7427a1c69c3000d09b22d0cc6fec3a5ffd0aed34430e->enter($__internal_409bdbce33ba07c44c6c7427a1c69c3000d09b22d0cc6fec3a5ffd0aed34430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2acf6ed5c16de3b6ebc8f560dde52abe70f5de8c5556a63ea82cf8056b18bc58->leave($__internal_2acf6ed5c16de3b6ebc8f560dde52abe70f5de8c5556a63ea82cf8056b18bc58_prof);

        
        $__internal_409bdbce33ba07c44c6c7427a1c69c3000d09b22d0cc6fec3a5ffd0aed34430e->leave($__internal_409bdbce33ba07c44c6c7427a1c69c3000d09b22d0cc6fec3a5ffd0aed34430e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
