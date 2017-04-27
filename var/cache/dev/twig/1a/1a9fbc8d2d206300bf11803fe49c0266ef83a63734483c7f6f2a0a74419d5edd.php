<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d7134c60bdfb03fcded964db357eb9d80dec416458ee768d988085e49aad10c2 extends Twig_Template
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
        $__internal_9d697bc471a0f6e7179a73425780a0972af3495263cd4a45aba830bf8e9a8a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d697bc471a0f6e7179a73425780a0972af3495263cd4a45aba830bf8e9a8a1e->enter($__internal_9d697bc471a0f6e7179a73425780a0972af3495263cd4a45aba830bf8e9a8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_05048d14567675d6a8f1dd7de3f05b5bffbdec518f1a8d5e3e5bf7aea7f13d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05048d14567675d6a8f1dd7de3f05b5bffbdec518f1a8d5e3e5bf7aea7f13d98->enter($__internal_05048d14567675d6a8f1dd7de3f05b5bffbdec518f1a8d5e3e5bf7aea7f13d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9d697bc471a0f6e7179a73425780a0972af3495263cd4a45aba830bf8e9a8a1e->leave($__internal_9d697bc471a0f6e7179a73425780a0972af3495263cd4a45aba830bf8e9a8a1e_prof);

        
        $__internal_05048d14567675d6a8f1dd7de3f05b5bffbdec518f1a8d5e3e5bf7aea7f13d98->leave($__internal_05048d14567675d6a8f1dd7de3f05b5bffbdec518f1a8d5e3e5bf7aea7f13d98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
