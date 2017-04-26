<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3c5d69d4a9370a75e543e5862f9330c2b1ff6814c9c74787456a0eefe1d053ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103a2b860749b2cb9d206edb92ca6cfc41f1911c6897d740e2cb9079fd730bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103a2b860749b2cb9d206edb92ca6cfc41f1911c6897d740e2cb9079fd730bea->enter($__internal_103a2b860749b2cb9d206edb92ca6cfc41f1911c6897d740e2cb9079fd730bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_7b59c21c2fc3cbcb1099b7606959b404b3b07581fbd667a9fb433cdf6ccfee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b59c21c2fc3cbcb1099b7606959b404b3b07581fbd667a9fb433cdf6ccfee06->enter($__internal_7b59c21c2fc3cbcb1099b7606959b404b3b07581fbd667a9fb433cdf6ccfee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_103a2b860749b2cb9d206edb92ca6cfc41f1911c6897d740e2cb9079fd730bea->leave($__internal_103a2b860749b2cb9d206edb92ca6cfc41f1911c6897d740e2cb9079fd730bea_prof);

        
        $__internal_7b59c21c2fc3cbcb1099b7606959b404b3b07581fbd667a9fb433cdf6ccfee06->leave($__internal_7b59c21c2fc3cbcb1099b7606959b404b3b07581fbd667a9fb433cdf6ccfee06_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
