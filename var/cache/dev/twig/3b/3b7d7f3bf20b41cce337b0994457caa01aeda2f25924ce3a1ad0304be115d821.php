<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_d3455d60afa863d3778325cf42113156055c6bf43ad866d65330e6d445f9048f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3455d60afa863d3778325cf42113156055c6bf43ad866d65330e6d445f9048f->enter($__internal_d3455d60afa863d3778325cf42113156055c6bf43ad866d65330e6d445f9048f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_91078a945a3a260c727dacf998d4074b77ee75bd661df6f8d8e8c1b882a818ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91078a945a3a260c727dacf998d4074b77ee75bd661df6f8d8e8c1b882a818ec->enter($__internal_91078a945a3a260c727dacf998d4074b77ee75bd661df6f8d8e8c1b882a818ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d3455d60afa863d3778325cf42113156055c6bf43ad866d65330e6d445f9048f->leave($__internal_d3455d60afa863d3778325cf42113156055c6bf43ad866d65330e6d445f9048f_prof);

        
        $__internal_91078a945a3a260c727dacf998d4074b77ee75bd661df6f8d8e8c1b882a818ec->leave($__internal_91078a945a3a260c727dacf998d4074b77ee75bd661df6f8d8e8c1b882a818ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
