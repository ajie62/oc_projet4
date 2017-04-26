<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_66e70c1cc91026ea0a0064e1fc46598241763242f02c5e6c6dde9f79cfacf38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e70c1cc91026ea0a0064e1fc46598241763242f02c5e6c6dde9f79cfacf38c->enter($__internal_66e70c1cc91026ea0a0064e1fc46598241763242f02c5e6c6dde9f79cfacf38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0e6f9104b6bc998c0ff97d59e89b7ef16bfc20045294f63fad6f2ffb297354b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6f9104b6bc998c0ff97d59e89b7ef16bfc20045294f63fad6f2ffb297354b3->enter($__internal_0e6f9104b6bc998c0ff97d59e89b7ef16bfc20045294f63fad6f2ffb297354b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e70c1cc91026ea0a0064e1fc46598241763242f02c5e6c6dde9f79cfacf38c->leave($__internal_66e70c1cc91026ea0a0064e1fc46598241763242f02c5e6c6dde9f79cfacf38c_prof);

        
        $__internal_0e6f9104b6bc998c0ff97d59e89b7ef16bfc20045294f63fad6f2ffb297354b3->leave($__internal_0e6f9104b6bc998c0ff97d59e89b7ef16bfc20045294f63fad6f2ffb297354b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f78f2b7136477c929e240c4213b88b51eefb36ee8ed045e2ff924a536a1d4435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78f2b7136477c929e240c4213b88b51eefb36ee8ed045e2ff924a536a1d4435->enter($__internal_f78f2b7136477c929e240c4213b88b51eefb36ee8ed045e2ff924a536a1d4435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4e0712d653ec51aa433c891416572ae8794032f2bfce9f218d44afb05d9ef45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e0712d653ec51aa433c891416572ae8794032f2bfce9f218d44afb05d9ef45->enter($__internal_e4e0712d653ec51aa433c891416572ae8794032f2bfce9f218d44afb05d9ef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4e0712d653ec51aa433c891416572ae8794032f2bfce9f218d44afb05d9ef45->leave($__internal_e4e0712d653ec51aa433c891416572ae8794032f2bfce9f218d44afb05d9ef45_prof);

        
        $__internal_f78f2b7136477c929e240c4213b88b51eefb36ee8ed045e2ff924a536a1d4435->leave($__internal_f78f2b7136477c929e240c4213b88b51eefb36ee8ed045e2ff924a536a1d4435_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b28dd96ecf02dcdcbc3bafcefb817b3136699c2d98053d027ddc81cf854a5a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28dd96ecf02dcdcbc3bafcefb817b3136699c2d98053d027ddc81cf854a5a8f->enter($__internal_b28dd96ecf02dcdcbc3bafcefb817b3136699c2d98053d027ddc81cf854a5a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c687fc168070470e9e897c69daec1c9a982159393565c02e12c1f25185611ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c687fc168070470e9e897c69daec1c9a982159393565c02e12c1f25185611ae->enter($__internal_0c687fc168070470e9e897c69daec1c9a982159393565c02e12c1f25185611ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c687fc168070470e9e897c69daec1c9a982159393565c02e12c1f25185611ae->leave($__internal_0c687fc168070470e9e897c69daec1c9a982159393565c02e12c1f25185611ae_prof);

        
        $__internal_b28dd96ecf02dcdcbc3bafcefb817b3136699c2d98053d027ddc81cf854a5a8f->leave($__internal_b28dd96ecf02dcdcbc3bafcefb817b3136699c2d98053d027ddc81cf854a5a8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f930e38a603019d9a4bd33c8fb9d26e85ae4418048088263112d7fe718a1f89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f930e38a603019d9a4bd33c8fb9d26e85ae4418048088263112d7fe718a1f89e->enter($__internal_f930e38a603019d9a4bd33c8fb9d26e85ae4418048088263112d7fe718a1f89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1b43cce9a862da575cba16ec7aa2fe99ef45e5f539a7e668ae600f56480388b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b43cce9a862da575cba16ec7aa2fe99ef45e5f539a7e668ae600f56480388b->enter($__internal_a1b43cce9a862da575cba16ec7aa2fe99ef45e5f539a7e668ae600f56480388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1b43cce9a862da575cba16ec7aa2fe99ef45e5f539a7e668ae600f56480388b->leave($__internal_a1b43cce9a862da575cba16ec7aa2fe99ef45e5f539a7e668ae600f56480388b_prof);

        
        $__internal_f930e38a603019d9a4bd33c8fb9d26e85ae4418048088263112d7fe718a1f89e->leave($__internal_f930e38a603019d9a4bd33c8fb9d26e85ae4418048088263112d7fe718a1f89e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
