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
        $__internal_e95c2e2ce0384958a3d0ebe4d2beffdc821c920f6a5bb0d340b5a9777ea07c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95c2e2ce0384958a3d0ebe4d2beffdc821c920f6a5bb0d340b5a9777ea07c44->enter($__internal_e95c2e2ce0384958a3d0ebe4d2beffdc821c920f6a5bb0d340b5a9777ea07c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1eba61fab73b60bc0cf499f7ee38bda99fa3ebbd50f6c4e7029d4f312f6fffb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eba61fab73b60bc0cf499f7ee38bda99fa3ebbd50f6c4e7029d4f312f6fffb4->enter($__internal_1eba61fab73b60bc0cf499f7ee38bda99fa3ebbd50f6c4e7029d4f312f6fffb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e95c2e2ce0384958a3d0ebe4d2beffdc821c920f6a5bb0d340b5a9777ea07c44->leave($__internal_e95c2e2ce0384958a3d0ebe4d2beffdc821c920f6a5bb0d340b5a9777ea07c44_prof);

        
        $__internal_1eba61fab73b60bc0cf499f7ee38bda99fa3ebbd50f6c4e7029d4f312f6fffb4->leave($__internal_1eba61fab73b60bc0cf499f7ee38bda99fa3ebbd50f6c4e7029d4f312f6fffb4_prof);

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
