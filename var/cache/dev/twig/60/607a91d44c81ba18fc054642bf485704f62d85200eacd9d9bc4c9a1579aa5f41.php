<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9359811080183b2bba609c5259ca8b40a6020e024e821399c25d469fcc7f31a0 extends Twig_Template
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
        $__internal_c95e10061e8e95cca711124a9a6c2cb839bbe4c343599435a0a5db17b23c2843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95e10061e8e95cca711124a9a6c2cb839bbe4c343599435a0a5db17b23c2843->enter($__internal_c95e10061e8e95cca711124a9a6c2cb839bbe4c343599435a0a5db17b23c2843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9758c1d9c1234318126b3e76ea1a39b9cd8c139e1da0a8a568d826bc6819ee10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9758c1d9c1234318126b3e76ea1a39b9cd8c139e1da0a8a568d826bc6819ee10->enter($__internal_9758c1d9c1234318126b3e76ea1a39b9cd8c139e1da0a8a568d826bc6819ee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c95e10061e8e95cca711124a9a6c2cb839bbe4c343599435a0a5db17b23c2843->leave($__internal_c95e10061e8e95cca711124a9a6c2cb839bbe4c343599435a0a5db17b23c2843_prof);

        
        $__internal_9758c1d9c1234318126b3e76ea1a39b9cd8c139e1da0a8a568d826bc6819ee10->leave($__internal_9758c1d9c1234318126b3e76ea1a39b9cd8c139e1da0a8a568d826bc6819ee10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
