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
        $__internal_470b748306d50bc823ac8ac2c82e68c6d25698e81bfd841eafb6874210d5e6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470b748306d50bc823ac8ac2c82e68c6d25698e81bfd841eafb6874210d5e6f6->enter($__internal_470b748306d50bc823ac8ac2c82e68c6d25698e81bfd841eafb6874210d5e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_477483ebab8f083db28393a54b414abcafcfaf7cee625d315d2402ee411d8d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477483ebab8f083db28393a54b414abcafcfaf7cee625d315d2402ee411d8d67->enter($__internal_477483ebab8f083db28393a54b414abcafcfaf7cee625d315d2402ee411d8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470b748306d50bc823ac8ac2c82e68c6d25698e81bfd841eafb6874210d5e6f6->leave($__internal_470b748306d50bc823ac8ac2c82e68c6d25698e81bfd841eafb6874210d5e6f6_prof);

        
        $__internal_477483ebab8f083db28393a54b414abcafcfaf7cee625d315d2402ee411d8d67->leave($__internal_477483ebab8f083db28393a54b414abcafcfaf7cee625d315d2402ee411d8d67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf63a8fcca5c2b3bc794e77fe8156250af97bb45b2acb982acfa8a977bd84a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf63a8fcca5c2b3bc794e77fe8156250af97bb45b2acb982acfa8a977bd84a39->enter($__internal_bf63a8fcca5c2b3bc794e77fe8156250af97bb45b2acb982acfa8a977bd84a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2936b3d3844ceba56a42d4d32858330520bcc1e2a0113558e7eb9e070ec590e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2936b3d3844ceba56a42d4d32858330520bcc1e2a0113558e7eb9e070ec590e5->enter($__internal_2936b3d3844ceba56a42d4d32858330520bcc1e2a0113558e7eb9e070ec590e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2936b3d3844ceba56a42d4d32858330520bcc1e2a0113558e7eb9e070ec590e5->leave($__internal_2936b3d3844ceba56a42d4d32858330520bcc1e2a0113558e7eb9e070ec590e5_prof);

        
        $__internal_bf63a8fcca5c2b3bc794e77fe8156250af97bb45b2acb982acfa8a977bd84a39->leave($__internal_bf63a8fcca5c2b3bc794e77fe8156250af97bb45b2acb982acfa8a977bd84a39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e62f524a3c23dea745e94724c304fabacab7150510db8a12c77f2e773f9395e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62f524a3c23dea745e94724c304fabacab7150510db8a12c77f2e773f9395e3->enter($__internal_e62f524a3c23dea745e94724c304fabacab7150510db8a12c77f2e773f9395e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_524c6a4594361ca43ab69bb616d0fb243c04858b3663d87ebb782fd37c6a203b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524c6a4594361ca43ab69bb616d0fb243c04858b3663d87ebb782fd37c6a203b->enter($__internal_524c6a4594361ca43ab69bb616d0fb243c04858b3663d87ebb782fd37c6a203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_524c6a4594361ca43ab69bb616d0fb243c04858b3663d87ebb782fd37c6a203b->leave($__internal_524c6a4594361ca43ab69bb616d0fb243c04858b3663d87ebb782fd37c6a203b_prof);

        
        $__internal_e62f524a3c23dea745e94724c304fabacab7150510db8a12c77f2e773f9395e3->leave($__internal_e62f524a3c23dea745e94724c304fabacab7150510db8a12c77f2e773f9395e3_prof);

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
