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

/* @zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig */
class __TwigTemplate_edfed7bec27b0e0d63f79f3527237bf3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_service_menu_widget' => [$this, 'block_layout_header_actions_service_menu_widget'],
            'layout_header_actions_service_menu_list' => [$this, 'block_layout_header_actions_service_menu_list'],
            'layout_header_actions_service_menu_items' => [$this, 'block_layout_header_actions_service_menu_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('layout_header_actions_service_menu_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_service_menu_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_widget"));

        // line 4
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 5
            echo "        ";
            $context["position"] = "top-bar";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "serviceMenu", [], "any", false, false, false, 8)) > 0)) {
            // line 9
            echo "        <div class=\"top-bar-nav-item top-bar-menu\">
            ";
            // line 10
            $this->displayBlock('layout_header_actions_service_menu_list', $context, $blocks);
            // line 38
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_layout_header_actions_service_menu_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_list"));

        // line 11
        echo "                <div class=\"service-menu dropdown\">
                    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                            type=\"button\"
                            id=\"serviceMenuDropdown-";
        // line 14
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                            data-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                        ";
        // line 18
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig", 18);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "help"]));
        // line 19
        echo "                        <span class=\"top-bar-nav-text\">";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.indexLinkService"));
        echo "</span>
                    </button>
                    ";
        // line 21
        $this->displayBlock('layout_header_actions_service_menu_items', $context, $blocks);
        // line 36
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_layout_header_actions_service_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_service_menu_items"));

        // line 22
        echo "                        <div class=\"dropdown-menu dropdown-menu-right\"
                             aria-labelledby=\"serviceMenuDropdown-";
        // line 23
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "serviceMenu", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "
                                ";
            // line 27
            echo "                                ";
            $context["externalLink"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 27), "externalLink", [], "any", false, false, false, 27);
            // line 28
            echo "
                                <a class=\"top-bar-list-item dropdown-item\"
                                   href=\"";
            // line 30
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, $context["category"]);
            echo "\"
                                   ";
            // line 31
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab($context["category"])) {
                echo "target=\"_blank\"";
            }
            // line 32
            echo "                                   title=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 34,  187 => 32,  183 => 31,  179 => 30,  175 => 28,  172 => 27,  169 => 25,  165 => 24,  161 => 23,  158 => 22,  148 => 21,  137 => 36,  135 => 21,  129 => 19,  121 => 18,  114 => 14,  109 => 11,  99 => 10,  87 => 38,  85 => 10,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  68 => 4,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# ... file added to guarantee further use of the menu, because of its decprecation #}

{% block layout_header_actions_service_menu_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.serviceMenu|length > 0 %}
        <div class=\"top-bar-nav-item top-bar-menu\">
            {% block layout_header_actions_service_menu_list %}
                <div class=\"service-menu dropdown\">
                    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                            type=\"button\"
                            id=\"serviceMenuDropdown-{{ position }}\"
                            data-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                        {% sw_icon 'help' style {'size': 'sm'} %}
                        <span class=\"top-bar-nav-text\">{{ \"header.indexLinkService\"|trans|sw_sanitize }}</span>
                    </button>
                    {% block layout_header_actions_service_menu_items %}
                        <div class=\"dropdown-menu dropdown-menu-right\"
                             aria-labelledby=\"serviceMenuDropdown-{{ position }}\">
                            {% for category in page.header.serviceMenu %}

                                {# @deprecated tag:v6.5.0 - Use \"category.translated.externalLink\" directly or category_url function instead. #}
                                {% set externalLink = category.translated.externalLink %}

                                <a class=\"top-bar-list-item dropdown-item\"
                                   href=\"{{ category_url(category) }}\"
                                   {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                   title=\"{{ category.translated.name }}\">{{ category.translated.name }}</a>
                            {% endfor %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/header/actions/service-menu-widget.html.twig");
    }
}
