<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3bc1499e5865c8ec4a05c7d6b12879a934adcede952a863367c96e6e15e0bdcf extends Twig_Template
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
        $__internal_9810701a55c825e7fdea4ed635dea48ceea34b2048a87f3f26f2d8321bc4aa3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9810701a55c825e7fdea4ed635dea48ceea34b2048a87f3f26f2d8321bc4aa3b->enter($__internal_9810701a55c825e7fdea4ed635dea48ceea34b2048a87f3f26f2d8321bc4aa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5103e7afa0b8101df0ae76d11d7836d684c240633dee2d0bf8f5fceef4d5204b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5103e7afa0b8101df0ae76d11d7836d684c240633dee2d0bf8f5fceef4d5204b->enter($__internal_5103e7afa0b8101df0ae76d11d7836d684c240633dee2d0bf8f5fceef4d5204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9810701a55c825e7fdea4ed635dea48ceea34b2048a87f3f26f2d8321bc4aa3b->leave($__internal_9810701a55c825e7fdea4ed635dea48ceea34b2048a87f3f26f2d8321bc4aa3b_prof);

        
        $__internal_5103e7afa0b8101df0ae76d11d7836d684c240633dee2d0bf8f5fceef4d5204b->leave($__internal_5103e7afa0b8101df0ae76d11d7836d684c240633dee2d0bf8f5fceef4d5204b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
