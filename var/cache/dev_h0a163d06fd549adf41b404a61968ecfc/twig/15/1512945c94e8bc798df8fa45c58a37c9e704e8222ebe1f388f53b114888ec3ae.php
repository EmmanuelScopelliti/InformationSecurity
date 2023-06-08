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

/* @zenitPlatformStratus/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_f10385d3ef156f9efb9846db37d7aa04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/utilities/thumbnail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/utilities/thumbnail.html.twig"));

        // line 3
        if ( !array_key_exists("load", $context)) {
            // line 4
            echo "    ";
            $context["load"] = true;
        }
        // line 6
        echo "
";
        // line 9
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 10
            echo "    ";
            $context["loadOriginalImage"] = false;
        }
        // line 12
        echo "
";
        // line 15
        if ( !array_key_exists("autoColumnSizes", $context)) {
            // line 16
            echo "    ";
            $context["autoColumnSizes"] = true;
        }
        // line 18
        echo "
";
        // line 19
        if ( !array_key_exists("attributes", $context)) {
            // line 20
            echo "    ";
            $context["attributes"] = [];
        }
        // line 22
        echo "
";
        // line 23
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 23) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 23), "alt", [], "any", true, true, false, 23))) {
            // line 24
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 24), "alt", [], "any", false, false, false, 24)]);
        }
        // line 26
        echo "
";
        // line 27
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 27) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 27), "title", [], "any", true, true, false, 27))) {
            // line 28
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)]);
        }
        // line 30
        echo "
";
        // line 32
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 32)) > 0)) {
            // line 33
            echo "    ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 34
                echo "        ";
                // line 35
                echo "        ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 38
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 39
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 41
                echo "
        ";
                // line 43
                echo "        ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 44
                    echo "            ";
                    $context["container"] = 100;
                    // line 45
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 46
                    echo "        ";
                } else {
                    // line 47
                    echo "            ";
                    // line 48
                    echo "            ";
                    $context["container"] = (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-container-width")) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-layout-container-width")) : (1400));
                    // line 49
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 50
                    echo "        ";
                }
                // line 51
                echo "    ";
            }
            // line 52
            echo "
    ";
            // line 53
            $context["thumbnails"] = twig_reverse_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 53)));
            // line 54
            echo "
    ";
            // line 56
            echo "    ";
            ob_start();
            ob_start();
            // line 57
            echo "        ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 57) + 1), "html", null, true);
                echo "w, ";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(sw_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 57)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 57), "html", null, true);
                echo "w";
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 57)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
            $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo twig_spaceless($___internal_parse_3_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
    ";
            // line 61
            echo "    ";
            ob_start();
            ob_start();
            // line 62
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 63
            echo "
        ";
            // line 65
            echo "        ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 66
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 67
                echo "        ";
            }
            // line 68
            echo "
        ";
            // line 69
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 76
            echo "
        ";
            // line 77
            if ((sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 77) > twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null))))) {
                // line 78
                echo "            ";
                // line 79
                echo "            ";
                $context["maxWidth"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 79);
                // line 80
                echo "        ";
            }
            // line 81
            echo "
        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "(min-width: ";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo sw_escape_filter($this->env, (($__internal_compile_0 = ($context["sizes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 82)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo sw_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            echo twig_spaceless($___internal_parse_4_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 85
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 86
        echo "    ";
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 86)) > 0)) {
            // line 87
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 88
            echo "        ";
            if ((($__internal_compile_1 = ($context["sizes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) {
                // line 89
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, (($__internal_compile_2 = ($context["sizes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((twig_length_filter($this->env,             // line 90
($context["sizes"] ?? null)) > 0)) {
                // line 91
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 93
            echo "    ";
        }
        // line 94
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (($context["value"] != "")) {
                echo " ";
                echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "/>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 95,  331 => 94,  328 => 93,  322 => 91,  320 => 90,  315 => 89,  312 => 88,  301 => 87,  298 => 86,  287 => 85,  283 => 61,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  231 => 78,  229 => 77,  226 => 76,  224 => 69,  221 => 68,  218 => 67,  215 => 66,  212 => 65,  209 => 63,  206 => 62,  202 => 61,  199 => 59,  196 => 56,  193 => 58,  150 => 57,  146 => 56,  143 => 54,  141 => 53,  138 => 52,  135 => 51,  132 => 50,  129 => 49,  126 => 48,  124 => 47,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  109 => 41,  107 => 39,  106 => 38,  104 => 35,  102 => 34,  99 => 33,  97 => 32,  94 => 30,  90 => 28,  88 => 27,  85 => 26,  81 => 24,  79 => 23,  76 => 22,  72 => 20,  70 => 19,  67 => 18,  63 => 16,  61 => 15,  58 => 12,  54 => 10,  52 => 9,  49 => 6,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# TODO: @zenit check on sw update #}
{# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
{% if load is not defined %}
    {% set load = true %}
{% endif %}

{# By default no original image will be loaded as soon as thumbnails are available. #}
{# When set to true the orginal image will be loaded when the viewport is greater than the largest available thumbnail. #}
{% if loadOriginalImage is not defined %}
    {% set loadOriginalImage = false %}
{% endif %}

{# By default the srcset sizes will be calculated automatically if `columns` are present and no `sizes` are configured. #}
{# When set to false the sizes attribute will not be generated automatically. #}
{% if autoColumnSizes is not defined %}
    {% set autoColumnSizes = true %}
{% endif %}

{% if attributes is not defined %}
    {% set attributes = {} %}
{% endif %}

{% if attributes.alt is not defined and media.translated.alt is defined %}
    {% set attributes = attributes|merge({'alt': media.translated.alt}) %}
{% endif %}

{% if attributes.title is not defined and media.translated.title is defined %}
    {% set attributes = attributes|merge({'title': media.translated.title}) %}
{% endif %}

{# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
{% if media.thumbnails|length > 0 %}
    {% if autoColumnSizes and columns and sizes is not defined %}
        {# set image size for every viewport #}
        {% set sizes = {
            'xs': (theme_config('breakpoint.sm') - 1) ~'px',
            'sm': (theme_config('breakpoint.md') - 1) ~'px',
            'md': ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
            'lg': ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
        } %}

        {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
        {% if layout == 'full-width' %}
            {% set container = 100 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
        {% else %}
            {# ... add layout container width #}
            {% set container = theme_config(\"zen-layout-container-width\") ?: 1400 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
        {% endif %}
    {% endif %}

    {% set thumbnails = media.thumbnails|sort|reverse %}

    {# generate srcset with all available thumbnails #}
    {% set srcsetValue %}{% apply spaceless %}
        {% if loadOriginalImage %}{{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% endif %}{% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
    {% endapply %}{% endset %}

    {# generate sizes #}
    {% set sizesValue %}{% apply spaceless %}
        {% set sizeFallback = 100 %}

        {# set largest size depending on column count of cms block #}
        {% if autoColumnSizes and columns %}
            {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
        {% endif %}

        {% set breakpoint = {
            'xs': theme_config('breakpoint.xs'),
            'sm': theme_config('breakpoint.sm'),
            'md': theme_config('breakpoint.md'),
            'lg': theme_config('breakpoint.lg'),
            'xl': theme_config('breakpoint.xl')
        } %}

        {% if thumbnails|first.width > breakpoint|reverse|first %}
            {# @deprecated tag:v6.5.0 - Variable `maxWidth` and parent condition will be removed #}
            {% set maxWidth = thumbnails|first.width %}
        {% endif %}

        {% for key, value in breakpoint|reverse %}(min-width: {{ value }}px) {{ sizes[key] }}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
    {% endapply %}{% endset %}
{% endif %}
<img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
    {% if media.thumbnails|length > 0 %}
        {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
        {% if sizes['default'] %}
        sizes=\"{{ sizes['default'] }}\"
        {% elseif sizes|length > 0 %}
        sizes=\"{{ sizesValue }}\"
        {% endif %}
    {% endif %}
    {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
/>
", "@zenitPlatformStratus/storefront/utilities/thumbnail.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
