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

/* @zenitPlatformStratus/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_82db7d3575e34ae04e1fc58955cd6ff8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        // line 4
        echo "    <ol class=\"breadcrumb\"
        itemscope
        itemtype=\"https://schema.org/BreadcrumbList\">

        ";
        // line 9
        echo "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-breadcrumbs-home-enabled")) {
            // line 10
            echo "            ";
            $context["homeLabel"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 10), "translated", [], "any", false, true, false, 10), "homeName", [], "any", true, true, false, 10)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 10), "translated", [], "any", false, true, false, 10), "homeName", [], "any", false, false, false, 10), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
            // line 11
            echo "
            <li class=\"breadcrumb-item home-link\"
                itemprop=\"itemListElement\"
                itemscope
                itemtype=\"https://schema.org/ListItem\">

                <a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            echo "\"
                   class=\"breadcrumb-link";
            // line 18
            if ((($context["controllerAction"] ?? null) === "home")) {
                echo " is-active";
            }
            echo "\"
                   title=\"";
            // line 19
            echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
            echo "\"
                   itemprop=\"item\">
                    <link itemprop=\"url\"
                          href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            echo "\"/>
                    <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 23
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
            echo "</span>
                </a>
                <meta itemprop=\"position\" content=\"0\"/>
            </li>

            ";
            // line 28
            $this->displayBlock("layout_breadcrumb_placeholder", $context, $blocks);
            echo "
        ";
        }
        // line 30
        echo "
        ";
        // line 31
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
            // line 32
            echo "            ";
            $context["key"] = sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 32);
            // line 33
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33);
            // line 34
            echo "
            ";
            // line 35
            $this->displayBlock("layout_breadcrumb_list_item", $context, $blocks);
            echo "

            ";
            // line 37
            $this->displayBlock("layout_breadcrumb_placeholder", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ol>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 39,  155 => 37,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  124 => 31,  121 => 30,  116 => 28,  108 => 23,  104 => 22,  98 => 19,  92 => 18,  88 => 17,  80 => 11,  77 => 10,  74 => 9,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/breadcrumb.html.twig' %}

{% block layout_breadcrumb_list %}
    <ol class=\"breadcrumb\"
        itemscope
        itemtype=\"https://schema.org/BreadcrumbList\">

        {# ... add home link #}
        {% if theme_config('zen-breadcrumbs-home-enabled') %}
            {% set homeLabel = context.salesChannel.translated.homeName|default(\"general.homeLink\"|trans) %}

            <li class=\"breadcrumb-item home-link\"
                itemprop=\"itemListElement\"
                itemscope
                itemtype=\"https://schema.org/ListItem\">

                <a href=\"{{ path('frontend.home.page') }}\"
                   class=\"breadcrumb-link{% if controllerAction is same as('home') %} is-active{% endif %}\"
                   title=\"{{ homeLabel|striptags }}\"
                   itemprop=\"item\">
                    <link itemprop=\"url\"
                          href=\"{{ path('frontend.home.page') }}\"/>
                    <span class=\"breadcrumb-title\" itemprop=\"name\">{{ homeLabel|sw_sanitize }}</span>
                </a>
                <meta itemprop=\"position\" content=\"0\"/>
            </li>

            {{ block('layout_breadcrumb_placeholder') }}
        {% endif %}

        {% for breadcrumbCategory in breadcrumbCategories %}
            {% set key = breadcrumbCategory.id %}
            {% set name = breadcrumbCategory.translated.name %}

            {{ block('layout_breadcrumb_list_item') }}

            {{ block('layout_breadcrumb_placeholder') }}
        {% endfor %}
    </ol>
{% endblock %}", "@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
