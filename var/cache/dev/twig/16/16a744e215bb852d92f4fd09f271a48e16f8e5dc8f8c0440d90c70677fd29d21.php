<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b96aff5371ed18be00f3b7a7b42f24e4ff1ffc0e831ab1a3d9f1b5cf079399db extends Twig_Template
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
        $__internal_9cb54b10f894cf14af01cb549eaddbfe9c67cb30f0ca64fb409cf25c8fbc7c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb54b10f894cf14af01cb549eaddbfe9c67cb30f0ca64fb409cf25c8fbc7c5a->enter($__internal_9cb54b10f894cf14af01cb549eaddbfe9c67cb30f0ca64fb409cf25c8fbc7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_ea8f72df04f21f8851c631bb5ed249bbaa352c2e499e5bbcbbb445bda008fe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8f72df04f21f8851c631bb5ed249bbaa352c2e499e5bbcbbb445bda008fe9a->enter($__internal_ea8f72df04f21f8851c631bb5ed249bbaa352c2e499e5bbcbbb445bda008fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9cb54b10f894cf14af01cb549eaddbfe9c67cb30f0ca64fb409cf25c8fbc7c5a->leave($__internal_9cb54b10f894cf14af01cb549eaddbfe9c67cb30f0ca64fb409cf25c8fbc7c5a_prof);

        
        $__internal_ea8f72df04f21f8851c631bb5ed249bbaa352c2e499e5bbcbbb445bda008fe9a->leave($__internal_ea8f72df04f21f8851c631bb5ed249bbaa352c2e499e5bbcbbb445bda008fe9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
