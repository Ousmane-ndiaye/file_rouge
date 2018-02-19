<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cca74620389e62f31db21eab4681cf0d51937b03cb74831d990c76e61b956fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca74620389e62f31db21eab4681cf0d51937b03cb74831d990c76e61b956fd7->enter($__internal_cca74620389e62f31db21eab4681cf0d51937b03cb74831d990c76e61b956fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_103382d4432eb7f1b9ef34f8f4b99196b29ddae7d1f6fe88ecd151ddd4bc9758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103382d4432eb7f1b9ef34f8f4b99196b29ddae7d1f6fe88ecd151ddd4bc9758->enter($__internal_103382d4432eb7f1b9ef34f8f4b99196b29ddae7d1f6fe88ecd151ddd4bc9758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca74620389e62f31db21eab4681cf0d51937b03cb74831d990c76e61b956fd7->leave($__internal_cca74620389e62f31db21eab4681cf0d51937b03cb74831d990c76e61b956fd7_prof);

        
        $__internal_103382d4432eb7f1b9ef34f8f4b99196b29ddae7d1f6fe88ecd151ddd4bc9758->leave($__internal_103382d4432eb7f1b9ef34f8f4b99196b29ddae7d1f6fe88ecd151ddd4bc9758_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cfbb18bfdb1cc6990e5976c7a0067a412dfed07de7b5628e2cbcc869611c8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfbb18bfdb1cc6990e5976c7a0067a412dfed07de7b5628e2cbcc869611c8b0->enter($__internal_1cfbb18bfdb1cc6990e5976c7a0067a412dfed07de7b5628e2cbcc869611c8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe53a5ad9fe77da5d015f8ec36f35cecdcec99f875bed0b41b3245ba3ea554d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe53a5ad9fe77da5d015f8ec36f35cecdcec99f875bed0b41b3245ba3ea554d5->enter($__internal_fe53a5ad9fe77da5d015f8ec36f35cecdcec99f875bed0b41b3245ba3ea554d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fe53a5ad9fe77da5d015f8ec36f35cecdcec99f875bed0b41b3245ba3ea554d5->leave($__internal_fe53a5ad9fe77da5d015f8ec36f35cecdcec99f875bed0b41b3245ba3ea554d5_prof);

        
        $__internal_1cfbb18bfdb1cc6990e5976c7a0067a412dfed07de7b5628e2cbcc869611c8b0->leave($__internal_1cfbb18bfdb1cc6990e5976c7a0067a412dfed07de7b5628e2cbcc869611c8b0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6ea8a93e25b250c9d47910bccaf322d2137cdf65b1c20792bebdd0762f902a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ea8a93e25b250c9d47910bccaf322d2137cdf65b1c20792bebdd0762f902a4->enter($__internal_a6ea8a93e25b250c9d47910bccaf322d2137cdf65b1c20792bebdd0762f902a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4e82b4b9859be03095258f67e685d57b4ba2483c2755f4a28d858ed8c32d6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e82b4b9859be03095258f67e685d57b4ba2483c2755f4a28d858ed8c32d6ca->enter($__internal_d4e82b4b9859be03095258f67e685d57b4ba2483c2755f4a28d858ed8c32d6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4e82b4b9859be03095258f67e685d57b4ba2483c2755f4a28d858ed8c32d6ca->leave($__internal_d4e82b4b9859be03095258f67e685d57b4ba2483c2755f4a28d858ed8c32d6ca_prof);

        
        $__internal_a6ea8a93e25b250c9d47910bccaf322d2137cdf65b1c20792bebdd0762f902a4->leave($__internal_a6ea8a93e25b250c9d47910bccaf322d2137cdf65b1c20792bebdd0762f902a4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2a0b15fc1ed52a21939ab1e32ee98bc493128d9e2af918395dcf99cde774b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2a0b15fc1ed52a21939ab1e32ee98bc493128d9e2af918395dcf99cde774b6->enter($__internal_0d2a0b15fc1ed52a21939ab1e32ee98bc493128d9e2af918395dcf99cde774b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82d347567955a3300b6f4d65593d04bddd1b74082ffc13442054f4d79c8da893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d347567955a3300b6f4d65593d04bddd1b74082ffc13442054f4d79c8da893->enter($__internal_82d347567955a3300b6f4d65593d04bddd1b74082ffc13442054f4d79c8da893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_82d347567955a3300b6f4d65593d04bddd1b74082ffc13442054f4d79c8da893->leave($__internal_82d347567955a3300b6f4d65593d04bddd1b74082ffc13442054f4d79c8da893_prof);

        
        $__internal_0d2a0b15fc1ed52a21939ab1e32ee98bc493128d9e2af918395dcf99cde774b6->leave($__internal_0d2a0b15fc1ed52a21939ab1e32ee98bc493128d9e2af918395dcf99cde774b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
