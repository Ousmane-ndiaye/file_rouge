<?php

/* RESERVATIONBundle:Default:index.html.twig */
class __TwigTemplate_76eba2022b4542c215ae0eb31fdadb6088cfdd99120253745feb5bd1a372463e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RESERVATIONBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cff729c0f05e4d80915a532cdd064c900a309f628eacbf6c0bb7dd2d706a5be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff729c0f05e4d80915a532cdd064c900a309f628eacbf6c0bb7dd2d706a5be8->enter($__internal_cff729c0f05e4d80915a532cdd064c900a309f628eacbf6c0bb7dd2d706a5be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_9824961660099f496eedaad3f72f877c30b609329b4b8dc6555246f7a997ed81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9824961660099f496eedaad3f72f877c30b609329b4b8dc6555246f7a997ed81->enter($__internal_9824961660099f496eedaad3f72f877c30b609329b4b8dc6555246f7a997ed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff729c0f05e4d80915a532cdd064c900a309f628eacbf6c0bb7dd2d706a5be8->leave($__internal_cff729c0f05e4d80915a532cdd064c900a309f628eacbf6c0bb7dd2d706a5be8_prof);

        
        $__internal_9824961660099f496eedaad3f72f877c30b609329b4b8dc6555246f7a997ed81->leave($__internal_9824961660099f496eedaad3f72f877c30b609329b4b8dc6555246f7a997ed81_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "RESERVATIONBundle:Default:index.html.twig", "/var/www/html/soultana.sn/src/SNT/ReservationBundle/Resources/views/Default/index.html.twig");
    }
}
