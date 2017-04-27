<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_eaf2528a88f9132f0d13fab3b1cdd16902b892dc97c17b755dc0a511b5392246 extends Twig_Template
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
        $__internal_99cc509d311a1ade84e4403a5e62118024cad34a46b3a2a989c4cc71b6d648a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cc509d311a1ade84e4403a5e62118024cad34a46b3a2a989c4cc71b6d648a0->enter($__internal_99cc509d311a1ade84e4403a5e62118024cad34a46b3a2a989c4cc71b6d648a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ad2c697d057c160d77e8264861d0198df128340f5ca22207f4e1681671ebcb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2c697d057c160d77e8264861d0198df128340f5ca22207f4e1681671ebcb39->enter($__internal_ad2c697d057c160d77e8264861d0198df128340f5ca22207f4e1681671ebcb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_99cc509d311a1ade84e4403a5e62118024cad34a46b3a2a989c4cc71b6d648a0->leave($__internal_99cc509d311a1ade84e4403a5e62118024cad34a46b3a2a989c4cc71b6d648a0_prof);

        
        $__internal_ad2c697d057c160d77e8264861d0198df128340f5ca22207f4e1681671ebcb39->leave($__internal_ad2c697d057c160d77e8264861d0198df128340f5ca22207f4e1681671ebcb39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
