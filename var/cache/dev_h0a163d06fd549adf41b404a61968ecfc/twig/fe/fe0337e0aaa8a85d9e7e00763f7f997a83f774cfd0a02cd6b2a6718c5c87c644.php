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

/* @Storefront/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_b28c5a449fc1422c3ed99e053265c134 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/categories.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "navigation", [], "any", false, false, false, 9), "active", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9);
        // line 10
        echo "
    <div class=\"";
        // line 11
        if ((($context["level"] ?? null) == 0)) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 13
            echo "            ";
            $context["id"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13);
            // line 14
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 14), "translated", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14);
            // line 15
            echo "            ";
            $context["link"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 15));
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 49
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        // line 18
        echo "                <div class=\"";
        if ((($context["level"] ?? null) == 0)) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-4 ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 19
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 37
        echo "
                    ";
        // line 38
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 47
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        // line 20
        echo "                        ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 20), "type", [], "any", false, false, false, 20) == "folder")) {
            // line 21
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 22
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 23
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 26
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((($context["id"] ?? null) == ($context["activeId"] ?? null)) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 27
            echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
                               itemprop=\"url\"
                               ";
            // line 29
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 29))) {
                echo "target=\"_blank\"
                                   ";
                // line 30
                if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 30), "linkType", [], "any", false, false, false, 30) == "external")) {
                    echo "rel=\"noopener noreferrer\"";
                }
                // line 31
                echo "                               ";
            }
            // line 32
            echo "                               title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 33
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 36
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        // line 39
        echo "                        ";
        if ((($context["level"] ?? null) < ($context["navigationMaxDepth"] ?? null))) {
            // line 40
            echo "                            ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/categories.html.twig", 40)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,             // line 41
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 41), "level" => (            // line 42
($context["level"] ?? null) + 1), "page" =>             // line 43
($context["page"] ?? null)]));
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 46,  286 => 45,  284 => 43,  283 => 42,  282 => 41,  280 => 40,  277 => 39,  267 => 38,  257 => 36,  251 => 33,  246 => 32,  243 => 31,  239 => 30,  235 => 29,  230 => 27,  222 => 26,  216 => 23,  212 => 22,  207 => 21,  204 => 20,  194 => 19,  183 => 47,  181 => 38,  178 => 37,  176 => 19,  165 => 18,  155 => 17,  144 => 50,  130 => 49,  128 => 17,  125 => 16,  122 => 15,  119 => 14,  116 => 13,  99 => 12,  91 => 11,  88 => 10,  86 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_categories %}
    {% set navigationMaxDepth = 3 %}

    {% if not level %}
        {% set level = 0 %}
    {% endif %}
    {% set activeId = page.header.navigation.active.id %}

    {% set activePath = page.header.navigation.active.path %}

    <div class=\"{% if level == 0 %}row {% endif %}navigation-flyout-categories is-level-{{ level }}\">
        {% for treeItem in navigationTree %}
            {% set id = treeItem.category.id %}
            {% set name = treeItem.category.translated.name %}
            {% set link = category_url(treeItem.category) %}

            {% block layout_navigation_categories_item %}
                <div class=\"{% if level == 0 %}{% if navigationMedia %}col-4 {% else %}col-3 {% endif %}{% endif %}navigation-flyout-col\">
                    {% block layout_navigation_categories_item_link %}
                        {% if treeItem.category.type == 'folder' %}
                            <div class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}\"
                                 title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </div>
                        {% else %}
                            <a class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}{% if id == activeId or id in activePath %} active{% endif %}\"
                               href=\"{{ link }}\"
                               itemprop=\"url\"
                               {% if category_linknewtab(treeItem.category) %}target=\"_blank\"
                                   {% if treeItem.category.linkType == \"external\" %}rel=\"noopener noreferrer\"{% endif %}
                               {% endif %}
                               title=\"{{ name }}\">
                                <span itemprop=\"name\">{{ name }}</span>
                            </a>
                        {% endif %}
                    {% endblock %}

                    {% block layout_navigation_categories_recoursion %}
                        {% if level < navigationMaxDepth %}
                            {% sw_include '@Storefront/storefront/layout/navigation/categories.html.twig' with {
                                navigationTree: treeItem.children,
                                level: level + 1,
                                page: page
                            } only %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/categories.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
