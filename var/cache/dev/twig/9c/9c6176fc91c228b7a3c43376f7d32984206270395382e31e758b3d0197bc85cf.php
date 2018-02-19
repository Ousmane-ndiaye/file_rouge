<?php

/* :reservation:index.html.twig */
class __TwigTemplate_5165123f1ce604fc509cc5736164d4bfe37af9e34b0a16dc78fb87b4df26d37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9668a55c2ee364c9ab031b7cb4a424991254231dc864613a938689a1df8d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9668a55c2ee364c9ab031b7cb4a424991254231dc864613a938689a1df8d4e->enter($__internal_4e9668a55c2ee364c9ab031b7cb4a424991254231dc864613a938689a1df8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_6cb6608958b470f6a4f7532a04b91abfedb290d8b9f1bf0fc53b304a468b3895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb6608958b470f6a4f7532a04b91abfedb290d8b9f1bf0fc53b304a468b3895->enter($__internal_6cb6608958b470f6a4f7532a04b91abfedb290d8b9f1bf0fc53b304a468b3895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9668a55c2ee364c9ab031b7cb4a424991254231dc864613a938689a1df8d4e->leave($__internal_4e9668a55c2ee364c9ab031b7cb4a424991254231dc864613a938689a1df8d4e_prof);

        
        $__internal_6cb6608958b470f6a4f7532a04b91abfedb290d8b9f1bf0fc53b304a468b3895->leave($__internal_6cb6608958b470f6a4f7532a04b91abfedb290d8b9f1bf0fc53b304a468b3895_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f0aa6f5a68d2ae95fecd8e1919c7bfc6f92c38ad4528f2ee282dfd5bfb700a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f0aa6f5a68d2ae95fecd8e1919c7bfc6f92c38ad4528f2ee282dfd5bfb700a->enter($__internal_c2f0aa6f5a68d2ae95fecd8e1919c7bfc6f92c38ad4528f2ee282dfd5bfb700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01aee1ae3863732fa72733789a8183779764eb954ec859fa5a101cb7f45d938f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01aee1ae3863732fa72733789a8183779764eb954ec859fa5a101cb7f45d938f->enter($__internal_01aee1ae3863732fa72733789a8183779764eb954ec859fa5a101cb7f45d938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_01aee1ae3863732fa72733789a8183779764eb954ec859fa5a101cb7f45d938f->leave($__internal_01aee1ae3863732fa72733789a8183779764eb954ec859fa5a101cb7f45d938f_prof);

        
        $__internal_c2f0aa6f5a68d2ae95fecd8e1919c7bfc6f92c38ad4528f2ee282dfd5bfb700a->leave($__internal_c2f0aa6f5a68d2ae95fecd8e1919c7bfc6f92c38ad4528f2ee282dfd5bfb700a_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}", ":reservation:index.html.twig", "/var/www/html/soultana.sn/app/Resources/views/reservation/index.html.twig");
    }
}
