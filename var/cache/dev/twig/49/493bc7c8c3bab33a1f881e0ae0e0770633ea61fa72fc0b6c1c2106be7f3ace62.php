<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df9477f5dc376f0c7f959801254f3f4e66845a6bd5e7784b42abb46496301720 extends Twig_Template
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
        $__internal_33bf8b2539a4455f407eac1c487f9f0eae8b62eee4a0514d650461fdb9dbbf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bf8b2539a4455f407eac1c487f9f0eae8b62eee4a0514d650461fdb9dbbf05->enter($__internal_33bf8b2539a4455f407eac1c487f9f0eae8b62eee4a0514d650461fdb9dbbf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5838fa4271e2cac72cc3398d129a89c306bb0512a63e671f24400eff1adb5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5838fa4271e2cac72cc3398d129a89c306bb0512a63e671f24400eff1adb5192->enter($__internal_5838fa4271e2cac72cc3398d129a89c306bb0512a63e671f24400eff1adb5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_33bf8b2539a4455f407eac1c487f9f0eae8b62eee4a0514d650461fdb9dbbf05->leave($__internal_33bf8b2539a4455f407eac1c487f9f0eae8b62eee4a0514d650461fdb9dbbf05_prof);

        
        $__internal_5838fa4271e2cac72cc3398d129a89c306bb0512a63e671f24400eff1adb5192->leave($__internal_5838fa4271e2cac72cc3398d129a89c306bb0512a63e671f24400eff1adb5192_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
