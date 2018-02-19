<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@RESERVATION/layout.html.twig", "::base.html.twig", 1);
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
        $__internal_c0a50592aeee13b5f88014776824958b49800bc8e3031fce951ab9a1996547eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a50592aeee13b5f88014776824958b49800bc8e3031fce951ab9a1996547eb->enter($__internal_c0a50592aeee13b5f88014776824958b49800bc8e3031fce951ab9a1996547eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e3a3e3f7e5a7f1942d1bcb126618df658d9efc442e48ffd496d55d65e2adbc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a3e3f7e5a7f1942d1bcb126618df658d9efc442e48ffd496d55d65e2adbc1a->enter($__internal_e3a3e3f7e5a7f1942d1bcb126618df658d9efc442e48ffd496d55d65e2adbc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a50592aeee13b5f88014776824958b49800bc8e3031fce951ab9a1996547eb->leave($__internal_c0a50592aeee13b5f88014776824958b49800bc8e3031fce951ab9a1996547eb_prof);

        
        $__internal_e3a3e3f7e5a7f1942d1bcb126618df658d9efc442e48ffd496d55d65e2adbc1a->leave($__internal_e3a3e3f7e5a7f1942d1bcb126618df658d9efc442e48ffd496d55d65e2adbc1a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c429d66652fa55caef701dbed17e578d92a82213c0f1fbd6a88cb6c596e500de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c429d66652fa55caef701dbed17e578d92a82213c0f1fbd6a88cb6c596e500de->enter($__internal_c429d66652fa55caef701dbed17e578d92a82213c0f1fbd6a88cb6c596e500de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4fbe988819b2b6d251595aefeb0df05837d1bb90e2233ee59bba0be6fd755b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fbe988819b2b6d251595aefeb0df05837d1bb90e2233ee59bba0be6fd755b5->enter($__internal_b4fbe988819b2b6d251595aefeb0df05837d1bb90e2233ee59bba0be6fd755b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 760
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_b4fbe988819b2b6d251595aefeb0df05837d1bb90e2233ee59bba0be6fd755b5->leave($__internal_b4fbe988819b2b6d251595aefeb0df05837d1bb90e2233ee59bba0be6fd755b5_prof);

        
        $__internal_c429d66652fa55caef701dbed17e578d92a82213c0f1fbd6a88cb6c596e500de->leave($__internal_c429d66652fa55caef701dbed17e578d92a82213c0f1fbd6a88cb6c596e500de_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_fabc782334ade0d4218de162b03743bd72ae0a992fcb1064456e4ae6d9a546ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabc782334ade0d4218de162b03743bd72ae0a992fcb1064456e4ae6d9a546ce->enter($__internal_fabc782334ade0d4218de162b03743bd72ae0a992fcb1064456e4ae6d9a546ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8d01c686513a8e9000b47bba4292462a648cd90d6f3df352154afbeb4055574f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d01c686513a8e9000b47bba4292462a648cd90d6f3df352154afbeb4055574f->enter($__internal_8d01c686513a8e9000b47bba4292462a648cd90d6f3df352154afbeb4055574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8d01c686513a8e9000b47bba4292462a648cd90d6f3df352154afbeb4055574f->leave($__internal_8d01c686513a8e9000b47bba4292462a648cd90d6f3df352154afbeb4055574f_prof);

        
        $__internal_fabc782334ade0d4218de162b03743bd72ae0a992fcb1064456e4ae6d9a546ce->leave($__internal_fabc782334ade0d4218de162b03743bd72ae0a992fcb1064456e4ae6d9a546ce_prof);

    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_9c14113a1baa015178714bd6a66cc9a4ba72389522895c1286e6f1a76c3f6445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c14113a1baa015178714bd6a66cc9a4ba72389522895c1286e6f1a76c3f6445->enter($__internal_9c14113a1baa015178714bd6a66cc9a4ba72389522895c1286e6f1a76c3f6445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_52be2cc2bbbaf89a8cd1f9554e736b6987204abe40441b34a7da5294279d2a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52be2cc2bbbaf89a8cd1f9554e736b6987204abe40441b34a7da5294279d2a81->enter($__internal_52be2cc2bbbaf89a8cd1f9554e736b6987204abe40441b34a7da5294279d2a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_52be2cc2bbbaf89a8cd1f9554e736b6987204abe40441b34a7da5294279d2a81->leave($__internal_52be2cc2bbbaf89a8cd1f9554e736b6987204abe40441b34a7da5294279d2a81_prof);

        
        $__internal_9c14113a1baa015178714bd6a66cc9a4ba72389522895c1286e6f1a76c3f6445->leave($__internal_9c14113a1baa015178714bd6a66cc9a4ba72389522895c1286e6f1a76c3f6445_prof);

    }

    // line 126
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_190e6c33a56b25bbff4e21f85b0573e00270f7f08beb4c54973d081674584eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190e6c33a56b25bbff4e21f85b0573e00270f7f08beb4c54973d081674584eb5->enter($__internal_190e6c33a56b25bbff4e21f85b0573e00270f7f08beb4c54973d081674584eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_ed50ab30f8fbff24a1478995c41ac9f7891806e26c1a2ef3b8c075412acd7cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed50ab30f8fbff24a1478995c41ac9f7891806e26c1a2ef3b8c075412acd7cff->enter($__internal_ed50ab30f8fbff24a1478995c41ac9f7891806e26c1a2ef3b8c075412acd7cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 127
        echo "    ";
        $this->displayBlock('slide', $context, $blocks);
        // line 322
        echo "    ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 502
        echo "    ";
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 569
        echo "    ";
        $this->displayBlock('temoignages1', $context, $blocks);
        // line 645
        echo "    ";
        $this->displayBlock('temoignages2', $context, $blocks);
        // line 712
        echo "    ";
        $this->displayBlock('zone_de_recherche', $context, $blocks);
        // line 759
        echo "    ";
        
        $__internal_ed50ab30f8fbff24a1478995c41ac9f7891806e26c1a2ef3b8c075412acd7cff->leave($__internal_ed50ab30f8fbff24a1478995c41ac9f7891806e26c1a2ef3b8c075412acd7cff_prof);

        
        $__internal_190e6c33a56b25bbff4e21f85b0573e00270f7f08beb4c54973d081674584eb5->leave($__internal_190e6c33a56b25bbff4e21f85b0573e00270f7f08beb4c54973d081674584eb5_prof);

    }

    // line 127
    public function block_slide($context, array $blocks = array())
    {
        $__internal_9f7ba88f7fdc12434e5d708fd4a2eabdf9f4314cb18d34a2e45150cb8def7dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7ba88f7fdc12434e5d708fd4a2eabdf9f4314cb18d34a2e45150cb8def7dcc->enter($__internal_9f7ba88f7fdc12434e5d708fd4a2eabdf9f4314cb18d34a2e45150cb8def7dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_1a6dac37c34b574c510d04a68d0f9f2e13794890ed44768965d4bd08537dc265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6dac37c34b574c510d04a68d0f9f2e13794890ed44768965d4bd08537dc265->enter($__internal_1a6dac37c34b574c510d04a68d0f9f2e13794890ed44768965d4bd08537dc265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        // line 317
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_1a6dac37c34b574c510d04a68d0f9f2e13794890ed44768965d4bd08537dc265->leave($__internal_1a6dac37c34b574c510d04a68d0f9f2e13794890ed44768965d4bd08537dc265_prof);

        
        $__internal_9f7ba88f7fdc12434e5d708fd4a2eabdf9f4314cb18d34a2e45150cb8def7dcc->leave($__internal_9f7ba88f7fdc12434e5d708fd4a2eabdf9f4314cb18d34a2e45150cb8def7dcc_prof);

    }

    // line 143
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_4e21ae440413624f71f6f05e67a36abfa383b381845d6c9116b1d101af98d447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e21ae440413624f71f6f05e67a36abfa383b381845d6c9116b1d101af98d447->enter($__internal_4e21ae440413624f71f6f05e67a36abfa383b381845d6c9116b1d101af98d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_2d757cd3036e3b4dbe588d714e2d065bef95180875c4e7c20f9d82a2cc28bbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d757cd3036e3b4dbe588d714e2d065bef95180875c4e7c20f9d82a2cc28bbc9->enter($__internal_2d757cd3036e3b4dbe588d714e2d065bef95180875c4e7c20f9d82a2cc28bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

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
        // line 157
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 158
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
        // line 160
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typesBien"] ?? $this->getContext($context, "typesBien")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 165
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
        // line 167
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
                                        <label for=\"price-range\">Price range (\$):</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"price-range\"><br/>
                                        <b class=\"pull-left color\">2000\$</b>
                                        <b class=\"pull-right color\">100000\$</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Property geo (m2) :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[50,450]\" id=\"property-geo\"><br/>
                                        <b class=\"pull-left color\">40m</b>
                                        <b class=\"pull-right color\">12000m</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Min baths :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">120</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Min bed :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">120</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Fire Place(3100)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Dual Sinks(500)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Hurricane Shutters(99)
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
        
        $__internal_2d757cd3036e3b4dbe588d714e2d065bef95180875c4e7c20f9d82a2cc28bbc9->leave($__internal_2d757cd3036e3b4dbe588d714e2d065bef95180875c4e7c20f9d82a2cc28bbc9_prof);

        
        $__internal_4e21ae440413624f71f6f05e67a36abfa383b381845d6c9116b1d101af98d447->leave($__internal_4e21ae440413624f71f6f05e67a36abfa383b381845d6c9116b1d101af98d447_prof);

    }

    // line 322
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_5838240972b0a35fa3915e480178782b366a302bd3f57759283d0f36cd088cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5838240972b0a35fa3915e480178782b366a302bd3f57759283d0f36cd088cd7->enter($__internal_5838240972b0a35fa3915e480178782b366a302bd3f57759283d0f36cd088cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_9d730f7867ac475fd74c0fe6bec2e1fe8645a17cedb173274fd5f9f315e16d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d730f7867ac475fd74c0fe6bec2e1fe8645a17cedb173274fd5f9f315e16d78->enter($__internal_9d730f7867ac475fd74c0fe6bec2e1fe8645a17cedb173274fd5f9f315e16d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 323
        echo "    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            ";
        // line 326
        $this->displayBlock('titre_catalogue', $context, $blocks);
        // line 336
        echo "            ";
        $this->displayBlock('articles', $context, $blocks);
        // line 499
        echo "        </div>
    </div>
    ";
        
        $__internal_9d730f7867ac475fd74c0fe6bec2e1fe8645a17cedb173274fd5f9f315e16d78->leave($__internal_9d730f7867ac475fd74c0fe6bec2e1fe8645a17cedb173274fd5f9f315e16d78_prof);

        
        $__internal_5838240972b0a35fa3915e480178782b366a302bd3f57759283d0f36cd088cd7->leave($__internal_5838240972b0a35fa3915e480178782b366a302bd3f57759283d0f36cd088cd7_prof);

    }

    // line 326
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_4b8f578732f5b5e0595a5c17f307e78722d16763c3c45b50493a79c8ac6fe52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8f578732f5b5e0595a5c17f307e78722d16763c3c45b50493a79c8ac6fe52f->enter($__internal_4b8f578732f5b5e0595a5c17f307e78722d16763c3c45b50493a79c8ac6fe52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_a790d18426c28425e81e812b79aed170ba66fe20297fed9f1bbc7c44693a027c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a790d18426c28425e81e812b79aed170ba66fe20297fed9f1bbc7c44693a027c->enter($__internal_a790d18426c28425e81e812b79aed170ba66fe20297fed9f1bbc7c44693a027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        // line 327
        echo "            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top submitted property</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .
                    </p>
                </div>
            </div>
            ";
        
        $__internal_a790d18426c28425e81e812b79aed170ba66fe20297fed9f1bbc7c44693a027c->leave($__internal_a790d18426c28425e81e812b79aed170ba66fe20297fed9f1bbc7c44693a027c_prof);

        
        $__internal_4b8f578732f5b5e0595a5c17f307e78722d16763c3c45b50493a79c8ac6fe52f->leave($__internal_4b8f578732f5b5e0595a5c17f307e78722d16763c3c45b50493a79c8ac6fe52f_prof);

    }

    // line 336
    public function block_articles($context, array $blocks = array())
    {
        $__internal_5cfccdcab39a1e3e399aedf3fe4090f3694e6fdaf204ac14ce9c268f9335c4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfccdcab39a1e3e399aedf3fe4090f3694e6fdaf204ac14ce9c268f9335c4fe->enter($__internal_5cfccdcab39a1e3e399aedf3fe4090f3694e6fdaf204ac14ce9c268f9335c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_9b8c4a8242c2c77c3882e85f862f35127be51f588874861fb573831f9c02d077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8c4a8242c2c77c3882e85f862f35127be51f588874861fb573831f9c02d077->enter($__internal_9b8c4a8242c2c77c3882e85f862f35127be51f588874861fb573831f9c02d077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 337
        echo "            <div class=\"row\">
                <div class=\"proerty-th\">
                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"property-1.html\"><img src=\"";
        // line 342
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
        // line 362
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
        // line 382
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
        // line 403
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
        // line 424
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
        // line 444
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
        // line 464
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
        
        $__internal_9b8c4a8242c2c77c3882e85f862f35127be51f588874861fb573831f9c02d077->leave($__internal_9b8c4a8242c2c77c3882e85f862f35127be51f588874861fb573831f9c02d077_prof);

        
        $__internal_5cfccdcab39a1e3e399aedf3fe4090f3694e6fdaf204ac14ce9c268f9335c4fe->leave($__internal_5cfccdcab39a1e3e399aedf3fe4090f3694e6fdaf204ac14ce9c268f9335c4fe_prof);

    }

    // line 502
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_35e8c9ed82bd3ba275eb1215a2d18fc6436cd9f379f1bee9c9e6d5e17e69b0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e8c9ed82bd3ba275eb1215a2d18fc6436cd9f379f1bee9c9e6d5e17e69b0c0->enter($__internal_35e8c9ed82bd3ba275eb1215a2d18fc6436cd9f379f1bee9c9e6d5e17e69b0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_8c38b097f695a825ef07ad747e69964a931b4e3ec8e8674068d4d2a32ed239e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c38b097f695a825ef07ad747e69964a931b4e3ec8e8674068d4d2a32ed239e2->enter($__internal_8c38b097f695a825ef07ad747e69964a931b4e3ec8e8674068d4d2a32ed239e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 503
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
        
        $__internal_8c38b097f695a825ef07ad747e69964a931b4e3ec8e8674068d4d2a32ed239e2->leave($__internal_8c38b097f695a825ef07ad747e69964a931b4e3ec8e8674068d4d2a32ed239e2_prof);

        
        $__internal_35e8c9ed82bd3ba275eb1215a2d18fc6436cd9f379f1bee9c9e6d5e17e69b0c0->leave($__internal_35e8c9ed82bd3ba275eb1215a2d18fc6436cd9f379f1bee9c9e6d5e17e69b0c0_prof);

    }

    // line 569
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_c02e5e354077d316199715055860b1c47dd051aa6052d23038476c000ec1bc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02e5e354077d316199715055860b1c47dd051aa6052d23038476c000ec1bc84->enter($__internal_c02e5e354077d316199715055860b1c47dd051aa6052d23038476c000ec1bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_827148ed944332dd0b72755a9b29ec7e1244012da031bb3ed463d231ec4bbe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827148ed944332dd0b72755a9b29ec7e1244012da031bb3ed463d231ec4bbe8c->enter($__internal_827148ed944332dd0b72755a9b29ec7e1244012da031bb3ed463d231ec4bbe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        // line 570
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
        // line 595
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
        // line 608
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
        // line 621
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
        // line 634
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
        
        $__internal_827148ed944332dd0b72755a9b29ec7e1244012da031bb3ed463d231ec4bbe8c->leave($__internal_827148ed944332dd0b72755a9b29ec7e1244012da031bb3ed463d231ec4bbe8c_prof);

        
        $__internal_c02e5e354077d316199715055860b1c47dd051aa6052d23038476c000ec1bc84->leave($__internal_c02e5e354077d316199715055860b1c47dd051aa6052d23038476c000ec1bc84_prof);

    }

    // line 645
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_36f8a85234adb5b66f566f1ee395bf806f39e1123760227ff686bfa08f703aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f8a85234adb5b66f566f1ee395bf806f39e1123760227ff686bfa08f703aaa->enter($__internal_36f8a85234adb5b66f566f1ee395bf806f39e1123760227ff686bfa08f703aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_03e06be097a6d60d9b8c1aeea509040f3984dab4ca5397e9950cd24880c0be96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e06be097a6d60d9b8c1aeea509040f3984dab4ca5397e9950cd24880c0be96->enter($__internal_03e06be097a6d60d9b8c1aeea509040f3984dab4ca5397e9950cd24880c0be96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        // line 646
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
        
        $__internal_03e06be097a6d60d9b8c1aeea509040f3984dab4ca5397e9950cd24880c0be96->leave($__internal_03e06be097a6d60d9b8c1aeea509040f3984dab4ca5397e9950cd24880c0be96_prof);

        
        $__internal_36f8a85234adb5b66f566f1ee395bf806f39e1123760227ff686bfa08f703aaa->leave($__internal_36f8a85234adb5b66f566f1ee395bf806f39e1123760227ff686bfa08f703aaa_prof);

    }

    // line 712
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_cf365ffe40b41b489bf3547a16ebce5fb12dfa469f64cc015b310af88402da77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf365ffe40b41b489bf3547a16ebce5fb12dfa469f64cc015b310af88402da77->enter($__internal_cf365ffe40b41b489bf3547a16ebce5fb12dfa469f64cc015b310af88402da77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_453bfb79acf048246ea978ebf8bdf93723ad0e3e179773ec00ef8f02a48328ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453bfb79acf048246ea978ebf8bdf93723ad0e3e179773ec00ef8f02a48328ea->enter($__internal_453bfb79acf048246ea978ebf8bdf93723ad0e3e179773ec00ef8f02a48328ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        // line 713
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
        
        $__internal_453bfb79acf048246ea978ebf8bdf93723ad0e3e179773ec00ef8f02a48328ea->leave($__internal_453bfb79acf048246ea978ebf8bdf93723ad0e3e179773ec00ef8f02a48328ea_prof);

        
        $__internal_cf365ffe40b41b489bf3547a16ebce5fb12dfa469f64cc015b310af88402da77->leave($__internal_cf365ffe40b41b489bf3547a16ebce5fb12dfa469f64cc015b310af88402da77_prof);

    }

    // line 760
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8a62e5b58a057aec125ab7e8cb84ea981cf7adf15a7e55dfbdde809c4a88f5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a62e5b58a057aec125ab7e8cb84ea981cf7adf15a7e55dfbdde809c4a88f5e9->enter($__internal_8a62e5b58a057aec125ab7e8cb84ea981cf7adf15a7e55dfbdde809c4a88f5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_657b38915afa53236ae4bcb99d1760a9822280b35fe410c2caee0261b6e74d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657b38915afa53236ae4bcb99d1760a9822280b35fe410c2caee0261b6e74d3e->enter($__internal_657b38915afa53236ae4bcb99d1760a9822280b35fe410c2caee0261b6e74d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 761
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
        // line 772
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
        // line 803
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
        // line 817
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
        // line 831
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
        
        $__internal_657b38915afa53236ae4bcb99d1760a9822280b35fe410c2caee0261b6e74d3e->leave($__internal_657b38915afa53236ae4bcb99d1760a9822280b35fe410c2caee0261b6e74d3e_prof);

        
        $__internal_8a62e5b58a057aec125ab7e8cb84ea981cf7adf15a7e55dfbdde809c4a88f5e9->leave($__internal_8a62e5b58a057aec125ab7e8cb84ea981cf7adf15a7e55dfbdde809c4a88f5e9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1232 => 831,  1215 => 817,  1198 => 803,  1164 => 772,  1151 => 761,  1142 => 760,  1087 => 713,  1078 => 712,  1003 => 646,  994 => 645,  973 => 634,  957 => 621,  941 => 608,  925 => 595,  898 => 570,  889 => 569,  814 => 503,  805 => 502,  760 => 464,  737 => 444,  714 => 424,  690 => 403,  666 => 382,  643 => 362,  620 => 342,  613 => 337,  604 => 336,  586 => 327,  577 => 326,  565 => 499,  562 => 336,  560 => 326,  555 => 323,  546 => 322,  387 => 167,  376 => 165,  372 => 164,  366 => 160,  355 => 158,  350 => 157,  340 => 144,  331 => 143,  317 => 317,  315 => 143,  303 => 134,  299 => 133,  295 => 132,  289 => 128,  280 => 127,  270 => 759,  267 => 712,  264 => 645,  261 => 569,  258 => 502,  255 => 322,  252 => 127,  243 => 126,  183 => 76,  171 => 66,  162 => 65,  96 => 8,  87 => 7,  76 => 760,  73 => 126,  70 => 65,  68 => 7,  62 => 3,  53 => 2,  11 => 1,);
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
                                    {# <option value=\"Ousmane\">Ousmane</option>
                                    <option value=\"OuSsmane\">OuSsmane</option>
                                    <option value=\"OuSsMwane\">OuSsMwane</option>
                                    <option value=\"OuSsmwWane\">OuSsmwWane</option>
                                    <option value=\"OuSsmwWaneW\">OuSsmwWaneW</option> #}
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
                                        <label for=\"price-range\">Price range (\$):</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"price-range\"><br/>
                                        <b class=\"pull-left color\">2000\$</b>
                                        <b class=\"pull-right color\">100000\$</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Property geo (m2) :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[50,450]\" id=\"property-geo\"><br/>
                                        <b class=\"pull-left color\">40m</b>
                                        <b class=\"pull-right color\">12000m</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Min baths :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">120</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Min bed :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color\">1</b>
                                        <b class=\"pull-right color\">120</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Fire Place(3100)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Dual Sinks(500)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\">
                                                Hurricane Shutters(99)
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
{% endblock %}", "::base.html.twig", "/var/www/html/soultana.sn/app/Resources/views/base.html.twig");
    }
}
