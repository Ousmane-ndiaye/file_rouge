<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_ed5b69fcc7a8efe9940137dbdeb6b2ee512d4a425c2e642768cc7fd09e0d34b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5b69fcc7a8efe9940137dbdeb6b2ee512d4a425c2e642768cc7fd09e0d34b2->enter($__internal_ed5b69fcc7a8efe9940137dbdeb6b2ee512d4a425c2e642768cc7fd09e0d34b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d29e59e9fab91428a3ca21385ab84e1e748bf8cd360205ef83eb2ee99218ff38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29e59e9fab91428a3ca21385ab84e1e748bf8cd360205ef83eb2ee99218ff38->enter($__internal_d29e59e9fab91428a3ca21385ab84e1e748bf8cd360205ef83eb2ee99218ff38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ed5b69fcc7a8efe9940137dbdeb6b2ee512d4a425c2e642768cc7fd09e0d34b2->leave($__internal_ed5b69fcc7a8efe9940137dbdeb6b2ee512d4a425c2e642768cc7fd09e0d34b2_prof);

        
        $__internal_d29e59e9fab91428a3ca21385ab84e1e748bf8cd360205ef83eb2ee99218ff38->leave($__internal_d29e59e9fab91428a3ca21385ab84e1e748bf8cd360205ef83eb2ee99218ff38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
