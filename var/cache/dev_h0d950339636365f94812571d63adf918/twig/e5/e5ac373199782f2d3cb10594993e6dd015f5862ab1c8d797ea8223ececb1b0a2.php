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

/* @zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_3974b85505738108108744591f06bfbd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_header_actions_language_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        // line 4
        echo "    ";
        $context["languageText"] = (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-language-widget-text")) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-language-widget-text")) : ("standard"));
        // line 5
        echo "
    ";
        // line 6
        if ((null === $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-language-widget-flag"))) {
            // line 7
            echo "        ";
            // line 8
            echo "        ";
            $context["languageFlag"] = true;
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["languageFlag"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-top-bar-language-widget-flag");
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "activeLanguage", [], "any", false, false, false, 13), "translationCode", [], "any", false, false, false, 13), "code", [], "any", false, false, false, 13)), "-");
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        $context["language"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_0 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) : ((($__internal_compile_1 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null)));
        // line 16
        echo "    ";
        $context["country"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_2 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)) : ((($__internal_compile_3 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)));
        // line 17
        echo "
<div class=\"languages-menu dropdown\">
    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
            type=\"button\"
            id=\"languagesDropdown-";
        // line 21
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\">

            ";
        // line 26
        if (($context["languageFlag"] ?? null)) {
            // line 27
            echo "                <div class=\"top-bar-list-icon language-flag country-";
            echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
            echo " language-";
            echo sw_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 29
        echo "            ";
        if ((($context["languageText"] ?? null) === "standard")) {
            // line 30
            echo "                <span class=\"top-bar-nav-text\">";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "activeLanguage", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
            ";
        } elseif ((        // line 31
($context["languageText"] ?? null) === "isoCodeShort")) {
            // line 32
            echo "                <span class=\"top-bar-nav-text\">";
            echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
            echo "</span>
            ";
        } elseif ((        // line 33
($context["languageText"] ?? null) === "isoCodeFull")) {
            // line 34
            echo "                <span class=\"top-bar-nav-text\">";
            echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
            echo "-";
            echo sw_escape_filter($this->env, twig_upper_filter($this->env, ($context["language"] ?? null)), "html", null, true);
            echo "</span>
            ";
        }
        // line 36
        echo "        </button>
        ";
        // line 37
        $this->displayBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 76
        echo "    </div>

    <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 78
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "get", [0 => "_route"], "method", false, false, false, 78), "html", null, true);
        echo "\"/>

    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", [0 => "_route_params"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 81
            echo "        <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" type=\"hidden\" value=\"";
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_layout_header_actions_languages_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        // line 38
        echo "            <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                 aria-labelledby=\"languagesDropdown-";
        // line 39
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 40), "languages", [], "any", false, false, false, 40));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                    <div class=\"top-bar-list-item dropdown-item";
            if ((sw_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 41) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 41), "activeLanguage", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41))) {
                echo " item-checked";
            }
            echo "\"
                         title=\"";
            // line 42
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["language"], "translated", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\">

                        ";
            // line 44
            $this->displayBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 72
            echo "                    </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_layout_header_actions_languages_widget_form_items_flag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        // line 45
        echo "                            ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 45), "code", [], "any", false, false, false, 45)), "-");
        // line 46
        echo "                            ";
        // line 47
        echo "                            ";
        $context["flagLanguage"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_4 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) : ((($__internal_compile_5 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null)));
        // line 48
        echo "                            ";
        $context["flagCountry"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_6 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null)) : ((($__internal_compile_7 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)));
        // line 49
        echo "
                            <label class=\"top-bar-list-label\"
                                   for=\"";
        // line 51
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                                <input id=\"";
        // line 52
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\"
                                       class=\"top-bar-list-radio\"
                                       value=\"";
        // line 54
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\"
                                       name=\"languageId\"
                                       type=\"radio\"
                                    ";
        // line 57
        if ((sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 57) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 57), "activeLanguage", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57))) {
            echo " checked";
        }
        echo ">

                                ";
        // line 59
        if (($context["languageFlag"] ?? null)) {
            // line 60
            echo "                                    <div class=\"top-bar-list-icon language-flag country-";
            echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
            echo " language-";
            echo sw_escape_filter($this->env, ($context["flagLanguage"] ?? null), "html", null, true);
            echo "\"></div>
                                ";
        }
        // line 62
        echo "
                                ";
        // line 63
        if ((($context["languageText"] ?? null) === "standard")) {
            // line 64
            echo "                                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                ";
        } elseif ((        // line 65
($context["languageText"] ?? null) === "isoCodeShort")) {
            // line 66
            echo "                                    ";
            echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
            echo "
                                ";
        } elseif ((        // line 67
($context["languageText"] ?? null) === "isoCodeFull")) {
            // line 68
            echo "                                    ";
            echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
            echo "-";
            echo sw_escape_filter($this->env, twig_upper_filter($this->env, ($context["flagLanguage"] ?? null)), "html", null, true);
            echo "
                                ";
        }
        // line 70
        echo "                            </label>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 70,  345 => 68,  343 => 67,  338 => 66,  336 => 65,  331 => 64,  329 => 63,  326 => 62,  318 => 60,  316 => 59,  309 => 57,  303 => 54,  296 => 52,  290 => 51,  286 => 49,  283 => 48,  280 => 47,  278 => 46,  275 => 45,  265 => 44,  254 => 74,  239 => 72,  237 => 44,  232 => 42,  225 => 41,  208 => 40,  204 => 39,  201 => 38,  191 => 37,  172 => 81,  168 => 80,  163 => 78,  159 => 76,  157 => 37,  154 => 36,  146 => 34,  144 => 33,  139 => 32,  137 => 31,  132 => 30,  129 => 29,  121 => 27,  119 => 26,  111 => 21,  105 => 17,  102 => 16,  99 => 15,  97 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  78 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/actions/language-widget.html.twig' %}

{% block layout_header_actions_language_widget_content %}
    {% set languageText = theme_config('zen-top-bar-language-widget-text') ?: 'standard' %}

    {% if theme_config('zen-top-bar-language-widget-flag') is null %}
        {# fallback for older child-themes without this config #}
        {% set languageFlag = true %}
    {% else %}
        {% set languageFlag = theme_config('zen-top-bar-language-widget-flag') %}
    {% endif %}

    {% set isoCode = page.header.activeLanguage.translationCode.code|lower|split('-') %}
    {# @deprecated tag:v6.5.0 - Remove else cases, to maintain correct split of isoCode #}
    {% set language = feature('v6.5.0.0') ? isoCode[0] : isoCode[1] %}
    {% set country = feature('v6.5.0.0') ? isoCode[1] : isoCode[0] %}

<div class=\"languages-menu dropdown\">
    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
            type=\"button\"
            id=\"languagesDropdown-{{ position }}\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\">

            {% if languageFlag %}
                <div class=\"top-bar-list-icon language-flag country-{{ country }} language-{{ language }}\"></div>
            {% endif %}
            {% if languageText is same as ('standard') %}
                <span class=\"top-bar-nav-text\">{{ page.header.activeLanguage.name }}</span>
            {% elseif languageText is same as ('isoCodeShort') %}
                <span class=\"top-bar-nav-text\">{{ country }}</span>
            {% elseif languageText is same as ('isoCodeFull') %}
                <span class=\"top-bar-nav-text\">{{ country }}-{{ language|upper }}</span>
            {% endif %}
        </button>
        {% block layout_header_actions_languages_widget_form_items %}
            <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                 aria-labelledby=\"languagesDropdown-{{ position }}\">
                {% for language in  page.header.languages %}
                    <div class=\"top-bar-list-item dropdown-item{% if language.id is same as(page.header.activeLanguage.id) %} item-checked{% endif %}\"
                         title=\"{{ language.translated.name }}\">

                        {% block layout_header_actions_languages_widget_form_items_flag %}
                            {% set isoCode = language.translationCode.code|lower|split('-') %}
                            {# @deprecated tag:v6.5.0 - Remove else cases, to maintain correct split of isoCode #}
                            {% set flagLanguage = feature('v6.5.0.0') ? isoCode[0] : isoCode[1] %}
                            {% set flagCountry = feature('v6.5.0.0') ? isoCode[1] : isoCode[0] %}

                            <label class=\"top-bar-list-label\"
                                   for=\"{{ position }}-{{ language.id }}\">
                                <input id=\"{{ position }}-{{ language.id }}\"
                                       class=\"top-bar-list-radio\"
                                       value=\"{{ language.id }}\"
                                       name=\"languageId\"
                                       type=\"radio\"
                                    {% if language.id is same as(page.header.activeLanguage.id) %} checked{% endif %}>

                                {% if languageFlag %}
                                    <div class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></div>
                                {% endif %}

                                {% if languageText is same as ('standard') %}
                                    {{ language.name }}
                                {% elseif languageText is same as ('isoCodeShort') %}
                                    {{ flagCountry }}
                                {% elseif languageText is same as ('isoCodeFull') %}
                                    {{ flagCountry }}-{{ flagLanguage|upper }}
                                {% endif %}
                            </label>
                        {% endblock %}
                    </div>
                {% endfor %}
            </div>
        {% endblock %}
    </div>

    <input name=\"redirectTo\" type=\"hidden\" value=\"{{ app.request.get('_route') }}\"/>

    {% for key, value in app.request.attributes.get('_route_params') %}
        <input name=\"redirectParameters[{{ key }}]\" type=\"hidden\" value=\"{{ value }}\">
    {% endfor %}
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
