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

/* @zenitPlatformStratus/storefront/layout/header/header.html.twig */
class __TwigTemplate_1b9a2d1288b39a055d055fc6d5448c6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_top_bar' => [$this, 'block_layout_top_bar'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_main_navigation' => [$this, 'block_layout_header_main_navigation'],
            'layout_header_main_navigation_inner' => [$this, 'block_layout_header_main_navigation_inner'],
            'zen_layout_header_top_bar' => [$this, 'block_zen_layout_header_top_bar'],
            'zen_layout_navigation_offcanvas_navigation_action_language' => [$this, 'block_zen_layout_navigation_offcanvas_navigation_action_language'],
            'zen_layout_navigation_offcanvas_navigation_action_currency' => [$this, 'block_zen_layout_navigation_offcanvas_navigation_action_currency'],
            'zen_layout_navigation_offcanvas_navigation_action_service' => [$this, 'block_zen_layout_navigation_offcanvas_navigation_action_service'],
            'layout_header_navigation_toggle' => [$this, 'block_layout_header_navigation_toggle'],
            'layout_header_navigation_toggle_button' => [$this, 'block_layout_header_navigation_toggle_button'],
            'layout_header_navigation_toggle_button_icon' => [$this, 'block_layout_header_navigation_toggle_button_icon'],
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'zen_layout_header_search_overlay_close' => [$this, 'block_zen_layout_header_search_overlay_close'],
            'zen_layout_header_search_overlay_close_icon' => [$this, 'block_zen_layout_header_search_overlay_close_icon'],
            'layout_header_actions' => [$this, 'block_layout_header_actions'],
            'layout_header_search_toggle' => [$this, 'block_layout_header_search_toggle'],
            'layout_header_actions_wishlist' => [$this, 'block_layout_header_actions_wishlist'],
            'layout_header_actions_account' => [$this, 'block_layout_header_actions_account'],
            'layout_header_actions_cart' => [$this, 'block_layout_header_actions_cart'],
            'zen_layout_header_top_bar_toggle' => [$this, 'block_zen_layout_header_top_bar_toggle'],
            'layout_header_search_expandable' => [$this, 'block_layout_header_search_expandable'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/header.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 4
        echo "    ";
        $context["topBarStyle"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-style");
        // line 5
        echo "    ";
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-style") === "hidden") && (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "languages", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) > 1) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "currencies", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) > 1)) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")))) {
            // line 6
            echo "        ";
            $context["topBarStyle"] = "offcanvas";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context["topBarStyle"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-style");
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('layout_top_bar', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('layout_header_navigation', $context, $blocks);
        // line 231
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_layout_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_top_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_top_bar"));

        // line 12
        echo "        ";
        if ((($context["topBarStyle"] ?? null) === "offcanvas")) {
            // line 13
            echo "            ";
            if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")))) {
                // line 14
                echo "                <div class=\"d-none js-top-bar-offcanvas-initial-content\">
                    ";
                // line 15
                $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 15)->display(twig_array_merge($context, ["topBarStyle" => ($context["topBarStyle"] ?? null)]));
                // line 16
                echo "                </div>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            ";
            if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")))) {
                // line 20
                echo "                <div class=\"collapse";
                if (((($context["topBarStyle"] ?? null) === "collapsible") || (($context["topBarStyle"] ?? null) === "default"))) {
                    echo " show";
                }
                echo "\"
                     id=\"topBarCollapse\">
                    ";
                // line 22
                $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 22)->display(twig_array_merge($context, ["topBarStyle" => ($context["topBarStyle"] ?? null)]));
                // line 23
                echo "                </div>
            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_layout_header_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        // line 29
        echo "        <div class=\"nav-header ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["navHeaderClasses"] ?? null), " "), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"header-row row header-gutters align-items-center ";
        // line 31
        echo sw_escape_filter($this->env, ($context["headerRowClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 32
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 37
        echo "
                    ";
        // line 38
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line")) {
            // line 39
            echo "                        ";
            $this->displayBlock('layout_header_main_navigation', $context, $blocks);
            // line 46
            echo "                    ";
        }
        // line 47
        echo "
                    ";
        // line 48
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line")) {
            // line 49
            echo "                        ";
            $this->displayBlock('zen_layout_header_top_bar', $context, $blocks);
            // line 66
            echo "                    ";
        }
        // line 67
        echo "
                    ";
        // line 68
        $this->displayBlock('layout_header_navigation_toggle', $context, $blocks);
        // line 82
        echo "
                    ";
        // line 83
        $this->displayBlock('layout_header_search', $context, $blocks);
        // line 103
        echo "
                    ";
        // line 104
        $this->displayBlock('layout_header_actions', $context, $blocks);
        // line 219
        echo "                </div>
            </div>

            ";
        // line 222
        $this->displayBlock('layout_header_search_expandable', $context, $blocks);
        // line 229
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        // line 33
        echo "                        <div class=\"header-logo-col ";
        echo sw_escape_filter($this->env, ($context["logoClasses"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 34
        $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 34)->display($context);
        // line 35
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_layout_header_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_main_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_main_navigation"));

        // line 40
        echo "                            <div class=\"header-nav-col nav-main ";
        echo sw_escape_filter($this->env, ($context["mainNavigationClasses"] ?? null), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["navMainClasses"] ?? null), " "), "html", null, true);
        echo "\">
                                ";
        // line 41
        $this->displayBlock('layout_header_main_navigation_inner', $context, $blocks);
        // line 44
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_layout_header_main_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_main_navigation_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_main_navigation_inner"));

        // line 42
        echo "                                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 42)->display($context);
        // line 43
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_zen_layout_header_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar"));

        // line 50
        echo "                            <div class=\"header-top-bar-col ";
        echo sw_escape_filter($this->env, ($context["topBarClasses"] ?? null), "html", null, true);
        echo "\">
                                <div class=\"row no-gutters\">
                                    ";
        // line 52
        $this->displayBlock('zen_layout_navigation_offcanvas_navigation_action_language', $context, $blocks);
        // line 55
        echo "
                                    ";
        // line 56
        $this->displayBlock('zen_layout_navigation_offcanvas_navigation_action_currency', $context, $blocks);
        // line 59
        echo "
                                    ";
        // line 60
        $this->displayBlock('zen_layout_navigation_offcanvas_navigation_action_service', $context, $blocks);
        // line 63
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_zen_layout_navigation_offcanvas_navigation_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_language"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_language"));

        // line 53
        echo "                                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 53)->display($context);
        // line 54
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_zen_layout_navigation_offcanvas_navigation_action_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_currency"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_currency"));

        // line 57
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 57)->display($context);
        // line 58
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_zen_layout_navigation_offcanvas_navigation_action_service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_service"));

        // line 61
        echo "                                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 61)->display($context);
        // line 62
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_layout_header_navigation_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle"));

        // line 69
        echo "                        <div class=\"header-menu-button ";
        echo sw_escape_filter($this->env, ($context["mainNavigationToggleClasses"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 70
        $this->displayBlock('layout_header_navigation_toggle_button', $context, $blocks);
        // line 80
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_layout_header_navigation_toggle_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button"));

        // line 71
        echo "                                <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                        type=\"button\"
                                        data-offcanvas-menu=\"true\"
                                        aria-label=\"";
        // line 74
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        echo "\">
                                    ";
        // line 75
        $this->displayBlock('layout_header_navigation_toggle_button_icon', $context, $blocks);
        // line 78
        echo "                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_layout_header_navigation_toggle_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button_icon"));

        // line 76
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 76);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 77
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        // line 84
        echo "                        ";
        if ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "expandable")) {
            // line 85
            echo "                            <div class=\"header-search-col ";
            echo sw_escape_filter($this->env, ($context["searchClasses"] ?? null), "html", null, true);
            echo "\">

                                ";
            // line 87
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "overlay")) {
                // line 88
                echo "                                    ";
                $this->displayBlock('zen_layout_header_search_overlay_close', $context, $blocks);
                // line 97
                echo "                                ";
            }
            // line 98
            echo "
                                ";
            // line 99
            $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 99)->display($context);
            // line 100
            echo "                            </div>
                        ";
        }
        // line 102
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_zen_layout_header_search_overlay_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_search_overlay_close"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_search_overlay_close"));

        // line 89
        echo "                                        <button class=\"d-none js-overlay-close\"
                                                type=\"button\"
                                                aria-label=\"Close\">
                                            ";
        // line 92
        $this->displayBlock('zen_layout_header_search_overlay_close_icon', $context, $blocks);
        // line 95
        echo "                                        </button>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_zen_layout_header_search_overlay_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_search_overlay_close_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_search_overlay_close_icon"));

        // line 93
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 93);
        })())->display(twig_array_merge($context, ["size" => "lg", "name" => "x"]));
        // line 94
        echo "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_layout_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions"));

        // line 105
        echo "                        <div class=\"header-actions-col ";
        echo sw_escape_filter($this->env, ($context["actionClasses"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"row no-gutters";
        // line 106
        if ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "right")) {
            echo " justify-content-end";
        }
        echo "\">
                                ";
        // line 107
        $this->displayBlock('layout_header_search_toggle', $context, $blocks);
        // line 127
        echo "
                                ";
        // line 128
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 129
            echo "                                    ";
            $this->displayBlock('layout_header_actions_wishlist', $context, $blocks);
            // line 141
            echo "                                ";
        }
        // line 142
        echo "
                                ";
        // line 143
        $this->displayBlock('layout_header_actions_account', $context, $blocks);
        // line 150
        echo "
                                ";
        // line 151
        $this->displayBlock('layout_header_actions_cart', $context, $blocks);
        // line 165
        echo "
                                ";
        // line 166
        $this->displayBlock('zen_layout_header_top_bar_toggle', $context, $blocks);
        // line 216
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_layout_header_search_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_toggle"));

        // line 108
        echo "                                    <div class=\"col-auto";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "default")) {
            echo " d-sm-none";
        }
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style-mobile") === "single-line") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center"))) {
            echo " mr-auto";
        }
        echo "\">
                                        <div class=\"search-toggle\">
                                            <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                                    type=\"button\"
                                                    ";
        // line 112
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "overlay")) {
            // line 113
            echo "                                                        data-toggle=\"overlay\"
                                                    ";
        } else {
            // line 115
            echo "                                                        data-toggle=\"collapse\"
                                                        data-target=\"#searchCollapse\"
                                                        aria-expanded=\"false\"
                                                        aria-controls=\"searchCollapse\"
                                                    ";
        }
        // line 120
        echo "                                                    aria-label=\"";
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                                ";
        // line 121
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 121);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 122
        echo "                                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 122);
        })())->display(twig_array_merge($context, ["class" => "search-close d-none", "name" => "x"]));
        // line 123
        echo "                                            </button>
                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_layout_header_actions_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_wishlist"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_wishlist"));

        // line 130
        echo "                                        <div class=\"col-auto\">
                                            <div class=\"header-wishlist\">
                                                <a class=\"btn header-wishlist-btn header-actions-btn\"
                                                   href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.page");
        echo "\"
                                                   title=\"";
        // line 134
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\"
                                                   aria-label=\"";
        // line 135
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        echo "\">
                                                    ";
        // line 136
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 136)->display($context);
        // line 137
        echo "                                                </a>
                                            </div>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_layout_header_actions_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account"));

        // line 144
        echo "                                    <div class=\"col-auto\">
                                        <div class=\"account-menu\">
                                            ";
        // line 146
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/account-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 146)->display($context);
        // line 147
        echo "                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_layout_header_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart"));

        // line 152
        echo "                                    <div class=\"col-auto\">
                                        <div class=\"header-cart\"
                                             data-offcanvas-cart=\"true\">
                                            <a class=\"btn header-cart-btn header-actions-btn\"
                                               href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        echo "\"
                                               data-cart-widget=\"true\"
                                               title=\"";
        // line 158
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\"
                                               aria-label=\"";
        // line 159
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        echo "\">
                                                ";
        // line 160
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 160)->display($context);
        // line 161
        echo "                                            </a>
                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 166
    public function block_zen_layout_header_top_bar_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_toggle"));

        // line 167
        echo "                                    ";
        // line 168
        echo "                                    ";
        $context["marketingBanner"] = [];
        // line 169
        echo "                                    ";
        $context["marketingBanner"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")], ($context["marketingBanner"] ?? null));
        // line 170
        echo "                                    ";
        $context["marketingBanner"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingText")], ($context["marketingBanner"] ?? null));
        // line 171
        echo "                                    ";
        $context["marketingBanner"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonText")], ($context["marketingBanner"] ?? null));
        // line 172
        echo "                                    ";
        $context["marketingBanner"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonLink")], ($context["marketingBanner"] ?? null));
        // line 173
        echo "                                    ";
        $context["marketingBanner"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonTarget")], ($context["marketingBanner"] ?? null));
        // line 174
        echo "                                    ";
        $context["marketingBannerId"] = twig_length_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["marketingBanner"] ?? null)));
        // line 175
        echo "
                                    ";
        // line 176
        $context["zenCollapseTopBarOptions"] = ["id" => ((        // line 177
($context["topBarStyle"] ?? null) . "-") . ($context["marketingBannerId"] ?? null)), "type" =>         // line 178
($context["topBarStyle"] ?? null)];
        // line 180
        echo "
                                    ";
        // line 181
        if (( !(($context["topBarStyle"] ?? null) === "default") &&  !(($context["topBarStyle"] ?? null) === "hidden"))) {
            // line 182
            echo "                                        ";
            if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")))) {
                // line 183
                echo "                                            <div class=\"col-auto d-none d-lg-block\">
                                                <div class=\"top-bar-toggle\">
                                                    <button class=\"btn header-actions-btn top-bar-toggle-btn\"
                                                            type=\"button\"
                                                            aria-label=\"";
                // line 187
                echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.general.moreLink")), "html", null, true);
                echo "\"
                                                        ";
                // line 188
                if ((($context["topBarStyle"] ?? null) === "offcanvas")) {
                    // line 189
                    echo "                                                            data-offcanvas-top-bar=\"true\"
                                                        ";
                }
                // line 191
                echo "                                                        ";
                if ((($context["topBarStyle"] ?? null) === "collapsible")) {
                    // line 192
                    echo "                                                            data-toggle=\"collapse\"
                                                            data-target=\"#topBarCollapse\"
                                                            aria-expanded=\"true\"
                                                            data-zen-collapse-top-bar-options=\"";
                    // line 195
                    echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["zenCollapseTopBarOptions"] ?? null)), "html", null, true);
                    echo "\"
                                                        ";
                }
                // line 197
                echo "                                                        ";
                if ((($context["topBarStyle"] ?? null) === "expandable")) {
                    // line 198
                    echo "                                                            data-toggle=\"collapse\"
                                                            data-target=\"#topBarCollapse\"
                                                            aria-expanded=\"false\"
                                                            data-zen-collapse-top-bar-options=\"";
                    // line 201
                    echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["zenCollapseTopBarOptions"] ?? null)), "html", null, true);
                    echo "\"
                                                        ";
                }
                // line 202
                echo ">
                                                        ";
                // line 203
                if (((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-lg") || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-style") === "offcanvas-xl")) || ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "single-line") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-position") === "center")) && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style-mobile") === "single-line")))) {
                    // line 206
                    echo "                                                            ";
                    ((function () use ($context, $blocks) {
                        $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                        $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                        return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 206);
                    })())->display(twig_array_merge($context, ["name" => "more-vertical"]));
                    // line 207
                    echo "                                                        ";
                } else {
                    // line 208
                    echo "                                                            ";
                    ((function () use ($context, $blocks) {
                        $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                        $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                        return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 208);
                    })())->display(twig_array_merge($context, ["name" => "stack"]));
                    // line 209
                    echo "                                                        ";
                }
                // line 210
                echo "                                                    </button>
                                                </div>
                                            </div>
                                        ";
            }
            // line 214
            echo "                                    ";
        }
        // line 215
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_layout_header_search_expandable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_expandable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_expandable"));

        // line 223
        echo "                ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-search-style") === "expandable")) {
            // line 224
            echo "                    <div class=\"header-search-col\">
                        ";
            // line 225
            $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", 225)->display($context);
            // line 226
            echo "                    </div>
                ";
        }
        // line 228
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 228,  1048 => 226,  1046 => 225,  1043 => 224,  1040 => 223,  1030 => 222,  1020 => 215,  1017 => 214,  1011 => 210,  1008 => 209,  999 => 208,  996 => 207,  987 => 206,  985 => 203,  982 => 202,  977 => 201,  972 => 198,  969 => 197,  964 => 195,  959 => 192,  956 => 191,  952 => 189,  950 => 188,  946 => 187,  940 => 183,  937 => 182,  935 => 181,  932 => 180,  930 => 178,  929 => 177,  928 => 176,  925 => 175,  922 => 174,  919 => 173,  916 => 172,  913 => 171,  910 => 170,  907 => 169,  904 => 168,  902 => 167,  892 => 166,  879 => 161,  877 => 160,  873 => 159,  869 => 158,  864 => 156,  858 => 152,  848 => 151,  836 => 147,  834 => 146,  830 => 144,  820 => 143,  807 => 137,  805 => 136,  801 => 135,  797 => 134,  793 => 133,  788 => 130,  778 => 129,  765 => 123,  756 => 122,  748 => 121,  743 => 120,  736 => 115,  732 => 113,  730 => 112,  717 => 108,  707 => 107,  695 => 216,  693 => 166,  690 => 165,  688 => 151,  685 => 150,  683 => 143,  680 => 142,  677 => 141,  674 => 129,  672 => 128,  669 => 127,  667 => 107,  661 => 106,  656 => 105,  646 => 104,  636 => 94,  627 => 93,  617 => 92,  606 => 95,  604 => 92,  599 => 89,  589 => 88,  579 => 102,  575 => 100,  573 => 99,  570 => 98,  567 => 97,  564 => 88,  562 => 87,  556 => 85,  553 => 84,  543 => 83,  533 => 77,  524 => 76,  514 => 75,  503 => 78,  501 => 75,  497 => 74,  492 => 71,  482 => 70,  471 => 80,  469 => 70,  464 => 69,  454 => 68,  444 => 62,  441 => 61,  431 => 60,  421 => 58,  418 => 57,  408 => 56,  398 => 54,  395 => 53,  385 => 52,  373 => 63,  371 => 60,  368 => 59,  366 => 56,  363 => 55,  361 => 52,  355 => 50,  345 => 49,  335 => 43,  332 => 42,  322 => 41,  311 => 44,  309 => 41,  302 => 40,  292 => 39,  281 => 35,  279 => 34,  274 => 33,  264 => 32,  253 => 229,  251 => 222,  246 => 219,  244 => 104,  241 => 103,  239 => 83,  236 => 82,  234 => 68,  231 => 67,  228 => 66,  225 => 49,  223 => 48,  220 => 47,  217 => 46,  214 => 39,  212 => 38,  209 => 37,  207 => 32,  203 => 31,  197 => 29,  187 => 28,  177 => 26,  174 => 25,  170 => 23,  168 => 22,  160 => 20,  157 => 19,  154 => 18,  150 => 16,  148 => 15,  145 => 14,  142 => 13,  139 => 12,  129 => 11,  118 => 231,  116 => 28,  113 => 27,  111 => 11,  108 => 10,  105 => 9,  102 => 8,  99 => 7,  96 => 6,  93 => 5,  90 => 4,  80 => 3,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/header.html.twig' %}

{% block layout_header %}
    {% set topBarStyle = theme_config('zen-top-bar-style') %}
    {% if theme_config('zen-top-bar-style') is same as ('hidden') and (page.header.languages.count > 1 or page.header.currencies.count > 1 or config('zenitPlatformStratus.config.marketingActive')) %}
        {% set topBarStyle = 'offcanvas' %}
    {% else %}
        {% set topBarStyle = theme_config('zen-top-bar-style') %}
    {% endif %}

    {% block layout_top_bar %}
        {% if topBarStyle is same as('offcanvas') %}
            {% if theme_config('zen-header-style') is not same as ('two-line') or (theme_config('zen-header-style') is same as ('two-line') and config('zenitPlatformStratus.config.marketingActive')) %}
                <div class=\"d-none js-top-bar-offcanvas-initial-content\">
                    {% sw_include '@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig' with {topBarStyle: topBarStyle} %}
                </div>
            {% endif %}
        {% else %}
            {% if theme_config('zen-header-style') is not same as ('two-line') or (theme_config('zen-header-style') is same as ('two-line') and config('zenitPlatformStratus.config.marketingActive')) %}
                <div class=\"collapse{% if topBarStyle is same as ('collapsible') or topBarStyle is same as ('default') %} show{% endif %}\"
                     id=\"topBarCollapse\">
                    {% sw_include '@Storefront/storefront/layout/header/top-bar.html.twig' with {topBarStyle: topBarStyle} %}
                </div>
            {% endif %}
        {% endif %}
    {% endblock %}

    {% block layout_header_navigation %}
        <div class=\"nav-header {{ navHeaderClasses|join(' ') }}\">
            <div class=\"container\">
                <div class=\"header-row row header-gutters align-items-center {{ headerRowClasses }}\">
                    {% block layout_header_logo %}
                        <div class=\"header-logo-col {{ logoClasses }}\">
                            {% sw_include '@Storefront/storefront/layout/header/logo.html.twig' %}
                        </div>
                    {% endblock %}

                    {% if theme_config('zen-header-style') is same as ('single-line') %}
                        {% block layout_header_main_navigation %}
                            <div class=\"header-nav-col nav-main {{ mainNavigationClasses }} {{ navMainClasses|join(' ') }}\">
                                {% block layout_header_main_navigation_inner %}
                                    {% sw_include '@Storefront/storefront/layout/navigation/navigation.html.twig' %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endif %}

                    {% if theme_config('zen-header-style') is same as ('two-line') %}
                        {% block zen_layout_header_top_bar %}
                            <div class=\"header-top-bar-col {{ topBarClasses }}\">
                                <div class=\"row no-gutters\">
                                    {% block zen_layout_navigation_offcanvas_navigation_action_language %}
                                        {% sw_include '@Storefront/storefront/layout/header/actions/language-widget.html.twig' %}
                                    {% endblock %}

                                    {% block zen_layout_navigation_offcanvas_navigation_action_currency %}
                                        {% sw_include '@Storefront/storefront/layout/header/actions/currency-widget.html.twig' %}
                                    {% endblock %}

                                    {% block zen_layout_navigation_offcanvas_navigation_action_service %}
                                        {% sw_include '@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig' %}
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}
                    {% endif %}

                    {% block layout_header_navigation_toggle %}
                        <div class=\"header-menu-button {{ mainNavigationToggleClasses }}\">
                            {% block layout_header_navigation_toggle_button %}
                                <button class=\"btn nav-main-toggle-btn header-actions-btn\"
                                        type=\"button\"
                                        data-offcanvas-menu=\"true\"
                                        aria-label=\"{{ \"general.menuLink\"|trans|striptags }}\">
                                    {% block layout_header_navigation_toggle_button_icon %}
                                        {% sw_icon 'stack' %}
                                    {% endblock %}
                                </button>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block layout_header_search %}
                        {% if theme_config('zen-search-style') is not same as('expandable') %}
                            <div class=\"header-search-col {{ searchClasses }}\">

                                {% if theme_config('zen-search-style') is same as('overlay') %}
                                    {% block zen_layout_header_search_overlay_close %}
                                        <button class=\"d-none js-overlay-close\"
                                                type=\"button\"
                                                aria-label=\"Close\">
                                            {% block zen_layout_header_search_overlay_close_icon %}
                                                {% sw_icon 'x' style { 'size': 'lg' } %}
                                            {% endblock %}
                                        </button>
                                    {% endblock %}
                                {% endif %}

                                {% sw_include '@Storefront/storefront/layout/header/search.html.twig' %}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block layout_header_actions %}
                        <div class=\"header-actions-col {{ actionClasses }}\">
                            <div class=\"row no-gutters{% if theme_config('zen-logo-position') is not same as ('right') %} justify-content-end{% endif %}\">
                                {% block layout_header_search_toggle %}
                                    <div class=\"col-auto{% if theme_config('zen-search-style') is same as('default') %} d-sm-none{% endif %}{% if theme_config('zen-header-style-mobile') is same as ('single-line') and theme_config('zen-logo-position') is same as ('center') %} mr-auto{% endif %}\">
                                        <div class=\"search-toggle\">
                                            <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                                    type=\"button\"
                                                    {% if theme_config('zen-search-style') is same as('overlay') %}
                                                        data-toggle=\"overlay\"
                                                    {% else %}
                                                        data-toggle=\"collapse\"
                                                        data-target=\"#searchCollapse\"
                                                        aria-expanded=\"false\"
                                                        aria-controls=\"searchCollapse\"
                                                    {% endif %}
                                                    aria-label=\"{{ \"header.searchButton\"|trans|striptags }}\">
                                                {% sw_icon 'search' %}
                                                {% sw_icon 'x' style { 'class': 'search-close d-none' } %}
                                            </button>
                                        </div>
                                    </div>
                                {% endblock %}

                                {% if config('core.cart.wishlistEnabled') %}
                                    {% block layout_header_actions_wishlist %}
                                        <div class=\"col-auto\">
                                            <div class=\"header-wishlist\">
                                                <a class=\"btn header-wishlist-btn header-actions-btn\"
                                                   href=\"{{ path('frontend.wishlist.page') }}\"
                                                   title=\"{{ 'header.wishlist'|trans|striptags }}\"
                                                   aria-label=\"{{ 'header.wishlist'|trans|striptags }}\">
                                                    {% sw_include '@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig' %}
                                                </a>
                                            </div>
                                        </div>
                                    {% endblock %}
                                {% endif %}

                                {% block layout_header_actions_account %}
                                    <div class=\"col-auto\">
                                        <div class=\"account-menu\">
                                            {% sw_include '@Storefront/storefront/layout/header/actions/account-widget.html.twig' %}
                                        </div>
                                    </div>
                                {% endblock %}

                                {% block layout_header_actions_cart %}
                                    <div class=\"col-auto\">
                                        <div class=\"header-cart\"
                                             data-offcanvas-cart=\"true\">
                                            <a class=\"btn header-cart-btn header-actions-btn\"
                                               href=\"{{ path('frontend.checkout.cart.page') }}\"
                                               data-cart-widget=\"true\"
                                               title=\"{{ 'checkout.cartTitle'|trans|striptags }}\"
                                               aria-label=\"{{ 'checkout.cartTitle'|trans|striptags }}\">
                                                {% sw_include '@Storefront/storefront/layout/header/actions/cart-widget.html.twig' %}
                                            </a>
                                        </div>
                                    </div>
                                {% endblock %}

                                {% block zen_layout_header_top_bar_toggle %}
                                    {# marketingBannerId is needed for storagekey invalidation #}
                                    {% set marketingBanner = [] %}
                                    {% set marketingBanner = [config('zenitPlatformStratus.config.marketingActive')]|merge(marketingBanner) %}
                                    {% set marketingBanner = [config('zenitPlatformStratus.config.marketingText')]|merge(marketingBanner) %}
                                    {% set marketingBanner = [config('zenitPlatformStratus.config.marketingButtonText')]|merge(marketingBanner) %}
                                    {% set marketingBanner = [config('zenitPlatformStratus.config.marketingButtonLink')]|merge(marketingBanner) %}
                                    {% set marketingBanner = [config('zenitPlatformStratus.config.marketingButtonTarget')]|merge(marketingBanner) %}
                                    {% set marketingBannerId = marketingBanner|json_encode()|length %}

                                    {% set zenCollapseTopBarOptions = {
                                        id: topBarStyle ~ '-' ~ marketingBannerId,
                                        type: topBarStyle
                                    } %}

                                    {% if topBarStyle is not same as ('default') and topBarStyle is not same as ('hidden')  %}
                                        {% if theme_config('zen-header-style') is not same as ('two-line') or (theme_config('zen-header-style') is same as ('two-line') and config('zenitPlatformStratus.config.marketingActive')) %}
                                            <div class=\"col-auto d-none d-lg-block\">
                                                <div class=\"top-bar-toggle\">
                                                    <button class=\"btn header-actions-btn top-bar-toggle-btn\"
                                                            type=\"button\"
                                                            aria-label=\"{{ \"zentheme.general.moreLink\"|trans|striptags }}\"
                                                        {% if topBarStyle is same as ('offcanvas') %}
                                                            data-offcanvas-top-bar=\"true\"
                                                        {% endif %}
                                                        {% if topBarStyle is same as ('collapsible') %}
                                                            data-toggle=\"collapse\"
                                                            data-target=\"#topBarCollapse\"
                                                            aria-expanded=\"true\"
                                                            data-zen-collapse-top-bar-options=\"{{ zenCollapseTopBarOptions|json_encode }}\"
                                                        {% endif %}
                                                        {% if topBarStyle is same as ('expandable') %}
                                                            data-toggle=\"collapse\"
                                                            data-target=\"#topBarCollapse\"
                                                            aria-expanded=\"false\"
                                                            data-zen-collapse-top-bar-options=\"{{ zenCollapseTopBarOptions|json_encode }}\"
                                                        {% endif %}>
                                                        {% if theme_config('zen-main-navigation-style') is same as ('offcanvas-lg')
                                                            or theme_config('zen-main-navigation-style') is same as ('offcanvas-xl')
                                                            or theme_config('zen-header-style') is same as ('single-line') and theme_config('zen-logo-position') is same as ('center') and theme_config('zen-header-style-mobile') is same as ('single-line') %}
                                                            {% sw_icon 'more-vertical' %}
                                                        {% else %}
                                                            {% sw_icon 'stack' %}
                                                        {% endif %}
                                                    </button>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            </div>

            {% block layout_header_search_expandable %}
                {% if theme_config('zen-search-style') is same as('expandable') %}
                    <div class=\"header-search-col\">
                        {% sw_include '@Storefront/storefront/layout/header/search.html.twig' %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

{% endblock %}
", "@zenitPlatformStratus/storefront/layout/header/header.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/header/header.html.twig");
    }
}
