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
        $__internal_07c404a889bb3c6fb00f6ea4b256106a74bde63bc44fc038b1fb9365a7321acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c404a889bb3c6fb00f6ea4b256106a74bde63bc44fc038b1fb9365a7321acb->enter($__internal_07c404a889bb3c6fb00f6ea4b256106a74bde63bc44fc038b1fb9365a7321acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_01b830454b688a4e64d37c1619013072157f780f53dadbaacee61c0995ac4461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b830454b688a4e64d37c1619013072157f780f53dadbaacee61c0995ac4461->enter($__internal_01b830454b688a4e64d37c1619013072157f780f53dadbaacee61c0995ac4461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_07c404a889bb3c6fb00f6ea4b256106a74bde63bc44fc038b1fb9365a7321acb->leave($__internal_07c404a889bb3c6fb00f6ea4b256106a74bde63bc44fc038b1fb9365a7321acb_prof);

        
        $__internal_01b830454b688a4e64d37c1619013072157f780f53dadbaacee61c0995ac4461->leave($__internal_01b830454b688a4e64d37c1619013072157f780f53dadbaacee61c0995ac4461_prof);

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
