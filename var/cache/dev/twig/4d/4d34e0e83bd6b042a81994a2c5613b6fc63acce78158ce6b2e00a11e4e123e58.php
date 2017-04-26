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
        $__internal_e6276075d2f92ca9b104e0b728759bd83e8db1e628b573055cac6a74baddb6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6276075d2f92ca9b104e0b728759bd83e8db1e628b573055cac6a74baddb6a6->enter($__internal_e6276075d2f92ca9b104e0b728759bd83e8db1e628b573055cac6a74baddb6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_80e1b746ab5988a627295aacd606feefcd3ee81d9980f08ef315f1a45f66d8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e1b746ab5988a627295aacd606feefcd3ee81d9980f08ef315f1a45f66d8e2->enter($__internal_80e1b746ab5988a627295aacd606feefcd3ee81d9980f08ef315f1a45f66d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e6276075d2f92ca9b104e0b728759bd83e8db1e628b573055cac6a74baddb6a6->leave($__internal_e6276075d2f92ca9b104e0b728759bd83e8db1e628b573055cac6a74baddb6a6_prof);

        
        $__internal_80e1b746ab5988a627295aacd606feefcd3ee81d9980f08ef315f1a45f66d8e2->leave($__internal_80e1b746ab5988a627295aacd606feefcd3ee81d9980f08ef315f1a45f66d8e2_prof);

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
