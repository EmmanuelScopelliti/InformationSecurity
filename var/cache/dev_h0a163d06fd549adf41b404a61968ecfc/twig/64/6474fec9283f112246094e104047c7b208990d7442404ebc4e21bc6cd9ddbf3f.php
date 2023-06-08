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

/* @zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig */
class __TwigTemplate_8875d6615aaec5f0fc5a6689fd712279 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories' => [$this, 'block_layout_navigation_offcanvas_navigation_categories'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        // line 4
        echo "    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            ";
        // line 6
        if ( !($context["isRoot"] ?? null)) {
            // line 7
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 7)->display($context);
            // line 8
            echo "
                ";
            // line 9
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 9)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 10
            echo "
                ";
            // line 11
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, false, 11), "active", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11) != "folder")) {
                // line 12
                echo "                    <div class=\"navigation-offcanvas-controls\">
                        ";
                // line 13
                $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 13)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
                // line 14
                echo "                        ";
                $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 14)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
                // line 15
                echo "                    </div>
                ";
            } else {
                // line 17
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 17)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
                // line 18
                echo "                ";
            }
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 20)->display($context);
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            <ul class=\"list-unstyled navigation-offcanvas-list\">
                ";
        // line 25
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["children"] ?? null), "tree", [], "any", false, false, false, 25));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", 26)->display(twig_array_merge($context, ["item" => $context["item"], "activeId" => ($context["activeId"] ?? null)]));
            // line 27
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 28,  139 => 27,  136 => 26,  118 => 25,  114 => 22,  111 => 21,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  95 => 15,  92 => 14,  90 => 13,  87 => 12,  85 => 11,  82 => 10,  80 => 9,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig' %}

{% block layout_navigation_offcanvas_navigation_categories %}
    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            {% if not isRoot %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig' %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig' with { item: active } %}

                {% if page.navigation.active.type != \"folder\" %}
                    <div class=\"navigation-offcanvas-controls\">
                        {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig' with { item: active } %}
                        {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig' with { item: active } %}
                    </div>
                {% else %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig' with { item: active } %}
                {% endif %}
            {% else %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig' %}
            {% endif %}

            <ul class=\"list-unstyled navigation-offcanvas-list\">
                {# @var item \\Shopware\\Core\\Content\\Category\\Tree\\TreeItem #}
                {% for item in children.tree %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig' with { item: item, activeId: activeId } %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/categories.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/offcanvas/categories.html.twig");
    }
}
