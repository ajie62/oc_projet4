<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_91e040af0420d93321c06321941f9812f86d48de80a416169b577cd61c38ba72 extends Twig_Template
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
        $__internal_df4cbe53b8378932e526dfd1ba548bee59c6a37a23620b445452db59e902ea99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4cbe53b8378932e526dfd1ba548bee59c6a37a23620b445452db59e902ea99->enter($__internal_df4cbe53b8378932e526dfd1ba548bee59c6a37a23620b445452db59e902ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a253aed05c4582a62cda0aaa120caeff1bb7bac4d60c7a9fe10745468dbe6cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a253aed05c4582a62cda0aaa120caeff1bb7bac4d60c7a9fe10745468dbe6cce->enter($__internal_a253aed05c4582a62cda0aaa120caeff1bb7bac4d60c7a9fe10745468dbe6cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df4cbe53b8378932e526dfd1ba548bee59c6a37a23620b445452db59e902ea99->leave($__internal_df4cbe53b8378932e526dfd1ba548bee59c6a37a23620b445452db59e902ea99_prof);

        
        $__internal_a253aed05c4582a62cda0aaa120caeff1bb7bac4d60c7a9fe10745468dbe6cce->leave($__internal_a253aed05c4582a62cda0aaa120caeff1bb7bac4d60c7a9fe10745468dbe6cce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
