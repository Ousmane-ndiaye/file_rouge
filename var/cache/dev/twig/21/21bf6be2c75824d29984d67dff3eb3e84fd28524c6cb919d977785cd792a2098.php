<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_7ac134deb15d5bbc60fb328583e99ef2b9ccca620cd4a712a9029bfb11b1d55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac134deb15d5bbc60fb328583e99ef2b9ccca620cd4a712a9029bfb11b1d55b->enter($__internal_7ac134deb15d5bbc60fb328583e99ef2b9ccca620cd4a712a9029bfb11b1d55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_44c652376f5029935d3b52e304e24f767cf46d737caab1983ab317bd194ed4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c652376f5029935d3b52e304e24f767cf46d737caab1983ab317bd194ed4a3->enter($__internal_44c652376f5029935d3b52e304e24f767cf46d737caab1983ab317bd194ed4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7ac134deb15d5bbc60fb328583e99ef2b9ccca620cd4a712a9029bfb11b1d55b->leave($__internal_7ac134deb15d5bbc60fb328583e99ef2b9ccca620cd4a712a9029bfb11b1d55b_prof);

        
        $__internal_44c652376f5029935d3b52e304e24f767cf46d737caab1983ab317bd194ed4a3->leave($__internal_44c652376f5029935d3b52e304e24f767cf46d737caab1983ab317bd194ed4a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
