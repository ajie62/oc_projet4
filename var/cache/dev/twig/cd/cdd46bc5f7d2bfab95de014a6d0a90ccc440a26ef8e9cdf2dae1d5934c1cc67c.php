<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_dea05a16990ecce5c4d4f705d6b312e6eaee5410cbc723b2cf9731a21c18b04a extends Twig_Template
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
        $__internal_5d23dea90dc0eda3c1a4a8806675ccd4c51a7271b93f55052f4b063e386c924c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d23dea90dc0eda3c1a4a8806675ccd4c51a7271b93f55052f4b063e386c924c->enter($__internal_5d23dea90dc0eda3c1a4a8806675ccd4c51a7271b93f55052f4b063e386c924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d4ceb92ee8b03c69b2bf19617aff7fd01aa353116c93d030d47c41c6c818f67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ceb92ee8b03c69b2bf19617aff7fd01aa353116c93d030d47c41c6c818f67d->enter($__internal_d4ceb92ee8b03c69b2bf19617aff7fd01aa353116c93d030d47c41c6c818f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5d23dea90dc0eda3c1a4a8806675ccd4c51a7271b93f55052f4b063e386c924c->leave($__internal_5d23dea90dc0eda3c1a4a8806675ccd4c51a7271b93f55052f4b063e386c924c_prof);

        
        $__internal_d4ceb92ee8b03c69b2bf19617aff7fd01aa353116c93d030d47c41c6c818f67d->leave($__internal_d4ceb92ee8b03c69b2bf19617aff7fd01aa353116c93d030d47c41c6c818f67d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
