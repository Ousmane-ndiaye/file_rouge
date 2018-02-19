<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_47013fbdb960cc9ac32ac9a32cbd3053230270abdbd740fe815c49f74aac8e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47013fbdb960cc9ac32ac9a32cbd3053230270abdbd740fe815c49f74aac8e2d->enter($__internal_47013fbdb960cc9ac32ac9a32cbd3053230270abdbd740fe815c49f74aac8e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_936a96d68461ada0e40304900e2e40a89d2f5ced871ff7ce21349e8b1f6f5248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936a96d68461ada0e40304900e2e40a89d2f5ced871ff7ce21349e8b1f6f5248->enter($__internal_936a96d68461ada0e40304900e2e40a89d2f5ced871ff7ce21349e8b1f6f5248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_47013fbdb960cc9ac32ac9a32cbd3053230270abdbd740fe815c49f74aac8e2d->leave($__internal_47013fbdb960cc9ac32ac9a32cbd3053230270abdbd740fe815c49f74aac8e2d_prof);

        
        $__internal_936a96d68461ada0e40304900e2e40a89d2f5ced871ff7ce21349e8b1f6f5248->leave($__internal_936a96d68461ada0e40304900e2e40a89d2f5ced871ff7ce21349e8b1f6f5248_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
