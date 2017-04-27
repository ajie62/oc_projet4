<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3dd00a1fe87a47d4958217ca7322d8333c38e7b8142eb035fa11147328d809a9 extends Twig_Template
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
        $__internal_41eb2e27c98daeba3cae57f9cc320f1df4421885b2e505e723374623c2bbf733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41eb2e27c98daeba3cae57f9cc320f1df4421885b2e505e723374623c2bbf733->enter($__internal_41eb2e27c98daeba3cae57f9cc320f1df4421885b2e505e723374623c2bbf733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b4ceae05ac36816d9d1c4d3685feee8136ef11a65996eec776cb8a31d1a11dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ceae05ac36816d9d1c4d3685feee8136ef11a65996eec776cb8a31d1a11dea->enter($__internal_b4ceae05ac36816d9d1c4d3685feee8136ef11a65996eec776cb8a31d1a11dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_41eb2e27c98daeba3cae57f9cc320f1df4421885b2e505e723374623c2bbf733->leave($__internal_41eb2e27c98daeba3cae57f9cc320f1df4421885b2e505e723374623c2bbf733_prof);

        
        $__internal_b4ceae05ac36816d9d1c4d3685feee8136ef11a65996eec776cb8a31d1a11dea->leave($__internal_b4ceae05ac36816d9d1c4d3685feee8136ef11a65996eec776cb8a31d1a11dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
