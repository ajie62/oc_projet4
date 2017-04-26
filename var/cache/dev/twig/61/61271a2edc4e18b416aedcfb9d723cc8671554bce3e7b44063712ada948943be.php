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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5593d9573fc6316d287362e05a694a5aacebb83ae229d602f8f537cce4204c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5593d9573fc6316d287362e05a694a5aacebb83ae229d602f8f537cce4204c55->enter($__internal_5593d9573fc6316d287362e05a694a5aacebb83ae229d602f8f537cce4204c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $__internal_5ba81a87e86ca7367f006731e597af713b0970b211d6558376648796cf460765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba81a87e86ca7367f006731e597af713b0970b211d6558376648796cf460765->enter($__internal_5ba81a87e86ca7367f006731e597af713b0970b211d6558376648796cf460765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5593d9573fc6316d287362e05a694a5aacebb83ae229d602f8f537cce4204c55->leave($__internal_5593d9573fc6316d287362e05a694a5aacebb83ae229d602f8f537cce4204c55_prof);

        
        $__internal_5ba81a87e86ca7367f006731e597af713b0970b211d6558376648796cf460765->leave($__internal_5ba81a87e86ca7367f006731e597af713b0970b211d6558376648796cf460765_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_003de89e53db423035ddb47cce917851c969dca74a57adec0853f1313e141d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003de89e53db423035ddb47cce917851c969dca74a57adec0853f1313e141d8c->enter($__internal_003de89e53db423035ddb47cce917851c969dca74a57adec0853f1313e141d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_942bbefe7a0bd792ae66aa5bd30e4d56d76ec86c221e4705bd92f0f86c1771c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942bbefe7a0bd792ae66aa5bd30e4d56d76ec86c221e4705bd92f0f86c1771c5->enter($__internal_942bbefe7a0bd792ae66aa5bd30e4d56d76ec86c221e4705bd92f0f86c1771c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_942bbefe7a0bd792ae66aa5bd30e4d56d76ec86c221e4705bd92f0f86c1771c5->leave($__internal_942bbefe7a0bd792ae66aa5bd30e4d56d76ec86c221e4705bd92f0f86c1771c5_prof);

        
        $__internal_003de89e53db423035ddb47cce917851c969dca74a57adec0853f1313e141d8c->leave($__internal_003de89e53db423035ddb47cce917851c969dca74a57adec0853f1313e141d8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b5adc55d013dbf9bf2d8958ffaf7b546564cfbeec51f424a9b9f2cf0498a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b5adc55d013dbf9bf2d8958ffaf7b546564cfbeec51f424a9b9f2cf0498a00->enter($__internal_33b5adc55d013dbf9bf2d8958ffaf7b546564cfbeec51f424a9b9f2cf0498a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7da7852956a2245a0d437324d70ac099763ab9f5aa597db7af8ca5fb72dfe8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da7852956a2245a0d437324d70ac099763ab9f5aa597db7af8ca5fb72dfe8ba->enter($__internal_7da7852956a2245a0d437324d70ac099763ab9f5aa597db7af8ca5fb72dfe8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        <div id=\"reservation\">
            <h3>Choisissez une date</h3>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                        <div class=\"datepicker\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                        </div>

                        <div class=\"type\">
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type de billet"));
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                        </div>
                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_7da7852956a2245a0d437324d70ac099763ab9f5aa597db7af8ca5fb72dfe8ba->leave($__internal_7da7852956a2245a0d437324d70ac099763ab9f5aa597db7af8ca5fb72dfe8ba_prof);

        
        $__internal_33b5adc55d013dbf9bf2d8958ffaf7b546564cfbeec51f424a9b9f2cf0498a00->leave($__internal_33b5adc55d013dbf9bf2d8958ffaf7b546564cfbeec51f424a9b9f2cf0498a00_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54999f0ce5ca084364fb2589d434b4ff6d871eb0d2a71ff5fe376387269a7553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54999f0ce5ca084364fb2589d434b4ff6d871eb0d2a71ff5fe376387269a7553->enter($__internal_54999f0ce5ca084364fb2589d434b4ff6d871eb0d2a71ff5fe376387269a7553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85d3796c83c8dd77625623506c7510d9fab08ec4a5e9dd249a66226dbe1aa1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d3796c83c8dd77625623506c7510d9fab08ec4a5e9dd249a66226dbe1aa1a7->enter($__internal_85d3796c83c8dd77625623506c7510d9fab08ec4a5e9dd249a66226dbe1aa1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

    </script>
";
        
        $__internal_85d3796c83c8dd77625623506c7510d9fab08ec4a5e9dd249a66226dbe1aa1a7->leave($__internal_85d3796c83c8dd77625623506c7510d9fab08ec4a5e9dd249a66226dbe1aa1a7_prof);

        
        $__internal_54999f0ce5ca084364fb2589d434b4ff6d871eb0d2a71ff5fe376387269a7553->leave($__internal_54999f0ce5ca084364fb2589d434b4ff6d871eb0d2a71ff5fe376387269a7553_prof);

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
        return array (  143 => 40,  134 => 39,  112 => 26,  107 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  78 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
                    {{ form_start(form) }}

                        <div class=\"datepicker\">
                            {{ form_label(form.date) }}
                            {{ form_errors(form.date) }}
                            {{ form_widget(form.date) }}
                        </div>

                        <div class=\"type\">
                            {{ form_label(form.type, \"Type de billet\") }}
                            {{ form_errors(form.type) }}
                            {{ form_widget(form.type) }}
                        </div>
                    {{ form_end(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <p>Résumé de la réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent () }}
    <script>

    </script>
{% endblock %}", "Reservation/index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
