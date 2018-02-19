<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_f0acc99ddecea22112992b3f48395c04c913c26824473e75b77e1440a96cb204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0acc99ddecea22112992b3f48395c04c913c26824473e75b77e1440a96cb204->enter($__internal_f0acc99ddecea22112992b3f48395c04c913c26824473e75b77e1440a96cb204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_071ad2d5be04e17ed823b0d4f2c92721d15ad4d8e5c9b626172a4159aa95c975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071ad2d5be04e17ed823b0d4f2c92721d15ad4d8e5c9b626172a4159aa95c975->enter($__internal_071ad2d5be04e17ed823b0d4f2c92721d15ad4d8e5c9b626172a4159aa95c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f0acc99ddecea22112992b3f48395c04c913c26824473e75b77e1440a96cb204->leave($__internal_f0acc99ddecea22112992b3f48395c04c913c26824473e75b77e1440a96cb204_prof);

        
        $__internal_071ad2d5be04e17ed823b0d4f2c92721d15ad4d8e5c9b626172a4159aa95c975->leave($__internal_071ad2d5be04e17ed823b0d4f2c92721d15ad4d8e5c9b626172a4159aa95c975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
