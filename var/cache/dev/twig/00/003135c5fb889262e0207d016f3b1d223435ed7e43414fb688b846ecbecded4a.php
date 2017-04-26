<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e2699b053f15534bdda33ec9dbfc60684166a2c96e7c64af8bfff4cb4cda3f47 extends Twig_Template
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
        $__internal_22d47bb75abd6f2b6833399cdaabd6bcb691003e4e9e0fa2198b2c3f926b6db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d47bb75abd6f2b6833399cdaabd6bcb691003e4e9e0fa2198b2c3f926b6db2->enter($__internal_22d47bb75abd6f2b6833399cdaabd6bcb691003e4e9e0fa2198b2c3f926b6db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_de7dd824450c9d2bcce704f3723d49b0bee7df2dff993b31fe43e9caabae8933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7dd824450c9d2bcce704f3723d49b0bee7df2dff993b31fe43e9caabae8933->enter($__internal_de7dd824450c9d2bcce704f3723d49b0bee7df2dff993b31fe43e9caabae8933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_22d47bb75abd6f2b6833399cdaabd6bcb691003e4e9e0fa2198b2c3f926b6db2->leave($__internal_22d47bb75abd6f2b6833399cdaabd6bcb691003e4e9e0fa2198b2c3f926b6db2_prof);

        
        $__internal_de7dd824450c9d2bcce704f3723d49b0bee7df2dff993b31fe43e9caabae8933->leave($__internal_de7dd824450c9d2bcce704f3723d49b0bee7df2dff993b31fe43e9caabae8933_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
