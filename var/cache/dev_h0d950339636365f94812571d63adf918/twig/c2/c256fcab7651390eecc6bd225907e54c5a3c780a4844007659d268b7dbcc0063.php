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

/* @Storefront/storefront/page/account/address.html.twig */
class __TwigTemplate_806eea3d8457eff8e726dae3e0ae3fe3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_addresses' => [$this, 'block_page_account_overview_addresses'],
            'page_account_overview_addresses_inner' => [$this, 'block_page_account_overview_addresses_inner'],
            'page_account_overview_billing_address' => [$this, 'block_page_account_overview_billing_address'],
            'page_account_overview_billing_address_card' => [$this, 'block_page_account_overview_billing_address_card'],
            'page_account_overview_billing_address_title' => [$this, 'block_page_account_overview_billing_address_title'],
            'page_account_overview_billing_address_content' => [$this, 'block_page_account_overview_billing_address_content'],
            'page_account_overview_billing_address_actions' => [$this, 'block_page_account_overview_billing_address_actions'],
            'page_account_overview_billing_address_actions_link' => [$this, 'block_page_account_overview_billing_address_actions_link'],
            'page_account_overview_shipping_address' => [$this, 'block_page_account_overview_shipping_address'],
            'page_account_overview_shipping_address_card' => [$this, 'block_page_account_overview_shipping_address_card'],
            'page_account_overview_shipping_address_title' => [$this, 'block_page_account_overview_shipping_address_title'],
            'page_account_overview_shipping_address_content' => [$this, 'block_page_account_overview_shipping_address_content'],
            'page_account_overview_shipping_address_actions' => [$this, 'block_page_account_overview_shipping_address_actions'],
            'page_account_overview_shipping_address_actions_link' => [$this, 'block_page_account_overview_shipping_address_actions_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/address.html.twig"));

        // line 1
        $this->displayBlock('page_account_overview_addresses', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_account_overview_addresses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses"));

        // line 2
        echo "    <div class=\"row js-account-overview-addresses\">
        ";
        // line 3
        $this->displayBlock('page_account_overview_addresses_inner', $context, $blocks);
        // line 88
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_account_overview_addresses_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_inner"));

        // line 4
        echo "            ";
        $this->displayBlock('page_account_overview_billing_address', $context, $blocks);
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('page_account_overview_shipping_address', $context, $blocks);
        // line 87
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_page_account_overview_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address"));

        // line 5
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-billing-address\">
                    ";
        // line 6
        $this->displayBlock('page_account_overview_billing_address_card', $context, $blocks);
        // line 41
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_page_account_overview_billing_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_card"));

        // line 7
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 9
        $this->displayBlock('page_account_overview_billing_address_title', $context, $blocks);
        // line 14
        echo "
                                ";
        // line 15
        $this->displayBlock('page_account_overview_billing_address_content', $context, $blocks);
        // line 18
        echo "
                                ";
        // line 19
        $this->displayBlock('page_account_overview_billing_address_actions', $context, $blocks);
        // line 38
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_page_account_overview_billing_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_title"));

        // line 10
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 11
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewBillingHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_page_account_overview_billing_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_content"));

        // line 16
        echo "                                    ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 16)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "defaultBillingAddress", [], "any", false, false, false, 16)]));
        // line 17
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_page_account_overview_billing_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions"));

        // line 20
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 22
        echo "                                        ";
        $context["addressEditorOptions"] = ["changeBilling" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 26
        echo "
                                        ";
        // line 27
        $this->displayBlock('page_account_overview_billing_address_actions_link', $context, $blocks);
        // line 36
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_page_account_overview_billing_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions_link"));

        // line 28
        echo "                                            <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 28), "defaultBillingAddress", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 29
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 32
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                                ";
        // line 33
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling"));
        echo "
                                            </a>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_page_account_overview_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address"));

        // line 45
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-shipping-address\">
                    ";
        // line 46
        $this->displayBlock('page_account_overview_shipping_address_card', $context, $blocks);
        // line 85
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_page_account_overview_shipping_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_card"));

        // line 47
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 49
        $this->displayBlock('page_account_overview_shipping_address_title', $context, $blocks);
        // line 54
        echo "
                                ";
        // line 55
        $this->displayBlock('page_account_overview_shipping_address_content', $context, $blocks);
        // line 62
        echo "
                                ";
        // line 63
        $this->displayBlock('page_account_overview_shipping_address_actions', $context, $blocks);
        // line 82
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_page_account_overview_shipping_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_title"));

        // line 50
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 51
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewShippingHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_page_account_overview_shipping_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_content"));

        // line 56
        echo "                                    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56), "defaultBillingAddress", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56), "defaultShippingAddress", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56))) {
            // line 57
            echo "                                        <p>";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewAddressEqual"));
            echo "</p>
                                    ";
        } else {
            // line 59
            echo "                                        ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 59)->display(twig_array_merge($context, ["address" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 59), "defaultShippingAddress", [], "any", false, false, false, 59)]));
            // line 60
            echo "                                    ";
        }
        // line 61
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_page_account_overview_shipping_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions"));

        // line 64
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 66
        echo "                                        ";
        $context["addressEditorOptions"] = ["changeShipping" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 70
        echo "
                                        ";
        // line 71
        $this->displayBlock('page_account_overview_shipping_address_actions_link', $context, $blocks);
        // line 80
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_page_account_overview_shipping_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions_link"));

        // line 72
        echo "                                            <a href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 72), "defaultShippingAddress", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 73
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 76
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                                ";
        // line 77
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping"));
        echo "
                                            </a>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  485 => 77,  481 => 76,  475 => 73,  470 => 72,  460 => 71,  449 => 80,  447 => 71,  444 => 70,  441 => 66,  438 => 64,  428 => 63,  418 => 61,  415 => 60,  412 => 59,  406 => 57,  403 => 56,  393 => 55,  380 => 51,  377 => 50,  367 => 49,  355 => 82,  353 => 63,  350 => 62,  348 => 55,  345 => 54,  343 => 49,  339 => 47,  329 => 46,  318 => 85,  316 => 46,  313 => 45,  303 => 44,  290 => 33,  286 => 32,  280 => 29,  275 => 28,  265 => 27,  254 => 36,  252 => 27,  249 => 26,  246 => 22,  243 => 20,  233 => 19,  223 => 17,  220 => 16,  210 => 15,  197 => 11,  194 => 10,  184 => 9,  172 => 38,  170 => 19,  167 => 18,  165 => 15,  162 => 14,  160 => 9,  156 => 7,  146 => 6,  135 => 41,  133 => 6,  130 => 5,  120 => 4,  110 => 87,  108 => 44,  105 => 43,  102 => 4,  92 => 3,  81 => 88,  79 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_overview_addresses %}
    <div class=\"row js-account-overview-addresses\">
        {% block page_account_overview_addresses_inner %}
            {% block page_account_overview_billing_address %}
                <div class=\"col-lg-6 card-col account-overview-card overview-billing-address\">
                    {% block page_account_overview_billing_address_card %}
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_billing_address_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewBillingHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_billing_address_content %}
                                    {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': context.customer.defaultBillingAddress} %}
                                {% endblock %}

                                {% block page_account_overview_billing_address_actions %}
                                    <div class=\"card-actions\">
                                        {# @deprecated tag:v6.5.0 - Option addressEditorOptions.csrfToken will be removed. #}
                                        {% set addressEditorOptions = {
                                            changeBilling: true,
                                            csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                        } %}

                                        {% block page_account_overview_billing_address_actions_link %}
                                            <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': context.customer.defaultBillingAddress.id}) }}\"
                                               title=\"{{ \"account.overviewChangeBilling\"|trans|striptags }}\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='{{ addressEditorOptions|json_encode }}'>
                                                {{ \"account.overviewChangeBilling\"|trans|sw_sanitize }}
                                            </a>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_overview_shipping_address %}
                <div class=\"col-lg-6 card-col account-overview-card overview-shipping-address\">
                    {% block page_account_overview_shipping_address_card %}
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_shipping_address_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewShippingHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_shipping_address_content %}
                                    {% if context.customer.defaultBillingAddress.id is same as(context.customer.defaultShippingAddress.id) %}
                                        <p>{{ \"account.overviewAddressEqual\"|trans|sw_sanitize }}</p>
                                    {% else %}
                                        {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': context.customer.defaultShippingAddress} %}
                                    {% endif %}
                                {% endblock %}

                                {% block page_account_overview_shipping_address_actions %}
                                    <div class=\"card-actions\">
                                        {# @deprecated tag:v6.5.0 - Option addressEditorOptions.csrfToken will be removed. #}
                                        {% set addressEditorOptions = {
                                            changeShipping: true,
                                            csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                        } %}

                                        {% block page_account_overview_shipping_address_actions_link %}
                                            <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': context.customer.defaultShippingAddress.id}) }}\"
                                               title=\"{{ \"account.overviewChangeShipping\"|trans|striptags }}\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='{{ addressEditorOptions|json_encode }}'>
                                                {{ \"account.overviewChangeShipping\"|trans|sw_sanitize }}
                                            </a>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/address.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/address.html.twig");
    }
}
