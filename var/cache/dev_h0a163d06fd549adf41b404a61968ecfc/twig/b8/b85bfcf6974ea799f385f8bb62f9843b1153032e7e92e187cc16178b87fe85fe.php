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

/* @zenitPlatformStratus/storefront/page/content/index.html.twig */
class __TwigTemplate_0b56e93e1f7dbdeb3aeaed39d6d7e05a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/page/content/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/page/content/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/content/index.html.twig", "@zenitPlatformStratus/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 4
        echo "    <div class=\"container-main\">
        ";
        // line 5
        $this->displayBlock('page_content', $context, $blocks);
        // line 92
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "
            ";
        // line 8
        echo "            ";
        $context["defaultBreadcrumbs"] = true;
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 9), "sections", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, $context["section"], "blocks", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 11
                echo "                    ";
                if ((sw_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 11) === "zenit-breadcrumb")) {
                    // line 12
                    echo "                        ";
                    $context["defaultBreadcrumbs"] = false;
                    // line 13
                    echo "                    ";
                }
                // line 14
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            ";
        // line 17
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-header-position") === "absolute") || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-header-position") === "relative") && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 18
($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 18), "zenit_stratus_category_header_position", [], "any", false, false, false, 18) === "absolute")))) {
            // line 19
            echo "                ";
            $context["sectionCategoryOverlay"] = true;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if (((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image") === true) &&  !(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 22), "zenit_stratus_category_image", [], "any", false, false, false, 22) === "hide")) || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image") === false) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 23
($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 23), "zenit_stratus_category_image", [], "any", false, false, false, 23) === "display")))) {
            // line 24
            echo "                ";
            $context["allowCategoryImage"] = true;
            // line 25
            echo "            ";
        }
        // line 26
        echo "
            ";
        // line 29
        echo "            ";
        $context["hasCategoryImage"] = false;
        // line 30
        echo "            ";
        if (($context["allowCategoryImage"] ?? null)) {
            // line 31
            echo "                ";
            $context["categoryMedia"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "navigation", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31), "media", [], "any", false, false, false, 31);
            // line 32
            echo "
                ";
            // line 33
            if (($context["categoryMedia"] ?? null)) {
                // line 34
                echo "                    ";
                $context["hasCategoryImage"] = true;
                // line 35
                echo "                ";
            } else {
                // line 36
                echo "                    ";
                // line 37
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 37), "sections", [], "any", false, false, false, 37));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 38
                    echo "                        ";
                    if ((sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38) === 1)) {
                        // line 39
                        echo "                            ";
                        $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 39));
                        // line 40
                        echo "
                            ";
                        // line 41
                        if (($context["sectionBgImg"] ?? null)) {
                            // line 42
                            echo "                                ";
                            $context["hasCategoryImage"] = true;
                            // line 43
                            echo "                            ";
                        }
                        // line 44
                        echo "                        ";
                    }
                    // line 45
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 49), "zenit_stratus_category_image_color", [], "any", false, false, false, 49))) {
            // line 50
            echo "                ";
            $context["hasCategoryBgColor"] = true;
            // line 51
            echo "            ";
        }
        // line 52
        echo "
            ";
        // line 53
        if (((($context["hasCategoryBgColor"] ?? null) === true) || (($context["hasCategoryImage"] ?? null) === true))) {
            // line 54
            echo "                ";
            $context["isHeroSection"] = true;
            // line 55
            echo "            ";
        }
        // line 56
        echo "
            ";
        // line 58
        echo "            ";
        if (( !(($context["isHeroSection"] ?? null) === true) && ($context["defaultBreadcrumbs"] ?? null))) {
            // line 59
            echo "                ";
            // line 60
            echo "                ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 60), "navigation", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60), sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 60))) {
                // line 61
                echo "                    <div class=\"breadcrumb-container\">
                        <div class=\"container\">
                            <div class=\"breadcrumb-wrap cms-breadcrumb justify-content-";
                // line 63
                echo sw_escape_filter($this->env, twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-breadcrumbs-align"), ["flex-" => ""]), "html", null, true);
                echo "\">
                                ";
                // line 64
                $this->displayBlock('cms_breadcrumb', $context, $blocks);
                // line 70
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 74
            echo "            ";
        }
        // line 75
        echo "
            ";
        // line 76
        $this->displayBlock('cms_content', $context, $blocks);
        // line 91
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        // line 65
        echo "                                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", "@zenitPlatformStratus/storefront/page/content/index.html.twig", 65)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 66
($context["page"] ?? null), "header", [], "any", false, false, false, 66), "navigation", [], "any", false, false, false, 66), "tree", [], "any", false, false, false, 66), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 67
($context["page"] ?? null), "header", [], "any", false, false, false, 67), "navigation", [], "any", false, false, false, 67), "active", [], "any", false, false, false, 67)]));
        // line 69
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_cms_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        // line 77
        echo "                ";
        $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 77), "cssClass", [], "any", false, false, false, 77))));
        // line 78
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["cmsPageClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 79
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 89
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        // line 80
        echo "                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/page/content/detail.html.twig", "@zenitPlatformStratus/storefront/page/content/index.html.twig", 80)->display(twig_array_merge($context, ["cmsPage" => sw_get_attribute($this->env, $this->source,         // line 81
($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 81), "defaultBreadcrumbs" =>         // line 82
($context["defaultBreadcrumbs"] ?? null), "sectionCategoryOverlay" =>         // line 83
($context["sectionCategoryOverlay"] ?? null), "hasCategoryImage" =>         // line 84
($context["hasCategoryImage"] ?? null), "hasCategoryBgColor" =>         // line 85
($context["hasCategoryBgColor"] ?? null), "isHeroSection" =>         // line 86
($context["isHeroSection"] ?? null)]));
        // line 88
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 88,  382 => 86,  381 => 85,  380 => 84,  379 => 83,  378 => 82,  377 => 81,  375 => 80,  365 => 79,  354 => 89,  352 => 79,  347 => 78,  344 => 77,  334 => 76,  324 => 69,  322 => 67,  321 => 66,  319 => 65,  309 => 64,  299 => 91,  297 => 76,  294 => 75,  291 => 74,  285 => 70,  283 => 64,  279 => 63,  275 => 61,  272 => 60,  270 => 59,  267 => 58,  264 => 56,  261 => 55,  258 => 54,  256 => 53,  253 => 52,  250 => 51,  247 => 50,  245 => 49,  242 => 48,  239 => 47,  236 => 46,  222 => 45,  219 => 44,  216 => 43,  213 => 42,  211 => 41,  208 => 40,  205 => 39,  202 => 38,  184 => 37,  182 => 36,  179 => 35,  176 => 34,  174 => 33,  171 => 32,  168 => 31,  165 => 30,  162 => 29,  159 => 26,  156 => 25,  153 => 24,  151 => 23,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  139 => 18,  138 => 17,  135 => 16,  129 => 15,  123 => 14,  120 => 13,  117 => 12,  114 => 11,  109 => 10,  104 => 9,  101 => 8,  98 => 6,  88 => 5,  77 => 92,  75 => 5,  72 => 4,  62 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/content/index.html.twig' %}

{% block base_main_inner %}
    <div class=\"container-main\">
        {% block page_content %}

            {# ... checks if custom zenit-breadcrumb is in use #}
            {% set defaultBreadcrumbs = true %}
            {% for section in page.cmsPage.sections %}
                {% for block in section.blocks %}
                    {% if block.type is same as ('zenit-breadcrumb') %}
                        {% set defaultBreadcrumbs = false %}
                    {% endif %}
                {% endfor %}
            {% endfor %}

            {% if theme_config(\"zen-category-header-position\") is same as ('absolute')
                or (theme_config(\"zen-category-header-position\") is same as ('relative') and zenCustomFields.category.zenit_stratus_category_header_position is same as ('absolute')) %}
                {% set sectionCategoryOverlay = true %}
            {% endif %}

            {% if theme_config(\"zen-category-image\") is same as (true) and zenCustomFields.category.zenit_stratus_category_image is not same as ('hide')
                or ( theme_config(\"zen-category-image\") is same as (false) and (zenCustomFields.category.zenit_stratus_category_image is same as ('display')) ) %}
                {% set allowCategoryImage = true %}
            {% endif %}

            {# ... checks if there is either a category image or a
            section image to prevent unwanted hero-sections #}
            {% set hasCategoryImage = false %}
            {% if allowCategoryImage %}
                {% set categoryMedia = page.header.navigation.active.media %}

                {% if categoryMedia %}
                    {% set hasCategoryImage = true %}
                {% else %}
                    {# ... there is not category media, so we have to check if there exists any fallback #}
                    {% for section in page.cmsPage.sections %}
                        {% if loop.index is same as (1) %}
                            {% set sectionBgImg = section.backgroundMedia|sw_encode_media_url %}

                            {% if sectionBgImg %}
                                {% set hasCategoryImage = true %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}

            {% if zenCustomFields.category.zenit_stratus_category_image_color is not empty %}
                {% set hasCategoryBgColor = true %}
            {% endif %}

            {% if hasCategoryBgColor is same as (true) or hasCategoryImage is same as (true) %}
                {% set isHeroSection = true %}
            {% endif %}

            {# ... if not a hero section #}
            {% if isHeroSection is not same as (true) and defaultBreadcrumbs %}
                {# ... check if there is any breadcrumb to show #}
                {% if sw_breadcrumb_full(page.header.navigation.active, context.context) %}
                    <div class=\"breadcrumb-container\">
                        <div class=\"container\">
                            <div class=\"breadcrumb-wrap cms-breadcrumb justify-content-{{ theme_config('zen-breadcrumbs-align')|replace({'flex-': ''}) }}\">
                                {% block cms_breadcrumb %}
                                    {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                                        navigationTree: page.header.navigation.tree,
                                        category: page.header.navigation.active
                                    } only %}
                                {% endblock %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endif %}

            {% block cms_content %}
                {% set cmsPageClasses = ('cms-page ' ~ page.cmsPage.cssClass|striptags)|trim %}
                <div class=\"{{ cmsPageClasses }}\">
                    {% block page_content_blocks %}
                        {% sw_include \"@Storefront/storefront/page/content/detail.html.twig\" with {
                            'cmsPage': page.cmsPage,
                            'defaultBreadcrumbs': defaultBreadcrumbs,
                            'sectionCategoryOverlay': sectionCategoryOverlay,
                            'hasCategoryImage': hasCategoryImage,
                            'hasCategoryBgColor': hasCategoryBgColor,
                            'isHeroSection': isHeroSection
                        } %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/page/content/index.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/page/content/index.html.twig");
    }
}
