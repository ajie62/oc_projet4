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
        $__internal_fc45be1874cde8295119b969fbd9421a12bd6010b055f3cd5f91387ff094933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc45be1874cde8295119b969fbd9421a12bd6010b055f3cd5f91387ff094933c->enter($__internal_fc45be1874cde8295119b969fbd9421a12bd6010b055f3cd5f91387ff094933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f9cc80373aa3008de2563920c813f2f0ad3ebbfe6e0787237cb3f60189599b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cc80373aa3008de2563920c813f2f0ad3ebbfe6e0787237cb3f60189599b43->enter($__internal_f9cc80373aa3008de2563920c813f2f0ad3ebbfe6e0787237cb3f60189599b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fc45be1874cde8295119b969fbd9421a12bd6010b055f3cd5f91387ff094933c->leave($__internal_fc45be1874cde8295119b969fbd9421a12bd6010b055f3cd5f91387ff094933c_prof);

        
        $__internal_f9cc80373aa3008de2563920c813f2f0ad3ebbfe6e0787237cb3f60189599b43->leave($__internal_f9cc80373aa3008de2563920c813f2f0ad3ebbfe6e0787237cb3f60189599b43_prof);

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
