<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8f3412f374250b587a219d506c0ca257ce70194906d1d27755db16a1c248a946 extends Twig_Template
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
        $__internal_83bc7f3e9ac0ef627a72c4000740f33d662e1d2018bbf3f250a9ea95dac184cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bc7f3e9ac0ef627a72c4000740f33d662e1d2018bbf3f250a9ea95dac184cf->enter($__internal_83bc7f3e9ac0ef627a72c4000740f33d662e1d2018bbf3f250a9ea95dac184cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_15d4947a3c8ef02e2b801073978c8657c617cbd55573eb811cc806d8ba243cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d4947a3c8ef02e2b801073978c8657c617cbd55573eb811cc806d8ba243cbc->enter($__internal_15d4947a3c8ef02e2b801073978c8657c617cbd55573eb811cc806d8ba243cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_83bc7f3e9ac0ef627a72c4000740f33d662e1d2018bbf3f250a9ea95dac184cf->leave($__internal_83bc7f3e9ac0ef627a72c4000740f33d662e1d2018bbf3f250a9ea95dac184cf_prof);

        
        $__internal_15d4947a3c8ef02e2b801073978c8657c617cbd55573eb811cc806d8ba243cbc->leave($__internal_15d4947a3c8ef02e2b801073978c8657c617cbd55573eb811cc806d8ba243cbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
