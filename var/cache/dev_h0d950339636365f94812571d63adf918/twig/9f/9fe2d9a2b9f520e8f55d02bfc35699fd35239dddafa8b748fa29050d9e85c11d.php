<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @zenitPlatformStratus/storefront/base.html.twig */
class __TwigTemplate_5bfeef27472f80819733759962932d29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'zen_base_preloader' => [$this, 'block_zen_base_preloader'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'zen_base_theme_js_files' => [$this, 'block_zen_base_theme_js_files'],
            'zen_base_theme_js_custom' => [$this, 'block_zen_base_theme_js_custom'],
            'zen_base_cookie_banner_config' => [$this, 'block_zen_base_cookie_banner_config'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/base.html.twig"));

        // line 4
        $context["zenCustomFields"] = ["category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 5
($context["page"] ?? null), "header", [], "any", false, false, false, 5), "navigation", [], "any", false, false, false, 5), "active", [], "any", false, false, false, 5), "translated", [], "any", false, false, false, 5), "customFields", [], "any", false, false, false, 5), "product" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 6
($context["page"] ?? null), "product", [], "any", false, false, false, 6), "translated", [], "any", false, false, false, 6), "customFields", [], "any", false, false, false, 6)];
        // line 10
        $context["zenthemeScriptOptions"] = ["hasTooltips" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-shop-navigation-tooltips"), "tooltipPlacement" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-shop-navigation-tooltips-placement")];
        // line 16
        $context["bodyClasses"] = [];
        // line 17
        $context["bodyClasses"] = twig_array_merge([0 => ("is-lo-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-style"))], ($context["bodyClasses"] ?? null));
        // line 18
        $context["bodyClasses"] = twig_array_merge([0 => ("is-tb-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-style"))], ($context["bodyClasses"] ?? null));
        // line 19
        $context["bodyClasses"] = twig_array_merge([0 => ("is-srch-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style"))], ($context["bodyClasses"] ?? null));
        // line 20
        $context["bodyClasses"] = twig_array_merge([0 => ("is-mn-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style"))], ($context["bodyClasses"] ?? null));
        // line 22
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 22), "zenit_stratus_category_classes", [], "any", false, false, false, 22))) {
            // line 23
            $context["bodyClasses"] = twig_array_merge([0 => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 23), "zenit_stratus_category_classes", [], "any", false, false, false, 23)], ($context["bodyClasses"] ?? null));
        }
        // line 26
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-full-width")) {
            // line 27
            $context["bodyClasses"] = twig_array_merge([0 => "is-flyout-fullscreen"], ($context["bodyClasses"] ?? null));
        }
        // line 30
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-forms-floating-labels")) {
            // line 31
            $context["bodyClasses"] = twig_array_merge([0 => "has-lbl-floating"], ($context["bodyClasses"] ?? null));
        }
        // line 34
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")) {
            // line 35
            $context["bodyClasses"] = twig_array_merge([0 => "has-marketing-slider"], ($context["bodyClasses"] ?? null));
        }
        // line 39
        if ((twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "product", [], "any", false, false, false, 39), "zenit_stratus_gallery_mode", [], "any", false, false, false, 39)) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "product", [], "any", false, false, false, 39), "zenit_stratus_gallery_mode", [], "any", false, false, false, 39) === "inherit"))) {
            // line 40
            $context["galleryMode"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-product-gallery-mode");
        } else {
            // line 42
            $context["galleryMode"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "product", [], "any", false, false, false, 42), "zenit_stratus_gallery_mode", [], "any", false, false, false, 42);
        }
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@zenitPlatformStratus/storefront/base.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 51
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_classes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_classes"));

        $this->displayParentBlock("base_body_classes", $context, $blocks);
        echo " ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["bodyClasses"] ?? null), " "), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_inner"));

        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock("base_noscript", $context, $blocks);
        echo "

    ";
        // line 57
        $this->displayBlock('zen_base_preloader', $context, $blocks);
        // line 60
        echo "
    <div class=\"page-wrapper\"
         data-zen-theme-scripts-options=\"";
        // line 62
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["zenthemeScriptOptions"] ?? null)), "html", null, true);
        echo "\">

        ";
        // line 64
        $this->displayBlock('base_header', $context, $blocks);
        // line 674
        echo "
        ";
        // line 675
        $this->displayBlock("base_offcanvas_navigation", $context, $blocks);
        echo "

        ";
        // line 677
        $this->displayBlock("base_main", $context, $blocks);
        echo "

        ";
        // line 679
        $this->displayBlock("base_footer", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_zen_base_preloader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_preloader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_preloader"));

        // line 58
        echo "        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig", "@zenitPlatformStratus/storefront/base.html.twig", 58)->display($context);
        // line 59
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 65
        echo "            ";
        // line 66
        echo "            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line")) {
            // line 67
            echo "                ";
            // line 68
            echo "                ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "left")) {
                // line 69
                echo "                    ";
                // line 70
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 71
                    echo "                        ";
                    // line 72
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 73
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 74
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 ml-auto";
                        // line 75
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 76
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg order-lg-2";
                        // line 77
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 order-md-3";
                        // line 78
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 80
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 81
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 ml-auto";
                        // line 82
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 83
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-xl order-lg-2";
                        // line 84
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 order-md-3";
                        // line 85
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 87
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 88
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 ml-auto";
                        // line 89
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 90
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 91
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-md-3";
                        // line 92
                        echo "                        ";
                    }
                    // line 93
                    echo "                    ";
                    // line 94
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 95
                    echo "                        ";
                    // line 96
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 97
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1";
                        // line 98
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 99
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 100
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg order-lg-2 ";
                        // line 101
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 ml-sm-auto";
                        // line 102
                        echo "
                            ";
                        // line 103
                        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-align") === "center")) {
                            // line 104
                            echo "                                ";
                            $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                            // line 105
                            echo "                                ";
                            $context["actionClasses"] = "col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0";
                            // line 106
                            echo "                            ";
                        }
                        // line 107
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 109
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1";
                        // line 110
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 111
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 112
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-xl order-lg-2";
                        // line 113
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 ml-sm-auto";
                        // line 114
                        echo "
                            ";
                        // line 115
                        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-align") === "center")) {
                            // line 116
                            echo "                                ";
                            $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                            // line 117
                            echo "                                ";
                            $context["actionClasses"] = "col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0";
                            // line 118
                            echo "                            ";
                        }
                        // line 119
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 121
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1";
                        // line 122
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 123
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 124
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 125
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 ml-sm-auto";
                        // line 126
                        echo "
                            ";
                        // line 127
                        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-align") === "center")) {
                            // line 128
                            echo "                                ";
                            $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                            // line 129
                            echo "                            ";
                        }
                        // line 130
                        echo "                        ";
                    }
                    // line 131
                    echo "                    ";
                }
                // line 132
                echo "
                ";
                // line 134
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center")) {
                // line 135
                echo "                    ";
                // line 136
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 137
                    echo "                        ";
                    // line 138
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 139
                        echo "                            ";
                        $context["logoClasses"] = "col-12 pos-xl-center col-xl-2 order-1";
                        // line 140
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto";
                        // line 141
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 142
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg col-xl-5 order-lg-2";
                        // line 143
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 144
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 146
                        echo "                            ";
                        $context["logoClasses"] = "col-12 pos-lg-center col-lg-2 order-1";
                        // line 147
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto";
                        // line 148
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 149
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-xl-5 order-lg-2";
                        // line 150
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 151
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 153
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-lg-auto pos-lg-center order-1 order-lg-3";
                        echo " ";
                        // line 154
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto";
                        // line 155
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 156
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 157
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-lg-1";
                        // line 158
                        echo "                        ";
                    }
                    // line 159
                    echo "                    ";
                    // line 160
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 161
                    echo "                        ";
                    // line 162
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 163
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 col-lg-12 col-xl-2 order-1 order-md-2 order-lg-1 order-xl-2";
                        // line 164
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 165
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 166
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg col-xl-5 order-lg-2 order-xl-1";
                        // line 167
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-lg-none order-1";
                        // line 168
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 170
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 col-xl-2 order-1 order-md-2";
                        // line 171
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 172
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 173
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-xl-5 order-xl-1";
                        // line 174
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-xl-none order-1";
                        // line 175
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 177
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 col-xl-2 order-1 order-md-2 order-xl-2";
                        // line 178
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 179
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 180
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 181
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 col-xl-5 order-1";
                        // line 182
                        echo "                        ";
                    }
                    // line 183
                    echo "                    ";
                }
                // line 184
                echo "
                ";
                // line 186
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right")) {
                // line 187
                echo "                    ";
                // line 188
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 189
                    echo "                        ";
                    // line 190
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 191
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 192
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 193
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 194
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg order-lg-3 justify-content-end";
                        // line 195
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 196
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 198
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 199
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 200
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 201
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-lg order-lg-3 justify-content-end";
                        // line 202
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 203
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 205
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 206
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 207
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 208
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 209
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 210
                        echo "                        ";
                    }
                    // line 211
                    echo "                    ";
                    // line 212
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 213
                    echo "                        ";
                    // line 214
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 215
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 216
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 217
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 218
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-lg-flex col-lg order-lg-2 justify-content-end";
                        // line 219
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 220
                        echo "
                            ";
                        // line 221
                        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-align") === "center")) {
                            // line 222
                            echo "                                ";
                            $context["actionClasses"] = "col-auto col-xl-3 order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                            // line 223
                            echo "                            ";
                        }
                        // line 224
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 226
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 227
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 228
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 229
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none d-xl-flex col-lg order-lg-2 justify-content-end";
                        // line 230
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 231
                        echo "
                            ";
                        // line 232
                        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-align") === "center")) {
                            // line 233
                            echo "                                ";
                            $context["actionClasses"] = "col-auto col-xl-3 order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                            // line 234
                            echo "                            ";
                        }
                        // line 235
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 237
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto";
                        // line 238
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 239
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 240
                        echo "                            ";
                        $context["mainNavigationClasses"] = "d-none";
                        // line 241
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 242
                        echo "                        ";
                    }
                    // line 243
                    echo "                    ";
                }
                // line 244
                echo "                ";
            }
            // line 245
            echo "
            ";
            // line 247
            echo "            ";
        } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "multi-line")) {
            // line 248
            echo "                ";
            // line 249
            echo "                ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "left")) {
                // line 250
                echo "                    ";
                // line 251
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 252
                    echo "                        ";
                    // line 253
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 254
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto col-lg-3 order-1";
                        // line 255
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-6 order-4 order-sm-2 ml-auto ml-lg-0 mr-lg-0";
                        // line 256
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto ml-sm-0 ml-lg-auto";
                        // line 257
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 order-md-3";
                        // line 258
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 260
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto col-xl-3 order-1";
                        // line 261
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-xl-6 order-4 order-sm-2 ml-auto ml-xl-0 mr-xl-0";
                        // line 262
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto ml-sm-0 ml-xl-auto";
                        // line 263
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 order-md-3";
                        // line 264
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 266
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 267
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm order-4 order-sm-2 ml-auto ml-sm-3";
                        // line 268
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto";
                        // line 269
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-md-3";
                        // line 270
                        echo "                        ";
                    }
                    // line 271
                    echo "                    ";
                    // line 272
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 273
                    echo "                        ";
                    // line 274
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 275
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                        // line 276
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 277
                        echo "                            ";
                        $context["actionClasses"] = "col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0 ml-lg-auto";
                        // line 278
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 ml-sm-auto";
                        // line 279
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 281
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                        // line 282
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 283
                        echo "                            ";
                        $context["actionClasses"] = "col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto";
                        // line 284
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 ml-sm-auto";
                        // line 285
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 287
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1";
                        // line 288
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 289
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 290
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 ml-sm-auto";
                        // line 291
                        echo "                        ";
                    }
                    // line 292
                    echo "                    ";
                }
                // line 293
                echo "
                ";
                // line 295
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center")) {
                // line 296
                echo "                    ";
                // line 297
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 298
                    echo "                        ";
                    // line 299
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 300
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-lg-4 pos-lg-center order-1 order-lg-2";
                        // line 301
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-2 order-4 order-sm-2 order-md-3 order-lg-1 ml-auto ml-lg-0";
                        // line 302
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-lg-auto";
                        // line 303
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 304
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 306
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-xl-4 pos-xl-center order-1 order-lg-2";
                        // line 307
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-2 order-4 order-sm-2 order-md-3 order-xl-1 ml-auto ml-xl-0";
                        // line 308
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto";
                        // line 309
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 310
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 312
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-lg-auto pos-lg-center order-1 order-lg-3";
                        // line 313
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-3 order-lg-2 ml-auto ml-lg-0 mr-lg-auto";
                        // line 314
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 315
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-lg-3";
                        // line 316
                        echo "                        ";
                    }
                    // line 317
                    echo "                    ";
                    // line 318
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 319
                    echo "                        ";
                    // line 320
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 321
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 col-lg-4 pos-lg-center order-1 order-md-2 order-lg-1";
                        // line 322
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 323
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 324
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-lg-none order-1";
                        // line 325
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 327
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 pos-xl-center order-1 order-md-2";
                        // line 328
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 329
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 330
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-xl-none order-1";
                        // line 331
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 333
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 order-1 order-md-2 order-xl-2";
                        // line 334
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 335
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 336
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 col-xl-4 order-1";
                        // line 337
                        echo "                        ";
                    }
                    // line 338
                    echo "                    ";
                }
                // line 339
                echo "
                ";
                // line 341
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right")) {
                // line 342
                echo "                    ";
                // line 343
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 344
                    echo "                        ";
                    // line 345
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 346
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 347
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-6 order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 348
                        echo "                            ";
                        $context["actionClasses"] = "col-auto col-lg-3 order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 349
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 350
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 352
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 353
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-xl-6 order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 354
                        echo "                            ";
                        $context["actionClasses"] = "col-auto col-xl-3 order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 355
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 356
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 358
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-3";
                        // line 359
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 360
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 361
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 362
                        echo "                        ";
                    }
                    // line 363
                    echo "                    ";
                    // line 364
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 365
                    echo "                        ";
                    // line 366
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 367
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 368
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 369
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 370
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 371
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 373
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 374
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 375
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 376
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 377
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 379
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto";
                        // line 380
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 381
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 382
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 383
                        echo "                        ";
                    }
                    // line 384
                    echo "                    ";
                }
                // line 385
                echo "                ";
            }
            // line 386
            echo "
            ";
            // line 388
            echo "            ";
        } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line")) {
            // line 389
            echo "
                ";
            // line 391
            echo "                ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "left")) {
                // line 392
                echo "                    ";
                // line 393
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 394
                    echo "                        ";
                    // line 395
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 396
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 397
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 ml-auto";
                        // line 398
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-3";
                        // line 399
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto ml-sm-0";
                        // line 400
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 order-md-3";
                        // line 401
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 403
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1";
                        // line 404
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-2 ml-auto";
                        // line 405
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-3";
                        // line 406
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto ml-sm-0";
                        // line 407
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 order-md-3";
                        // line 408
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 410
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-3 order-1";
                        // line 411
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm order-4 order-sm-2 col-md-6 ml-auto ml-sm-0";
                        // line 412
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 413
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 414
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-md-3 ml-md-auto";
                        // line 415
                        echo "                        ";
                    }
                    // line 416
                    echo "                    ";
                    // line 417
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 418
                    echo "                        ";
                    // line 419
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 420
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                        // line 421
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 422
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-3 ml-auto";
                        // line 423
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 424
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2 ml-sm-auto";
                        // line 425
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 427
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1";
                        // line 428
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 429
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-xl-flex col-auto order-lg-3 ml-auto";
                        // line 430
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 431
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 ml-sm-auto";
                        // line 432
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 434
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1";
                        // line 435
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 436
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 437
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 438
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 ml-sm-auto";
                        // line 439
                        echo "                        ";
                    }
                    // line 440
                    echo "                    ";
                }
                // line 441
                echo "
                ";
                // line 443
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center")) {
                // line 444
                echo "                    ";
                // line 445
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 446
                    echo "                        ";
                    // line 447
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 448
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-lg-4 pos-lg-center order-1 order-lg-2";
                        // line 449
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-3 order-4 order-sm-2 order-md-3 order-lg-1 ml-auto ml-lg-0";
                        // line 450
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-3 ml-auto";
                        // line 451
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 452
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 453
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 455
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-xl-4 pos-xl-center order-1 order-lg-2";
                        // line 456
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto col-lg-3 order-4 order-sm-2 order-md-3 order-xl-1 ml-auto ml-xl-0";
                        // line 457
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-xl-flex col-auto order-xl-3 ml-auto";
                        // line 458
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 459
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 460
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 462
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-lg-auto pos-lg-center order-1 order-lg-2";
                        // line 463
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-4 order-sm-3 order-lg-2 ml-auto ml-lg-0 mr-lg-auto";
                        // line 464
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 465
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-md-4 ml-auto ml-sm-0";
                        // line 466
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2 order-lg-3";
                        // line 467
                        echo "                        ";
                    }
                    // line 468
                    echo "                    ";
                    // line 469
                    echo "                    ";
                } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center")) {
                    // line 470
                    echo "                        ";
                    // line 471
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 472
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 col-lg-4 pos-lg-center order-1 order-md-2 order-lg-2";
                        // line 473
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 474
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-1";
                        // line 475
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 476
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-lg-none order-1";
                        // line 477
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 479
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 pos-xl-center order-1 order-md-2";
                        // line 480
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 481
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-xl-flex col-auto order-xl-1";
                        // line 482
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 483
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 d-xl-none order-1";
                        // line 484
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 486
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-4 order-1 order-md-2 order-xl-2";
                        // line 487
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 488
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 489
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 ml-auto";
                        // line 490
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto col-md-4 col-xl-4 order-1";
                        // line 491
                        echo "                        ";
                    }
                    // line 492
                    echo "                    ";
                }
                // line 493
                echo "
                ";
                // line 495
                echo "                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right")) {
                // line 496
                echo "                    ";
                // line 497
                echo "                    ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 498
                    echo "                        ";
                    // line 499
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 500
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 501
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 502
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-2";
                        // line 503
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 504
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 505
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 507
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 508
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 509
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-xl-flex col-auto order-xl-2";
                        // line 510
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 511
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2";
                        // line 512
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 514
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-md-auto order-1 order-md-4 ml-md-auto";
                        // line 515
                        echo "                            ";
                        $context["searchClasses"] = "col-12 col-sm order-5 order-sm-3 order-lg-2 ml-auto ml-md-0";
                        // line 516
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 517
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md";
                        // line 518
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 519
                        echo "                        ";
                    }
                    // line 520
                    echo "                    ";
                    // line 521
                    echo "                    ";
                } elseif ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
                    // line 522
                    echo "                        ";
                    // line 523
                    echo "                        ";
                    if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-md")) {
                        // line 524
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 525
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 526
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-lg-flex col-auto order-lg-2";
                        // line 527
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 528
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-lg-none order-2";
                        // line 529
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg")) {
                        // line 531
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto";
                        // line 532
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 533
                        echo "                            ";
                        $context["topBarClasses"] = "d-none d-xl-flex col-auto order-xl-2";
                        // line 534
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 535
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto d-xl-none order-2 mr-sm-auto mr-xl-0";
                        // line 536
                        echo "
                        ";
                    } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) {
                        // line 538
                        echo "                            ";
                        $context["logoClasses"] = "col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto";
                        // line 539
                        echo "                            ";
                        $context["searchClasses"] = "col-12 order-5";
                        // line 540
                        echo "                            ";
                        $context["topBarClasses"] = "d-none";
                        // line 541
                        echo "                            ";
                        $context["actionClasses"] = "col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm";
                        // line 542
                        echo "                            ";
                        $context["mainNavigationToggleClasses"] = "col-auto order-2";
                        // line 543
                        echo "                        ";
                    }
                    // line 544
                    echo "                    ";
                }
                // line 545
                echo "                ";
            }
            // line 546
            echo "            ";
        }
        // line 547
        echo "
            ";
        // line 549
        echo "            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style-mobile") === "single-line")) {
            // line 550
            echo "                ";
            // line 551
            echo "                ";
            if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "left") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 552
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto"]);
                // line 553
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-auto" => ""]);
                // line 554
                echo "                    ";
                $context["mainNavigationToggleClasses"] = twig_replace_filter(($context["mainNavigationToggleClasses"] ?? null), ["col-auto" => "col-auto ml-auto ml-sm-0", "order-2" => "order-3"]);
                // line 555
                echo "
                    ";
                // line 557
                echo "                ";
            } elseif ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "left") &&  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 558
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto"]);
                // line 559
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-auto" => ""]);
                // line 560
                echo "                    ";
                $context["mainNavigationToggleClasses"] = twig_replace_filter(($context["mainNavigationToggleClasses"] ?? null), ["ml-sm-auto" => "ml-auto"]);
                // line 561
                echo "
                    ";
                // line 563
                echo "                ";
            } elseif ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 564
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto", "pos-xl-center" => "pos-center", "pos-lg-center" => "pos-center"]);
                // line 565
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["col-auto" => "col col-lg-auto"]);
                // line 566
                echo "
                    ";
                // line 567
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line")) {
                    // line 568
                    echo "                        ";
                    $context["searchClasses"] = twig_replace_filter(($context["searchClasses"] ?? null), ["col-sm-auto" => "col-sm-3 col-lg-auto", "ml-auto" => "ml-xl-auto"]);
                    // line 569
                    echo "                        ";
                    $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-sm-0" => "ml-xl-0"]);
                    // line 570
                    echo "                        ";
                    $context["mainNavigationClasses"] = twig_replace_filter(($context["mainNavigationClasses"] ?? null), ["d-lg-flex" => "d-xl-flex"]);
                    echo " ";
                    // line 571
                    echo "                        ";
                    $context["mainNavigationToggleClasses"] = twig_replace_filter(($context["mainNavigationToggleClasses"] ?? null), ["d-lg-none" => "d-xl-none"]);
                    echo " ";
                    // line 572
                    echo "                    ";
                } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "multi-line")) {
                    // line 573
                    echo "                        ";
                    $context["searchClasses"] = twig_replace_filter(($context["searchClasses"] ?? null), ["col-sm-auto" => "col-sm-3 col-lg-auto", "ml-auto" => ""]);
                    // line 574
                    echo "                        ";
                    $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-sm-0" => ""]);
                    // line 575
                    echo "                    ";
                } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line")) {
                    // line 576
                    echo "                        ";
                    $context["searchClasses"] = twig_replace_filter(($context["searchClasses"] ?? null), ["col-sm-auto" => "col-sm-3 col-lg-auto", "ml-auto" => ""]);
                    // line 577
                    echo "                        ";
                    $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-sm-0" => "ml-xl-0"]);
                    // line 578
                    echo "                    ";
                }
                // line 579
                echo "
                    ";
                // line 581
                echo "                ";
            } elseif ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center") &&  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 582
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto pos-center"]);
                // line 583
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["col-auto" => "col col-lg-auto"]);
                // line 584
                echo "
                    ";
                // line 585
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line")) {
                    // line 586
                    echo "                        ";
                    $context["mainNavigationClasses"] = twig_replace_filter(($context["mainNavigationClasses"] ?? null), ["d-lg-flex" => "d-xl-flex"]);
                    echo " ";
                    // line 587
                    echo "                        ";
                    $context["mainNavigationToggleClasses"] = twig_replace_filter(($context["mainNavigationToggleClasses"] ?? null), ["col-md-4" => "col-auto", "d-lg-none" => "d-xl-none"]);
                    echo " ";
                    // line 588
                    echo "                    ";
                } else {
                    // line 589
                    echo "                        ";
                    $context["mainNavigationToggleClasses"] = twig_replace_filter(($context["mainNavigationToggleClasses"] ?? null), ["col-md-4" => "col-auto"]);
                    // line 590
                    echo "                    ";
                }
                // line 591
                echo "
                    ";
                // line 593
                echo "                ";
            } elseif ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 594
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto", "order-1 order-md-4" => "order-4", "ml-md-auto" => "ml-auto", "ml-md-3" => "ml-3"]);
                // line 595
                echo "                    ";
                $context["searchClasses"] = twig_replace_filter(($context["searchClasses"] ?? null), ["ml-auto ml-md-0" => ""]);
                // line 596
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-auto ml-sm-0" => "", "order-4 order-md-1" => "order-1", "reverse-sm" => "reverse", "reverse-md" => "reverse"]);
                // line 597
                echo "
                    ";
                // line 599
                echo "                ";
            } elseif ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right") &&  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default"))) {
                // line 600
                echo "                    ";
                $context["logoClasses"] = twig_replace_filter(($context["logoClasses"] ?? null), ["col-12" => "col-auto", "order-1 order-sm-4" => "order-4", "ml-sm-auto" => "ml-auto"]);
                // line 601
                echo "                    ";
                $context["actionClasses"] = twig_replace_filter(($context["actionClasses"] ?? null), ["ml-auto ml-sm-0" => "", "order-3 order-sm-1" => "order-1", "reverse-sm" => "reverse", "reverse-md" => "reverse"]);
                // line 602
                echo "                ";
            }
            // line 603
            echo "            ";
        }
        // line 604
        echo "
            ";
        // line 606
        echo "            ";
        $context["stickyHeaderOptions"] = ["viewports" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-sticky-header"), "scrollOffset" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-sticky-header-offset"), "autoHide" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-sticky-header-hide")];
        // line 611
        echo "            ";
        $context["stickyHeader"] = (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-sticky-header")) ? ("true") : ("false"));
        // line 612
        echo "            ";
        $context["headerOpacity"] = twig_replace_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 612), "zenit_stratus_category_header_bg_opacity", [], "any", false, false, false, 612), ["%" => ""]);
        // line 613
        echo "            ";
        $context["navigationOpacity"] = twig_replace_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 613), "zenit_stratus_category_nav_main_opacity", [], "any", false, false, false, 613), ["%" => ""]);
        // line 614
        echo "
            ";
        // line 616
        echo "            ";
        $context["headerClasses"] = [0 => ("header-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style")), 1 => (("header-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style-mobile")) . "-mobile"), 2 => ("header-logo-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position"))];
        // line 617
        echo "            ";
        if (((((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage")) && twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 617), "zenit_stratus_category_header_position", [], "any", false, false, false, 617))) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 617), "zenit_stratus_category_header_position", [], "any", false, false, false, 617) === "inherit"))) {
            // line 618
            echo "                ";
            $context["headerClasses"] = twig_array_merge([0 => ("header-pos-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-header-position"))], ($context["headerClasses"] ?? null));
            // line 619
            echo "            ";
        } elseif (((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage"))) {
            // line 620
            echo "                ";
            $context["headerClasses"] = twig_array_merge([0 => ("header-pos-" . sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 620), "zenit_stratus_category_header_position", [], "any", false, false, false, 620))], ($context["headerClasses"] ?? null));
            // line 621
            echo "            ";
        }
        // line 622
        echo "
            ";
        // line 624
        echo "            ";
        if (((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage"))) {
            // line 625
            echo "                ";
            if (((( !twig_test_empty(($context["headerOpacity"] ?? null)) &&  !(($context["headerOpacity"] ?? null) === "inherit")) &&  !(($context["headerOpacity"] ?? null) === "100")) || (( !twig_test_empty(            // line 626
($context["navigationOpacity"] ?? null)) &&  !(($context["navigationOpacity"] ?? null) === "inherit")) &&  !(($context["navigationOpacity"] ?? null) === "100")))) {
                // line 627
                echo "                    ";
                $context["headerClasses"] = twig_array_merge([0 => "has-bg-opacity"], ($context["headerClasses"] ?? null));
                // line 628
                echo "                ";
            } elseif (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-header-bg-opacity") === "100") ||  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-nav-main-opacity") === "100"))) {
                // line 630
                echo "                    ";
                $context["headerClasses"] = twig_array_merge([0 => "has-bg-opacity"], ($context["headerClasses"] ?? null));
                // line 631
                echo "                ";
            }
            // line 632
            echo "            ";
        }
        // line 633
        echo "
            ";
        // line 635
        echo "            ";
        $context["navHeaderClasses"] = [];
        // line 636
        echo "            ";
        if (((((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage")) && twig_test_empty(($context["headerOpacity"] ?? null))) || (($context["headerOpacity"] ?? null) === "inherit"))) {
            // line 637
            echo "                ";
            $context["navHeaderClasses"] = twig_array_merge([0 => ("bg-opacity-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-header-bg-opacity"))], ($context["navHeaderClasses"] ?? null));
            // line 638
            echo "            ";
        } elseif (((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage"))) {
            // line 639
            echo "                ";
            $context["navHeaderClasses"] = twig_array_merge([0 => ("bg-opacity-" . ($context["headerOpacity"] ?? null))], ($context["navHeaderClasses"] ?? null));
            // line 640
            echo "            ";
        }
        // line 641
        echo "
            ";
        // line 643
        echo "            ";
        $context["navMainClasses"] = [];
        // line 644
        echo "            ";
        if (((((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage")) && twig_test_empty(($context["navigationOpacity"] ?? null))) || (($context["navigationOpacity"] ?? null) === "inherit"))) {
            // line 645
            echo "                ";
            $context["navMainClasses"] = twig_array_merge([0 => ("bg-opacity-" . $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-nav-main-opacity"))], ($context["navMainClasses"] ?? null));
            // line 646
            echo "            ";
        } elseif (((twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "navigation") || (twig_lower_filter($this->env, ($context["controllerName"] ?? null)) === "landingpage"))) {
            // line 647
            echo "                ";
            $context["navMainClasses"] = twig_array_merge([0 => ("bg-opacity-" . ($context["navigationOpacity"] ?? null))], ($context["navMainClasses"] ?? null));
            // line 648
            echo "            ";
        }
        // line 649
        echo "            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-scroll")) {
            // line 650
            echo "                ";
            $context["navMainClasses"] = twig_array_merge([0 => "navbar-nav-scroll"], ($context["navMainClasses"] ?? null));
            // line 651
            echo "            ";
        }
        // line 652
        echo "
            <header class=\"header-main ";
        // line 653
        echo sw_escape_filter($this->env, twig_join_filter(($context["headerClasses"] ?? null), " "), "html", null, true);
        echo "\"
                    data-sticky=\"";
        // line 654
        echo sw_escape_filter($this->env, ($context["stickyHeader"] ?? null), "html", null, true);
        echo "\"
                    data-zen-sticky-header-options=\"";
        // line 655
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["stickyHeaderOptions"] ?? null)), "html", null, true);
        echo "\">
                <div class=\"header-inner\">
                    ";
        // line 657
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 660
        echo "
                    ";
        // line 662
        echo "                    ";
        if ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line")) {
            // line 663
            echo "                        ";
            $this->displayBlock('base_navigation', $context, $blocks);
            // line 670
            echo "                    ";
        }
        // line 671
        echo "                </div>
            </header>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 657
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header_inner"));

        // line 658
        echo "                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/header.html.twig", "@zenitPlatformStratus/storefront/base.html.twig", 658)->display($context);
        // line 659
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 663
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        // line 664
        echo "                            <div class=\"nav-main ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["navMainClasses"] ?? null), " "), "html", null, true);
        echo "\">
                                ";
        // line 665
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 668
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 665
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_inner"));

        // line 666
        echo "                                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", "@zenitPlatformStratus/storefront/base.html.twig", 666)->display($context);
        // line 667
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 683
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_breadcrumb"));

        // line 684
        echo "    ";
        // line 685
        echo "    ";
        $context["defaultBreadcrumbs"] = true;
        // line 686
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 686), "sections", [], "any", false, false, false, 686));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 687
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, $context["section"], "blocks", [], "any", false, false, false, 687));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 688
                echo "            ";
                if ((sw_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 688) === "zenit-breadcrumb")) {
                    // line 689
                    echo "                ";
                    $context["defaultBreadcrumbs"] = false;
                    // line 690
                    echo "            ";
                }
                // line 691
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 692
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 693
        echo "
    ";
        // line 694
        if (($context["defaultBreadcrumbs"] ?? null)) {
            // line 695
            echo "        <div class=\"breadcrumb-wrap base-breadcrumb justify-content-";
            echo sw_escape_filter($this->env, twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-breadcrumbs-align"), ["flex-" => ""]), "html", null, true);
            echo "\">
            ";
            // line 696
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", "@zenitPlatformStratus/storefront/base.html.twig", 696)->display(twig_to_array(["context" =>             // line 697
($context["context"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 698
($context["page"] ?? null), "product", [], "any", false, false, false, 698), "seoCategory", [], "any", false, false, false, 698)]));
            // line 700
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 704
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_script"));

        // line 705
        echo "    ";
        $this->displayParentBlock("base_body_script", $context, $blocks);
        echo "

    ";
        // line 707
        $this->displayBlock('zen_base_theme_js_files', $context, $blocks);
        // line 712
        echo "
    ";
        // line 713
        $this->displayBlock('zen_base_theme_js_custom', $context, $blocks);
        // line 720
        echo "
    ";
        // line 722
        echo "    ";
        $this->displayBlock('zen_base_cookie_banner_config', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 707
    public function block_zen_base_theme_js_files($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_theme_js_files"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_theme_js_files"));

        // line 708
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customJsFilesActive")) {
            // line 709
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customJsFiles");
            echo "
        ";
        }
        // line 711
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 713
    public function block_zen_base_theme_js_custom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_theme_js_custom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_theme_js_custom"));

        // line 714
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customJsActive")) {
            // line 715
            echo "            <script data-plugin=\"zenitStratusCustomJs\">
                ";
            // line 716
            echo twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customJs"), ["<script>" => "", "</script>" => ""]);
            echo "
            </script>
        ";
        }
        // line 719
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 722
    public function block_zen_base_cookie_banner_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_cookie_banner_config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_cookie_banner_config"));

        // line 723
        echo "        <script data-plugin=\"zenitStratus\">
            window.zenCookieBannerStyle = '";
        // line 724
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-cookie-banner-style"), "html", null, true);
        echo "'
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2094 => 724,  2091 => 723,  2081 => 722,  2071 => 719,  2065 => 716,  2062 => 715,  2059 => 714,  2049 => 713,  2039 => 711,  2033 => 709,  2030 => 708,  2020 => 707,  2009 => 722,  2006 => 720,  2004 => 713,  2001 => 712,  1999 => 707,  1993 => 705,  1983 => 704,  1971 => 700,  1969 => 698,  1968 => 697,  1967 => 696,  1962 => 695,  1960 => 694,  1957 => 693,  1951 => 692,  1945 => 691,  1942 => 690,  1939 => 689,  1936 => 688,  1931 => 687,  1926 => 686,  1923 => 685,  1921 => 684,  1911 => 683,  1901 => 667,  1898 => 666,  1888 => 665,  1877 => 668,  1875 => 665,  1870 => 664,  1860 => 663,  1850 => 659,  1847 => 658,  1837 => 657,  1825 => 671,  1822 => 670,  1819 => 663,  1816 => 662,  1813 => 660,  1811 => 657,  1806 => 655,  1802 => 654,  1798 => 653,  1795 => 652,  1792 => 651,  1789 => 650,  1786 => 649,  1783 => 648,  1780 => 647,  1777 => 646,  1774 => 645,  1771 => 644,  1768 => 643,  1765 => 641,  1762 => 640,  1759 => 639,  1756 => 638,  1753 => 637,  1750 => 636,  1747 => 635,  1744 => 633,  1741 => 632,  1738 => 631,  1735 => 630,  1732 => 628,  1729 => 627,  1727 => 626,  1725 => 625,  1722 => 624,  1719 => 622,  1716 => 621,  1713 => 620,  1710 => 619,  1707 => 618,  1704 => 617,  1701 => 616,  1698 => 614,  1695 => 613,  1692 => 612,  1689 => 611,  1686 => 606,  1683 => 604,  1680 => 603,  1677 => 602,  1674 => 601,  1671 => 600,  1668 => 599,  1665 => 597,  1662 => 596,  1659 => 595,  1656 => 594,  1653 => 593,  1650 => 591,  1647 => 590,  1644 => 589,  1641 => 588,  1637 => 587,  1633 => 586,  1631 => 585,  1628 => 584,  1625 => 583,  1622 => 582,  1619 => 581,  1616 => 579,  1613 => 578,  1610 => 577,  1607 => 576,  1604 => 575,  1601 => 574,  1598 => 573,  1595 => 572,  1591 => 571,  1587 => 570,  1584 => 569,  1581 => 568,  1579 => 567,  1576 => 566,  1573 => 565,  1570 => 564,  1567 => 563,  1564 => 561,  1561 => 560,  1558 => 559,  1555 => 558,  1552 => 557,  1549 => 555,  1546 => 554,  1543 => 553,  1540 => 552,  1537 => 551,  1535 => 550,  1532 => 549,  1529 => 547,  1526 => 546,  1523 => 545,  1520 => 544,  1517 => 543,  1514 => 542,  1511 => 541,  1508 => 540,  1505 => 539,  1502 => 538,  1498 => 536,  1495 => 535,  1492 => 534,  1489 => 533,  1486 => 532,  1483 => 531,  1479 => 529,  1476 => 528,  1473 => 527,  1470 => 526,  1467 => 525,  1464 => 524,  1461 => 523,  1459 => 522,  1456 => 521,  1454 => 520,  1451 => 519,  1448 => 518,  1445 => 517,  1442 => 516,  1439 => 515,  1436 => 514,  1432 => 512,  1429 => 511,  1426 => 510,  1423 => 509,  1420 => 508,  1417 => 507,  1413 => 505,  1410 => 504,  1407 => 503,  1404 => 502,  1401 => 501,  1398 => 500,  1395 => 499,  1393 => 498,  1390 => 497,  1388 => 496,  1385 => 495,  1382 => 493,  1379 => 492,  1376 => 491,  1373 => 490,  1370 => 489,  1367 => 488,  1364 => 487,  1361 => 486,  1357 => 484,  1354 => 483,  1351 => 482,  1348 => 481,  1345 => 480,  1342 => 479,  1338 => 477,  1335 => 476,  1332 => 475,  1329 => 474,  1326 => 473,  1323 => 472,  1320 => 471,  1318 => 470,  1315 => 469,  1313 => 468,  1310 => 467,  1307 => 466,  1304 => 465,  1301 => 464,  1298 => 463,  1295 => 462,  1291 => 460,  1288 => 459,  1285 => 458,  1282 => 457,  1279 => 456,  1276 => 455,  1272 => 453,  1269 => 452,  1266 => 451,  1263 => 450,  1260 => 449,  1257 => 448,  1254 => 447,  1252 => 446,  1249 => 445,  1247 => 444,  1244 => 443,  1241 => 441,  1238 => 440,  1235 => 439,  1232 => 438,  1229 => 437,  1226 => 436,  1223 => 435,  1220 => 434,  1216 => 432,  1213 => 431,  1210 => 430,  1207 => 429,  1204 => 428,  1201 => 427,  1197 => 425,  1194 => 424,  1191 => 423,  1188 => 422,  1185 => 421,  1182 => 420,  1179 => 419,  1177 => 418,  1174 => 417,  1172 => 416,  1169 => 415,  1166 => 414,  1163 => 413,  1160 => 412,  1157 => 411,  1154 => 410,  1150 => 408,  1147 => 407,  1144 => 406,  1141 => 405,  1138 => 404,  1135 => 403,  1131 => 401,  1128 => 400,  1125 => 399,  1122 => 398,  1119 => 397,  1116 => 396,  1113 => 395,  1111 => 394,  1108 => 393,  1106 => 392,  1103 => 391,  1100 => 389,  1097 => 388,  1094 => 386,  1091 => 385,  1088 => 384,  1085 => 383,  1082 => 382,  1079 => 381,  1076 => 380,  1073 => 379,  1069 => 377,  1066 => 376,  1063 => 375,  1060 => 374,  1057 => 373,  1053 => 371,  1050 => 370,  1047 => 369,  1044 => 368,  1041 => 367,  1038 => 366,  1036 => 365,  1033 => 364,  1031 => 363,  1028 => 362,  1025 => 361,  1022 => 360,  1019 => 359,  1016 => 358,  1012 => 356,  1009 => 355,  1006 => 354,  1003 => 353,  1000 => 352,  996 => 350,  993 => 349,  990 => 348,  987 => 347,  984 => 346,  981 => 345,  979 => 344,  976 => 343,  974 => 342,  971 => 341,  968 => 339,  965 => 338,  962 => 337,  959 => 336,  956 => 335,  953 => 334,  950 => 333,  946 => 331,  943 => 330,  940 => 329,  937 => 328,  934 => 327,  930 => 325,  927 => 324,  924 => 323,  921 => 322,  918 => 321,  915 => 320,  913 => 319,  910 => 318,  908 => 317,  905 => 316,  902 => 315,  899 => 314,  896 => 313,  893 => 312,  889 => 310,  886 => 309,  883 => 308,  880 => 307,  877 => 306,  873 => 304,  870 => 303,  867 => 302,  864 => 301,  861 => 300,  858 => 299,  856 => 298,  853 => 297,  851 => 296,  848 => 295,  845 => 293,  842 => 292,  839 => 291,  836 => 290,  833 => 289,  830 => 288,  827 => 287,  823 => 285,  820 => 284,  817 => 283,  814 => 282,  811 => 281,  807 => 279,  804 => 278,  801 => 277,  798 => 276,  795 => 275,  792 => 274,  790 => 273,  787 => 272,  785 => 271,  782 => 270,  779 => 269,  776 => 268,  773 => 267,  770 => 266,  766 => 264,  763 => 263,  760 => 262,  757 => 261,  754 => 260,  750 => 258,  747 => 257,  744 => 256,  741 => 255,  738 => 254,  735 => 253,  733 => 252,  730 => 251,  728 => 250,  725 => 249,  723 => 248,  720 => 247,  717 => 245,  714 => 244,  711 => 243,  708 => 242,  705 => 241,  702 => 240,  699 => 239,  696 => 238,  693 => 237,  689 => 235,  686 => 234,  683 => 233,  681 => 232,  678 => 231,  675 => 230,  672 => 229,  669 => 228,  666 => 227,  663 => 226,  659 => 224,  656 => 223,  653 => 222,  651 => 221,  648 => 220,  645 => 219,  642 => 218,  639 => 217,  636 => 216,  633 => 215,  630 => 214,  628 => 213,  625 => 212,  623 => 211,  620 => 210,  617 => 209,  614 => 208,  611 => 207,  608 => 206,  605 => 205,  601 => 203,  598 => 202,  595 => 201,  592 => 200,  589 => 199,  586 => 198,  582 => 196,  579 => 195,  576 => 194,  573 => 193,  570 => 192,  567 => 191,  564 => 190,  562 => 189,  559 => 188,  557 => 187,  554 => 186,  551 => 184,  548 => 183,  545 => 182,  542 => 181,  539 => 180,  536 => 179,  533 => 178,  530 => 177,  526 => 175,  523 => 174,  520 => 173,  517 => 172,  514 => 171,  511 => 170,  507 => 168,  504 => 167,  501 => 166,  498 => 165,  495 => 164,  492 => 163,  489 => 162,  487 => 161,  484 => 160,  482 => 159,  479 => 158,  476 => 157,  473 => 156,  470 => 155,  467 => 154,  463 => 153,  459 => 151,  456 => 150,  453 => 149,  450 => 148,  447 => 147,  444 => 146,  440 => 144,  437 => 143,  434 => 142,  431 => 141,  428 => 140,  425 => 139,  422 => 138,  420 => 137,  417 => 136,  415 => 135,  412 => 134,  409 => 132,  406 => 131,  403 => 130,  400 => 129,  397 => 128,  395 => 127,  392 => 126,  389 => 125,  386 => 124,  383 => 123,  380 => 122,  377 => 121,  373 => 119,  370 => 118,  367 => 117,  364 => 116,  362 => 115,  359 => 114,  356 => 113,  353 => 112,  350 => 111,  347 => 110,  344 => 109,  340 => 107,  337 => 106,  334 => 105,  331 => 104,  329 => 103,  326 => 102,  323 => 101,  320 => 100,  317 => 99,  314 => 98,  311 => 97,  308 => 96,  306 => 95,  303 => 94,  301 => 93,  298 => 92,  295 => 91,  292 => 90,  289 => 89,  286 => 88,  283 => 87,  279 => 85,  276 => 84,  273 => 83,  270 => 82,  267 => 81,  264 => 80,  260 => 78,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 72,  240 => 71,  237 => 70,  235 => 69,  232 => 68,  230 => 67,  227 => 66,  225 => 65,  215 => 64,  205 => 59,  202 => 58,  192 => 57,  179 => 679,  174 => 677,  169 => 675,  166 => 674,  164 => 64,  159 => 62,  155 => 60,  153 => 57,  148 => 55,  145 => 54,  135 => 53,  114 => 51,  103 => 2,  100 => 42,  97 => 40,  95 => 39,  92 => 35,  90 => 34,  87 => 31,  85 => 30,  82 => 27,  80 => 26,  77 => 23,  75 => 22,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 10,  61 => 6,  60 => 5,  59 => 4,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{# ... custom fields #}
{% set zenCustomFields = {
    category: page.header.navigation.active.translated.customFields,
    product: page.product.translated.customFields
} %}

{# ... theme script options #}
{% set zenthemeScriptOptions = {
    hasTooltips: theme_config('zen-shop-navigation-tooltips'),
    tooltipPlacement: theme_config('zen-shop-navigation-tooltips-placement')
} %}

{# ... body classes #}
{% set bodyClasses = [] %}
{% set bodyClasses = ['is-lo-' ~ theme_config('zen-layout-style')]|merge(bodyClasses) %}
{% set bodyClasses = ['is-tb-' ~ theme_config('zen-top-bar-style')]|merge(bodyClasses) %}
{% set bodyClasses = ['is-srch-' ~ theme_config('zen-search-style')]|merge(bodyClasses) %}
{% set bodyClasses = ['is-mn-' ~ theme_config('zen-main-navigation-style')]|merge(bodyClasses) %}

{% if zenCustomFields.category.zenit_stratus_category_classes is not empty %}
    {% set bodyClasses = [zenCustomFields.category.zenit_stratus_category_classes]|merge(bodyClasses) %}
{% endif %}

{% if theme_config('zen-flyout-navigation-full-width') %}
    {% set bodyClasses = ['is-flyout-fullscreen']|merge(bodyClasses) %}
{% endif %}

{% if theme_config('zen-layout-forms-floating-labels') %}
    {% set bodyClasses = ['has-lbl-floating']|merge(bodyClasses) %}
{% endif %}

{% if config('zenitPlatformStratus.config.marketingActive') %}
    {% set bodyClasses = ['has-marketing-slider']|merge(bodyClasses) %}
{% endif %}

{# ... gallery slider mode #}
{% if zenCustomFields.product.zenit_stratus_gallery_mode is empty or zenCustomFields.product.zenit_stratus_gallery_mode is same as ('inherit') %}
    {% set galleryMode = theme_config(\"zen-product-gallery-mode\") %}
{% else %}
    {% set galleryMode = zenCustomFields.product.zenit_stratus_gallery_mode %}
{% endif %}

{#{% block base_html %}#}
{#    {% dump %}#}

{#    {{ parent() }}#}
{#{% endblock %}#}

{% block base_body_classes %}{{ parent() }} {{ bodyClasses|join(' ') }}{% endblock %}

{% block base_body_inner %}

    {{ block('base_noscript') }}

    {% block zen_base_preloader %}
        {% sw_include '@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig' %}
    {% endblock %}

    <div class=\"page-wrapper\"
         data-zen-theme-scripts-options=\"{{ zenthemeScriptOptions|json_encode }}\">

        {% block base_header %}
            {# ... single lined header #}
            {% if theme_config('zen-header-style') is same as ('single-line') %}
                {# logo left #}
                {% if theme_config('zen-logo-position') is same as ('left') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default')  %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg order-lg-2' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-xl order-lg-2' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-md-3' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg order-lg-2 ' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 ml-sm-auto' %}

                            {% if theme_config('zen-main-navigation-align') is same as ('center') %}
                                {% set logoClasses =                    'col-12 col-sm-auto col-xl-3 order-1' %}
                                {% set actionClasses =                  'col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% endif %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-xl order-lg-2' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 ml-sm-auto' %}

                            {% if theme_config('zen-main-navigation-align') is same as ('center') %}
                                {% set logoClasses =                    'col-12 col-sm-auto col-xl-3 order-1' %}
                                {% set actionClasses =                  'col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% endif %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 ml-sm-auto' %}

                            {% if theme_config('zen-main-navigation-align') is same as ('center') %}
                                {% set logoClasses =                    'col-12 col-sm-auto col-xl-3 order-1' %}
                            {% endif %}
                        {% endif %}
                    {% endif %}

                {# logo center #}
                {% elseif theme_config('zen-logo-position') is same as ('center') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default')  %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 pos-xl-center col-xl-2 order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg col-xl-5 order-lg-2' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 pos-lg-center col-lg-2 order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-xl-5 order-lg-2' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-lg-auto pos-lg-center order-1 order-lg-3' %} {# TODO: pos-lg-center better solution? #}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 order-md-3 order-lg-2 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-lg-1' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-4 col-lg-12 col-xl-2 order-1 order-md-2 order-lg-1 order-xl-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg col-xl-5 order-lg-2 order-xl-1' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-lg-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-4 col-xl-2 order-1 order-md-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-xl-5 order-xl-1' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-xl-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-4 col-xl-2 order-1 order-md-2 order-xl-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 col-xl-5 order-1' %}
                        {% endif %}
                    {% endif %}

                {# logo right #}
                {% elseif theme_config('zen-logo-position') is same as ('right') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg order-lg-3 justify-content-end' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-lg order-lg-3 justify-content-end' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationClasses =              'd-none d-lg-flex col-lg order-lg-2 justify-content-end' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                            {% if theme_config('zen-main-navigation-align') is same as ('center') %}
                                {% set actionClasses =                  'col-auto col-xl-3 order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% endif %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationClasses =              'd-none d-xl-flex col-lg order-lg-2 justify-content-end' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                            {% if theme_config('zen-main-navigation-align') is same as ('center') %}
                                {% set actionClasses =                      'col-auto col-xl-3 order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% endif %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationClasses =              'd-none' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {% endif %}
                {% endif %}

            {# ... multi lined header #}
            {% elseif theme_config('zen-header-style') is same as ('multi-line') %}
                {# logo left #}
                {% if theme_config('zen-logo-position') is same as ('left') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto col-lg-3 order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-6 order-4 order-sm-2 ml-auto ml-lg-0 mr-lg-0' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto ml-sm-0 ml-lg-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto col-xl-3 order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-xl-6 order-4 order-sm-2 ml-auto ml-xl-0 mr-xl-0' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto ml-sm-0 ml-xl-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm order-4 order-sm-2 ml-auto ml-sm-3' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-md-3' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0 ml-lg-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 ml-sm-auto' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto col-xl-3 order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 ml-sm-auto' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 ml-sm-auto' %}
                        {% endif %}
                    {% endif %}

                {# logo center #}
                {% elseif theme_config('zen-logo-position') is same as ('center') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-lg-4 pos-lg-center order-1 order-lg-2' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-2 order-4 order-sm-2 order-md-3 order-lg-1 ml-auto ml-lg-0' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-lg-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-xl-4 pos-xl-center order-1 order-lg-2' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-2 order-4 order-sm-2 order-md-3 order-xl-1 ml-auto ml-xl-0' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0 ml-xl-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-lg-auto pos-lg-center order-1 order-lg-3' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-3 order-lg-2 ml-auto ml-lg-0 mr-lg-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-lg-3' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-4 col-lg-4 pos-lg-center order-1 order-md-2 order-lg-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-lg-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-4 pos-xl-center order-1 order-md-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-xl-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-4 order-1 order-md-2 order-xl-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 col-xl-4 order-1' %}
                        {% endif %}
                    {% endif %}

                {# logo right #}
                {% elseif theme_config('zen-logo-position') is same as ('right') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-6 order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto col-lg-3 order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-xl-6 order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto col-xl-3 order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-3' %}
                            {% set searchClasses =                      'col-12 col-sm order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {% endif %}
                {% endif %}

            {# ... Two lined header #}
            {% elseif theme_config('zen-header-style') is same as ('two-line') %}

                {# logo left #}
                {% if theme_config('zen-logo-position') is same as ('left') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 ml-auto' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-3' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-2 ml-auto' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-3' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 order-md-3' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-3 order-1' %}
                            {% set searchClasses =                      'col-12 col-sm order-4 order-sm-2 col-md-6 ml-auto ml-sm-0' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-md-3 ml-md-auto' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-3 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2 ml-sm-auto' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-xl-flex col-auto order-lg-3 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 ml-sm-auto' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 ml-sm-auto' %}
                        {% endif %}
                    {% endif %}

                {# logo center #}
                {% elseif theme_config('zen-logo-position') is same as ('center') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-lg-4 pos-lg-center order-1 order-lg-2' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-3 order-4 order-sm-2 order-md-3 order-lg-1 ml-auto ml-lg-0' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-3 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-xl-4 pos-xl-center order-1 order-lg-2' %}
                            {% set searchClasses =                      'col-12 col-sm-auto col-lg-3 order-4 order-sm-2 order-md-3 order-xl-1 ml-auto ml-xl-0' %}
                            {% set topBarClasses =                      'd-none d-xl-flex col-auto order-xl-3 ml-auto' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-lg-auto pos-lg-center order-1 order-lg-2' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-4 order-sm-3 order-lg-2 ml-auto ml-lg-0 mr-lg-auto' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-3 order-md-4 ml-auto ml-sm-0' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2 order-lg-3' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-logo-position') is same as ('center') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-4 col-lg-4 pos-lg-center order-1 order-md-2 order-lg-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-1' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-lg-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-4 pos-xl-center order-1 order-md-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-xl-flex col-auto order-xl-1' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 d-xl-none order-1' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-4 order-1 order-md-2 order-xl-2' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-3 ml-auto' %}
                            {% set mainNavigationToggleClasses =        'col-auto col-md-4 col-xl-4 order-1' %}
                        {% endif %}
                    {% endif %}

                {# logo right #}
                {% elseif theme_config('zen-logo-position') is same as ('right') %}
                    {# search default #}
                    {% if theme_config('zen-search-style') is same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-2' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm-auto order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set topBarClasses =                      'd-none d-xl-flex col-auto order-xl-2' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-md-auto order-1 order-md-4 ml-md-auto' %}
                            {% set searchClasses =                      'col-12 col-sm order-5 order-sm-3 order-lg-2 ml-auto ml-md-0' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-4 order-md-1 ml-auto ml-sm-0 reverse-md' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {# search not default #}
                    {% elseif theme_config('zen-search-style') is not same as ('default') %}
                        {# offcanvas style #}
                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-md') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-lg-flex col-auto order-lg-2' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-lg-none order-2' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-lg') %}
                            {% set logoClasses =                        'col-12 col-sm-auto col-xl-3 order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none d-xl-flex col-auto order-xl-2' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto d-xl-none order-2 mr-sm-auto mr-xl-0' %}

                        {% elseif theme_config('zen-main-navigation-style') is same as ('offcanvas-xl') %}
                            {% set logoClasses =                        'col-12 col-sm-auto order-1 order-sm-4 ml-sm-auto' %}
                            {% set searchClasses =                      'col-12 order-5' %}
                            {% set topBarClasses =                      'd-none' %}
                            {% set actionClasses =                      'col-auto order-3 order-sm-1 ml-auto ml-sm-0 reverse-sm' %}
                            {% set mainNavigationToggleClasses =        'col-auto order-2' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif %}

            {# ... single lined mobile headers #}
            {% if theme_config('zen-header-style-mobile') is same as ('single-line') %}
                {# logo left, search default #}
                {% if theme_config('zen-logo-position') is same as ('left') and theme_config('zen-search-style') is same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto'}) %}
                    {% set actionClasses =                      actionClasses|replace({'ml-auto': ''}) %}
                    {% set mainNavigationToggleClasses =        mainNavigationToggleClasses|replace({'col-auto': 'col-auto ml-auto ml-sm-0', 'order-2': 'order-3'}) %}

                    {# logo left, search not default #}
                {% elseif theme_config('zen-logo-position') is same as ('left') and theme_config('zen-search-style') is not same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto'}) %}
                    {% set actionClasses =                      actionClasses|replace({'ml-auto': ''}) %}
                    {% set mainNavigationToggleClasses =        mainNavigationToggleClasses|replace({'ml-sm-auto': 'ml-auto'}) %}

                    {# logo center, search default #}
                {% elseif theme_config('zen-logo-position') is same as ('center') and theme_config('zen-search-style') is same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto', 'pos-xl-center': 'pos-center', 'pos-lg-center': 'pos-center'}) %}
                    {% set actionClasses =                      actionClasses|replace({'col-auto': 'col col-lg-auto'}) %}

                    {% if theme_config('zen-header-style') is same as ('single-line') %}
                        {% set searchClasses =                      searchClasses|replace({'col-sm-auto': 'col-sm-3 col-lg-auto', 'ml-auto': 'ml-xl-auto'}) %}
                        {% set actionClasses =                      actionClasses|replace({'ml-sm-0': 'ml-xl-0'}) %}
                        {% set mainNavigationClasses =              mainNavigationClasses|replace({'d-lg-flex': 'd-xl-flex'}) %} {# ... have to move the main navigation as offcanvas breakpoint #}
                        {% set mainNavigationToggleClasses =        mainNavigationToggleClasses|replace({'d-lg-none': 'd-xl-none'}) %} {# ... have to move the main navigation as offcanvas breakpoint #}
                    {% elseif theme_config('zen-header-style') is same as ('multi-line') %}
                        {% set searchClasses =                      searchClasses|replace({'col-sm-auto': 'col-sm-3 col-lg-auto', 'ml-auto': ''}) %}
                        {% set actionClasses =                      actionClasses|replace({'ml-sm-0': ''}) %}
                    {% elseif theme_config('zen-header-style') is same as ('two-line') %}
                        {% set searchClasses =                      searchClasses|replace({'col-sm-auto': 'col-sm-3 col-lg-auto', 'ml-auto': ''}) %}
                        {% set actionClasses =                      actionClasses|replace({'ml-sm-0': 'ml-xl-0'}) %}
                    {% endif %}

                    {# logo center, search not default #}
                {% elseif theme_config('zen-logo-position') is same as ('center') and theme_config('zen-search-style') is not same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto pos-center'}) %}
                    {% set actionClasses =                      actionClasses|replace({'col-auto': 'col col-lg-auto'}) %}

                    {% if theme_config('zen-header-style') is same as ('single-line') %}
                        {% set mainNavigationClasses =              mainNavigationClasses|replace({'d-lg-flex': 'd-xl-flex'}) %} {# ... have to move the main navigation as offcanvas breakpoint #}
                        {% set mainNavigationToggleClasses =        mainNavigationToggleClasses|replace({'col-md-4':'col-auto', 'd-lg-none': 'd-xl-none'}) %} {# ... have to move the main navigation as offcanvas breakpoint #}
                    {% else %}
                        {% set mainNavigationToggleClasses =        mainNavigationToggleClasses|replace({'col-md-4':'col-auto'}) %}
                    {% endif %}

                    {# logo right, search default #}
                {% elseif theme_config('zen-logo-position') is same as ('right') and theme_config('zen-search-style') is same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto', 'order-1 order-md-4': 'order-4', 'ml-md-auto': 'ml-auto', 'ml-md-3': 'ml-3' }) %}
                    {% set searchClasses =                      searchClasses|replace({'ml-auto ml-md-0': ''}) %}
                    {% set actionClasses =                      actionClasses|replace({'ml-auto ml-sm-0': '', 'order-4 order-md-1': 'order-1', 'reverse-sm': 'reverse', 'reverse-md': 'reverse'}) %}

                    {# logo right, search not default #}
                {% elseif theme_config('zen-logo-position') is same as ('right') and theme_config('zen-search-style') is not same as ('default') %}
                    {% set logoClasses =                        logoClasses|replace({'col-12': 'col-auto', 'order-1 order-sm-4': 'order-4', 'ml-sm-auto': 'ml-auto'}) %}
                    {% set actionClasses =                      actionClasses|replace({'ml-auto ml-sm-0': '', 'order-3 order-sm-1': 'order-1', 'reverse-sm': 'reverse', 'reverse-md': 'reverse'}) %}
                {% endif %}
            {% endif %}

            {# sticky header js options #}
            {% set stickyHeaderOptions = {
                viewports: theme_config('zen-sticky-header'),
                scrollOffset: theme_config('zen-sticky-header-offset'),
                autoHide: theme_config('zen-sticky-header-hide')
            } %}
            {% set stickyHeader = theme_config('zen-sticky-header') ? 'true' : 'false' %}
            {% set headerOpacity = zenCustomFields.category.zenit_stratus_category_header_bg_opacity|replace({'%': ''}) %}
            {% set navigationOpacity = zenCustomFields.category.zenit_stratus_category_nav_main_opacity|replace({'%': ''}) %}

            {# header classes array #}
            {% set headerClasses = ['header-' ~ theme_config('zen-header-style'), 'header-' ~ theme_config('zen-header-style-mobile') ~ '-mobile', 'header-logo-' ~ theme_config('zen-logo-position')]%}
            {% if (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) and zenCustomFields.category.zenit_stratus_category_header_position is empty or zenCustomFields.category.zenit_stratus_category_header_position is same as ('inherit') %}
                {% set headerClasses = ['header-pos-' ~ theme_config('zen-category-header-position')]|merge(headerClasses) %}
            {% elseif (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) %}
                {% set headerClasses = ['header-pos-' ~ zenCustomFields.category.zenit_stratus_category_header_position]|merge(headerClasses) %}
            {% endif %}

            {# ... checks if header got any opacity settings #}
            {% if (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) %}
                {% if ( headerOpacity is not empty and headerOpacity is not same as ('inherit') and headerOpacity is not same as ('100') )
                    or ( navigationOpacity is not empty and navigationOpacity is not same as ('inherit') and navigationOpacity is not same as ('100') ) %}
                    {% set headerClasses = ['has-bg-opacity']|merge(headerClasses) %}
                {% elseif theme_config('zen-category-header-bg-opacity') is not same as ('100')
                    or theme_config('zen-category-nav-main-opacity') is not same as ('100') %}
                    {% set headerClasses = ['has-bg-opacity']|merge(headerClasses) %}
                {% endif %}
            {% endif %}

            {# nav header classes array #}
            {% set navHeaderClasses = [] %}
            {% if (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) and headerOpacity is empty or headerOpacity is same as ('inherit') %}
                {% set navHeaderClasses = ['bg-opacity-' ~ theme_config('zen-category-header-bg-opacity')]|merge(navHeaderClasses)  %}
            {% elseif (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) %}
                {% set navHeaderClasses = ['bg-opacity-' ~ headerOpacity]|merge(navHeaderClasses) %}
            {% endif %}

            {# nav main classes array #}
            {% set navMainClasses = [] %}
            {% if (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) and navigationOpacity is empty or navigationOpacity is same as ('inherit') %}
                {% set navMainClasses = ['bg-opacity-' ~ theme_config('zen-category-nav-main-opacity')]|merge(navMainClasses) %}
            {% elseif (controllerName|lower is same as ('navigation') or controllerName|lower is same as ('landingpage')) %}
                {% set navMainClasses = ['bg-opacity-' ~ navigationOpacity]|merge(navMainClasses) %}
            {% endif %}
            {% if theme_config('zen-main-navigation-scroll') %}
                {% set navMainClasses = ['navbar-nav-scroll']|merge(navMainClasses) %}
            {% endif %}

            <header class=\"header-main {{ headerClasses|join(' ') }}\"
                    data-sticky=\"{{ stickyHeader }}\"
                    data-zen-sticky-header-options=\"{{ stickyHeaderOptions|json_encode }}\">
                <div class=\"header-inner\">
                    {% block base_header_inner %}
                        {% sw_include '@Storefront/storefront/layout/header/header.html.twig' %}
                    {% endblock %}

                    {# ... multi-line header navigation #}
                    {% if theme_config('zen-header-style') is not same as ('single-line') %}
                        {% block base_navigation %}
                            <div class=\"nav-main {{ navMainClasses|join(' ') }}\">
                                {% block base_navigation_inner %}
                                    {% sw_include '@Storefront/storefront/layout/navigation/navigation.html.twig' %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endif %}
                </div>
            </header>
        {% endblock %}

        {{ block('base_offcanvas_navigation') }}

        {{ block('base_main') }}

        {{ block('base_footer') }}
    </div>
{% endblock %}

{% block base_breadcrumb %}
    {# ... checks if custom zenit-breadcrumb is in use #}
    {% set defaultBreadcrumbs = true %}
    {% for section in page.cmsPage.sections %}
        {% for block in section.blocks %}
            {% if block.type is same as ('zenit-breadcrumb') %}
                {% set defaultBreadcrumbs = false %}
            {% endif %}
        {% endfor %}
    {% endfor %}

    {% if defaultBreadcrumbs %}
        <div class=\"breadcrumb-wrap base-breadcrumb justify-content-{{ theme_config('zen-breadcrumbs-align')|replace({'flex-': ''}) }}\">
            {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                context: context,
                category: page.product.seoCategory
            } only %}
        </div>
    {% endif %}
{% endblock %}

{% block base_body_script %}
    {{ parent() }}

    {% block zen_base_theme_js_files %}
        {% if config('zenitPlatformStratus.config.customJsFilesActive') %}
            {{ config('zenitPlatformStratus.config.customJsFiles')|raw }}
        {% endif %}
    {% endblock %}

    {% block zen_base_theme_js_custom %}
        {% if config('zenitPlatformStratus.config.customJsActive') %}
            <script data-plugin=\"zenitStratusCustomJs\">
                {{ config('zenitPlatformStratus.config.customJs')|replace({'<script>': '','</script>': ''})|raw }}
            </script>
        {% endif %}
    {% endblock %}

    {# Cookie Banner #}
    {% block zen_base_cookie_banner_config %}
        <script data-plugin=\"zenitStratus\">
            window.zenCookieBannerStyle = '{{ theme_config('zen-cookie-banner-style') }}'
        </script>
    {% endblock %}
{% endblock %}
", "@zenitPlatformStratus/storefront/base.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/base.html.twig");
    }
}
