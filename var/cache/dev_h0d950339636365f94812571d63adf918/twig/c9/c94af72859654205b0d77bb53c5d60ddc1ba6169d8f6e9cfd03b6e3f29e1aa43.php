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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_4355559eaf2357514d05ed561bab4a63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search.html.twig"));

        // line 1
        $context["searchWidgetOptions"] = ["searchWidgetMinChars" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 2
($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "activeLanguage", [], "any", false, false, false, 2), "productSearchConfig", [], "any", false, false, false, 2), "minSearchLength", [], "any", false, false, false, 2)) : (3))];
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('layout_header_search', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        // line 6
        echo "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "\"
                  method=\"get\"
                  data-search-form=\"true\"
                  data-search-widget-options='";
        // line 12
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["searchWidgetOptions"] ?? null)), "html", null, true);
        echo "'
                  data-url=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        echo "?search=\"
                  class=\"header-search-form\">
                ";
        // line 15
        $this->displayBlock('layout_header_search_input_group', $context, $blocks);
        // line 53
        echo "            </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input_group"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input_group"));

        // line 16
        echo "                    <div class=\"input-group\">
                        ";
        // line 17
        $this->displayBlock('layout_header_search_input', $context, $blocks);
        // line 28
        echo "
                        ";
        // line 29
        $this->displayBlock('layout_header_search_button', $context, $blocks);
        // line 51
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input"));

        // line 18
        echo "                            <input type=\"search\"
                                   name=\"search\"
                                   class=\"form-control header-search-input\"
                                   autocomplete=\"off\"
                                   autocapitalize=\"off\"
                                   placeholder=\"";
        // line 23
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 24
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   value=\"";
        // line 25
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 25), "html", null, true);
        echo "\"
                            >
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_button"));

        // line 30
        echo "                            ";
        // line 31
        echo "                            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 32
            echo "                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
            // line 34
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
            echo "\">
                                    <span class=\"header-search-icon\">
                                        ";
            // line 36
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 36);
            })())->display(twig_array_merge($context, ["name" => "search"]));
            // line 37
            echo "                                    </span>
                                </button>
                            ";
        } else {
            // line 40
            echo "                                <div class=\"input-group-append\">
                                    <button type=\"submit\"
                                            class=\"btn header-search-btn\"
                                            aria-label=\"";
            // line 43
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
            echo "\">
                                        <span class=\"header-search-icon\">
                                            ";
            // line 45
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 45);
            })())->display(twig_array_merge($context, ["name" => "search"]));
            // line 46
            echo "                                        </span>
                                    </button>
                                </div>
                            ";
        }
        // line 50
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 50,  231 => 46,  223 => 45,  218 => 43,  213 => 40,  208 => 37,  200 => 36,  195 => 34,  191 => 32,  188 => 31,  186 => 30,  176 => 29,  163 => 25,  159 => 24,  155 => 23,  148 => 18,  138 => 17,  127 => 51,  125 => 29,  122 => 28,  120 => 17,  117 => 16,  107 => 15,  94 => 53,  92 => 15,  87 => 13,  83 => 12,  77 => 9,  72 => 6,  53 => 5,  50 => 4,  48 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set searchWidgetOptions = {
    searchWidgetMinChars: page.header.activeLanguage.productSearchConfig.minSearchLength ?: 3
} %}

{% block layout_header_search %}
    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            <form action=\"{{ path('frontend.search.page') }}\"
                  method=\"get\"
                  data-search-form=\"true\"
                  data-search-widget-options='{{ searchWidgetOptions|json_encode }}'
                  data-url=\"{{ path('frontend.search.suggest') }}?search=\"
                  class=\"header-search-form\">
                {% block layout_header_search_input_group %}
                    <div class=\"input-group\">
                        {% block layout_header_search_input %}
                            <input type=\"search\"
                                   name=\"search\"
                                   class=\"form-control header-search-input\"
                                   autocomplete=\"off\"
                                   autocapitalize=\"off\"
                                   placeholder=\"{{ \"header.searchPlaceholder\"|trans|striptags }}\"
                                   aria-label=\"{{ \"header.searchPlaceholder\"|trans|striptags }}\"
                                   value=\"{{ page.searchTerm }}\"
                            >
                        {% endblock %}

                        {% block layout_header_search_button %}
                            {# @deprecated tag:v6.5.0 - Bootstrap v5 removes `input-group-append` wrapper and uses elements as direct children of `input-group` #}
                            {% if feature('v6.5.0.0') %}
                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"{{ \"header.searchButton\"|trans|striptags }}\">
                                    <span class=\"header-search-icon\">
                                        {% sw_icon 'search' %}
                                    </span>
                                </button>
                            {% else %}
                                <div class=\"input-group-append\">
                                    <button type=\"submit\"
                                            class=\"btn header-search-btn\"
                                            aria-label=\"{{ \"header.searchButton\"|trans|striptags }}\">
                                        <span class=\"header-search-icon\">
                                            {% sw_icon 'search' %}
                                        </span>
                                    </button>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </form>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/search.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
