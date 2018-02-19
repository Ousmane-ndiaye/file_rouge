<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_716ced5669058cf35b0cd7a223abecb85ea9a44d55890d19f8f9fc4d6268a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716ced5669058cf35b0cd7a223abecb85ea9a44d55890d19f8f9fc4d6268a6ce->enter($__internal_716ced5669058cf35b0cd7a223abecb85ea9a44d55890d19f8f9fc4d6268a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_48065cebcbbd466616ebe683cba9759bd82134124c3a1f9ded760b6c6ae5400e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48065cebcbbd466616ebe683cba9759bd82134124c3a1f9ded760b6c6ae5400e->enter($__internal_48065cebcbbd466616ebe683cba9759bd82134124c3a1f9ded760b6c6ae5400e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_716ced5669058cf35b0cd7a223abecb85ea9a44d55890d19f8f9fc4d6268a6ce->leave($__internal_716ced5669058cf35b0cd7a223abecb85ea9a44d55890d19f8f9fc4d6268a6ce_prof);

        
        $__internal_48065cebcbbd466616ebe683cba9759bd82134124c3a1f9ded760b6c6ae5400e->leave($__internal_48065cebcbbd466616ebe683cba9759bd82134124c3a1f9ded760b6c6ae5400e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
