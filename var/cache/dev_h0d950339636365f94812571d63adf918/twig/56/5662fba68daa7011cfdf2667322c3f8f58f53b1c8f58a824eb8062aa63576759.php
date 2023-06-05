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

/* @zenitPlatformStratus/storefront/component/address/address.html.twig */
class __TwigTemplate_fd9708442d99295a44626dd037a3b56f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_address' => [$this, 'block_component_address'],
            'component_address_company' => [$this, 'block_component_address_company'],
            'component_address_company_name' => [$this, 'block_component_address_company_name'],
            'component_address_salutation' => [$this, 'block_component_address_salutation'],
            'component_address_title' => [$this, 'block_component_address_title'],
            'component_address_name' => [$this, 'block_component_address_name'],
            'component_address_street' => [$this, 'block_component_address_street'],
            'component_address_additional_address_line_1' => [$this, 'block_component_address_additional_address_line_1'],
            'component_address_additional_address_line_2' => [$this, 'block_component_address_additional_address_line_2'],
            'component_address_zipcode_city' => [$this, 'block_component_address_zipcode_city'],
            'component_address_state' => [$this, 'block_component_address_state'],
            'component_address_country' => [$this, 'block_component_address_country'],
            'component_address_phone_number' => [$this, 'block_component_address_phone_number'],
            'component_address_customer_email' => [$this, 'block_component_address_customer_email'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/address/address.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/address/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/address/address.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@zenitPlatformStratus/storefront/component/address/address.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_component_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address"));

        // line 5
        echo "    <div class=\"address\">
        ";
        // line 6
        if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && ($context["showShippingWarning"] ?? null)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 6), "shippingAvailable", [], "any", false, false, false, 6))) {
            // line 7
            echo "            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@zenitPlatformStratus/storefront/component/address/address.html.twig", 7)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryNoShippingAlert"))]));
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 13) || sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 13))) {
            // line 14
            echo "            ";
            $this->displayBlock('component_address_company', $context, $blocks);
            // line 24
            echo "        ";
        }
        // line 25
        echo "
        <p>
            ";
        // line 27
        if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 27) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 27), "salutationKey", [], "any", false, false, false, 27) != "not_specified"))) {
            // line 28
            echo "                ";
            $this->displayBlock('component_address_salutation', $context, $blocks);
            // line 31
            echo "            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 33)) {
            // line 34
            echo "                ";
            $this->displayBlock('component_address_title', $context, $blocks);
            // line 37
            echo "            ";
        }
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('component_address_name', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('component_address_street', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 47)) {
            // line 48
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_1', $context, $blocks);
            // line 51
            echo "            ";
        }
        // line 52
        echo "
            ";
        // line 53
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 53)) {
            // line 54
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_2', $context, $blocks);
            // line 57
            echo "            ";
        }
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('component_address_zipcode_city', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 67)) {
            // line 68
            echo "                ";
            $this->displayBlock('component_address_state', $context, $blocks);
            // line 71
            echo "            ";
        }
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('component_address_country', $context, $blocks);
        // line 76
        echo "
            ";
        // line 78
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 78) || sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 78), "email", [], "any", false, false, false, 78))) {
            // line 79
            echo "                <br/><br/>
            ";
        }
        // line 81
        echo "
            ";
        // line 82
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 82)) {
            // line 83
            echo "                ";
            $this->displayBlock('component_address_phone_number', $context, $blocks);
            // line 86
            echo "            ";
        }
        // line 87
        echo "
            ";
        // line 89
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89)) {
            // line 90
            echo "                ";
            $this->displayBlock('component_address_customer_email', $context, $blocks);
            // line 93
            echo "            ";
        }
        // line 94
        echo "        </p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_component_address_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company"));

        // line 15
        echo "                <p>
                    ";
        // line 16
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 16)) {
            // line 17
            echo "                        ";
            $this->displayBlock('component_address_company_name', $context, $blocks);
            // line 20
            echo "                        <br/>
                    ";
        }
        // line 22
        echo "                </p>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_component_address_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_name"));

        // line 18
        echo "                            ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 18), "html", null, true);
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 18)) {
            echo " - ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 18), "html", null, true);
        }
        // line 19
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_component_address_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_salutation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_salutation"));

        // line 29
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "displayName", [], "any", false, false, false, 29), "html", null, true);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_component_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_title"));

        // line 35
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_component_address_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_name"));

        // line 40
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 40), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 40), "html", null, true);
        echo "<br/>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_component_address_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_street"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_street"));

        // line 44
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 44), "html", null, true);
        echo "<br/>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_component_address_additional_address_line_1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_1"));

        // line 49
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 49), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_component_address_additional_address_line_2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_2"));

        // line 55
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 55), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_component_address_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_zipcode_city"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_zipcode_city"));

        // line 60
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.address.showZipcodeInFrontOfCity")) {
            // line 61
            echo "                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 61), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 61), "html", null, true);
            echo "<br/>
                ";
        } else {
            // line 63
            echo "                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 63), "html", null, true);
            echo "<br/>
                ";
        }
        // line 65
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_component_address_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_state"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_state"));

        // line 69
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 69), "translated", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_component_address_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_country"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_country"));

        // line 74
        echo "                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 74), "translated", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_component_address_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_phone_number"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_phone_number"));

        // line 84
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 84), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_component_address_customer_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_customer_email"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_customer_email"));

        // line 91
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 91), "email", [], "any", false, false, false, 91), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/component/address/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 91,  532 => 90,  519 => 84,  509 => 83,  496 => 74,  486 => 73,  473 => 69,  463 => 68,  453 => 65,  445 => 63,  437 => 61,  434 => 60,  424 => 59,  411 => 55,  401 => 54,  388 => 49,  378 => 48,  365 => 44,  355 => 43,  340 => 40,  330 => 39,  317 => 35,  307 => 34,  294 => 29,  284 => 28,  274 => 19,  267 => 18,  257 => 17,  246 => 22,  242 => 20,  239 => 17,  237 => 16,  234 => 15,  224 => 14,  212 => 94,  209 => 93,  206 => 90,  203 => 89,  200 => 87,  197 => 86,  194 => 83,  192 => 82,  189 => 81,  185 => 79,  182 => 78,  179 => 76,  177 => 73,  174 => 72,  171 => 71,  168 => 68,  166 => 67,  163 => 66,  161 => 59,  158 => 58,  155 => 57,  152 => 54,  150 => 53,  147 => 52,  144 => 51,  141 => 48,  139 => 47,  136 => 46,  134 => 43,  131 => 42,  129 => 39,  126 => 38,  123 => 37,  120 => 34,  118 => 33,  115 => 32,  112 => 31,  109 => 28,  107 => 27,  103 => 25,  100 => 24,  97 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 7,  84 => 6,  81 => 5,  71 => 4,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/address/address.html.twig' %}

{# TODO: @zenit check on sw update #}
{% block component_address %}
    <div class=\"address\">
        {% if feature('FEATURE_NEXT_15707') and showShippingWarning and not address.country.shippingAvailable %}
            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                type: \"warning\",
                content: \"address.countryNoShippingAlert\"|trans|sw_sanitize
            } %}
        {% endif %}

        {% if address.company or address.vatId %}
            {% block component_address_company %}
                <p>
                    {% if address.company %}
                        {% block component_address_company_name %}
                            {{ address.company }}{% if address.department %} - {{ address.department }}{% endif %}
                        {% endblock %}
                        <br/>
                    {% endif %}
                </p>
            {% endblock %}
        {% endif %}

        <p>
            {% if address.salutation and address.salutation.salutationKey != 'not_specified' %}
                {% block component_address_salutation %}
                    {{ address.salutation.translated.displayName }}
                {% endblock %}
            {% endif %}

            {% if address.title %}
                {% block component_address_title %}
                    {{ address.title }}<br/>
                {% endblock %}
            {% endif %}

            {% block component_address_name %}
                {{ address.firstName }} {{ address.lastName }}<br/>
            {% endblock %}

            {% block component_address_street %}
                {{ address.street }}<br/>
            {% endblock %}

            {% if address.additionalAddressLine1 %}
                {% block component_address_additional_address_line_1 %}
                    {{ address.additionalAddressLine1 }}<br/>
                {% endblock %}
            {% endif %}

            {% if address.additionalAddressLine2 %}
                {% block component_address_additional_address_line_2 %}
                    {{ address.additionalAddressLine2 }}<br/>
                {% endblock %}
            {% endif %}

            {% block component_address_zipcode_city %}
                {% if config('core.address.showZipcodeInFrontOfCity') %}
                    {{ address.zipcode }} {{ address.city }}<br/>
                {% else %}
                    {{ address.city }} {{ address.zipcode }}<br/>
                {% endif %}
            {% endblock %}

            {% if address.countryState %}
                {% block component_address_state %}
                    {{ address.countryState.translated.name }}<br/>
                {% endblock %}
            {% endif %}

            {% block component_address_country %}
                {{ address.country.translated.name }}
            {% endblock %}

            {# ... moved phone number #}
            {% if address.phoneNumber or context.customer.email %}
                <br/><br/>
            {% endif %}

            {% if address.phoneNumber %}
                {% block component_address_phone_number %}
                    {{ address.phoneNumber }}<br/>
                {% endblock %}
            {% endif %}

            {# ... added customer email #}
            {% if context.customer.email %}
                {% block component_address_customer_email %}
                    {{ context.customer.email }}<br/>
                {% endblock %}
            {% endif %}
        </p>
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/component/address/address.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/component/address/address.html.twig");
    }
}
