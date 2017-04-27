<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b6beaf9787e5ce0fcd282433f12571fd3184cd40579d035db41bf67a73e2f1ef extends Twig_Template
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
        $__internal_f5156d5bc1f4bf7e2963d729e8d443a48c4ecc8fd3fc90ee08639f59d6430c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5156d5bc1f4bf7e2963d729e8d443a48c4ecc8fd3fc90ee08639f59d6430c43->enter($__internal_f5156d5bc1f4bf7e2963d729e8d443a48c4ecc8fd3fc90ee08639f59d6430c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c7cc239e992aa262fe6b4fc3c5c284f59382970adde6f8181edc7baed6a7fe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cc239e992aa262fe6b4fc3c5c284f59382970adde6f8181edc7baed6a7fe97->enter($__internal_c7cc239e992aa262fe6b4fc3c5c284f59382970adde6f8181edc7baed6a7fe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f5156d5bc1f4bf7e2963d729e8d443a48c4ecc8fd3fc90ee08639f59d6430c43->leave($__internal_f5156d5bc1f4bf7e2963d729e8d443a48c4ecc8fd3fc90ee08639f59d6430c43_prof);

        
        $__internal_c7cc239e992aa262fe6b4fc3c5c284f59382970adde6f8181edc7baed6a7fe97->leave($__internal_c7cc239e992aa262fe6b4fc3c5c284f59382970adde6f8181edc7baed6a7fe97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
