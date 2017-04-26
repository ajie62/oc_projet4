<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8498a6b3710d7e60d98772c43147217e818176d27199eba45e23c7e8a702ce94 extends Twig_Template
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
        $__internal_d4a74db0b3d6ec51f005dedf98f5145ed854d7972f800f07cd0ccb11a1ea5c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a74db0b3d6ec51f005dedf98f5145ed854d7972f800f07cd0ccb11a1ea5c70->enter($__internal_d4a74db0b3d6ec51f005dedf98f5145ed854d7972f800f07cd0ccb11a1ea5c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3a86b2f3edb91b4e0c97b15d216476b19ec5fee6689275ecd52ea23d7530df13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a86b2f3edb91b4e0c97b15d216476b19ec5fee6689275ecd52ea23d7530df13->enter($__internal_3a86b2f3edb91b4e0c97b15d216476b19ec5fee6689275ecd52ea23d7530df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d4a74db0b3d6ec51f005dedf98f5145ed854d7972f800f07cd0ccb11a1ea5c70->leave($__internal_d4a74db0b3d6ec51f005dedf98f5145ed854d7972f800f07cd0ccb11a1ea5c70_prof);

        
        $__internal_3a86b2f3edb91b4e0c97b15d216476b19ec5fee6689275ecd52ea23d7530df13->leave($__internal_3a86b2f3edb91b4e0c97b15d216476b19ec5fee6689275ecd52ea23d7530df13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
