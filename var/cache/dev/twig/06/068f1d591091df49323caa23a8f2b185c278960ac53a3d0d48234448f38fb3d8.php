<?php

/* Reservation/payment.html.twig */
class __TwigTemplate_aa5d60df3aa2111b587e64743e95a957685dad29d31128f75cb19cd328f257b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Reservation/payment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9385025f940e46857b4b17164e5647d8bed4c82ccd029919145528e484b6230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9385025f940e46857b4b17164e5647d8bed4c82ccd029919145528e484b6230->enter($__internal_a9385025f940e46857b4b17164e5647d8bed4c82ccd029919145528e484b6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/payment.html.twig"));

        $__internal_80d6ccb21db6b65a8e25404684693ffc5f7a1f78bb4723f42dcca90345b1121d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d6ccb21db6b65a8e25404684693ffc5f7a1f78bb4723f42dcca90345b1121d->enter($__internal_80d6ccb21db6b65a8e25404684693ffc5f7a1f78bb4723f42dcca90345b1121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9385025f940e46857b4b17164e5647d8bed4c82ccd029919145528e484b6230->leave($__internal_a9385025f940e46857b4b17164e5647d8bed4c82ccd029919145528e484b6230_prof);

        
        $__internal_80d6ccb21db6b65a8e25404684693ffc5f7a1f78bb4723f42dcca90345b1121d->leave($__internal_80d6ccb21db6b65a8e25404684693ffc5f7a1f78bb4723f42dcca90345b1121d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c60db4174513a258d1ff64e71e25d9bb00725bc733fb56bf7bfe982e5a67e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c60db4174513a258d1ff64e71e25d9bb00725bc733fb56bf7bfe982e5a67e29->enter($__internal_2c60db4174513a258d1ff64e71e25d9bb00725bc733fb56bf7bfe982e5a67e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5a2007975dc9833b68b8f9bd55c1b0f7dbfb931c4b219b24d69bed7fa5f9094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a2007975dc9833b68b8f9bd55c1b0f7dbfb931c4b219b24d69bed7fa5f9094->enter($__internal_d5a2007975dc9833b68b8f9bd55c1b0f7dbfb931c4b219b24d69bed7fa5f9094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div id=\"reservation\">
            <div class=\"row\">
                <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                        <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <h3>Votre réservation</h3>
                        <strong>Date de votre réservation : </strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "date", array()), "d/m/Y"), "html", null, true);
        echo "
                        <br>
                        <strong>Type de billet choisi : </strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "type", array()), "html", null, true);
        echo "<br>
                        <strong>Nombre de billets : </strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "reservation"), "method"), "ticketsNumber", array()), "html", null, true);
        echo "

                        <h3>Vos informations</h3>
                        <strong>Nom :</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "client"), "method"), "lastname", array()), "html", null, true);
        echo "<br>
                        <strong>Prénom :</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "client"), "method"), "firstname", array()), "html", null, true);
        echo "<br>
                        <strong>Date de naissance :</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "client"), "method"), "birthdate", array()), "d/m/Y"), "html", null, true);
        echo "<br>
                        <strong>Pays :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "client"), "method"), "country", array()), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d5a2007975dc9833b68b8f9bd55c1b0f7dbfb931c4b219b24d69bed7fa5f9094->leave($__internal_d5a2007975dc9833b68b8f9bd55c1b0f7dbfb931c4b219b24d69bed7fa5f9094_prof);

        
        $__internal_2c60db4174513a258d1ff64e71e25d9bb00725bc733fb56bf7bfe982e5a67e29->leave($__internal_2c60db4174513a258d1ff64e71e25d9bb00725bc733fb56bf7bfe982e5a67e29_prof);

    }

    public function getTemplateName()
    {
        return "Reservation/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  99 => 25,  95 => 24,  91 => 23,  85 => 20,  81 => 19,  76 => 17,  69 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"container\">
        <div id=\"reservation\">
            <div class=\"row\">
                <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>
                <div class=\"col-xs-12 col-sm-7\">
                    {% for message in app.session.flashbag.get('notice') %}
                        <p class=\"alert alert-success\">{{ message }}</p>
                    {% endfor %}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <h3>Votre réservation</h3>
                        <strong>Date de votre réservation : </strong> {{ app.session.get('reservation').date|date('d/m/Y') }}
                        <br>
                        <strong>Type de billet choisi : </strong> {{ app.session.get('reservation').type }}<br>
                        <strong>Nombre de billets : </strong> {{ app.session.get('reservation').ticketsNumber }}

                        <h3>Vos informations</h3>
                        <strong>Nom :</strong> {{ app.session.get('client').lastname }}<br>
                        <strong>Prénom :</strong> {{ app.session.get('client').firstname }}<br>
                        <strong>Date de naissance :</strong> {{ app.session.get('client').birthdate|date('d/m/Y') }}<br>
                        <strong>Pays :</strong> {{ app.session.get('client').country }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Reservation/payment.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/payment.html.twig");
    }
}
