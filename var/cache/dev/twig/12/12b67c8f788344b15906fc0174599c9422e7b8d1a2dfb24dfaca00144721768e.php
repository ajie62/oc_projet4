<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2404d41b85fa75a47b4b040b8f9a363f176b347d768d75a121f7a8c3e190648d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2404d41b85fa75a47b4b040b8f9a363f176b347d768d75a121f7a8c3e190648d->enter($__internal_2404d41b85fa75a47b4b040b8f9a363f176b347d768d75a121f7a8c3e190648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_96f8cd3530bcaa02a87b7f6363c3fc305eda58c080b1c5dcb1e50cd405de4899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f8cd3530bcaa02a87b7f6363c3fc305eda58c080b1c5dcb1e50cd405de4899->enter($__internal_96f8cd3530bcaa02a87b7f6363c3fc305eda58c080b1c5dcb1e50cd405de4899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2404d41b85fa75a47b4b040b8f9a363f176b347d768d75a121f7a8c3e190648d->leave($__internal_2404d41b85fa75a47b4b040b8f9a363f176b347d768d75a121f7a8c3e190648d_prof);

        
        $__internal_96f8cd3530bcaa02a87b7f6363c3fc305eda58c080b1c5dcb1e50cd405de4899->leave($__internal_96f8cd3530bcaa02a87b7f6363c3fc305eda58c080b1c5dcb1e50cd405de4899_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7691c83b578642cac8be369700f4db19f3021ce0dba8aade53cb18080233f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7691c83b578642cac8be369700f4db19f3021ce0dba8aade53cb18080233f33->enter($__internal_b7691c83b578642cac8be369700f4db19f3021ce0dba8aade53cb18080233f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_769d65ab1b3818da88ac1b0707ba9c9f30e97439e8a634232b0545e1ea9af47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769d65ab1b3818da88ac1b0707ba9c9f30e97439e8a634232b0545e1ea9af47b->enter($__internal_769d65ab1b3818da88ac1b0707ba9c9f30e97439e8a634232b0545e1ea9af47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_769d65ab1b3818da88ac1b0707ba9c9f30e97439e8a634232b0545e1ea9af47b->leave($__internal_769d65ab1b3818da88ac1b0707ba9c9f30e97439e8a634232b0545e1ea9af47b_prof);

        
        $__internal_b7691c83b578642cac8be369700f4db19f3021ce0dba8aade53cb18080233f33->leave($__internal_b7691c83b578642cac8be369700f4db19f3021ce0dba8aade53cb18080233f33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5ced042f867fb5143356a07370374603d01e33af6a9bab58b4ba4033799f8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ced042f867fb5143356a07370374603d01e33af6a9bab58b4ba4033799f8b8->enter($__internal_c5ced042f867fb5143356a07370374603d01e33af6a9bab58b4ba4033799f8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be7f2f9cacf965fba1a2ef7e809e53e4793ceb3616c463184339c4b42ba7e109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7f2f9cacf965fba1a2ef7e809e53e4793ceb3616c463184339c4b42ba7e109->enter($__internal_be7f2f9cacf965fba1a2ef7e809e53e4793ceb3616c463184339c4b42ba7e109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be7f2f9cacf965fba1a2ef7e809e53e4793ceb3616c463184339c4b42ba7e109->leave($__internal_be7f2f9cacf965fba1a2ef7e809e53e4793ceb3616c463184339c4b42ba7e109_prof);

        
        $__internal_c5ced042f867fb5143356a07370374603d01e33af6a9bab58b4ba4033799f8b8->leave($__internal_c5ced042f867fb5143356a07370374603d01e33af6a9bab58b4ba4033799f8b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52500a5182e00d3af1d469b1ace3931a9e16d859cf8bcfa08b5aded4ff77f742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52500a5182e00d3af1d469b1ace3931a9e16d859cf8bcfa08b5aded4ff77f742->enter($__internal_52500a5182e00d3af1d469b1ace3931a9e16d859cf8bcfa08b5aded4ff77f742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e776d33c6eb624abe04c2f9a1aa1e9fefb1d606ba57b0cab73c0443875be24b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e776d33c6eb624abe04c2f9a1aa1e9fefb1d606ba57b0cab73c0443875be24b8->enter($__internal_e776d33c6eb624abe04c2f9a1aa1e9fefb1d606ba57b0cab73c0443875be24b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e776d33c6eb624abe04c2f9a1aa1e9fefb1d606ba57b0cab73c0443875be24b8->leave($__internal_e776d33c6eb624abe04c2f9a1aa1e9fefb1d606ba57b0cab73c0443875be24b8_prof);

        
        $__internal_52500a5182e00d3af1d469b1ace3931a9e16d859cf8bcfa08b5aded4ff77f742->leave($__internal_52500a5182e00d3af1d469b1ace3931a9e16d859cf8bcfa08b5aded4ff77f742_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
