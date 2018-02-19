<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_3d3ae8bd59f220184bc4063e6a30b6c25158dd9f729a13890e18d4599797d386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3ae8bd59f220184bc4063e6a30b6c25158dd9f729a13890e18d4599797d386->enter($__internal_3d3ae8bd59f220184bc4063e6a30b6c25158dd9f729a13890e18d4599797d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5b85db20d568765cd99614f27a1a4a1f26541bc89a70193a529503776cee79ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b85db20d568765cd99614f27a1a4a1f26541bc89a70193a529503776cee79ed->enter($__internal_5b85db20d568765cd99614f27a1a4a1f26541bc89a70193a529503776cee79ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3d3ae8bd59f220184bc4063e6a30b6c25158dd9f729a13890e18d4599797d386->leave($__internal_3d3ae8bd59f220184bc4063e6a30b6c25158dd9f729a13890e18d4599797d386_prof);

        
        $__internal_5b85db20d568765cd99614f27a1a4a1f26541bc89a70193a529503776cee79ed->leave($__internal_5b85db20d568765cd99614f27a1a4a1f26541bc89a70193a529503776cee79ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
