<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_420de03123a13130f8eb8384b0c4179b4831eaa7e9d5a943c4367a446e1dd4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_105fca50c9c8cde047d091170d88bab32404579af8e52ed33f3c2a72958a1292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105fca50c9c8cde047d091170d88bab32404579af8e52ed33f3c2a72958a1292->enter($__internal_105fca50c9c8cde047d091170d88bab32404579af8e52ed33f3c2a72958a1292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_51bfc0e318b824a90a15568bb52202c78e19d0bbf54181a317ee889a3975c9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bfc0e318b824a90a15568bb52202c78e19d0bbf54181a317ee889a3975c9c1->enter($__internal_51bfc0e318b824a90a15568bb52202c78e19d0bbf54181a317ee889a3975c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105fca50c9c8cde047d091170d88bab32404579af8e52ed33f3c2a72958a1292->leave($__internal_105fca50c9c8cde047d091170d88bab32404579af8e52ed33f3c2a72958a1292_prof);

        
        $__internal_51bfc0e318b824a90a15568bb52202c78e19d0bbf54181a317ee889a3975c9c1->leave($__internal_51bfc0e318b824a90a15568bb52202c78e19d0bbf54181a317ee889a3975c9c1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_499d20f4907ccafed545950e4821525e20b79ba1b6233f79e81815d7f5d619c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499d20f4907ccafed545950e4821525e20b79ba1b6233f79e81815d7f5d619c8->enter($__internal_499d20f4907ccafed545950e4821525e20b79ba1b6233f79e81815d7f5d619c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7fa6d8b762b92840d039f0bdc52b6b3d100cc933d7caddfe27f20c8f0880755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa6d8b762b92840d039f0bdc52b6b3d100cc933d7caddfe27f20c8f0880755d->enter($__internal_7fa6d8b762b92840d039f0bdc52b6b3d100cc933d7caddfe27f20c8f0880755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7fa6d8b762b92840d039f0bdc52b6b3d100cc933d7caddfe27f20c8f0880755d->leave($__internal_7fa6d8b762b92840d039f0bdc52b6b3d100cc933d7caddfe27f20c8f0880755d_prof);

        
        $__internal_499d20f4907ccafed545950e4821525e20b79ba1b6233f79e81815d7f5d619c8->leave($__internal_499d20f4907ccafed545950e4821525e20b79ba1b6233f79e81815d7f5d619c8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_472bbc79d5aef3bf802dabe062ef1c42a84707fc3cc687e2d5fe4cd5973ca6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472bbc79d5aef3bf802dabe062ef1c42a84707fc3cc687e2d5fe4cd5973ca6fd->enter($__internal_472bbc79d5aef3bf802dabe062ef1c42a84707fc3cc687e2d5fe4cd5973ca6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0538a75d40b8a16196d970609310d0fde1b4b4da2f715d83f179ca254151d41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0538a75d40b8a16196d970609310d0fde1b4b4da2f715d83f179ca254151d41b->enter($__internal_0538a75d40b8a16196d970609310d0fde1b4b4da2f715d83f179ca254151d41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0538a75d40b8a16196d970609310d0fde1b4b4da2f715d83f179ca254151d41b->leave($__internal_0538a75d40b8a16196d970609310d0fde1b4b4da2f715d83f179ca254151d41b_prof);

        
        $__internal_472bbc79d5aef3bf802dabe062ef1c42a84707fc3cc687e2d5fe4cd5973ca6fd->leave($__internal_472bbc79d5aef3bf802dabe062ef1c42a84707fc3cc687e2d5fe4cd5973ca6fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
