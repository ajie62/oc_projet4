<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0a6ad8bcc82560001bb4ad2272a340ee3229f2e39daf065a6809fa2bc349186e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_dd3350ec8fbce95f04a27caf21ff62d48fa0b2c1884e3a89cec28a7d704b6d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3350ec8fbce95f04a27caf21ff62d48fa0b2c1884e3a89cec28a7d704b6d16->enter($__internal_dd3350ec8fbce95f04a27caf21ff62d48fa0b2c1884e3a89cec28a7d704b6d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a9de9db6efb3eadfea1dae55c2cec06d6e593cb55c8f8b0ad606b0446e2ca1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9de9db6efb3eadfea1dae55c2cec06d6e593cb55c8f8b0ad606b0446e2ca1c4->enter($__internal_a9de9db6efb3eadfea1dae55c2cec06d6e593cb55c8f8b0ad606b0446e2ca1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3350ec8fbce95f04a27caf21ff62d48fa0b2c1884e3a89cec28a7d704b6d16->leave($__internal_dd3350ec8fbce95f04a27caf21ff62d48fa0b2c1884e3a89cec28a7d704b6d16_prof);

        
        $__internal_a9de9db6efb3eadfea1dae55c2cec06d6e593cb55c8f8b0ad606b0446e2ca1c4->leave($__internal_a9de9db6efb3eadfea1dae55c2cec06d6e593cb55c8f8b0ad606b0446e2ca1c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f2927d67879f82035d04041f31171eea3600254f71a1af921be21f8e2a533f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2927d67879f82035d04041f31171eea3600254f71a1af921be21f8e2a533f2->enter($__internal_2f2927d67879f82035d04041f31171eea3600254f71a1af921be21f8e2a533f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da11182743b0e3ee120b989dfb0236136a25e6b3119c5cffeea252d8c078a884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da11182743b0e3ee120b989dfb0236136a25e6b3119c5cffeea252d8c078a884->enter($__internal_da11182743b0e3ee120b989dfb0236136a25e6b3119c5cffeea252d8c078a884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_da11182743b0e3ee120b989dfb0236136a25e6b3119c5cffeea252d8c078a884->leave($__internal_da11182743b0e3ee120b989dfb0236136a25e6b3119c5cffeea252d8c078a884_prof);

        
        $__internal_2f2927d67879f82035d04041f31171eea3600254f71a1af921be21f8e2a533f2->leave($__internal_2f2927d67879f82035d04041f31171eea3600254f71a1af921be21f8e2a533f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_841d5b0568dfd52d2805566ca68b86984af03b76cd9f17759724b308304ae854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841d5b0568dfd52d2805566ca68b86984af03b76cd9f17759724b308304ae854->enter($__internal_841d5b0568dfd52d2805566ca68b86984af03b76cd9f17759724b308304ae854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd52067aa3729bea2ed7f7def26a69d0623e68d0cd5a8aabc0f75095746756b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd52067aa3729bea2ed7f7def26a69d0623e68d0cd5a8aabc0f75095746756b1->enter($__internal_dd52067aa3729bea2ed7f7def26a69d0623e68d0cd5a8aabc0f75095746756b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_dd52067aa3729bea2ed7f7def26a69d0623e68d0cd5a8aabc0f75095746756b1->leave($__internal_dd52067aa3729bea2ed7f7def26a69d0623e68d0cd5a8aabc0f75095746756b1_prof);

        
        $__internal_841d5b0568dfd52d2805566ca68b86984af03b76cd9f17759724b308304ae854->leave($__internal_841d5b0568dfd52d2805566ca68b86984af03b76cd9f17759724b308304ae854_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
