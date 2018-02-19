<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@RESERVATION/layout.html.twig", "base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'contenus' => array($this, 'block_contenus'),
            'slide' => array($this, 'block_slide'),
            'form_recherche' => array($this, 'block_form_recherche'),
            'catalogue' => array($this, 'block_catalogue'),
            'titre_catalogue' => array($this, 'block_titre_catalogue'),
            'articles' => array($this, 'block_articles'),
            'bienvenu' => array($this, 'block_bienvenu'),
            'temoignages1' => array($this, 'block_temoignages1'),
            'temoignages2' => array($this, 'block_temoignages2'),
            'zone_de_recherche' => array($this, 'block_zone_de_recherche'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@RESERVATION/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af125b0fa3c902a9304a79658d824d5e62bfd82e9f95c689ad916895edf07293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af125b0fa3c902a9304a79658d824d5e62bfd82e9f95c689ad916895edf07293->enter($__internal_af125b0fa3c902a9304a79658d824d5e62bfd82e9f95c689ad916895edf07293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1956baa26ab48383611cab6697cd2e6b4f5fd8c3d9003209fae1fde4d04907ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1956baa26ab48383611cab6697cd2e6b4f5fd8c3d9003209fae1fde4d04907ff->enter($__internal_1956baa26ab48383611cab6697cd2e6b4f5fd8c3d9003209fae1fde4d04907ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af125b0fa3c902a9304a79658d824d5e62bfd82e9f95c689ad916895edf07293->leave($__internal_af125b0fa3c902a9304a79658d824d5e62bfd82e9f95c689ad916895edf07293_prof);

        
        $__internal_1956baa26ab48383611cab6697cd2e6b4f5fd8c3d9003209fae1fde4d04907ff->leave($__internal_1956baa26ab48383611cab6697cd2e6b4f5fd8c3d9003209fae1fde4d04907ff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_405f16da33936aaf9e6b37c48f3548c17399af4ab1468531db2d5a81321be16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405f16da33936aaf9e6b37c48f3548c17399af4ab1468531db2d5a81321be16b->enter($__internal_405f16da33936aaf9e6b37c48f3548c17399af4ab1468531db2d5a81321be16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00dd1896506090b20570dcb8b3fc46445c74aafdebec4f190c3ca9a6c793e72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dd1896506090b20570dcb8b3fc46445c74aafdebec4f190c3ca9a6c793e72c->enter($__internal_00dd1896506090b20570dcb8b3fc46445c74aafdebec4f190c3ca9a6c793e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"preloader\">
        <div id=\"status\">&nbsp;</div>
    </div>
    <!-- Body content -->
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 126
        echo "    ";
        $this->displayBlock('contenus', $context, $blocks);
        // line 739
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_00dd1896506090b20570dcb8b3fc46445c74aafdebec4f190c3ca9a6c793e72c->leave($__internal_00dd1896506090b20570dcb8b3fc46445c74aafdebec4f190c3ca9a6c793e72c_prof);

        
        $__internal_405f16da33936aaf9e6b37c48f3548c17399af4ab1468531db2d5a81321be16b->leave($__internal_405f16da33936aaf9e6b37c48f3548c17399af4ab1468531db2d5a81321be16b_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_c406cc8d8391d6a6b634601118dd342dd7a50143da555685fa87484cd35bb91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c406cc8d8391d6a6b634601118dd342dd7a50143da555685fa87484cd35bb91d->enter($__internal_c406cc8d8391d6a6b634601118dd342dd7a50143da555685fa87484cd35bb91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_986290822b7fbfc6cb96538973c5995617ea483dec6c81356a71f7ee77b2c5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986290822b7fbfc6cb96538973c5995617ea483dec6c81356a71f7ee77b2c5d8->enter($__internal_986290822b7fbfc6cb96538973c5995617ea483dec6c81356a71f7ee77b2c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    <div class=\"header-connect\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-8  col-xs-12\">
                    <div class=\"header-half header-call\">
                        <p>
                            <span>
                                <i class=\"pe-7s-call\"></i>
                                +221 33 800 00 00</span>
                            <span>
                                <i class=\"pe-7s-mail\"></i>
                                soultana@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                    <div class=\"header-half header-social\">
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-vine\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-dribbble\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->
    ";
        
        $__internal_986290822b7fbfc6cb96538973c5995617ea483dec6c81356a71f7ee77b2c5d8->leave($__internal_986290822b7fbfc6cb96538973c5995617ea483dec6c81356a71f7ee77b2c5d8_prof);

        
        $__internal_c406cc8d8391d6a6b634601118dd342dd7a50143da555685fa87484cd35bb91d->leave($__internal_c406cc8d8391d6a6b634601118dd342dd7a50143da555685fa87484cd35bb91d_prof);

    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_6ee38ec3def3b8fbda4253293fc0f19078288f1778b874874a646a048ad878ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee38ec3def3b8fbda4253293fc0f19078288f1778b874874a646a048ad878ff->enter($__internal_6ee38ec3def3b8fbda4253293fc0f19078288f1778b874874a646a048ad878ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_093c07f8e90cf29b7f21e71983218449fa3f611cf59eadf2d2f5e1887e365104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093c07f8e90cf29b7f21e71983218449fa3f611cf59eadf2d2f5e1887e365104->enter($__internal_093c07f8e90cf29b7f21e71983218449fa3f611cf59eadf2d2f5e1887e365104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 66
        echo "    <nav class=\"navbar navbar-default \">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                <div class=\"button navbar-right\">
                    <button class=\"navbar-btn nav-button wow bounceInRight login\" onclick=\" window.open('register.html')\" data-wow-delay=\"0.45s\">Login</button>
                </div>
                <ul class=\"main-nav nav navbar-nav navbar-right\">
                    <li class=\"dropdown ymm-sw \" data-wow-delay=\"0.1s\">
                        <a href=\"index.html\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Accueil
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu navbar-nav\">
                            <li>
                                <a href=\"index-2.html\">Vendre un bien</a>
                            </li>
                            <li>
                                <a href=\"index-3.html\">Louer un bien</a>
                            </li>
                            <li>
                                <a href=\"index-4.html\">Déposer un bien</a>
                            </li>

                        </ul>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                        <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Propriètaire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Locataire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
    ";
        
        $__internal_093c07f8e90cf29b7f21e71983218449fa3f611cf59eadf2d2f5e1887e365104->leave($__internal_093c07f8e90cf29b7f21e71983218449fa3f611cf59eadf2d2f5e1887e365104_prof);

        
        $__internal_6ee38ec3def3b8fbda4253293fc0f19078288f1778b874874a646a048ad878ff->leave($__internal_6ee38ec3def3b8fbda4253293fc0f19078288f1778b874874a646a048ad878ff_prof);

    }

    // line 126
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_7aacda7430bd4f628af70687a9203b48a6e97ec9e4fa2587e645aaa7fb610d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aacda7430bd4f628af70687a9203b48a6e97ec9e4fa2587e645aaa7fb610d92->enter($__internal_7aacda7430bd4f628af70687a9203b48a6e97ec9e4fa2587e645aaa7fb610d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_60f83f21f2cacf1a231ed421ab8ead2112a8bacc0f13b0d275d80ae138f703e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f83f21f2cacf1a231ed421ab8ead2112a8bacc0f13b0d275d80ae138f703e6->enter($__internal_60f83f21f2cacf1a231ed421ab8ead2112a8bacc0f13b0d275d80ae138f703e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 127
        echo "    ";
        $this->displayBlock('slide', $context, $blocks);
        // line 301
        echo "    ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 481
        echo "    ";
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 548
        echo "    ";
        $this->displayBlock('temoignages1', $context, $blocks);
        // line 624
        echo "    ";
        $this->displayBlock('temoignages2', $context, $blocks);
        // line 691
        echo "    ";
        $this->displayBlock('zone_de_recherche', $context, $blocks);
        // line 738
        echo "    ";
        
        $__internal_60f83f21f2cacf1a231ed421ab8ead2112a8bacc0f13b0d275d80ae138f703e6->leave($__internal_60f83f21f2cacf1a231ed421ab8ead2112a8bacc0f13b0d275d80ae138f703e6_prof);

        
        $__internal_7aacda7430bd4f628af70687a9203b48a6e97ec9e4fa2587e645aaa7fb610d92->leave($__internal_7aacda7430bd4f628af70687a9203b48a6e97ec9e4fa2587e645aaa7fb610d92_prof);

    }

    // line 127
    public function block_slide($context, array $blocks = array())
    {
        $__internal_b6211427c79f2cf521226620c2b1432ca8cf17f87a9a784d7a847a08a17e017e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6211427c79f2cf521226620c2b1432ca8cf17f87a9a784d7a847a08a17e017e->enter($__internal_b6211427c79f2cf521226620c2b1432ca8cf17f87a9a784d7a847a08a17e017e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_877ff26c5d04a1288e9c9f33e53ef396cb413c52e6971c68d8675cbc128bd722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877ff26c5d04a1288e9c9f33e53ef396cb413c52e6971c68d8675cbc128bd722->enter($__internal_877ff26c5d04a1288e9c9f33e53ef396cb413c52e6971c68d8675cbc128bd722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 128
        echo "    <div class=\"slider-area\">
        <div class=\"slider\">
            <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                <div class=\"item\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-1.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>
                <div class=\"item\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-2.jpg"), "html", null, true);
        echo "\" alt=\"The Last of us\"></div>
                <div class=\"item\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-1.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>

            </div>
        </div>
        <div class=\"slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>RECHERCHE DE PROPRIÉTÉS JUSTE AUSSI FACILE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>
                    ";
        // line 143
        $this->displayBlock('form_recherche', $context, $blocks);
        // line 296
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_877ff26c5d04a1288e9c9f33e53ef396cb413c52e6971c68d8675cbc128bd722->leave($__internal_877ff26c5d04a1288e9c9f33e53ef396cb413c52e6971c68d8675cbc128bd722_prof);

        
        $__internal_b6211427c79f2cf521226620c2b1432ca8cf17f87a9a784d7a847a08a17e017e->leave($__internal_b6211427c79f2cf521226620c2b1432ca8cf17f87a9a784d7a847a08a17e017e_prof);

    }

    // line 143
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_0bb1168788e4386d32bee6886be4843625669430d7cab629ad4ee0c9b92301b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb1168788e4386d32bee6886be4843625669430d7cab629ad4ee0c9b92301b0->enter($__internal_0bb1168788e4386d32bee6886be4843625669430d7cab629ad4ee0c9b92301b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_34bbe96386fffcdf7168f9d3faa034fd6d696f97a88004219819055169c96a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bbe96386fffcdf7168f9d3faa034fd6d696f97a88004219819055169c96a87->enter($__internal_34bbe96386fffcdf7168f9d3faa034fd6d696f97a88004219819055169c96a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        // line 144
        echo "                    <div class=\"search-form wow pulse\" data-wow-delay=\"0.8s\">
                        <form action=\"\" method=\"post\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 153
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomVille", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typesBien"] ?? $this->getContext($context, "typesBien")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 160
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeBien"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeBien"], "nomTypeBien", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeBien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                                </select>
                            </div>
                            <div class=\"form-group mar-r-20\">
                                <label for=\"price-range\">Prix entre (f):</label>
                                <input type=\"text\" name=\"prix\" class=\"span2\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                <b class=\"pull-left color\">50 000f</b>
                                <b class=\"pull-right color\">500 000 000f</b>
                            </div>
                            <!-- End of -->
                            <button class=\"btn search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                            <div style=\"display: none;\" class=\"search-toggle\">
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Nombre de salle de bains :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">20</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Meublé
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Avec balcon
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Avec parking
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Swimming Pool(1190)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                2 Stories(4600)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Emergency Exit(200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Laundry Room(10073)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Jog Path(1503)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                26' Ceilings(1200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <br>
                                    <hr>
                                </div>
                                <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    ";
        
        $__internal_34bbe96386fffcdf7168f9d3faa034fd6d696f97a88004219819055169c96a87->leave($__internal_34bbe96386fffcdf7168f9d3faa034fd6d696f97a88004219819055169c96a87_prof);

        
        $__internal_0bb1168788e4386d32bee6886be4843625669430d7cab629ad4ee0c9b92301b0->leave($__internal_0bb1168788e4386d32bee6886be4843625669430d7cab629ad4ee0c9b92301b0_prof);

    }

    // line 301
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_77c7e46567b80b013768f68907add25d05d1e225deaebe5eb9a8769dab78bec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c7e46567b80b013768f68907add25d05d1e225deaebe5eb9a8769dab78bec0->enter($__internal_77c7e46567b80b013768f68907add25d05d1e225deaebe5eb9a8769dab78bec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_b3aaf831644455967ae2e5dda4a90d642de1683b73ff16f2f63b6d93e8a18ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aaf831644455967ae2e5dda4a90d642de1683b73ff16f2f63b6d93e8a18ade->enter($__internal_b3aaf831644455967ae2e5dda4a90d642de1683b73ff16f2f63b6d93e8a18ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 302
        echo "    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            ";
        // line 305
        $this->displayBlock('titre_catalogue', $context, $blocks);
        // line 315
        echo "            ";
        $this->displayBlock('articles', $context, $blocks);
        // line 478
        echo "        </div>
    </div>
    ";
        
        $__internal_b3aaf831644455967ae2e5dda4a90d642de1683b73ff16f2f63b6d93e8a18ade->leave($__internal_b3aaf831644455967ae2e5dda4a90d642de1683b73ff16f2f63b6d93e8a18ade_prof);

        
        $__internal_77c7e46567b80b013768f68907add25d05d1e225deaebe5eb9a8769dab78bec0->leave($__internal_77c7e46567b80b013768f68907add25d05d1e225deaebe5eb9a8769dab78bec0_prof);

    }

    // line 305
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_5bacc47f02997ed86aaacc85664bdb557420d49945acd6d81566688af88b5950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bacc47f02997ed86aaacc85664bdb557420d49945acd6d81566688af88b5950->enter($__internal_5bacc47f02997ed86aaacc85664bdb557420d49945acd6d81566688af88b5950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_b6f75b2c1be4eb12f909296543172aac01fe61c83875f9a1f3e7a1bb62323e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f75b2c1be4eb12f909296543172aac01fe61c83875f9a1f3e7a1bb62323e12->enter($__internal_b6f75b2c1be4eb12f909296543172aac01fe61c83875f9a1f3e7a1bb62323e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        // line 306
        echo "            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top submitted property</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .
                    </p>
                </div>
            </div>
            ";
        
        $__internal_b6f75b2c1be4eb12f909296543172aac01fe61c83875f9a1f3e7a1bb62323e12->leave($__internal_b6f75b2c1be4eb12f909296543172aac01fe61c83875f9a1f3e7a1bb62323e12_prof);

        
        $__internal_5bacc47f02997ed86aaacc85664bdb557420d49945acd6d81566688af88b5950->leave($__internal_5bacc47f02997ed86aaacc85664bdb557420d49945acd6d81566688af88b5950_prof);

    }

    // line 315
    public function block_articles($context, array $blocks = array())
    {
        $__internal_114a2a6e03e3ae5594e515447d395af578f663fb14213c178ed626d903eda99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114a2a6e03e3ae5594e515447d395af578f663fb14213c178ed626d903eda99c->enter($__internal_114a2a6e03e3ae5594e515447d395af578f663fb14213c178ed626d903eda99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_da4b0cfd06470074a2689ffa5284332f6a2147a22042707773589b3b9fe52fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4b0cfd06470074a2689ffa5284332f6a2147a22042707773589b3b9fe52fff->enter($__internal_da4b0cfd06470074a2689ffa5284332f6a2147a22042707773589b3b9fe52fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 316
        echo "            <div class=\"row\">
                <div class=\"proerty-th\">
                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-1.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-2.html\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-2.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-2.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-3.html\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-3.jpg"), "html", null, true);
        echo "\"></a>

                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-3.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-4.jpg"), "html", null, true);
        echo "\"></a>

                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-3.html\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-2.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-3.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-2.html\"><img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-4.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-2.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/property-3.jpg"), "html", null, true);
        echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-tree more-proerty text-center\">
                            <div class=\"item-tree-icon\">
                                <i class=\"fa fa-th\"></i>
                            </div>
                            <div class=\"more-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">CAN'T DECIDE ?
                                    </a>
                                </h5>
                                <h5 class=\"tree-sub-ttl\">Show all properties</h5>
                                <button class=\"btn border-btn more-black\" value=\"All properties\">All properties</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_da4b0cfd06470074a2689ffa5284332f6a2147a22042707773589b3b9fe52fff->leave($__internal_da4b0cfd06470074a2689ffa5284332f6a2147a22042707773589b3b9fe52fff_prof);

        
        $__internal_114a2a6e03e3ae5594e515447d395af578f663fb14213c178ed626d903eda99c->leave($__internal_114a2a6e03e3ae5594e515447d395af578f663fb14213c178ed626d903eda99c_prof);

    }

    // line 481
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_f89ee7bb03c2ca392ac905231cbf8ef53fd4ca152828f3a25ffc406d53a68599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89ee7bb03c2ca392ac905231cbf8ef53fd4ca152828f3a25ffc406d53a68599->enter($__internal_f89ee7bb03c2ca392ac905231cbf8ef53fd4ca152828f3a25ffc406d53a68599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_771ff79746aad5b3113b1f75d61bf9612b17ab21ddcd553887acc5175e453f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771ff79746aad5b3113b1f75d61bf9612b17ab21ddcd553887acc5175e453f00->enter($__internal_771ff79746aad5b3113b1f75d61bf9612b17ab21ddcd553887acc5175e453f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 482
        echo "    <!--Welcome area -->
    <div class=\"Welcome-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 Welcome-entry col-sm-12\">
                    <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                        <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                    <!-- /.feature title -->
                                    <h2>GARO ESTATE
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-home pe-4x\"></i>
                                        </div>
                                        <h3>Any property</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-users pe-4x\"></i>
                                        </div>
                                        <h3>More Clients</h3>
                                    </div>
                                </div>

                                <div class=\"col-xs-12 text-center\">
                                    <i class=\"welcome-circle\"></i>
                                </div>

                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-notebook pe-4x\"></i>
                                        </div>
                                        <h3>Easy to use</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-help2 pe-4x\"></i>
                                        </div>
                                        <h3>Any help
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_771ff79746aad5b3113b1f75d61bf9612b17ab21ddcd553887acc5175e453f00->leave($__internal_771ff79746aad5b3113b1f75d61bf9612b17ab21ddcd553887acc5175e453f00_prof);

        
        $__internal_f89ee7bb03c2ca392ac905231cbf8ef53fd4ca152828f3a25ffc406d53a68599->leave($__internal_f89ee7bb03c2ca392ac905231cbf8ef53fd4ca152828f3a25ffc406d53a68599_prof);

    }

    // line 548
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_00f8db0b024b99a33d6724b312fa8d0dd393a827257a5394f46735900dbe8d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f8db0b024b99a33d6724b312fa8d0dd393a827257a5394f46735900dbe8d2d->enter($__internal_00f8db0b024b99a33d6724b312fa8d0dd393a827257a5394f46735900dbe8d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_760b46af76480be40bd1f4b538fc1059bcfe778a1557ad16ee0f83fd5511bde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760b46af76480be40bd1f4b538fc1059bcfe778a1557ad16ee0f83fd5511bde9->enter($__internal_760b46af76480be40bd1f4b538fc1059bcfe778a1557ad16ee0f83fd5511bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        // line 549
        echo "    <!--TESTIMONIALS -->
    <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Our Customers Said
                    </h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"row testimonial\">
                    <div class=\"col-md-12\">
                        <div id=\"testimonial-slider\">
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                    <img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_760b46af76480be40bd1f4b538fc1059bcfe778a1557ad16ee0f83fd5511bde9->leave($__internal_760b46af76480be40bd1f4b538fc1059bcfe778a1557ad16ee0f83fd5511bde9_prof);

        
        $__internal_00f8db0b024b99a33d6724b312fa8d0dd393a827257a5394f46735900dbe8d2d->leave($__internal_00f8db0b024b99a33d6724b312fa8d0dd393a827257a5394f46735900dbe8d2d_prof);

    }

    // line 624
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_f6c3924b605e256d3fb7b78612e57929f4cd716a76538ecbcbd25a4a1fe62703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c3924b605e256d3fb7b78612e57929f4cd716a76538ecbcbd25a4a1fe62703->enter($__internal_f6c3924b605e256d3fb7b78612e57929f4cd716a76538ecbcbd25a4a1fe62703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_9c8422782b857efbe1114b8275a42e0b5c690778d3d2a574d4b2301f1b8783ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8422782b857efbe1114b8275a42e0b5c690778d3d2a574d4b2301f1b8783ee->enter($__internal_9c8422782b857efbe1114b8275a42e0b5c690778d3d2a574d4b2301f1b8783ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        // line 625
        echo "    <!-- Count area -->
    <div class=\"count-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>You can trust Us
                    </h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                    <div class=\"row\">
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-users\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter\">0</h2>
                                    <h5>HAPPY CUSTOMER
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-home\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"12000\">
                                    <h2 class=\"percent\" id=\"counter1\">0</h2>
                                    <h5>Properties in stock</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-flag\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"120\">
                                    <h2 class=\"percent\" id=\"counter2\">0</h2>
                                    <h5>City registered
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-graph2\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                    <h5>DEALER BRANCHES</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_9c8422782b857efbe1114b8275a42e0b5c690778d3d2a574d4b2301f1b8783ee->leave($__internal_9c8422782b857efbe1114b8275a42e0b5c690778d3d2a574d4b2301f1b8783ee_prof);

        
        $__internal_f6c3924b605e256d3fb7b78612e57929f4cd716a76538ecbcbd25a4a1fe62703->leave($__internal_f6c3924b605e256d3fb7b78612e57929f4cd716a76538ecbcbd25a4a1fe62703_prof);

    }

    // line 691
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_7f845d28076be1c1651b34059f5c02fd1efa4352ba93eacd8b5728599cbafe82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f845d28076be1c1651b34059f5c02fd1efa4352ba93eacd8b5728599cbafe82->enter($__internal_7f845d28076be1c1651b34059f5c02fd1efa4352ba93eacd8b5728599cbafe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_adfa40fc9280886ed5971e97f6d73591bddf17562664e3de44f82095936f4ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfa40fc9280886ed5971e97f6d73591bddf17562664e3de44f82095936f4ad5->enter($__internal_adfa40fc9280886ed5971e97f6d73591bddf17562664e3de44f82095936f4ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        // line 692
        echo "    <!-- boy-sale area -->
    <div class=\"boy-sale-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>ARE YOU LOOKING FOR A Property?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-usd\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>DO YOU WANT TO SELL A Property?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <p class=\"asks-call\">QUESTIONS? CALL US :
                        <span class=\"strong\">
                            + 3-123- 424-5700</span></p>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_adfa40fc9280886ed5971e97f6d73591bddf17562664e3de44f82095936f4ad5->leave($__internal_adfa40fc9280886ed5971e97f6d73591bddf17562664e3de44f82095936f4ad5_prof);

        
        $__internal_7f845d28076be1c1651b34059f5c02fd1efa4352ba93eacd8b5728599cbafe82->leave($__internal_7f845d28076be1c1651b34059f5c02fd1efa4352ba93eacd8b5728599cbafe82_prof);

    }

    // line 739
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f69c38c244d405a57901e10ffe1321995fc643810a37021bce2f03600471f3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69c38c244d405a57901e10ffe1321995fc643810a37021bce2f03600471f3d4->enter($__internal_f69c38c244d405a57901e10ffe1321995fc643810a37021bce2f03600471f3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2fb3640dbdf345e7e96fe498eb94c09ae66f680799456831abb7bbbc91c86217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb3640dbdf345e7e96fe498eb94c09ae66f680799456831abb7bbbc91c86217->enter($__internal_2fb3640dbdf345e7e96fe498eb94c09ae66f680799456831abb7bbbc91c86217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 740
        echo "    <!-- Footer area-->
    <div class=\"footer-area\">
        <div class=\" footer\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>About us </h4>
                            <div class=\"footer-title-line\"></div>

                            <img src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                            <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                            <ul class=\"footer-adress\">
                                <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                <li><i class=\"pe-7s-mail strong\"> </i> email@yourcompany.com</li>
                                <li><i class=\"pe-7s-call strong\"> </i> +1 908 967 5906</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>Quick links </h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-menu\">
                                <li><a href=\"properties.html\">Properties</a>  </li>
                                <li><a href=\"#\">Services</a>  </li>
                                <li><a href=\"submit-property.html\">Submit property </a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                                <li><a href=\"faq.html\">fqa</a>  </li>
                                <li><a href=\"faq.html\">Terms </a>  </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>Last News</h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-blog\">
                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer news-letter\">
                            <h4>Stay in touch</h4>
                            <div class=\"footer-title-line\"></div>
                            <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                            <form>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>

                            <div class=\"social pull-right\">
                                <ul>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"footer-copy text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"pull-left\">
                        <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                    </div>
                    <div class=\"bottom-menu pull-right\">
                        <ul>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_2fb3640dbdf345e7e96fe498eb94c09ae66f680799456831abb7bbbc91c86217->leave($__internal_2fb3640dbdf345e7e96fe498eb94c09ae66f680799456831abb7bbbc91c86217_prof);

        
        $__internal_f69c38c244d405a57901e10ffe1321995fc643810a37021bce2f03600471f3d4->leave($__internal_f69c38c244d405a57901e10ffe1321995fc643810a37021bce2f03600471f3d4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1215 => 810,  1198 => 796,  1181 => 782,  1147 => 751,  1134 => 740,  1125 => 739,  1070 => 692,  1061 => 691,  986 => 625,  977 => 624,  956 => 613,  940 => 600,  924 => 587,  908 => 574,  881 => 549,  872 => 548,  797 => 482,  788 => 481,  743 => 443,  720 => 423,  697 => 403,  673 => 382,  649 => 361,  626 => 341,  603 => 321,  596 => 316,  587 => 315,  569 => 306,  560 => 305,  548 => 478,  545 => 315,  543 => 305,  538 => 302,  529 => 301,  386 => 162,  375 => 160,  371 => 159,  365 => 155,  354 => 153,  350 => 152,  340 => 144,  331 => 143,  317 => 296,  315 => 143,  303 => 134,  299 => 133,  295 => 132,  289 => 128,  280 => 127,  270 => 738,  267 => 691,  264 => 624,  261 => 548,  258 => 481,  255 => 301,  252 => 127,  243 => 126,  183 => 76,  171 => 66,  162 => 65,  96 => 8,  87 => 7,  76 => 739,  73 => 126,  70 => 65,  68 => 7,  62 => 3,  53 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@RESERVATION/layout.html.twig' %}
{% block body %}
    <div id=\"preloader\">
        <div id=\"status\">&nbsp;</div>
    </div>
    <!-- Body content -->
    {% block header %}
    <div class=\"header-connect\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-8  col-xs-12\">
                    <div class=\"header-half header-call\">
                        <p>
                            <span>
                                <i class=\"pe-7s-call\"></i>
                                +221 33 800 00 00</span>
                            <span>
                                <i class=\"pe-7s-mail\"></i>
                                soultana@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                    <div class=\"header-half header-social\">
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-vine\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-dribbble\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->
    {% endblock %}
    {% block navbar %}
    <nav class=\"navbar navbar-default \">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                <div class=\"button navbar-right\">
                    <button class=\"navbar-btn nav-button wow bounceInRight login\" onclick=\" window.open('register.html')\" data-wow-delay=\"0.45s\">Login</button>
                </div>
                <ul class=\"main-nav nav navbar-nav navbar-right\">
                    <li class=\"dropdown ymm-sw \" data-wow-delay=\"0.1s\">
                        <a href=\"index.html\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\">Accueil
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu navbar-nav\">
                            <li>
                                <a href=\"index-2.html\">Vendre un bien</a>
                            </li>
                            <li>
                                <a href=\"index-3.html\">Louer un bien</a>
                            </li>
                            <li>
                                <a href=\"index-4.html\">Déposer un bien</a>
                            </li>

                        </ul>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                        <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Propriètaire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Locataire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
    {% endblock %}
    {% block contenus %}
    {% block slide %}
    <div class=\"slider-area\">
        <div class=\"slider\">
            <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-1.jpg')}}\" alt=\"GTA V\"></div>
                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-2.jpg')}}\" alt=\"The Last of us\"></div>
                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-1.jpg')}}\" alt=\"GTA V\"></div>

            </div>
        </div>
        <div class=\"slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>RECHERCHE DE PROPRIÉTÉS JUSTE AUSSI FACILE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>
                    {% block form_recherche %}
                    <div class=\"search-form wow pulse\" data-wow-delay=\"0.8s\">
                        <form action=\"\" method=\"post\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                {% for ville in villes %}
                                    <option value=\"{{ ville.id }}\"> {{ ville.nomVille }} </option>
                                {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                {% for typeBien in typesBien %}
                                    <option value=\"{{ typeBien.id }}\"> {{ typeBien.nomTypeBien }} </option>
                                {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group mar-r-20\">
                                <label for=\"price-range\">Prix entre (f):</label>
                                <input type=\"text\" name=\"prix\" class=\"span2\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                <b class=\"pull-left color\">50 000f</b>
                                <b class=\"pull-right color\">500 000 000f</b>
                            </div>
                            <!-- End of -->
                            <button class=\"btn search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                            <div style=\"display: none;\" class=\"search-toggle\">
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Nombre de salle de bains :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">20</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Meublé
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Avec balcon
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Avec parking
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Swimming Pool(1190)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                2 Stories(4600)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Emergency Exit(200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Laundry Room(10073)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Jog Path(1503)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->

                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                26' Ceilings(1200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <br>
                                    <hr>
                                </div>
                                <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block catalogue %}
    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            {% block titre_catalogue %}
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top submitted property</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .
                    </p>
                </div>
            </div>
            {% endblock %}
            {% block articles %}
            <div class=\"row\">
                <div class=\"proerty-th\">
                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"{{asset('assets/img/demo/property-1.jpg')}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-2.html\"><img src=\"{{asset('assets/img/demo/property-2.jpg')}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-2.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-3.html\"><img src=\"{{asset('assets/img/demo/property-3.jpg')}}\"></a>

                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-3.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"{{asset('assets/img/demo/property-4.jpg')}}\"></a>

                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-3.html\"><img src=\"{{asset('assets/img/demo/property-2.jpg')}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-3.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-2.html\"><img src=\"{{asset('assets/img/demo/property-4.jpg')}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-2.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"{{asset('assets/img/demo/property-3.jpg')}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">Super nice villa
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Area :</b>
                                    120m
                                </span>
                                <span class=\"proerty-price pull-right\">\$ 300,000</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-tree more-proerty text-center\">
                            <div class=\"item-tree-icon\">
                                <i class=\"fa fa-th\"></i>
                            </div>
                            <div class=\"more-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">CAN'T DECIDE ?
                                    </a>
                                </h5>
                                <h5 class=\"tree-sub-ttl\">Show all properties</h5>
                                <button class=\"btn border-btn more-black\" value=\"All properties\">All properties</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
        </div>
    </div>
    {% endblock %}
    {% block bienvenu %}
    <!--Welcome area -->
    <div class=\"Welcome-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 Welcome-entry col-sm-12\">
                    <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                        <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                    <!-- /.feature title -->
                                    <h2>GARO ESTATE
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-home pe-4x\"></i>
                                        </div>
                                        <h3>Any property</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-users pe-4x\"></i>
                                        </div>
                                        <h3>More Clients</h3>
                                    </div>
                                </div>

                                <div class=\"col-xs-12 text-center\">
                                    <i class=\"welcome-circle\"></i>
                                </div>

                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-notebook pe-4x\"></i>
                                        </div>
                                        <h3>Easy to use</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-help2 pe-4x\"></i>
                                        </div>
                                        <h3>Any help
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block temoignages1 %}
    <!--TESTIMONIALS -->
    <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Our Customers Said
                    </h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"row testimonial\">
                    <div class=\"col-md-12\">
                        <div id=\"testimonial-slider\">
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                    <img src=\"{{asset('assets/img/client-face1.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face2.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face1.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face2.png')}}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {% endblock %}
    {% block temoignages2 %}
    <!-- Count area -->
    <div class=\"count-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>You can trust Us
                    </h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                    <div class=\"row\">
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-users\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter\">0</h2>
                                    <h5>HAPPY CUSTOMER
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-home\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"12000\">
                                    <h2 class=\"percent\" id=\"counter1\">0</h2>
                                    <h5>Properties in stock</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-flag\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"120\">
                                    <h2 class=\"percent\" id=\"counter2\">0</h2>
                                    <h5>City registered
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-graph2\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                    <h5>DEALER BRANCHES</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock  %}
    {% block zone_de_recherche %}
    <!-- boy-sale area -->
    <div class=\"boy-sale-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>ARE YOU LOOKING FOR A Property?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-usd\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>DO YOU WANT TO SELL A Property?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <p class=\"asks-call\">QUESTIONS? CALL US :
                        <span class=\"strong\">
                            + 3-123- 424-5700</span></p>
                </div>
            </div>
        </div>
    </div>
    {% endblock  %}
    {% endblock %}
    {% block footer %}
    <!-- Footer area-->
    <div class=\"footer-area\">
        <div class=\" footer\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>About us </h4>
                            <div class=\"footer-title-line\"></div>

                            <img src=\"{{asset('assets/img/footer-logo.png')}}\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                            <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                            <ul class=\"footer-adress\">
                                <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                <li><i class=\"pe-7s-mail strong\"> </i> email@yourcompany.com</li>
                                <li><i class=\"pe-7s-call strong\"> </i> +1 908 967 5906</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>Quick links </h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-menu\">
                                <li><a href=\"properties.html\">Properties</a>  </li>
                                <li><a href=\"#\">Services</a>  </li>
                                <li><a href=\"submit-property.html\">Submit property </a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                                <li><a href=\"faq.html\">fqa</a>  </li>
                                <li><a href=\"faq.html\">Terms </a>  </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>Last News</h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-blog\">
                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer news-letter\">
                            <h4>Stay in touch</h4>
                            <div class=\"footer-title-line\"></div>
                            <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                            <form>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>

                            <div class=\"social pull-right\">
                                <ul>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"footer-copy text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"pull-left\">
                        <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                    </div>
                    <div class=\"bottom-menu pull-right\">
                        <ul>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
{% endblock %}", "base.html.twig", "/var/www/html/soultana.sn/app/Resources/views/base.html.twig");
    }
}
