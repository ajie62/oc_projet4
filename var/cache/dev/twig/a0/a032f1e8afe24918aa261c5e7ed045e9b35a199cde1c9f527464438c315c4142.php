<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_795c9c705c1870f4342472e991d300c6bf67720ee2cb586fe1efedbd4df232ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51037fc382871a49b39ecb83a1bd4bcc7d897a9dfce9019b418398d37ea0fb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51037fc382871a49b39ecb83a1bd4bcc7d897a9dfce9019b418398d37ea0fb4f->enter($__internal_51037fc382871a49b39ecb83a1bd4bcc7d897a9dfce9019b418398d37ea0fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_54ea8849f2edcfec75b068ec55968bd72c4debd6e7c48e428b058d1160cc2beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ea8849f2edcfec75b068ec55968bd72c4debd6e7c48e428b058d1160cc2beb->enter($__internal_54ea8849f2edcfec75b068ec55968bd72c4debd6e7c48e428b058d1160cc2beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51037fc382871a49b39ecb83a1bd4bcc7d897a9dfce9019b418398d37ea0fb4f->leave($__internal_51037fc382871a49b39ecb83a1bd4bcc7d897a9dfce9019b418398d37ea0fb4f_prof);

        
        $__internal_54ea8849f2edcfec75b068ec55968bd72c4debd6e7c48e428b058d1160cc2beb->leave($__internal_54ea8849f2edcfec75b068ec55968bd72c4debd6e7c48e428b058d1160cc2beb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c76f1fd03f402469da4157805f9c0c3fac6379363476c073e3074c51175d6aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76f1fd03f402469da4157805f9c0c3fac6379363476c073e3074c51175d6aac->enter($__internal_c76f1fd03f402469da4157805f9c0c3fac6379363476c073e3074c51175d6aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72a6676be9de39f2b7cdab3aee578f4c55f092bc5e93c7b4ea59d5ad08fd33f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a6676be9de39f2b7cdab3aee578f4c55f092bc5e93c7b4ea59d5ad08fd33f5->enter($__internal_72a6676be9de39f2b7cdab3aee578f4c55f092bc5e93c7b4ea59d5ad08fd33f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72a6676be9de39f2b7cdab3aee578f4c55f092bc5e93c7b4ea59d5ad08fd33f5->leave($__internal_72a6676be9de39f2b7cdab3aee578f4c55f092bc5e93c7b4ea59d5ad08fd33f5_prof);

        
        $__internal_c76f1fd03f402469da4157805f9c0c3fac6379363476c073e3074c51175d6aac->leave($__internal_c76f1fd03f402469da4157805f9c0c3fac6379363476c073e3074c51175d6aac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea80cc89ae7c0398d44e0eaf37ee6ffcc16ef908b19065fae2f97e6d7cec445f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea80cc89ae7c0398d44e0eaf37ee6ffcc16ef908b19065fae2f97e6d7cec445f->enter($__internal_ea80cc89ae7c0398d44e0eaf37ee6ffcc16ef908b19065fae2f97e6d7cec445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73f831902170f5c42e4ca38e4cf377b2bbab4627b0a04ed74b69b5b2363f3f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f831902170f5c42e4ca38e4cf377b2bbab4627b0a04ed74b69b5b2363f3f0c->enter($__internal_73f831902170f5c42e4ca38e4cf377b2bbab4627b0a04ed74b69b5b2363f3f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_73f831902170f5c42e4ca38e4cf377b2bbab4627b0a04ed74b69b5b2363f3f0c->leave($__internal_73f831902170f5c42e4ca38e4cf377b2bbab4627b0a04ed74b69b5b2363f3f0c_prof);

        
        $__internal_ea80cc89ae7c0398d44e0eaf37ee6ffcc16ef908b19065fae2f97e6d7cec445f->leave($__internal_ea80cc89ae7c0398d44e0eaf37ee6ffcc16ef908b19065fae2f97e6d7cec445f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
