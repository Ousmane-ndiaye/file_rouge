<?php

/* reservation/connexion.html.twig */
class __TwigTemplate_23f5c3ec863c508fe51413a224ef8272125dc24ce425ba497d8a7626487b872a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/connexion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bda9c7963408c55ab2c19c5f2c5d421343820a69618fc2ae1084aafcaf903dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda9c7963408c55ab2c19c5f2c5d421343820a69618fc2ae1084aafcaf903dd5->enter($__internal_bda9c7963408c55ab2c19c5f2c5d421343820a69618fc2ae1084aafcaf903dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/connexion.html.twig"));

        $__internal_3ae96ef59e07e2ade296fc2df667bdda7525a8ce9e9a8df64bcc268f097c4a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae96ef59e07e2ade296fc2df667bdda7525a8ce9e9a8df64bcc268f097c4a08->enter($__internal_3ae96ef59e07e2ade296fc2df667bdda7525a8ce9e9a8df64bcc268f097c4a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda9c7963408c55ab2c19c5f2c5d421343820a69618fc2ae1084aafcaf903dd5->leave($__internal_bda9c7963408c55ab2c19c5f2c5d421343820a69618fc2ae1084aafcaf903dd5_prof);

        
        $__internal_3ae96ef59e07e2ade296fc2df667bdda7525a8ce9e9a8df64bcc268f097c4a08->leave($__internal_3ae96ef59e07e2ade296fc2df667bdda7525a8ce9e9a8df64bcc268f097c4a08_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_77aa6649773fb92157717c6b6ac25b94cc8f81652a05b6026c5d0db881fc0448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77aa6649773fb92157717c6b6ac25b94cc8f81652a05b6026c5d0db881fc0448->enter($__internal_77aa6649773fb92157717c6b6ac25b94cc8f81652a05b6026c5d0db881fc0448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d7135dca34108085c08128abaca5aca0587954b0267fc165e6d18cc666d0c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7135dca34108085c08128abaca5aca0587954b0267fc165e6d18cc666d0c86->enter($__internal_6d7135dca34108085c08128abaca5aca0587954b0267fc165e6d18cc666d0c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_6d7135dca34108085c08128abaca5aca0587954b0267fc165e6d18cc666d0c86->leave($__internal_6d7135dca34108085c08128abaca5aca0587954b0267fc165e6d18cc666d0c86_prof);

        
        $__internal_77aa6649773fb92157717c6b6ac25b94cc8f81652a05b6026c5d0db881fc0448->leave($__internal_77aa6649773fb92157717c6b6ac25b94cc8f81652a05b6026c5d0db881fc0448_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_a4f4e9a39cbe4bc7aa8bffb33e10531e6574e2d218cb6c9d0674852eb5c5eddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f4e9a39cbe4bc7aa8bffb33e10531e6574e2d218cb6c9d0674852eb5c5eddd->enter($__internal_a4f4e9a39cbe4bc7aa8bffb33e10531e6574e2d218cb6c9d0674852eb5c5eddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_0602f0626d33f9f2b584f50a083c8d909ed173664d004b36e695a2eb97ac41ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0602f0626d33f9f2b584f50a083c8d909ed173664d004b36e695a2eb97ac41ff->enter($__internal_0602f0626d33f9f2b584f50a083c8d909ed173664d004b36e695a2eb97ac41ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Home New account / Sign in </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>New account : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\"/>
                        <div class=\"form-group\">
                            <label for=\"nomClient\">Prénom et Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nomClient\" id=\"nomClient\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"numCni\">Numéro pièce</label>
                            <input type=\"number\" class=\"form-control\" name=\"numCni\" id=\"numCni\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"adresse\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"telephone\">téléphone</label>
                            <input type=\"number\" class=\"form-control\" name=\"telephone\" id=\"telephone\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"login\">nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Login : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\"/>
                        <div class=\"form-group\">
                            <label for=\"login\">Nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
";
        
        $__internal_0602f0626d33f9f2b584f50a083c8d909ed173664d004b36e695a2eb97ac41ff->leave($__internal_0602f0626d33f9f2b584f50a083c8d909ed173664d004b36e695a2eb97ac41ff_prof);

        
        $__internal_a4f4e9a39cbe4bc7aa8bffb33e10531e6574e2d218cb6c9d0674852eb5c5eddd->leave($__internal_a4f4e9a39cbe4bc7aa8bffb33e10531e6574e2d218cb6c9d0674852eb5c5eddd_prof);

    }

    public function getTemplateName()
    {
        return "reservation/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  92 => 26,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block contenus %}
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Home New account / Sign in </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>New account : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"{{ bien[0].id }}\"/>
                        <div class=\"form-group\">
                            <label for=\"nomClient\">Prénom et Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nomClient\" id=\"nomClient\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"numCni\">Numéro pièce</label>
                            <input type=\"number\" class=\"form-control\" name=\"numCni\" id=\"numCni\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"adresse\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"telephone\">téléphone</label>
                            <input type=\"number\" class=\"form-control\" name=\"telephone\" id=\"telephone\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"login\">nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Login : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"{{ bien[0].id }}\"/>
                        <div class=\"form-group\">
                            <label for=\"login\">Nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
{% endblock %}", "reservation/connexion.html.twig", "/var/www/html/soultana.sn/app/Resources/views/reservation/connexion.html.twig");
    }
}
