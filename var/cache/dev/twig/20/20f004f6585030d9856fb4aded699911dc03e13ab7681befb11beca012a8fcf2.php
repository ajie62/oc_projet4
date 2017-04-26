<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20230360d63d8ced4f898b3c3056169aab1752f9979bfddc1e440a08d52b691f extends Twig_Template
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
        $__internal_44056ed9832b9b9f60ea403e7984a8f628ac6f91a22331cc42e95b5c3de52834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44056ed9832b9b9f60ea403e7984a8f628ac6f91a22331cc42e95b5c3de52834->enter($__internal_44056ed9832b9b9f60ea403e7984a8f628ac6f91a22331cc42e95b5c3de52834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_574da060d1cd28eefd5dbf3fd80aa47d157400378cb123d8ec7b859c3b2f9eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574da060d1cd28eefd5dbf3fd80aa47d157400378cb123d8ec7b859c3b2f9eeb->enter($__internal_574da060d1cd28eefd5dbf3fd80aa47d157400378cb123d8ec7b859c3b2f9eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_44056ed9832b9b9f60ea403e7984a8f628ac6f91a22331cc42e95b5c3de52834->leave($__internal_44056ed9832b9b9f60ea403e7984a8f628ac6f91a22331cc42e95b5c3de52834_prof);

        
        $__internal_574da060d1cd28eefd5dbf3fd80aa47d157400378cb123d8ec7b859c3b2f9eeb->leave($__internal_574da060d1cd28eefd5dbf3fd80aa47d157400378cb123d8ec7b859c3b2f9eeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
