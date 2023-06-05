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

/* @Storefront/storefront/component/address/address-personal.html.twig */
class __TwigTemplate_64fc37cce4af2e324ed0d9e2f1ca1d2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_personal_fields' => [$this, 'block_component_address_personal_fields'],
            'component_address_personal_account_type' => [$this, 'block_component_address_personal_account_type'],
            'component_address_personal_account_type_label' => [$this, 'block_component_address_personal_account_type_label'],
            'component_address_personal_account_type_select' => [$this, 'block_component_address_personal_account_type_select'],
            'component_address_personal_account_type_error' => [$this, 'block_component_address_personal_account_type_error'],
            'component_address_personal_fields_salutation_title' => [$this, 'block_component_address_personal_fields_salutation_title'],
            'component_address_personal_fields_salutation' => [$this, 'block_component_address_personal_fields_salutation'],
            'component_address_personal_fields_salutation_label' => [$this, 'block_component_address_personal_fields_salutation_label'],
            'component_address_form_salutation_select' => [$this, 'block_component_address_form_salutation_select'],
            'component_address_form_salutation_select_error' => [$this, 'block_component_address_form_salutation_select_error'],
            'component_address_personal_fields_title' => [$this, 'block_component_address_personal_fields_title'],
            'component_address_personal_fields_title_label' => [$this, 'block_component_address_personal_fields_title_label'],
            'component_address_personal_fields_title_input' => [$this, 'block_component_address_personal_fields_title_input'],
            'component_address_personal_fields_name' => [$this, 'block_component_address_personal_fields_name'],
            'component_address_personal_fields_first_name' => [$this, 'block_component_address_personal_fields_first_name'],
            'component_address_personal_fields_first_name_label' => [$this, 'block_component_address_personal_fields_first_name_label'],
            'component_address_personal_fields_first_name_input' => [$this, 'block_component_address_personal_fields_first_name_input'],
            'component_address_personal_fields_first_name_input_error' => [$this, 'block_component_address_personal_fields_first_name_input_error'],
            'component_address_personal_fields_last_name' => [$this, 'block_component_address_personal_fields_last_name'],
            'component_address_personal_fields_last_name_label' => [$this, 'block_component_address_personal_fields_last_name_label'],
            'component_address_personal_fields_last_name_input' => [$this, 'block_component_address_personal_fields_last_name_input'],
            'component_address_personal_fields_last_name_input_error' => [$this, 'block_component_address_personal_fields_last_name_input_error'],
            'component_address_personal_company' => [$this, 'block_component_address_personal_company'],
            'component_address_personal_company_fields' => [$this, 'block_component_address_personal_company_fields'],
            'component_address_personal_company_name' => [$this, 'block_component_address_personal_company_name'],
            'component_address_personal_company_name_label' => [$this, 'block_component_address_personal_company_name_label'],
            'component_address_personal_company_name_input' => [$this, 'block_component_address_personal_company_name_input'],
            'component_address_personal_company_name_input_error' => [$this, 'block_component_address_personal_company_name_input_error'],
            'component_address_personal_vat_id' => [$this, 'block_component_address_personal_vat_id'],
            'component_address_personal_vat_id_fields' => [$this, 'block_component_address_personal_vat_id_fields'],
            'component_address_personal_fields_birthday' => [$this, 'block_component_address_personal_fields_birthday'],
            'component_address_personal_fields_birthday_label' => [$this, 'block_component_address_personal_fields_birthday_label'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'component_address_personal_fields_birthday_select_day' => [$this, 'block_component_address_personal_fields_birthday_select_day'],
            'component_address_personal_fields_birthday_select_day_error' => [$this, 'block_component_address_personal_fields_birthday_select_day_error'],
            'component_address_personal_fields_birthday_select_month' => [$this, 'block_component_address_personal_fields_birthday_select_month'],
            'component_address_personal_fields_birthday_select_month_error' => [$this, 'block_component_address_personal_fields_birthday_select_month_error'],
            'component_address_personal_fields_birthday_select_year' => [$this, 'block_component_address_personal_fields_birthday_select_year'],
            'component_address_personal_fields_birthday_select_year_error' => [$this, 'block_component_address_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal.html.twig"));

        // line 2
        $this->displayBlock('component_address_personal_fields', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_address_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields"));

        // line 3
        echo "    ";
        $this->displayBlock('component_address_personal_account_type', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('component_address_personal_fields_salutation_title', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('component_address_personal_fields_name', $context, $blocks);
        // line 220
        echo "
    ";
        // line 221
        $this->displayBlock('component_address_personal_company', $context, $blocks);
        // line 264
        echo "
    ";
        // line 265
        $this->displayBlock('component_address_personal_vat_id', $context, $blocks);
        // line 283
        echo "
    ";
        // line 284
        $this->displayBlock('component_address_personal_fields_birthday', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_component_address_personal_account_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type"));

        // line 4
        echo "        ";
        if ((($context["onlyCompanyRegistration"] ?? null) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") &&  !($context["hideCustomerTypeSelect"] ?? null)))) {
            // line 5
            echo "            <div class=\"";
            echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
            echo "\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    ";
            // line 7
            $this->displayBlock('component_address_personal_account_type_label', $context, $blocks);
            // line 13
            echo "
                    ";
            // line 14
            $this->displayBlock('component_address_personal_account_type_select', $context, $blocks);
            // line 66
            echo "
                    ";
            // line 67
            $this->displayBlock('component_address_personal_account_type_error', $context, $blocks);
            // line 69
            echo "                </div>
            </div>
        ";
        } elseif ( !        // line 71
($context["hideCustomerTypeSelect"] ?? null)) {
            // line 72
            echo "            <input type=\"hidden\" name=\"accountType\">
        ";
        }
        // line 74
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_component_address_personal_account_type_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_label"));

        // line 8
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 9
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "accountType\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_component_address_personal_account_type_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_select"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_select"));

        // line 15
        echo "                            ";
        if ((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection"))) {
            // line 16
            echo "                                <select name=\"";
            if (($context["prefix"] ?? null)) {
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                echo "[accountType]";
            } else {
                echo "accountType";
            }
            echo "\"
                                    id=\"";
            // line 17
            echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
            echo "accountType\"
                                    ";
            // line 18
            if (($context["onlyCompanyRegistration"] ?? null)) {
                echo "disabled";
            }
            // line 19
            echo "                                    required=\"required\"
                                    class=\"";
            // line 20
            echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
            echo " contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company";
            // line 22
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\"
                                    data-form-field-toggle-value=\"";
            // line 23
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\"
                                    data-form-field-toggle-scope=\"";
            // line 24
            if ((($context["scope"] ?? null) == "parent")) {
                echo "parent";
            } else {
                echo "all";
            }
            echo "\"
                                    ";
            // line 25
            if ((($context["scope"] ?? null) == "parent")) {
                echo "data-form-field-toggle-parent-selector=";
                echo sw_escape_filter($this->env, ($context["parentSelector"] ?? null), "html", null, true);
            }
            // line 26
            echo "                                >
                            ";
        }
        // line 28
        echo "
                            ";
        // line 29
        $context["isCompany"] = false;
        // line 30
        echo "
                            ";
        // line 31
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 31), "company", [], "any", false, false, false, 31) ||  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "company", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                                ";
            $context["isCompany"] = true;
            // line 33
            echo "                            ";
        }
        // line 34
        echo "
                            ";
        // line 35
        if ((($context["onlyCompanyRegistration"] ?? null) || (($context["accountType"] ?? null) && (($context["accountType"] ?? null) == twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"))))) {
            // line 36
            echo "                                ";
            $context["isCompany"] = true;
            // line 37
            echo "                            ";
        }
        // line 38
        echo "
                            ";
        // line 39
        $context["isLoginPage"] = false;
        // line 40
        echo "                            ";
        if ((($context["activeRoute"] ?? null) == "frontend.account.login.page")) {
            // line 41
            echo "                                ";
            $context["isLoginPage"] = true;
            // line 42
            echo "                            ";
        }
        // line 43
        echo "
                            ";
        // line 44
        if (($context["isLoginPage"] ?? null)) {
            // line 45
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 48
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
            echo "
                                </option>
                            ";
        }
        // line 51
        echo "
                            ";
        // line 52
        if ( !($context["onlyCompanyRegistration"] ?? null)) {
            // line 53
            echo "                                <option value=\"";
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_PRIVATE"), "html", null, true);
            echo "\"
                                    ";
            // line 54
            if (((($context["isCompany"] ?? null) == false) && (($context["isLoginPage"] ?? null) == false))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                    ";
            // line 55
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypePrivate"));
            echo "
                                </option>
                            ";
        }
        // line 58
        echo "
                            <option value=\"";
        // line 59
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
        echo "\"
                                ";
        // line 60
        if (((($context["isCompany"] ?? null) == true) && (($context["isLoginPage"] ?? null) == false))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 61
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeBusiness"));
        echo "
                            </option>
                        </select>
                        ";
        // line 64
        if (($context["onlyCompanyRegistration"] ?? null)) {
            echo "<input type=\"hidden\" name=\"accountType\" value=\"";
            echo sw_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\">";
        }
        // line 65
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_component_address_personal_account_type_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_error"));

        // line 68
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_component_address_personal_fields_salutation_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_title"));

        // line 77
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 78
        $this->displayBlock('component_address_personal_fields_salutation', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('component_address_personal_fields_title', $context, $blocks);
        // line 142
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_component_address_personal_fields_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation"));

        // line 79
        echo "                <div class=\"form-group col-md-3 col-sm-6\">
                    ";
        // line 80
        $this->displayBlock('component_address_personal_fields_salutation_label', $context, $blocks);
        // line 86
        echo "
                    ";
        // line 87
        $this->displayBlock('component_address_form_salutation_select', $context, $blocks);
        // line 109
        echo "
                    ";
        // line 110
        $this->displayBlock('component_address_form_salutation_select_error', $context, $blocks);
        // line 117
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_component_address_personal_fields_salutation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_label"));

        // line 81
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 82
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\">
                            ";
        // line 83
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_component_address_form_salutation_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select"));

        // line 88
        echo "                        <select id=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\"
                                class=\"";
        // line 89
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 89))) {
            echo " is-invalid";
        }
        echo "\"
                                name=\"";
        // line 90
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[salutationId]";
        } else {
            echo "salutationId";
        }
        echo "\"
                                required=\"required\">
                            ";
        // line 92
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 92)) {
            // line 93
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 96
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 99
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salutations", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 100
            echo "                                <option ";
            if ((sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 100) == sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 100))) {
                // line 101
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 103
            echo "                                        value=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                                    ";
            // line 104
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["salutation"], "translated", [], "any", false, false, false, 104), "displayName", [], "any", false, false, false, 104), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </select>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_component_address_form_salutation_select_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select_error"));

        // line 111
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 111))) {
            // line 112
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 112)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 115
            echo "                        ";
        }
        // line 116
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_component_address_personal_fields_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title"));

        // line 121
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showTitleField")) {
            // line 122
            echo "                    <div class=\"form-group col-md-3 col-sm-6\">
                        ";
            // line 123
            $this->displayBlock('component_address_personal_fields_title_label', $context, $blocks);
            // line 129
            echo "
                        ";
            // line 130
            $this->displayBlock('component_address_personal_fields_title_input', $context, $blocks);
            // line 139
            echo "                    </div>
                ";
        }
        // line 141
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_component_address_personal_fields_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_label"));

        // line 124
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 125
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\">
                                ";
        // line 126
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitleLabel"));
        echo "
                            </label>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_component_address_personal_fields_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_input"));

        // line 131
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"";
        // line 134
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\"
                                   placeholder=\"";
        // line 135
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitlePlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 136
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[title]";
        } else {
            echo "title";
        }
        echo "\"
                                   value=\"";
        // line 137
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 137), "html", null, true);
        echo "\">
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function block_component_address_personal_fields_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_name"));

        // line 146
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 147
        $this->displayBlock('component_address_personal_fields_first_name', $context, $blocks);
        // line 182
        echo "
            ";
        // line 183
        $this->displayBlock('component_address_personal_fields_last_name', $context, $blocks);
        // line 218
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_component_address_personal_fields_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name"));

        // line 148
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 149
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 149))) {
            // line 150
            echo "                        ";
            $context["violationPath"] = "/firstName";
            // line 151
            echo "                    ";
        } else {
            // line 152
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"))]);
            // line 153
            echo "                    ";
        }
        // line 154
        echo "
                    ";
        // line 155
        $this->displayBlock('component_address_personal_fields_first_name_label', $context, $blocks);
        // line 161
        echo "
                    ";
        // line 162
        $this->displayBlock('component_address_personal_fields_first_name_input', $context, $blocks);
        // line 174
        echo "
                    ";
        // line 175
        $this->displayBlock('component_address_personal_fields_first_name_input_error', $context, $blocks);
        // line 180
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_component_address_personal_fields_first_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_label"));

        // line 156
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 157
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\">
                            ";
        // line 158
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_component_address_personal_fields_first_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input"));

        // line 163
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 164
        if ( !twig_test_empty(($context["violationPath"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal given-name\"
                               id=\"";
        // line 166
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\"
                               placeholder=\"";
        // line 167
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 168
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[firstName]";
        } else {
            echo "firstName";
        }
        echo "\"
                               value=\"";
        // line 169
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "firstName"], "method", false, false, false, 169), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 171
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 172
        echo "                               required=\"required\">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 175
    public function block_component_address_personal_fields_first_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input_error"));

        // line 176
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 177
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 177)->display($context);
            // line 178
            echo "                        ";
        }
        // line 179
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 183
    public function block_component_address_personal_fields_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name"));

        // line 184
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 185
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 185))) {
            // line 186
            echo "                        ";
            $context["violationPath"] = "/lastName";
            // line 187
            echo "                    ";
        } else {
            // line 188
            echo "                        ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"))]);
            // line 189
            echo "                    ";
        }
        // line 190
        echo "
                    ";
        // line 191
        $this->displayBlock('component_address_personal_fields_last_name_label', $context, $blocks);
        // line 197
        echo "
                    ";
        // line 198
        $this->displayBlock('component_address_personal_fields_last_name_input', $context, $blocks);
        // line 210
        echo "
                    ";
        // line 211
        $this->displayBlock('component_address_personal_fields_last_name_input_error', $context, $blocks);
        // line 216
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_component_address_personal_fields_last_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_label"));

        // line 192
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 193
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\">
                            ";
        // line 194
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 198
    public function block_component_address_personal_fields_last_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input"));

        // line 199
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 200
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal family-name\"
                               id=\"";
        // line 202
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\"
                               placeholder=\"";
        // line 203
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 204
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[lastName]";
        } else {
            echo "lastName";
        }
        echo "\"
                               value=\"";
        // line 205
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "lastName"], "method", false, false, false, 205), "html", null, true);
        echo "\"
                               data-form-validation-required
                               ";
        // line 207
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 208
        echo "                               required=\"required\">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_component_address_personal_fields_last_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input_error"));

        // line 212
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 213
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 213)->display($context);
            // line 214
            echo "                        ";
        }
        // line 215
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 221
    public function block_component_address_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company"));

        // line 222
        echo "        ";
        if (((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection")) && (($context["activeRoute"] ?? null) == "frontend.account.profile.page"))) {
            // line 223
            echo "            <div class=\"js-field-toggle-contact-type-company";
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\">
                ";
            // line 224
            $this->displayBlock('component_address_personal_company_fields', $context, $blocks);
            // line 261
            echo "            </div>
        ";
        }
        // line 263
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 224
    public function block_component_address_personal_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_fields"));

        // line 225
        echo "                    <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 226
        $this->displayBlock('component_address_personal_company_name', $context, $blocks);
        // line 259
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_component_address_personal_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name"));

        // line 227
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 228
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 228))) {
            // line 229
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 230
            echo "                                ";
        } else {
            // line 231
            echo "                                    ";
            $context["requiredMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR", ["%field%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"))]);
            // line 232
            echo "                                ";
        }
        // line 233
        echo "
                                ";
        // line 234
        $this->displayBlock('component_address_personal_company_name_label', $context, $blocks);
        // line 239
        echo "
                                ";
        // line 240
        $this->displayBlock('component_address_personal_company_name_input', $context, $blocks);
        // line 251
        echo "
                                ";
        // line 252
        $this->displayBlock('component_address_personal_company_name_input_error', $context, $blocks);
        // line 257
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_component_address_personal_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_label"));

        // line 235
        echo "                                    <label class=\"form-label\" for=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                        ";
        // line 236
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                    </label>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 240
    public function block_component_address_personal_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input"));

        // line 241
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 242
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 243
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                           placeholder=\"";
        // line 244
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"company\"
                                           value=\"";
        // line 246
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 246), "html", null, true);
        echo "\"
                                           data-form-validation-required
                                           ";
        // line 248
        if (array_key_exists("requiredMessage", $context)) {
            echo "data-form-validation-required-message=\"";
            echo sw_escape_filter($this->env, ($context["requiredMessage"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 249
        echo "                                           required=\"required\">
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 252
    public function block_component_address_personal_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input_error"));

        // line 253
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 254
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 254)->display($context);
            // line 255
            echo "                                    ";
        }
        // line 256
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 265
    public function block_component_address_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id"));

        // line 266
        echo "        ";
        if (($context["showVatIdField"] ?? null)) {
            // line 267
            echo "            ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") || ($context["onlyCompanyRegistration"] ?? null))) {
                // line 268
                echo "                <div class=\"js-field-toggle-contact-type-company";
                if (($context["customToggleTarget"] ?? null)) {
                    echo "-";
                    echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                }
                echo " js-field-toggle-contact-type-vat-id\">
                    ";
                // line 269
                $this->displayBlock('component_address_personal_vat_id_fields', $context, $blocks);
                // line 279
                echo "                </div>
            ";
            }
            // line 281
            echo "        ";
        }
        // line 282
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 269
    public function block_component_address_personal_vat_id_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_vat_id_fields"));

        // line 270
        echo "                        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"form-group col-12\">
                                ";
        // line 272
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 272)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source,         // line 273
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 273), "editMode" => true]));
        // line 276
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 284
    public function block_component_address_personal_fields_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday"));

        // line 285
        echo "        ";
        if (($context["showBirthdayField"] ?? null)) {
            // line 286
            echo "            ";
            $this->displayBlock('component_address_personal_fields_birthday_label', $context, $blocks);
            // line 291
            echo "
            ";
            // line 292
            $this->displayBlock('component_address_personal_fields_birthday_selects', $context, $blocks);
            // line 386
            echo "        ";
        }
        // line 387
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 286
    public function block_component_address_personal_fields_birthday_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_label"));

        // line 287
        echo "                <label for=\"";
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\">
                    ";
        // line 288
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdayLabel"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                </label>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 292
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        // line 293
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 294
        $this->displayBlock('component_address_personal_fields_birthday_select_day', $context, $blocks);
        // line 323
        echo "
                    ";
        // line 324
        $this->displayBlock('component_address_personal_fields_birthday_select_month', $context, $blocks);
        // line 352
        echo "
                    ";
        // line 353
        $this->displayBlock('component_address_personal_fields_birthday_select_year', $context, $blocks);
        // line 384
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_component_address_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day"));

        // line 295
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"";
        // line 296
        echo sw_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\"
                                    name=\"";
        // line 297
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayDay]";
        } else {
            echo "birthdayDay";
        }
        echo "\"
                                    class=\"";
        // line 298
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 298))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 299
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 300
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 300)) {
            // line 301
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 303
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                                    </option>
                                ";
        }
        // line 306
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 307
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                            ";
            // line 308
            if (($context["day"] == sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 308))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 309
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                            </select>

                            ";
        // line 314
        $this->displayBlock('component_address_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 321
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 314
    public function block_component_address_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day_error"));

        // line 315
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 315))) {
            // line 316
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 316)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 319
            echo "                                ";
        }
        // line 320
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 324
    public function block_component_address_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month"));

        // line 325
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"";
        // line 326
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayMonth]";
        } else {
            echo "birthdayMonth";
        }
        echo "\"
                                    class=\"";
        // line 327
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 327))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 328
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 329
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 329)) {
            // line 330
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 332
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                                    </option>
                                ";
        }
        // line 335
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 336
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                            ";
            // line 337
            if (($context["month"] == sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 337))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 338
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "                            </select>

                            ";
        // line 343
        $this->displayBlock('component_address_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 350
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 343
    public function block_component_address_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month_error"));

        // line 344
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 344))) {
            // line 345
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 345)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 348
            echo "                                ";
        }
        // line 349
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 353
    public function block_component_address_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year"));

        // line 354
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            ";
        // line 355
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 356
        echo "                            ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 357
        echo "
                            <select name=\"";
        // line 358
        if (($context["prefix"] ?? null)) {
            echo sw_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayYear]";
        } else {
            echo "birthdayYear";
        }
        echo "\"
                                    class=\"";
        // line 359
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 359))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 360
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 361
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 361)) {
            // line 362
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 364
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                                    </option>
                                ";
        }
        // line 367
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 368
            echo "                                    <option value=\"";
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                            ";
            // line 369
            if (($context["year"] == sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 369))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 370
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                            </select>

                            ";
        // line 375
        $this->displayBlock('component_address_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 382
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 375
    public function block_component_address_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year_error"));

        // line 376
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 376))) {
            // line 377
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 377)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 380
            echo "                                ";
        }
        // line 381
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1871 => 381,  1868 => 380,  1865 => 377,  1862 => 376,  1852 => 375,  1841 => 382,  1839 => 375,  1835 => 373,  1826 => 370,  1820 => 369,  1815 => 368,  1810 => 367,  1804 => 364,  1800 => 362,  1798 => 361,  1794 => 360,  1787 => 359,  1778 => 358,  1775 => 357,  1772 => 356,  1770 => 355,  1767 => 354,  1757 => 353,  1747 => 349,  1744 => 348,  1741 => 345,  1738 => 344,  1728 => 343,  1717 => 350,  1715 => 343,  1711 => 341,  1702 => 338,  1696 => 337,  1691 => 336,  1686 => 335,  1680 => 332,  1676 => 330,  1674 => 329,  1670 => 328,  1663 => 327,  1654 => 326,  1651 => 325,  1641 => 324,  1631 => 320,  1628 => 319,  1625 => 316,  1622 => 315,  1612 => 314,  1601 => 321,  1599 => 314,  1595 => 312,  1586 => 309,  1580 => 308,  1575 => 307,  1570 => 306,  1564 => 303,  1560 => 301,  1558 => 300,  1554 => 299,  1547 => 298,  1538 => 297,  1534 => 296,  1531 => 295,  1521 => 294,  1510 => 384,  1508 => 353,  1505 => 352,  1503 => 324,  1500 => 323,  1498 => 294,  1493 => 293,  1483 => 292,  1469 => 288,  1464 => 287,  1454 => 286,  1444 => 387,  1441 => 386,  1439 => 292,  1436 => 291,  1433 => 286,  1430 => 285,  1420 => 284,  1408 => 276,  1406 => 273,  1405 => 272,  1399 => 270,  1389 => 269,  1379 => 282,  1376 => 281,  1372 => 279,  1370 => 269,  1362 => 268,  1359 => 267,  1356 => 266,  1346 => 265,  1336 => 256,  1333 => 255,  1330 => 254,  1327 => 253,  1317 => 252,  1306 => 249,  1300 => 248,  1295 => 246,  1290 => 244,  1286 => 243,  1280 => 242,  1277 => 241,  1267 => 240,  1253 => 236,  1248 => 235,  1238 => 234,  1227 => 257,  1225 => 252,  1222 => 251,  1220 => 240,  1217 => 239,  1215 => 234,  1212 => 233,  1209 => 232,  1206 => 231,  1203 => 230,  1200 => 229,  1198 => 228,  1195 => 227,  1185 => 226,  1174 => 259,  1172 => 226,  1167 => 225,  1157 => 224,  1147 => 263,  1143 => 261,  1141 => 224,  1133 => 223,  1130 => 222,  1120 => 221,  1110 => 215,  1107 => 214,  1104 => 213,  1101 => 212,  1091 => 211,  1080 => 208,  1074 => 207,  1069 => 205,  1060 => 204,  1056 => 203,  1052 => 202,  1045 => 200,  1042 => 199,  1032 => 198,  1018 => 194,  1014 => 193,  1011 => 192,  1001 => 191,  990 => 216,  988 => 211,  985 => 210,  983 => 198,  980 => 197,  978 => 191,  975 => 190,  972 => 189,  969 => 188,  966 => 187,  963 => 186,  961 => 185,  958 => 184,  948 => 183,  938 => 179,  935 => 178,  932 => 177,  929 => 176,  919 => 175,  908 => 172,  902 => 171,  897 => 169,  888 => 168,  884 => 167,  880 => 166,  873 => 164,  870 => 163,  860 => 162,  846 => 158,  842 => 157,  839 => 156,  829 => 155,  818 => 180,  816 => 175,  813 => 174,  811 => 162,  808 => 161,  806 => 155,  803 => 154,  800 => 153,  797 => 152,  794 => 151,  791 => 150,  789 => 149,  786 => 148,  776 => 147,  765 => 218,  763 => 183,  760 => 182,  758 => 147,  753 => 146,  743 => 145,  731 => 137,  722 => 136,  718 => 135,  714 => 134,  709 => 131,  699 => 130,  686 => 126,  682 => 125,  679 => 124,  669 => 123,  659 => 141,  655 => 139,  653 => 130,  650 => 129,  648 => 123,  645 => 122,  642 => 121,  632 => 120,  622 => 116,  619 => 115,  616 => 112,  613 => 111,  603 => 110,  592 => 107,  583 => 104,  578 => 103,  574 => 101,  571 => 100,  566 => 99,  560 => 96,  555 => 93,  553 => 92,  543 => 90,  536 => 89,  531 => 88,  521 => 87,  507 => 83,  503 => 82,  500 => 81,  490 => 80,  479 => 117,  477 => 110,  474 => 109,  472 => 87,  469 => 86,  467 => 80,  464 => 79,  454 => 78,  443 => 142,  441 => 120,  438 => 119,  436 => 78,  431 => 77,  421 => 76,  411 => 68,  401 => 67,  391 => 65,  385 => 64,  379 => 61,  373 => 60,  369 => 59,  366 => 58,  360 => 55,  354 => 54,  349 => 53,  347 => 52,  344 => 51,  337 => 48,  332 => 45,  330 => 44,  327 => 43,  324 => 42,  321 => 41,  318 => 40,  316 => 39,  313 => 38,  310 => 37,  307 => 36,  305 => 35,  302 => 34,  299 => 33,  296 => 32,  294 => 31,  291 => 30,  289 => 29,  286 => 28,  282 => 26,  277 => 25,  269 => 24,  265 => 23,  258 => 22,  253 => 20,  250 => 19,  246 => 18,  242 => 17,  232 => 16,  229 => 15,  219 => 14,  205 => 10,  201 => 9,  198 => 8,  188 => 7,  178 => 74,  174 => 72,  172 => 71,  168 => 69,  166 => 67,  163 => 66,  161 => 14,  158 => 13,  156 => 7,  150 => 5,  147 => 4,  137 => 3,  127 => 284,  124 => 283,  122 => 265,  119 => 264,  117 => 221,  114 => 220,  112 => 145,  109 => 144,  107 => 76,  104 => 75,  101 => 3,  82 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Provides customer type, salutation, title, firstname, lastname and birthday fields for address forms (e.g. registering a user, creating or updating an address) #}
{% block component_address_personal_fields %}
    {% block component_address_personal_account_type %}
        {% if onlyCompanyRegistration or (config('core.loginRegistration.showAccountTypeSelection') and not hideCustomerTypeSelect) %}
            <div class=\"{{ formRowClass }}\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    {% block component_address_personal_account_type_label %}
                        <label class=\"form-label\"
                               for=\"{{ idPrefix ~ prefix }}accountType\">
                            {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_account_type_select %}
                            {% if onlyCompanyRegistration or config('core.loginRegistration.showAccountTypeSelection') %}
                                <select name=\"{% if prefix %}{{ prefix }}[accountType]{% else %}accountType{% endif %}\"
                                    id=\"{{ idPrefix ~ prefix }}accountType\"
                                    {% if onlyCompanyRegistration %}disabled{% endif %}
                                    required=\"required\"
                                    class=\"{{ formSelectClass }} contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company{% if customToggleTarget %}-{{ prefix }}{% endif %}\"
                                    data-form-field-toggle-value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                    data-form-field-toggle-scope=\"{% if scope == 'parent' %}parent{% else %}all{% endif %}\"
                                    {% if scope == 'parent' %}data-form-field-toggle-parent-selector={{ parentSelector }}{% endif %}
                                >
                            {% endif %}

                            {% set isCompany = false %}

                            {% if page.address.company or data.company is not empty %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% if onlyCompanyRegistration or (accountType and accountType == constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS')) %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% set isLoginPage = false %}
                            {% if activeRoute == 'frontend.account.login.page' %}
                                {% set isLoginPage = true %}
                            {% endif %}

                            {% if isLoginPage %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}

                            {% if not onlyCompanyRegistration %}
                                <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_PRIVATE') }}\"
                                    {% if isCompany == false and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                    {{ \"account.personalTypePrivate\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}

                            <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                {% if isCompany == true and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                {{ \"account.personalTypeBusiness\"|trans|sw_sanitize }}
                            </option>
                        </select>
                        {% if onlyCompanyRegistration %}<input type=\"hidden\" name=\"accountType\" value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\">{% endif %}
                    {% endblock %}

                    {% block component_address_personal_account_type_error %}
                    {% endblock %}
                </div>
            </div>
        {% elseif not hideCustomerTypeSelect %}
            <input type=\"hidden\" name=\"accountType\">
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_salutation_title %}
        <div class=\"{{ formRowClass }}\">
            {% block component_address_personal_fields_salutation %}
                <div class=\"form-group col-md-3 col-sm-6\">
                    {% block component_address_personal_fields_salutation_label %}
                        <label class=\"form-label\"
                               for=\"{{ idPrefix ~ prefix }}personalSalutation\">
                            {{ \"account.personalSalutationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_salutation_select %}
                        <select id=\"{{ idPrefix ~ prefix }}personalSalutation\"
                                class=\"{{ formSelectClass }}{% if formViolations.getViolations('/salutationId') is not empty %} is-invalid{% endif %}\"
                                name=\"{% if prefix %}{{ prefix }}[salutationId]{% else %}salutationId{% endif %}\"
                                required=\"required\">
                            {% if not data.get('salutationId') %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalSalutationPlaceholder\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}
                            {% for salutation in page.salutations %}
                                <option {% if salutation.id == data.get('salutationId') %}
                                    selected=\"selected\"
                                {% endif %}
                                        value=\"{{ salutation.id }}\">
                                    {{ salutation.translated.displayName }}
                                </option>
                            {% endfor %}
                        </select>
                    {% endblock %}

                    {% block component_address_form_salutation_select_error %}
                        {% if formViolations.getViolations('/salutationId') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/salutationId'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_title %}
                {% if config('core.loginRegistration.showTitleField') %}
                    <div class=\"form-group col-md-3 col-sm-6\">
                        {% block component_address_personal_fields_title_label %}
                            <label class=\"form-label\"
                                   for=\"{{ idPrefix ~ prefix }}personalTitle\">
                                {{ \"account.personalTitleLabel\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_personal_fields_title_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"{{ idPrefix ~ prefix }}personalTitle\"
                                   placeholder=\"{{ \"account.personalTitlePlaceholder\"|trans|striptags }}\"
                                   name=\"{% if prefix %}{{ prefix }}[title]{% else %}title{% endif %}\"
                                   value=\"{{ data.get('title') }}\">
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_fields_name %}
        <div class=\"{{ formRowClass }}\">
            {% block component_address_personal_fields_first_name %}
                <div class=\"form-group col-sm-6\">
                    {% if formViolations.getViolations(\"/firstName\") is not empty %}
                        {% set violationPath = \"/firstName\" %}
                    {% else %}
                        {% set requiredMessage = \"error.VIOLATION::IS_BLANK_ERROR\"|trans({ '%field%': \"account.personalFirstNameLabel\"|trans|sw_sanitize }) %}
                    {% endif %}

                    {% block component_address_personal_fields_first_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ idPrefix ~ prefix }}personalFirstName\">
                            {{ \"account.personalFirstNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath is not empty %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal given-name\"
                               id=\"{{ idPrefix ~ prefix }}personalFirstName\"
                               placeholder=\"{{ \"account.personalFirstNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[firstName]{% else %}firstName{% endif %}\"
                               value=\"{{ data.get('firstName') }}\"
                               data-form-validation-required
                               {% if requiredMessage is defined %}data-form-validation-required-message=\"{{ requiredMessage }}\"{% endif %}
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_last_name %}
                <div class=\"form-group col-sm-6\">
                    {% if formViolations.getViolations(\"/lastName\") is not empty %}
                        {% set violationPath = \"/lastName\" %}
                    {% else %}
                        {% set requiredMessage = \"error.VIOLATION::IS_BLANK_ERROR\"|trans({ '%field%': \"account.personalLastNameLabel\"|trans|sw_sanitize }) %}
                    {% endif %}

                    {% block component_address_personal_fields_last_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ idPrefix ~ prefix }}personalLastName\">
                            {{ \"account.personalLastNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal family-name\"
                               id=\"{{ idPrefix ~ prefix }}personalLastName\"
                               placeholder=\"{{ \"account.personalLastNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[lastName]{% else %}lastName{% endif %}\"
                               value=\"{{ data.get('lastName') }}\"
                               data-form-validation-required
                               {% if requiredMessage is defined %}data-form-validation-required-message=\"{{ requiredMessage }}\"{% endif %}
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_company %}
        {% if (onlyCompanyRegistration or config('core.loginRegistration.showAccountTypeSelection')) and activeRoute == 'frontend.account.profile.page' %}
            <div class=\"js-field-toggle-contact-type-company{% if customToggleTarget %}-{{ prefix }}{% endif %}\">
                {% block component_address_personal_company_fields %}
                    <div class=\"{{ formRowClass }}\">
                        {% block component_address_personal_company_name %}
                            <div class=\"form-group col-12\">
                                {% if formViolations.getViolations(\"/company\") is not empty %}
                                    {% set violationPath = \"/company\" %}
                                {% else %}
                                    {% set requiredMessage = \"error.VIOLATION::IS_BLANK_ERROR\"|trans({ '%field%': \"address.companyNameLabel\"|trans|sw_sanitize }) %}
                                {% endif %}

                                {% block component_address_personal_company_name_label %}
                                    <label class=\"form-label\" for=\"{{ idPrefix ~ prefix }}company\">
                                        {{ \"address.companyNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block component_address_personal_company_name_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"{{ idPrefix ~ prefix }}company\"
                                           placeholder=\"{{ \"address.companyNamePlaceholder\"|trans|striptags }}\"
                                           name=\"company\"
                                           value=\"{{ data.get('company') }}\"
                                           data-form-validation-required
                                           {% if requiredMessage is defined %}data-form-validation-required-message=\"{{ requiredMessage }}\"{% endif %}
                                           required=\"required\">
                                {% endblock %}

                                {% block component_address_personal_company_name_input_error %}
                                    {% if violationPath %}
                                        {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}

    {% block component_address_personal_vat_id %}
        {% if showVatIdField %}
            {% if config('core.loginRegistration.showAccountTypeSelection') or onlyCompanyRegistration %}
                <div class=\"js-field-toggle-contact-type-company{% if customToggleTarget %}-{{ prefix }}{% endif %} js-field-toggle-contact-type-vat-id\">
                    {% block component_address_personal_vat_id_fields %}
                        <div class=\"{{ formRowClass }}\">
                            <div class=\"form-group col-12\">
                                {% sw_include '@Storefront/storefront/component/address/address-personal-vat-id.html.twig' with {
                                    'vatIds': data.get('vatIds'),
                                    'editMode': true
                                } %}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_birthday %}
        {% if showBirthdayField %}
            {% block component_address_personal_fields_birthday_label %}
                <label for=\"{{ idPrefix ~ prefix }}personalBirthday\">
                    {{ \"account.personalBirthdayLabel\"|trans|sw_sanitize }}{{ config('core.loginRegistration.birthdayFieldRequired') ? \"general.required\"|trans|sw_sanitize }}
                </label>
            {% endblock %}

            {% block component_address_personal_fields_birthday_selects %}
                <div class=\"{{ formRowClass }}\">
                    {% block component_address_personal_fields_birthday_select_day %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"{{ idPrefix ~ prefix }}personalBirthday\"
                                    name=\"{% if prefix %}{{ prefix }}[birthdayDay]{% else %}birthdayDay{% endif %}\"
                                    class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayDay') is not empty %} is-invalid{% endif %}\"
                                    {{ config('core.loginRegistration.birthdayFieldRequired') ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayDay') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectDay\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for day in range(1, 31) %}
                                    <option value=\"{{ day }}\"
                                            {% if day == data.get('birthdayDay') %} selected=\"selected\"{% endif %}>
                                        {{ day }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_day_error %}
                                {% if formViolations.getViolations('/birthdayDay') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayDay'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_month %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"{% if prefix %}{{ prefix }}[birthdayMonth]{% else %}birthdayMonth{% endif %}\"
                                    class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayMonth') is not empty %} is-invalid{% endif %}\"
                                    {{ config('core.loginRegistration.birthdayFieldRequired') ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayMonth') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectMonth\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for month in range(1, 12) %}
                                    <option value=\"{{ month }}\"
                                            {% if month == data.get('birthdayMonth') %} selected=\"selected\"{% endif %}>
                                        {{ month }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_month_error %}
                                {% if formViolations.getViolations('/birthdayMonth') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayMonth'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_year %}
                        <div class=\"form-group col-md-2 col-4\">
                            {% set currentYear = \"now\"|date('Y') %}
                            {% set startYear = currentYear - 120 %}

                            <select name=\"{% if prefix %}{{ prefix }}[birthdayYear]{% else %}birthdayYear{% endif %}\"
                                    class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayYear') is not empty %} is-invalid{% endif %}\"
                                    {{ config('core.loginRegistration.birthdayFieldRequired') ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayYear') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectYear\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for year in range(currentYear, startYear) %}
                                    <option value=\"{{ year }}\"
                                            {% if year == data.get('birthdayYear') %} selected=\"selected\"{% endif %}>
                                        {{ year }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_year_error %}
                                {% if formViolations.getViolations('/birthdayYear') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayYear'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/address/address-personal.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal.html.twig");
    }
}
