<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_46825976ab9b566af19200ed2a87d5ed1975be5b85b00af70ccfed000365fa01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d8233eef980d27a0be5cbe20c011e85bf03f1a45f7720581bdf2e0f1615037f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8233eef980d27a0be5cbe20c011e85bf03f1a45f7720581bdf2e0f1615037f3->enter($__internal_d8233eef980d27a0be5cbe20c011e85bf03f1a45f7720581bdf2e0f1615037f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f2f3265395823c0a985a896ff7671ba785c2ff321f3e561e5a372d806b644f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f3265395823c0a985a896ff7671ba785c2ff321f3e561e5a372d806b644f57->enter($__internal_f2f3265395823c0a985a896ff7671ba785c2ff321f3e561e5a372d806b644f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8233eef980d27a0be5cbe20c011e85bf03f1a45f7720581bdf2e0f1615037f3->leave($__internal_d8233eef980d27a0be5cbe20c011e85bf03f1a45f7720581bdf2e0f1615037f3_prof);

        
        $__internal_f2f3265395823c0a985a896ff7671ba785c2ff321f3e561e5a372d806b644f57->leave($__internal_f2f3265395823c0a985a896ff7671ba785c2ff321f3e561e5a372d806b644f57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6ae2298d04986a68a3c726a1f7946c60587b6a06e5e7e400915e5c5c4604555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ae2298d04986a68a3c726a1f7946c60587b6a06e5e7e400915e5c5c4604555->enter($__internal_e6ae2298d04986a68a3c726a1f7946c60587b6a06e5e7e400915e5c5c4604555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d51c204a460507ebb9038c0e9dcaa626bc50ffe93bcfa798d3dc523eb43db9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51c204a460507ebb9038c0e9dcaa626bc50ffe93bcfa798d3dc523eb43db9b3->enter($__internal_d51c204a460507ebb9038c0e9dcaa626bc50ffe93bcfa798d3dc523eb43db9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d51c204a460507ebb9038c0e9dcaa626bc50ffe93bcfa798d3dc523eb43db9b3->leave($__internal_d51c204a460507ebb9038c0e9dcaa626bc50ffe93bcfa798d3dc523eb43db9b3_prof);

        
        $__internal_e6ae2298d04986a68a3c726a1f7946c60587b6a06e5e7e400915e5c5c4604555->leave($__internal_e6ae2298d04986a68a3c726a1f7946c60587b6a06e5e7e400915e5c5c4604555_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c9c35253fcb9d8e9be2c30df423bb0e8dd47c1775594db191ccdd2015f04b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9c35253fcb9d8e9be2c30df423bb0e8dd47c1775594db191ccdd2015f04b00->enter($__internal_9c9c35253fcb9d8e9be2c30df423bb0e8dd47c1775594db191ccdd2015f04b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bafd5e813a76c8318293aa94b287516214d52c9b3a79cafc096d07a70ed6cfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafd5e813a76c8318293aa94b287516214d52c9b3a79cafc096d07a70ed6cfb6->enter($__internal_bafd5e813a76c8318293aa94b287516214d52c9b3a79cafc096d07a70ed6cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bafd5e813a76c8318293aa94b287516214d52c9b3a79cafc096d07a70ed6cfb6->leave($__internal_bafd5e813a76c8318293aa94b287516214d52c9b3a79cafc096d07a70ed6cfb6_prof);

        
        $__internal_9c9c35253fcb9d8e9be2c30df423bb0e8dd47c1775594db191ccdd2015f04b00->leave($__internal_9c9c35253fcb9d8e9be2c30df423bb0e8dd47c1775594db191ccdd2015f04b00_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d904aac66e64865ae6776ce70bd17a380d980237baaa6d2cc8ca964e22927c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d904aac66e64865ae6776ce70bd17a380d980237baaa6d2cc8ca964e22927c53->enter($__internal_d904aac66e64865ae6776ce70bd17a380d980237baaa6d2cc8ca964e22927c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7958c052fe5d88978bb59dc2c1d3570208a58e54e0dff3b1e91a41d51237811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7958c052fe5d88978bb59dc2c1d3570208a58e54e0dff3b1e91a41d51237811->enter($__internal_a7958c052fe5d88978bb59dc2c1d3570208a58e54e0dff3b1e91a41d51237811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a7958c052fe5d88978bb59dc2c1d3570208a58e54e0dff3b1e91a41d51237811->leave($__internal_a7958c052fe5d88978bb59dc2c1d3570208a58e54e0dff3b1e91a41d51237811_prof);

        
        $__internal_d904aac66e64865ae6776ce70bd17a380d980237baaa6d2cc8ca964e22927c53->leave($__internal_d904aac66e64865ae6776ce70bd17a380d980237baaa6d2cc8ca964e22927c53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
