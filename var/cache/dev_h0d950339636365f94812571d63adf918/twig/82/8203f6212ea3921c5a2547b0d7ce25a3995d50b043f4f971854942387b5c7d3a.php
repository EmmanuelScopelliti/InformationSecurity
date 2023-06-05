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

/* @zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig */
class __TwigTemplate_863bf580b4dd22cea443c450ccdf4c63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'zen_layout_header_top_bar_offcanvas_header' => [$this, 'block_zen_layout_header_top_bar_offcanvas_header'],
            'zen_layout_header_top_bar_offcanvas_logo' => [$this, 'block_zen_layout_header_top_bar_offcanvas_logo'],
            'zen_layout_header_top_bar_offcanvas_logo_link' => [$this, 'block_zen_layout_header_top_bar_offcanvas_logo_link'],
            'layout_header_top_bar_offcanvas_logo_image' => [$this, 'block_layout_header_top_bar_offcanvas_logo_image'],
            'zen_layout_header_top_bar_offcanvas_logo_image_tablet' => [$this, 'block_zen_layout_header_top_bar_offcanvas_logo_image_tablet'],
            'zen_layout_header_top_bar_offcanvas_logo_image_mobile' => [$this, 'block_zen_layout_header_top_bar_offcanvas_logo_image_mobile'],
            'zen_layout_header_top_bar_offcanvas_logo_image_default' => [$this, 'block_zen_layout_header_top_bar_offcanvas_logo_image_default'],
            'zen_layout_header_top_bar_offcanvas_marketing' => [$this, 'block_zen_layout_header_top_bar_offcanvas_marketing'],
            'zen_layout_header_top_bar_offcanvas_content' => [$this, 'block_zen_layout_header_top_bar_offcanvas_content'],
            'zen_layout_header_top_bar_offcanvas_footer' => [$this, 'block_zen_layout_header_top_bar_offcanvas_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        echo "    ";
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_header', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_content', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_footer', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_zen_layout_header_top_bar_offcanvas_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_header"));

        // line 5
        echo "        ";
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_logo', $context, $blocks);
        // line 41
        echo "
        ";
        // line 42
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_marketing', $context, $blocks);
        // line 55
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_zen_layout_header_top_bar_offcanvas_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo"));

        // line 6
        echo "            <div class=\"top-bar-logo\">
                ";
        // line 7
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_logo_link', $context, $blocks);
        // line 39
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_zen_layout_header_top_bar_offcanvas_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_link"));

        // line 8
        echo "                    <a class=\"top-bar-logo-link\"
                       href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                       title=\"";
        // line 10
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
        echo "\">
                        ";
        // line 11
        $this->displayBlock('layout_header_top_bar_offcanvas_logo_image', $context, $blocks);
        // line 37
        echo "                    </a>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_layout_header_top_bar_offcanvas_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_offcanvas_logo_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_offcanvas_logo_image"));

        // line 12
        echo "                            <picture>
                                ";
        // line 13
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_logo_image_tablet', $context, $blocks);
        // line 19
        echo "
                                ";
        // line 20
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_logo_image_mobile', $context, $blocks);
        // line 26
        echo "
                                ";
        // line 27
        $this->displayBlock('zen_layout_header_top_bar_offcanvas_logo_image_default', $context, $blocks);
        // line 34
        echo "                            </picture>

                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_zen_layout_header_top_bar_offcanvas_logo_image_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_tablet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_tablet"));

        // line 14
        echo "                                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-tablet")) {
            // line 15
            echo "                                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-tablet")), "html", null, true);
            echo "\"
                                                media=\"(min-width: ";
            // line 16
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            echo "px) and (max-width: ";
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            echo "px)\">
                                    ";
        }
        // line 18
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_zen_layout_header_top_bar_offcanvas_logo_image_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_mobile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_mobile"));

        // line 21
        echo "                                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-mobile")) {
            // line 22
            echo "                                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-mobile")), "html", null, true);
            echo "\"
                                                media=\"(max-width: ";
            // line 23
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            echo "px)\">
                                    ";
        }
        // line 25
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_zen_layout_header_top_bar_offcanvas_logo_image_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_logo_image_default"));

        // line 28
        echo "                                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-desktop")) {
            // line 29
            echo "                                        <img src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-offcanvas-desktop")), "html", null, true);
            echo "\"
                                             alt=\"";
            // line 30
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
            echo "\"
                                             class=\"img-fluid top-bar-logo-main-img\"/>
                                    ";
        }
        // line 33
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_zen_layout_header_top_bar_offcanvas_marketing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_marketing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_marketing"));

        // line 43
        echo "            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive")) {
            // line 44
            echo "                <div class=\"top-bar-marketing\">
                    ";
            // line 45
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/zen-text-slider.html.twig", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", 45)->display(twig_array_merge($context, ["active" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive"), "text" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingText"), "buttonText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonText"), "buttonLink" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonLink"), "buttonTarget" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonTarget")]));
            // line 52
            echo "                </div>
            ";
        }
        // line 54
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_zen_layout_header_top_bar_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_content"));

        // line 59
        echo "        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_zen_layout_header_top_bar_offcanvas_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_offcanvas_footer"));

        // line 63
        echo "        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/zen-login-register.html.twig", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", 63)->display($context);
        // line 64
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 64,  392 => 63,  382 => 62,  372 => 60,  369 => 59,  359 => 58,  349 => 54,  345 => 52,  343 => 45,  340 => 44,  337 => 43,  327 => 42,  317 => 33,  311 => 30,  306 => 29,  303 => 28,  293 => 27,  283 => 25,  278 => 23,  273 => 22,  270 => 21,  260 => 20,  250 => 18,  243 => 16,  238 => 15,  235 => 14,  225 => 13,  213 => 34,  211 => 27,  208 => 26,  206 => 20,  203 => 19,  201 => 13,  198 => 12,  188 => 11,  177 => 37,  175 => 11,  171 => 10,  167 => 9,  164 => 8,  154 => 7,  143 => 39,  141 => 7,  138 => 6,  128 => 5,  117 => 55,  115 => 42,  112 => 41,  109 => 5,  99 => 4,  89 => 62,  86 => 61,  84 => 58,  81 => 57,  78 => 4,  68 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
    {% block zen_layout_header_top_bar_offcanvas_header %}
        {% block zen_layout_header_top_bar_offcanvas_logo %}
            <div class=\"top-bar-logo\">
                {% block zen_layout_header_top_bar_offcanvas_logo_link %}
                    <a class=\"top-bar-logo-link\"
                       href=\"{{ path('frontend.home.page') }}\"
                       title=\"{{ \"header.logoLink\"|trans|striptags }}\">
                        {% block layout_header_top_bar_offcanvas_logo_image %}
                            <picture>
                                {% block zen_layout_header_top_bar_offcanvas_logo_image_tablet %}
                                    {% if theme_config('zen-logo-offcanvas-tablet') %}
                                        <source srcset=\"{{ theme_config('zen-logo-offcanvas-tablet') |sw_encode_url }}\"
                                                media=\"(min-width: {{ theme_config('breakpoint.md') }}px) and (max-width: {{ theme_config('breakpoint.lg') - 1 }}px)\">
                                    {% endif %}
                                {% endblock %}

                                {% block zen_layout_header_top_bar_offcanvas_logo_image_mobile %}
                                    {% if theme_config('zen-logo-offcanvas-mobile') %}
                                        <source srcset=\"{{ theme_config('zen-logo-offcanvas-mobile') |sw_encode_url }}\"
                                                media=\"(max-width: {{ theme_config('breakpoint.md') - 1 }}px)\">
                                    {% endif %}
                                {% endblock %}

                                {% block zen_layout_header_top_bar_offcanvas_logo_image_default %}
                                    {% if theme_config('zen-logo-offcanvas-desktop') %}
                                        <img src=\"{{ theme_config('zen-logo-offcanvas-desktop') |sw_encode_url }}\"
                                             alt=\"{{ \"header.logoLink\"|trans|striptags }}\"
                                             class=\"img-fluid top-bar-logo-main-img\"/>
                                    {% endif %}
                                {% endblock %}
                            </picture>

                        {% endblock %}
                    </a>
                {% endblock %}
            </div>
        {% endblock %}

        {% block zen_layout_header_top_bar_offcanvas_marketing %}
            {% if config('zenitPlatformStratus.config.marketingActive') %}
                <div class=\"top-bar-marketing\">
                    {% sw_include '@zenitPlatformStratus/storefront/component/zen-text-slider.html.twig' with {
                        active: config('zenitPlatformStratus.config.marketingActive'),
                        text: config('zenitPlatformStratus.config.marketingText'),
                        buttonText: config('zenitPlatformStratus.config.marketingButtonText'),
                        buttonLink: config('zenitPlatformStratus.config.marketingButtonLink'),
                        buttonTarget: config('zenitPlatformStratus.config.marketingButtonTarget')
                    } %}
                </div>
            {% endif %}
        {% endblock %}

    {% endblock %}

    {% block zen_layout_header_top_bar_offcanvas_content %}
        {% sw_include '@Storefront/storefront/layout/header/top-bar.html.twig' %}
    {% endblock %}

    {% block zen_layout_header_top_bar_offcanvas_footer %}
        {% sw_include '@zenitPlatformStratus/storefront/component/zen-login-register.html.twig' %}
    {% endblock %}
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/header/zen-top-bar-offcanvas.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/header/zen-top-bar-offcanvas.html.twig");
    }
}
