<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ae729d663d079a4e456c7a0a0f232b3a913c0127ba20b74de2ae9d7360b6229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae729d663d079a4e456c7a0a0f232b3a913c0127ba20b74de2ae9d7360b6229->enter($__internal_6ae729d663d079a4e456c7a0a0f232b3a913c0127ba20b74de2ae9d7360b6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6318184f5ed61b5210a46a4998abe1c3240aef301f291e3e06577dc78ceb2ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6318184f5ed61b5210a46a4998abe1c3240aef301f291e3e06577dc78ceb2ef4->enter($__internal_6318184f5ed61b5210a46a4998abe1c3240aef301f291e3e06577dc78ceb2ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae729d663d079a4e456c7a0a0f232b3a913c0127ba20b74de2ae9d7360b6229->leave($__internal_6ae729d663d079a4e456c7a0a0f232b3a913c0127ba20b74de2ae9d7360b6229_prof);

        
        $__internal_6318184f5ed61b5210a46a4998abe1c3240aef301f291e3e06577dc78ceb2ef4->leave($__internal_6318184f5ed61b5210a46a4998abe1c3240aef301f291e3e06577dc78ceb2ef4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3dc748974c84f542efa9612f68f5a98749831afc1eb98cab8bee1944afd6df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3dc748974c84f542efa9612f68f5a98749831afc1eb98cab8bee1944afd6df1->enter($__internal_c3dc748974c84f542efa9612f68f5a98749831afc1eb98cab8bee1944afd6df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d369925661e122078aed32ea5c6f848d7bc96c4ce4d8320fa5be54f3c0ac315c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d369925661e122078aed32ea5c6f848d7bc96c4ce4d8320fa5be54f3c0ac315c->enter($__internal_d369925661e122078aed32ea5c6f848d7bc96c4ce4d8320fa5be54f3c0ac315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d369925661e122078aed32ea5c6f848d7bc96c4ce4d8320fa5be54f3c0ac315c->leave($__internal_d369925661e122078aed32ea5c6f848d7bc96c4ce4d8320fa5be54f3c0ac315c_prof);

        
        $__internal_c3dc748974c84f542efa9612f68f5a98749831afc1eb98cab8bee1944afd6df1->leave($__internal_c3dc748974c84f542efa9612f68f5a98749831afc1eb98cab8bee1944afd6df1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_943bdc8dfc4ee75d6c30de39eb15c3fecd8c48e295678cd76966fffad2ce78d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943bdc8dfc4ee75d6c30de39eb15c3fecd8c48e295678cd76966fffad2ce78d3->enter($__internal_943bdc8dfc4ee75d6c30de39eb15c3fecd8c48e295678cd76966fffad2ce78d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2fd869e6633d1798ce2c129c971bc9fe60e3d537dccb630559cc6223da5eeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fd869e6633d1798ce2c129c971bc9fe60e3d537dccb630559cc6223da5eeac->enter($__internal_d2fd869e6633d1798ce2c129c971bc9fe60e3d537dccb630559cc6223da5eeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d2fd869e6633d1798ce2c129c971bc9fe60e3d537dccb630559cc6223da5eeac->leave($__internal_d2fd869e6633d1798ce2c129c971bc9fe60e3d537dccb630559cc6223da5eeac_prof);

        
        $__internal_943bdc8dfc4ee75d6c30de39eb15c3fecd8c48e295678cd76966fffad2ce78d3->leave($__internal_943bdc8dfc4ee75d6c30de39eb15c3fecd8c48e295678cd76966fffad2ce78d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
