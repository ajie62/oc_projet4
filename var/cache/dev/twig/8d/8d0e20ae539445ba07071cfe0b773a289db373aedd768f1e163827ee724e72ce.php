<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c37bc0ce2640154a5a1e59c95058a029698e5e57c6e105d1879cf715d24d6e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bcd531f6f5fbfee6b651b719ecc8dc56c78622cbbfa91b35f2b423837c1d672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcd531f6f5fbfee6b651b719ecc8dc56c78622cbbfa91b35f2b423837c1d672->enter($__internal_0bcd531f6f5fbfee6b651b719ecc8dc56c78622cbbfa91b35f2b423837c1d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e24cab824fbbf361534c412939a840ae6d134b9c1c9f344e4e38e73c27ba382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24cab824fbbf361534c412939a840ae6d134b9c1c9f344e4e38e73c27ba382b->enter($__internal_e24cab824fbbf361534c412939a840ae6d134b9c1c9f344e4e38e73c27ba382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcd531f6f5fbfee6b651b719ecc8dc56c78622cbbfa91b35f2b423837c1d672->leave($__internal_0bcd531f6f5fbfee6b651b719ecc8dc56c78622cbbfa91b35f2b423837c1d672_prof);

        
        $__internal_e24cab824fbbf361534c412939a840ae6d134b9c1c9f344e4e38e73c27ba382b->leave($__internal_e24cab824fbbf361534c412939a840ae6d134b9c1c9f344e4e38e73c27ba382b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb8598a6bfaf3b7b79ac71bfd48fb3aac183130213bd7798d03a7c4b003bf710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8598a6bfaf3b7b79ac71bfd48fb3aac183130213bd7798d03a7c4b003bf710->enter($__internal_eb8598a6bfaf3b7b79ac71bfd48fb3aac183130213bd7798d03a7c4b003bf710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5cef551e9810219d59b38e0a8586c22cef9c76d83bc98f56ee7fcdb0baa49b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cef551e9810219d59b38e0a8586c22cef9c76d83bc98f56ee7fcdb0baa49b64->enter($__internal_5cef551e9810219d59b38e0a8586c22cef9c76d83bc98f56ee7fcdb0baa49b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5cef551e9810219d59b38e0a8586c22cef9c76d83bc98f56ee7fcdb0baa49b64->leave($__internal_5cef551e9810219d59b38e0a8586c22cef9c76d83bc98f56ee7fcdb0baa49b64_prof);

        
        $__internal_eb8598a6bfaf3b7b79ac71bfd48fb3aac183130213bd7798d03a7c4b003bf710->leave($__internal_eb8598a6bfaf3b7b79ac71bfd48fb3aac183130213bd7798d03a7c4b003bf710_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
