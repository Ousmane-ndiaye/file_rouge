<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_f5282e39d9e9f20dfd16eb84b5a32d36b3dcd7469d79270ada273249e034cde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5282e39d9e9f20dfd16eb84b5a32d36b3dcd7469d79270ada273249e034cde6->enter($__internal_f5282e39d9e9f20dfd16eb84b5a32d36b3dcd7469d79270ada273249e034cde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6c65202ed642d20b5991f67f36b9637e03cf943b434989909da3c1e0ed75a92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c65202ed642d20b5991f67f36b9637e03cf943b434989909da3c1e0ed75a92a->enter($__internal_6c65202ed642d20b5991f67f36b9637e03cf943b434989909da3c1e0ed75a92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f5282e39d9e9f20dfd16eb84b5a32d36b3dcd7469d79270ada273249e034cde6->leave($__internal_f5282e39d9e9f20dfd16eb84b5a32d36b3dcd7469d79270ada273249e034cde6_prof);

        
        $__internal_6c65202ed642d20b5991f67f36b9637e03cf943b434989909da3c1e0ed75a92a->leave($__internal_6c65202ed642d20b5991f67f36b9637e03cf943b434989909da3c1e0ed75a92a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
