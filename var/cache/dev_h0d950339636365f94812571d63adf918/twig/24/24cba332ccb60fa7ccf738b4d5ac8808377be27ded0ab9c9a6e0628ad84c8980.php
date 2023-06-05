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

/* @Storefront/storefront/page/account/index.html.twig */
class __TwigTemplate_1eb8dab908d74268a5b4ae1aed298d21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_overview' => [$this, 'block_page_account_overview'],
            'page_account_overview_shipping_warning' => [$this, 'block_page_account_overview_shipping_warning'],
            'page_account_overview_request_group_info' => [$this, 'block_page_account_overview_request_group_info'],
            'page_account_overview_welcome' => [$this, 'block_page_account_overview_welcome'],
            'page_account_overview_welcome_intro' => [$this, 'block_page_account_overview_welcome_intro'],
            'page_account_overview_main' => [$this, 'block_page_account_overview_main'],
            'page_account_overview_profile' => [$this, 'block_page_account_overview_profile'],
            'page_account_overview_profile_card' => [$this, 'block_page_account_overview_profile_card'],
            'page_account_overview_profile_title' => [$this, 'block_page_account_overview_profile_title'],
            'page_account_overview_profile_content' => [$this, 'block_page_account_overview_profile_content'],
            'page_account_overview_profile_company' => [$this, 'block_page_account_overview_profile_company'],
            'page_account_overview_profile_email' => [$this, 'block_page_account_overview_profile_email'],
            'page_account_overview_profile_actions' => [$this, 'block_page_account_overview_profile_actions'],
            'page_account_overview_payment' => [$this, 'block_page_account_overview_payment'],
            'page_account_overview_payment_card' => [$this, 'block_page_account_overview_payment_card'],
            'page_account_overview_payment_title' => [$this, 'block_page_account_overview_payment_title'],
            'page_account_overview_payment_content' => [$this, 'block_page_account_overview_payment_content'],
            'page_account_overview_payment_actions' => [$this, 'block_page_account_overview_payment_actions'],
            'page_account_overview_newsletter' => [$this, 'block_page_account_overview_newsletter'],
            'page_account_overview_newsletter_title' => [$this, 'block_page_account_overview_newsletter_title'],
            'page_account_overview_newsletter_content' => [$this, 'block_page_account_overview_newsletter_content'],
            'page_account_overview_addresses_include' => [$this, 'block_page_account_overview_addresses_include'],
            'page_account_overview_newest_order' => [$this, 'block_page_account_overview_newest_order'],
            'page_account_overview_newest_order_title' => [$this, 'block_page_account_overview_newest_order_title'],
            'page_account_overview_newest_order_content' => [$this, 'block_page_account_overview_newest_order_content'],
            'page_account_overview_newest_order_table' => [$this, 'block_page_account_overview_newest_order_table'],
            'page_account_overview_newest_order_table_body' => [$this, 'block_page_account_overview_newest_order_table_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/index.html.twig", 2);
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
        echo "    ";
        $this->displayBlock('page_account_overview', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_page_account_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview"));

        // line 5
        echo "        <div class=\"account-overview\">
            ";
        // line 6
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707")) {
            // line 7
            echo "                ";
            $this->displayBlock('page_account_overview_shipping_warning', $context, $blocks);
            // line 17
            echo "
                ";
            // line 18
            $this->displayBlock('page_account_overview_request_group_info', $context, $blocks);
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_account_overview_welcome', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('page_account_overview_main', $context, $blocks);
        // line 134
        echo "
            ";
        // line 135
        $this->displayBlock('page_account_overview_newsletter', $context, $blocks);
        // line 158
        echo "
            ";
        // line 159
        $this->displayBlock('page_account_overview_addresses_include', $context, $blocks);
        // line 162
        echo "
            ";
        // line 163
        $this->displayBlock('page_account_overview_newest_order', $context, $blocks);
        // line 195
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_page_account_overview_shipping_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_warning"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_warning"));

        // line 8
        echo "                    ";
        $context["ableToShipToShippingCountry"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "defaultShippingAddress", [], "any", false, false, false, 8), "country", [], "any", false, false, false, 8), "shippingAvailable", [], "any", false, false, false, 8);
        // line 9
        echo "
                    ";
        // line 10
        if ( !($context["ableToShipToShippingCountry"] ?? null)) {
            // line 11
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 11)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewNotAbleToShip"))]));
            // line 15
            echo "                    ";
        }
        // line 16
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_page_account_overview_request_group_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_request_group_info"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_request_group_info"));

        // line 19
        echo "                    ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, false, 19), "requestedGroup", [], "any", false, false, false, 19)) {
            // line 20
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 20)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewCustomerGroupRequest", ["%group%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 23
($context["page"] ?? null), "customer", [], "any", false, false, false, 23), "requestedGroup", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)])]));
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_page_account_overview_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome"));

        // line 31
        echo "                <div class=\"account-welcome\">
                    <h1>";
        // line 32
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewTitle"));
        echo "</h1>
                    ";
        // line 33
        $this->displayBlock('page_account_overview_welcome_intro', $context, $blocks);
        // line 36
        echo "
                    ";
        // line 37
        if (( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, false, 37), "requestedGroup", [], "any", false, false, false, 37))) {
            // line 38
            echo "
                        ";
            // line 40
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 40)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewCustomerGroupRequest", ["%group%" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 43
($context["page"] ?? null), "customer", [], "any", false, false, false, 43), "requestedGroup", [], "any", false, false, false, 43), "translated", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)])]));
            // line 46
            echo "                    ";
        }
        // line 47
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_page_account_overview_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome_intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome_intro"));

        // line 34
        echo "                        <p>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewInfo"));
        echo "</p>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_page_account_overview_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_main"));

        // line 51
        echo "                <div class=\"row\">
                    ";
        // line 52
        $this->displayBlock('page_account_overview_profile', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_account_overview_payment', $context, $blocks);
        // line 132
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_page_account_overview_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile"));

        // line 53
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-profile\">
                            ";
        // line 54
        $this->displayBlock('page_account_overview_profile_card', $context, $blocks);
        // line 99
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_page_account_overview_profile_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_card"));

        // line 55
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 57
        $this->displayBlock('page_account_overview_profile_title', $context, $blocks);
        // line 62
        echo "
                                        ";
        // line 63
        $this->displayBlock('page_account_overview_profile_content', $context, $blocks);
        // line 74
        echo "
                                        ";
        // line 75
        $this->displayBlock('page_account_overview_profile_company', $context, $blocks);
        // line 80
        echo "
                                        ";
        // line 81
        $this->displayBlock('page_account_overview_profile_email', $context, $blocks);
        // line 86
        echo "
                                        ";
        // line 87
        $this->displayBlock('page_account_overview_profile_actions', $context, $blocks);
        // line 96
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_page_account_overview_profile_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_title"));

        // line 58
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 59
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewProfileHeader"));
        echo "
                                            </h2>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_page_account_overview_profile_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_content"));

        // line 64
        echo "                                            <p>
                                                ";
        // line 65
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "salutation", [], "any", false, false, false, 65) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 65), "salutation", [], "any", false, false, false, 65), "salutationKey", [], "any", false, false, false, 65) != "not_specified"))) {
            // line 66
            echo "                                                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 66), "salutation", [], "any", false, false, false, 66), "translated", [], "any", false, false, false, 66), "displayName", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                                ";
        }
        // line 68
        echo "                                                ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68)) {
            // line 69
            echo "                                                    ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
            echo "<br/>
                                                ";
        }
        // line 71
        echo "                                                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 71), "firstName", [], "any", false, false, false, 71), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 71), "lastName", [], "any", false, false, false, 71), "html", null, true);
        echo "
                                            </p>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_page_account_overview_profile_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_company"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_company"));

        // line 76
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/account/customer-overview-personal-company.html.twig", "@Storefront/storefront/page/account/index.html.twig", 76)->display(twig_array_merge($context, ["customer" => sw_get_attribute($this->env, $this->source,         // line 77
($context["context"] ?? null), "customer", [], "any", false, false, false, 77)]));
        // line 79
        echo "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_page_account_overview_profile_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_email"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_email"));

        // line 82
        echo "                                            <p>
                                                ";
        // line 83
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
        echo "
                                            </p>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_page_account_overview_profile_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_actions"));

        // line 88
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        echo "\"
                                                   title=\"";
        // line 90
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 92
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile"));
        echo "
                                                </a>
                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_page_account_overview_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment"));

        // line 103
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-payment\">
                            ";
        // line 104
        $this->displayBlock('page_account_overview_payment_card', $context, $blocks);
        // line 130
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_page_account_overview_payment_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_card"));

        // line 105
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 107
        $this->displayBlock('page_account_overview_payment_title', $context, $blocks);
        // line 112
        echo "
                                        ";
        // line 113
        $this->displayBlock('page_account_overview_payment_content', $context, $blocks);
        // line 117
        echo "
                                        ";
        // line 118
        $this->displayBlock('page_account_overview_payment_actions', $context, $blocks);
        // line 127
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_page_account_overview_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_title"));

        // line 108
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 109
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewPaymentHeader"));
        echo "
                                            </h2>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_page_account_overview_payment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_content"));

        // line 114
        echo "                                            <strong>";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 114), "defaultPaymentMethod", [], "any", false, false, false, 114), "translated", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "</strong>
                                            <p>";
        // line 115
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 115), "defaultPaymentMethod", [], "any", false, false, false, 115), "description", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_page_account_overview_payment_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_actions"));

        // line 119
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
        echo "\"
                                                   title=\"";
        // line 121
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 123
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment"));
        echo "
                                                </a>
                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_page_account_overview_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter"));

        // line 136
        echo "                <div class=\"account-overview-card account-overview-newsletter\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 139
        $this->displayBlock('page_account_overview_newsletter_title', $context, $blocks);
        // line 144
        echo "
                            ";
        // line 145
        $this->displayBlock('page_account_overview_newsletter_content', $context, $blocks);
        // line 154
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_page_account_overview_newsletter_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_title"));

        // line 140
        echo "                                <h2 class=\"card-title\">
                                    ";
        // line 141
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterTitle"));
        echo "
                                </h2>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function block_page_account_overview_newsletter_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content"));

        // line 146
        echo "                                <div class=\"js-newsletter-wrapper\">
                                    ";
        // line 147
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 148
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/page/account/newsletter.html.twig", "@Storefront/storefront/page/account/index.html.twig", 148)->display(twig_array_merge($context, ["newsletterAccountPagelet" => sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getNewsletterAccountPagelet", [], "method", false, false, false, 148)]));
            // line 149
            echo "                                    ";
        } else {
            // line 150
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/page/account/newsletter.html.twig", "@Storefront/storefront/page/account/index.html.twig", 150)->display(twig_array_merge($context, ["customer" => sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 150)]));
            // line 151
            echo "                                    ";
        }
        // line 152
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 159
    public function block_page_account_overview_addresses_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_include"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_include"));

        // line 160
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/account/address.html.twig", "@Storefront/storefront/page/account/index.html.twig", 160)->display($context);
        // line 161
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 163
    public function block_page_account_overview_newest_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order"));

        // line 164
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 164)) {
            // line 165
            echo "                    <div class=\"account-overview-card account-overview-newest-order\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
            // line 168
            $this->displayBlock('page_account_overview_newest_order_title', $context, $blocks);
            // line 173
            echo "
                                ";
            // line 174
            $this->displayBlock('page_account_overview_newest_order_content', $context, $blocks);
            // line 190
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 194
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_page_account_overview_newest_order_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_title"));

        // line 169
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 170
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewNewestOrderHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_page_account_overview_newest_order_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_content"));

        // line 175
        echo "                                    ";
        $this->displayBlock('page_account_overview_newest_order_table', $context, $blocks);
        // line 189
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 175
    public function block_page_account_overview_newest_order_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table"));

        // line 176
        echo "                                        ";
        // line 177
        echo "                                        <div class=\"";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            echo "table ";
        }
        echo "order-table\">

                                            ";
        // line 179
        $this->displayBlock('page_account_overview_newest_order_table_body', $context, $blocks);
        // line 187
        echo "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 179
    public function block_page_account_overview_newest_order_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_body"));

        // line 180
        echo "                                                <div class=\"order-table-body\"
                                                     data-order-detail-loader=\"true\">
                                                    ";
        // line 182
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-item.html.twig", "@Storefront/storefront/page/account/index.html.twig", 182)->display(twig_array_merge($context, ["order" => sw_get_attribute($this->env, $this->source,         // line 183
($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 183)]));
        // line 185
        echo "                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  977 => 185,  975 => 183,  974 => 182,  970 => 180,  960 => 179,  949 => 187,  947 => 179,  939 => 177,  937 => 176,  927 => 175,  917 => 189,  914 => 175,  904 => 174,  891 => 170,  888 => 169,  878 => 168,  868 => 194,  862 => 190,  860 => 174,  857 => 173,  855 => 168,  850 => 165,  847 => 164,  837 => 163,  827 => 161,  824 => 160,  814 => 159,  803 => 152,  800 => 151,  797 => 150,  794 => 149,  791 => 148,  789 => 147,  786 => 146,  776 => 145,  763 => 141,  760 => 140,  750 => 139,  737 => 154,  735 => 145,  732 => 144,  730 => 139,  725 => 136,  715 => 135,  701 => 123,  696 => 121,  692 => 120,  689 => 119,  679 => 118,  667 => 115,  662 => 114,  652 => 113,  639 => 109,  636 => 108,  626 => 107,  614 => 127,  612 => 118,  609 => 117,  607 => 113,  604 => 112,  602 => 107,  598 => 105,  588 => 104,  577 => 130,  575 => 104,  572 => 103,  562 => 102,  548 => 92,  543 => 90,  539 => 89,  536 => 88,  526 => 87,  513 => 83,  510 => 82,  500 => 81,  490 => 79,  488 => 77,  486 => 76,  476 => 75,  460 => 71,  454 => 69,  451 => 68,  445 => 66,  443 => 65,  440 => 64,  430 => 63,  417 => 59,  414 => 58,  404 => 57,  392 => 96,  390 => 87,  387 => 86,  385 => 81,  382 => 80,  380 => 75,  377 => 74,  375 => 63,  372 => 62,  370 => 57,  366 => 55,  356 => 54,  345 => 99,  343 => 54,  340 => 53,  330 => 52,  319 => 132,  317 => 102,  314 => 101,  312 => 52,  309 => 51,  299 => 50,  286 => 34,  276 => 33,  265 => 47,  262 => 46,  260 => 43,  258 => 40,  255 => 38,  253 => 37,  250 => 36,  248 => 33,  244 => 32,  241 => 31,  231 => 30,  221 => 27,  218 => 26,  216 => 23,  214 => 20,  211 => 19,  201 => 18,  191 => 16,  188 => 15,  185 => 11,  183 => 10,  180 => 9,  177 => 8,  167 => 7,  156 => 195,  154 => 163,  151 => 162,  149 => 159,  146 => 158,  144 => 135,  141 => 134,  139 => 50,  136 => 49,  134 => 30,  131 => 29,  128 => 28,  126 => 18,  123 => 17,  120 => 7,  118 => 6,  115 => 5,  95 => 4,  85 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_overview %}
        <div class=\"account-overview\">
            {% if feature('FEATURE_NEXT_15707') %}
                {% block page_account_overview_shipping_warning %}
                    {% set ableToShipToShippingCountry = context.customer.defaultShippingAddress.country.shippingAvailable %}

                    {% if not ableToShipToShippingCountry %}
                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                            type: 'warning',
                            content: 'account.overviewNotAbleToShip'|trans|sw_sanitize
                        } %}
                    {% endif %}
                {% endblock %}

                {% block page_account_overview_request_group_info %}
                    {% if page.customer.requestedGroup %}
                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                            type: 'info',
                            content: 'account.overviewCustomerGroupRequest'|trans({
                                '%group%': page.customer.requestedGroup.translated.name
                            })
                        } %}
                    {% endif %}
                {% endblock %}
            {% endif %}

            {% block page_account_overview_welcome %}
                <div class=\"account-welcome\">
                    <h1>{{ \"account.overviewTitle\"|trans|sw_sanitize }}</h1>
                    {% block page_account_overview_welcome_intro %}
                        <p>{{ \"account.overviewInfo\"|trans|sw_sanitize }}</p>
                    {% endblock %}

                    {% if not feature('FEATURE_NEXT_15707') and page.customer.requestedGroup %}

                        {# @deprecated tag:v6.5.0 - Alert will be removed use block \"page_account_overview_request_group_info\" instead #}
                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                            type: 'info',
                            content: 'account.overviewCustomerGroupRequest'|trans({
                                '%group%': page.customer.requestedGroup.translated.name
                            })
                        } %}
                    {% endif %}
                </div>
            {% endblock %}

            {% block page_account_overview_main %}
                <div class=\"row\">
                    {% block page_account_overview_profile %}
                        <div class=\"col-lg-6 card-col account-overview-card account-overview-profile\">
                            {% block page_account_overview_profile_card %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        {% block page_account_overview_profile_title %}
                                            <h2 class=\"card-title\">
                                                {{ \"account.overviewProfileHeader\"|trans|sw_sanitize }}
                                            </h2>
                                        {% endblock %}

                                        {% block page_account_overview_profile_content %}
                                            <p>
                                                {% if context.customer.salutation and context.customer.salutation.salutationKey != 'not_specified' %}
                                                    {{ context.customer.salutation.translated.displayName }}
                                                {% endif %}
                                                {% if context.customer.title %}
                                                    {{ context.customer.title }}<br/>
                                                {% endif %}
                                                {{ context.customer.firstName }} {{ context.customer.lastName }}
                                            </p>
                                        {% endblock %}

                                        {% block page_account_overview_profile_company %}
                                            {% sw_include '@Storefront/storefront/component/account/customer-overview-personal-company.html.twig' with {
                                                'customer': context.customer,
                                            } %}
                                        {% endblock %}

                                        {% block page_account_overview_profile_email %}
                                            <p>
                                                {{ context.customer.email }}
                                            </p>
                                        {% endblock %}

                                        {% block page_account_overview_profile_actions %}
                                            <div class=\"card-actions\">
                                                <a href=\"{{ path('frontend.account.profile.page') }}\"
                                                   title=\"{{ \"account.overviewChangeProfile\"|trans|striptags }}\"
                                                   class=\"btn btn-light\">
                                                    {{ \"account.overviewChangeProfile\"|trans|sw_sanitize }}
                                                </a>
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block page_account_overview_payment %}
                        <div class=\"col-lg-6 card-col account-overview-card account-overview-payment\">
                            {% block page_account_overview_payment_card %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        {% block page_account_overview_payment_title %}
                                            <h2 class=\"card-title\">
                                                {{ \"account.overviewPaymentHeader\"|trans|sw_sanitize }}
                                            </h2>
                                        {% endblock %}

                                        {% block page_account_overview_payment_content %}
                                            <strong>{{ context.customer.defaultPaymentMethod.translated.name }}</strong>
                                            <p>{{ context.customer.defaultPaymentMethod.description }}</p>
                                        {% endblock %}

                                        {% block page_account_overview_payment_actions %}
                                            <div class=\"card-actions\">
                                                <a href=\"{{ path('frontend.account.payment.page') }}\"
                                                   title=\"{{ \"account.overviewChangePayment\"|trans|striptags }}\"
                                                   class=\"btn btn-light\">
                                                    {{ \"account.overviewChangePayment\"|trans|sw_sanitize }}
                                                </a>
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_overview_newsletter %}
                <div class=\"account-overview-card account-overview-newsletter\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            {% block page_account_overview_newsletter_title %}
                                <h2 class=\"card-title\">
                                    {{ \"account.newsletterTitle\"|trans|sw_sanitize }}
                                </h2>
                            {% endblock %}

                            {% block page_account_overview_newsletter_content %}
                                <div class=\"js-newsletter-wrapper\">
                                    {% if feature('FEATURE_NEXT_14001') %}
                                        {% sw_include \"@Storefront/storefront/page/account/newsletter.html.twig\" with { \"newsletterAccountPagelet\": page.getNewsletterAccountPagelet() } %}
                                    {% else %}
                                        {% sw_include \"@Storefront/storefront/page/account/newsletter.html.twig\" with { \"customer\": context.customer } %}
                                    {% endif %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block page_account_overview_addresses_include %}
                {% sw_include \"@Storefront/storefront/page/account/address.html.twig\" %}
            {% endblock %}

            {% block page_account_overview_newest_order %}
                {% if page.newestOrder %}
                    <div class=\"account-overview-card account-overview-newest-order\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_newest_order_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewNewestOrderHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_newest_order_content %}
                                    {% block page_account_overview_newest_order_table %}
                                        {# @deprecated tag:v6.5.0 - Bootstrap v5 `.table` class will be removed because it adds unneeded styling. #}
                                        <div class=\"{% if not feature('v6.5.0.0') %}table {% endif %}order-table\">

                                            {% block page_account_overview_newest_order_table_body %}
                                                <div class=\"order-table-body\"
                                                     data-order-detail-loader=\"true\">
                                                    {% sw_include '@Storefront/storefront/page/account/order-history/order-item.html.twig' with {
                                                        order: page.newestOrder
                                                    } %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                {% endblock %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/index.html.twig");
    }
}
