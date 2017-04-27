<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
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
        $__internal_f33fe5921b5091774e8dc43e0ae6e34758b85d10039b0132d46b767729ed197c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33fe5921b5091774e8dc43e0ae6e34758b85d10039b0132d46b767729ed197c->enter($__internal_f33fe5921b5091774e8dc43e0ae6e34758b85d10039b0132d46b767729ed197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_43dac33d203ecb2f9482d8d022fe198f8cca64106e04b11f92f88ab1f22b949f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dac33d203ecb2f9482d8d022fe198f8cca64106e04b11f92f88ab1f22b949f->enter($__internal_43dac33d203ecb2f9482d8d022fe198f8cca64106e04b11f92f88ab1f22b949f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f33fe5921b5091774e8dc43e0ae6e34758b85d10039b0132d46b767729ed197c->leave($__internal_f33fe5921b5091774e8dc43e0ae6e34758b85d10039b0132d46b767729ed197c_prof);

        
        $__internal_43dac33d203ecb2f9482d8d022fe198f8cca64106e04b11f92f88ab1f22b949f->leave($__internal_43dac33d203ecb2f9482d8d022fe198f8cca64106e04b11f92f88ab1f22b949f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bdc9192eb266b753ad456ee1bd67ee35bc06eaba0759d68474834d7379e2a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdc9192eb266b753ad456ee1bd67ee35bc06eaba0759d68474834d7379e2a93->enter($__internal_3bdc9192eb266b753ad456ee1bd67ee35bc06eaba0759d68474834d7379e2a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc8d6cdc1451370b08f0beaeaf2377bee03f81c3d9b27f44f470a14be7c99236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8d6cdc1451370b08f0beaeaf2377bee03f81c3d9b27f44f470a14be7c99236->enter($__internal_dc8d6cdc1451370b08f0beaeaf2377bee03f81c3d9b27f44f470a14be7c99236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dc8d6cdc1451370b08f0beaeaf2377bee03f81c3d9b27f44f470a14be7c99236->leave($__internal_dc8d6cdc1451370b08f0beaeaf2377bee03f81c3d9b27f44f470a14be7c99236_prof);

        
        $__internal_3bdc9192eb266b753ad456ee1bd67ee35bc06eaba0759d68474834d7379e2a93->leave($__internal_3bdc9192eb266b753ad456ee1bd67ee35bc06eaba0759d68474834d7379e2a93_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b00abe073f3bbd6c1d3db8be6e1361917c35ba6ed2f751aeea712ff34e653840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00abe073f3bbd6c1d3db8be6e1361917c35ba6ed2f751aeea712ff34e653840->enter($__internal_b00abe073f3bbd6c1d3db8be6e1361917c35ba6ed2f751aeea712ff34e653840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_861a0853171180fe5f780a5c15ecb1c9c112aa57aeb339339debd480cb8fa20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861a0853171180fe5f780a5c15ecb1c9c112aa57aeb339339debd480cb8fa20a->enter($__internal_861a0853171180fe5f780a5c15ecb1c9c112aa57aeb339339debd480cb8fa20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_861a0853171180fe5f780a5c15ecb1c9c112aa57aeb339339debd480cb8fa20a->leave($__internal_861a0853171180fe5f780a5c15ecb1c9c112aa57aeb339339debd480cb8fa20a_prof);

        
        $__internal_b00abe073f3bbd6c1d3db8be6e1361917c35ba6ed2f751aeea712ff34e653840->leave($__internal_b00abe073f3bbd6c1d3db8be6e1361917c35ba6ed2f751aeea712ff34e653840_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea2cf27de207600c2d5b2521cf9dae4604e78c0633039aafa3d3cc9c3223109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea2cf27de207600c2d5b2521cf9dae4604e78c0633039aafa3d3cc9c3223109->enter($__internal_0ea2cf27de207600c2d5b2521cf9dae4604e78c0633039aafa3d3cc9c3223109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23055a51102fe54f322d6cf291ab084cf11f9b958da7a8f6cf85b1f21dcf8dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23055a51102fe54f322d6cf291ab084cf11f9b958da7a8f6cf85b1f21dcf8dc0->enter($__internal_23055a51102fe54f322d6cf291ab084cf11f9b958da7a8f6cf85b1f21dcf8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23055a51102fe54f322d6cf291ab084cf11f9b958da7a8f6cf85b1f21dcf8dc0->leave($__internal_23055a51102fe54f322d6cf291ab084cf11f9b958da7a8f6cf85b1f21dcf8dc0_prof);

        
        $__internal_0ea2cf27de207600c2d5b2521cf9dae4604e78c0633039aafa3d3cc9c3223109->leave($__internal_0ea2cf27de207600c2d5b2521cf9dae4604e78c0633039aafa3d3cc9c3223109_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8726389c1667ac909e45964d5885d35660a152cd225c960ac7800442c72f61c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8726389c1667ac909e45964d5885d35660a152cd225c960ac7800442c72f61c5->enter($__internal_8726389c1667ac909e45964d5885d35660a152cd225c960ac7800442c72f61c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9282fe94ee40627fd888c1f3896e290ce88f76f12e22e6e27a41f41dc8f1d31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9282fe94ee40627fd888c1f3896e290ce88f76f12e22e6e27a41f41dc8f1d31f->enter($__internal_9282fe94ee40627fd888c1f3896e290ce88f76f12e22e6e27a41f41dc8f1d31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9282fe94ee40627fd888c1f3896e290ce88f76f12e22e6e27a41f41dc8f1d31f->leave($__internal_9282fe94ee40627fd888c1f3896e290ce88f76f12e22e6e27a41f41dc8f1d31f_prof);

        
        $__internal_8726389c1667ac909e45964d5885d35660a152cd225c960ac7800442c72f61c5->leave($__internal_8726389c1667ac909e45964d5885d35660a152cd225c960ac7800442c72f61c5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Users/Jerome/Documents/www/oc_projet4/app/Resources/views/base.html.twig");
    }
}
