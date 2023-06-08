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

/* @Storefront/storefront/layout/header/actions/account-widget.html.twig */
class __TwigTemplate_6e30429db01a137732d92924d889cabb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_account_widget' => [$this, 'block_layout_header_actions_account_widget'],
            'layout_header_actions_account_widget_dropdown_button' => [$this, 'block_layout_header_actions_account_widget_dropdown_button'],
            'layout_header_actions_account_widget_dropdown_menu' => [$this, 'block_layout_header_actions_account_widget_dropdown_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/account-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/account-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_account_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_account_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget"));

        // line 2
        echo "    <div class=\"dropdown\">
        ";
        // line 3
        $this->displayBlock('layout_header_actions_account_widget_dropdown_button', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('layout_header_actions_account_widget_dropdown_menu', $context, $blocks);
        // line 23
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_layout_header_actions_account_widget_dropdown_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_button"));

        // line 4
        echo "            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    data-offcanvas-account-menu=\"true\"
                    ";
        // line 8
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 11
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\"
                    title=\"";
        // line 12
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\">
                ";
        // line 13
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 13);
        })())->display(twig_array_merge($context, ["name" => "avatar"]));
        // line 14
        echo "            </button>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_layout_header_actions_account_widget_dropdown_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_menu"));

        // line 18
        echo "            <div class=\"dropdown-menu dropdown-menu-right account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                ";
        // line 20
        $this->loadTemplate("@LoginVulnerabilities/storefront/layout/header/account-menu.html.twig", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 20)->display($context);
        // line 21
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/account-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 21,  149 => 20,  145 => 18,  135 => 17,  124 => 14,  116 => 13,  112 => 12,  108 => 11,  102 => 8,  96 => 4,  86 => 3,  75 => 23,  73 => 17,  70 => 16,  68 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_account_widget %}
    <div class=\"dropdown\">
        {% block layout_header_actions_account_widget_dropdown_button %}
            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    data-offcanvas-account-menu=\"true\"
                    {{ dataBsToggleAttr }}=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"{{ \"account.myAccount\"|trans|striptags }}\"
                    title=\"{{ \"account.myAccount\"|trans|striptags }}\">
                {% sw_icon 'avatar' %}
            </button>
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_menu %}
            <div class=\"dropdown-menu dropdown-menu-right account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                {% sw_include '@Storefront/storefront/layout/header/account-menu.html.twig' %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/account-widget.html.twig");
    }
}
