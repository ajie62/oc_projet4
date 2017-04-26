<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8f8146ecee8870f721910695e1821f70a61745c17c32238b5bf12b4745911ce3 extends Twig_Template
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
        $__internal_92db51c73f13b781fbf3cca2ad4dc3c619a399de1512a5dc2191e0f52c63ccf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92db51c73f13b781fbf3cca2ad4dc3c619a399de1512a5dc2191e0f52c63ccf9->enter($__internal_92db51c73f13b781fbf3cca2ad4dc3c619a399de1512a5dc2191e0f52c63ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6d20a9a21bbd57cf8be32bfd3e5730c06e43f7378a98a1fbeb26ace25efbf07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d20a9a21bbd57cf8be32bfd3e5730c06e43f7378a98a1fbeb26ace25efbf07e->enter($__internal_6d20a9a21bbd57cf8be32bfd3e5730c06e43f7378a98a1fbeb26ace25efbf07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_92db51c73f13b781fbf3cca2ad4dc3c619a399de1512a5dc2191e0f52c63ccf9->leave($__internal_92db51c73f13b781fbf3cca2ad4dc3c619a399de1512a5dc2191e0f52c63ccf9_prof);

        
        $__internal_6d20a9a21bbd57cf8be32bfd3e5730c06e43f7378a98a1fbeb26ace25efbf07e->leave($__internal_6d20a9a21bbd57cf8be32bfd3e5730c06e43f7378a98a1fbeb26ace25efbf07e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
