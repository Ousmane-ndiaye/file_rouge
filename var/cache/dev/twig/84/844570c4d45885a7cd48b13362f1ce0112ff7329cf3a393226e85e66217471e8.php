<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040b9c8a7486f43c444d34bc133a98fc16746972c689eb3e960ce45eea628408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040b9c8a7486f43c444d34bc133a98fc16746972c689eb3e960ce45eea628408->enter($__internal_040b9c8a7486f43c444d34bc133a98fc16746972c689eb3e960ce45eea628408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bf9e44a154f98774cd3643d5cf00913dc91c138f21e167433f88a76427553390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9e44a154f98774cd3643d5cf00913dc91c138f21e167433f88a76427553390->enter($__internal_bf9e44a154f98774cd3643d5cf00913dc91c138f21e167433f88a76427553390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_040b9c8a7486f43c444d34bc133a98fc16746972c689eb3e960ce45eea628408->leave($__internal_040b9c8a7486f43c444d34bc133a98fc16746972c689eb3e960ce45eea628408_prof);

        
        $__internal_bf9e44a154f98774cd3643d5cf00913dc91c138f21e167433f88a76427553390->leave($__internal_bf9e44a154f98774cd3643d5cf00913dc91c138f21e167433f88a76427553390_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5688bd71aa91d493f9701e279d3386989b7f0b406ea582e3e12901a99a6df77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5688bd71aa91d493f9701e279d3386989b7f0b406ea582e3e12901a99a6df77e->enter($__internal_5688bd71aa91d493f9701e279d3386989b7f0b406ea582e3e12901a99a6df77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa574b3b119df4f110390e5d87e12e957c6226aa4b41ef8c5f900b6cb9be6a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa574b3b119df4f110390e5d87e12e957c6226aa4b41ef8c5f900b6cb9be6a3c->enter($__internal_fa574b3b119df4f110390e5d87e12e957c6226aa4b41ef8c5f900b6cb9be6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fa574b3b119df4f110390e5d87e12e957c6226aa4b41ef8c5f900b6cb9be6a3c->leave($__internal_fa574b3b119df4f110390e5d87e12e957c6226aa4b41ef8c5f900b6cb9be6a3c_prof);

        
        $__internal_5688bd71aa91d493f9701e279d3386989b7f0b406ea582e3e12901a99a6df77e->leave($__internal_5688bd71aa91d493f9701e279d3386989b7f0b406ea582e3e12901a99a6df77e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
