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
        $__internal_9a58555e42ac6cd1385f4a0105c91fab9a4bdda4570475da8a5510bb6f5316a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a58555e42ac6cd1385f4a0105c91fab9a4bdda4570475da8a5510bb6f5316a1->enter($__internal_9a58555e42ac6cd1385f4a0105c91fab9a4bdda4570475da8a5510bb6f5316a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_05a5cd4e38eb93142ce678915008bcad8417066b154e6d4bce33788b451e7ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a5cd4e38eb93142ce678915008bcad8417066b154e6d4bce33788b451e7ec6->enter($__internal_05a5cd4e38eb93142ce678915008bcad8417066b154e6d4bce33788b451e7ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a58555e42ac6cd1385f4a0105c91fab9a4bdda4570475da8a5510bb6f5316a1->leave($__internal_9a58555e42ac6cd1385f4a0105c91fab9a4bdda4570475da8a5510bb6f5316a1_prof);

        
        $__internal_05a5cd4e38eb93142ce678915008bcad8417066b154e6d4bce33788b451e7ec6->leave($__internal_05a5cd4e38eb93142ce678915008bcad8417066b154e6d4bce33788b451e7ec6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1afccab415dae852b7f7cb8f4281add4b13a7aed2a52ae6e7eba60579c48fbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afccab415dae852b7f7cb8f4281add4b13a7aed2a52ae6e7eba60579c48fbc0->enter($__internal_1afccab415dae852b7f7cb8f4281add4b13a7aed2a52ae6e7eba60579c48fbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4fba38bf22618e0b76d3fe1f71232984a6b38d9e919035210f7231f6e98fd05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fba38bf22618e0b76d3fe1f71232984a6b38d9e919035210f7231f6e98fd05d->enter($__internal_4fba38bf22618e0b76d3fe1f71232984a6b38d9e919035210f7231f6e98fd05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4fba38bf22618e0b76d3fe1f71232984a6b38d9e919035210f7231f6e98fd05d->leave($__internal_4fba38bf22618e0b76d3fe1f71232984a6b38d9e919035210f7231f6e98fd05d_prof);

        
        $__internal_1afccab415dae852b7f7cb8f4281add4b13a7aed2a52ae6e7eba60579c48fbc0->leave($__internal_1afccab415dae852b7f7cb8f4281add4b13a7aed2a52ae6e7eba60579c48fbc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9227b1277cbe4d2590a17cff31f4274ece09883eb34c6bdef34ea93d2e959a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9227b1277cbe4d2590a17cff31f4274ece09883eb34c6bdef34ea93d2e959a3b->enter($__internal_9227b1277cbe4d2590a17cff31f4274ece09883eb34c6bdef34ea93d2e959a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ed2154da65b467c4b7ce96ab859f00fd12a00c98e838c63067b517e03d5a61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed2154da65b467c4b7ce96ab859f00fd12a00c98e838c63067b517e03d5a61a->enter($__internal_3ed2154da65b467c4b7ce96ab859f00fd12a00c98e838c63067b517e03d5a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ed2154da65b467c4b7ce96ab859f00fd12a00c98e838c63067b517e03d5a61a->leave($__internal_3ed2154da65b467c4b7ce96ab859f00fd12a00c98e838c63067b517e03d5a61a_prof);

        
        $__internal_9227b1277cbe4d2590a17cff31f4274ece09883eb34c6bdef34ea93d2e959a3b->leave($__internal_9227b1277cbe4d2590a17cff31f4274ece09883eb34c6bdef34ea93d2e959a3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ec66e81646a43d3e5a384900c8a61249d3f634d199583117a9fd2d8012a4bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec66e81646a43d3e5a384900c8a61249d3f634d199583117a9fd2d8012a4bcc->enter($__internal_1ec66e81646a43d3e5a384900c8a61249d3f634d199583117a9fd2d8012a4bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9144ab452a764ea60e5dfd680e94fa304d6889a7a4e5c6e705857594a326e025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9144ab452a764ea60e5dfd680e94fa304d6889a7a4e5c6e705857594a326e025->enter($__internal_9144ab452a764ea60e5dfd680e94fa304d6889a7a4e5c6e705857594a326e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9144ab452a764ea60e5dfd680e94fa304d6889a7a4e5c6e705857594a326e025->leave($__internal_9144ab452a764ea60e5dfd680e94fa304d6889a7a4e5c6e705857594a326e025_prof);

        
        $__internal_1ec66e81646a43d3e5a384900c8a61249d3f634d199583117a9fd2d8012a4bcc->leave($__internal_1ec66e81646a43d3e5a384900c8a61249d3f634d199583117a9fd2d8012a4bcc_prof);

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
