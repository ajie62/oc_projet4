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
        $__internal_5993ddd297ecb1931e179583eb5d2b0bf783cc4b0760687fc1d5cb9f0e24bb3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5993ddd297ecb1931e179583eb5d2b0bf783cc4b0760687fc1d5cb9f0e24bb3d->enter($__internal_5993ddd297ecb1931e179583eb5d2b0bf783cc4b0760687fc1d5cb9f0e24bb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fa5dcfb4db74b29374f79fdb68606f7d49e14889e57f9089dae01b6094ddccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5dcfb4db74b29374f79fdb68606f7d49e14889e57f9089dae01b6094ddccb5->enter($__internal_fa5dcfb4db74b29374f79fdb68606f7d49e14889e57f9089dae01b6094ddccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5993ddd297ecb1931e179583eb5d2b0bf783cc4b0760687fc1d5cb9f0e24bb3d->leave($__internal_5993ddd297ecb1931e179583eb5d2b0bf783cc4b0760687fc1d5cb9f0e24bb3d_prof);

        
        $__internal_fa5dcfb4db74b29374f79fdb68606f7d49e14889e57f9089dae01b6094ddccb5->leave($__internal_fa5dcfb4db74b29374f79fdb68606f7d49e14889e57f9089dae01b6094ddccb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6daf09d5d43b2f025fa30303550f4898cefdd1864b74f3e09c8f3ea48a2180e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6daf09d5d43b2f025fa30303550f4898cefdd1864b74f3e09c8f3ea48a2180e0->enter($__internal_6daf09d5d43b2f025fa30303550f4898cefdd1864b74f3e09c8f3ea48a2180e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2467e68a74b43e739439a558445f6b6bc9847828ab2b3c1e358fe0192215bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2467e68a74b43e739439a558445f6b6bc9847828ab2b3c1e358fe0192215bc9->enter($__internal_a2467e68a74b43e739439a558445f6b6bc9847828ab2b3c1e358fe0192215bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a2467e68a74b43e739439a558445f6b6bc9847828ab2b3c1e358fe0192215bc9->leave($__internal_a2467e68a74b43e739439a558445f6b6bc9847828ab2b3c1e358fe0192215bc9_prof);

        
        $__internal_6daf09d5d43b2f025fa30303550f4898cefdd1864b74f3e09c8f3ea48a2180e0->leave($__internal_6daf09d5d43b2f025fa30303550f4898cefdd1864b74f3e09c8f3ea48a2180e0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed1889e6d54386009edd11aa31930ce7c4f303435465c39bee27a291ec71b2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1889e6d54386009edd11aa31930ce7c4f303435465c39bee27a291ec71b2a9->enter($__internal_ed1889e6d54386009edd11aa31930ce7c4f303435465c39bee27a291ec71b2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_156f90baa31079c50e1caf60fd6018163e0bfffabb1a9f81c7e4e4988a0eab8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156f90baa31079c50e1caf60fd6018163e0bfffabb1a9f81c7e4e4988a0eab8a->enter($__internal_156f90baa31079c50e1caf60fd6018163e0bfffabb1a9f81c7e4e4988a0eab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_156f90baa31079c50e1caf60fd6018163e0bfffabb1a9f81c7e4e4988a0eab8a->leave($__internal_156f90baa31079c50e1caf60fd6018163e0bfffabb1a9f81c7e4e4988a0eab8a_prof);

        
        $__internal_ed1889e6d54386009edd11aa31930ce7c4f303435465c39bee27a291ec71b2a9->leave($__internal_ed1889e6d54386009edd11aa31930ce7c4f303435465c39bee27a291ec71b2a9_prof);

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
