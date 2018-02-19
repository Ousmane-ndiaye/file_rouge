<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_b05ab3faff64de69b65a2d7b223aff5465e0f75c73f2cc506adb282bf620559f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05ab3faff64de69b65a2d7b223aff5465e0f75c73f2cc506adb282bf620559f->enter($__internal_b05ab3faff64de69b65a2d7b223aff5465e0f75c73f2cc506adb282bf620559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_59f72689382f84c391ab26a94f3756b74ac52ff1c28ffa8ffe15ad3314670141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f72689382f84c391ab26a94f3756b74ac52ff1c28ffa8ffe15ad3314670141->enter($__internal_59f72689382f84c391ab26a94f3756b74ac52ff1c28ffa8ffe15ad3314670141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b05ab3faff64de69b65a2d7b223aff5465e0f75c73f2cc506adb282bf620559f->leave($__internal_b05ab3faff64de69b65a2d7b223aff5465e0f75c73f2cc506adb282bf620559f_prof);

        
        $__internal_59f72689382f84c391ab26a94f3756b74ac52ff1c28ffa8ffe15ad3314670141->leave($__internal_59f72689382f84c391ab26a94f3756b74ac52ff1c28ffa8ffe15ad3314670141_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
