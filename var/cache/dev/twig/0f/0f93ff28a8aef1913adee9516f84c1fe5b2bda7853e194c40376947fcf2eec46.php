<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
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
        $__internal_649ae4a87e3b8f83cbc8b09920d2316a6e72f41957e2ac4a378ca23e94a39a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649ae4a87e3b8f83cbc8b09920d2316a6e72f41957e2ac4a378ca23e94a39a48->enter($__internal_649ae4a87e3b8f83cbc8b09920d2316a6e72f41957e2ac4a378ca23e94a39a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7dae0aea558532739e9b726162e995fb877543076216e38cc8447d21cb4f82e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dae0aea558532739e9b726162e995fb877543076216e38cc8447d21cb4f82e3->enter($__internal_7dae0aea558532739e9b726162e995fb877543076216e38cc8447d21cb4f82e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_649ae4a87e3b8f83cbc8b09920d2316a6e72f41957e2ac4a378ca23e94a39a48->leave($__internal_649ae4a87e3b8f83cbc8b09920d2316a6e72f41957e2ac4a378ca23e94a39a48_prof);

        
        $__internal_7dae0aea558532739e9b726162e995fb877543076216e38cc8447d21cb4f82e3->leave($__internal_7dae0aea558532739e9b726162e995fb877543076216e38cc8447d21cb4f82e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
