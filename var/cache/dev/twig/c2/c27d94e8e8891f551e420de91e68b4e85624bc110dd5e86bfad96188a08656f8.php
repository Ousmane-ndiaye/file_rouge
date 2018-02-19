<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63c41ed2f6dd562af9bde8e407754fabe00fab0849d551cc02e197335db4a111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c41ed2f6dd562af9bde8e407754fabe00fab0849d551cc02e197335db4a111->enter($__internal_63c41ed2f6dd562af9bde8e407754fabe00fab0849d551cc02e197335db4a111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6b6f68b20d1620c670431c893e2edd3135fb4c8574a518bcae0df76a9dcb833c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f68b20d1620c670431c893e2edd3135fb4c8574a518bcae0df76a9dcb833c->enter($__internal_6b6f68b20d1620c670431c893e2edd3135fb4c8574a518bcae0df76a9dcb833c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_63c41ed2f6dd562af9bde8e407754fabe00fab0849d551cc02e197335db4a111->leave($__internal_63c41ed2f6dd562af9bde8e407754fabe00fab0849d551cc02e197335db4a111_prof);

        
        $__internal_6b6f68b20d1620c670431c893e2edd3135fb4c8574a518bcae0df76a9dcb833c->leave($__internal_6b6f68b20d1620c670431c893e2edd3135fb4c8574a518bcae0df76a9dcb833c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66d357c567e3327ab6e659fd70262ce1c33d5394db956c129c442d6b5394f059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d357c567e3327ab6e659fd70262ce1c33d5394db956c129c442d6b5394f059->enter($__internal_66d357c567e3327ab6e659fd70262ce1c33d5394db956c129c442d6b5394f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0356523b4b44faf61211a9bc8ec0ab8f2c01f6fdb2d48a392354a67a3b542efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0356523b4b44faf61211a9bc8ec0ab8f2c01f6fdb2d48a392354a67a3b542efe->enter($__internal_0356523b4b44faf61211a9bc8ec0ab8f2c01f6fdb2d48a392354a67a3b542efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0356523b4b44faf61211a9bc8ec0ab8f2c01f6fdb2d48a392354a67a3b542efe->leave($__internal_0356523b4b44faf61211a9bc8ec0ab8f2c01f6fdb2d48a392354a67a3b542efe_prof);

        
        $__internal_66d357c567e3327ab6e659fd70262ce1c33d5394db956c129c442d6b5394f059->leave($__internal_66d357c567e3327ab6e659fd70262ce1c33d5394db956c129c442d6b5394f059_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_03e9424a02129bd6e8284be0fd108c1f86d3c260a5609c1f2bae55b8dd2f7567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e9424a02129bd6e8284be0fd108c1f86d3c260a5609c1f2bae55b8dd2f7567->enter($__internal_03e9424a02129bd6e8284be0fd108c1f86d3c260a5609c1f2bae55b8dd2f7567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12f5fb21977cf0f80696e39a71293675b61f4e99e1d2b0c0adc49fe8599db6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f5fb21977cf0f80696e39a71293675b61f4e99e1d2b0c0adc49fe8599db6db->enter($__internal_12f5fb21977cf0f80696e39a71293675b61f4e99e1d2b0c0adc49fe8599db6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_12f5fb21977cf0f80696e39a71293675b61f4e99e1d2b0c0adc49fe8599db6db->leave($__internal_12f5fb21977cf0f80696e39a71293675b61f4e99e1d2b0c0adc49fe8599db6db_prof);

        
        $__internal_03e9424a02129bd6e8284be0fd108c1f86d3c260a5609c1f2bae55b8dd2f7567->leave($__internal_03e9424a02129bd6e8284be0fd108c1f86d3c260a5609c1f2bae55b8dd2f7567_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_842fc0bf6887b2c2b706897bf7629de917ca67e45d98e303d152deeb68a6da74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842fc0bf6887b2c2b706897bf7629de917ca67e45d98e303d152deeb68a6da74->enter($__internal_842fc0bf6887b2c2b706897bf7629de917ca67e45d98e303d152deeb68a6da74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8fb894d7883cb84ce17052b115bdd121b78759fc3e0be374304ef19cf8604c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fb894d7883cb84ce17052b115bdd121b78759fc3e0be374304ef19cf8604c3->enter($__internal_b8fb894d7883cb84ce17052b115bdd121b78759fc3e0be374304ef19cf8604c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8fb894d7883cb84ce17052b115bdd121b78759fc3e0be374304ef19cf8604c3->leave($__internal_b8fb894d7883cb84ce17052b115bdd121b78759fc3e0be374304ef19cf8604c3_prof);

        
        $__internal_842fc0bf6887b2c2b706897bf7629de917ca67e45d98e303d152deeb68a6da74->leave($__internal_842fc0bf6887b2c2b706897bf7629de917ca67e45d98e303d152deeb68a6da74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
