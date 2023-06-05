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

/* @Storefront/storefront/page/account/addressbook/index.html.twig */
class __TwigTemplate_b37f9ba8824c92cc937a8d17dcdec507 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_address_welcome' => [$this, 'block_page_account_address_welcome'],
            'page_account_address_welcome_headline' => [$this, 'block_page_account_address_welcome_headline'],
            'page_account_address_welcome_intro' => [$this, 'block_page_account_address_welcome_intro'],
            'page_account_address_success_messages' => [$this, 'block_page_account_address_success_messages'],
            'page_account_address_error_messages' => [$this, 'block_page_account_address_error_messages'],
            'page_account_address_main' => [$this, 'block_page_account_address_main'],
            'page_account_address_default' => [$this, 'block_page_account_address_default'],
            'page_account_address_billing' => [$this, 'block_page_account_address_billing'],
            'page_account_address_billing_body' => [$this, 'block_page_account_address_billing_body'],
            'page_account_address_billing_title' => [$this, 'block_page_account_address_billing_title'],
            'page_account_address_billing_address' => [$this, 'block_page_account_address_billing_address'],
            'page_account_address_shipping' => [$this, 'block_page_account_address_shipping'],
            'page_account_address_shipping_body' => [$this, 'block_page_account_address_shipping_body'],
            'page_account_address_shipping_title' => [$this, 'block_page_account_address_shipping_title'],
            'page_account_address_shipping_address' => [$this, 'block_page_account_address_shipping_address'],
            'page_account_address_item_content_create' => [$this, 'block_page_account_address_item_content_create'],
            'page_account_address_list' => [$this, 'block_page_account_address_list'],
            'page_account_address_overview_body' => [$this, 'block_page_account_address_overview_body'],
            'page_account_address_overview_address' => [$this, 'block_page_account_address_overview_address'],
            'page_account_address_overview_actions' => [$this, 'block_page_account_address_overview_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        // line 4
        echo "    <div class=\"account-address\">
        ";
        // line 5
        $this->displayBlock('page_account_address_welcome', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('page_account_address_success_messages', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('page_account_address_error_messages', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('page_account_address_main', $context, $blocks);
        // line 152
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_page_account_address_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome"));

        // line 6
        echo "            <div class=\"account-welcome\">
                ";
        // line 7
        $this->displayBlock('page_account_address_welcome_headline', $context, $blocks);
        // line 12
        echo "                ";
        $this->displayBlock('page_account_address_welcome_intro', $context, $blocks);
        // line 17
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_page_account_address_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_headline"));

        // line 8
        echo "                    <h1>
                        ";
        // line 9
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressWelcome"));
        echo "
                    </h1>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_page_account_address_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_intro"));

        // line 13
        echo "                    <p>
                        ";
        // line 14
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressText"));
        echo "
                    </p>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_page_account_address_success_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_success_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_success_messages"));

        // line 21
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 21) == "1")) {
            // line 22
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 22)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultChanged"))]));
            // line 26
            echo "            ";
        }
        // line 27
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "get", [0 => "addressDeleted"], "method", false, false, false, 27) == "1")) {
            // line 28
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 28)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDeleted"))]));
            // line 32
            echo "            ";
        }
        // line 33
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "get", [0 => "addressSaved"], "method", false, false, false, 33)) {
            // line 34
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 34)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressSaved"))]));
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_page_account_address_error_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_error_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_error_messages"));

        // line 42
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 42) == "0")) {
            // line 43
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 43)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultNotChanged"))]));
            // line 47
            echo "            ";
        }
        // line 48
        echo "            ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 48), "get", [0 => "addressDeleted"], "method", false, false, false, 48) == "0")) {
            // line 49
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 49)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressNotDeleted"))]));
            // line 53
            echo "            ";
        }
        // line 54
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_page_account_address_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_main"));

        // line 57
        echo "            ";
        $context["defaultBillingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 57), "defaultBillingAddress", [], "any", false, false, false, 57);
        // line 58
        echo "            ";
        $context["defaultShippingAddress"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 58), "defaultShippingAddress", [], "any", false, false, false, 58);
        // line 59
        echo "
            ";
        // line 60
        $this->displayBlock('page_account_address_default', $context, $blocks);
        // line 109
        echo "
            ";
        // line 110
        $this->displayBlock('page_account_address_item_content_create', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('page_account_address_list', $context, $blocks);
        // line 151
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_page_account_address_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_default"));

        // line 61
        echo "                <div class=\"row default-address\">
                    ";
        // line 62
        $this->displayBlock('page_account_address_billing', $context, $blocks);
        // line 84
        echo "
                    ";
        // line 85
        $this->displayBlock('page_account_address_shipping', $context, $blocks);
        // line 107
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_page_account_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing"));

        // line 63
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card billing-address\">
                                <div class=\"card-body\">
                                    ";
        // line 66
        $this->displayBlock('page_account_address_billing_body', $context, $blocks);
        // line 80
        echo "                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_page_account_address_billing_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_body"));

        // line 67
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 68
        $this->displayBlock('page_account_address_billing_title', $context, $blocks);
        // line 73
        echo "                                            ";
        $this->displayBlock('page_account_address_billing_address', $context, $blocks);
        // line 78
        echo "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_page_account_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_title"));

        // line 69
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 70
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultBillingAddress"));
        echo "</div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_page_account_address_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_address"));

        // line 74
        echo "                                                ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 74)->display(twig_array_merge($context, ["address" =>         // line 75
($context["defaultBillingAddress"] ?? null)]));
        // line 77
        echo "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_page_account_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping"));

        // line 86
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card shipping-address\">
                                <div class=\"card-body\">
                                    ";
        // line 89
        $this->displayBlock('page_account_address_shipping_body', $context, $blocks);
        // line 103
        echo "                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_page_account_address_shipping_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_body"));

        // line 90
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 91
        $this->displayBlock('page_account_address_shipping_title', $context, $blocks);
        // line 96
        echo "                                            ";
        $this->displayBlock('page_account_address_shipping_address', $context, $blocks);
        // line 101
        echo "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_page_account_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_title"));

        // line 92
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 93
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultShippingAddress"));
        echo "</div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_page_account_address_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_address"));

        // line 97
        echo "                                                ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 97)->display(twig_array_merge($context, ["address" =>         // line 98
($context["defaultShippingAddress"] ?? null)]));
        // line 100
        echo "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_page_account_address_item_content_create($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_item_content_create"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_item_content_create"));

        // line 111
        echo "                <div class=\"address-action-create\">
                    <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.create.page");
        echo "\"
                       title=\"";
        // line 113
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn")), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\">
                        ";
        // line 115
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn"));
        echo "
                    </a>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_page_account_address_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_list"));

        // line 121
        echo "                <div class=\"address-list\">
                    <div class=\"h3\">
                        ";
        // line 123
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressListHeader"));
        echo "
                    </div>

                    <div class=\"row\">
                        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "addresses", [], "any", false, false, false, 127));
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
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 128
            echo "                            <div class=\"col-sm-6 card-col address-card\">
                                <div class=\"card other-address\">
                                    <div class=\"card-body\">
                                        ";
            // line 131
            $this->displayBlock('page_account_address_overview_body', $context, $blocks);
            // line 144
            echo "                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_page_account_address_overview_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_body"));

        // line 132
        echo "                                            <div class=\"address-item-body\">
                                                ";
        // line 133
        $this->displayBlock('page_account_address_overview_address', $context, $blocks);
        // line 136
        echo "
                                                ";
        // line 137
        $this->displayBlock('page_account_address_overview_actions', $context, $blocks);
        // line 142
        echo "                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_page_account_address_overview_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_address"));

        // line 134
        echo "                                                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 134)->display(twig_array_merge($context, ["showShippingWarning" => (sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 134) != sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 134))]));
        // line 135
        echo "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_page_account_address_overview_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_actions"));

        // line 138
        echo "                                                    <div class=\"card-actions\">
                                                        ";
        // line 139
        $this->loadTemplate("@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 139)->display($context);
        // line 140
        echo "                                                    </div>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 140,  752 => 139,  749 => 138,  739 => 137,  729 => 135,  726 => 134,  716 => 133,  705 => 142,  703 => 137,  700 => 136,  698 => 133,  695 => 132,  685 => 131,  673 => 148,  656 => 144,  654 => 131,  649 => 128,  632 => 127,  625 => 123,  621 => 121,  611 => 120,  597 => 115,  592 => 113,  588 => 112,  585 => 111,  575 => 110,  565 => 100,  563 => 98,  561 => 97,  551 => 96,  538 => 93,  535 => 92,  525 => 91,  514 => 101,  511 => 96,  509 => 91,  506 => 90,  496 => 89,  483 => 103,  481 => 89,  476 => 86,  466 => 85,  456 => 77,  454 => 75,  452 => 74,  442 => 73,  429 => 70,  426 => 69,  416 => 68,  405 => 78,  402 => 73,  400 => 68,  397 => 67,  387 => 66,  374 => 80,  372 => 66,  367 => 63,  357 => 62,  346 => 107,  344 => 85,  341 => 84,  339 => 62,  336 => 61,  326 => 60,  316 => 151,  314 => 120,  311 => 119,  309 => 110,  306 => 109,  304 => 60,  301 => 59,  298 => 58,  295 => 57,  285 => 56,  275 => 54,  272 => 53,  269 => 49,  266 => 48,  263 => 47,  260 => 43,  257 => 42,  247 => 41,  237 => 39,  234 => 38,  231 => 34,  228 => 33,  225 => 32,  222 => 28,  219 => 27,  216 => 26,  213 => 22,  210 => 21,  200 => 20,  187 => 14,  184 => 13,  174 => 12,  161 => 9,  158 => 8,  148 => 7,  137 => 17,  134 => 12,  132 => 7,  129 => 6,  119 => 5,  108 => 152,  106 => 56,  103 => 55,  101 => 41,  98 => 40,  96 => 20,  93 => 19,  91 => 5,  88 => 4,  78 => 3,  55 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    <div class=\"account-address\">
        {% block page_account_address_welcome %}
            <div class=\"account-welcome\">
                {% block page_account_address_welcome_headline %}
                    <h1>
                        {{ \"account.addressWelcome\"|trans|sw_sanitize }}
                    </h1>
                {% endblock %}
                {% block page_account_address_welcome_intro %}
                    <p>
                        {{ \"account.addressText\"|trans|sw_sanitize }}
                    </p>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_account_address_success_messages %}
            {% if app.request.get('changedDefaultAddress') == '1' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressDefaultChanged\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressDeleted') == '1' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressDeleted\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressSaved') %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressSaved\"|trans|sw_sanitize
                } %}
            {% endif %}
        {% endblock %}

        {% block page_account_address_error_messages %}
            {% if app.request.get('changedDefaultAddress') == '0' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"danger\",
                    content: \"account.addressDefaultNotChanged\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressDeleted') == '0' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"danger\",
                    content: \"account.addressNotDeleted\"|trans|sw_sanitize
                } %}
            {% endif %}
        {% endblock %}

        {% block page_account_address_main %}
            {% set defaultBillingAddress = context.customer.defaultBillingAddress %}
            {% set defaultShippingAddress = context.customer.defaultShippingAddress %}

            {% block page_account_address_default %}
                <div class=\"row default-address\">
                    {% block page_account_address_billing %}
                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card billing-address\">
                                <div class=\"card-body\">
                                    {% block page_account_address_billing_body %}
                                        <div class=\"address-item-body\">
                                            {% block page_account_address_billing_title %}
                                                <div class=\"card-title\">
                                                    <div>{{ \"account.addressesTitleDefaultBillingAddress\"|trans|sw_sanitize }}</div>
                                                </div>
                                            {% endblock %}
                                            {% block page_account_address_billing_address %}
                                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                                    'address': defaultBillingAddress
                                                } %}
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>
                    {% endblock %}

                    {% block page_account_address_shipping %}
                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card shipping-address\">
                                <div class=\"card-body\">
                                    {% block page_account_address_shipping_body %}
                                        <div class=\"address-item-body\">
                                            {% block page_account_address_shipping_title %}
                                                <div class=\"card-title\">
                                                    <div>{{ \"account.addressesTitleDefaultShippingAddress\"|trans|sw_sanitize }}</div>
                                                </div>
                                            {% endblock %}
                                            {% block page_account_address_shipping_address %}
                                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                                    'address': defaultShippingAddress
                                                } %}
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_address_item_content_create %}
                <div class=\"address-action-create\">
                    <a href=\"{{ path('frontend.account.address.create.page') }}\"
                       title=\"{{ \"account.addressCreateBtn\"|trans|striptags }}\"
                       class=\"btn btn-primary\">
                        {{ \"account.addressCreateBtn\"|trans|sw_sanitize }}
                    </a>
                </div>
            {% endblock %}

            {% block page_account_address_list %}
                <div class=\"address-list\">
                    <div class=\"h3\">
                        {{ \"account.addressListHeader\"|trans|sw_sanitize }}
                    </div>

                    <div class=\"row\">
                        {% for address in page.addresses %}
                            <div class=\"col-sm-6 card-col address-card\">
                                <div class=\"card other-address\">
                                    <div class=\"card-body\">
                                        {% block page_account_address_overview_body %}
                                            <div class=\"address-item-body\">
                                                {% block page_account_address_overview_address %}
                                                    {% sw_include '@Storefront/storefront/component/address/address.html.twig' with { 'showShippingWarning': defaultShippingAddress.id != address.id } %}
                                                {% endblock %}

                                                {% block page_account_address_overview_actions %}
                                                    <div class=\"card-actions\">
                                                        {% sw_include '@Storefront/storefront/page/account/addressbook/address-actions.html.twig' %}
                                                    </div>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/addressbook/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/index.html.twig");
    }
}
