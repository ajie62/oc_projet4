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
        $__internal_f6f80185354f30181a90d37021e065e0edee82d1edad494073285ffa8a702a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f80185354f30181a90d37021e065e0edee82d1edad494073285ffa8a702a5e->enter($__internal_f6f80185354f30181a90d37021e065e0edee82d1edad494073285ffa8a702a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_528c5579c10dcd85c90340e915e60ab3b34302231f212e9c45c7ff0075ff6006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528c5579c10dcd85c90340e915e60ab3b34302231f212e9c45c7ff0075ff6006->enter($__internal_528c5579c10dcd85c90340e915e60ab3b34302231f212e9c45c7ff0075ff6006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f6f80185354f30181a90d37021e065e0edee82d1edad494073285ffa8a702a5e->leave($__internal_f6f80185354f30181a90d37021e065e0edee82d1edad494073285ffa8a702a5e_prof);

        
        $__internal_528c5579c10dcd85c90340e915e60ab3b34302231f212e9c45c7ff0075ff6006->leave($__internal_528c5579c10dcd85c90340e915e60ab3b34302231f212e9c45c7ff0075ff6006_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c88fab2ea9429b026f24cfc6d8dfaef9cf0f484a4b8e5cd5bd896b85cf42fdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88fab2ea9429b026f24cfc6d8dfaef9cf0f484a4b8e5cd5bd896b85cf42fdcc->enter($__internal_c88fab2ea9429b026f24cfc6d8dfaef9cf0f484a4b8e5cd5bd896b85cf42fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4ac2058cb705817a15ccf5bc227560aed9bc6d329c20eed19fc61d77a596200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ac2058cb705817a15ccf5bc227560aed9bc6d329c20eed19fc61d77a596200->enter($__internal_f4ac2058cb705817a15ccf5bc227560aed9bc6d329c20eed19fc61d77a596200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f4ac2058cb705817a15ccf5bc227560aed9bc6d329c20eed19fc61d77a596200->leave($__internal_f4ac2058cb705817a15ccf5bc227560aed9bc6d329c20eed19fc61d77a596200_prof);

        
        $__internal_c88fab2ea9429b026f24cfc6d8dfaef9cf0f484a4b8e5cd5bd896b85cf42fdcc->leave($__internal_c88fab2ea9429b026f24cfc6d8dfaef9cf0f484a4b8e5cd5bd896b85cf42fdcc_prof);

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
