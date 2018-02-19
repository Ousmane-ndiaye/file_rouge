<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_ae0e159668cb59bfecff4f40907404e43bbd48221bbf93c4d3f4474bec82903b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0e159668cb59bfecff4f40907404e43bbd48221bbf93c4d3f4474bec82903b->enter($__internal_ae0e159668cb59bfecff4f40907404e43bbd48221bbf93c4d3f4474bec82903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_473eccc4b5d7e6d1b98508893a99c9fbb15cc84b84c9c5276799b6ece375d8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473eccc4b5d7e6d1b98508893a99c9fbb15cc84b84c9c5276799b6ece375d8da->enter($__internal_473eccc4b5d7e6d1b98508893a99c9fbb15cc84b84c9c5276799b6ece375d8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ae0e159668cb59bfecff4f40907404e43bbd48221bbf93c4d3f4474bec82903b->leave($__internal_ae0e159668cb59bfecff4f40907404e43bbd48221bbf93c4d3f4474bec82903b_prof);

        
        $__internal_473eccc4b5d7e6d1b98508893a99c9fbb15cc84b84c9c5276799b6ece375d8da->leave($__internal_473eccc4b5d7e6d1b98508893a99c9fbb15cc84b84c9c5276799b6ece375d8da_prof);

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
", "@Framework/Form/form_rest.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
