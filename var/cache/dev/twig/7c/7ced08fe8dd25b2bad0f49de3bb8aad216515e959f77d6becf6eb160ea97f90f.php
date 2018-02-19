<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3304deba1778fafff4dc6faa6381467b305ea7d7458b5a7a7d0cf9d83e363134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3304deba1778fafff4dc6faa6381467b305ea7d7458b5a7a7d0cf9d83e363134->enter($__internal_3304deba1778fafff4dc6faa6381467b305ea7d7458b5a7a7d0cf9d83e363134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_99d095c003441548aff31b66d024e5b311b606c2998c23697304f7d14b51a139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d095c003441548aff31b66d024e5b311b606c2998c23697304f7d14b51a139->enter($__internal_99d095c003441548aff31b66d024e5b311b606c2998c23697304f7d14b51a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3304deba1778fafff4dc6faa6381467b305ea7d7458b5a7a7d0cf9d83e363134->leave($__internal_3304deba1778fafff4dc6faa6381467b305ea7d7458b5a7a7d0cf9d83e363134_prof);

        
        $__internal_99d095c003441548aff31b66d024e5b311b606c2998c23697304f7d14b51a139->leave($__internal_99d095c003441548aff31b66d024e5b311b606c2998c23697304f7d14b51a139_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7f4ff77026ab7d35c87997e01f08277e82c62f5dbf1ac643ed3cce35f67a10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f4ff77026ab7d35c87997e01f08277e82c62f5dbf1ac643ed3cce35f67a10d->enter($__internal_f7f4ff77026ab7d35c87997e01f08277e82c62f5dbf1ac643ed3cce35f67a10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ea9b7564679204e3143b86e4f1cd4044f974c0b4d02e15ef6516c25d7982163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea9b7564679204e3143b86e4f1cd4044f974c0b4d02e15ef6516c25d7982163->enter($__internal_1ea9b7564679204e3143b86e4f1cd4044f974c0b4d02e15ef6516c25d7982163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1ea9b7564679204e3143b86e4f1cd4044f974c0b4d02e15ef6516c25d7982163->leave($__internal_1ea9b7564679204e3143b86e4f1cd4044f974c0b4d02e15ef6516c25d7982163_prof);

        
        $__internal_f7f4ff77026ab7d35c87997e01f08277e82c62f5dbf1ac643ed3cce35f67a10d->leave($__internal_f7f4ff77026ab7d35c87997e01f08277e82c62f5dbf1ac643ed3cce35f67a10d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8167d7afbde489e7474f7cb76e64865247be5bb100ceafcb4f4bae6f4d4dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8167d7afbde489e7474f7cb76e64865247be5bb100ceafcb4f4bae6f4d4dc5->enter($__internal_de8167d7afbde489e7474f7cb76e64865247be5bb100ceafcb4f4bae6f4d4dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c629b073d1c63af5ac18241e60706ed4ab3dc93232694c83bdab64aa29b4bf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c629b073d1c63af5ac18241e60706ed4ab3dc93232694c83bdab64aa29b4bf16->enter($__internal_c629b073d1c63af5ac18241e60706ed4ab3dc93232694c83bdab64aa29b4bf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c629b073d1c63af5ac18241e60706ed4ab3dc93232694c83bdab64aa29b4bf16->leave($__internal_c629b073d1c63af5ac18241e60706ed4ab3dc93232694c83bdab64aa29b4bf16_prof);

        
        $__internal_de8167d7afbde489e7474f7cb76e64865247be5bb100ceafcb4f4bae6f4d4dc5->leave($__internal_de8167d7afbde489e7474f7cb76e64865247be5bb100ceafcb4f4bae6f4d4dc5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
