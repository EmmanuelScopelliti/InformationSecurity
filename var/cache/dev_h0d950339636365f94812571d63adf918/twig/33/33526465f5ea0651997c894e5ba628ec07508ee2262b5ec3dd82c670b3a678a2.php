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

/* @zenitPlatformStratus/storefront/page/content/detail.html.twig */
class __TwigTemplate_7a1a1fb36241e41614fd7d36c31a8331 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_content_sections_inner' => [$this, 'block_page_content_sections_inner'],
            'zen_page_content_section_category_image' => [$this, 'block_zen_page_content_section_category_image'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'page_content_section' => [$this, 'block_page_content_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/content/detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/page/content/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/page/content/detail.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@zenitPlatformStratus/storefront/page/content/detail.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_content_sections_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_sections_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_sections_inner"));

        // line 4
        echo "    <div class=\"cms-sections\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "sections", [], "any", false, false, false, 5));
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
            // line 6
            echo "
            ";
            // line 7
            if (((sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7) === 1) && (($context["isHeroSection"] ?? null) === true))) {
                // line 8
                echo "
                ";
                // line 10
                echo "                ";
                $context["sectionClasses"] = [0 => "cms-section-hero", 1 => sw_get_attribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 10), 2 => ("pos-" . sw_get_attribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 10)), 3 => ("cms-section-" . sw_get_attribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 10))];
                // line 11
                echo "
                ";
                // line 13
                echo "                ";
                if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 13), "zenit_stratus_category_image_color", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "                    ";
                    $context["sectionBgColor"] = ((sw_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 14)) ? (sw_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 14)) : ("transparent"));
                    // line 15
                    echo "                ";
                } else {
                    // line 16
                    echo "                    ";
                    $context["sectionBgColor"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 16), "zenit_stratus_category_image_color", [], "any", false, false, false, 16);
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "
                ";
                // line 20
                echo "                ";
                $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 20));
                // line 21
                echo "
                ";
                // line 23
                echo "                ";
                $context["categoryMedia"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 23), "navigation", [], "any", false, false, false, 23), "active", [], "any", false, false, false, 23), "media", [], "any", false, false, false, 23);
                // line 24
                echo "                ";
                if (($context["hasCategoryImage"] ?? null)) {
                    // line 25
                    echo "                    ";
                    if (($context["categoryMedia"] ?? null)) {
                        // line 26
                        echo "
                        ";
                        // line 28
                        echo "                        ";
                        $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["categoryMedia"] ?? null));
                        // line 29
                        echo "
                        ";
                        // line 31
                        echo "                        ";
                        $context["sectionClasses"] = twig_array_merge([0 => "category-image"], ($context["sectionClasses"] ?? null));
                        // line 32
                        echo "
                    ";
                    } elseif (                    // line 33
($context["sectionBgImg"] ?? null)) {
                        // line 34
                        echo "
                        ";
                        // line 36
                        echo "                        ";
                        $context["sectionClasses"] = twig_array_merge([0 => "category-image"], ($context["sectionClasses"] ?? null));
                        // line 37
                        echo "
                    ";
                    }
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "
                ";
                // line 42
                echo "                ";
                if (($context["sectionCategoryOverlay"] ?? null)) {
                    // line 43
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "cms-section-overlay"], ($context["sectionClasses"] ?? null));
                    // line 44
                    echo "                ";
                }
                // line 45
                echo "
                ";
                // line 47
                echo "                ";
                if (sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                    ";
                    $context["sectionBgImgMode"] = sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 48);
                    // line 49
                    echo "                ";
                } else {
                    // line 50
                    echo "                    ";
                    $context["sectionBgImgMode"] = "cover";
                    // line 51
                    echo "                ";
                }
                // line 52
                echo "
                ";
                // line 54
                echo "                ";
                $context["categoryImageOpacity"] = twig_replace_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 54), "zenit_stratus_category_image_opacity", [], "any", false, false, false, 54), ["%" => ""]);
                // line 55
                echo "                ";
                if ((twig_test_empty(($context["categoryImageOpacity"] ?? null)) || (($context["categoryImageOpacity"] ?? null) === "inherit"))) {
                    // line 56
                    echo "                    ";
                    $context["sectionBgOpacity"] = twig_number_format_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image-opacity"));
                    // line 57
                    echo "                ";
                } else {
                    // line 58
                    echo "                    ";
                    $context["sectionBgOpacity"] = twig_number_format_filter($this->env, ($context["categoryImageOpacity"] ?? null));
                    // line 59
                    echo "                ";
                }
                // line 60
                echo "
                ";
                // line 62
                echo "                ";
                if ((twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 62), "zenit_stratus_category_image_attachment", [], "any", false, false, false, 62)) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 62), "zenit_stratus_category_image_attachment", [], "any", false, false, false, 62) === "inherit"))) {
                    // line 63
                    echo "                    ";
                    $context["sectionBgAttachment"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image-attachment");
                    // line 64
                    echo "                ";
                } else {
                    // line 65
                    echo "                    ";
                    $context["sectionBgAttachment"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 65), "zenit_stratus_category_image_attachment", [], "any", false, false, false, 65);
                    // line 66
                    echo "                ";
                }
                // line 67
                echo "
                ";
                // line 69
                echo "                ";
                if ((twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 69), "zenit_stratus_category_image_position", [], "any", false, false, false, 69)) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 69), "zenit_stratus_category_image_position", [], "any", false, false, false, 69) === "inherit"))) {
                    // line 70
                    echo "                    ";
                    $context["sectionBgPosition"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image-position");
                    // line 71
                    echo "                ";
                } else {
                    // line 72
                    echo "                    ";
                    $context["sectionBgPosition"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 72), "zenit_stratus_category_image_position", [], "any", false, false, false, 72);
                    // line 73
                    echo "                ";
                }
                // line 74
                echo "
                ";
                // line 76
                echo "                ";
                if (($context["sectionBgImg"] ?? null)) {
                    // line 77
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "bg-image"], ($context["sectionClasses"] ?? null));
                    // line 78
                    echo "                ";
                }
                // line 79
                echo "
                ";
                // line 81
                echo "                ";
                if (($context["sectionBgColor"] ?? null)) {
                    // line 82
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "bg-color"], ($context["sectionClasses"] ?? null));
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "
                ";
                // line 86
                echo "                ";
                if ((twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 86), "zenit_stratus_category_image_contrast", [], "any", false, false, false, 86)) || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 86), "zenit_stratus_category_image_contrast", [], "any", false, false, false, 86) === "inherit"))) {
                    // line 87
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-category-image-contrast")], ($context["sectionClasses"] ?? null));
                    // line 88
                    echo "                ";
                } else {
                    // line 89
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["zenCustomFields"] ?? null), "category", [], "any", false, false, false, 89), "zenit_stratus_category_image_contrast", [], "any", false, false, false, 89)], ($context["sectionClasses"] ?? null));
                    // line 90
                    echo "                ";
                }
                // line 91
                echo "
                ";
                // line 93
                echo "                ";
                if (((($context["sectionBgOpacity"] ?? null) < 100) && ($context["sectionBgColor"] ?? null))) {
                    // line 94
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "has-opacity"], ($context["sectionClasses"] ?? null));
                    // line 95
                    echo "                ";
                }
                // line 96
                echo "
                ";
                // line 97
                $context["layout"] = ((sw_get_attribute($this->env, $this->source, $context["section"], "sizingMode", [], "any", false, false, false, 97)) ? (twig_replace_filter(sw_get_attribute($this->env, $this->source, $context["section"], "sizingMode", [], "any", false, false, false, 97), ["_" => "-"])) : ("container"));
                // line 98
                echo "
                ";
                // line 99
                $this->displayBlock('zen_page_content_section_category_image', $context, $blocks);
                // line 112
                echo "
                ";
                // line 114
                echo "                ";
                if (($context["defaultBreadcrumbs"] ?? null)) {
                    // line 115
                    echo "                    ";
                    // line 116
                    echo "                    ";
                    if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 116), "navigation", [], "any", false, false, false, 116), "active", [], "any", false, false, false, 116), sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 116))) {
                        // line 117
                        echo "                        <div class=\"breadcrumb-container\">
                            <div class=\"container\">
                                <div class=\"breadcrumb-wrap cms-breadcrumb justify-content-";
                        // line 119
                        echo sw_escape_filter($this->env, twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-breadcrumbs-align"), ["flex-" => ""]), "html", null, true);
                        echo "\">
                                    ";
                        // line 120
                        $this->displayBlock('cms_breadcrumb', $context, $blocks);
                        // line 126
                        echo "                                </div>
                            </div>
                        </div>
                    ";
                    }
                    // line 130
                    echo "                ";
                }
                // line 131
                echo "
            ";
            } else {
                // line 133
                echo "                ";
                $context["sectionBgColor"] = sw_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 133);
                // line 134
                echo "                ";
                $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 134));
                // line 135
                echo "                ";
                $context["sectionBgImgMode"] = sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 135);
                // line 136
                echo "
                ";
                // line 137
                $context["sectionClasses"] = [0 => sw_get_attribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 137), 1 => ("pos-" . sw_get_attribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 137)), 2 => ("cms-section-" . sw_get_attribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 137))];
                // line 138
                echo "
                ";
                // line 139
                if (($context["sectionBgImg"] ?? null)) {
                    // line 140
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "bg-image"], ($context["sectionClasses"] ?? null));
                    // line 141
                    echo "                ";
                }
                // line 142
                echo "
                ";
                // line 143
                if (($context["sectionBgColor"] ?? null)) {
                    // line 144
                    echo "                    ";
                    $context["sectionClasses"] = twig_array_merge([0 => "bg-color"], ($context["sectionClasses"] ?? null));
                    // line 145
                    echo "                ";
                }
                // line 146
                echo "
                ";
                // line 148
                echo "                ";
                if (((sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 148) === 1) && (($context["sectionCategoryOverlay"] ?? null) === true))) {
                    // line 149
                    echo "                    ";
                    if (($context["sectionCategoryOverlay"] ?? null)) {
                        // line 150
                        echo "                        ";
                        $context["sectionClasses"] = twig_array_merge([0 => "cms-section-overlay"], ($context["sectionClasses"] ?? null));
                        // line 151
                        echo "                    ";
                    }
                    // line 152
                    echo "                ";
                }
                // line 153
                echo "
                ";
                // line 154
                $context["layout"] = ((sw_get_attribute($this->env, $this->source, $context["section"], "sizingMode", [], "any", false, false, false, 154)) ? (twig_replace_filter(sw_get_attribute($this->env, $this->source, $context["section"], "sizingMode", [], "any", false, false, false, 154), ["_" => "-"])) : ("container"));
                // line 155
                echo "
                ";
                // line 156
                $this->displayBlock('page_content_section', $context, $blocks);
                // line 163
                echo "            ";
            }
            // line 164
            echo "        ";
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
        // line 165
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_zen_page_content_section_category_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_page_content_section_category_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_page_content_section_category_image"));

        // line 100
        echo "                    <div class=\"cms-section ";
        echo sw_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["sectionClasses"] ?? null), " "), "html", null, true);
        echo "\"
                         style=\"";
        // line 101
        if (($context["sectionBgAttachment"] ?? null)) {
            echo "background-attachment: ";
            echo sw_escape_filter($this->env, ($context["sectionBgAttachment"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgPosition"] ?? null)) {
            echo "background-position: ";
            echo sw_escape_filter($this->env, ($context["sectionBgPosition"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgColor"] ?? null)) {
            echo "background-color: ";
            echo sw_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            echo "background-image: url('";
            echo sw_escape_filter($this->env, ($context["sectionBgImg"] ?? null), "html", null, true);
            echo "');background-size: ";
            echo sw_escape_filter($this->env, ($context["sectionBgImgMode"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                        ";
        // line 103
        if (((($context["sectionBgOpacity"] ?? null) < 100) && ($context["sectionBgColor"] ?? null))) {
            // line 104
            echo "                            <div class=\"cms-section-bg-color-overlay\"
                                 style=\"background-color: ";
            // line 105
            echo sw_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo "; opacity: ";
            echo sw_escape_filter($this->env, ((100 - twig_number_format_filter($this->env, ($context["sectionBgOpacity"] ?? null))) / 100), "html", null, true);
            echo ";\">
                            </div>
                        ";
        }
        // line 108
        echo "
                        ";
        // line 109
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find((("@Storefront/storefront/section/cms-section-" . sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 109)) . ".html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/page/content/detail.html.twig", 109);
        })())->display($context);
        // line 110
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        // line 121
        echo "                                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", "@zenitPlatformStratus/storefront/page/content/detail.html.twig", 121)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 122
($context["page"] ?? null), "header", [], "any", false, false, false, 122), "navigation", [], "any", false, false, false, 122), "tree", [], "any", false, false, false, 122), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 123
($context["page"] ?? null), "header", [], "any", false, false, false, 123), "navigation", [], "any", false, false, false, 123), "active", [], "any", false, false, false, 123)]));
        // line 125
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_page_content_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section"));

        // line 157
        echo "                    <div class=\"cms-section ";
        echo sw_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["sectionClasses"] ?? null), " "), "html", null, true);
        echo "\"
                         style=\"";
        // line 158
        if (($context["sectionBgColor"] ?? null)) {
            echo "background-color: ";
            echo sw_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            echo "background-image: url('";
            echo sw_escape_filter($this->env, ($context["sectionBgImg"] ?? null), "html", null, true);
            echo "');background-size: ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 158), "html", null, true);
            echo ";";
        }
        echo "\">

                        ";
        // line 160
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find((("@Storefront/storefront/section/cms-section-" . sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 160)) . ".html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/page/content/detail.html.twig", 160);
        })())->display($context);
        // line 161
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/page/content/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 161,  581 => 160,  565 => 158,  558 => 157,  548 => 156,  538 => 125,  536 => 123,  535 => 122,  533 => 121,  523 => 120,  512 => 110,  504 => 109,  501 => 108,  493 => 105,  490 => 104,  488 => 103,  462 => 101,  455 => 100,  445 => 99,  434 => 165,  420 => 164,  417 => 163,  415 => 156,  412 => 155,  410 => 154,  407 => 153,  404 => 152,  401 => 151,  398 => 150,  395 => 149,  392 => 148,  389 => 146,  386 => 145,  383 => 144,  381 => 143,  378 => 142,  375 => 141,  372 => 140,  370 => 139,  367 => 138,  365 => 137,  362 => 136,  359 => 135,  356 => 134,  353 => 133,  349 => 131,  346 => 130,  340 => 126,  338 => 120,  334 => 119,  330 => 117,  327 => 116,  325 => 115,  322 => 114,  319 => 112,  317 => 99,  314 => 98,  312 => 97,  309 => 96,  306 => 95,  303 => 94,  300 => 93,  297 => 91,  294 => 90,  291 => 89,  288 => 88,  285 => 87,  282 => 86,  279 => 84,  276 => 83,  273 => 82,  270 => 81,  267 => 79,  264 => 78,  261 => 77,  258 => 76,  255 => 74,  252 => 73,  249 => 72,  246 => 71,  243 => 70,  240 => 69,  237 => 67,  234 => 66,  231 => 65,  228 => 64,  225 => 63,  222 => 62,  219 => 60,  216 => 59,  213 => 58,  210 => 57,  207 => 56,  204 => 55,  201 => 54,  198 => 52,  195 => 51,  192 => 50,  189 => 49,  186 => 48,  183 => 47,  180 => 45,  177 => 44,  174 => 43,  171 => 42,  168 => 40,  165 => 39,  161 => 37,  158 => 36,  155 => 34,  153 => 33,  150 => 32,  147 => 31,  144 => 29,  141 => 28,  138 => 26,  135 => 25,  132 => 24,  129 => 23,  126 => 21,  123 => 20,  120 => 18,  117 => 17,  114 => 16,  111 => 15,  108 => 14,  105 => 13,  102 => 11,  99 => 10,  96 => 8,  94 => 7,  91 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/content/detail.html.twig' %}

{% block page_content_sections_inner %}
    <div class=\"cms-sections\">
        {% for section in cmsPage.sections %}

            {% if loop.index is same as (1) and isHeroSection is same as (true) %}

                {# ... section classes #}
                {% set sectionClasses = ['cms-section-hero', section.cssClass, 'pos-' ~ section.position, 'cms-section-' ~ section.type] %}

                {# ... set section bg color #}
                {% if zenCustomFields.category.zenit_stratus_category_image_color is empty %}
                    {% set sectionBgColor = section.backgroundColor ? section.backgroundColor : 'transparent' %}
                {% else %}
                    {% set sectionBgColor = zenCustomFields.category.zenit_stratus_category_image_color %}
                {% endif %}

                {# ... set section bg image #}
                {% set sectionBgImg = section.backgroundMedia|sw_encode_media_url %}

                {# ... category image #}
                {% set categoryMedia = page.header.navigation.active.media %}
                {% if hasCategoryImage %}
                    {% if categoryMedia %}

                        {# ... category image style #}
                        {% set sectionBgImg = categoryMedia|sw_encode_media_url %}

                        {# ... category image class #}
                        {% set sectionClasses = ['category-image']|merge(sectionClasses) %}

                    {% elseif sectionBgImg %}

                        {# ... category image class #}
                        {% set sectionClasses = ['category-image']|merge(sectionClasses) %}

                    {% endif %}
                {% endif %}

                {# ... category overlay class #}
                {% if sectionCategoryOverlay %}
                    {% set sectionClasses = ['cms-section-overlay']|merge(sectionClasses) %}
                {% endif %}

                {# ... set section bg image mode #}
                {% if section.backgroundMediaMode %}
                    {% set sectionBgImgMode = section.backgroundMediaMode %}
                {% else %}
                    {% set sectionBgImgMode = 'cover' %}
                {% endif %}

                {# ... set opacity style #}
                {% set categoryImageOpacity = zenCustomFields.category.zenit_stratus_category_image_opacity|replace({'%': ''}) %}
                {% if categoryImageOpacity is empty or categoryImageOpacity is same as ('inherit') %}
                    {% set sectionBgOpacity = theme_config(\"zen-category-image-opacity\")|number_format %}
                {% else %}
                    {% set sectionBgOpacity = categoryImageOpacity|number_format %}
                {% endif %}

                {# ... set attachment style #}
                {% if zenCustomFields.category.zenit_stratus_category_image_attachment is empty or zenCustomFields.category.zenit_stratus_category_image_attachment is same as ('inherit') %}
                    {% set sectionBgAttachment = theme_config(\"zen-category-image-attachment\") %}
                {% else %}
                    {% set sectionBgAttachment = zenCustomFields.category.zenit_stratus_category_image_attachment %}
                {% endif %}

                {# ... set position style #}
                {% if zenCustomFields.category.zenit_stratus_category_image_position is empty or zenCustomFields.category.zenit_stratus_category_image_position is same as ('inherit') %}
                    {% set sectionBgPosition = theme_config(\"zen-category-image-position\") %}
                {% else %}
                    {% set sectionBgPosition = zenCustomFields.category.zenit_stratus_category_image_position %}
                {% endif %}

                {# ... bg image class #}
                {% if sectionBgImg %}
                    {% set sectionClasses = ['bg-image']|merge(sectionClasses) %}
                {% endif %}

                {# ... bg color class #}
                {% if sectionBgColor %}
                    {% set sectionClasses = ['bg-color']|merge(sectionClasses) %}
                {% endif %}

                {# ... contrast class #}
                {% if zenCustomFields.category.zenit_stratus_category_image_contrast is empty or zenCustomFields.category.zenit_stratus_category_image_contrast is same as ('inherit') %}
                    {% set sectionClasses = [theme_config(\"zen-category-image-contrast\")]|merge(sectionClasses) %}
                {% else %}
                    {% set sectionClasses = [zenCustomFields.category.zenit_stratus_category_image_contrast]|merge(sectionClasses) %}
                {% endif %}

                {# ... opacity class #}
                {% if sectionBgOpacity < 100 and sectionBgColor %}
                    {% set sectionClasses = ['has-opacity']|merge(sectionClasses) %}
                {% endif %}

                {% set layout = section.sizingMode ? section.sizingMode|replace({\"_\": \"-\"}) : \"container\" %}

                {% block zen_page_content_section_category_image %}
                    <div class=\"cms-section {{ layout }} {{ sectionClasses|join(' ') }}\"
                         style=\"{% if sectionBgAttachment %}background-attachment: {{ sectionBgAttachment }};{% endif %}{% if sectionBgPosition %}background-position: {{ sectionBgPosition }};{% endif %}{% if sectionBgColor %}background-color: {{ sectionBgColor }};{% endif %}{% if sectionBgImg %}background-image: url('{{ sectionBgImg }}');background-size: {{ sectionBgImgMode }};{% endif %}\">

                        {% if sectionBgOpacity < 100 and sectionBgColor %}
                            <div class=\"cms-section-bg-color-overlay\"
                                 style=\"background-color: {{ sectionBgColor }}; opacity: {{(100 - sectionBgOpacity|number_format) / 100 }};\">
                            </div>
                        {% endif %}

                        {% sw_include \"@Storefront/storefront/section/cms-section-\" ~ section.type ~ \".html.twig\" %}
                    </div>
                {% endblock %}

                {# ... add default breadcrumbs, after first sections if it's an hero section  #}
                {% if defaultBreadcrumbs %}
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

            {% else %}
                {% set sectionBgColor = section.backgroundColor %}
                {% set sectionBgImg = section.backgroundMedia|sw_encode_media_url %}
                {% set sectionBgImgMode = section.backgroundMediaMode %}

                {% set sectionClasses = [section.cssClass, 'pos-' ~ section.position, 'cms-section-' ~ section.type] %}

                {% if sectionBgImg %}
                    {% set sectionClasses = ['bg-image']|merge(sectionClasses) %}
                {% endif %}

                {% if sectionBgColor %}
                    {% set sectionClasses = ['bg-color']|merge(sectionClasses) %}
                {% endif %}

                {# ... category overlay class #}
                {% if loop.index is same as (1) and sectionCategoryOverlay is same as (true) %}
                    {% if sectionCategoryOverlay %}
                        {% set sectionClasses = ['cms-section-overlay']|merge(sectionClasses) %}
                    {% endif %}
                {% endif %}

                {% set layout = section.sizingMode ? section.sizingMode|replace({\"_\": \"-\"}) : \"container\" %}

                {% block page_content_section %}
                    <div class=\"cms-section {{ layout }} {{ sectionClasses|join(' ') }}\"
                         style=\"{% if sectionBgColor %}background-color: {{ sectionBgColor }};{% endif %}{% if sectionBgImg %}background-image: url('{{ sectionBgImg }}');background-size: {{ section.backgroundMediaMode }};{% endif %}\">

                        {% sw_include \"@Storefront/storefront/section/cms-section-\" ~ section.type ~ \".html.twig\" %}
                    </div>
                {% endblock %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/page/content/detail.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/page/content/detail.html.twig");
    }
}
