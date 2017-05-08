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
        $__internal_95c6e30bc0ff51168272bd0c4af67e57b48d2d6ae21a5095ce733fb5cf253047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c6e30bc0ff51168272bd0c4af67e57b48d2d6ae21a5095ce733fb5cf253047->enter($__internal_95c6e30bc0ff51168272bd0c4af67e57b48d2d6ae21a5095ce733fb5cf253047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $__internal_c66a5eb9c8a2f23c34d0b62f857bfa5fee5db11a0100267f05a2113b44384aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66a5eb9c8a2f23c34d0b62f857bfa5fee5db11a0100267f05a2113b44384aec->enter($__internal_c66a5eb9c8a2f23c34d0b62f857bfa5fee5db11a0100267f05a2113b44384aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c6e30bc0ff51168272bd0c4af67e57b48d2d6ae21a5095ce733fb5cf253047->leave($__internal_95c6e30bc0ff51168272bd0c4af67e57b48d2d6ae21a5095ce733fb5cf253047_prof);

        
        $__internal_c66a5eb9c8a2f23c34d0b62f857bfa5fee5db11a0100267f05a2113b44384aec->leave($__internal_c66a5eb9c8a2f23c34d0b62f857bfa5fee5db11a0100267f05a2113b44384aec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49b57c98e0409eb1edbaa55d4d170fe4184d935e60b1a9db8c5d9a0eae7d182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49b57c98e0409eb1edbaa55d4d170fe4184d935e60b1a9db8c5d9a0eae7d182->enter($__internal_f49b57c98e0409eb1edbaa55d4d170fe4184d935e60b1a9db8c5d9a0eae7d182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43324b1b31ea9ab15817061da7875c3dfa15f6270883c9dcb415f473f7ce1c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43324b1b31ea9ab15817061da7875c3dfa15f6270883c9dcb415f473f7ce1c56->enter($__internal_43324b1b31ea9ab15817061da7875c3dfa15f6270883c9dcb415f473f7ce1c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_43324b1b31ea9ab15817061da7875c3dfa15f6270883c9dcb415f473f7ce1c56->leave($__internal_43324b1b31ea9ab15817061da7875c3dfa15f6270883c9dcb415f473f7ce1c56_prof);

        
        $__internal_f49b57c98e0409eb1edbaa55d4d170fe4184d935e60b1a9db8c5d9a0eae7d182->leave($__internal_f49b57c98e0409eb1edbaa55d4d170fe4184d935e60b1a9db8c5d9a0eae7d182_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8178e6264ff0b446c1d48cf363eb5d831dee922df800ef62df14c6f0db4c8210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8178e6264ff0b446c1d48cf363eb5d831dee922df800ef62df14c6f0db4c8210->enter($__internal_8178e6264ff0b446c1d48cf363eb5d831dee922df800ef62df14c6f0db4c8210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7ddee6d16ccf817881deca36e80d04e1d5e47173515dfb4dc451cfc38723370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ddee6d16ccf817881deca36e80d04e1d5e47173515dfb4dc451cfc38723370->enter($__internal_b7ddee6d16ccf817881deca36e80d04e1d5e47173515dfb4dc451cfc38723370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <div class=\"alert alert-info tarifs-container\">
            <h3>Tarifs</h3>
            <ul>
                <li>12 &euro; à partir de 12 ans (tarif &laquo; normal &raquo;)</li>
                <li>8 &euro; à partir de 4 ans et jusqu'à 12 ans (tarif &laquo; enfant &raquo;, entrée gratuite pour les moins de 4 ans)</li>
                <li>12 &euro; à partir de 60 ans (tarif &laquo; senior &raquo;)</li>
                <li>10 &euro; dans certaines conditions (tarif &laquo; réduit &raquo; pour étudiants, employés de musée, service du Ministère de la Culture, militaires, ...)</li>
            </ul>
        </div>

        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <p>Aucune données entrées pour le moment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b7ddee6d16ccf817881deca36e80d04e1d5e47173515dfb4dc451cfc38723370->leave($__internal_b7ddee6d16ccf817881deca36e80d04e1d5e47173515dfb4dc451cfc38723370_prof);

        
        $__internal_8178e6264ff0b446c1d48cf363eb5d831dee922df800ef62df14c6f0db4c8210->leave($__internal_8178e6264ff0b446c1d48cf363eb5d831dee922df800ef62df14c6f0db4c8210_prof);

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
        return array (  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

        <div class=\"alert alert-info tarifs-container\">
            <h3>Tarifs</h3>
            <ul>
                <li>12 &euro; à partir de 12 ans (tarif &laquo; normal &raquo;)</li>
                <li>8 &euro; à partir de 4 ans et jusqu'à 12 ans (tarif &laquo; enfant &raquo;, entrée gratuite pour les moins de 4 ans)</li>
                <li>12 &euro; à partir de 60 ans (tarif &laquo; senior &raquo;)</li>
                <li>10 &euro; dans certaines conditions (tarif &laquo; réduit &raquo; pour étudiants, employés de musée, service du Ministère de la Culture, militaires, ...)</li>
            </ul>
        </div>

        <div id=\"reservation\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    {{ form(form) }}
                </div>

                <div class=\"col-xs-12 col-sm-offset-1 col-sm-4\">
                    <div class=\"summary well\">
                        <p>Aucune données entrées pour le moment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Reservation/index.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/Reservation/index.html.twig");
    }
}
