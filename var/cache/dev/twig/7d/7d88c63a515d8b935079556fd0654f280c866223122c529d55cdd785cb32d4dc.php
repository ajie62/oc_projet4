<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_52c9e88a5f3e6721bc4c18856fe5d3ad361d66cbe64e1a9401b6235596ea6d82 extends Twig_Template
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
        $__internal_62d654a66e2321f4e68db61719fc93ea2e634e8061ae4b1b2c50ba1718ff72b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d654a66e2321f4e68db61719fc93ea2e634e8061ae4b1b2c50ba1718ff72b1->enter($__internal_62d654a66e2321f4e68db61719fc93ea2e634e8061ae4b1b2c50ba1718ff72b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_68702caf977ee83ca94a20628f21e9a9e1fa72789201104a897ea0c70b15c55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68702caf977ee83ca94a20628f21e9a9e1fa72789201104a897ea0c70b15c55f->enter($__internal_68702caf977ee83ca94a20628f21e9a9e1fa72789201104a897ea0c70b15c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_62d654a66e2321f4e68db61719fc93ea2e634e8061ae4b1b2c50ba1718ff72b1->leave($__internal_62d654a66e2321f4e68db61719fc93ea2e634e8061ae4b1b2c50ba1718ff72b1_prof);

        
        $__internal_68702caf977ee83ca94a20628f21e9a9e1fa72789201104a897ea0c70b15c55f->leave($__internal_68702caf977ee83ca94a20628f21e9a9e1fa72789201104a897ea0c70b15c55f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
