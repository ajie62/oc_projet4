<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26cdd1be98e8baadc7413815d0dd90d7e34479a6a7fdd24e2f958959c56d512f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cdd1be98e8baadc7413815d0dd90d7e34479a6a7fdd24e2f958959c56d512f->enter($__internal_26cdd1be98e8baadc7413815d0dd90d7e34479a6a7fdd24e2f958959c56d512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ac28ab80f16e4a5f9467df2486309ef977c4c1b0bb77d1a655d4c0c8323431bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac28ab80f16e4a5f9467df2486309ef977c4c1b0bb77d1a655d4c0c8323431bf->enter($__internal_ac28ab80f16e4a5f9467df2486309ef977c4c1b0bb77d1a655d4c0c8323431bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cdd1be98e8baadc7413815d0dd90d7e34479a6a7fdd24e2f958959c56d512f->leave($__internal_26cdd1be98e8baadc7413815d0dd90d7e34479a6a7fdd24e2f958959c56d512f_prof);

        
        $__internal_ac28ab80f16e4a5f9467df2486309ef977c4c1b0bb77d1a655d4c0c8323431bf->leave($__internal_ac28ab80f16e4a5f9467df2486309ef977c4c1b0bb77d1a655d4c0c8323431bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_775a31024e1baaa6c8a6d144c55de2860b77ec547b48c53a8d79e5c3e9c0acb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775a31024e1baaa6c8a6d144c55de2860b77ec547b48c53a8d79e5c3e9c0acb7->enter($__internal_775a31024e1baaa6c8a6d144c55de2860b77ec547b48c53a8d79e5c3e9c0acb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b3959e55201655504695112eccd8b95080c7715a954602ef212f467c899a68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3959e55201655504695112eccd8b95080c7715a954602ef212f467c899a68c->enter($__internal_5b3959e55201655504695112eccd8b95080c7715a954602ef212f467c899a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5b3959e55201655504695112eccd8b95080c7715a954602ef212f467c899a68c->leave($__internal_5b3959e55201655504695112eccd8b95080c7715a954602ef212f467c899a68c_prof);

        
        $__internal_775a31024e1baaa6c8a6d144c55de2860b77ec547b48c53a8d79e5c3e9c0acb7->leave($__internal_775a31024e1baaa6c8a6d144c55de2860b77ec547b48c53a8d79e5c3e9c0acb7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2df17114a443edd00e98db9b62286415cc6340fccd36a502e4aa90088c23ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2df17114a443edd00e98db9b62286415cc6340fccd36a502e4aa90088c23ff8->enter($__internal_c2df17114a443edd00e98db9b62286415cc6340fccd36a502e4aa90088c23ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d9767c3501722c98798e1c8fae360bbe9c9a73abec572c7651e83f1852cc572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9767c3501722c98798e1c8fae360bbe9c9a73abec572c7651e83f1852cc572->enter($__internal_4d9767c3501722c98798e1c8fae360bbe9c9a73abec572c7651e83f1852cc572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d9767c3501722c98798e1c8fae360bbe9c9a73abec572c7651e83f1852cc572->leave($__internal_4d9767c3501722c98798e1c8fae360bbe9c9a73abec572c7651e83f1852cc572_prof);

        
        $__internal_c2df17114a443edd00e98db9b62286415cc6340fccd36a502e4aa90088c23ff8->leave($__internal_c2df17114a443edd00e98db9b62286415cc6340fccd36a502e4aa90088c23ff8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fed4b1d08fc68036eb50ee2d7a8e99957cd08cea79b9fbb0ddb6036158834a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fed4b1d08fc68036eb50ee2d7a8e99957cd08cea79b9fbb0ddb6036158834a8->enter($__internal_4fed4b1d08fc68036eb50ee2d7a8e99957cd08cea79b9fbb0ddb6036158834a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83890d7b059a9d92eee943ae286b0da1df04409be21a43e2a4f0750ac80cf243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83890d7b059a9d92eee943ae286b0da1df04409be21a43e2a4f0750ac80cf243->enter($__internal_83890d7b059a9d92eee943ae286b0da1df04409be21a43e2a4f0750ac80cf243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_83890d7b059a9d92eee943ae286b0da1df04409be21a43e2a4f0750ac80cf243->leave($__internal_83890d7b059a9d92eee943ae286b0da1df04409be21a43e2a4f0750ac80cf243_prof);

        
        $__internal_4fed4b1d08fc68036eb50ee2d7a8e99957cd08cea79b9fbb0ddb6036158834a8->leave($__internal_4fed4b1d08fc68036eb50ee2d7a8e99957cd08cea79b9fbb0ddb6036158834a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
