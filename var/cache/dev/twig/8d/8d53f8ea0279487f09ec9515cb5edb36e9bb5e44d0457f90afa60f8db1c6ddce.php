<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_e8df62634be98b7c32128d0e51241e16bb0f0c8c05041801445c2f3a96549c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8df62634be98b7c32128d0e51241e16bb0f0c8c05041801445c2f3a96549c0c->enter($__internal_e8df62634be98b7c32128d0e51241e16bb0f0c8c05041801445c2f3a96549c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d2e8b73f1c4e5c166de7a4946dfd6eaae0cf471e4a2ceb81158be8c9be0204d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e8b73f1c4e5c166de7a4946dfd6eaae0cf471e4a2ceb81158be8c9be0204d0->enter($__internal_d2e8b73f1c4e5c166de7a4946dfd6eaae0cf471e4a2ceb81158be8c9be0204d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e8df62634be98b7c32128d0e51241e16bb0f0c8c05041801445c2f3a96549c0c->leave($__internal_e8df62634be98b7c32128d0e51241e16bb0f0c8c05041801445c2f3a96549c0c_prof);

        
        $__internal_d2e8b73f1c4e5c166de7a4946dfd6eaae0cf471e4a2ceb81158be8c9be0204d0->leave($__internal_d2e8b73f1c4e5c166de7a4946dfd6eaae0cf471e4a2ceb81158be8c9be0204d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
