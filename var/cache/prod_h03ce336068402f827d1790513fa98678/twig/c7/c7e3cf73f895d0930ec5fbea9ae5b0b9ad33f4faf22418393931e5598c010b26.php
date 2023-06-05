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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_91ded696b4966f19ed2e3fe03787cbb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'thumbnail_utility' => [$this, 'block_thumbnail_utility'],
            'thumbnail_utility_img' => [$this, 'block_thumbnail_utility_img'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('thumbnail_utility', $context, $blocks);
    }

    public function block_thumbnail_utility($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ( !array_key_exists("load", $context)) {
            // line 4
            echo "        ";
            $context["load"] = true;
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 10
            echo "        ";
            $context["loadOriginalImage"] = false;
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        if ( !array_key_exists("autoColumnSizes", $context)) {
            // line 16
            echo "        ";
            $context["autoColumnSizes"] = true;
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ( !array_key_exists("attributes", $context)) {
            // line 20
            echo "        ";
            $context["attributes"] = [];
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 23) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 23), "alt", [], "any", true, true, false, 23))) {
            // line 24
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 24), "alt", [], "any", false, false, false, 24)]);
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 27) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 27), "title", [], "any", true, true, false, 27))) {
            // line 28
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)]);
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    ";
        // line 32
        echo "    ";
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 32)) > 0)) {
            // line 33
            echo "        ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 34
                echo "            ";
                // line 35
                echo "            ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 38
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 39
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 41
                echo "
            ";
                // line 43
                echo "            ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 44
                    echo "                ";
                    $context["container"] = 100;
                    // line 45
                    echo "                ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 46
                    echo "            ";
                } else {
                    // line 47
                    echo "                ";
                    $context["container"] = 1360;
                    // line 48
                    echo "                ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 49
                    echo "            ";
                }
                // line 50
                echo "        ";
            }
            // line 51
            echo "
        ";
            // line 52
            $context["thumbnails"] = twig_reverse_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 52)));
            // line 53
            echo "
        ";
            // line 55
            echo "        ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 56
            echo "            ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 56) + 1), "html", null, true);
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
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(sw_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 56)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 56), "html", null, true);
                echo "w";
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 56)) {
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
            // line 57
            echo "        ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo twig_spaceless($___internal_parse_1_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            echo "
        ";
            // line 60
            echo "        ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 61
            echo "            ";
            $context["sizeFallback"] = 100;
            // line 62
            echo "
            ";
            // line 64
            echo "            ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 65
                echo "                ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 66
                echo "            ";
            }
            // line 67
            echo "
            ";
            // line 68
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 75
            echo "
            ";
            // line 76
            if ((sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 76) > twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null))))) {
                // line 77
                echo "                ";
                // line 78
                echo "                ";
                $context["maxWidth"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 78);
                // line 79
                echo "            ";
            }
            // line 80
            echo "
            ";
            // line 81
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
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 81)) {
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
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo twig_spaceless($___internal_parse_2_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        $this->displayBlock('thumbnail_utility_img', $context, $blocks);
    }

    public function block_thumbnail_utility_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "        <img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 87
        echo "            ";
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 87)) > 0)) {
            // line 88
            echo "                ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 89
            echo "                ";
            if ((($__internal_compile_1 = ($context["sizes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) {
                // line 90
                echo "                sizes=\"";
                echo sw_escape_filter($this->env, (($__internal_compile_2 = ($context["sizes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default"] ?? null) : null), "html", null, true);
                echo "\"
                ";
            } elseif ((twig_length_filter($this->env,             // line 91
($context["sizes"] ?? null)) > 0)) {
                // line 92
                echo "                sizes=\"";
                echo sw_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
                ";
            }
            // line 94
            echo "            ";
        }
        // line 95
        echo "            ";
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
        // line 96
        echo "        />
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  382 => 96,  366 => 95,  363 => 94,  357 => 92,  355 => 91,  350 => 90,  347 => 89,  336 => 88,  333 => 87,  322 => 86,  315 => 85,  312 => 84,  309 => 83,  306 => 60,  265 => 81,  262 => 80,  259 => 79,  256 => 78,  254 => 77,  252 => 76,  249 => 75,  247 => 68,  244 => 67,  241 => 66,  238 => 65,  235 => 64,  232 => 62,  229 => 61,  225 => 60,  222 => 58,  219 => 55,  216 => 57,  173 => 56,  169 => 55,  166 => 53,  164 => 52,  161 => 51,  158 => 50,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 41,  132 => 39,  131 => 38,  129 => 35,  127 => 34,  124 => 33,  121 => 32,  118 => 30,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
