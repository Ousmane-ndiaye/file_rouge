<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_bb4aa292443b08dffda175146a0c9406589673cb6bada897665ce6a564b36392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4aa292443b08dffda175146a0c9406589673cb6bada897665ce6a564b36392->enter($__internal_bb4aa292443b08dffda175146a0c9406589673cb6bada897665ce6a564b36392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2c7acc50f3d64e0cea4882cf7fc8512375eca74b9801047a015a1bc44c05143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7acc50f3d64e0cea4882cf7fc8512375eca74b9801047a015a1bc44c05143f->enter($__internal_2c7acc50f3d64e0cea4882cf7fc8512375eca74b9801047a015a1bc44c05143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bb4aa292443b08dffda175146a0c9406589673cb6bada897665ce6a564b36392->leave($__internal_bb4aa292443b08dffda175146a0c9406589673cb6bada897665ce6a564b36392_prof);

        
        $__internal_2c7acc50f3d64e0cea4882cf7fc8512375eca74b9801047a015a1bc44c05143f->leave($__internal_2c7acc50f3d64e0cea4882cf7fc8512375eca74b9801047a015a1bc44c05143f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
