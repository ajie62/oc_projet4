<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8f8146ecee8870f721910695e1821f70a61745c17c32238b5bf12b4745911ce3 extends Twig_Template
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
        $__internal_701c8497e634d82b5036844d490a7d7afc88e2420845d62a24328dc4676ff02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701c8497e634d82b5036844d490a7d7afc88e2420845d62a24328dc4676ff02f->enter($__internal_701c8497e634d82b5036844d490a7d7afc88e2420845d62a24328dc4676ff02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2de69102ce4b716e93028328329d6989c3c738aa74fbebcbba9e195a84690c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de69102ce4b716e93028328329d6989c3c738aa74fbebcbba9e195a84690c1e->enter($__internal_2de69102ce4b716e93028328329d6989c3c738aa74fbebcbba9e195a84690c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_701c8497e634d82b5036844d490a7d7afc88e2420845d62a24328dc4676ff02f->leave($__internal_701c8497e634d82b5036844d490a7d7afc88e2420845d62a24328dc4676ff02f_prof);

        
        $__internal_2de69102ce4b716e93028328329d6989c3c738aa74fbebcbba9e195a84690c1e->leave($__internal_2de69102ce4b716e93028328329d6989c3c738aa74fbebcbba9e195a84690c1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
