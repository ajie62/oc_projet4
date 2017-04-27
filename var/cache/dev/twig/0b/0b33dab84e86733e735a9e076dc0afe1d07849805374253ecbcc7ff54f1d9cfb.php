<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_775191e24aa794cc7ea3237facfc36e38760631eb90b19ade025aa6b8d6b4f16 extends Twig_Template
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
        $__internal_0d41cb438e22759543bc2d5e5408c1343a0404789c41477d3ac0c6e04895961b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d41cb438e22759543bc2d5e5408c1343a0404789c41477d3ac0c6e04895961b->enter($__internal_0d41cb438e22759543bc2d5e5408c1343a0404789c41477d3ac0c6e04895961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d821e474028312a3036b2c1f44a95e1626d750d36f6206491b74671f0fb20a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d821e474028312a3036b2c1f44a95e1626d750d36f6206491b74671f0fb20a95->enter($__internal_d821e474028312a3036b2c1f44a95e1626d750d36f6206491b74671f0fb20a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0d41cb438e22759543bc2d5e5408c1343a0404789c41477d3ac0c6e04895961b->leave($__internal_0d41cb438e22759543bc2d5e5408c1343a0404789c41477d3ac0c6e04895961b_prof);

        
        $__internal_d821e474028312a3036b2c1f44a95e1626d750d36f6206491b74671f0fb20a95->leave($__internal_d821e474028312a3036b2c1f44a95e1626d750d36f6206491b74671f0fb20a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
