<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8bd25eedff175bc50354a487be032a136e202089b1a028f6ac280badff596cb5 extends Twig_Template
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
        $__internal_ba1bf9f3073710aa90c421a05c31c68a25b8e089f3133d5ea48a49976269182c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1bf9f3073710aa90c421a05c31c68a25b8e089f3133d5ea48a49976269182c->enter($__internal_ba1bf9f3073710aa90c421a05c31c68a25b8e089f3133d5ea48a49976269182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_57e74444438d65334da88bd7f991f92248f3949c3b270fbe50204d0ecd6c1422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e74444438d65334da88bd7f991f92248f3949c3b270fbe50204d0ecd6c1422->enter($__internal_57e74444438d65334da88bd7f991f92248f3949c3b270fbe50204d0ecd6c1422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ba1bf9f3073710aa90c421a05c31c68a25b8e089f3133d5ea48a49976269182c->leave($__internal_ba1bf9f3073710aa90c421a05c31c68a25b8e089f3133d5ea48a49976269182c_prof);

        
        $__internal_57e74444438d65334da88bd7f991f92248f3949c3b270fbe50204d0ecd6c1422->leave($__internal_57e74444438d65334da88bd7f991f92248f3949c3b270fbe50204d0ecd6c1422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Jerome/Documents/www/oc_projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
