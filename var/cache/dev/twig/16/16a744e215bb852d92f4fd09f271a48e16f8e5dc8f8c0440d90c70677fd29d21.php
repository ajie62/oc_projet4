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
        $__internal_31f67b26fb3d832b9d663b8c5602e4eb6e7b751a03f5d14320b6c624f3ec3af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f67b26fb3d832b9d663b8c5602e4eb6e7b751a03f5d14320b6c624f3ec3af5->enter($__internal_31f67b26fb3d832b9d663b8c5602e4eb6e7b751a03f5d14320b6c624f3ec3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_76eee63154d2b8255c537616985bfa05335068dae2e4681ec71bf1565794bdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eee63154d2b8255c537616985bfa05335068dae2e4681ec71bf1565794bdc1->enter($__internal_76eee63154d2b8255c537616985bfa05335068dae2e4681ec71bf1565794bdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_31f67b26fb3d832b9d663b8c5602e4eb6e7b751a03f5d14320b6c624f3ec3af5->leave($__internal_31f67b26fb3d832b9d663b8c5602e4eb6e7b751a03f5d14320b6c624f3ec3af5_prof);

        
        $__internal_76eee63154d2b8255c537616985bfa05335068dae2e4681ec71bf1565794bdc1->leave($__internal_76eee63154d2b8255c537616985bfa05335068dae2e4681ec71bf1565794bdc1_prof);

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
