<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a217ad47628e95383d6c1b49707d8a46c884495be6a9972b8485d066c58013cd extends Twig_Template
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
        $__internal_d118c4a2c1c3d77b3dfe27ffdbd602f5ecb610c94f62a8d635c830bda16473cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118c4a2c1c3d77b3dfe27ffdbd602f5ecb610c94f62a8d635c830bda16473cc->enter($__internal_d118c4a2c1c3d77b3dfe27ffdbd602f5ecb610c94f62a8d635c830bda16473cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2a9f79f4e54f60b65af75679ca788df024aeafbf81a76c6a769766870940bbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9f79f4e54f60b65af75679ca788df024aeafbf81a76c6a769766870940bbc4->enter($__internal_2a9f79f4e54f60b65af75679ca788df024aeafbf81a76c6a769766870940bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d118c4a2c1c3d77b3dfe27ffdbd602f5ecb610c94f62a8d635c830bda16473cc->leave($__internal_d118c4a2c1c3d77b3dfe27ffdbd602f5ecb610c94f62a8d635c830bda16473cc_prof);

        
        $__internal_2a9f79f4e54f60b65af75679ca788df024aeafbf81a76c6a769766870940bbc4->leave($__internal_2a9f79f4e54f60b65af75679ca788df024aeafbf81a76c6a769766870940bbc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
