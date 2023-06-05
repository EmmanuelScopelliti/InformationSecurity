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

/* @Storefront/storefront/page/account/addressbook/address-actions.html.twig */
class __TwigTemplate_8e1e018dbfaf4bb5679cb0a49968fdc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_address_actions' => [$this, 'block_page_account_address_actions'],
            'page_account_address_actions_set_default' => [$this, 'block_page_account_address_actions_set_default'],
            'page_account_address_actions_set_default_shipping' => [$this, 'block_page_account_address_actions_set_default_shipping'],
            'page_account_address_actions_set_default_shipping_csrf' => [$this, 'block_page_account_address_actions_set_default_shipping_csrf'],
            'page_account_address_actions_set_default_billing' => [$this, 'block_page_account_address_actions_set_default_billing'],
            'page_account_address_actions_set_default_billing_csrf' => [$this, 'block_page_account_address_actions_set_default_billing_csrf'],
            'page_account_address_actions_buttons' => [$this, 'block_page_account_address_actions_buttons'],
            'page_account_address_actions_update' => [$this, 'block_page_account_address_actions_update'],
            'page_account_address_actions_delete' => [$this, 'block_page_account_address_actions_delete'],
            'page_account_address_actions_delete_csrf' => [$this, 'block_page_account_address_actions_delete_csrf'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig"));

        // line 1
        $this->displayBlock('page_account_address_actions', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_account_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions"));

        // line 2
        echo "    ";
        $this->displayBlock('page_account_address_actions_set_default', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('page_account_address_actions_buttons', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_page_account_address_actions_set_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default"));

        // line 3
        echo "        <div class=\"address-actions-defaults\">
            ";
        // line 4
        $this->displayBlock('page_account_address_actions_set_default_shipping', $context, $blocks);
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('page_account_address_actions_set_default_billing', $context, $blocks);
        // line 44
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_page_account_address_actions_set_default_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping"));

        // line 5
        echo "                ";
        if ((sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 5) != sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 5))) {
            // line 6
            echo "                    <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "shipping", "addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 11
            echo "                        ";
            $this->displayBlock('page_account_address_actions_set_default_shipping_csrf', $context, $blocks);
            // line 14
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 16
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-shipping\"
                                ";
            // line 18
            if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 18), "shippingAvailable", [], "any", false, false, false, 18))) {
                echo " disabled=\"disabled\"";
            }
            echo ">
                            ";
            // line 19
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 23
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_page_account_address_actions_set_default_shipping_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping_csrf"));

        // line 12
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_page_account_address_actions_set_default_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing"));

        // line 26
        echo "                ";
        if ((sw_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 26) != sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 26))) {
            // line 27
            echo "                    <form action=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "billing", "addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 32
            echo "                        ";
            $this->displayBlock('page_account_address_actions_set_default_billing_csrf', $context, $blocks);
            // line 35
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 37
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-billing\">
                            ";
            // line 39
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 43
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_page_account_address_actions_set_default_billing_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing_csrf"));

        // line 33
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_page_account_address_actions_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_buttons"));

        // line 48
        echo "        <div class=\"row ";
        echo sw_escape_filter($this->env, ($context["gridNoGuttersClass"] ?? null), "html", null, true);
        echo " address-actions-buttons\">
            ";
        // line 49
        $this->displayBlock('page_account_address_actions_update', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('page_account_address_actions_delete', $context, $blocks);
        // line 81
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_page_account_address_actions_update($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_update"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_update"));

        // line 50
        echo "                <div class=\"col-auto\">
                    <a href=\"";
        // line 51
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\"
                       title=\"";
        // line 52
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit")), "html", null, true);
        echo "\"
                       class=\"btn btn-light btn-sm\">
                        ";
        // line 54
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit"));
        echo "
                    </a>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_page_account_address_actions_delete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete"));

        // line 60
        echo "                ";
        if (((sw_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 60) != sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 60)) && (sw_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 60) != sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 60)))) {
            // line 61
            echo "                    <div class=\"col-auto\">
                        <form action=\"";
            // line 62
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.delete", ["addressId" => sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"
                              data-form-csrf-handler=\"true\"
                              class=\"address-action-delete\"
                              method=\"post\">

                            ";
            // line 68
            echo "                            ";
            $this->displayBlock('page_account_address_actions_delete_csrf', $context, $blocks);
            // line 71
            echo "
                            <button type=\"submit\"
                                    class=\"btn btn-light btn-sm\"
                                    title=\"";
            // line 74
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete")), "html", null, true);
            echo "\">
                                ";
            // line 75
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete"));
            echo "
                            </button>
                        </form>
                    </div>
                ";
        }
        // line 80
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_page_account_address_actions_delete_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete_csrf"));

        // line 69
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.delete");
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/address-actions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  404 => 69,  394 => 68,  384 => 80,  376 => 75,  372 => 74,  367 => 71,  364 => 68,  356 => 62,  353 => 61,  350 => 60,  340 => 59,  326 => 54,  321 => 52,  317 => 51,  314 => 50,  304 => 49,  293 => 81,  291 => 59,  288 => 58,  286 => 49,  281 => 48,  271 => 47,  258 => 33,  248 => 32,  238 => 43,  231 => 39,  226 => 37,  222 => 35,  219 => 32,  211 => 27,  208 => 26,  198 => 25,  185 => 12,  175 => 11,  165 => 23,  158 => 19,  152 => 18,  147 => 16,  143 => 14,  140 => 11,  132 => 6,  129 => 5,  119 => 4,  108 => 44,  106 => 25,  103 => 24,  101 => 4,  98 => 3,  88 => 2,  78 => 47,  75 => 46,  72 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_address_actions %}
    {% block page_account_address_actions_set_default %}
        <div class=\"address-actions-defaults\">
            {% block page_account_address_actions_set_default_shipping %}
                {% if defaultShippingAddress.id != address.id %}
                    <form action=\"{{ path('frontend.account.address.set-default-address', {'type': 'shipping', 'addressId': address.id}) }}\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        {# @deprecated tag:v6.5.0 - Block page_account_address_actions_set_default_shipping_csrf will be removed. #}
                        {% block page_account_address_actions_set_default_shipping_csrf %}
                            {{ sw_csrf('frontend.account.address.set-default-address') }}
                        {% endblock %}

                        <button type=\"submit\"
                                title=\"{{ \"account.addressesSetAsDefaultShippingAction\"|trans|striptags }}\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-shipping\"
                                {% if feature('FEATURE_NEXT_15707') and not address.country.shippingAvailable %} disabled=\"disabled\"{% endif %}>
                            {{ \"account.addressesSetAsDefaultShippingAction\"|trans|sw_sanitize }}
                        </button>
                    </form>
                {% endif %}
            {% endblock %}

            {% block page_account_address_actions_set_default_billing %}
                {% if defaultBillingAddress.id != address.id %}
                    <form action=\"{{ path('frontend.account.address.set-default-address', {'type': 'billing', 'addressId': address.id}) }}\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        {# @deprecated tag:v6.5.0 - Block page_account_address_actions_set_default_billing_csrf will be removed. #}
                        {% block page_account_address_actions_set_default_billing_csrf %}
                            {{ sw_csrf('frontend.account.address.set-default-address') }}
                        {% endblock %}

                        <button type=\"submit\"
                                title=\"{{ \"account.addressesSetAsDefaultBillingAction\"|trans|striptags }}\"
                                class=\"btn btn-link address-action-set-default address-action-set-default-billing\">
                            {{ \"account.addressesSetAsDefaultBillingAction\"|trans|sw_sanitize }}
                        </button>
                    </form>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block page_account_address_actions_buttons %}
        <div class=\"row {{ gridNoGuttersClass }} address-actions-buttons\">
            {% block page_account_address_actions_update %}
                <div class=\"col-auto\">
                    <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': address.id}) }}\"
                       title=\"{{ \"account.addressesContentItemActionEdit\"|trans|striptags }}\"
                       class=\"btn btn-light btn-sm\">
                        {{ \"account.addressesContentItemActionEdit\"|trans|sw_sanitize }}
                    </a>
                </div>
            {% endblock %}

            {% block page_account_address_actions_delete %}
                {% if defaultShippingAddress.id != address.id and defaultBillingAddress.id != address.id %}
                    <div class=\"col-auto\">
                        <form action=\"{{ path('frontend.account.address.delete', {'addressId': address.id}) }}\"
                              data-form-csrf-handler=\"true\"
                              class=\"address-action-delete\"
                              method=\"post\">

                            {# @deprecated tag:v6.5.0 - Block page_account_address_actions_delete_csrf will be removed. #}
                            {% block page_account_address_actions_delete_csrf %}
                                {{ sw_csrf('frontend.account.address.delete') }}
                            {% endblock %}

                            <button type=\"submit\"
                                    class=\"btn btn-light btn-sm\"
                                    title=\"{{ \"account.addressesContentItemActionDelete\"|trans|striptags }}\">
                                {{ \"account.addressesContentItemActionDelete\"|trans|sw_sanitize }}
                            </button>
                        </form>
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/address-actions.html.twig");
    }
}
