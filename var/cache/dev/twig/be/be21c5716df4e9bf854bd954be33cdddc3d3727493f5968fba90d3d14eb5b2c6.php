<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_63c1d323467bdbe7e480cb76c4ea0383141e425b716ec17b4393e0cd0785f2f3 extends Twig_Template
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
        $__internal_0e1d67fea5c22ac8b627b493c428a6443af8aa3129f1152e8ae396b5be6c29ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1d67fea5c22ac8b627b493c428a6443af8aa3129f1152e8ae396b5be6c29ff->enter($__internal_0e1d67fea5c22ac8b627b493c428a6443af8aa3129f1152e8ae396b5be6c29ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c5436b728210cf0485e0a8a80af1d4f769e4a0f3ae33ead24e8f9cc42132d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5436b728210cf0485e0a8a80af1d4f769e4a0f3ae33ead24e8f9cc42132d2c3->enter($__internal_c5436b728210cf0485e0a8a80af1d4f769e4a0f3ae33ead24e8f9cc42132d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0e1d67fea5c22ac8b627b493c428a6443af8aa3129f1152e8ae396b5be6c29ff->leave($__internal_0e1d67fea5c22ac8b627b493c428a6443af8aa3129f1152e8ae396b5be6c29ff_prof);

        
        $__internal_c5436b728210cf0485e0a8a80af1d4f769e4a0f3ae33ead24e8f9cc42132d2c3->leave($__internal_c5436b728210cf0485e0a8a80af1d4f769e4a0f3ae33ead24e8f9cc42132d2c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
