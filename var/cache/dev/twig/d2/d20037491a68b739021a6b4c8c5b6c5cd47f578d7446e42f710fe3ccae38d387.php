<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7d9f8e8fbcea9b3c8677f32fbe40fda8a081396a22a0e80f2a6a54f024dde09 extends Twig_Template
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
        $__internal_36c223a634b8bc79b858a7be853efa10ba636fd0ce8f303f1e1361feb1f373d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c223a634b8bc79b858a7be853efa10ba636fd0ce8f303f1e1361feb1f373d1->enter($__internal_36c223a634b8bc79b858a7be853efa10ba636fd0ce8f303f1e1361feb1f373d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f6ca88dbb8dea85f46db4aad063cd0d8da44286aad4a5f83f82a2b0c50b5ca70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ca88dbb8dea85f46db4aad063cd0d8da44286aad4a5f83f82a2b0c50b5ca70->enter($__internal_f6ca88dbb8dea85f46db4aad063cd0d8da44286aad4a5f83f82a2b0c50b5ca70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_36c223a634b8bc79b858a7be853efa10ba636fd0ce8f303f1e1361feb1f373d1->leave($__internal_36c223a634b8bc79b858a7be853efa10ba636fd0ce8f303f1e1361feb1f373d1_prof);

        
        $__internal_f6ca88dbb8dea85f46db4aad063cd0d8da44286aad4a5f83f82a2b0c50b5ca70->leave($__internal_f6ca88dbb8dea85f46db4aad063cd0d8da44286aad4a5f83f82a2b0c50b5ca70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
