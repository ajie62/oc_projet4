<?php

/* Reservation/confirmation.html.twig */
class __TwigTemplate_fe81cdd6d0d6896fbc77d3de74996615ed24cafb3cfa018ef66c9f237ec3a3f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Reservation/confirmation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_340ef93b08b75fb084250ceec72da9a99fb782a5d9066fce73c09cedd057fb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340ef93b08b75fb084250ceec72da9a99fb782a5d9066fce73c09cedd057fb7c->enter($__internal_340ef93b08b75fb084250ceec72da9a99fb782a5d9066fce73c09cedd057fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/confirmation.html.twig"));

        $__internal_163b7855479eb8f0118a4073bfaa1d54e28b26576d42162a055b5b8fa7e13592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163b7855479eb8f0118a4073bfaa1d54e28b26576d42162a055b5b8fa7e13592->enter($__internal_163b7855479eb8f0118a4073bfaa1d54e28b26576d42162a055b5b8fa7e13592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340ef93b08b75fb084250ceec72da9a99fb782a5d9066fce73c09cedd057fb7c->leave($__internal_340ef93b08b75fb084250ceec72da9a99fb782a5d9066fce73c09cedd057fb7c_prof);

        
        $__internal_163b7855479eb8f0118a4073bfaa1d54e28b26576d42162a055b5b8fa7e13592->leave($__internal_163b7855479eb8f0118a4073bfaa1d54e28b26576d42162a055b5b8fa7e13592_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_608fe854445144bdb7cf1fe26cc4e3ee18fbc7cfb7f3ca6e7d33f7cda38e5a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608fe854445144bdb7cf1fe26cc4e3ee18fbc7cfb7f3ca6e7d33f7cda38e5a4f->enter($__internal_608fe854445144bdb7cf1fe26cc4e3ee18fbc7cfb7f3ca6e7d33f7cda38e5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f34f55395323d4789eee03d17067e46578d7ed64b384635d4df22c16a9067ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34f55395323d4789eee03d17067e46578d7ed64b384635d4df22c16a9067ef7->enter($__internal_f34f55395323d4789eee03d17067e46578d7ed64b384635d4df22c16a9067ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f34f55395323d4789eee03d17067e46578d7ed64b384635d4df22c16a9067ef7->leave($__internal_f34f55395323d4789eee03d17067e46578d7ed64b384635d4df22c16a9067ef7_prof);

        
        $__internal_608fe854445144bdb7cf1fe26cc4e3ee18fbc7cfb7f3ca6e7d33f7cda38e5a4f->leave($__internal_608fe854445144bdb7cf1fe26cc4e3ee18fbc7cfb7f3ca6e7d33f7cda38e5a4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0cc140d99a0953b241380eb7d6b83c69ddd0435bd0368b36a6fc35d7b2fa4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cc140d99a0953b241380eb7d6b83c69ddd0435bd0368b36a6fc35d7b2fa4b9->enter($__internal_a0cc140d99a0953b241380eb7d6b83c69ddd0435bd0368b36a6fc35d7b2fa4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40f12670126681a975948b6a4cfa69d60ed0e8d4438e7e8afea42c43ae07882a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f12670126681a975948b6a4cfa69d60ed0e8d4438e7e8afea42c43ae07882a->enter($__internal_40f12670126681a975948b6a4cfa69d60ed0e8d4438e7e8afea42c43ae07882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <p class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        <h1>Now you've got to pay.</h1>
    </div>
";
        
        $__internal_40f12670126681a975948b6a4cfa69d60ed0e8d4438e7e8afea42c43ae07882a->leave($__internal_40f12670126681a975948b6a4cfa69d60ed0e8d4438e7e8afea42c43ae07882a_prof);

        
        $__internal_a0cc140d99a0953b241380eb7d6b83c69ddd0435bd0368b36a6fc35d7b2fa4b9->leave($__internal_a0cc140d99a0953b241380eb7d6b83c69ddd0435bd0368b36a6fc35d7b2fa4b9_prof);

    }

    public function getTemplateName()
    {
        return "Reservation/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  74 => 8,  70 => 7,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{% endblock %}

{% block body %}
    <div class=\"container\">
        {% for message in app.session.flashbag.get('notice') %}
            <p class=\"alert alert-info\">{{ message }}</p>
        {% endfor %}

        <h1>Now you've got to pay.</h1>
    </div>
{% endblock %}", "Reservation/confirmation.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/confirmation.html.twig");
    }
}
