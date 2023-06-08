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

/* @zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_18c8d6a377694dc66ae7dbc15eaf7d96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        // line 4
        echo "    <div class=\"main-navigation\"
         id=\"mainNavigation\"
        ";
        // line 6
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-dropdown-navigation-trigger") === "hover"))) {
            // line 7
            echo "            data-dropdown-menu=\"true\"
        ";
        } else {
            // line 9
            echo "            data-flyout-menu=\"true\"
        ";
        }
        // line 10
        echo ">
        ";
        // line 11
        $this->displayBlock("layout_main_navigation_navbar", $context, $blocks);
        echo "
        ";
        // line 12
        $this->displayBlock("layout_main_navigation_menu_flyout_wrapper", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        // line 17
        echo "    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-home") === true)) {
            // line 18
            echo "        ";
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "homeEnabled", [], "any", false, false, false, 18)) {
                // line 19
                echo "            ";
                // line 20
                echo "            <a class=\"nav-link main-navigation-link home-link\"
               href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
                echo "\"
               itemprop=\"url\"
               title=\"";
                // line 23
                echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
                echo "\">

                ";
                // line 26
                echo "                <div class=\"main-navigation-link-text";
                if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 26)) > 0)) {
                    echo " has-children";
                }
                echo "\" data-hover=\"";
                echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
                echo "\">
                    <span class=\"main-navigation-link-name\" itemprop=\"name\" data-hover=\"";
                // line 27
                echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
                echo "</span>
                </div>
            </a>
        ";
            }
            // line 31
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        // line 35
        echo "
    ";
        // line 37
        echo "    ";
        if ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-divider") === 0)) {
            // line 38
            echo "        ";
            if (((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-home") === true) && (sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 38) == 1)) || (sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 38) > 1))) {
                // line 39
                echo "            <div class=\"main-navigation-divider\" aria-hidden=\"true\"></div>
        ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown")) {
            // line 45
            echo "        <div class=\"main-navigation-item dropdown dropdown-trigger-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-dropdown-navigation-trigger"), "html", null, true);
            echo "\">
    ";
        }
        // line 47
        echo "        ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 47) == "folder")) {
            // line 48
            echo "            <div class=\"nav-link main-navigation-link\"
            ";
            // line 50
            echo "            ";
            if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 50)) > 0))) {
                // line 51
                echo "                data-dropdown-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\"
            ";
            } elseif ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source,             // line 52
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 52)) > 0)) {
                // line 53
                echo "                data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\"
            ";
            }
            // line 55
            echo "            ";
            if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 55)) > 0))) {
                // line 56
                echo "                ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-dropdown-navigation-trigger") === "click")) {
                    // line 57
                    echo "                    data-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                ";
                }
                // line 60
                echo "            ";
            }
            // line 61
            echo "             title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">

                ";
            // line 64
            echo "                <div class=\"main-navigation-link-text";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 64)) > 0)) {
                echo " has-children";
            }
            echo "\" data-hover=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                    <span class=\"main-navigation-link-name\" data-hover=\"";
            // line 65
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" itemprop=\"name\">";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>

                    ";
            // line 68
            echo "                    ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-arrow") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 68)) > 0))) {
                // line 69
                echo "                        ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 69);
                })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "main-navigation-link-toggle", "name" => "arrow-medium-down"]));
                // line 72
                echo "                    ";
            }
            // line 73
            echo "
                    ";
            // line 75
            echo "                    ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 75)->display(twig_to_array(["category" =>             // line 76
($context["category"] ?? null)]));
            // line 78
            echo "                </div>
            </div>
        ";
        } else {
            // line 81
            echo "            <a class=\"nav-link main-navigation-link";
            if (((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 81) == sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 81), "navigation", [], "any", false, false, false, 81), "active", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)) || twig_in_filter(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 81), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
           href=\"";
            // line 82
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
           itemprop=\"url\"
            ";
            // line 85
            echo "            ";
            if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 85)) > 0))) {
                // line 86
                echo "                data-dropdown-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\"
            ";
            } elseif ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source,             // line 87
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 87)) > 0)) {
                // line 88
                echo "                data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\"
            ";
            }
            // line 90
            echo "            ";
            if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 90)) > 0))) {
                // line 91
                echo "                ";
                if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-dropdown-navigation-trigger") === "click")) {
                    // line 92
                    echo "                    data-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                ";
                }
                // line 95
                echo "            ";
            }
            // line 96
            echo "            ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 97
            echo "           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">

                ";
            // line 100
            echo "                <div class=\"main-navigation-link-text";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 100)) > 0)) {
                echo " has-children";
            }
            echo "\" data-hover=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                    <span class=\"main-navigation-link-name\" data-hover=\"";
            // line 101
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" itemprop=\"name\">";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>

                    ";
            // line 104
            echo "                    ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-arrow") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 104)) > 0))) {
                // line 105
                echo "                        ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 105);
                })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "arrow-medium-down"]));
                // line 106
                echo "                    ";
            }
            // line 107
            echo "
                    ";
            // line 109
            echo "                    ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 109)->display(twig_to_array(["category" =>             // line 110
($context["category"] ?? null)]));
            // line 112
            echo "                </div>
            </a>
        ";
        }
        // line 115
        echo "
        ";
        // line 117
        echo "        ";
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown") && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 117)) > 0))) {
            // line 118
            echo "            ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/zen-dropdown.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 118)->display(twig_to_array(["navigationTree" =>             // line 119
($context["treeItem"] ?? null), "level" => (            // line 120
($context["level"] ?? null) + 1), "page" =>             // line 121
($context["page"] ?? null), "trigger" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-dropdown-navigation-trigger")]));
            // line 124
            echo "        ";
        }
        // line 125
        echo "
    ";
        // line 127
        echo "    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown")) {
            // line 128
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        // line 133
        echo "    ";
        if ( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-main-navigation-subnavigation-style") === "dropdown")) {
            // line 134
            echo "        ";
            $this->displayParentBlock("layout_main_navigation_menu_flyout_wrapper", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        // line 139
        echo "    <div class=\"navigation-flyout\"
         data-flyout-menu-id=\"";
        // line 140
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
        echo "\">

        ";
        // line 143
        echo "        <div class=\"navigation-flyout-inner\">
            <div class=\"container\">
                ";
        // line 145
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 148
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        // line 146
        echo "                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", 146)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1), "page" => ($context["page"] ?? null)]));
        // line 147
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 147,  493 => 146,  483 => 145,  470 => 148,  468 => 145,  464 => 143,  459 => 140,  456 => 139,  446 => 138,  432 => 134,  429 => 133,  419 => 132,  407 => 128,  404 => 127,  401 => 125,  398 => 124,  396 => 121,  395 => 120,  394 => 119,  392 => 118,  389 => 117,  386 => 115,  381 => 112,  379 => 110,  377 => 109,  374 => 107,  371 => 106,  362 => 105,  359 => 104,  352 => 101,  343 => 100,  337 => 97,  332 => 96,  329 => 95,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 87,  305 => 86,  302 => 85,  297 => 82,  290 => 81,  285 => 78,  283 => 76,  281 => 75,  278 => 73,  275 => 72,  266 => 69,  263 => 68,  256 => 65,  247 => 64,  241 => 61,  238 => 60,  233 => 57,  230 => 56,  227 => 55,  221 => 53,  219 => 52,  214 => 51,  211 => 50,  208 => 48,  205 => 47,  199 => 45,  196 => 44,  193 => 42,  190 => 41,  186 => 39,  183 => 38,  180 => 37,  177 => 35,  167 => 34,  156 => 31,  147 => 27,  138 => 26,  133 => 23,  128 => 21,  125 => 20,  123 => 19,  120 => 18,  117 => 17,  107 => 16,  94 => 12,  90 => 11,  87 => 10,  83 => 9,  79 => 7,  77 => 6,  73 => 4,  63 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/navigation/navigation.html.twig' %}

{% block layout_main_navigation %}
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
        {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and theme_config('zen-dropdown-navigation-trigger') is same as ('hover')%}
            data-dropdown-menu=\"true\"
        {% else %}
            data-flyout-menu=\"true\"
        {% endif %}>
        {{ block('layout_main_navigation_navbar') }}
        {{ block('layout_main_navigation_menu_flyout_wrapper') }}
    </div>
{% endblock %}

{% block layout_main_navigation_menu_home %}
    {% if theme_config('zen-main-navigation-home') is same as (true) %}
        {% if context.salesChannel.translated.homeEnabled %}
            {# ... remove active on home #}
            <a class=\"nav-link main-navigation-link home-link\"
               href=\"{{ path('frontend.home.page') }}\"
               itemprop=\"url\"
               title=\"{{ homeLabel|striptags }}\">

                {# ... add data-hover for hover animations #}
                <div class=\"main-navigation-link-text{% if treeItem.children|length > 0 %} has-children{% endif %}\" data-hover=\"{{ homeLabel|striptags }}\">
                    <span class=\"main-navigation-link-name\" itemprop=\"name\" data-hover=\"{{ homeLabel|striptags }}\">{{ homeLabel|sw_sanitize }}</span>
                </div>
            </a>
        {% endif %}
    {% endif %}
{% endblock %}

{% block layout_main_navigation_menu_item %}

    {# ... add navigation divider #}
    {% if theme_config('zen-main-navigation-divider') is not same as (0) %}
        {% if ( theme_config('zen-main-navigation-home') is same as (true) and loop.index == 1 ) or loop.index > 1 %}
            <div class=\"main-navigation-divider\" aria-hidden=\"true\"></div>
        {% endif %}
    {% endif %}

    {# ... add main-navigation-item #}
    {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') %}
        <div class=\"main-navigation-item dropdown dropdown-trigger-{{ theme_config('zen-dropdown-navigation-trigger') }}\">
    {% endif %}
        {% if category.type == 'folder' %}
            <div class=\"nav-link main-navigation-link\"
            {# ... add dropdown condition #}
            {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and treeItem.children|length > 0 %}
                data-dropdown-menu-trigger=\"{{ category.id }}\"
            {% elseif treeItem.children|length > 0 %}
                data-flyout-menu-trigger=\"{{ category.id }}\"
            {% endif %}
            {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and treeItem.children|length > 0 %}
                {% if theme_config('zen-dropdown-navigation-trigger') is same as ('click') %}
                    data-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                {% endif %}
            {% endif %}
             title=\"{{ name }}\">

                {# ... add data-hover for hover animations #}
                <div class=\"main-navigation-link-text{% if treeItem.children|length > 0 %} has-children{% endif %}\" data-hover=\"{{ name }}\">
                    <span class=\"main-navigation-link-name\" data-hover=\"{{ name }}\" itemprop=\"name\">{{ name }}</span>

                    {# ... add navigation arrow #}
                    {% if theme_config('zen-main-navigation-arrow') and treeItem.children|length > 0 %}
                        {% sw_icon 'arrow-medium-down' style {
                            'pack': 'solid', 'size': 'xs', 'class': 'main-navigation-link-toggle'
                        } %}
                    {% endif %}

                    {# ... add badge #}
                    {% sw_include '@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig' with {
                        category: category,
                    } only %}
                </div>
            </div>
        {% else %}
            <a class=\"nav-link main-navigation-link{% if category.id == page.header.navigation.active.id or category.id in activePath %} active{% endif %}\"
           href=\"{{ category_url(category) }}\"
           itemprop=\"url\"
            {# ... add dropdown condition #}
            {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and treeItem.children|length > 0 %}
                data-dropdown-menu-trigger=\"{{ category.id }}\"
            {% elseif treeItem.children|length > 0 %}
                data-flyout-menu-trigger=\"{{ category.id }}\"
            {% endif %}
            {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and treeItem.children|length > 0 %}
                {% if theme_config('zen-dropdown-navigation-trigger') is same as ('click') %}
                    data-toggle=\"dropdown\"
                    aria-expanded=\"false\"
                {% endif %}
            {% endif %}
            {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
           title=\"{{ name }}\">

                {# ... add data-hover for hover animations #}
                <div class=\"main-navigation-link-text{% if treeItem.children|length > 0 %} has-children{% endif %}\" data-hover=\"{{ name }}\">
                    <span class=\"main-navigation-link-name\" data-hover=\"{{ name }}\" itemprop=\"name\">{{ name }}</span>

                    {# ... add navigation arrow #}
                    {% if theme_config('zen-main-navigation-arrow') and treeItem.children|length > 0 %}
                        {% sw_icon 'arrow-medium-down' style {'pack': 'solid', 'size': 'xs'} %}
                    {% endif %}

                    {# ... add badge #}
                    {% sw_include '@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig' with {
                        category: category,
                    } only %}
                </div>
            </a>
        {% endif %}

        {# ... add dropdown menu #}
        {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') and treeItem.children|length > 0 %}
            {% sw_include '@zenitPlatformStratus/storefront/layout/navigation/zen-dropdown.html.twig' with {
                navigationTree: treeItem,
                level: level+1,
                page: page,
                trigger: theme_config('zen-dropdown-navigation-trigger')
            } only %}
        {% endif %}

    {# ... add main-navigation-item #}
    {% if theme_config('zen-main-navigation-subnavigation-style') is same as ('dropdown') %}
        </div>
    {% endif %}
{% endblock %}

{% block layout_main_navigation_menu_flyout_wrapper %}
    {% if theme_config('zen-main-navigation-subnavigation-style') is not same as ('dropdown') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block layout_main_navigation_menu_flyout %}
    <div class=\"navigation-flyout\"
         data-flyout-menu-id=\"{{ treeItem.category.id }}\">

        {# ... add .navigation-flyout-inner #}
        <div class=\"navigation-flyout-inner\">
            <div class=\"container\">
                {% block layout_main_navigation_menu_flyout_include %}
                    {% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {navigationTree: treeItem, level: level+1, page: page} only %}
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/navigation/navigation.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
