<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0adc651a122259162d9c9952e4e54c95b27fc08ca5c9a6d3f319acc7b990e919 extends Twig_Template
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
        $__internal_b2fb837d49484d156451fa4f706d54fa943f5d7268aaf00daaaa37130a0d33ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fb837d49484d156451fa4f706d54fa943f5d7268aaf00daaaa37130a0d33ef->enter($__internal_b2fb837d49484d156451fa4f706d54fa943f5d7268aaf00daaaa37130a0d33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7740693b8315914ae8338db5916f6c52e46a19adf0827da011d39d5dda54e899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7740693b8315914ae8338db5916f6c52e46a19adf0827da011d39d5dda54e899->enter($__internal_7740693b8315914ae8338db5916f6c52e46a19adf0827da011d39d5dda54e899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b2fb837d49484d156451fa4f706d54fa943f5d7268aaf00daaaa37130a0d33ef->leave($__internal_b2fb837d49484d156451fa4f706d54fa943f5d7268aaf00daaaa37130a0d33ef_prof);

        
        $__internal_7740693b8315914ae8338db5916f6c52e46a19adf0827da011d39d5dda54e899->leave($__internal_7740693b8315914ae8338db5916f6c52e46a19adf0827da011d39d5dda54e899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
