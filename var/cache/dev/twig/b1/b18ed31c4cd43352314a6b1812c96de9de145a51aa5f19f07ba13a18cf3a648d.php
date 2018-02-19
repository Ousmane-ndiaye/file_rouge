<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_ee00852b5a37c815e268c5999215c7fa5e90585ad99138fd5e504f8dd17ac19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee00852b5a37c815e268c5999215c7fa5e90585ad99138fd5e504f8dd17ac19f->enter($__internal_ee00852b5a37c815e268c5999215c7fa5e90585ad99138fd5e504f8dd17ac19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4827e4747df8d3d2a2a3dbcfc4eedf68d71f425bee86907d202f2a1e63c78516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4827e4747df8d3d2a2a3dbcfc4eedf68d71f425bee86907d202f2a1e63c78516->enter($__internal_4827e4747df8d3d2a2a3dbcfc4eedf68d71f425bee86907d202f2a1e63c78516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ee00852b5a37c815e268c5999215c7fa5e90585ad99138fd5e504f8dd17ac19f->leave($__internal_ee00852b5a37c815e268c5999215c7fa5e90585ad99138fd5e504f8dd17ac19f_prof);

        
        $__internal_4827e4747df8d3d2a2a3dbcfc4eedf68d71f425bee86907d202f2a1e63c78516->leave($__internal_4827e4747df8d3d2a2a3dbcfc4eedf68d71f425bee86907d202f2a1e63c78516_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
