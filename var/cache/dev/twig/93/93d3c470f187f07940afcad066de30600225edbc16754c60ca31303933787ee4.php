<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_54a49bd882fd89318ed8e9ed6e45ad27c0eefea373a657282027ca351c71c3a2 extends Twig_Template
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
        $__internal_47e98c1d26d9af673d1e19d448f7d53d6e4e8bb21414afbc27a5732a1d7bb488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e98c1d26d9af673d1e19d448f7d53d6e4e8bb21414afbc27a5732a1d7bb488->enter($__internal_47e98c1d26d9af673d1e19d448f7d53d6e4e8bb21414afbc27a5732a1d7bb488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d98d74c50260b044b3581746c9fd82c983f92a4e1bd748553e0c5be6f5133275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98d74c50260b044b3581746c9fd82c983f92a4e1bd748553e0c5be6f5133275->enter($__internal_d98d74c50260b044b3581746c9fd82c983f92a4e1bd748553e0c5be6f5133275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_47e98c1d26d9af673d1e19d448f7d53d6e4e8bb21414afbc27a5732a1d7bb488->leave($__internal_47e98c1d26d9af673d1e19d448f7d53d6e4e8bb21414afbc27a5732a1d7bb488_prof);

        
        $__internal_d98d74c50260b044b3581746c9fd82c983f92a4e1bd748553e0c5be6f5133275->leave($__internal_d98d74c50260b044b3581746c9fd82c983f92a4e1bd748553e0c5be6f5133275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
