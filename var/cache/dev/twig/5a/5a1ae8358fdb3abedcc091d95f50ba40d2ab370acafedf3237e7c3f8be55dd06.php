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
        $__internal_b8f1cf6b84e44a0c9185c49c57f899fb60c1fb2dcadb071b3f080b002f1fa91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f1cf6b84e44a0c9185c49c57f899fb60c1fb2dcadb071b3f080b002f1fa91c->enter($__internal_b8f1cf6b84e44a0c9185c49c57f899fb60c1fb2dcadb071b3f080b002f1fa91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/information.html.twig"));

        $__internal_d3af8a461b627f0757dce206a5f2097aa212bbe0d92291db6fa1afadb17359eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3af8a461b627f0757dce206a5f2097aa212bbe0d92291db6fa1afadb17359eb->enter($__internal_d3af8a461b627f0757dce206a5f2097aa212bbe0d92291db6fa1afadb17359eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f1cf6b84e44a0c9185c49c57f899fb60c1fb2dcadb071b3f080b002f1fa91c->leave($__internal_b8f1cf6b84e44a0c9185c49c57f899fb60c1fb2dcadb071b3f080b002f1fa91c_prof);

        
        $__internal_d3af8a461b627f0757dce206a5f2097aa212bbe0d92291db6fa1afadb17359eb->leave($__internal_d3af8a461b627f0757dce206a5f2097aa212bbe0d92291db6fa1afadb17359eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd86d1f44041716f1659f5e42bdfe7393952844772b74ed200f809e81d61a6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd86d1f44041716f1659f5e42bdfe7393952844772b74ed200f809e81d61a6cc->enter($__internal_bd86d1f44041716f1659f5e42bdfe7393952844772b74ed200f809e81d61a6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b614a0d637545ff7de3a59570aa1dbf003e73c31bed1c8185502f1a35909573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b614a0d637545ff7de3a59570aa1dbf003e73c31bed1c8185502f1a35909573->enter($__internal_6b614a0d637545ff7de3a59570aa1dbf003e73c31bed1c8185502f1a35909573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Vos informations";
        
        $__internal_6b614a0d637545ff7de3a59570aa1dbf003e73c31bed1c8185502f1a35909573->leave($__internal_6b614a0d637545ff7de3a59570aa1dbf003e73c31bed1c8185502f1a35909573_prof);

        
        $__internal_bd86d1f44041716f1659f5e42bdfe7393952844772b74ed200f809e81d61a6cc->leave($__internal_bd86d1f44041716f1659f5e42bdfe7393952844772b74ed200f809e81d61a6cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f330024423422a2389cfe1a0617485509617b0b878ee23e259b9ec8ff7c322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f330024423422a2389cfe1a0617485509617b0b878ee23e259b9ec8ff7c322->enter($__internal_65f330024423422a2389cfe1a0617485509617b0b878ee23e259b9ec8ff7c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_457a7541d9476a436ee933c49d43441aa637e3eceaea265f2d86e1d9a2c2e412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457a7541d9476a436ee933c49d43441aa637e3eceaea265f2d86e1d9a2c2e412->enter($__internal_457a7541d9476a436ee933c49d43441aa637e3eceaea265f2d86e1d9a2c2e412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_457a7541d9476a436ee933c49d43441aa637e3eceaea265f2d86e1d9a2c2e412->leave($__internal_457a7541d9476a436ee933c49d43441aa637e3eceaea265f2d86e1d9a2c2e412_prof);

        
        $__internal_65f330024423422a2389cfe1a0617485509617b0b878ee23e259b9ec8ff7c322->leave($__internal_65f330024423422a2389cfe1a0617485509617b0b878ee23e259b9ec8ff7c322_prof);

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
