<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_44f308cbe21b20207b95c084796580ade6400f0a3300bc07c849c353ed707314 extends Twig_Template
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
        $__internal_732ff7cf3b11fd71914d6c58c3cc4552f4acc4fd406dfa3896c748e9dac2678a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732ff7cf3b11fd71914d6c58c3cc4552f4acc4fd406dfa3896c748e9dac2678a->enter($__internal_732ff7cf3b11fd71914d6c58c3cc4552f4acc4fd406dfa3896c748e9dac2678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_15c8e9af8a162be4a6e2b498718b28bf3fefec0f49ad161bd37f19207d5f6ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c8e9af8a162be4a6e2b498718b28bf3fefec0f49ad161bd37f19207d5f6ec6->enter($__internal_15c8e9af8a162be4a6e2b498718b28bf3fefec0f49ad161bd37f19207d5f6ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_732ff7cf3b11fd71914d6c58c3cc4552f4acc4fd406dfa3896c748e9dac2678a->leave($__internal_732ff7cf3b11fd71914d6c58c3cc4552f4acc4fd406dfa3896c748e9dac2678a_prof);

        
        $__internal_15c8e9af8a162be4a6e2b498718b28bf3fefec0f49ad161bd37f19207d5f6ec6->leave($__internal_15c8e9af8a162be4a6e2b498718b28bf3fefec0f49ad161bd37f19207d5f6ec6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
