<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_4858988929cfa22dd82a3b805d67186df59e874e0f2779f19b77845172006682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4858988929cfa22dd82a3b805d67186df59e874e0f2779f19b77845172006682->enter($__internal_4858988929cfa22dd82a3b805d67186df59e874e0f2779f19b77845172006682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ce3779a0b1b9e6ef4191633f4b566c25b62d6a6d7b0460f1d04af2da1009f118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3779a0b1b9e6ef4191633f4b566c25b62d6a6d7b0460f1d04af2da1009f118->enter($__internal_ce3779a0b1b9e6ef4191633f4b566c25b62d6a6d7b0460f1d04af2da1009f118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4858988929cfa22dd82a3b805d67186df59e874e0f2779f19b77845172006682->leave($__internal_4858988929cfa22dd82a3b805d67186df59e874e0f2779f19b77845172006682_prof);

        
        $__internal_ce3779a0b1b9e6ef4191633f4b566c25b62d6a6d7b0460f1d04af2da1009f118->leave($__internal_ce3779a0b1b9e6ef4191633f4b566c25b62d6a6d7b0460f1d04af2da1009f118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
