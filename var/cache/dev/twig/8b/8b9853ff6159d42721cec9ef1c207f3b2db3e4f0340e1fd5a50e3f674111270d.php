<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_335949916f5a8a044d4056474a36a2bc8e4a576af5116ec7c5f9dbfe693aa70c extends Twig_Template
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
        $__internal_187e07428fb0dc202568ea9d8cee200acd119223617aa2c8e964734d7566ec76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187e07428fb0dc202568ea9d8cee200acd119223617aa2c8e964734d7566ec76->enter($__internal_187e07428fb0dc202568ea9d8cee200acd119223617aa2c8e964734d7566ec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_15e5bcf49e0528beee6c9723f3cbe6302d7139112e01e5f12b9d992b670ad067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e5bcf49e0528beee6c9723f3cbe6302d7139112e01e5f12b9d992b670ad067->enter($__internal_15e5bcf49e0528beee6c9723f3cbe6302d7139112e01e5f12b9d992b670ad067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_187e07428fb0dc202568ea9d8cee200acd119223617aa2c8e964734d7566ec76->leave($__internal_187e07428fb0dc202568ea9d8cee200acd119223617aa2c8e964734d7566ec76_prof);

        
        $__internal_15e5bcf49e0528beee6c9723f3cbe6302d7139112e01e5f12b9d992b670ad067->leave($__internal_15e5bcf49e0528beee6c9723f3cbe6302d7139112e01e5f12b9d992b670ad067_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
