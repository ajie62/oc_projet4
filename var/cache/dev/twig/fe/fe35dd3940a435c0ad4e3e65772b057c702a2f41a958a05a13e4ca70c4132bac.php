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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9bef96da35257be374ae0801adeda11c8707b6a7ef570e8fb07af5be03e9f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bef96da35257be374ae0801adeda11c8707b6a7ef570e8fb07af5be03e9f1f->enter($__internal_d9bef96da35257be374ae0801adeda11c8707b6a7ef570e8fb07af5be03e9f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Reservation:index.html.twig"));

        $__internal_a0382f774dac0648bde91eb4e2b4cd870cd3619e258d005f35edf825ca1c0d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0382f774dac0648bde91eb4e2b4cd870cd3619e258d005f35edf825ca1c0d0f->enter($__internal_a0382f774dac0648bde91eb4e2b4cd870cd3619e258d005f35edf825ca1c0d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9bef96da35257be374ae0801adeda11c8707b6a7ef570e8fb07af5be03e9f1f->leave($__internal_d9bef96da35257be374ae0801adeda11c8707b6a7ef570e8fb07af5be03e9f1f_prof);

        
        $__internal_a0382f774dac0648bde91eb4e2b4cd870cd3619e258d005f35edf825ca1c0d0f->leave($__internal_a0382f774dac0648bde91eb4e2b4cd870cd3619e258d005f35edf825ca1c0d0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_489fb1249a2b89fd10a874b0fc4252f95621a139920cac668abfef7a01eaf57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489fb1249a2b89fd10a874b0fc4252f95621a139920cac668abfef7a01eaf57a->enter($__internal_489fb1249a2b89fd10a874b0fc4252f95621a139920cac668abfef7a01eaf57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f665687c26bb9c610142184566c06587ab8aaff2270d85e3617a0019ede40343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f665687c26bb9c610142184566c06587ab8aaff2270d85e3617a0019ede40343->enter($__internal_f665687c26bb9c610142184566c06587ab8aaff2270d85e3617a0019ede40343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello World!";
        
        $__internal_f665687c26bb9c610142184566c06587ab8aaff2270d85e3617a0019ede40343->leave($__internal_f665687c26bb9c610142184566c06587ab8aaff2270d85e3617a0019ede40343_prof);

        
        $__internal_489fb1249a2b89fd10a874b0fc4252f95621a139920cac668abfef7a01eaf57a->leave($__internal_489fb1249a2b89fd10a874b0fc4252f95621a139920cac668abfef7a01eaf57a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_457bd0e861a59b1a12ae9c39a4b1eed0f7bbb93cd94306fcb2825ee0311121d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457bd0e861a59b1a12ae9c39a4b1eed0f7bbb93cd94306fcb2825ee0311121d3->enter($__internal_457bd0e861a59b1a12ae9c39a4b1eed0f7bbb93cd94306fcb2825ee0311121d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_739bd1c71208e14b21589fb7f25e0450a559fbeba0b44c7fc3cadb2b0162290d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739bd1c71208e14b21589fb7f25e0450a559fbeba0b44c7fc3cadb2b0162290d->enter($__internal_739bd1c71208e14b21589fb7f25e0450a559fbeba0b44c7fc3cadb2b0162290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                <div class=\"col-xs-12 col-sm-5\">
                    <div class=\"summary well\">
                        <p>Résumé de la réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_739bd1c71208e14b21589fb7f25e0450a559fbeba0b44c7fc3cadb2b0162290d->leave($__internal_739bd1c71208e14b21589fb7f25e0450a559fbeba0b44c7fc3cadb2b0162290d_prof);

        
        $__internal_457bd0e861a59b1a12ae9c39a4b1eed0f7bbb93cd94306fcb2825ee0311121d3->leave($__internal_457bd0e861a59b1a12ae9c39a4b1eed0f7bbb93cd94306fcb2825ee0311121d3_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2194ba0d45aa01e08d5de367a88b5f311d31fca1c608a3b496e01d110255c4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2194ba0d45aa01e08d5de367a88b5f311d31fca1c608a3b496e01d110255c4d7->enter($__internal_2194ba0d45aa01e08d5de367a88b5f311d31fca1c608a3b496e01d110255c4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74d06e69cb92a44aebdebcee617241153b215b55db1f078ed4d68f6e8e4f953c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d06e69cb92a44aebdebcee617241153b215b55db1f078ed4d68f6e8e4f953c->enter($__internal_74d06e69cb92a44aebdebcee617241153b215b55db1f078ed4d68f6e8e4f953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

    </script>
";
        
        $__internal_74d06e69cb92a44aebdebcee617241153b215b55db1f078ed4d68f6e8e4f953c->leave($__internal_74d06e69cb92a44aebdebcee617241153b215b55db1f078ed4d68f6e8e4f953c_prof);

        
        $__internal_2194ba0d45aa01e08d5de367a88b5f311d31fca1c608a3b496e01d110255c4d7->leave($__internal_2194ba0d45aa01e08d5de367a88b5f311d31fca1c608a3b496e01d110255c4d7_prof);

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
        return array (  109 => 27,  100 => 26,  78 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Hello World!{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"page-header\">Musée du Louvre<br><small>Réservation en ligne</small></h1>

        <div id=\"reservation\">
            <h3>Choisissez une date</h3>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    {{ form(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-5\">
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
{% endblock %}", ":Reservation:index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
