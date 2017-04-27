<?php

/* Reservation/index.html.twig */
class __TwigTemplate_fc81bba639f12fa694f4b1ed2f58e254eaf24efcc1762b9c06e3a08ba007a415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Reservation/index.html.twig", 1);
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
        $__internal_cfc98b2e4b9501237ad4a221a212a25fa66a08fca80cc06d9934b6629d865e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc98b2e4b9501237ad4a221a212a25fa66a08fca80cc06d9934b6629d865e38->enter($__internal_cfc98b2e4b9501237ad4a221a212a25fa66a08fca80cc06d9934b6629d865e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $__internal_10c1f1dcd8862ed936394f716bb069694c3fc34e618af5e96cf8c50de655c886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c1f1dcd8862ed936394f716bb069694c3fc34e618af5e96cf8c50de655c886->enter($__internal_10c1f1dcd8862ed936394f716bb069694c3fc34e618af5e96cf8c50de655c886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc98b2e4b9501237ad4a221a212a25fa66a08fca80cc06d9934b6629d865e38->leave($__internal_cfc98b2e4b9501237ad4a221a212a25fa66a08fca80cc06d9934b6629d865e38_prof);

        
        $__internal_10c1f1dcd8862ed936394f716bb069694c3fc34e618af5e96cf8c50de655c886->leave($__internal_10c1f1dcd8862ed936394f716bb069694c3fc34e618af5e96cf8c50de655c886_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d9a3ce7e88d0e92a0f3e7630c4ea4b7d8ec1e35815595bc3e30ec56d416480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d9a3ce7e88d0e92a0f3e7630c4ea4b7d8ec1e35815595bc3e30ec56d416480->enter($__internal_17d9a3ce7e88d0e92a0f3e7630c4ea4b7d8ec1e35815595bc3e30ec56d416480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95cc7eb954390a471269fad72aee33aafe69f09d14a32d026d5db2a85fb0da5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cc7eb954390a471269fad72aee33aafe69f09d14a32d026d5db2a85fb0da5e->enter($__internal_95cc7eb954390a471269fad72aee33aafe69f09d14a32d026d5db2a85fb0da5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_95cc7eb954390a471269fad72aee33aafe69f09d14a32d026d5db2a85fb0da5e->leave($__internal_95cc7eb954390a471269fad72aee33aafe69f09d14a32d026d5db2a85fb0da5e_prof);

        
        $__internal_17d9a3ce7e88d0e92a0f3e7630c4ea4b7d8ec1e35815595bc3e30ec56d416480->leave($__internal_17d9a3ce7e88d0e92a0f3e7630c4ea4b7d8ec1e35815595bc3e30ec56d416480_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4efdbb5906e067e9ecb8a780f240af9322c7f9288fa63108002444c7680789da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efdbb5906e067e9ecb8a780f240af9322c7f9288fa63108002444c7680789da->enter($__internal_4efdbb5906e067e9ecb8a780f240af9322c7f9288fa63108002444c7680789da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_579690fcaa23165dfc8c194d6d951be5b6a9c721c009081e0f3fa82fc5c0cd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579690fcaa23165dfc8c194d6d951be5b6a9c721c009081e0f3fa82fc5c0cd9d->enter($__internal_579690fcaa23165dfc8c194d6d951be5b6a9c721c009081e0f3fa82fc5c0cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        <div id=\"reservation\">
            <h3>Choisissez une date</h3>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <p>Résumé de la réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_579690fcaa23165dfc8c194d6d951be5b6a9c721c009081e0f3fa82fc5c0cd9d->leave($__internal_579690fcaa23165dfc8c194d6d951be5b6a9c721c009081e0f3fa82fc5c0cd9d_prof);

        
        $__internal_4efdbb5906e067e9ecb8a780f240af9322c7f9288fa63108002444c7680789da->leave($__internal_4efdbb5906e067e9ecb8a780f240af9322c7f9288fa63108002444c7680789da_prof);

    }

    public function getTemplateName()
    {
        return "Reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Réservation{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        <div id=\"reservation\">
            <h3>Choisissez une date</h3>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    {{ form(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <p>Résumé de la réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Reservation/index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
