<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_c2ea4981ab30fd951e2e0295f3f66d7b25d7637686867deef4a5bfeaa945570d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ea4981ab30fd951e2e0295f3f66d7b25d7637686867deef4a5bfeaa945570d->enter($__internal_c2ea4981ab30fd951e2e0295f3f66d7b25d7637686867deef4a5bfeaa945570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_db439cd34f6ab8667d5ec52f2137739f0e180c33dd00e058bc33af456b546822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db439cd34f6ab8667d5ec52f2137739f0e180c33dd00e058bc33af456b546822->enter($__internal_db439cd34f6ab8667d5ec52f2137739f0e180c33dd00e058bc33af456b546822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c2ea4981ab30fd951e2e0295f3f66d7b25d7637686867deef4a5bfeaa945570d->leave($__internal_c2ea4981ab30fd951e2e0295f3f66d7b25d7637686867deef4a5bfeaa945570d_prof);

        
        $__internal_db439cd34f6ab8667d5ec52f2137739f0e180c33dd00e058bc33af456b546822->leave($__internal_db439cd34f6ab8667d5ec52f2137739f0e180c33dd00e058bc33af456b546822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
