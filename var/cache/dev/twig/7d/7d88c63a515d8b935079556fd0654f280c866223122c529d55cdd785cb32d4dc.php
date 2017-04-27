<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_52c9e88a5f3e6721bc4c18856fe5d3ad361d66cbe64e1a9401b6235596ea6d82 extends Twig_Template
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
        $__internal_36e3b8d5b4c9acfe19dcee96b2a8c4420d757260837284b39236b86636dd6137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e3b8d5b4c9acfe19dcee96b2a8c4420d757260837284b39236b86636dd6137->enter($__internal_36e3b8d5b4c9acfe19dcee96b2a8c4420d757260837284b39236b86636dd6137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e80e260849466281d755da137e1ecc855d28efa72ea9ce9f634d0574a6397fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80e260849466281d755da137e1ecc855d28efa72ea9ce9f634d0574a6397fac->enter($__internal_e80e260849466281d755da137e1ecc855d28efa72ea9ce9f634d0574a6397fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_36e3b8d5b4c9acfe19dcee96b2a8c4420d757260837284b39236b86636dd6137->leave($__internal_36e3b8d5b4c9acfe19dcee96b2a8c4420d757260837284b39236b86636dd6137_prof);

        
        $__internal_e80e260849466281d755da137e1ecc855d28efa72ea9ce9f634d0574a6397fac->leave($__internal_e80e260849466281d755da137e1ecc855d28efa72ea9ce9f634d0574a6397fac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
