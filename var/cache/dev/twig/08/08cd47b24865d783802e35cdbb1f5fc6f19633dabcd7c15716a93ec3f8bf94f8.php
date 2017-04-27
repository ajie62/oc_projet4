<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d360f896ce9b48973aeb93008db4b07bd88dd1a5cb6605f27ba658d8d7eff93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d360f896ce9b48973aeb93008db4b07bd88dd1a5cb6605f27ba658d8d7eff93->enter($__internal_5d360f896ce9b48973aeb93008db4b07bd88dd1a5cb6605f27ba658d8d7eff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4a4f7acf12e847b9a80740ec45141cbc7f932b0115257ce3b5296521037d4846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f7acf12e847b9a80740ec45141cbc7f932b0115257ce3b5296521037d4846->enter($__internal_4a4f7acf12e847b9a80740ec45141cbc7f932b0115257ce3b5296521037d4846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d360f896ce9b48973aeb93008db4b07bd88dd1a5cb6605f27ba658d8d7eff93->leave($__internal_5d360f896ce9b48973aeb93008db4b07bd88dd1a5cb6605f27ba658d8d7eff93_prof);

        
        $__internal_4a4f7acf12e847b9a80740ec45141cbc7f932b0115257ce3b5296521037d4846->leave($__internal_4a4f7acf12e847b9a80740ec45141cbc7f932b0115257ce3b5296521037d4846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8b7ecdf9ee87a1d6df171bb4962afb6ea86ba85d75d23edcfde3b515f49da70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b7ecdf9ee87a1d6df171bb4962afb6ea86ba85d75d23edcfde3b515f49da70->enter($__internal_e8b7ecdf9ee87a1d6df171bb4962afb6ea86ba85d75d23edcfde3b515f49da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f304194f128bd75b2db02af5f4d12ec8e44a1b54afe9b869e3ecdf2f0a37701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f304194f128bd75b2db02af5f4d12ec8e44a1b54afe9b869e3ecdf2f0a37701->enter($__internal_8f304194f128bd75b2db02af5f4d12ec8e44a1b54afe9b869e3ecdf2f0a37701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f304194f128bd75b2db02af5f4d12ec8e44a1b54afe9b869e3ecdf2f0a37701->leave($__internal_8f304194f128bd75b2db02af5f4d12ec8e44a1b54afe9b869e3ecdf2f0a37701_prof);

        
        $__internal_e8b7ecdf9ee87a1d6df171bb4962afb6ea86ba85d75d23edcfde3b515f49da70->leave($__internal_e8b7ecdf9ee87a1d6df171bb4962afb6ea86ba85d75d23edcfde3b515f49da70_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2feb89d806ddf2497d1b1716ad0001d51bf68c0fbd6ac9085eea7a456a52d67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2feb89d806ddf2497d1b1716ad0001d51bf68c0fbd6ac9085eea7a456a52d67c->enter($__internal_2feb89d806ddf2497d1b1716ad0001d51bf68c0fbd6ac9085eea7a456a52d67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a229ecdd8da71ec85039a6c8d26cf15fad8762fb22370ae0968b9f1af044184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a229ecdd8da71ec85039a6c8d26cf15fad8762fb22370ae0968b9f1af044184->enter($__internal_5a229ecdd8da71ec85039a6c8d26cf15fad8762fb22370ae0968b9f1af044184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5a229ecdd8da71ec85039a6c8d26cf15fad8762fb22370ae0968b9f1af044184->leave($__internal_5a229ecdd8da71ec85039a6c8d26cf15fad8762fb22370ae0968b9f1af044184_prof);

        
        $__internal_2feb89d806ddf2497d1b1716ad0001d51bf68c0fbd6ac9085eea7a456a52d67c->leave($__internal_2feb89d806ddf2497d1b1716ad0001d51bf68c0fbd6ac9085eea7a456a52d67c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6565baf69899a29a6a5851cea73c9867ac46d087981a05f2a83095236a48c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6565baf69899a29a6a5851cea73c9867ac46d087981a05f2a83095236a48c15->enter($__internal_e6565baf69899a29a6a5851cea73c9867ac46d087981a05f2a83095236a48c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4764e42fd5f51545fe9f0cd005ac54d1a3b52be7e77a571a32e5b73e50cb0f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4764e42fd5f51545fe9f0cd005ac54d1a3b52be7e77a571a32e5b73e50cb0f8d->enter($__internal_4764e42fd5f51545fe9f0cd005ac54d1a3b52be7e77a571a32e5b73e50cb0f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4764e42fd5f51545fe9f0cd005ac54d1a3b52be7e77a571a32e5b73e50cb0f8d->leave($__internal_4764e42fd5f51545fe9f0cd005ac54d1a3b52be7e77a571a32e5b73e50cb0f8d_prof);

        
        $__internal_e6565baf69899a29a6a5851cea73c9867ac46d087981a05f2a83095236a48c15->leave($__internal_e6565baf69899a29a6a5851cea73c9867ac46d087981a05f2a83095236a48c15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
