<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a739ed59a49b8145e5a2e5a134c716310c62da81119a893674c6a32fad88f560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80dfff143cf3e8edd38de3906161eb37174d3bf51a978851c98e4f5d52712dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dfff143cf3e8edd38de3906161eb37174d3bf51a978851c98e4f5d52712dbc->enter($__internal_80dfff143cf3e8edd38de3906161eb37174d3bf51a978851c98e4f5d52712dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_eac43b0a573ab0bde72c8a4d72e3e1fb634f213cff7152b5d0fcbb10530e7df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac43b0a573ab0bde72c8a4d72e3e1fb634f213cff7152b5d0fcbb10530e7df3->enter($__internal_eac43b0a573ab0bde72c8a4d72e3e1fb634f213cff7152b5d0fcbb10530e7df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_80dfff143cf3e8edd38de3906161eb37174d3bf51a978851c98e4f5d52712dbc->leave($__internal_80dfff143cf3e8edd38de3906161eb37174d3bf51a978851c98e4f5d52712dbc_prof);

        
        $__internal_eac43b0a573ab0bde72c8a4d72e3e1fb634f213cff7152b5d0fcbb10530e7df3->leave($__internal_eac43b0a573ab0bde72c8a4d72e3e1fb634f213cff7152b5d0fcbb10530e7df3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e70cacdff6a777e8a7710585c6eb18ce3b9d5f1746abc77afa96ec091bd37ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70cacdff6a777e8a7710585c6eb18ce3b9d5f1746abc77afa96ec091bd37ad0->enter($__internal_e70cacdff6a777e8a7710585c6eb18ce3b9d5f1746abc77afa96ec091bd37ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bde7ccbf2bbe46d641414d67939f77aca225d1b1b117c0aa803334918771f85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde7ccbf2bbe46d641414d67939f77aca225d1b1b117c0aa803334918771f85a->enter($__internal_bde7ccbf2bbe46d641414d67939f77aca225d1b1b117c0aa803334918771f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bde7ccbf2bbe46d641414d67939f77aca225d1b1b117c0aa803334918771f85a->leave($__internal_bde7ccbf2bbe46d641414d67939f77aca225d1b1b117c0aa803334918771f85a_prof);

        
        $__internal_e70cacdff6a777e8a7710585c6eb18ce3b9d5f1746abc77afa96ec091bd37ad0->leave($__internal_e70cacdff6a777e8a7710585c6eb18ce3b9d5f1746abc77afa96ec091bd37ad0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
