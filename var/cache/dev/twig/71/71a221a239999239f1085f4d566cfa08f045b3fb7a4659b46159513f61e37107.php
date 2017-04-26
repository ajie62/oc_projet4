<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2bbc37753fda3822b059fb9bfd6d99e0967cba032afc6e6bcfd27dabde58dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7aeb7c54c4bdd469de7a746c97afbeae392e34aca4ec8d74dae03dc23788e4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aeb7c54c4bdd469de7a746c97afbeae392e34aca4ec8d74dae03dc23788e4cc->enter($__internal_7aeb7c54c4bdd469de7a746c97afbeae392e34aca4ec8d74dae03dc23788e4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b6bafe43819b0730dcf745767feb2d9a1630c2d564c447131016df3d28eb1871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bafe43819b0730dcf745767feb2d9a1630c2d564c447131016df3d28eb1871->enter($__internal_b6bafe43819b0730dcf745767feb2d9a1630c2d564c447131016df3d28eb1871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aeb7c54c4bdd469de7a746c97afbeae392e34aca4ec8d74dae03dc23788e4cc->leave($__internal_7aeb7c54c4bdd469de7a746c97afbeae392e34aca4ec8d74dae03dc23788e4cc_prof);

        
        $__internal_b6bafe43819b0730dcf745767feb2d9a1630c2d564c447131016df3d28eb1871->leave($__internal_b6bafe43819b0730dcf745767feb2d9a1630c2d564c447131016df3d28eb1871_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b7d45ea3cdd2a84463e15f7c617d7ce046bb8eb84e3c980cf895176a7bce124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7d45ea3cdd2a84463e15f7c617d7ce046bb8eb84e3c980cf895176a7bce124->enter($__internal_6b7d45ea3cdd2a84463e15f7c617d7ce046bb8eb84e3c980cf895176a7bce124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0cfbc4ff85393e6218ce73d57cd61a67d172be624482a473feb5c096dbf80b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfbc4ff85393e6218ce73d57cd61a67d172be624482a473feb5c096dbf80b9b->enter($__internal_0cfbc4ff85393e6218ce73d57cd61a67d172be624482a473feb5c096dbf80b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0cfbc4ff85393e6218ce73d57cd61a67d172be624482a473feb5c096dbf80b9b->leave($__internal_0cfbc4ff85393e6218ce73d57cd61a67d172be624482a473feb5c096dbf80b9b_prof);

        
        $__internal_6b7d45ea3cdd2a84463e15f7c617d7ce046bb8eb84e3c980cf895176a7bce124->leave($__internal_6b7d45ea3cdd2a84463e15f7c617d7ce046bb8eb84e3c980cf895176a7bce124_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a8be053577e2facebc16ef16d15d2d999bfe987752d283ca5b5579b5ff31cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8be053577e2facebc16ef16d15d2d999bfe987752d283ca5b5579b5ff31cc5->enter($__internal_7a8be053577e2facebc16ef16d15d2d999bfe987752d283ca5b5579b5ff31cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9fde838bf44747f5efb595643d70bf6a08e98e22435073846106fb6f8e3ccb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fde838bf44747f5efb595643d70bf6a08e98e22435073846106fb6f8e3ccb07->enter($__internal_9fde838bf44747f5efb595643d70bf6a08e98e22435073846106fb6f8e3ccb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9fde838bf44747f5efb595643d70bf6a08e98e22435073846106fb6f8e3ccb07->leave($__internal_9fde838bf44747f5efb595643d70bf6a08e98e22435073846106fb6f8e3ccb07_prof);

        
        $__internal_7a8be053577e2facebc16ef16d15d2d999bfe987752d283ca5b5579b5ff31cc5->leave($__internal_7a8be053577e2facebc16ef16d15d2d999bfe987752d283ca5b5579b5ff31cc5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4cb419f2f0867737a91310edea7268396c98fd49ae8da763f2f09050fdcbd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cb419f2f0867737a91310edea7268396c98fd49ae8da763f2f09050fdcbd55->enter($__internal_b4cb419f2f0867737a91310edea7268396c98fd49ae8da763f2f09050fdcbd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4147c0ecf6dee3efb034ea4cd9c281c76c6ea962de33781b0da7d80c643d48e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4147c0ecf6dee3efb034ea4cd9c281c76c6ea962de33781b0da7d80c643d48e4->enter($__internal_4147c0ecf6dee3efb034ea4cd9c281c76c6ea962de33781b0da7d80c643d48e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4147c0ecf6dee3efb034ea4cd9c281c76c6ea962de33781b0da7d80c643d48e4->leave($__internal_4147c0ecf6dee3efb034ea4cd9c281c76c6ea962de33781b0da7d80c643d48e4_prof);

        
        $__internal_b4cb419f2f0867737a91310edea7268396c98fd49ae8da763f2f09050fdcbd55->leave($__internal_b4cb419f2f0867737a91310edea7268396c98fd49ae8da763f2f09050fdcbd55_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
