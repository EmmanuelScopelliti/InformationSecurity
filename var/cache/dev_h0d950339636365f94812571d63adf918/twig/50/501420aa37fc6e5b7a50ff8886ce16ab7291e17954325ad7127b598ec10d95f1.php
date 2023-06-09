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

/* @Storefront/storefront/layout/navigation/flyout.html.twig */
class __TwigTemplate_1c285d06a442c4bd900672d8bf872830 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_flyout' => [$this, 'block_layout_navigation_flyout'],
            'layout_navigation_flyout_bar' => [$this, 'block_layout_navigation_flyout_bar'],
            'layout_navigation_flyout_bar_category' => [$this, 'block_layout_navigation_flyout_bar_category'],
            'layout_navigation_flyout_bar_category_link' => [$this, 'block_layout_navigation_flyout_bar_category_link'],
            'layout_navigation_flyout_bar_category_link_text' => [$this, 'block_layout_navigation_flyout_bar_category_link_text'],
            'layout_navigation_flyout_bar_close' => [$this, 'block_layout_navigation_flyout_bar_close'],
            'layout_navigation_flyout_bar_close_content' => [$this, 'block_layout_navigation_flyout_bar_close_content'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
            'layout_navigation_flyout_content' => [$this, 'block_layout_navigation_flyout_content'],
            'layout_navigation_flyout_categories' => [$this, 'block_layout_navigation_flyout_categories'],
            'layout_navigation_flyout_categories_recoursion' => [$this, 'block_layout_navigation_flyout_categories_recoursion'],
            'layout_navigation_flyout_teaser' => [$this, 'block_layout_navigation_flyout_teaser'],
            'layout_navigation_flyout_teaser_image' => [$this, 'block_layout_navigation_flyout_teaser_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/flyout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/flyout.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_flyout', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_navigation_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout"));

        // line 2
        echo "    ";
        $context["category"] = sw_get_attribute($this->env, $this->source, ($context["navigationTree"] ?? null), "category", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $this->displayBlock('layout_navigation_flyout_bar', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('layout_navigation_flyout_content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_layout_navigation_flyout_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar"));

        // line 5
        echo "        <div class=\"row navigation-flyout-bar\">
            ";
        // line 6
        $this->displayBlock('layout_navigation_flyout_bar_category', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('layout_navigation_flyout_bar_close', $context, $blocks);
        // line 40
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_layout_navigation_flyout_bar_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category"));

        // line 7
        echo "                <div class=\"col\">
                    <div class=\"navigation-flyout-category-link\">
                        ";
        // line 9
        $this->displayBlock('layout_navigation_flyout_bar_category_link', $context, $blocks);
        // line 25
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_layout_navigation_flyout_bar_category_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category_link"));

        // line 10
        echo "                            ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 10) == "page")) {
            // line 11
            echo "                                <a class=\"nav-link\"
                                   href=\"";
            // line 12
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"
                                   itemprop=\"url\"
                                   title=\"";
            // line 14
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                    ";
            // line 15
            $this->displayBlock('layout_navigation_flyout_bar_category_link_text', $context, $blocks);
            // line 22
            echo "                                </a>
                            ";
        }
        // line 24
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_layout_navigation_flyout_bar_category_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category_link_text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_category_link_text"));

        // line 16
        echo "                                        ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toCategory"));
        echo " ";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                        ";
        // line 17
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 17);
        })())->display(twig_array_merge($context, ["color" => "primary", "pack" => "solid", "name" => "arrow-right"]));
        // line 21
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_layout_navigation_flyout_bar_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_close"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_close"));

        // line 30
        echo "                <div class=\"col-auto\">
                    <div class=\"navigation-flyout-close js-close-flyout-menu\">
                        ";
        // line 32
        $this->displayBlock('layout_navigation_flyout_bar_close_content', $context, $blocks);
        // line 37
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_layout_navigation_flyout_bar_close_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_close_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar_close_content"));

        // line 33
        echo "                            ";
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 36
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_utilities_offcanvas_close_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_utilities_offcanvas_close_icon"));

        // line 34
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 34);
        })())->display(twig_array_merge($context, ["name" => "x"]));
        // line 35
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_layout_navigation_flyout_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_content"));

        // line 44
        echo "        <div class=\"row navigation-flyout-content\">
            ";
        // line 45
        $this->displayBlock('layout_navigation_flyout_categories', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('layout_navigation_flyout_teaser', $context, $blocks);
        // line 88
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_layout_navigation_flyout_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories"));

        // line 46
        echo "                <div class=\"";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 46)) {
            echo "col-8 col-xl-9";
        } else {
            echo "col";
        }
        echo "\">
                    <div class=\"navigation-flyout-categories\">
                        ";
        // line 48
        $this->displayBlock('layout_navigation_flyout_categories_recoursion', $context, $blocks);
        // line 55
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_layout_navigation_flyout_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories_recoursion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories_recoursion"));

        // line 49
        echo "                            ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/flyout.html.twig", 49)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,         // line 50
($context["navigationTree"] ?? null), "children", [], "any", false, false, false, 50), "navigationMedia" => sw_get_attribute($this->env, $this->source,         // line 51
($context["category"] ?? null), "media", [], "any", false, false, false, 51), "page" =>         // line 52
($context["page"] ?? null)]));
        // line 54
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_layout_navigation_flyout_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser"));

        // line 60
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <div class=\"col-4 col-xl-3\">
                    <div class=\"navigation-flyout-teaser\">
                        ";
            // line 63
            $this->displayBlock('layout_navigation_flyout_teaser_image', $context, $blocks);
            // line 84
            echo "                    </div>
                </div>
                ";
        }
        // line 87
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_layout_navigation_flyout_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser_image"));

        // line 64
        echo "                            <a class=\"navigation-flyout-teaser-image-container\"
                               href=\"";
        // line 65
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
        echo "\"
                               ";
        // line 66
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
            echo "target=\"_blank\"
                                   ";
            // line 67
            if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "linkType", [], "any", false, false, false, 67) == "external")) {
                echo "rel=\"noopener noreferrer\"";
            }
            // line 68
            echo "                               ";
        }
        // line 69
        echo "                               title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 70);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,         // line 71
($context["category"] ?? null), "media", [], "any", false, false, false, 71), "sizes" => ["default" => "310px"], "attributes" => ["class" => "navigation-flyout-teaser-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 77
($context["category"] ?? null), "media", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "alt", [], "any", false, false, false, 77)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "alt", [], "any", false, false, false, 77)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 78
($context["category"] ?? null), "media", [], "any", false, false, false, 78), "translated", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 78), "translated", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78)) : ("")), "data-object-fit" => "cover"], "name" => "navigation-flyout-teaser-image-thumbnails"]));
        // line 82
        echo "                            </a>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/flyout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  481 => 82,  479 => 78,  478 => 77,  477 => 71,  470 => 70,  465 => 69,  462 => 68,  458 => 67,  454 => 66,  450 => 65,  447 => 64,  437 => 63,  427 => 87,  422 => 84,  420 => 63,  416 => 61,  413 => 60,  403 => 59,  393 => 54,  391 => 52,  390 => 51,  389 => 50,  387 => 49,  377 => 48,  365 => 55,  363 => 48,  353 => 46,  343 => 45,  332 => 88,  330 => 59,  327 => 58,  325 => 45,  322 => 44,  312 => 43,  302 => 35,  293 => 34,  283 => 33,  273 => 36,  270 => 33,  260 => 32,  248 => 37,  246 => 32,  242 => 30,  232 => 29,  222 => 21,  214 => 17,  207 => 16,  197 => 15,  187 => 24,  183 => 22,  181 => 15,  177 => 14,  172 => 12,  169 => 11,  166 => 10,  156 => 9,  144 => 25,  142 => 9,  138 => 7,  128 => 6,  117 => 40,  115 => 29,  112 => 28,  110 => 6,  107 => 5,  97 => 4,  87 => 43,  84 => 42,  81 => 4,  78 => 3,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_flyout %}
    {% set category = navigationTree.category %}
    {% set name = category.translated.name %}
    {% block layout_navigation_flyout_bar %}
        <div class=\"row navigation-flyout-bar\">
            {% block layout_navigation_flyout_bar_category %}
                <div class=\"col\">
                    <div class=\"navigation-flyout-category-link\">
                        {% block layout_navigation_flyout_bar_category_link %}
                            {% if category.type == 'page' %}
                                <a class=\"nav-link\"
                                   href=\"{{ seoUrl('frontend.navigation.page', { navigationId: category.id }) }}\"
                                   itemprop=\"url\"
                                   title=\"{{ name }}\">
                                    {% block layout_navigation_flyout_bar_category_link_text %}
                                        {{ \"general.toCategory\"|trans|sw_sanitize }} {{ name }}
                                        {% sw_icon 'arrow-right' style {
                                            'color': 'primary',
                                            'pack':'solid'
                                        } %}
                                    {% endblock %}
                                </a>
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block layout_navigation_flyout_bar_close %}
                <div class=\"col-auto\">
                    <div class=\"navigation-flyout-close js-close-flyout-menu\">
                        {% block layout_navigation_flyout_bar_close_content %}
                            {% block layout_utilities_offcanvas_close_icon %}
                                {% sw_icon 'x' %}
                            {% endblock %}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block layout_navigation_flyout_content %}
        <div class=\"row navigation-flyout-content\">
            {% block layout_navigation_flyout_categories %}
                <div class=\"{% if category.media %}col-8 col-xl-9{% else %}col{% endif %}\">
                    <div class=\"navigation-flyout-categories\">
                        {% block layout_navigation_flyout_categories_recoursion %}
                            {% sw_include '@Storefront/storefront/layout/navigation/categories.html.twig' with {
                                navigationTree: navigationTree.children,
                                navigationMedia: category.media,
                                page: page
                            } only %}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block layout_navigation_flyout_teaser %}
                {% if category.media %}
                <div class=\"col-4 col-xl-3\">
                    <div class=\"navigation-flyout-teaser\">
                        {% block layout_navigation_flyout_teaser_image %}
                            <a class=\"navigation-flyout-teaser-image-container\"
                               href=\"{{ category_url(category) }}\"
                               {% if category_linknewtab(category) %}target=\"_blank\"
                                   {% if category.linkType == \"external\" %}rel=\"noopener noreferrer\"{% endif %}
                               {% endif %}
                               title=\"{{ name }}\">
                                {% sw_thumbnails 'navigation-flyout-teaser-image-thumbnails' with {
                                    media: category.media,
                                    sizes: {
                                        'default': '310px'
                                    },
                                    attributes: {
                                        'class': 'navigation-flyout-teaser-image',
                                        'alt': (category.media.translated.alt ?: ''),
                                        'title': (category.media.translated.title ?: ''),
                                        'data-object-fit': 'cover'
                                    }
                                } %}
                            </a>
                        {% endblock %}
                    </div>
                </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/navigation/flyout.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/flyout.html.twig");
    }
}
