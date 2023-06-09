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

/* @Storefront/storefront/layout/header/logo.html.twig */
class __TwigTemplate_1440f6ba416f3c1de87fec7dbf4cd9dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_logo_inner' => [$this, 'block_layout_header_logo_inner'],
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/logo.html.twig"));

        // line 1
        $this->displayBlock('layout_header_logo_inner', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_logo_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_inner"));

        // line 2
        echo "    <div class=\"header-logo-main\">
        ";
        // line 3
        $this->displayBlock('layout_header_logo_link', $context, $blocks);
        // line 34
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_layout_header_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_link"));

        // line 4
        echo "            <a class=\"header-logo-main-link\"
               href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
               title=\"";
        // line 6
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
        echo "\">
                ";
        // line 7
        $this->displayBlock('layout_header_logo_image', $context, $blocks);
        // line 32
        echo "            </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_layout_header_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        // line 8
        echo "                    <picture class=\"header-logo-picture\">
                            ";
        // line 9
        $this->displayBlock('layout_header_logo_image_tablet', $context, $blocks);
        // line 15
        echo "
                        ";
        // line 16
        $this->displayBlock('layout_header_logo_image_mobile', $context, $blocks);
        // line 22
        echo "
                        ";
        // line 23
        $this->displayBlock('layout_header_logo_image_default', $context, $blocks);
        // line 30
        echo "                    </picture>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_layout_header_logo_image_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_tablet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_tablet"));

        // line 10
        echo "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 11
            echo "                                <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet")), "html", null, true);
            echo "\"
                                        media=\"(min-width: ";
            // line 12
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            echo "px) and (max-width: ";
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            echo "px)\">
                            ";
        }
        // line 14
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_layout_header_logo_image_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_mobile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_mobile"));

        // line 17
        echo "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 18
            echo "                                <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile")), "html", null, true);
            echo "\"
                                        media=\"(max-width: ";
            // line 19
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            echo "px)\">
                            ";
        }
        // line 21
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_layout_header_logo_image_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_default"));

        // line 24
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")) {
            // line 25
            echo "                                <img src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 26
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
            echo "\"
                                     class=\"img-fluid header-logo-main-img\"/>
                            ";
        }
        // line 29
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/logo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  246 => 29,  240 => 26,  235 => 25,  232 => 24,  222 => 23,  212 => 21,  207 => 19,  202 => 18,  199 => 17,  189 => 16,  179 => 14,  172 => 12,  167 => 11,  164 => 10,  154 => 9,  143 => 30,  141 => 23,  138 => 22,  136 => 16,  133 => 15,  131 => 9,  128 => 8,  118 => 7,  107 => 32,  105 => 7,  101 => 6,  97 => 5,  94 => 4,  84 => 3,  73 => 34,  71 => 3,  68 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_logo_inner %}
    <div class=\"header-logo-main\">
        {% block layout_header_logo_link %}
            <a class=\"header-logo-main-link\"
               href=\"{{ path('frontend.home.page') }}\"
               title=\"{{ \"header.logoLink\"|trans|striptags }}\">
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
            </a>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/logo.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/header/logo.html.twig");
    }
}
