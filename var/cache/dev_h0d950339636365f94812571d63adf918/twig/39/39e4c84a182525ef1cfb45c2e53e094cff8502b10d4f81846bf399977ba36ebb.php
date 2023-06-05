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

/* @zenitPlatformStratus/storefront/layout/zen-preloader.html.twig */
class __TwigTemplate_9e57da258d72294e812303844f6ff70d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_logo_image' => [$this, 'block_layout_header_logo_image'],
            'layout_header_logo_image_tablet' => [$this, 'block_layout_header_logo_image_tablet'],
            'layout_header_logo_image_mobile' => [$this, 'block_layout_header_logo_image_mobile'],
            'layout_header_logo_image_default' => [$this, 'block_layout_header_logo_image_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig"));

        // line 1
        if ((((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-display") === "home") && (($context["controllerAction"] ?? null) === "home")) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-display") === "all")) || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-display") === "nohome") &&  !(        // line 3
($context["controllerAction"] ?? null) === "home")))) {
            // line 4
            echo "
    ";
            // line 5
            $context["timeout"] = (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-timeout")) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-timeout")) : (300));
            // line 6
            echo "
    <div class=\"preloader ";
            // line 7
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style"), "html", null, true);
            echo "\"
         data-zen-preloader=\"true\"
         data-zen-preloader-options='{\"animationOut\": \"";
            // line 9
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-exit"), "html", null, true);
            echo "\", \"timeout\": ";
            echo sw_escape_filter($this->env, ($context["timeout"] ?? null), "html", null, true);
            echo "}'>
        <div class=\"preloader-center\">
            <div class=\"preloader-center-absolute\">
                ";
            // line 12
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style") === "preloader-1")) {
                // line 13
                echo "                    <div class=\"object-round\" id=\"round-one\"></div>
                    <div class=\"object-round\" id=\"round-two\"></div>
                    <div class=\"object-round\" id=\"round-three\"></div>
                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style") === "preloader-2")) {
                // line 17
                echo "                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>

                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style") === "preloader-3")) {
                // line 28
                echo "                    <div class=\"object-rotate\" id=\"rotate-one\"></div>
                    <div class=\"object-rotate\" id=\"rotate-two\"></div>
                    <div class=\"object-rotate\" id=\"rotate-three\"></div>
                    <div class=\"object-rotate\" id=\"rotate-four\"></div>
                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style") === "preloader-4")) {
                // line 33
                echo "                    <div class=\"object-border\" id=\"border-four\"></div>
                    <div class=\"object-border\" id=\"border-three\"></div>
                    <div class=\"object-border\" id=\"border-two\"></div>
                    <div class=\"object-border\" id=\"border-one\"></div>
                ";
            } elseif (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-preloader-style") === "preloader-5")) {
                // line 38
                echo "                    <div class=\"object-logo\">
                        ";
                // line 39
                $this->displayBlock('layout_header_logo_image', $context, $blocks);
                // line 64
                echo "                    </div>
                ";
            }
            // line 66
            echo "            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_layout_header_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        // line 40
        echo "                            <picture class=\"header-logo-picture\">
                                ";
        // line 41
        $this->displayBlock('layout_header_logo_image_tablet', $context, $blocks);
        // line 47
        echo "
                                ";
        // line 48
        $this->displayBlock('layout_header_logo_image_mobile', $context, $blocks);
        // line 54
        echo "
                                ";
        // line 55
        $this->displayBlock('layout_header_logo_image_default', $context, $blocks);
        // line 62
        echo "                            </picture>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_layout_header_logo_image_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_tablet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_tablet"));

        // line 42
        echo "                                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 43
            echo "                                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet")), "html", null, true);
            echo "\"
                                                media=\"(min-width: ";
            // line 44
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            echo "px) and (max-width: ";
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            echo "px)\">
                                    ";
        }
        // line 46
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_layout_header_logo_image_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_mobile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_mobile"));

        // line 49
        echo "                                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 50
            echo "                                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile")), "html", null, true);
            echo "\"
                                                media=\"(max-width: ";
            // line 51
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            echo "px)\">
                                    ";
        }
        // line 53
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_layout_header_logo_image_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_default"));

        // line 56
        echo "                                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")) {
            // line 57
            echo "                                        <img src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")), "html", null, true);
            echo "\"
                                             alt=\"";
            // line 58
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
            echo "\"
                                             class=\"img-fluid header-logo-main-img\"/>
                                    ";
        }
        // line 61
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 61,  251 => 58,  246 => 57,  243 => 56,  233 => 55,  223 => 53,  218 => 51,  213 => 50,  210 => 49,  200 => 48,  190 => 46,  183 => 44,  178 => 43,  175 => 42,  165 => 41,  154 => 62,  152 => 55,  149 => 54,  147 => 48,  144 => 47,  142 => 41,  139 => 40,  129 => 39,  115 => 66,  111 => 64,  109 => 39,  106 => 38,  99 => 33,  92 => 28,  79 => 17,  73 => 13,  71 => 12,  63 => 9,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ( theme_config('zen-layout-preloader-display') is same as ('home') and controllerAction is same as ('home') )
    or theme_config('zen-layout-preloader-display') is same as ('all')
    or ( theme_config('zen-layout-preloader-display') is same as ('nohome') and controllerAction is not same as ('home') ) %}

    {% set timeout = theme_config('zen-layout-preloader-timeout') ?: 300 %}

    <div class=\"preloader {{ theme_config('zen-layout-preloader-style') }}\"
         data-zen-preloader=\"true\"
         data-zen-preloader-options='{\"animationOut\": \"{{ theme_config('zen-layout-preloader-exit') }}\", \"timeout\": {{ timeout }}}'>
        <div class=\"preloader-center\">
            <div class=\"preloader-center-absolute\">
                {% if theme_config('zen-layout-preloader-style') is same as ('preloader-1') %}
                    <div class=\"object-round\" id=\"round-one\"></div>
                    <div class=\"object-round\" id=\"round-two\"></div>
                    <div class=\"object-round\" id=\"round-three\"></div>
                {% elseif theme_config('zen-layout-preloader-style') is same as ('preloader-2') %}
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>
                    <div class=\"object-wave\"></div>

                {% elseif theme_config('zen-layout-preloader-style') is same as ('preloader-3') %}
                    <div class=\"object-rotate\" id=\"rotate-one\"></div>
                    <div class=\"object-rotate\" id=\"rotate-two\"></div>
                    <div class=\"object-rotate\" id=\"rotate-three\"></div>
                    <div class=\"object-rotate\" id=\"rotate-four\"></div>
                {% elseif theme_config('zen-layout-preloader-style') is same as ('preloader-4') %}
                    <div class=\"object-border\" id=\"border-four\"></div>
                    <div class=\"object-border\" id=\"border-three\"></div>
                    <div class=\"object-border\" id=\"border-two\"></div>
                    <div class=\"object-border\" id=\"border-one\"></div>
                {% elseif theme_config('zen-layout-preloader-style') is same as ('preloader-5') %}
                    <div class=\"object-logo\">
                        {% block layout_header_logo_image %}
                            <picture class=\"header-logo-picture\">
                                {% block layout_header_logo_image_tablet %}
                                    {% if theme_config('sw-logo-tablet') and theme_config('sw-logo-tablet') != theme_config('sw-logo-desktop') %}
                                        <source srcset=\"{{ theme_config('sw-logo-tablet') |sw_encode_url }}\"
                                                media=\"(min-width: {{ theme_config('breakpoint.md') }}px) and (max-width: {{ theme_config('breakpoint.lg') - 1 }}px)\">
                                    {% endif %}
                                {% endblock %}

                                {% block layout_header_logo_image_mobile %}
                                    {% if theme_config('sw-logo-mobile') and theme_config('sw-logo-mobile') != theme_config('sw-logo-desktop') %}
                                        <source srcset=\"{{ theme_config('sw-logo-mobile') |sw_encode_url }}\"
                                                media=\"(max-width: {{ theme_config('breakpoint.md') - 1 }}px)\">
                                    {% endif %}
                                {% endblock %}

                                {% block layout_header_logo_image_default %}
                                    {% if theme_config('sw-logo-desktop') %}
                                        <img src=\"{{ theme_config('sw-logo-desktop') |sw_encode_url }}\"
                                             alt=\"{{ \"header.logoLink\"|trans|striptags }}\"
                                             class=\"img-fluid header-logo-main-img\"/>
                                    {% endif %}
                                {% endblock %}
                            </picture>
                        {% endblock %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}
", "@zenitPlatformStratus/storefront/layout/zen-preloader.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/zen-preloader.html.twig");
    }
}
