<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3531d09e7dbfcca467ddddb67130cc4dd9f87f1e74d383b586a2cef6f1ab4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3531d09e7dbfcca467ddddb67130cc4dd9f87f1e74d383b586a2cef6f1ab4b3->enter($__internal_a3531d09e7dbfcca467ddddb67130cc4dd9f87f1e74d383b586a2cef6f1ab4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_743859b2471206f21465c1d3982a3d6dc342cf8aa809389e775b0b25be0579cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743859b2471206f21465c1d3982a3d6dc342cf8aa809389e775b0b25be0579cd->enter($__internal_743859b2471206f21465c1d3982a3d6dc342cf8aa809389e775b0b25be0579cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3531d09e7dbfcca467ddddb67130cc4dd9f87f1e74d383b586a2cef6f1ab4b3->leave($__internal_a3531d09e7dbfcca467ddddb67130cc4dd9f87f1e74d383b586a2cef6f1ab4b3_prof);

        
        $__internal_743859b2471206f21465c1d3982a3d6dc342cf8aa809389e775b0b25be0579cd->leave($__internal_743859b2471206f21465c1d3982a3d6dc342cf8aa809389e775b0b25be0579cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94aba9b2bc785dce1dffec68dbd82b3ab6058b5eae615a44a123a18989845f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94aba9b2bc785dce1dffec68dbd82b3ab6058b5eae615a44a123a18989845f4a->enter($__internal_94aba9b2bc785dce1dffec68dbd82b3ab6058b5eae615a44a123a18989845f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96439b23b357a39ab5377a83416e205e5ccc10682c87ed7897a7b578d1f05406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96439b23b357a39ab5377a83416e205e5ccc10682c87ed7897a7b578d1f05406->enter($__internal_96439b23b357a39ab5377a83416e205e5ccc10682c87ed7897a7b578d1f05406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_96439b23b357a39ab5377a83416e205e5ccc10682c87ed7897a7b578d1f05406->leave($__internal_96439b23b357a39ab5377a83416e205e5ccc10682c87ed7897a7b578d1f05406_prof);

        
        $__internal_94aba9b2bc785dce1dffec68dbd82b3ab6058b5eae615a44a123a18989845f4a->leave($__internal_94aba9b2bc785dce1dffec68dbd82b3ab6058b5eae615a44a123a18989845f4a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64b208cae4aa469f77c7d062cd141f5261043b27b6a57f6ef34a99924657ea79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b208cae4aa469f77c7d062cd141f5261043b27b6a57f6ef34a99924657ea79->enter($__internal_64b208cae4aa469f77c7d062cd141f5261043b27b6a57f6ef34a99924657ea79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d86edd7816c7afbc3f2eaecbd0071b180be46ef8902c441e722ea805ce09921c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86edd7816c7afbc3f2eaecbd0071b180be46ef8902c441e722ea805ce09921c->enter($__internal_d86edd7816c7afbc3f2eaecbd0071b180be46ef8902c441e722ea805ce09921c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d86edd7816c7afbc3f2eaecbd0071b180be46ef8902c441e722ea805ce09921c->leave($__internal_d86edd7816c7afbc3f2eaecbd0071b180be46ef8902c441e722ea805ce09921c_prof);

        
        $__internal_64b208cae4aa469f77c7d062cd141f5261043b27b6a57f6ef34a99924657ea79->leave($__internal_64b208cae4aa469f77c7d062cd141f5261043b27b6a57f6ef34a99924657ea79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0a24d5f2cae39319ffd2795d3e978f871e6871586ad51835d8ac809d07d4271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a24d5f2cae39319ffd2795d3e978f871e6871586ad51835d8ac809d07d4271->enter($__internal_f0a24d5f2cae39319ffd2795d3e978f871e6871586ad51835d8ac809d07d4271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68ee80d3b8dbc71ffabe21542234b6a16ef5fadd652e3b548b6660bf4cde52b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee80d3b8dbc71ffabe21542234b6a16ef5fadd652e3b548b6660bf4cde52b1->enter($__internal_68ee80d3b8dbc71ffabe21542234b6a16ef5fadd652e3b548b6660bf4cde52b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_68ee80d3b8dbc71ffabe21542234b6a16ef5fadd652e3b548b6660bf4cde52b1->leave($__internal_68ee80d3b8dbc71ffabe21542234b6a16ef5fadd652e3b548b6660bf4cde52b1_prof);

        
        $__internal_f0a24d5f2cae39319ffd2795d3e978f871e6871586ad51835d8ac809d07d4271->leave($__internal_f0a24d5f2cae39319ffd2795d3e978f871e6871586ad51835d8ac809d07d4271_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
