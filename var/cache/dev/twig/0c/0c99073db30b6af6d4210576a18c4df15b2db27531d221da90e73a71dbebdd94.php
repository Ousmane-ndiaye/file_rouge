<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_429b63d82b76ba342e64dc6fb979cc0fd52a6830713c3dfdb5d6afc9ede21cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429b63d82b76ba342e64dc6fb979cc0fd52a6830713c3dfdb5d6afc9ede21cb4->enter($__internal_429b63d82b76ba342e64dc6fb979cc0fd52a6830713c3dfdb5d6afc9ede21cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8a1b5fd4177c9789c44998ea4d2710b812d035b878210515c02691e24bb3a01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1b5fd4177c9789c44998ea4d2710b812d035b878210515c02691e24bb3a01f->enter($__internal_8a1b5fd4177c9789c44998ea4d2710b812d035b878210515c02691e24bb3a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429b63d82b76ba342e64dc6fb979cc0fd52a6830713c3dfdb5d6afc9ede21cb4->leave($__internal_429b63d82b76ba342e64dc6fb979cc0fd52a6830713c3dfdb5d6afc9ede21cb4_prof);

        
        $__internal_8a1b5fd4177c9789c44998ea4d2710b812d035b878210515c02691e24bb3a01f->leave($__internal_8a1b5fd4177c9789c44998ea4d2710b812d035b878210515c02691e24bb3a01f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b83781245422eddbb6dce47a9ef2444ab777cc3bc4512355e6134cb6c333ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b83781245422eddbb6dce47a9ef2444ab777cc3bc4512355e6134cb6c333ec6->enter($__internal_1b83781245422eddbb6dce47a9ef2444ab777cc3bc4512355e6134cb6c333ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6aa7917ec11ac4cd8f12397bc450ea075091015d9aada51bf177865ede3edb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa7917ec11ac4cd8f12397bc450ea075091015d9aada51bf177865ede3edb6f->enter($__internal_6aa7917ec11ac4cd8f12397bc450ea075091015d9aada51bf177865ede3edb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6aa7917ec11ac4cd8f12397bc450ea075091015d9aada51bf177865ede3edb6f->leave($__internal_6aa7917ec11ac4cd8f12397bc450ea075091015d9aada51bf177865ede3edb6f_prof);

        
        $__internal_1b83781245422eddbb6dce47a9ef2444ab777cc3bc4512355e6134cb6c333ec6->leave($__internal_1b83781245422eddbb6dce47a9ef2444ab777cc3bc4512355e6134cb6c333ec6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_163b8ab16e499ca81cfa294c052e9a7e1d74a6b2a5665ac190f2f1b2c3bb7b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163b8ab16e499ca81cfa294c052e9a7e1d74a6b2a5665ac190f2f1b2c3bb7b8e->enter($__internal_163b8ab16e499ca81cfa294c052e9a7e1d74a6b2a5665ac190f2f1b2c3bb7b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95c2773ca677f73e211e22b85145ab1bebc86df93488f1c1d6b6e2d2d2087dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c2773ca677f73e211e22b85145ab1bebc86df93488f1c1d6b6e2d2d2087dd6->enter($__internal_95c2773ca677f73e211e22b85145ab1bebc86df93488f1c1d6b6e2d2d2087dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95c2773ca677f73e211e22b85145ab1bebc86df93488f1c1d6b6e2d2d2087dd6->leave($__internal_95c2773ca677f73e211e22b85145ab1bebc86df93488f1c1d6b6e2d2d2087dd6_prof);

        
        $__internal_163b8ab16e499ca81cfa294c052e9a7e1d74a6b2a5665ac190f2f1b2c3bb7b8e->leave($__internal_163b8ab16e499ca81cfa294c052e9a7e1d74a6b2a5665ac190f2f1b2c3bb7b8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71d0e3fca5227e1c3c3f942718f6822e50e92bdfbdab652ae53170ae2229abe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d0e3fca5227e1c3c3f942718f6822e50e92bdfbdab652ae53170ae2229abe3->enter($__internal_71d0e3fca5227e1c3c3f942718f6822e50e92bdfbdab652ae53170ae2229abe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b44c71141a084798be748176e8455ec528387588800463e7c379c3b37188a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b44c71141a084798be748176e8455ec528387588800463e7c379c3b37188a0f->enter($__internal_9b44c71141a084798be748176e8455ec528387588800463e7c379c3b37188a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b44c71141a084798be748176e8455ec528387588800463e7c379c3b37188a0f->leave($__internal_9b44c71141a084798be748176e8455ec528387588800463e7c379c3b37188a0f_prof);

        
        $__internal_71d0e3fca5227e1c3c3f942718f6822e50e92bdfbdab652ae53170ae2229abe3->leave($__internal_71d0e3fca5227e1c3c3f942718f6822e50e92bdfbdab652ae53170ae2229abe3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
