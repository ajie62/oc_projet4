<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d3b327203596c862b72fb9bf7194241e61458698f0799395ff60e9a7578f6abc extends Twig_Template
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
        $__internal_4296a416912fa92c4b70e2358bddc8e0466b7cd585cea3fcede6b87702dd3f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4296a416912fa92c4b70e2358bddc8e0466b7cd585cea3fcede6b87702dd3f48->enter($__internal_4296a416912fa92c4b70e2358bddc8e0466b7cd585cea3fcede6b87702dd3f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c1f8cd2f9aff24ad5f5566789b70e25e6d878351b8dcb3a54693186674d554fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f8cd2f9aff24ad5f5566789b70e25e6d878351b8dcb3a54693186674d554fb->enter($__internal_c1f8cd2f9aff24ad5f5566789b70e25e6d878351b8dcb3a54693186674d554fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4296a416912fa92c4b70e2358bddc8e0466b7cd585cea3fcede6b87702dd3f48->leave($__internal_4296a416912fa92c4b70e2358bddc8e0466b7cd585cea3fcede6b87702dd3f48_prof);

        
        $__internal_c1f8cd2f9aff24ad5f5566789b70e25e6d878351b8dcb3a54693186674d554fb->leave($__internal_c1f8cd2f9aff24ad5f5566789b70e25e6d878351b8dcb3a54693186674d554fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
