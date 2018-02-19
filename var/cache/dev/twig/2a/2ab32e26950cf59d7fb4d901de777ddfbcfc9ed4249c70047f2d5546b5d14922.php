<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_575f8f54bf607001085a72f937847b8b0217482f7ac790657a272f1be5b838ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575f8f54bf607001085a72f937847b8b0217482f7ac790657a272f1be5b838ca->enter($__internal_575f8f54bf607001085a72f937847b8b0217482f7ac790657a272f1be5b838ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8094c5bcc6ca970ad8b3113fd27139635e97dffc71e5e2eb2c1f928f4cf6c5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8094c5bcc6ca970ad8b3113fd27139635e97dffc71e5e2eb2c1f928f4cf6c5c0->enter($__internal_8094c5bcc6ca970ad8b3113fd27139635e97dffc71e5e2eb2c1f928f4cf6c5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_575f8f54bf607001085a72f937847b8b0217482f7ac790657a272f1be5b838ca->leave($__internal_575f8f54bf607001085a72f937847b8b0217482f7ac790657a272f1be5b838ca_prof);

        
        $__internal_8094c5bcc6ca970ad8b3113fd27139635e97dffc71e5e2eb2c1f928f4cf6c5c0->leave($__internal_8094c5bcc6ca970ad8b3113fd27139635e97dffc71e5e2eb2c1f928f4cf6c5c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
