<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_91e040af0420d93321c06321941f9812f86d48de80a416169b577cd61c38ba72 extends Twig_Template
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
        $__internal_1fda6ec7be82fbe51a993d9d959d5585c31c35ef43ac2642fc4e05452e6df29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fda6ec7be82fbe51a993d9d959d5585c31c35ef43ac2642fc4e05452e6df29c->enter($__internal_1fda6ec7be82fbe51a993d9d959d5585c31c35ef43ac2642fc4e05452e6df29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e9c9ff432547cebd98397e110a015d9521e79395857d25f2b914b50e50d4f672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c9ff432547cebd98397e110a015d9521e79395857d25f2b914b50e50d4f672->enter($__internal_e9c9ff432547cebd98397e110a015d9521e79395857d25f2b914b50e50d4f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1fda6ec7be82fbe51a993d9d959d5585c31c35ef43ac2642fc4e05452e6df29c->leave($__internal_1fda6ec7be82fbe51a993d9d959d5585c31c35ef43ac2642fc4e05452e6df29c_prof);

        
        $__internal_e9c9ff432547cebd98397e110a015d9521e79395857d25f2b914b50e50d4f672->leave($__internal_e9c9ff432547cebd98397e110a015d9521e79395857d25f2b914b50e50d4f672_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
