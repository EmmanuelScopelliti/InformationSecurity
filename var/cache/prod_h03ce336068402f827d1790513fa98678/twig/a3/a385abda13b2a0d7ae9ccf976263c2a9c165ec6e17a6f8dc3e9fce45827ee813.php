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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_990712446a84604efb839e4f541f3c58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 3
            echo "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            $context["categoryId"] = sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 7
                echo "            ";
                $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumbCategories"] ?? null));
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
\Shopware\Core\Framework\Feature::callSilentIfInactive('v6.5.0.0', function () use(&$context) {                 // line 10
                echo "                ";
                // line 11
                echo "                ";
                $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
                // line 12
                echo "                ";
                // line 13
                echo "                ";
                $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
                // line 14
                echo "                ";
                // line 15
                echo "                ";
                $context["breadcrumbTypes"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildCategoryTypes(($context["breadcrumbCategories"] ?? null));
                // line 16
                echo "            ";
});                // line 17
                echo "        ";
            }
            // line 18
            echo "
        ";
            // line 19
            if ((twig_length_filter($this->env, ($context["breadcrumbCategories"] ?? null)) > 0)) {
                // line 20
                echo "            <nav aria-label=\"breadcrumb\">
                ";
                // line 21
                $this->displayBlock('layout_breadcrumb_list', $context, $blocks);
                // line 64
                echo "            </nav>
        ";
            }
            // line 66
            echo "    ";
        }
    }

    // line 21
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 26
            echo "                            ";
            $context["key"] = sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 26);
            // line 27
            echo "                            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27);
            // line 28
            echo "
                            ";
            // line 29
            $this->displayBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 53
            echo "
                            ";
            // line 54
            $this->displayBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 61
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </ol>
                ";
    }

    // line 29
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                <li class=\"breadcrumb-item\"
                                    ";
        // line 31
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            echo "aria-current=\"page\"";
        }
        // line 32
        echo "                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    ";
        // line 35
        if ((sw_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 35) == "folder")) {
            // line 36
            echo "                                        <div itemprop=\"item\">
                                            <div itemprop=\"name\">";
            // line 37
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                        </div>
                                    ";
        } else {
            // line 40
            echo "                                        <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"
                                           class=\"breadcrumb-link ";
            // line 41
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                echo " is-active";
            }
            echo "\"
                                           title=\"";
            // line 42
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                                           ";
            // line 43
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 44
            echo "                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"";
            // line 46
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"/>
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 47
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                        </a>
                                    ";
        }
        // line 50
        echo "                                    <meta itemprop=\"position\" content=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 50), "html", null, true);
        echo "\"/>
                                </li>
                            ";
    }

    // line 54
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                ";
        if ((($context["key"] ?? null) != twig_last($this->env, ($context["breadcrumbKeys"] ?? null)))) {
            // line 56
            echo "                                    <div class=\"breadcrumb-placeholder\">
                                        ";
            // line 57
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 57);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 58
            echo "                                    </div>
                                ";
        }
        // line 60
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 60,  256 => 58,  248 => 57,  245 => 56,  242 => 55,  238 => 54,  230 => 50,  224 => 47,  220 => 46,  216 => 44,  212 => 43,  208 => 42,  202 => 41,  197 => 40,  191 => 37,  188 => 36,  186 => 35,  181 => 32,  177 => 31,  174 => 30,  170 => 29,  165 => 62,  151 => 61,  149 => 54,  146 => 53,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  118 => 25,  113 => 22,  109 => 21,  104 => 66,  100 => 64,  98 => 21,  95 => 20,  93 => 19,  90 => 18,  87 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  75 => 12,  72 => 11,  70 => 10,  68 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/breadcrumb.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
