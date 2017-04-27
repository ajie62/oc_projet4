<?php

/* :Reservation:index.html.twig */
class __TwigTemplate_2557bfe1f8e053d87549317e42ac90b01cd9c4d8759e2fae7d844747b9f8b6f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Reservation:index.html.twig", 1);
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
        $__internal_ecd17f4d1f4de38903ddf589db5e300002809fe69da00cde4d55b601f7907c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd17f4d1f4de38903ddf589db5e300002809fe69da00cde4d55b601f7907c2b->enter($__internal_ecd17f4d1f4de38903ddf589db5e300002809fe69da00cde4d55b601f7907c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Reservation:index.html.twig"));

        $__internal_ecfc5a4d33b03cb558b3d0327a1cbeb0e8152ed8e25338f4b43d45f816494c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfc5a4d33b03cb558b3d0327a1cbeb0e8152ed8e25338f4b43d45f816494c95->enter($__internal_ecfc5a4d33b03cb558b3d0327a1cbeb0e8152ed8e25338f4b43d45f816494c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd17f4d1f4de38903ddf589db5e300002809fe69da00cde4d55b601f7907c2b->leave($__internal_ecd17f4d1f4de38903ddf589db5e300002809fe69da00cde4d55b601f7907c2b_prof);

        
        $__internal_ecfc5a4d33b03cb558b3d0327a1cbeb0e8152ed8e25338f4b43d45f816494c95->leave($__internal_ecfc5a4d33b03cb558b3d0327a1cbeb0e8152ed8e25338f4b43d45f816494c95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b15cf8bcc1e000c6897032ff55cb66da769c31386ad749b4995782567ced82b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15cf8bcc1e000c6897032ff55cb66da769c31386ad749b4995782567ced82b4->enter($__internal_b15cf8bcc1e000c6897032ff55cb66da769c31386ad749b4995782567ced82b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5524bd345d1824eaabf28ada96cbc70f98cc289da178d817a19dbf35817f65ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5524bd345d1824eaabf28ada96cbc70f98cc289da178d817a19dbf35817f65ad->enter($__internal_5524bd345d1824eaabf28ada96cbc70f98cc289da178d817a19dbf35817f65ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_5524bd345d1824eaabf28ada96cbc70f98cc289da178d817a19dbf35817f65ad->leave($__internal_5524bd345d1824eaabf28ada96cbc70f98cc289da178d817a19dbf35817f65ad_prof);

        
        $__internal_b15cf8bcc1e000c6897032ff55cb66da769c31386ad749b4995782567ced82b4->leave($__internal_b15cf8bcc1e000c6897032ff55cb66da769c31386ad749b4995782567ced82b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7acf55c496d49fdb45c568375d3b54cc67023bd23a68f5bec3557aeb3635d655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acf55c496d49fdb45c568375d3b54cc67023bd23a68f5bec3557aeb3635d655->enter($__internal_7acf55c496d49fdb45c568375d3b54cc67023bd23a68f5bec3557aeb3635d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac51bee1907062974e05aeb90a6cf75d4e58f5c3d30b6d1c7863bc04b8ca289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac51bee1907062974e05aeb90a6cf75d4e58f5c3d30b6d1c7863bc04b8ca289->enter($__internal_1ac51bee1907062974e05aeb90a6cf75d4e58f5c3d30b6d1c7863bc04b8ca289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        <div id=\"reservation\">
            <h3>Choisissez une date</h3>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        
        $__internal_1ac51bee1907062974e05aeb90a6cf75d4e58f5c3d30b6d1c7863bc04b8ca289->leave($__internal_1ac51bee1907062974e05aeb90a6cf75d4e58f5c3d30b6d1c7863bc04b8ca289_prof);

        
        $__internal_7acf55c496d49fdb45c568375d3b54cc67023bd23a68f5bec3557aeb3635d655->leave($__internal_7acf55c496d49fdb45c568375d3b54cc67023bd23a68f5bec3557aeb3635d655_prof);

    }

    public function getTemplateName()
    {
        return ":Reservation:index.html.twig";
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
{% endblock %}", ":Reservation:index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
