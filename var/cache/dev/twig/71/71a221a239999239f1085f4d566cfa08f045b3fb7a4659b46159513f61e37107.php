<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2bbc37753fda3822b059fb9bfd6d99e0967cba032afc6e6bcfd27dabde58dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_e64ecd9311425ff868016d3853cf02fae8a62955a9cbf4d4d3dbcbae61c05c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64ecd9311425ff868016d3853cf02fae8a62955a9cbf4d4d3dbcbae61c05c0f->enter($__internal_e64ecd9311425ff868016d3853cf02fae8a62955a9cbf4d4d3dbcbae61c05c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5e44c921536e7cb4babd46baa24df57f2d13caa7862f934c4348c5796832121e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e44c921536e7cb4babd46baa24df57f2d13caa7862f934c4348c5796832121e->enter($__internal_5e44c921536e7cb4babd46baa24df57f2d13caa7862f934c4348c5796832121e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64ecd9311425ff868016d3853cf02fae8a62955a9cbf4d4d3dbcbae61c05c0f->leave($__internal_e64ecd9311425ff868016d3853cf02fae8a62955a9cbf4d4d3dbcbae61c05c0f_prof);

        
        $__internal_5e44c921536e7cb4babd46baa24df57f2d13caa7862f934c4348c5796832121e->leave($__internal_5e44c921536e7cb4babd46baa24df57f2d13caa7862f934c4348c5796832121e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ad965ee38f0fc742db5d104b09a00daa70e5d83152a4c3bd322cf42114bedff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad965ee38f0fc742db5d104b09a00daa70e5d83152a4c3bd322cf42114bedff->enter($__internal_1ad965ee38f0fc742db5d104b09a00daa70e5d83152a4c3bd322cf42114bedff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe333a2b74d505ccf3f7bda206ae8b2a9b364747c013c20dab67cb5da867a9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe333a2b74d505ccf3f7bda206ae8b2a9b364747c013c20dab67cb5da867a9be->enter($__internal_fe333a2b74d505ccf3f7bda206ae8b2a9b364747c013c20dab67cb5da867a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fe333a2b74d505ccf3f7bda206ae8b2a9b364747c013c20dab67cb5da867a9be->leave($__internal_fe333a2b74d505ccf3f7bda206ae8b2a9b364747c013c20dab67cb5da867a9be_prof);

        
        $__internal_1ad965ee38f0fc742db5d104b09a00daa70e5d83152a4c3bd322cf42114bedff->leave($__internal_1ad965ee38f0fc742db5d104b09a00daa70e5d83152a4c3bd322cf42114bedff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e446bc18bf2de23557cb9837bdd1e9c066582a8b431dbdaa3c517813d2a79662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e446bc18bf2de23557cb9837bdd1e9c066582a8b431dbdaa3c517813d2a79662->enter($__internal_e446bc18bf2de23557cb9837bdd1e9c066582a8b431dbdaa3c517813d2a79662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_405ea842177920439d7e1f479237edcd389e4d51352b6e584387f61113ad04f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405ea842177920439d7e1f479237edcd389e4d51352b6e584387f61113ad04f7->enter($__internal_405ea842177920439d7e1f479237edcd389e4d51352b6e584387f61113ad04f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_405ea842177920439d7e1f479237edcd389e4d51352b6e584387f61113ad04f7->leave($__internal_405ea842177920439d7e1f479237edcd389e4d51352b6e584387f61113ad04f7_prof);

        
        $__internal_e446bc18bf2de23557cb9837bdd1e9c066582a8b431dbdaa3c517813d2a79662->leave($__internal_e446bc18bf2de23557cb9837bdd1e9c066582a8b431dbdaa3c517813d2a79662_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_addaacb5905d0682fe9e35ada745a383551109732a5b2eea1e4941e4dda89776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addaacb5905d0682fe9e35ada745a383551109732a5b2eea1e4941e4dda89776->enter($__internal_addaacb5905d0682fe9e35ada745a383551109732a5b2eea1e4941e4dda89776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48a7b2aebfc3c004270e2d12a2b8bb0755564672461713ab935b84b4af70f42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a7b2aebfc3c004270e2d12a2b8bb0755564672461713ab935b84b4af70f42f->enter($__internal_48a7b2aebfc3c004270e2d12a2b8bb0755564672461713ab935b84b4af70f42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48a7b2aebfc3c004270e2d12a2b8bb0755564672461713ab935b84b4af70f42f->leave($__internal_48a7b2aebfc3c004270e2d12a2b8bb0755564672461713ab935b84b4af70f42f_prof);

        
        $__internal_addaacb5905d0682fe9e35ada745a383551109732a5b2eea1e4941e4dda89776->leave($__internal_addaacb5905d0682fe9e35ada745a383551109732a5b2eea1e4941e4dda89776_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
