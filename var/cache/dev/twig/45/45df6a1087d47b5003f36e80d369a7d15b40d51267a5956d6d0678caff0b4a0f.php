<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e8a9871f7ff9bebc2339fb3b3c06b8aa0a8203a459b4be56c25abcd905882efd extends Twig_Template
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
        $__internal_62be1a132fcffe3d2098b5bcd94197d5e05539999ac9d36544001fc3661037c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62be1a132fcffe3d2098b5bcd94197d5e05539999ac9d36544001fc3661037c4->enter($__internal_62be1a132fcffe3d2098b5bcd94197d5e05539999ac9d36544001fc3661037c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d3cc02a7f001a11763a47ef3c46b0b20be42ebbc2eef894304428ca9a8efdcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cc02a7f001a11763a47ef3c46b0b20be42ebbc2eef894304428ca9a8efdcb2->enter($__internal_d3cc02a7f001a11763a47ef3c46b0b20be42ebbc2eef894304428ca9a8efdcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_62be1a132fcffe3d2098b5bcd94197d5e05539999ac9d36544001fc3661037c4->leave($__internal_62be1a132fcffe3d2098b5bcd94197d5e05539999ac9d36544001fc3661037c4_prof);

        
        $__internal_d3cc02a7f001a11763a47ef3c46b0b20be42ebbc2eef894304428ca9a8efdcb2->leave($__internal_d3cc02a7f001a11763a47ef3c46b0b20be42ebbc2eef894304428ca9a8efdcb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
