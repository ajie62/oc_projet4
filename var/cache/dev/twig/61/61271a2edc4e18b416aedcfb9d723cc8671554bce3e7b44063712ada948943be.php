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
        $__internal_11330fdf8e5e313fffd57d13f84f759477bd9b5deede0533497cbbab7d89ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11330fdf8e5e313fffd57d13f84f759477bd9b5deede0533497cbbab7d89ff4b->enter($__internal_11330fdf8e5e313fffd57d13f84f759477bd9b5deede0533497cbbab7d89ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $__internal_815140330df65bb22fe32f75561842821691a00d889486ab2c1eef438387e328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815140330df65bb22fe32f75561842821691a00d889486ab2c1eef438387e328->enter($__internal_815140330df65bb22fe32f75561842821691a00d889486ab2c1eef438387e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11330fdf8e5e313fffd57d13f84f759477bd9b5deede0533497cbbab7d89ff4b->leave($__internal_11330fdf8e5e313fffd57d13f84f759477bd9b5deede0533497cbbab7d89ff4b_prof);

        
        $__internal_815140330df65bb22fe32f75561842821691a00d889486ab2c1eef438387e328->leave($__internal_815140330df65bb22fe32f75561842821691a00d889486ab2c1eef438387e328_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df743833ba78e117c7438284baeb13de92afd4e719d6a8db114e9de2c2e75331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df743833ba78e117c7438284baeb13de92afd4e719d6a8db114e9de2c2e75331->enter($__internal_df743833ba78e117c7438284baeb13de92afd4e719d6a8db114e9de2c2e75331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ea96deccd1b9f8d4f02d16b8afe31cf63eb71ed1e574eff10cf60a837390d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea96deccd1b9f8d4f02d16b8afe31cf63eb71ed1e574eff10cf60a837390d4d->enter($__internal_8ea96deccd1b9f8d4f02d16b8afe31cf63eb71ed1e574eff10cf60a837390d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_8ea96deccd1b9f8d4f02d16b8afe31cf63eb71ed1e574eff10cf60a837390d4d->leave($__internal_8ea96deccd1b9f8d4f02d16b8afe31cf63eb71ed1e574eff10cf60a837390d4d_prof);

        
        $__internal_df743833ba78e117c7438284baeb13de92afd4e719d6a8db114e9de2c2e75331->leave($__internal_df743833ba78e117c7438284baeb13de92afd4e719d6a8db114e9de2c2e75331_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce2a7dabb101fd4b61bd0bdb8f26ed70b0391307e2a797d53c5f4a543ce26e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2a7dabb101fd4b61bd0bdb8f26ed70b0391307e2a797d53c5f4a543ce26e5f->enter($__internal_ce2a7dabb101fd4b61bd0bdb8f26ed70b0391307e2a797d53c5f4a543ce26e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2be2c5d0eb2b2396bc291caa2df8100d2a5ada8902a40d323d281f4b6be1d8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be2c5d0eb2b2396bc291caa2df8100d2a5ada8902a40d323d281f4b6be1d8ba->enter($__internal_2be2c5d0eb2b2396bc291caa2df8100d2a5ada8902a40d323d281f4b6be1d8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container main-container\">
        <div id=\"reservation\">
            ";
        // line 8
        $this->loadTemplate("Reservation/inc/title.html.twig", "Reservation/index.html.twig", 8)->display($context);
        // line 9
        echo "
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-3\">
                    ";
        // line 12
        $this->loadTemplate("Reservation/inc/prices.html.twig", "Reservation/index.html.twig", 12)->display($context);
        // line 13
        echo "                </div>
                <div class=\"col-xs-12 col-sm-6 booking-form\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-success pull-right\">Continuer</button>
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2be2c5d0eb2b2396bc291caa2df8100d2a5ada8902a40d323d281f4b6be1d8ba->leave($__internal_2be2c5d0eb2b2396bc291caa2df8100d2a5ada8902a40d323d281f4b6be1d8ba_prof);

        
        $__internal_ce2a7dabb101fd4b61bd0bdb8f26ed70b0391307e2a797d53c5f4a543ce26e5f->leave($__internal_ce2a7dabb101fd4b61bd0bdb8f26ed70b0391307e2a797d53c5f4a543ce26e5f_prof);

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
        return array (  95 => 19,  89 => 16,  85 => 15,  81 => 13,  79 => 12,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <div class=\"container main-container\">
        <div id=\"reservation\">
            {% include \"Reservation/inc/title.html.twig\" %}

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-3\">
                    {% include \"Reservation/inc/prices.html.twig\" %}
                </div>
                <div class=\"col-xs-12 col-sm-6 booking-form\">
                    {{ form_start(form) }}
                        {{ form_widget(form) }}

                    <button type=\"submit\" class=\"btn btn-success pull-right\">Continuer</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Reservation/index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
