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

/* @Storefront/storefront/page/account/profile/personal.html.twig */
class __TwigTemplate_d7cc22c2f729f0517c137d06eeacf2bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_address_personal_customer_type' => [$this, 'block_component_address_personal_customer_type'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_selects' => [$this, 'block_page_account_profile_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_select_day' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day'],
            'page_account_profile_personal_fields_birthday_select_day_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day_error'],
            'page_account_profile_personal_fields_birthday_select_month' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month'],
            'page_account_profile_personal_fields_birthday_select_month_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month_error'],
            'page_account_profile_personal_fields_birthday_select_year' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year'],
            'page_account_profile_personal_fields_birthday_select_year_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/personal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/personal.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_component_address_personal_customer_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_customer_type"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_customer_type"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        // line 6
        echo "    ";
        $this->displayBlock('page_account_profile_personal_fields_birthday_selects', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_page_account_profile_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_selects"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_selects"));

        // line 7
        echo "        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        $context["birthday"] = false;
        // line 9
        echo "            ";
        $context["birthmonth"] = false;
        // line 10
        echo "            ";
        $context["birthyear"] = false;
        // line 11
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 11)) {
            // line 12
            echo "                ";
            $context["birthday"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 12), "d");
            // line 13
            echo "                ";
            $context["birthmonth"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 13), "m");
            // line 14
            echo "                ";
            $context["birthyear"] = twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 14), "Y");
            // line 15
            echo "            ";
        }
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month', $context, $blocks);
        // line 75
        echo "
            ";
        // line 76
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year', $context, $blocks);
        // line 107
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_page_account_profile_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day"));

        // line 18
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select id=\"personalBirthday\"
                            name=\"birthdayDay\"
                            class=\"";
        // line 21
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 21))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 23
        if ( !($context["birthday"] ?? null)) {
            // line 24
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 26
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                            </option>
                        ";
        }
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 30
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                ";
            // line 31
            if (($context["day"] == ($context["birthday"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 32
            echo sw_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>

                    ";
        // line 37
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 44
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_page_account_profile_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day_error"));

        // line 38
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 38))) {
            // line 39
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 39)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_page_account_profile_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month"));

        // line 48
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select name=\"birthdayMonth\"
                            class=\"";
        // line 50
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 50))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 52
        if ( !($context["birthmonth"] ?? null)) {
            // line 53
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 55
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                            </option>
                        ";
        }
        // line 58
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 59
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                ";
            // line 60
            if (($context["month"] == ($context["birthmonth"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 61
            echo sw_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </select>

                    ";
        // line 66
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 73
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_page_account_profile_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month_error"));

        // line 67
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 67))) {
            // line 68
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 68)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 71
            echo "                        ";
        }
        // line 72
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_page_account_profile_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year"));

        // line 77
        echo "                <div class=\"form-group col-4 col-md-2\">
                    ";
        // line 78
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 79
        echo "                    ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 80
        echo "
                    <select name=\"birthdayYear\"
                            class=\"";
        // line 82
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 82))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 84
        if ( !($context["birthyear"] ?? null)) {
            // line 85
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 87
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                            </option>
                        ";
        }
        // line 90
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 91
            echo "                            <option value=\"";
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                ";
            // line 92
            if (($context["year"] == ($context["birthyear"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 93
            echo sw_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </select>

                    ";
        // line 98
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 105
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_page_account_profile_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year_error"));

        // line 99
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 99))) {
            // line 100
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 100)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 103
            echo "                        ";
        }
        // line 104
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 104,  479 => 103,  476 => 100,  473 => 99,  463 => 98,  452 => 105,  450 => 98,  446 => 96,  437 => 93,  431 => 92,  426 => 91,  421 => 90,  415 => 87,  411 => 85,  409 => 84,  401 => 82,  397 => 80,  394 => 79,  392 => 78,  389 => 77,  379 => 76,  369 => 72,  366 => 71,  363 => 68,  360 => 67,  350 => 66,  339 => 73,  337 => 66,  333 => 64,  324 => 61,  318 => 60,  313 => 59,  308 => 58,  302 => 55,  298 => 53,  296 => 52,  288 => 50,  284 => 48,  274 => 47,  264 => 43,  261 => 42,  258 => 39,  255 => 38,  245 => 37,  234 => 44,  232 => 37,  228 => 35,  219 => 32,  213 => 31,  208 => 30,  203 => 29,  197 => 26,  193 => 24,  191 => 23,  183 => 21,  178 => 18,  168 => 17,  157 => 107,  155 => 76,  152 => 75,  150 => 47,  147 => 46,  145 => 17,  142 => 16,  139 => 15,  136 => 14,  133 => 13,  130 => 12,  127 => 11,  124 => 10,  121 => 9,  119 => 8,  114 => 7,  94 => 6,  84 => 5,  66 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/address/address-personal.html.twig' %}

{% block component_address_personal_customer_type %}{% endblock %}

{% block component_address_personal_fields_birthday_selects %}
    {% block page_account_profile_personal_fields_birthday_selects %}
        <div class=\"{{ formRowClass }}\">
            {% set birthday = false %}
            {% set birthmonth = false %}
            {% set birthyear = false %}
            {% if data.birthday %}
                {% set birthday = data.birthday|date('d') %}
                {% set birthmonth = data.birthday|date('m') %}
                {% set birthyear = data.birthday|date('Y') %}
            {% endif %}

            {% block page_account_profile_personal_fields_birthday_select_day %}
                <div class=\"form-group col-4 col-md-2\">
                    <select id=\"personalBirthday\"
                            name=\"birthdayDay\"
                            class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayDay') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthday %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectDay\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for day in range(1, 31) %}
                            <option value=\"{{ day }}\"
                                {% if day == birthday %} selected=\"selected\"{% endif %}>
                                {{ day }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_day_error %}
                        {% if formViolations.getViolations('/birthdayDay') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/birthdayDay'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_profile_personal_fields_birthday_select_month %}
                <div class=\"form-group col-4 col-md-2\">
                    <select name=\"birthdayMonth\"
                            class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayMonth') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthmonth %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectMonth\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for month in range(1, 12) %}
                            <option value=\"{{ month }}\"
                                {% if month == birthmonth %} selected=\"selected\"{% endif %}>
                                {{ month }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_month_error %}
                        {% if formViolations.getViolations('/birthdayMonth') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/birthdayMonth'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_profile_personal_fields_birthday_select_year %}
                <div class=\"form-group col-4 col-md-2\">
                    {% set currentYear = \"now\"|date('Y') %}
                    {% set startYear = currentYear - 120 %}

                    <select name=\"birthdayYear\"
                            class=\"{{ formSelectClass }}{% if formViolations.getViolations('/birthdayYear') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthyear %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectYear\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for year in range(currentYear, startYear) %}
                            <option value=\"{{ year }}\"
                                {% if year == birthyear %} selected=\"selected\"{% endif %}>
                                {{ year }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_year_error %}
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
{% endblock %}
", "@Storefront/storefront/page/account/profile/personal.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/personal.html.twig");
    }
}
