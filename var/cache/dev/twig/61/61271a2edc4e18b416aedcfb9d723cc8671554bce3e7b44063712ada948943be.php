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
        $__internal_a6de737b747dfc029683e4a086ebd886b04e7792c8cf4c9b7c7be5f838525df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6de737b747dfc029683e4a086ebd886b04e7792c8cf4c9b7c7be5f838525df8->enter($__internal_a6de737b747dfc029683e4a086ebd886b04e7792c8cf4c9b7c7be5f838525df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $__internal_fc814694afa1537562cc6e578d389e0d1b556620ba85e8e8eb6389082cb705e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc814694afa1537562cc6e578d389e0d1b556620ba85e8e8eb6389082cb705e1->enter($__internal_fc814694afa1537562cc6e578d389e0d1b556620ba85e8e8eb6389082cb705e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6de737b747dfc029683e4a086ebd886b04e7792c8cf4c9b7c7be5f838525df8->leave($__internal_a6de737b747dfc029683e4a086ebd886b04e7792c8cf4c9b7c7be5f838525df8_prof);

        
        $__internal_fc814694afa1537562cc6e578d389e0d1b556620ba85e8e8eb6389082cb705e1->leave($__internal_fc814694afa1537562cc6e578d389e0d1b556620ba85e8e8eb6389082cb705e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6558977ab0af8d791b1f2b09c27362a01cc75d0f4cb42ac7233dafc08ed83255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6558977ab0af8d791b1f2b09c27362a01cc75d0f4cb42ac7233dafc08ed83255->enter($__internal_6558977ab0af8d791b1f2b09c27362a01cc75d0f4cb42ac7233dafc08ed83255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee9943fa2f303939490d4079da3939a9590ff4630e1639e2065f67f4a98ebd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9943fa2f303939490d4079da3939a9590ff4630e1639e2065f67f4a98ebd71->enter($__internal_ee9943fa2f303939490d4079da3939a9590ff4630e1639e2065f67f4a98ebd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_ee9943fa2f303939490d4079da3939a9590ff4630e1639e2065f67f4a98ebd71->leave($__internal_ee9943fa2f303939490d4079da3939a9590ff4630e1639e2065f67f4a98ebd71_prof);

        
        $__internal_6558977ab0af8d791b1f2b09c27362a01cc75d0f4cb42ac7233dafc08ed83255->leave($__internal_6558977ab0af8d791b1f2b09c27362a01cc75d0f4cb42ac7233dafc08ed83255_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a08a85720176e1cf0b1434353410fdce40a8a6cd4b7a4ab3c6c87a4b071760bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08a85720176e1cf0b1434353410fdce40a8a6cd4b7a4ab3c6c87a4b071760bd->enter($__internal_a08a85720176e1cf0b1434353410fdce40a8a6cd4b7a4ab3c6c87a4b071760bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6001ab521779fc624fb3c2b6ffc145a8cd3d08f7b45dff996069c64ff73bc403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6001ab521779fc624fb3c2b6ffc145a8cd3d08f7b45dff996069c64ff73bc403->enter($__internal_6001ab521779fc624fb3c2b6ffc145a8cd3d08f7b45dff996069c64ff73bc403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

                    <input type=\"submit\" value=\"Continuer\" class=\"btn btn-default pull-right\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <aside class=\"summary well\">
                        <h3>Détails de la réservation</h3>
                    </aside>
                </div>
            </div>
        </div>

        ";
        // line 25
        $this->loadTemplate("Reservation/inc/prices.html.twig", "Reservation/index.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
";
        
        $__internal_6001ab521779fc624fb3c2b6ffc145a8cd3d08f7b45dff996069c64ff73bc403->leave($__internal_6001ab521779fc624fb3c2b6ffc145a8cd3d08f7b45dff996069c64ff73bc403_prof);

        
        $__internal_a08a85720176e1cf0b1434353410fdce40a8a6cd4b7a4ab3c6c87a4b071760bd->leave($__internal_a08a85720176e1cf0b1434353410fdce40a8a6cd4b7a4ab3c6c87a4b071760bd_prof);

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
        return array (  100 => 26,  98 => 25,  84 => 14,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    {{ form_start(form) }}
                        {{ form_widget(form) }}

                    <input type=\"submit\" value=\"Continuer\" class=\"btn btn-default pull-right\">
                    {{ form_end(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <aside class=\"summary well\">
                        <h3>Détails de la réservation</h3>
                    </aside>
                </div>
            </div>
        </div>

        {% include \"Reservation/inc/prices.html.twig\" %}
    </div>
{% endblock %}", "Reservation/index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
