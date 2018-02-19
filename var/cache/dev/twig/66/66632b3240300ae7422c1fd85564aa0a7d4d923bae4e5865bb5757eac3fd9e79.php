<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_6bdf227c647cbaef2e404cfb179ed806bff4fdde409853b6995a668d44fd7b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdf227c647cbaef2e404cfb179ed806bff4fdde409853b6995a668d44fd7b32->enter($__internal_6bdf227c647cbaef2e404cfb179ed806bff4fdde409853b6995a668d44fd7b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_73023cfaba4a6186ab65d02a25238648c6ae164c7fc4672b5d69632501eabd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73023cfaba4a6186ab65d02a25238648c6ae164c7fc4672b5d69632501eabd5f->enter($__internal_73023cfaba4a6186ab65d02a25238648c6ae164c7fc4672b5d69632501eabd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6bdf227c647cbaef2e404cfb179ed806bff4fdde409853b6995a668d44fd7b32->leave($__internal_6bdf227c647cbaef2e404cfb179ed806bff4fdde409853b6995a668d44fd7b32_prof);

        
        $__internal_73023cfaba4a6186ab65d02a25238648c6ae164c7fc4672b5d69632501eabd5f->leave($__internal_73023cfaba4a6186ab65d02a25238648c6ae164c7fc4672b5d69632501eabd5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
