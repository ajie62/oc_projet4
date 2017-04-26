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
        $__internal_7760cd0c60a19c9882fb79ed5bd2f4455c664ae0ee4919eed8c23d6975de86b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7760cd0c60a19c9882fb79ed5bd2f4455c664ae0ee4919eed8c23d6975de86b4->enter($__internal_7760cd0c60a19c9882fb79ed5bd2f4455c664ae0ee4919eed8c23d6975de86b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_435f71b3aafe380dd5bee343558c0b403deb30826a0fcc163f1c2b7cfd5db580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435f71b3aafe380dd5bee343558c0b403deb30826a0fcc163f1c2b7cfd5db580->enter($__internal_435f71b3aafe380dd5bee343558c0b403deb30826a0fcc163f1c2b7cfd5db580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7760cd0c60a19c9882fb79ed5bd2f4455c664ae0ee4919eed8c23d6975de86b4->leave($__internal_7760cd0c60a19c9882fb79ed5bd2f4455c664ae0ee4919eed8c23d6975de86b4_prof);

        
        $__internal_435f71b3aafe380dd5bee343558c0b403deb30826a0fcc163f1c2b7cfd5db580->leave($__internal_435f71b3aafe380dd5bee343558c0b403deb30826a0fcc163f1c2b7cfd5db580_prof);

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
