<?php

/* ::base.html.twig */
class __TwigTemplate_3021766ed2225e3a68d444af94728eab5a7906b86a804f921320b2491d192a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6991f255c0f626877918c6f315226bf27685bf4220a7861844cfcfd8b44a0939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6991f255c0f626877918c6f315226bf27685bf4220a7861844cfcfd8b44a0939->enter($__internal_6991f255c0f626877918c6f315226bf27685bf4220a7861844cfcfd8b44a0939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f268b0e788b6168ddda2112875c1c178ef71c6c64f0d12e645d25797fd7fdaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f268b0e788b6168ddda2112875c1c178ef71c6c64f0d12e645d25797fd7fdaf9->enter($__internal_f268b0e788b6168ddda2112875c1c178ef71c6c64f0d12e645d25797fd7fdaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Jérôme Butel\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_6991f255c0f626877918c6f315226bf27685bf4220a7861844cfcfd8b44a0939->leave($__internal_6991f255c0f626877918c6f315226bf27685bf4220a7861844cfcfd8b44a0939_prof);

        
        $__internal_f268b0e788b6168ddda2112875c1c178ef71c6c64f0d12e645d25797fd7fdaf9->leave($__internal_f268b0e788b6168ddda2112875c1c178ef71c6c64f0d12e645d25797fd7fdaf9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6701dd6b533de2a6214f2a89672cc1f1cf48a03e4e62281393e8c732e33a3741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6701dd6b533de2a6214f2a89672cc1f1cf48a03e4e62281393e8c732e33a3741->enter($__internal_6701dd6b533de2a6214f2a89672cc1f1cf48a03e4e62281393e8c732e33a3741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68e15e4d23401abded33b4ee6da8a05c3762db55615de97876cb189f9c8d9027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e15e4d23401abded33b4ee6da8a05c3762db55615de97876cb189f9c8d9027->enter($__internal_68e15e4d23401abded33b4ee6da8a05c3762db55615de97876cb189f9c8d9027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68e15e4d23401abded33b4ee6da8a05c3762db55615de97876cb189f9c8d9027->leave($__internal_68e15e4d23401abded33b4ee6da8a05c3762db55615de97876cb189f9c8d9027_prof);

        
        $__internal_6701dd6b533de2a6214f2a89672cc1f1cf48a03e4e62281393e8c732e33a3741->leave($__internal_6701dd6b533de2a6214f2a89672cc1f1cf48a03e4e62281393e8c732e33a3741_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de38231a660bab1173928f825134de175ee3db852c14ffc13488472857119587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de38231a660bab1173928f825134de175ee3db852c14ffc13488472857119587->enter($__internal_de38231a660bab1173928f825134de175ee3db852c14ffc13488472857119587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5e5369da883ac89d60243a8f4b8829f2726512d7b9d5f71c46cf0825ca764158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5369da883ac89d60243a8f4b8829f2726512d7b9d5f71c46cf0825ca764158->enter($__internal_5e5369da883ac89d60243a8f4b8829f2726512d7b9d5f71c46cf0825ca764158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/jquery-ui.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_5e5369da883ac89d60243a8f4b8829f2726512d7b9d5f71c46cf0825ca764158->leave($__internal_5e5369da883ac89d60243a8f4b8829f2726512d7b9d5f71c46cf0825ca764158_prof);

        
        $__internal_de38231a660bab1173928f825134de175ee3db852c14ffc13488472857119587->leave($__internal_de38231a660bab1173928f825134de175ee3db852c14ffc13488472857119587_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7fcb8923da13b5b558ec9c032cda97c3dcea5111e7d68cc1f60373978da261b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fcb8923da13b5b558ec9c032cda97c3dcea5111e7d68cc1f60373978da261b->enter($__internal_d7fcb8923da13b5b558ec9c032cda97c3dcea5111e7d68cc1f60373978da261b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78df9013d9d08eb9ac13c6f5d4d32b94e67bb47d3e09f18d754e0c3ba55762b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78df9013d9d08eb9ac13c6f5d4d32b94e67bb47d3e09f18d754e0c3ba55762b6->enter($__internal_78df9013d9d08eb9ac13c6f5d4d32b94e67bb47d3e09f18d754e0c3ba55762b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78df9013d9d08eb9ac13c6f5d4d32b94e67bb47d3e09f18d754e0c3ba55762b6->leave($__internal_78df9013d9d08eb9ac13c6f5d4d32b94e67bb47d3e09f18d754e0c3ba55762b6_prof);

        
        $__internal_d7fcb8923da13b5b558ec9c032cda97c3dcea5111e7d68cc1f60373978da261b->leave($__internal_d7fcb8923da13b5b558ec9c032cda97c3dcea5111e7d68cc1f60373978da261b_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6df23b8b13947abbc7c655410d4c4558e3609607322fe7afafc92584bfffc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6df23b8b13947abbc7c655410d4c4558e3609607322fe7afafc92584bfffc27->enter($__internal_b6df23b8b13947abbc7c655410d4c4558e3609607322fe7afafc92584bfffc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14c19b0e98be1481eb99a3aff245e1ff65506af9ce1f2ed0f62657b030d0999c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c19b0e98be1481eb99a3aff245e1ff65506af9ce1f2ed0f62657b030d0999c->enter($__internal_14c19b0e98be1481eb99a3aff245e1ff65506af9ce1f2ed0f62657b030d0999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_14c19b0e98be1481eb99a3aff245e1ff65506af9ce1f2ed0f62657b030d0999c->leave($__internal_14c19b0e98be1481eb99a3aff245e1ff65506af9ce1f2ed0f62657b030d0999c_prof);

        
        $__internal_b6df23b8b13947abbc7c655410d4c4558e3609607322fe7afafc92584bfffc27->leave($__internal_b6df23b8b13947abbc7c655410d4c4558e3609607322fe7afafc92584bfffc27_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 22,  145 => 21,  142 => 20,  133 => 19,  116 => 18,  104 => 11,  100 => 10,  97 => 9,  88 => 8,  70 => 7,  58 => 24,  55 => 19,  53 => 18,  47 => 15,  43 => 13,  41 => 8,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/css/jquery-ui.min.css\") }}\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/css/style.css\") }}\">
        {% endblock %}
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Jérôme Butel\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"{{ asset(\"bundles/js/jquery-ui.min.js\") }}\"></script>
            <script src=\"{{ asset(\"bundles/js/main.js\") }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/base.html.twig");
    }
}
