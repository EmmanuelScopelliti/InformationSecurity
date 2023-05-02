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

/* @Storefront/storefront/page/content/detail.html.twig */
class __TwigTemplate_f6dccb8758a48562c8601984b05de040fb7a26b1274001c518a873dd06709429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_sections_inner' => [$this, 'block_page_content_sections_inner'],
            'page_content_section' => [$this, 'block_page_content_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('page_content_sections_inner', $context, $blocks);
    }

    public function block_page_content_sections_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            echo "            ";
            $context["sectionBgColor"] = sw_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 6);
            // line 7
            echo "            ";
            $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 7));
            // line 8
            echo "            ";
            $context["sectionBgImgMode"] = sw_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 8);
            // line 9
            echo "
            ";
            // line 10
            $context["sectionClasses"] = [0 => sw_get_attribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 10), 1 => ("pos-" . sw_get_attribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 10)), 2 => ("cms-section-" . sw_get_attribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 10))];
            // line 11
            echo "
            ";
            // line 12
            if (($context["sectionBgImg"] ?? null)) {
                // line 13
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-image"], ($context["sectionClasses"] ?? null));
                // line 14
                echo "            ";
            }
            // line 15
            echo "
            ";
            // line 16
            if (($context["sectionBgColor"] ?? null)) {
                // line 17
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-color"], ($context["sectionClasses"] ?? null));
                // line 18
                echo "            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if ((null === sw_get_attribute($this->env, $this->source, $context["section"], "visibility", [], "any", false, false, false, 20))) {
                // line 21
                echo "                ";
                $context["visibility"] = ["mobile" => true, "tablet" => true, "desktop" => true];
                // line 26
                echo "            ";
            } else {
                // line 27
                echo "                ";
                $context["visibility"] = sw_get_attribute($this->env, $this->source, $context["section"], "visibility", [], "any", false, false, false, 27);
                // line 28
                echo "            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "mobile", [], "any", false, false, false, 30)) {
                // line 31
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "hidden-mobile"], ($context["sectionClasses"] ?? null));
                // line 32
                echo "            ";
            }
            // line 33
            echo "            ";
            if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "tablet", [], "any", false, false, false, 33)) {
                // line 34
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "hidden-tablet"], ($context["sectionClasses"] ?? null));
                // line 35
                echo "            ";
            }
            // line 36
            echo "            ";
            if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "desktop", [], "any", false, false, false, 36)) {
                // line 37
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "hidden-desktop"], ($context["sectionClasses"] ?? null));
                // line 38
                echo "            ";
            }
            // line 39
            echo "
            ";
            // line 40
            $this->displayBlock('page_content_section', $context, $blocks);
            // line 47
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
        // line 48
        echo "    </div>
";
    }

    // line 40
    public function block_page_content_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                <div class=\"cms-section ";
        echo sw_escape_filter($this->env, twig_join_filter(($context["sectionClasses"] ?? null), " "), "html", null, true);
        echo "\"
                     style=\"";
        // line 42
        if (($context["sectionBgColor"] ?? null)) {
            echo "background-color: ";
            echo sw_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            echo "background-image: url(";
            echo sw_escape_filter($this->env, ($context["sectionBgImg"] ?? null), "html", null, true);
            echo ");background-size: ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 42), "html", null, true);
            echo ";";
        }
        echo "\">

                    ";
        // line 44
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find((("@Storefront/storefront/section/cms-section-" . sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 44)) . ".html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/content/detail.html.twig", 44);
        })())->display($context);
        // line 45
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  205 => 45,  197 => 44,  181 => 42,  176 => 41,  172 => 40,  167 => 48,  153 => 47,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  139 => 36,  136 => 35,  133 => 34,  130 => 33,  127 => 32,  124 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  94 => 16,  91 => 15,  88 => 14,  85 => 13,  83 => 12,  80 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  49 => 5,  46 => 4,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/detail.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/content/detail.html.twig");
    }
}
