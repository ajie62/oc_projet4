<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2075be373b54ace421faf0284d3d48988b8a99c22724cda39017aa3d2132ffc5 extends Twig_Template
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
        $__internal_81713b3ba8ca2d9306b63d748e4c9ae99f558088c5ea716909be689109aba0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81713b3ba8ca2d9306b63d748e4c9ae99f558088c5ea716909be689109aba0c8->enter($__internal_81713b3ba8ca2d9306b63d748e4c9ae99f558088c5ea716909be689109aba0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3ecb0e98cf633e1eaff26b3b9d51b4a253fb14496c87e8195bbfc9ea4564a1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecb0e98cf633e1eaff26b3b9d51b4a253fb14496c87e8195bbfc9ea4564a1a3->enter($__internal_3ecb0e98cf633e1eaff26b3b9d51b4a253fb14496c87e8195bbfc9ea4564a1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_81713b3ba8ca2d9306b63d748e4c9ae99f558088c5ea716909be689109aba0c8->leave($__internal_81713b3ba8ca2d9306b63d748e4c9ae99f558088c5ea716909be689109aba0c8_prof);

        
        $__internal_3ecb0e98cf633e1eaff26b3b9d51b4a253fb14496c87e8195bbfc9ea4564a1a3->leave($__internal_3ecb0e98cf633e1eaff26b3b9d51b4a253fb14496c87e8195bbfc9ea4564a1a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
