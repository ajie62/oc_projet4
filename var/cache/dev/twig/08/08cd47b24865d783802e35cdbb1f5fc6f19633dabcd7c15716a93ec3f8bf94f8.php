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
        $__internal_58503bded9ed8d0e4fc52f9dd16651c8bc09b3f4c98638eaef1eb3f44e0e6b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58503bded9ed8d0e4fc52f9dd16651c8bc09b3f4c98638eaef1eb3f44e0e6b87->enter($__internal_58503bded9ed8d0e4fc52f9dd16651c8bc09b3f4c98638eaef1eb3f44e0e6b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff18ed1d74e97d0871830c9c96b752d925006d8a57041620c96084046abed59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff18ed1d74e97d0871830c9c96b752d925006d8a57041620c96084046abed59a->enter($__internal_ff18ed1d74e97d0871830c9c96b752d925006d8a57041620c96084046abed59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58503bded9ed8d0e4fc52f9dd16651c8bc09b3f4c98638eaef1eb3f44e0e6b87->leave($__internal_58503bded9ed8d0e4fc52f9dd16651c8bc09b3f4c98638eaef1eb3f44e0e6b87_prof);

        
        $__internal_ff18ed1d74e97d0871830c9c96b752d925006d8a57041620c96084046abed59a->leave($__internal_ff18ed1d74e97d0871830c9c96b752d925006d8a57041620c96084046abed59a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e57d084ddcbdd82ea2cd5af5e5b66600a56f7a6bde756018a5c391959bbc11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e57d084ddcbdd82ea2cd5af5e5b66600a56f7a6bde756018a5c391959bbc11a->enter($__internal_1e57d084ddcbdd82ea2cd5af5e5b66600a56f7a6bde756018a5c391959bbc11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c8bcb26ebb960ad65d85bab7adc5d3b70db639b35db2f9fc181fc9874a7f511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8bcb26ebb960ad65d85bab7adc5d3b70db639b35db2f9fc181fc9874a7f511->enter($__internal_7c8bcb26ebb960ad65d85bab7adc5d3b70db639b35db2f9fc181fc9874a7f511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c8bcb26ebb960ad65d85bab7adc5d3b70db639b35db2f9fc181fc9874a7f511->leave($__internal_7c8bcb26ebb960ad65d85bab7adc5d3b70db639b35db2f9fc181fc9874a7f511_prof);

        
        $__internal_1e57d084ddcbdd82ea2cd5af5e5b66600a56f7a6bde756018a5c391959bbc11a->leave($__internal_1e57d084ddcbdd82ea2cd5af5e5b66600a56f7a6bde756018a5c391959bbc11a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a734f7728973e7aee18f7a5efb3ea5f3ac963cfb8993a0db4bd12ad3ed834868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a734f7728973e7aee18f7a5efb3ea5f3ac963cfb8993a0db4bd12ad3ed834868->enter($__internal_a734f7728973e7aee18f7a5efb3ea5f3ac963cfb8993a0db4bd12ad3ed834868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_801f2c1d98ad3803a596669a24554b0610841e678ca1518041fe310daa893491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801f2c1d98ad3803a596669a24554b0610841e678ca1518041fe310daa893491->enter($__internal_801f2c1d98ad3803a596669a24554b0610841e678ca1518041fe310daa893491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_801f2c1d98ad3803a596669a24554b0610841e678ca1518041fe310daa893491->leave($__internal_801f2c1d98ad3803a596669a24554b0610841e678ca1518041fe310daa893491_prof);

        
        $__internal_a734f7728973e7aee18f7a5efb3ea5f3ac963cfb8993a0db4bd12ad3ed834868->leave($__internal_a734f7728973e7aee18f7a5efb3ea5f3ac963cfb8993a0db4bd12ad3ed834868_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c98dad4e79fa3a0b5a59a220c806dd0f678c3cf0d3eeb603045d232ab4929c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98dad4e79fa3a0b5a59a220c806dd0f678c3cf0d3eeb603045d232ab4929c83->enter($__internal_c98dad4e79fa3a0b5a59a220c806dd0f678c3cf0d3eeb603045d232ab4929c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3da76e11e434785d60ce9b0aca339bee4ec0147a279d6dd5245e30e582ccc481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da76e11e434785d60ce9b0aca339bee4ec0147a279d6dd5245e30e582ccc481->enter($__internal_3da76e11e434785d60ce9b0aca339bee4ec0147a279d6dd5245e30e582ccc481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3da76e11e434785d60ce9b0aca339bee4ec0147a279d6dd5245e30e582ccc481->leave($__internal_3da76e11e434785d60ce9b0aca339bee4ec0147a279d6dd5245e30e582ccc481_prof);

        
        $__internal_c98dad4e79fa3a0b5a59a220c806dd0f678c3cf0d3eeb603045d232ab4929c83->leave($__internal_c98dad4e79fa3a0b5a59a220c806dd0f678c3cf0d3eeb603045d232ab4929c83_prof);

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
