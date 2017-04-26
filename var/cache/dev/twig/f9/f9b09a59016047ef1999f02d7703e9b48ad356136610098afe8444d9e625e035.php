<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_16d361e3f4be25f4204cba87033ea9508d4f9d398c3557fb129c7032e4f17baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b688d00ac8ad2ff66f3b03963594850de496e3678c4f72025af39e17db52347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b688d00ac8ad2ff66f3b03963594850de496e3678c4f72025af39e17db52347->enter($__internal_9b688d00ac8ad2ff66f3b03963594850de496e3678c4f72025af39e17db52347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7c2cf074d96a2a0d222ff8bc253abe9594023546ab3756d2ad93892d60b08355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2cf074d96a2a0d222ff8bc253abe9594023546ab3756d2ad93892d60b08355->enter($__internal_7c2cf074d96a2a0d222ff8bc253abe9594023546ab3756d2ad93892d60b08355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b688d00ac8ad2ff66f3b03963594850de496e3678c4f72025af39e17db52347->leave($__internal_9b688d00ac8ad2ff66f3b03963594850de496e3678c4f72025af39e17db52347_prof);

        
        $__internal_7c2cf074d96a2a0d222ff8bc253abe9594023546ab3756d2ad93892d60b08355->leave($__internal_7c2cf074d96a2a0d222ff8bc253abe9594023546ab3756d2ad93892d60b08355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_627113c2cdfaeeec9010ab50758b95e3038a9cb127568bfd77cc6d9da2f59265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627113c2cdfaeeec9010ab50758b95e3038a9cb127568bfd77cc6d9da2f59265->enter($__internal_627113c2cdfaeeec9010ab50758b95e3038a9cb127568bfd77cc6d9da2f59265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34b4442eca1f4086a9e692d31c2028baae671458ce992703a2cabd32d9695d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b4442eca1f4086a9e692d31c2028baae671458ce992703a2cabd32d9695d49->enter($__internal_34b4442eca1f4086a9e692d31c2028baae671458ce992703a2cabd32d9695d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_34b4442eca1f4086a9e692d31c2028baae671458ce992703a2cabd32d9695d49->leave($__internal_34b4442eca1f4086a9e692d31c2028baae671458ce992703a2cabd32d9695d49_prof);

        
        $__internal_627113c2cdfaeeec9010ab50758b95e3038a9cb127568bfd77cc6d9da2f59265->leave($__internal_627113c2cdfaeeec9010ab50758b95e3038a9cb127568bfd77cc6d9da2f59265_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbd9a30749b4a8f93041f530793f10c9a1407a016a332c78169adbc523f2027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbd9a30749b4a8f93041f530793f10c9a1407a016a332c78169adbc523f2027->enter($__internal_1cbd9a30749b4a8f93041f530793f10c9a1407a016a332c78169adbc523f2027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a69673c8562865de3fae91bd992daf572eda88e1d684b858946c156bf63114c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69673c8562865de3fae91bd992daf572eda88e1d684b858946c156bf63114c6->enter($__internal_a69673c8562865de3fae91bd992daf572eda88e1d684b858946c156bf63114c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a69673c8562865de3fae91bd992daf572eda88e1d684b858946c156bf63114c6->leave($__internal_a69673c8562865de3fae91bd992daf572eda88e1d684b858946c156bf63114c6_prof);

        
        $__internal_1cbd9a30749b4a8f93041f530793f10c9a1407a016a332c78169adbc523f2027->leave($__internal_1cbd9a30749b4a8f93041f530793f10c9a1407a016a332c78169adbc523f2027_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
