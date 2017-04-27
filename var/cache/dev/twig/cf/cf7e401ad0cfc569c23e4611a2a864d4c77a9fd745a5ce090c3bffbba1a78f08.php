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
        $__internal_a32917c1d0a5e509c9fdd11ca8d65f794c4911f35686531694a524c209d10e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32917c1d0a5e509c9fdd11ca8d65f794c4911f35686531694a524c209d10e24->enter($__internal_a32917c1d0a5e509c9fdd11ca8d65f794c4911f35686531694a524c209d10e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_76276256955dcf319b29d035db8c4d2a37ee75adc8719535fd6f3458dcc96a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76276256955dcf319b29d035db8c4d2a37ee75adc8719535fd6f3458dcc96a96->enter($__internal_76276256955dcf319b29d035db8c4d2a37ee75adc8719535fd6f3458dcc96a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32917c1d0a5e509c9fdd11ca8d65f794c4911f35686531694a524c209d10e24->leave($__internal_a32917c1d0a5e509c9fdd11ca8d65f794c4911f35686531694a524c209d10e24_prof);

        
        $__internal_76276256955dcf319b29d035db8c4d2a37ee75adc8719535fd6f3458dcc96a96->leave($__internal_76276256955dcf319b29d035db8c4d2a37ee75adc8719535fd6f3458dcc96a96_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_36e66b235465cd1be95423ba23344fac30cda34d797485c4d94a70a9cf84068b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e66b235465cd1be95423ba23344fac30cda34d797485c4d94a70a9cf84068b->enter($__internal_36e66b235465cd1be95423ba23344fac30cda34d797485c4d94a70a9cf84068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1fd3992cb4dae34ac53705016fd0190be62a068253be3082f0033cba77430b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd3992cb4dae34ac53705016fd0190be62a068253be3082f0033cba77430b9e->enter($__internal_1fd3992cb4dae34ac53705016fd0190be62a068253be3082f0033cba77430b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1fd3992cb4dae34ac53705016fd0190be62a068253be3082f0033cba77430b9e->leave($__internal_1fd3992cb4dae34ac53705016fd0190be62a068253be3082f0033cba77430b9e_prof);

        
        $__internal_36e66b235465cd1be95423ba23344fac30cda34d797485c4d94a70a9cf84068b->leave($__internal_36e66b235465cd1be95423ba23344fac30cda34d797485c4d94a70a9cf84068b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_563447d0ea8971215c380cd37570f3fd72f7c119719f4f86e3402fa40a54e6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563447d0ea8971215c380cd37570f3fd72f7c119719f4f86e3402fa40a54e6bb->enter($__internal_563447d0ea8971215c380cd37570f3fd72f7c119719f4f86e3402fa40a54e6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00b4bc8ce2644bd8e126f6735a3826c853708902e6c15f2c520ddf481813d56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b4bc8ce2644bd8e126f6735a3826c853708902e6c15f2c520ddf481813d56c->enter($__internal_00b4bc8ce2644bd8e126f6735a3826c853708902e6c15f2c520ddf481813d56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_00b4bc8ce2644bd8e126f6735a3826c853708902e6c15f2c520ddf481813d56c->leave($__internal_00b4bc8ce2644bd8e126f6735a3826c853708902e6c15f2c520ddf481813d56c_prof);

        
        $__internal_563447d0ea8971215c380cd37570f3fd72f7c119719f4f86e3402fa40a54e6bb->leave($__internal_563447d0ea8971215c380cd37570f3fd72f7c119719f4f86e3402fa40a54e6bb_prof);

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
