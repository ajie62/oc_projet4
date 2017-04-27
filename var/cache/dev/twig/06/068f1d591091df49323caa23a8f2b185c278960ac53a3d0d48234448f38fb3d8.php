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
        $__internal_fec78636829a6b3aa6a1482a8a5267f2c92914c886fa4e3eb0e799418addd322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec78636829a6b3aa6a1482a8a5267f2c92914c886fa4e3eb0e799418addd322->enter($__internal_fec78636829a6b3aa6a1482a8a5267f2c92914c886fa4e3eb0e799418addd322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/payment.html.twig"));

        $__internal_f87ee3a86e884bbff5c5282dedd7638ba0fb3ebd8e78c86541a06c1e572e5878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87ee3a86e884bbff5c5282dedd7638ba0fb3ebd8e78c86541a06c1e572e5878->enter($__internal_f87ee3a86e884bbff5c5282dedd7638ba0fb3ebd8e78c86541a06c1e572e5878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec78636829a6b3aa6a1482a8a5267f2c92914c886fa4e3eb0e799418addd322->leave($__internal_fec78636829a6b3aa6a1482a8a5267f2c92914c886fa4e3eb0e799418addd322_prof);

        
        $__internal_f87ee3a86e884bbff5c5282dedd7638ba0fb3ebd8e78c86541a06c1e572e5878->leave($__internal_f87ee3a86e884bbff5c5282dedd7638ba0fb3ebd8e78c86541a06c1e572e5878_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af84db51e58ece0cdfa947bb69ef8ac268b47cd8dae9995123f274c2454bc2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af84db51e58ece0cdfa947bb69ef8ac268b47cd8dae9995123f274c2454bc2b7->enter($__internal_af84db51e58ece0cdfa947bb69ef8ac268b47cd8dae9995123f274c2454bc2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_226993bfaa213b41a6829d3061178df1b624c1864ffc75780818bf9b29a3aa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226993bfaa213b41a6829d3061178df1b624c1864ffc75780818bf9b29a3aa11->enter($__internal_226993bfaa213b41a6829d3061178df1b624c1864ffc75780818bf9b29a3aa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_226993bfaa213b41a6829d3061178df1b624c1864ffc75780818bf9b29a3aa11->leave($__internal_226993bfaa213b41a6829d3061178df1b624c1864ffc75780818bf9b29a3aa11_prof);

        
        $__internal_af84db51e58ece0cdfa947bb69ef8ac268b47cd8dae9995123f274c2454bc2b7->leave($__internal_af84db51e58ece0cdfa947bb69ef8ac268b47cd8dae9995123f274c2454bc2b7_prof);

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
