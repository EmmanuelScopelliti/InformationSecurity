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

/* @Storefront/storefront/component/account/customer-overview-personal-company.html.twig */
class __TwigTemplate_bb9624649e2efdd5e97a1c08bce2f7d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_customer_overview_personal' => [$this, 'block_component_customer_overview_personal'],
            'component_customer_overview_personal_company' => [$this, 'block_component_customer_overview_personal_company'],
            'component_customer_overview_personal_vat_id' => [$this, 'block_component_customer_overview_personal_vat_id'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig"));

        // line 1
        $this->displayBlock('component_customer_overview_personal', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_customer_overview_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal"));

        // line 2
        echo "    ";
        $context["address"] = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultBillingAddress", [], "any", false, false, false, 2);
        // line 3
        echo "
    <p>
        ";
        // line 5
        $this->displayBlock('component_customer_overview_personal_company', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('component_customer_overview_personal_vat_id', $context, $blocks);
        // line 17
        echo "    </p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_component_customer_overview_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal_company"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal_company"));

        // line 6
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "company", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "company", [], "any", false, false, false, 7), "html", null, true);
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 7)) {
                echo " - ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 7), "html", null, true);
            }
            // line 8
            echo "                <br/>
            ";
        }
        // line 10
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_component_customer_overview_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal_vat_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_customer_overview_personal_vat_id"));

        // line 13
        echo "            ";
        if (((sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13) && (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13)) > 0)) && ((($__internal_compile_0 = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) != ""))) {
            // line 14
            echo "                ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
            echo ": ";
            echo sw_escape_filter($this->env, twig_join_filter(sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "vatIds", [], "any", false, false, false, 14), ", "), "html", null, true);
            echo "
            ";
        }
        // line 16
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 16,  137 => 14,  134 => 13,  124 => 12,  114 => 10,  110 => 8,  103 => 7,  100 => 6,  90 => 5,  79 => 17,  77 => 12,  74 => 11,  72 => 5,  68 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_customer_overview_personal %}
    {% set address = customer.defaultBillingAddress %}

    <p>
        {% block component_customer_overview_personal_company %}
            {% if customer.company %}
                {{ customer.company }}{% if address.department %} - {{ address.department }}{% endif %}
                <br/>
            {% endif %}
        {% endblock %}

        {% block component_customer_overview_personal_vat_id %}
            {% if customer.vatIds and customer.vatIds|length > 0 and customer.vatIds[0] != '' %}
                {{ \"address.companyVatLabel\"|trans|sw_sanitize }}: {{ customer.vatIds|join(', ') }}
            {% endif %}
        {% endblock %}
    </p>
{% endblock %}
", "@Storefront/storefront/component/account/customer-overview-personal-company.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/account/customer-overview-personal-company.html.twig");
    }
}
