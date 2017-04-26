<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3317d1aada4ab8e6f55e80b8d7dd07faa870c14140b4b69811d47dfb7879e2e8 extends Twig_Template
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
        $__internal_a9aa17587a069cf7acc7d5d223a5814b5d31c4e2414119f683d85a47c6d059fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9aa17587a069cf7acc7d5d223a5814b5d31c4e2414119f683d85a47c6d059fd->enter($__internal_a9aa17587a069cf7acc7d5d223a5814b5d31c4e2414119f683d85a47c6d059fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_96d058818c2f6cdbed0662fad45cea7c7b01adcc7a1c0ae7957c7d507418db78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d058818c2f6cdbed0662fad45cea7c7b01adcc7a1c0ae7957c7d507418db78->enter($__internal_96d058818c2f6cdbed0662fad45cea7c7b01adcc7a1c0ae7957c7d507418db78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a9aa17587a069cf7acc7d5d223a5814b5d31c4e2414119f683d85a47c6d059fd->leave($__internal_a9aa17587a069cf7acc7d5d223a5814b5d31c4e2414119f683d85a47c6d059fd_prof);

        
        $__internal_96d058818c2f6cdbed0662fad45cea7c7b01adcc7a1c0ae7957c7d507418db78->leave($__internal_96d058818c2f6cdbed0662fad45cea7c7b01adcc7a1c0ae7957c7d507418db78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
