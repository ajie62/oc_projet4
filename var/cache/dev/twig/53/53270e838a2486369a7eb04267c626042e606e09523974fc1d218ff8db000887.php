<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_594af8eab9db300ad27878a74ed193c3daa2ee806a0e489a0af0791e79965a2f extends Twig_Template
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
        $__internal_7cb9801dda8109afd05b70b2e0cbfbdc85a110e65794bea362c0b0cf0f3a7296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb9801dda8109afd05b70b2e0cbfbdc85a110e65794bea362c0b0cf0f3a7296->enter($__internal_7cb9801dda8109afd05b70b2e0cbfbdc85a110e65794bea362c0b0cf0f3a7296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9085eac3b5816837d33375936b55c57701b1736aa6700a64f459f306e2e69ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9085eac3b5816837d33375936b55c57701b1736aa6700a64f459f306e2e69ea0->enter($__internal_9085eac3b5816837d33375936b55c57701b1736aa6700a64f459f306e2e69ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7cb9801dda8109afd05b70b2e0cbfbdc85a110e65794bea362c0b0cf0f3a7296->leave($__internal_7cb9801dda8109afd05b70b2e0cbfbdc85a110e65794bea362c0b0cf0f3a7296_prof);

        
        $__internal_9085eac3b5816837d33375936b55c57701b1736aa6700a64f459f306e2e69ea0->leave($__internal_9085eac3b5816837d33375936b55c57701b1736aa6700a64f459f306e2e69ea0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
