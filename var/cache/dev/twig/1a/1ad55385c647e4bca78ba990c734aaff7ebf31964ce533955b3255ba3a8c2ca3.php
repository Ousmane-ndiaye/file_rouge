<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_76a7256d35bd9e319d7603346985b1406cbdc1b1868fd2ecb6235f42a546b2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a7256d35bd9e319d7603346985b1406cbdc1b1868fd2ecb6235f42a546b2c6->enter($__internal_76a7256d35bd9e319d7603346985b1406cbdc1b1868fd2ecb6235f42a546b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_37db260d87993361b8b63b3d62f2ad9b2dfe58fc5b1359544d45497f364f1228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37db260d87993361b8b63b3d62f2ad9b2dfe58fc5b1359544d45497f364f1228->enter($__internal_37db260d87993361b8b63b3d62f2ad9b2dfe58fc5b1359544d45497f364f1228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_76a7256d35bd9e319d7603346985b1406cbdc1b1868fd2ecb6235f42a546b2c6->leave($__internal_76a7256d35bd9e319d7603346985b1406cbdc1b1868fd2ecb6235f42a546b2c6_prof);

        
        $__internal_37db260d87993361b8b63b3d62f2ad9b2dfe58fc5b1359544d45497f364f1228->leave($__internal_37db260d87993361b8b63b3d62f2ad9b2dfe58fc5b1359544d45497f364f1228_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
