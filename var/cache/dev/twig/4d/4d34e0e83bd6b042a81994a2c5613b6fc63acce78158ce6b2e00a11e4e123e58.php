<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9298f5e8bac56488b1075191fd0176d47ac92a7c8ae5a390e2f3103862604e95 extends Twig_Template
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
        $__internal_86d8d318f051a83dd3d8de3030ff78d8e759c318a05a415381f5ffa9fbec7fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d8d318f051a83dd3d8de3030ff78d8e759c318a05a415381f5ffa9fbec7fbf->enter($__internal_86d8d318f051a83dd3d8de3030ff78d8e759c318a05a415381f5ffa9fbec7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1d686d25c23965cb79cfe2ec7341390efa0f9622e9e4816b0b1b3e3239103476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d686d25c23965cb79cfe2ec7341390efa0f9622e9e4816b0b1b3e3239103476->enter($__internal_1d686d25c23965cb79cfe2ec7341390efa0f9622e9e4816b0b1b3e3239103476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_86d8d318f051a83dd3d8de3030ff78d8e759c318a05a415381f5ffa9fbec7fbf->leave($__internal_86d8d318f051a83dd3d8de3030ff78d8e759c318a05a415381f5ffa9fbec7fbf_prof);

        
        $__internal_1d686d25c23965cb79cfe2ec7341390efa0f9622e9e4816b0b1b3e3239103476->leave($__internal_1d686d25c23965cb79cfe2ec7341390efa0f9622e9e4816b0b1b3e3239103476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
