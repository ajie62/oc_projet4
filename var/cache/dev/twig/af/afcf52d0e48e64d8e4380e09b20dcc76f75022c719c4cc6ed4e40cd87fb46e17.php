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
        $__internal_8d856e6a8d8ce7f07b2504702abf10c8462a2512c9302049acbf46d337adbe9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d856e6a8d8ce7f07b2504702abf10c8462a2512c9302049acbf46d337adbe9a->enter($__internal_8d856e6a8d8ce7f07b2504702abf10c8462a2512c9302049acbf46d337adbe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4ef1308a59c2373e899faeb6fb84715dc41fa1bcfb46edc87332701c03fee282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef1308a59c2373e899faeb6fb84715dc41fa1bcfb46edc87332701c03fee282->enter($__internal_4ef1308a59c2373e899faeb6fb84715dc41fa1bcfb46edc87332701c03fee282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8d856e6a8d8ce7f07b2504702abf10c8462a2512c9302049acbf46d337adbe9a->leave($__internal_8d856e6a8d8ce7f07b2504702abf10c8462a2512c9302049acbf46d337adbe9a_prof);

        
        $__internal_4ef1308a59c2373e899faeb6fb84715dc41fa1bcfb46edc87332701c03fee282->leave($__internal_4ef1308a59c2373e899faeb6fb84715dc41fa1bcfb46edc87332701c03fee282_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99214628721113130944c5b6e489c03987a8cf3f5af58cc6ba8ddfe54801f83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99214628721113130944c5b6e489c03987a8cf3f5af58cc6ba8ddfe54801f83d->enter($__internal_99214628721113130944c5b6e489c03987a8cf3f5af58cc6ba8ddfe54801f83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_411f928c29c6db706c9925c2e9593c3298d18866f17324e50b74617d84e15954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411f928c29c6db706c9925c2e9593c3298d18866f17324e50b74617d84e15954->enter($__internal_411f928c29c6db706c9925c2e9593c3298d18866f17324e50b74617d84e15954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_411f928c29c6db706c9925c2e9593c3298d18866f17324e50b74617d84e15954->leave($__internal_411f928c29c6db706c9925c2e9593c3298d18866f17324e50b74617d84e15954_prof);

        
        $__internal_99214628721113130944c5b6e489c03987a8cf3f5af58cc6ba8ddfe54801f83d->leave($__internal_99214628721113130944c5b6e489c03987a8cf3f5af58cc6ba8ddfe54801f83d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5070362501bdee63ffa8c94ce6338f80687dded2556c242b4bffce38bdf02c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5070362501bdee63ffa8c94ce6338f80687dded2556c242b4bffce38bdf02c27->enter($__internal_5070362501bdee63ffa8c94ce6338f80687dded2556c242b4bffce38bdf02c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e222ff11490fd91b80a91b8899978eb3314af8282c72dba5d30dd8f7e7ad6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e222ff11490fd91b80a91b8899978eb3314af8282c72dba5d30dd8f7e7ad6df->enter($__internal_3e222ff11490fd91b80a91b8899978eb3314af8282c72dba5d30dd8f7e7ad6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3e222ff11490fd91b80a91b8899978eb3314af8282c72dba5d30dd8f7e7ad6df->leave($__internal_3e222ff11490fd91b80a91b8899978eb3314af8282c72dba5d30dd8f7e7ad6df_prof);

        
        $__internal_5070362501bdee63ffa8c94ce6338f80687dded2556c242b4bffce38bdf02c27->leave($__internal_5070362501bdee63ffa8c94ce6338f80687dded2556c242b4bffce38bdf02c27_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb558772ca39c0ef0adbf69c424ac9c73ace37d908cd89fe0451fea25e18a196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb558772ca39c0ef0adbf69c424ac9c73ace37d908cd89fe0451fea25e18a196->enter($__internal_fb558772ca39c0ef0adbf69c424ac9c73ace37d908cd89fe0451fea25e18a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_790112f29d415241423e19a4610f9e6648ff6363e3f94b8a12c5317293209b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790112f29d415241423e19a4610f9e6648ff6363e3f94b8a12c5317293209b4a->enter($__internal_790112f29d415241423e19a4610f9e6648ff6363e3f94b8a12c5317293209b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_790112f29d415241423e19a4610f9e6648ff6363e3f94b8a12c5317293209b4a->leave($__internal_790112f29d415241423e19a4610f9e6648ff6363e3f94b8a12c5317293209b4a_prof);

        
        $__internal_fb558772ca39c0ef0adbf69c424ac9c73ace37d908cd89fe0451fea25e18a196->leave($__internal_fb558772ca39c0ef0adbf69c424ac9c73ace37d908cd89fe0451fea25e18a196_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_278e798d00120f81cc8625a32430d59a37c21beda37e7cda2373cc1a73255a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278e798d00120f81cc8625a32430d59a37c21beda37e7cda2373cc1a73255a99->enter($__internal_278e798d00120f81cc8625a32430d59a37c21beda37e7cda2373cc1a73255a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a8d6c608f0342209d2aeae34c21855b82f9f466a6f670287919258c3551964de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6c608f0342209d2aeae34c21855b82f9f466a6f670287919258c3551964de->enter($__internal_a8d6c608f0342209d2aeae34c21855b82f9f466a6f670287919258c3551964de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a8d6c608f0342209d2aeae34c21855b82f9f466a6f670287919258c3551964de->leave($__internal_a8d6c608f0342209d2aeae34c21855b82f9f466a6f670287919258c3551964de_prof);

        
        $__internal_278e798d00120f81cc8625a32430d59a37c21beda37e7cda2373cc1a73255a99->leave($__internal_278e798d00120f81cc8625a32430d59a37c21beda37e7cda2373cc1a73255a99_prof);

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
