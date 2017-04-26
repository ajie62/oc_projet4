<?php

/* Reservation/information.html.twig */
class __TwigTemplate_114f78478a485d586831b7a553b8ea046dcefcbae0b5eca157716abd26c73250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Reservation/information.html.twig", 1);
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
        $__internal_6bcbd1539e9d29cf88b2f0244cedd26ad654a95944cc8a11f17e965a4160c8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcbd1539e9d29cf88b2f0244cedd26ad654a95944cc8a11f17e965a4160c8e5->enter($__internal_6bcbd1539e9d29cf88b2f0244cedd26ad654a95944cc8a11f17e965a4160c8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/information.html.twig"));

        $__internal_827d95789de2f7a7fbe8b9b53e086a2907d89e05b5c17e205aef009b61393b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827d95789de2f7a7fbe8b9b53e086a2907d89e05b5c17e205aef009b61393b0f->enter($__internal_827d95789de2f7a7fbe8b9b53e086a2907d89e05b5c17e205aef009b61393b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bcbd1539e9d29cf88b2f0244cedd26ad654a95944cc8a11f17e965a4160c8e5->leave($__internal_6bcbd1539e9d29cf88b2f0244cedd26ad654a95944cc8a11f17e965a4160c8e5_prof);

        
        $__internal_827d95789de2f7a7fbe8b9b53e086a2907d89e05b5c17e205aef009b61393b0f->leave($__internal_827d95789de2f7a7fbe8b9b53e086a2907d89e05b5c17e205aef009b61393b0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_117664d6119678c71ee75cef5ef6129b3a0385f988830e79df5ae85d3b978879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117664d6119678c71ee75cef5ef6129b3a0385f988830e79df5ae85d3b978879->enter($__internal_117664d6119678c71ee75cef5ef6129b3a0385f988830e79df5ae85d3b978879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b5a0bc0c641b296ca32a2a873fb2ccd103a26c0ffa021d0b98ac5ad02dcb150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a0bc0c641b296ca32a2a873fb2ccd103a26c0ffa021d0b98ac5ad02dcb150->enter($__internal_8b5a0bc0c641b296ca32a2a873fb2ccd103a26c0ffa021d0b98ac5ad02dcb150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Vos informations";
        
        $__internal_8b5a0bc0c641b296ca32a2a873fb2ccd103a26c0ffa021d0b98ac5ad02dcb150->leave($__internal_8b5a0bc0c641b296ca32a2a873fb2ccd103a26c0ffa021d0b98ac5ad02dcb150_prof);

        
        $__internal_117664d6119678c71ee75cef5ef6129b3a0385f988830e79df5ae85d3b978879->leave($__internal_117664d6119678c71ee75cef5ef6129b3a0385f988830e79df5ae85d3b978879_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c80ecdf0ec32320b349b644d1e3a4a7e5d9e9db276708573278621f0b8e7824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c80ecdf0ec32320b349b644d1e3a4a7e5d9e9db276708573278621f0b8e7824->enter($__internal_8c80ecdf0ec32320b349b644d1e3a4a7e5d9e9db276708573278621f0b8e7824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_481e6dbfc2e1ce4ecaaaff19df78c494d845584a9bb0a94183318ea934e981d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481e6dbfc2e1ce4ecaaaff19df78c494d845584a9bb0a94183318ea934e981d9->enter($__internal_481e6dbfc2e1ce4ecaaaff19df78c494d845584a9bb0a94183318ea934e981d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <h3>Votre réservation</h3>
                        <strong>Date de votre réservation : </strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "date", array()), "d/m/Y"), "html", null, true);
        echo "
                        <br>
                        <strong>Type de billet choisi : </strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "type", array()), "html", null, true);
        echo "<br>
                        <strong>Nombre de billets : </strong> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "ticketsNumber", array()), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_481e6dbfc2e1ce4ecaaaff19df78c494d845584a9bb0a94183318ea934e981d9->leave($__internal_481e6dbfc2e1ce4ecaaaff19df78c494d845584a9bb0a94183318ea934e981d9_prof);

        
        $__internal_8c80ecdf0ec32320b349b644d1e3a4a7e5d9e9db276708573278621f0b8e7824->leave($__internal_8c80ecdf0ec32320b349b644d1e3a4a7e5d9e9db276708573278621f0b8e7824_prof);

    }

    public function getTemplateName()
    {
        return "Reservation/information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  106 => 24,  101 => 22,  92 => 16,  86 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Vos informations{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        {% for message in app.session.flashbag.get('notice') %}
            <p class=\"alert alert-success\">{{ message }}</p>
        {% endfor %}

        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    {{ form(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <h3>Votre réservation</h3>
                        <strong>Date de votre réservation : </strong> {{ app.session.get('reservation').date|date('d/m/Y') }}
                        <br>
                        <strong>Type de billet choisi : </strong> {{ app.session.get('reservation').type }}<br>
                        <strong>Nombre de billets : </strong> {{ app.session.get('reservation').ticketsNumber }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Reservation/information.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/information.html.twig");
    }
}
