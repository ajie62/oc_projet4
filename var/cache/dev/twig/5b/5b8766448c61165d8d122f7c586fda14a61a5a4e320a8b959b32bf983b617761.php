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
        $__internal_50eb0646020ab05387be214d7dd517cfd0191951db9e4cb8f115ecfc4007a967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eb0646020ab05387be214d7dd517cfd0191951db9e4cb8f115ecfc4007a967->enter($__internal_50eb0646020ab05387be214d7dd517cfd0191951db9e4cb8f115ecfc4007a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_99eb52707dc92a75505a50d237ad5dc9d4934be0dd0a42d8fc3bbc187b9398ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99eb52707dc92a75505a50d237ad5dc9d4934be0dd0a42d8fc3bbc187b9398ac->enter($__internal_99eb52707dc92a75505a50d237ad5dc9d4934be0dd0a42d8fc3bbc187b9398ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_50eb0646020ab05387be214d7dd517cfd0191951db9e4cb8f115ecfc4007a967->leave($__internal_50eb0646020ab05387be214d7dd517cfd0191951db9e4cb8f115ecfc4007a967_prof);

        
        $__internal_99eb52707dc92a75505a50d237ad5dc9d4934be0dd0a42d8fc3bbc187b9398ac->leave($__internal_99eb52707dc92a75505a50d237ad5dc9d4934be0dd0a42d8fc3bbc187b9398ac_prof);

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
