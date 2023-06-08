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

/* @zenitPlatformStratus/storefront/layout/header/top-bar.html.twig */
class __TwigTemplate_d13375438844fd98fc47ad33ef74fc9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header_top_bar' => [$this, 'block_layout_header_top_bar'],
            'zen_layout_header_top_bar_login_register' => [$this, 'block_zen_layout_header_top_bar_login_register'],
            'zen_layout_header_top_bar_marketing' => [$this, 'block_zen_layout_header_top_bar_marketing'],
            'layout_header_top_bar_language' => [$this, 'block_layout_header_top_bar_language'],
            'layout_header_top_bar_currency' => [$this, 'block_layout_header_top_bar_currency'],
            'layout_header_top_bar_service' => [$this, 'block_layout_header_top_bar_service'],
            'zen_layout_header_top_bar_close' => [$this, 'block_zen_layout_header_top_bar_close'],
            'zen_layout_header_top_bar_close_icon' => [$this, 'block_zen_layout_header_top_bar_close_icon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/top-bar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/top-bar.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_header_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar"));

        // line 4
        echo "    <div class=\"top-bar d-none d-lg-block\">
        <div class=\"container\">
            <nav class=\"top-bar-nav\">
                ";
        // line 7
        $this->displayBlock('zen_layout_header_top_bar_login_register', $context, $blocks);
        // line 12
        echo "
                ";
        // line 13
        $this->displayBlock('zen_layout_header_top_bar_marketing', $context, $blocks);
        // line 26
        echo "
                ";
        // line 27
        if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") || (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line") && (($context["topBarStyle"] ?? null) === "offcanvas")))) {
            // line 28
            echo "                    ";
            $this->displayBlock('layout_header_top_bar_language', $context, $blocks);
            // line 31
            echo "
                    ";
            // line 32
            $this->displayBlock('layout_header_top_bar_currency', $context, $blocks);
            // line 35
            echo "
                    ";
            // line 36
            $this->displayBlock('layout_header_top_bar_service', $context, $blocks);
            // line 39
            echo "                ";
        }
        // line 40
        echo "
                ";
        // line 41
        $this->displayBlock('zen_layout_header_top_bar_close', $context, $blocks);
        // line 56
        echo "            </nav>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_zen_layout_header_top_bar_login_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_login_register"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_login_register"));

        // line 8
        echo "                    ";
        if (( !(($context["topBarStyle"] ?? null) === "offcanvas") &&  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-header-style") === "two-line"))) {
            // line 9
            echo "                        ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/zen-login-register.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 9)->display($context);
            // line 10
            echo "                    ";
        }
        // line 11
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_zen_layout_header_top_bar_marketing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_marketing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_marketing"));

        // line 14
        echo "                    ";
        if (( !(($context["topBarStyle"] ?? null) === "offcanvas") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive"))) {
            // line 15
            echo "                        <div class=\"top-bar-nav-item top-bar-marketing\">
                            ";
            // line 16
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/zen-text-slider.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 16)->display(twig_array_merge($context, ["active" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingActive"), "text" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingText"), "buttonText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonText"), "buttonLink" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonLink"), "buttonTarget" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.marketingButtonTarget")]));
            // line 23
            echo "                        </div>
                    ";
        }
        // line 25
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_layout_header_top_bar_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_language"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_language"));

        // line 29
        echo "                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/language-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 29)->display($context);
        // line 30
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_layout_header_top_bar_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_currency"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_currency"));

        // line 33
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 33)->display($context);
        // line 34
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_layout_header_top_bar_service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_service"));

        // line 37
        echo "                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 37)->display($context);
        // line 38
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_zen_layout_header_top_bar_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_close"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_close"));

        // line 42
        echo "                    ";
        if (((($context["topBarStyle"] ?? null) === "expandable") || (($context["topBarStyle"] ?? null) === "collapsible"))) {
            // line 43
            echo "                        <button class=\"btn top-bar-nav-btn btn-close-top-bar\"
                                type=\"button\"
                                aria-label=\"";
            // line 45
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.general.closeTopBar")), "html", null, true);
            echo "\"
                                data-toggle=\"collapse\"
                                data-target=\"#topBarCollapse\"
                                aria-expanded=\"true\"
                                data-zen-collapse-top-bar-options=\"";
            // line 49
            echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["zenCollapseTopBarOptions"] ?? null)), "html", null, true);
            echo "\">
                            ";
            // line 50
            $this->displayBlock('zen_layout_header_top_bar_close_icon', $context, $blocks);
            // line 53
            echo "                        </button>
                    ";
        }
        // line 55
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_zen_layout_header_top_bar_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_close_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_header_top_bar_close_icon"));

        // line 51
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", 51);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 52
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 52,  310 => 51,  300 => 50,  290 => 55,  286 => 53,  284 => 50,  280 => 49,  273 => 45,  269 => 43,  266 => 42,  256 => 41,  246 => 38,  243 => 37,  233 => 36,  223 => 34,  220 => 33,  210 => 32,  200 => 30,  197 => 29,  187 => 28,  177 => 25,  173 => 23,  171 => 16,  168 => 15,  165 => 14,  155 => 13,  145 => 11,  142 => 10,  139 => 9,  136 => 8,  126 => 7,  113 => 56,  111 => 41,  108 => 40,  105 => 39,  103 => 36,  100 => 35,  98 => 32,  95 => 31,  92 => 28,  90 => 27,  87 => 26,  85 => 13,  82 => 12,  80 => 7,  75 => 4,  65 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/top-bar.html.twig' %}

{% block layout_header_top_bar %}
    <div class=\"top-bar d-none d-lg-block\">
        <div class=\"container\">
            <nav class=\"top-bar-nav\">
                {% block zen_layout_header_top_bar_login_register %}
                    {% if topBarStyle is not same as ('offcanvas') and theme_config('zen-header-style') is not same as ('two-line')%}
                        {% sw_include '@zenitPlatformStratus/storefront/component/zen-login-register.html.twig' %}
                    {% endif %}
                {% endblock %}

                {% block zen_layout_header_top_bar_marketing %}
                    {% if topBarStyle is not same as ('offcanvas') and config('zenitPlatformStratus.config.marketingActive') %}
                        <div class=\"top-bar-nav-item top-bar-marketing\">
                            {% sw_include '@zenitPlatformStratus/storefront/component/zen-text-slider.html.twig' with {
                                active: config('zenitPlatformStratus.config.marketingActive'),
                                text: config('zenitPlatformStratus.config.marketingText'),
                                buttonText: config('zenitPlatformStratus.config.marketingButtonText'),
                                buttonLink: config('zenitPlatformStratus.config.marketingButtonLink'),
                                buttonTarget: config('zenitPlatformStratus.config.marketingButtonTarget')
                            } %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% if theme_config('zen-header-style') is not same as ('two-line') or (theme_config('zen-header-style') is same as ('two-line') and topBarStyle is same as ('offcanvas')) %}
                    {% block layout_header_top_bar_language %}
                        {% sw_include '@Storefront/storefront/layout/header/actions/language-widget.html.twig' %}
                    {% endblock %}

                    {% block layout_header_top_bar_currency %}
                        {% sw_include '@Storefront/storefront/layout/header/actions/currency-widget.html.twig' %}
                    {% endblock %}

                    {% block layout_header_top_bar_service %}
                        {% sw_include '@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig' %}
                    {% endblock %}
                {% endif %}

                {% block zen_layout_header_top_bar_close %}
                    {% if topBarStyle is same as ('expandable') or topBarStyle is same as ('collapsible') %}
                        <button class=\"btn top-bar-nav-btn btn-close-top-bar\"
                                type=\"button\"
                                aria-label=\"{{ \"zentheme.general.closeTopBar\"|trans|striptags }}\"
                                data-toggle=\"collapse\"
                                data-target=\"#topBarCollapse\"
                                aria-expanded=\"true\"
                                data-zen-collapse-top-bar-options=\"{{ zenCollapseTopBarOptions|json_encode }}\">
                            {% block zen_layout_header_top_bar_close_icon %}
                                {% sw_icon 'x' style { 'size': 'sm' } %}
                            {% endblock %}
                        </button>
                    {% endif %}
                {% endblock %}
            </nav>
        </div>
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/header/top-bar.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/header/top-bar.html.twig");
    }
}
