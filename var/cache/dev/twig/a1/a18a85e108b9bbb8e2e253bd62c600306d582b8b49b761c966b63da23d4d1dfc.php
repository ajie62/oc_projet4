<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_aeec6f8bd4b5ec70df5101ef6dcca1f353f97f5f621f14d64af8d9d70298a9a6 extends Twig_Template
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
        $__internal_130c333bc2cdef0803626c9f5afcb1ee6db9014666e78612a55333d10419c860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130c333bc2cdef0803626c9f5afcb1ee6db9014666e78612a55333d10419c860->enter($__internal_130c333bc2cdef0803626c9f5afcb1ee6db9014666e78612a55333d10419c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_09742526efa915943cd545dcf751c0d0fb87012906deb9c552524b5457dab900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09742526efa915943cd545dcf751c0d0fb87012906deb9c552524b5457dab900->enter($__internal_09742526efa915943cd545dcf751c0d0fb87012906deb9c552524b5457dab900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_130c333bc2cdef0803626c9f5afcb1ee6db9014666e78612a55333d10419c860->leave($__internal_130c333bc2cdef0803626c9f5afcb1ee6db9014666e78612a55333d10419c860_prof);

        
        $__internal_09742526efa915943cd545dcf751c0d0fb87012906deb9c552524b5457dab900->leave($__internal_09742526efa915943cd545dcf751c0d0fb87012906deb9c552524b5457dab900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
