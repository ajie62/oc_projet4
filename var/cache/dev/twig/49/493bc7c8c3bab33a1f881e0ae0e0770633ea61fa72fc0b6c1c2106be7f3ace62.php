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
        $__internal_001d0ba21c4c3ad2013e6e9b08f808bd24731f56dba599c828675c7c51903614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001d0ba21c4c3ad2013e6e9b08f808bd24731f56dba599c828675c7c51903614->enter($__internal_001d0ba21c4c3ad2013e6e9b08f808bd24731f56dba599c828675c7c51903614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d4f49f7a4063d00f24c342ca3d985c969f9a39075bc5350da7eb29cd5367e6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f49f7a4063d00f24c342ca3d985c969f9a39075bc5350da7eb29cd5367e6fb->enter($__internal_d4f49f7a4063d00f24c342ca3d985c969f9a39075bc5350da7eb29cd5367e6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_001d0ba21c4c3ad2013e6e9b08f808bd24731f56dba599c828675c7c51903614->leave($__internal_001d0ba21c4c3ad2013e6e9b08f808bd24731f56dba599c828675c7c51903614_prof);

        
        $__internal_d4f49f7a4063d00f24c342ca3d985c969f9a39075bc5350da7eb29cd5367e6fb->leave($__internal_d4f49f7a4063d00f24c342ca3d985c969f9a39075bc5350da7eb29cd5367e6fb_prof);

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
