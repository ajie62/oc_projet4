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
        $__internal_70ee5f05d0b10eb27e4ddb683a2c9104f75c33d6633591d8d28858b71686d538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ee5f05d0b10eb27e4ddb683a2c9104f75c33d6633591d8d28858b71686d538->enter($__internal_70ee5f05d0b10eb27e4ddb683a2c9104f75c33d6633591d8d28858b71686d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3ead90c037468d9b8c5ba9bfae704f4172cf5a9f66742b37fc73f9ca9445aff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ead90c037468d9b8c5ba9bfae704f4172cf5a9f66742b37fc73f9ca9445aff7->enter($__internal_3ead90c037468d9b8c5ba9bfae704f4172cf5a9f66742b37fc73f9ca9445aff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_70ee5f05d0b10eb27e4ddb683a2c9104f75c33d6633591d8d28858b71686d538->leave($__internal_70ee5f05d0b10eb27e4ddb683a2c9104f75c33d6633591d8d28858b71686d538_prof);

        
        $__internal_3ead90c037468d9b8c5ba9bfae704f4172cf5a9f66742b37fc73f9ca9445aff7->leave($__internal_3ead90c037468d9b8c5ba9bfae704f4172cf5a9f66742b37fc73f9ca9445aff7_prof);

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
