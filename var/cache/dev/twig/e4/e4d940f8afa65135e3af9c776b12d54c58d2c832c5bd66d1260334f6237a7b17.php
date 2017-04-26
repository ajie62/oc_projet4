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
        $__internal_7f9096b731d36677f23ec14f1500d31bbba8fd9b9a2b49d9e9b7a7b468a55e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9096b731d36677f23ec14f1500d31bbba8fd9b9a2b49d9e9b7a7b468a55e5d->enter($__internal_7f9096b731d36677f23ec14f1500d31bbba8fd9b9a2b49d9e9b7a7b468a55e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7c8bac2e27aa6507b785313f9428214512df744d0170167a817b9892ff18d18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8bac2e27aa6507b785313f9428214512df744d0170167a817b9892ff18d18b->enter($__internal_7c8bac2e27aa6507b785313f9428214512df744d0170167a817b9892ff18d18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7f9096b731d36677f23ec14f1500d31bbba8fd9b9a2b49d9e9b7a7b468a55e5d->leave($__internal_7f9096b731d36677f23ec14f1500d31bbba8fd9b9a2b49d9e9b7a7b468a55e5d_prof);

        
        $__internal_7c8bac2e27aa6507b785313f9428214512df744d0170167a817b9892ff18d18b->leave($__internal_7c8bac2e27aa6507b785313f9428214512df744d0170167a817b9892ff18d18b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e858b92b45dbffe1b6a697e9214e7719961f00dd720e38c147379624ea5dcbe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e858b92b45dbffe1b6a697e9214e7719961f00dd720e38c147379624ea5dcbe1->enter($__internal_e858b92b45dbffe1b6a697e9214e7719961f00dd720e38c147379624ea5dcbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a6bd8e031615206b897910c7f7c204caa8687e4b032909344a6a2a92550b060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6bd8e031615206b897910c7f7c204caa8687e4b032909344a6a2a92550b060->enter($__internal_8a6bd8e031615206b897910c7f7c204caa8687e4b032909344a6a2a92550b060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a6bd8e031615206b897910c7f7c204caa8687e4b032909344a6a2a92550b060->leave($__internal_8a6bd8e031615206b897910c7f7c204caa8687e4b032909344a6a2a92550b060_prof);

        
        $__internal_e858b92b45dbffe1b6a697e9214e7719961f00dd720e38c147379624ea5dcbe1->leave($__internal_e858b92b45dbffe1b6a697e9214e7719961f00dd720e38c147379624ea5dcbe1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38304b2a053b669a44163ae608800228aa814beefe2c95a6844fb1dbd9b7d318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38304b2a053b669a44163ae608800228aa814beefe2c95a6844fb1dbd9b7d318->enter($__internal_38304b2a053b669a44163ae608800228aa814beefe2c95a6844fb1dbd9b7d318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5b9e5569dad2e02fc7c26e5416990db9ffe68b47f09376b7d1697c3b4956180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b9e5569dad2e02fc7c26e5416990db9ffe68b47f09376b7d1697c3b4956180->enter($__internal_a5b9e5569dad2e02fc7c26e5416990db9ffe68b47f09376b7d1697c3b4956180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a5b9e5569dad2e02fc7c26e5416990db9ffe68b47f09376b7d1697c3b4956180->leave($__internal_a5b9e5569dad2e02fc7c26e5416990db9ffe68b47f09376b7d1697c3b4956180_prof);

        
        $__internal_38304b2a053b669a44163ae608800228aa814beefe2c95a6844fb1dbd9b7d318->leave($__internal_38304b2a053b669a44163ae608800228aa814beefe2c95a6844fb1dbd9b7d318_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_185500b941f83f07e4aeed290220393ae5a5795d18668a32e4eada8daa6bbbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185500b941f83f07e4aeed290220393ae5a5795d18668a32e4eada8daa6bbbe0->enter($__internal_185500b941f83f07e4aeed290220393ae5a5795d18668a32e4eada8daa6bbbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63e112d1cfdeba4ef8ebc408aec31e8ad8ea43a519ee714e5fc1b8e3725f6efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e112d1cfdeba4ef8ebc408aec31e8ad8ea43a519ee714e5fc1b8e3725f6efe->enter($__internal_63e112d1cfdeba4ef8ebc408aec31e8ad8ea43a519ee714e5fc1b8e3725f6efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63e112d1cfdeba4ef8ebc408aec31e8ad8ea43a519ee714e5fc1b8e3725f6efe->leave($__internal_63e112d1cfdeba4ef8ebc408aec31e8ad8ea43a519ee714e5fc1b8e3725f6efe_prof);

        
        $__internal_185500b941f83f07e4aeed290220393ae5a5795d18668a32e4eada8daa6bbbe0->leave($__internal_185500b941f83f07e4aeed290220393ae5a5795d18668a32e4eada8daa6bbbe0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2976174b6e87e6118de5d126fc735822ee822e39c17852dae3d02ca455546651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2976174b6e87e6118de5d126fc735822ee822e39c17852dae3d02ca455546651->enter($__internal_2976174b6e87e6118de5d126fc735822ee822e39c17852dae3d02ca455546651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f35a55718e8feaaf43b2d61e0d8d2a5fb54abff35bf4237dfc257e8564a4db76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35a55718e8feaaf43b2d61e0d8d2a5fb54abff35bf4237dfc257e8564a4db76->enter($__internal_f35a55718e8feaaf43b2d61e0d8d2a5fb54abff35bf4237dfc257e8564a4db76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f35a55718e8feaaf43b2d61e0d8d2a5fb54abff35bf4237dfc257e8564a4db76->leave($__internal_f35a55718e8feaaf43b2d61e0d8d2a5fb54abff35bf4237dfc257e8564a4db76_prof);

        
        $__internal_2976174b6e87e6118de5d126fc735822ee822e39c17852dae3d02ca455546651->leave($__internal_2976174b6e87e6118de5d126fc735822ee822e39c17852dae3d02ca455546651_prof);

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
