<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_cf19757220a561fedcba2d03381ff908e48a775fc1227f948cb89a0fdf46f850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf19757220a561fedcba2d03381ff908e48a775fc1227f948cb89a0fdf46f850->enter($__internal_cf19757220a561fedcba2d03381ff908e48a775fc1227f948cb89a0fdf46f850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e8e406e2ddc53ac285472ba8e7f43aabaf7fdbda602c987a05fe95b1156c593a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e406e2ddc53ac285472ba8e7f43aabaf7fdbda602c987a05fe95b1156c593a->enter($__internal_e8e406e2ddc53ac285472ba8e7f43aabaf7fdbda602c987a05fe95b1156c593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cf19757220a561fedcba2d03381ff908e48a775fc1227f948cb89a0fdf46f850->leave($__internal_cf19757220a561fedcba2d03381ff908e48a775fc1227f948cb89a0fdf46f850_prof);

        
        $__internal_e8e406e2ddc53ac285472ba8e7f43aabaf7fdbda602c987a05fe95b1156c593a->leave($__internal_e8e406e2ddc53ac285472ba8e7f43aabaf7fdbda602c987a05fe95b1156c593a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
