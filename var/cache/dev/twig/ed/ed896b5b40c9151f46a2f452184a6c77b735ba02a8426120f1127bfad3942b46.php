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
        $__internal_1b9ad69d214a10d212f3444fa070ffef4cd652d6d8bf9b33dae59d19f4c0745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9ad69d214a10d212f3444fa070ffef4cd652d6d8bf9b33dae59d19f4c0745e->enter($__internal_1b9ad69d214a10d212f3444fa070ffef4cd652d6d8bf9b33dae59d19f4c0745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5c4ad557e32c552c6c390c3425dd5452788c6bdd922bac8bbfd30464ed1f4b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4ad557e32c552c6c390c3425dd5452788c6bdd922bac8bbfd30464ed1f4b81->enter($__internal_5c4ad557e32c552c6c390c3425dd5452788c6bdd922bac8bbfd30464ed1f4b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1b9ad69d214a10d212f3444fa070ffef4cd652d6d8bf9b33dae59d19f4c0745e->leave($__internal_1b9ad69d214a10d212f3444fa070ffef4cd652d6d8bf9b33dae59d19f4c0745e_prof);

        
        $__internal_5c4ad557e32c552c6c390c3425dd5452788c6bdd922bac8bbfd30464ed1f4b81->leave($__internal_5c4ad557e32c552c6c390c3425dd5452788c6bdd922bac8bbfd30464ed1f4b81_prof);

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
