<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_d95e510d1f1b9394109764f15ae2b1d3032c7ed2cff0fc35505e9c85ba0fd8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95e510d1f1b9394109764f15ae2b1d3032c7ed2cff0fc35505e9c85ba0fd8f1->enter($__internal_d95e510d1f1b9394109764f15ae2b1d3032c7ed2cff0fc35505e9c85ba0fd8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_63a1a59444062cfb8500ada8d217a1fe75bd3307105ed5e3efec9cba7fe2e772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a1a59444062cfb8500ada8d217a1fe75bd3307105ed5e3efec9cba7fe2e772->enter($__internal_63a1a59444062cfb8500ada8d217a1fe75bd3307105ed5e3efec9cba7fe2e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d95e510d1f1b9394109764f15ae2b1d3032c7ed2cff0fc35505e9c85ba0fd8f1->leave($__internal_d95e510d1f1b9394109764f15ae2b1d3032c7ed2cff0fc35505e9c85ba0fd8f1_prof);

        
        $__internal_63a1a59444062cfb8500ada8d217a1fe75bd3307105ed5e3efec9cba7fe2e772->leave($__internal_63a1a59444062cfb8500ada8d217a1fe75bd3307105ed5e3efec9cba7fe2e772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
