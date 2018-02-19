<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_91ca02c6c0dab625f6fcf12933df7c363aecbfea049cb90f5b1affe987eff035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ca02c6c0dab625f6fcf12933df7c363aecbfea049cb90f5b1affe987eff035->enter($__internal_91ca02c6c0dab625f6fcf12933df7c363aecbfea049cb90f5b1affe987eff035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b078dc3ca6f527aac79305d18050011f485b01c91249affa256da64d6b88c2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b078dc3ca6f527aac79305d18050011f485b01c91249affa256da64d6b88c2e4->enter($__internal_b078dc3ca6f527aac79305d18050011f485b01c91249affa256da64d6b88c2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_91ca02c6c0dab625f6fcf12933df7c363aecbfea049cb90f5b1affe987eff035->leave($__internal_91ca02c6c0dab625f6fcf12933df7c363aecbfea049cb90f5b1affe987eff035_prof);

        
        $__internal_b078dc3ca6f527aac79305d18050011f485b01c91249affa256da64d6b88c2e4->leave($__internal_b078dc3ca6f527aac79305d18050011f485b01c91249affa256da64d6b88c2e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
