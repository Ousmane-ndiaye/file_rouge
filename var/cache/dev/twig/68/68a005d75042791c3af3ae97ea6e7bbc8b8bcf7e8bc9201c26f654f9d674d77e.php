<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_e5d90bd77f6c07590f80b7919ae625e3e3fa6a3f822a199ac71c3ff6693090fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d90bd77f6c07590f80b7919ae625e3e3fa6a3f822a199ac71c3ff6693090fd->enter($__internal_e5d90bd77f6c07590f80b7919ae625e3e3fa6a3f822a199ac71c3ff6693090fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fa371bdb474b88cb72b5318fb8090a4071ad6747edc9e1eff7f0bd8b7c6b4250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa371bdb474b88cb72b5318fb8090a4071ad6747edc9e1eff7f0bd8b7c6b4250->enter($__internal_fa371bdb474b88cb72b5318fb8090a4071ad6747edc9e1eff7f0bd8b7c6b4250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e5d90bd77f6c07590f80b7919ae625e3e3fa6a3f822a199ac71c3ff6693090fd->leave($__internal_e5d90bd77f6c07590f80b7919ae625e3e3fa6a3f822a199ac71c3ff6693090fd_prof);

        
        $__internal_fa371bdb474b88cb72b5318fb8090a4071ad6747edc9e1eff7f0bd8b7c6b4250->leave($__internal_fa371bdb474b88cb72b5318fb8090a4071ad6747edc9e1eff7f0bd8b7c6b4250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
