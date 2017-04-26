<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_01d890232f886af69cd51af80038b0632b147c79701aff63fbb22301634cbb1b extends Twig_Template
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
        $__internal_4c94484433e7a4e5a52bd2149c3893bd16d5add602fe59ddedd88754c2539946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c94484433e7a4e5a52bd2149c3893bd16d5add602fe59ddedd88754c2539946->enter($__internal_4c94484433e7a4e5a52bd2149c3893bd16d5add602fe59ddedd88754c2539946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f4b38c8cf2f8569598392bc6ee40e3429ac92768ee8c9263a4124542f09fc885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b38c8cf2f8569598392bc6ee40e3429ac92768ee8c9263a4124542f09fc885->enter($__internal_f4b38c8cf2f8569598392bc6ee40e3429ac92768ee8c9263a4124542f09fc885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4c94484433e7a4e5a52bd2149c3893bd16d5add602fe59ddedd88754c2539946->leave($__internal_4c94484433e7a4e5a52bd2149c3893bd16d5add602fe59ddedd88754c2539946_prof);

        
        $__internal_f4b38c8cf2f8569598392bc6ee40e3429ac92768ee8c9263a4124542f09fc885->leave($__internal_f4b38c8cf2f8569598392bc6ee40e3429ac92768ee8c9263a4124542f09fc885_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
