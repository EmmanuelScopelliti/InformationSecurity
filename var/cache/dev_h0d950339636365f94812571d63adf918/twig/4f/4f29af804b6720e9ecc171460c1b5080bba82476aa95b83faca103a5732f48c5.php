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

/* @zenitPlatformStratus/storefront/layout/meta.html.twig */
class __TwigTemplate_3318433508bec51d1d60847a72ac7104 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'zen_layout_head_styles' => [$this, 'block_zen_layout_head_styles'],
            'zen_layout_head_custom_css_files' => [$this, 'block_zen_layout_head_custom_css_files'],
            'zen_layout_head_custom_css_styles' => [$this, 'block_zen_layout_head_custom_css_styles'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'zen_layout_head_theme_js_files' => [$this, 'block_zen_layout_head_theme_js_files'],
            'zen_layout_head_theme_js_custom' => [$this, 'block_zen_layout_head_theme_js_custom'],
            'zen_base_webfont' => [$this, 'block_zen_base_webfont'],
            'zen_base_webfont_loader' => [$this, 'block_zen_base_webfont_loader'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/meta.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/meta.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@zenitPlatformStratus/storefront/layout/meta.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("layout_head_stylesheet", $context, $blocks);
        echo "

    ";
        // line 6
        $this->displayBlock('zen_layout_head_styles', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('zen_layout_head_custom_css_files', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('zen_layout_head_custom_css_styles', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_zen_layout_head_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_styles"));

        // line 7
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-bg-img")) {
            // line 8
            echo "            <style data-plugin=\"zenitStratus\">";
            ob_start();
            // line 9
            echo "                body {
                    background-image: url(\"";
            // line 10
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-bg-img"), "html", null, true);
            echo "\");
                }
            ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 8
            echo twig_spaceless($___internal_parse_0_);
            // line 12
            echo "</style>
        ";
        }
        // line 14
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_zen_layout_head_custom_css_files($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_custom_css_files"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_custom_css_files"));

        // line 17
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customCssFilesActive")) {
            // line 18
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customCssFiles");
            echo "
        ";
        }
        // line 20
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_zen_layout_head_custom_css_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_custom_css_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_custom_css_styles"));

        // line 23
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customCssActive")) {
            // line 24
            echo "            <style data-plugin=\"zenitStratusCustomCss\">";
            ob_start();
            // line 25
            echo "                ";
            echo twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customCss"), ["<style>" => "", "</style>" => ""]);
            echo "
                ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 24
            echo twig_spaceless($___internal_parse_1_);
            // line 26
            echo "</style>
        ";
        }
        // line 28
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        // line 32
        echo "    ";
        $this->displayParentBlock("layout_head_javascript_tracking", $context, $blocks);
        echo "

    ";
        // line 34
        $this->displayBlock('zen_layout_head_theme_js_files', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('zen_layout_head_theme_js_custom', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('zen_base_webfont', $context, $blocks);
        // line 129
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_zen_layout_head_theme_js_files($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_theme_js_files"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_theme_js_files"));

        // line 35
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customHeadJsFilesActive")) {
            // line 36
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customHeadJsFiles");
            echo "
        ";
        }
        // line 38
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_zen_layout_head_theme_js_custom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_theme_js_custom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_head_theme_js_custom"));

        // line 41
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customHeadJsActive")) {
            // line 42
            echo "            <script data-plugin=\"zenitStratusCustomHeadJs\">
                ";
            // line 43
            echo twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customHeadJs"), ["<script>" => "", "</script>" => ""]);
            echo "
            </script>
        ";
        }
        // line 46
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_zen_base_webfont($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_webfont"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_webfont"));

        // line 49
        echo "        ";
        // line 50
        echo "        ";
        $context["hasCustomBaseFont"] = ((null === $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-base-default")) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-base-default") === "custom"));
        // line 51
        echo "        ";
        $context["hasCustomHeadlineFont"] = ((null === $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-headline-default")) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-headline-default") === "custom"));
        // line 52
        echo "
        ";
        // line 53
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-base") && ($context["hasCustomBaseFont"] ?? null))) {
            // line 54
            echo "            ";
            $context["fontFamilyBase"] = (((($__internal_compile_0 = twig_split_filter($this->env, twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-base"), ["'" => "", " " => "+"]), ",")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) . ":") . twig_join_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-base-weight"), ","));
            // line 55
            echo "        ";
        }
        // line 56
        echo "
        ";
        // line 57
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-headline") && ($context["hasCustomHeadlineFont"] ?? null))) {
            // line 58
            echo "            ";
            $context["fontFamilyHeadline"] = (((($__internal_compile_1 = twig_split_filter($this->env, twig_replace_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-headline"), ["'" => "", " " => "+"]), ",")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) . ":") . twig_join_filter($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-headline-weight"), ","));
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 62
        echo "        ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-base") === $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-font-family-headline"))) {
            // line 63
            echo "            ";
            if (($context["hasCustomBaseFont"] ?? null)) {
                // line 64
                echo "                ";
                $context["fontFamilyHeadline"] = "";
                // line 65
                echo "            ";
            } elseif (($context["hasCustomHeadlineFont"] ?? null)) {
                // line 66
                echo "                ";
                $context["fontFamilyBase"] = "";
                // line 67
                echo "            ";
            }
            // line 68
            echo "
            ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-headline-weight"));
            foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
                // line 70
                echo "                ";
                if (!twig_in_filter($context["weight"], $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-base-weight"))) {
                    // line 71
                    echo "                    ";
                    $context["fontFamilyBase"] = ((($context["fontFamilyBase"] ?? null) . ",") . $context["weight"]);
                    // line 72
                    echo "                ";
                }
                // line 73
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        ";
        }
        // line 75
        echo "
        ";
        // line 77
        echo "        ";
        $this->displayBlock('zen_base_webfont_loader', $context, $blocks);
        // line 128
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_zen_base_webfont_loader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_webfont_loader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_base_webfont_loader"));

        // line 78
        echo "            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-font-family-import") && (($context["hasCustomBaseFont"] ?? null) || ($context["hasCustomHeadlineFont"] ?? null)))) {
            // line 79
            echo "                ";
            // line 80
            echo "                ";
            if ( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, true, false, 80), "extensions", [], "any", false, true, false, 80), "zenitPlatformStratus", [], "array", false, true, false, 80), "system", [], "any", true, true, false, 80)) {
                // line 81
                echo "                    ";
                $context["loader"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/zenitplatformstratus/assets/font/webfont.js");
                // line 82
                echo "                ";
            } else {
                // line 83
                echo "                    ";
                $context["loader"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/zenitplatformstratus/storefront/assets/font/webfont.js");
                // line 84
                echo "                ";
            }
            // line 85
            echo "
                ";
            // line 87
            echo "                ";
            $context["zenGoogleFontsOptions"] = ["checkCookie" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.googleFontsCookie"), "webfontLoaderUrl" =>             // line 89
($context["loader"] ?? null), "zenthemeFontFamilyBase" =>             // line 90
($context["fontFamilyBase"] ?? null), "zenthemeFontFamilyHeadline" =>             // line 91
($context["fontFamilyHeadline"] ?? null)];
            // line 93
            echo "
                ";
            // line 94
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.googleFontsCookie")) {
                // line 95
                echo "                    <template data-google-fonts=\"true\" data-zen-google-fonts-options=\"";
                echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["zenGoogleFontsOptions"] ?? null)), "html", null, true);
                echo "\"></template>
                ";
            } else {
                // line 97
                echo "                    <script data-plugin=\"zenitStratusFonts\">
                        var zenthemeFonts = [],
                            zenthemeFontFamilyBase = '";
                // line 99
                echo sw_escape_filter($this->env, ($context["fontFamilyBase"] ?? null), "html", null, true);
                echo "',
                            zenthemeFontFamilyHeadline = '";
                // line 100
                echo sw_escape_filter($this->env, ($context["fontFamilyHeadline"] ?? null), "html", null, true);
                echo "';
                        fontDisplay = '&display=swap';

                        zenthemeFontFamilyBase ? zenthemeFonts.push( zenthemeFontFamilyBase.replace('&amp;','&') ) : '';
                        zenthemeFontFamilyHeadline ? zenthemeFonts.push( zenthemeFontFamilyHeadline.replace('&amp;','&') ) : '';
                        zenthemeFonts.push( fontDisplay.replace('&amp;','&') );

                        WebFontConfig = {
                            google: {
                                families: zenthemeFonts,
                                timeout: 2000,
                            },
                            active: function () {
                                let event = new Event('webfontsloaded');
                                document.dispatchEvent(event);
                            },
                        };

                        (function(d) {
                            const wf = d.createElement('script'), s = d.scripts[0];
                            wf.src = '";
                // line 120
                echo sw_escape_filter($this->env, ($context["loader"] ?? null), "html", null, true);
                echo "';
                            wf.async = true;
                            s.parentNode.insertBefore(wf, s);
                        })(document);
                    </script>
                ";
            }
            // line 126
            echo "            ";
        }
        // line 127
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        // line 133
        echo "    ";
        $this->displayParentBlock("layout_head_apple", $context, $blocks);
        echo "

    <meta name=\"theme-color\" content=\"";
        // line 135
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-meta-theme-color"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 135,  526 => 133,  516 => 132,  506 => 127,  503 => 126,  494 => 120,  471 => 100,  467 => 99,  463 => 97,  457 => 95,  455 => 94,  452 => 93,  450 => 91,  449 => 90,  448 => 89,  446 => 87,  443 => 85,  440 => 84,  437 => 83,  434 => 82,  431 => 81,  428 => 80,  426 => 79,  423 => 78,  413 => 77,  403 => 128,  400 => 77,  397 => 75,  394 => 74,  388 => 73,  385 => 72,  382 => 71,  379 => 70,  375 => 69,  372 => 68,  369 => 67,  366 => 66,  363 => 65,  360 => 64,  357 => 63,  354 => 62,  351 => 60,  348 => 59,  345 => 58,  343 => 57,  340 => 56,  337 => 55,  334 => 54,  332 => 53,  329 => 52,  326 => 51,  323 => 50,  321 => 49,  311 => 48,  301 => 46,  295 => 43,  292 => 42,  289 => 41,  279 => 40,  269 => 38,  263 => 36,  260 => 35,  250 => 34,  239 => 129,  237 => 48,  234 => 47,  232 => 40,  229 => 39,  227 => 34,  221 => 32,  211 => 31,  201 => 28,  197 => 26,  195 => 24,  189 => 25,  186 => 24,  183 => 23,  173 => 22,  163 => 20,  157 => 18,  154 => 17,  144 => 16,  134 => 14,  130 => 12,  128 => 8,  122 => 10,  119 => 9,  116 => 8,  113 => 7,  103 => 6,  93 => 22,  90 => 21,  88 => 16,  85 => 15,  83 => 6,  77 => 4,  67 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/meta.html.twig' %}

{% block layout_head_stylesheet %}
    {{ parent() }}

    {% block zen_layout_head_styles %}
        {% if theme_config('zen-layout-bg-img') %}
            <style data-plugin=\"zenitStratus\">{% apply spaceless %}
                body {
                    background-image: url(\"{{ theme_config('zen-layout-bg-img') }}\");
                }
            {% endapply %}</style>
        {% endif %}
    {% endblock %}

    {% block zen_layout_head_custom_css_files %}
        {% if config('zenitPlatformStratus.config.customCssFilesActive') %}
            {{ config('zenitPlatformStratus.config.customCssFiles')|raw }}
        {% endif %}
    {% endblock %}

    {% block zen_layout_head_custom_css_styles %}
        {% if config('zenitPlatformStratus.config.customCssActive') %}
            <style data-plugin=\"zenitStratusCustomCss\">{% apply spaceless %}
                {{ config('zenitPlatformStratus.config.customCss')|replace({'<style>': '','</style>': ''})|raw }}
                {% endapply %}</style>
        {% endif %}
    {% endblock %}
{% endblock %}

{% block layout_head_javascript_tracking %}
    {{ parent() }}

    {% block zen_layout_head_theme_js_files %}
        {% if config('zenitPlatformStratus.config.customHeadJsFilesActive') %}
            {{ config('zenitPlatformStratus.config.customHeadJsFiles')|raw }}
        {% endif %}
    {% endblock %}

    {% block zen_layout_head_theme_js_custom %}
        {% if config('zenitPlatformStratus.config.customHeadJsActive') %}
            <script data-plugin=\"zenitStratusCustomHeadJs\">
                {{ config('zenitPlatformStratus.config.customHeadJs')|replace({'<script>': '','</script>': ''})|raw }}
            </script>
        {% endif %}
    {% endblock %}

    {% block zen_base_webfont %}
        {# Fonts implementation checks if has custom fonts to load #}
        {% set hasCustomBaseFont = theme_config('zen-font-family-base-default') is null or theme_config('zen-font-family-base-default') is same as ('custom') %}
        {% set hasCustomHeadlineFont = theme_config('zen-font-family-headline-default') is null or theme_config('zen-font-family-headline-default') is same as ('custom') %}

        {% if theme_config('sw-font-family-base') and hasCustomBaseFont %}
            {% set fontFamilyBase = theme_config('sw-font-family-base')|replace({'\\'':'', ' ':'+'})|split(',')[0] ~ ':' ~ theme_config('zen-font-family-base-weight')|join(',') %}
        {% endif %}

        {% if theme_config('sw-font-family-headline') and hasCustomHeadlineFont %}
            {% set fontFamilyHeadline = theme_config('sw-font-family-headline')|replace({'\\'':'', ' ':'+'})|split(',')[0] ~ ':' ~ theme_config('zen-font-family-headline-weight')|join(',') %}
        {% endif %}

        {# Avoid double implementation when base and headline fonts are the same #}
        {% if theme_config('sw-font-family-base') is same as (theme_config('sw-font-family-headline')) %}
            {% if hasCustomBaseFont %}
                {% set fontFamilyHeadline = '' %}
            {% elseif hasCustomHeadlineFont %}
                {% set fontFamilyBase = '' %}
            {% endif %}

            {% for weight in theme_config('zen-font-family-headline-weight') %}
                {% if weight not in theme_config('zen-font-family-base-weight') %}
                    {% set fontFamilyBase = fontFamilyBase ~ ',' ~ weight %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {# Google Webfont Loader #}
        {% block zen_base_webfont_loader %}
            {% if theme_config('zen-font-family-import') and (hasCustomBaseFont or hasCustomHeadlineFont) %}
                {# ... check if it is app environment or not #}
                {% if context.context.extensions['zenitPlatformStratus'].system is not defined %}
                    {% set loader = asset('bundles/zenitplatformstratus/assets/font/webfont.js') %}
                {% else %}
                    {% set loader = asset('bundles/zenitplatformstratus/storefront/assets/font/webfont.js') %}
                {% endif %}

                {# ... theme script options #}
                {% set zenGoogleFontsOptions = {
                    checkCookie: config('zenitPlatformStratus.config.googleFontsCookie'),
                    webfontLoaderUrl: loader,
                    zenthemeFontFamilyBase: fontFamilyBase,
                    zenthemeFontFamilyHeadline: fontFamilyHeadline
                } %}

                {% if config('zenitPlatformStratus.config.googleFontsCookie') %}
                    <template data-google-fonts=\"true\" data-zen-google-fonts-options=\"{{ zenGoogleFontsOptions|json_encode }}\"></template>
                {% else %}
                    <script data-plugin=\"zenitStratusFonts\">
                        var zenthemeFonts = [],
                            zenthemeFontFamilyBase = '{{ fontFamilyBase }}',
                            zenthemeFontFamilyHeadline = '{{ fontFamilyHeadline }}';
                        fontDisplay = '&display=swap';

                        zenthemeFontFamilyBase ? zenthemeFonts.push( zenthemeFontFamilyBase.replace('&amp;','&') ) : '';
                        zenthemeFontFamilyHeadline ? zenthemeFonts.push( zenthemeFontFamilyHeadline.replace('&amp;','&') ) : '';
                        zenthemeFonts.push( fontDisplay.replace('&amp;','&') );

                        WebFontConfig = {
                            google: {
                                families: zenthemeFonts,
                                timeout: 2000,
                            },
                            active: function () {
                                let event = new Event('webfontsloaded');
                                document.dispatchEvent(event);
                            },
                        };

                        (function(d) {
                            const wf = d.createElement('script'), s = d.scripts[0];
                            wf.src = '{{ loader }}';
                            wf.async = true;
                            s.parentNode.insertBefore(wf, s);
                        })(document);
                    </script>
                {% endif %}
            {% endif %}
        {% endblock %}
    {% endblock %}

{% endblock %}

{% block layout_head_apple %}
    {{ parent() }}

    <meta name=\"theme-color\" content=\"{{ theme_config('zen-meta-theme-color') }}\"/>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/meta.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/meta.html.twig");
    }
}
