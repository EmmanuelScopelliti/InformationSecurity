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
class __TwigTemplate_79691b12c236cf18c743964bc45ebec6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  314 => 60,  310 => 58,  302 => 57,  299 => 56,  296 => 55,  286 => 54,  272 => 50,  266 => 47,  262 => 46,  258 => 44,  254 => 43,  250 => 42,  244 => 41,  239 => 40,  233 => 37,  230 => 36,  228 => 35,  223 => 32,  219 => 31,  216 => 30,  206 => 29,  195 => 62,  181 => 61,  179 => 54,  176 => 53,  174 => 29,  171 => 28,  168 => 27,  165 => 26,  148 => 25,  143 => 22,  133 => 21,  122 => 66,  118 => 64,  116 => 21,  113 => 20,  111 => 19,  108 => 18,  105 => 17,  103 => 16,  100 => 15,  98 => 14,  95 => 13,  93 => 12,  90 => 11,  88 => 10,  86 => 9,  83 => 8,  80 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_breadcrumb_inner %}
    {% if category %}
        {% set breadcrumbCategories = sw_breadcrumb_full(category, context.context) %}
        {% set categoryId = category.id %}

        {% if feature('v6.5.0.0') %}
            {% set breadcrumbKeys = breadcrumbCategories|keys %}
        {% else %}
            {% sw_silent_feature_call \"v6.5.0.0\" %}
                {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
                {% set breadcrumb = sw_breadcrumb(category) %}
                {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
                {% set breadcrumbKeys = breadcrumb|keys %}
                {# @deprecated tag:v6.5.0 - Use \"sw_breadcrumb_full\" directly. #}
                {% set breadcrumbTypes = sw_breadcrumb_build_types(breadcrumbCategories) %}
            {% endsw_silent_feature_call %}
        {% endif %}

        {% if breadcrumbCategories|length > 0 %}
            <nav aria-label=\"breadcrumb\">
                {% block layout_breadcrumb_list %}
                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        {% for breadcrumbCategory in breadcrumbCategories %}
                            {% set key = breadcrumbCategory.id %}
                            {% set name = breadcrumbCategory.translated.name %}

                            {% block layout_breadcrumb_list_item %}
                                <li class=\"breadcrumb-item\"
                                    {% if key is same as(categoryId) %}aria-current=\"page\"{% endif %}
                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    {% if breadcrumbCategory.type == 'folder' %}
                                        <div itemprop=\"item\">
                                            <div itemprop=\"name\">{{ name }}</div>
                                        </div>
                                    {% else %}
                                        <a href=\"{{ category_url(breadcrumbCategory) }}\"
                                           class=\"breadcrumb-link {% if key is same as(categoryId) %} is-active{% endif %}\"
                                           title=\"{{ name }}\"
                                           {% if category_linknewtab(breadcrumbCategory) %}target=\"_blank\"{% endif %}
                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"{{ category_url(breadcrumbCategory) }}\"/>
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">{{ name }}</span>
                                        </a>
                                    {% endif %}
                                    <meta itemprop=\"position\" content=\"{{ loop.index }}\"/>
                                </li>
                            {% endblock %}

                            {% block layout_breadcrumb_placeholder %}
                                {% if key != breadcrumbKeys|last %}
                                    <div class=\"breadcrumb-placeholder\">
                                        {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                                    </div>
                                {% endif %}
                            {% endblock %}
                        {% endfor %}
                    </ol>
                {% endblock %}
            </nav>
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/breadcrumb.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
