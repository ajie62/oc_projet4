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
        $__internal_1ae1c9a368ae4b7ae2bd4325cb53be131ccf7765f2222d4234c3431885d07c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae1c9a368ae4b7ae2bd4325cb53be131ccf7765f2222d4234c3431885d07c92->enter($__internal_1ae1c9a368ae4b7ae2bd4325cb53be131ccf7765f2222d4234c3431885d07c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_baa0d1a98f3569d5ae4c26febee80f732c0041a6e63f45878486e04ad53b6a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa0d1a98f3569d5ae4c26febee80f732c0041a6e63f45878486e04ad53b6a81->enter($__internal_baa0d1a98f3569d5ae4c26febee80f732c0041a6e63f45878486e04ad53b6a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae1c9a368ae4b7ae2bd4325cb53be131ccf7765f2222d4234c3431885d07c92->leave($__internal_1ae1c9a368ae4b7ae2bd4325cb53be131ccf7765f2222d4234c3431885d07c92_prof);

        
        $__internal_baa0d1a98f3569d5ae4c26febee80f732c0041a6e63f45878486e04ad53b6a81->leave($__internal_baa0d1a98f3569d5ae4c26febee80f732c0041a6e63f45878486e04ad53b6a81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c44a97d68964259b338f7e3ede74c7bd7eab69a9f00e665351cf14833665415a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44a97d68964259b338f7e3ede74c7bd7eab69a9f00e665351cf14833665415a->enter($__internal_c44a97d68964259b338f7e3ede74c7bd7eab69a9f00e665351cf14833665415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b4ae9859f9cb9e3b60f1db75fa6811271ea5c51d5eb6272036369ec80fc0ff13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ae9859f9cb9e3b60f1db75fa6811271ea5c51d5eb6272036369ec80fc0ff13->enter($__internal_b4ae9859f9cb9e3b60f1db75fa6811271ea5c51d5eb6272036369ec80fc0ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b4ae9859f9cb9e3b60f1db75fa6811271ea5c51d5eb6272036369ec80fc0ff13->leave($__internal_b4ae9859f9cb9e3b60f1db75fa6811271ea5c51d5eb6272036369ec80fc0ff13_prof);

        
        $__internal_c44a97d68964259b338f7e3ede74c7bd7eab69a9f00e665351cf14833665415a->leave($__internal_c44a97d68964259b338f7e3ede74c7bd7eab69a9f00e665351cf14833665415a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad271f66631e40831dfa34f579a1f0e7ed3eaf8b6217cf68b8fb2f8d3355cd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad271f66631e40831dfa34f579a1f0e7ed3eaf8b6217cf68b8fb2f8d3355cd3e->enter($__internal_ad271f66631e40831dfa34f579a1f0e7ed3eaf8b6217cf68b8fb2f8d3355cd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2d2664f054292a89cd405a2196bd0510707ecc1379276e13a16d817c297f799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d2664f054292a89cd405a2196bd0510707ecc1379276e13a16d817c297f799->enter($__internal_a2d2664f054292a89cd405a2196bd0510707ecc1379276e13a16d817c297f799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2d2664f054292a89cd405a2196bd0510707ecc1379276e13a16d817c297f799->leave($__internal_a2d2664f054292a89cd405a2196bd0510707ecc1379276e13a16d817c297f799_prof);

        
        $__internal_ad271f66631e40831dfa34f579a1f0e7ed3eaf8b6217cf68b8fb2f8d3355cd3e->leave($__internal_ad271f66631e40831dfa34f579a1f0e7ed3eaf8b6217cf68b8fb2f8d3355cd3e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_358e4ef6cef22fa05f67eb1048454795953d0f0b423a76bd0e0c2a7fd3b37f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358e4ef6cef22fa05f67eb1048454795953d0f0b423a76bd0e0c2a7fd3b37f5f->enter($__internal_358e4ef6cef22fa05f67eb1048454795953d0f0b423a76bd0e0c2a7fd3b37f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c441b7535e200cb17cf89096a16f5a488cf9d478cab0effee3b3f161c2e77328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c441b7535e200cb17cf89096a16f5a488cf9d478cab0effee3b3f161c2e77328->enter($__internal_c441b7535e200cb17cf89096a16f5a488cf9d478cab0effee3b3f161c2e77328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c441b7535e200cb17cf89096a16f5a488cf9d478cab0effee3b3f161c2e77328->leave($__internal_c441b7535e200cb17cf89096a16f5a488cf9d478cab0effee3b3f161c2e77328_prof);

        
        $__internal_358e4ef6cef22fa05f67eb1048454795953d0f0b423a76bd0e0c2a7fd3b37f5f->leave($__internal_358e4ef6cef22fa05f67eb1048454795953d0f0b423a76bd0e0c2a7fd3b37f5f_prof);

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
