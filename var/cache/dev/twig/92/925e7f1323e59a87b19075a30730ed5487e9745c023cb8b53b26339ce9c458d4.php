<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb158e698a15f195c5e55f8d692fcc5a3ad3a756fa1ad9417f5c8aa625e1b171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb158e698a15f195c5e55f8d692fcc5a3ad3a756fa1ad9417f5c8aa625e1b171->enter($__internal_fb158e698a15f195c5e55f8d692fcc5a3ad3a756fa1ad9417f5c8aa625e1b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_641867cbc7a65d8a60d55a6d313d9d7bd95bbf1597cd0259d13f5cf6b7e9b7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641867cbc7a65d8a60d55a6d313d9d7bd95bbf1597cd0259d13f5cf6b7e9b7a2->enter($__internal_641867cbc7a65d8a60d55a6d313d9d7bd95bbf1597cd0259d13f5cf6b7e9b7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb158e698a15f195c5e55f8d692fcc5a3ad3a756fa1ad9417f5c8aa625e1b171->leave($__internal_fb158e698a15f195c5e55f8d692fcc5a3ad3a756fa1ad9417f5c8aa625e1b171_prof);

        
        $__internal_641867cbc7a65d8a60d55a6d313d9d7bd95bbf1597cd0259d13f5cf6b7e9b7a2->leave($__internal_641867cbc7a65d8a60d55a6d313d9d7bd95bbf1597cd0259d13f5cf6b7e9b7a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e787c6841b75b05294425c0c7f362d96e42f597951bd6fa9b9e7d995b18103f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e787c6841b75b05294425c0c7f362d96e42f597951bd6fa9b9e7d995b18103f6->enter($__internal_e787c6841b75b05294425c0c7f362d96e42f597951bd6fa9b9e7d995b18103f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_feb38e104751f9445e45bf0a04a040d2965b353bf666cfb700c6685fe2d09c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb38e104751f9445e45bf0a04a040d2965b353bf666cfb700c6685fe2d09c9d->enter($__internal_feb38e104751f9445e45bf0a04a040d2965b353bf666cfb700c6685fe2d09c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_feb38e104751f9445e45bf0a04a040d2965b353bf666cfb700c6685fe2d09c9d->leave($__internal_feb38e104751f9445e45bf0a04a040d2965b353bf666cfb700c6685fe2d09c9d_prof);

        
        $__internal_e787c6841b75b05294425c0c7f362d96e42f597951bd6fa9b9e7d995b18103f6->leave($__internal_e787c6841b75b05294425c0c7f362d96e42f597951bd6fa9b9e7d995b18103f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5235a31a72694bbeca6eb124ba8411b726dfa0e85b7f702c66b137f4152da0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5235a31a72694bbeca6eb124ba8411b726dfa0e85b7f702c66b137f4152da0ce->enter($__internal_5235a31a72694bbeca6eb124ba8411b726dfa0e85b7f702c66b137f4152da0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7ebfed955493e09316f7dc9234fd6185e18935c038a3789f7669be90da497f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ebfed955493e09316f7dc9234fd6185e18935c038a3789f7669be90da497f7->enter($__internal_f7ebfed955493e09316f7dc9234fd6185e18935c038a3789f7669be90da497f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7ebfed955493e09316f7dc9234fd6185e18935c038a3789f7669be90da497f7->leave($__internal_f7ebfed955493e09316f7dc9234fd6185e18935c038a3789f7669be90da497f7_prof);

        
        $__internal_5235a31a72694bbeca6eb124ba8411b726dfa0e85b7f702c66b137f4152da0ce->leave($__internal_5235a31a72694bbeca6eb124ba8411b726dfa0e85b7f702c66b137f4152da0ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_251d171994e0b12cebecfb480292f67f53715de3c90fcc855ac94e37ae8369b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251d171994e0b12cebecfb480292f67f53715de3c90fcc855ac94e37ae8369b1->enter($__internal_251d171994e0b12cebecfb480292f67f53715de3c90fcc855ac94e37ae8369b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a251368f76dd23247b578bf6cc2ec2f167b17710b45ce73d436151affb9b2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a251368f76dd23247b578bf6cc2ec2f167b17710b45ce73d436151affb9b2c2->enter($__internal_6a251368f76dd23247b578bf6cc2ec2f167b17710b45ce73d436151affb9b2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a251368f76dd23247b578bf6cc2ec2f167b17710b45ce73d436151affb9b2c2->leave($__internal_6a251368f76dd23247b578bf6cc2ec2f167b17710b45ce73d436151affb9b2c2_prof);

        
        $__internal_251d171994e0b12cebecfb480292f67f53715de3c90fcc855ac94e37ae8369b1->leave($__internal_251d171994e0b12cebecfb480292f67f53715de3c90fcc855ac94e37ae8369b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
