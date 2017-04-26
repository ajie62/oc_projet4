<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d096747f5565bab6ea01667e6269355b223688246d0d30d024384d1793a67b99 extends Twig_Template
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
        $__internal_ce034666f22f1813c85d20d3eb5223863b163a1724e7dcf80ddad81d7f07d0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce034666f22f1813c85d20d3eb5223863b163a1724e7dcf80ddad81d7f07d0dc->enter($__internal_ce034666f22f1813c85d20d3eb5223863b163a1724e7dcf80ddad81d7f07d0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5a777858462c39ad3629542a09aec6867175d54d5bac2c77d15b3be81755e733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a777858462c39ad3629542a09aec6867175d54d5bac2c77d15b3be81755e733->enter($__internal_5a777858462c39ad3629542a09aec6867175d54d5bac2c77d15b3be81755e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ce034666f22f1813c85d20d3eb5223863b163a1724e7dcf80ddad81d7f07d0dc->leave($__internal_ce034666f22f1813c85d20d3eb5223863b163a1724e7dcf80ddad81d7f07d0dc_prof);

        
        $__internal_5a777858462c39ad3629542a09aec6867175d54d5bac2c77d15b3be81755e733->leave($__internal_5a777858462c39ad3629542a09aec6867175d54d5bac2c77d15b3be81755e733_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
