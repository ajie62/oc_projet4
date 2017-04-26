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
        $__internal_1d0c47fa620f5c141ad3155cd071ae164d8780e99ae4021d5754dbdadb512aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c47fa620f5c141ad3155cd071ae164d8780e99ae4021d5754dbdadb512aca->enter($__internal_1d0c47fa620f5c141ad3155cd071ae164d8780e99ae4021d5754dbdadb512aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_27231fc00bde7c880baef9405c533e3f1aa338ba818eaeec14b24389605024cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27231fc00bde7c880baef9405c533e3f1aa338ba818eaeec14b24389605024cd->enter($__internal_27231fc00bde7c880baef9405c533e3f1aa338ba818eaeec14b24389605024cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0c47fa620f5c141ad3155cd071ae164d8780e99ae4021d5754dbdadb512aca->leave($__internal_1d0c47fa620f5c141ad3155cd071ae164d8780e99ae4021d5754dbdadb512aca_prof);

        
        $__internal_27231fc00bde7c880baef9405c533e3f1aa338ba818eaeec14b24389605024cd->leave($__internal_27231fc00bde7c880baef9405c533e3f1aa338ba818eaeec14b24389605024cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4f7832d945c56c50a51a6806b3dafc04ff88d5fb7e252abb08d336819f0cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4f7832d945c56c50a51a6806b3dafc04ff88d5fb7e252abb08d336819f0cd2->enter($__internal_3b4f7832d945c56c50a51a6806b3dafc04ff88d5fb7e252abb08d336819f0cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed5d75f9473fe45fca5ee0d9187af61bfcf4f5bfce3737c0e5664518ec5845b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5d75f9473fe45fca5ee0d9187af61bfcf4f5bfce3737c0e5664518ec5845b4->enter($__internal_ed5d75f9473fe45fca5ee0d9187af61bfcf4f5bfce3737c0e5664518ec5845b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ed5d75f9473fe45fca5ee0d9187af61bfcf4f5bfce3737c0e5664518ec5845b4->leave($__internal_ed5d75f9473fe45fca5ee0d9187af61bfcf4f5bfce3737c0e5664518ec5845b4_prof);

        
        $__internal_3b4f7832d945c56c50a51a6806b3dafc04ff88d5fb7e252abb08d336819f0cd2->leave($__internal_3b4f7832d945c56c50a51a6806b3dafc04ff88d5fb7e252abb08d336819f0cd2_prof);

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
