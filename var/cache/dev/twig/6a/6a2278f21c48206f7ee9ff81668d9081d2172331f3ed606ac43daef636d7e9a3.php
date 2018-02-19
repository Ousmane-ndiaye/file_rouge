<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_4ede528bae0622e4e1bc2475682d4da1465bda0ff912ce18e29a42e7ef75cf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ede528bae0622e4e1bc2475682d4da1465bda0ff912ce18e29a42e7ef75cf77->enter($__internal_4ede528bae0622e4e1bc2475682d4da1465bda0ff912ce18e29a42e7ef75cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_211200d6af661b346cbd8eb686a68d5f9b44d9f579a12e530e1b93306aa507c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211200d6af661b346cbd8eb686a68d5f9b44d9f579a12e530e1b93306aa507c6->enter($__internal_211200d6af661b346cbd8eb686a68d5f9b44d9f579a12e530e1b93306aa507c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4ede528bae0622e4e1bc2475682d4da1465bda0ff912ce18e29a42e7ef75cf77->leave($__internal_4ede528bae0622e4e1bc2475682d4da1465bda0ff912ce18e29a42e7ef75cf77_prof);

        
        $__internal_211200d6af661b346cbd8eb686a68d5f9b44d9f579a12e530e1b93306aa507c6->leave($__internal_211200d6af661b346cbd8eb686a68d5f9b44d9f579a12e530e1b93306aa507c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
