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
        $__internal_088e00c9de04a7b30bf387e927fb0639cf2c3b3d25f33d79368eec4844f4f2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088e00c9de04a7b30bf387e927fb0639cf2c3b3d25f33d79368eec4844f4f2d2->enter($__internal_088e00c9de04a7b30bf387e927fb0639cf2c3b3d25f33d79368eec4844f4f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b520f9d7c7ce5b8fefa5effba06862d5a3bc0f2081875ad511babb0a8ebedf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b520f9d7c7ce5b8fefa5effba06862d5a3bc0f2081875ad511babb0a8ebedf25->enter($__internal_b520f9d7c7ce5b8fefa5effba06862d5a3bc0f2081875ad511babb0a8ebedf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_088e00c9de04a7b30bf387e927fb0639cf2c3b3d25f33d79368eec4844f4f2d2->leave($__internal_088e00c9de04a7b30bf387e927fb0639cf2c3b3d25f33d79368eec4844f4f2d2_prof);

        
        $__internal_b520f9d7c7ce5b8fefa5effba06862d5a3bc0f2081875ad511babb0a8ebedf25->leave($__internal_b520f9d7c7ce5b8fefa5effba06862d5a3bc0f2081875ad511babb0a8ebedf25_prof);

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
