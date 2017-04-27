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
        $__internal_579cfadb8738a7074e86f12211a6ec0f4190777a4e776f3e57a19ece26785247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579cfadb8738a7074e86f12211a6ec0f4190777a4e776f3e57a19ece26785247->enter($__internal_579cfadb8738a7074e86f12211a6ec0f4190777a4e776f3e57a19ece26785247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2137671434f7d95035a6f99cb8ea7d75c3995dc2cc398ce5781334a0756ac29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2137671434f7d95035a6f99cb8ea7d75c3995dc2cc398ce5781334a0756ac29c->enter($__internal_2137671434f7d95035a6f99cb8ea7d75c3995dc2cc398ce5781334a0756ac29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_579cfadb8738a7074e86f12211a6ec0f4190777a4e776f3e57a19ece26785247->leave($__internal_579cfadb8738a7074e86f12211a6ec0f4190777a4e776f3e57a19ece26785247_prof);

        
        $__internal_2137671434f7d95035a6f99cb8ea7d75c3995dc2cc398ce5781334a0756ac29c->leave($__internal_2137671434f7d95035a6f99cb8ea7d75c3995dc2cc398ce5781334a0756ac29c_prof);

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
