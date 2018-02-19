<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c1a87904b4fba1800c6f0240b0ce2678c5a771c0de4fc173729bd5d5f9df1f11 extends Twig_Template
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
        $__internal_d89877d3ab6229902b9e045a1481a30f04efaae93be109c6a4c4f9165522634a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89877d3ab6229902b9e045a1481a30f04efaae93be109c6a4c4f9165522634a->enter($__internal_d89877d3ab6229902b9e045a1481a30f04efaae93be109c6a4c4f9165522634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_08355f972d606b5388d6fb271b2a69eb971f449ec3eba77061f8bf06050f136d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08355f972d606b5388d6fb271b2a69eb971f449ec3eba77061f8bf06050f136d->enter($__internal_08355f972d606b5388d6fb271b2a69eb971f449ec3eba77061f8bf06050f136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d89877d3ab6229902b9e045a1481a30f04efaae93be109c6a4c4f9165522634a->leave($__internal_d89877d3ab6229902b9e045a1481a30f04efaae93be109c6a4c4f9165522634a_prof);

        
        $__internal_08355f972d606b5388d6fb271b2a69eb971f449ec3eba77061f8bf06050f136d->leave($__internal_08355f972d606b5388d6fb271b2a69eb971f449ec3eba77061f8bf06050f136d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
