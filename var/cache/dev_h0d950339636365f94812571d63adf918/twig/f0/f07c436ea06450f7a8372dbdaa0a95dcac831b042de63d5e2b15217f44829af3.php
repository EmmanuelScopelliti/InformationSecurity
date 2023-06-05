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

/* @zenitPlatformStratus/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_d8f4b1c927d4a6e1f16b752e132ea0e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'zen_layout_footer_newsletter' => [$this, 'block_zen_layout_footer_newsletter'],
            'zen_layout_footer_newsletter_logo' => [$this, 'block_zen_layout_footer_newsletter_logo'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'zen_layout_footer_navigation_logo' => [$this, 'block_zen_layout_footer_navigation_logo'],
            'zen_layout_footer_navigation_newsletter' => [$this, 'block_zen_layout_footer_navigation_newsletter'],
            'zen_layout_footer_navigation_newsletter_headline_logo' => [$this, 'block_zen_layout_footer_navigation_newsletter_headline_logo'],
            'zen_layout_footer_navigation_newsletter_headline' => [$this, 'block_zen_layout_footer_navigation_newsletter_headline'],
            'zen_layout_footer_navigation_newsletter_icons' => [$this, 'block_zen_layout_footer_navigation_newsletter_icons'],
            'zen_layout_footer_navigation_newsletter_content' => [$this, 'block_zen_layout_footer_navigation_newsletter_content'],
            'zen_layout_footer_navigation_social' => [$this, 'block_zen_layout_footer_navigation_social'],
            'zen_layout_footer_navigation_social_headline_logo' => [$this, 'block_zen_layout_footer_navigation_social_headline_logo'],
            'zen_layout_footer_navigation_social_headline' => [$this, 'block_zen_layout_footer_navigation_social_headline'],
            'zen_layout_footer_navigation_social_icons' => [$this, 'block_zen_layout_footer_navigation_social_icons'],
            'zen_layout_footer_navigation_social_content' => [$this, 'block_zen_layout_footer_navigation_social_content'],
            'zen_layout_footer_navigation_custom' => [$this, 'block_zen_layout_footer_navigation_custom'],
            'zen_layout_footer_navigation_custom_headline' => [$this, 'block_zen_layout_footer_navigation_custom_headline'],
            'zen_layout_footer_navigation_custom_icons' => [$this, 'block_zen_layout_footer_navigation_custom_icons'],
            'zen_layout_footer_navigation_custom_content' => [$this, 'block_zen_layout_footer_navigation_custom_content'],
            'zen_layout_footer_navigation_hotline' => [$this, 'block_zen_layout_footer_navigation_hotline'],
            'zen_layout_footer_navigation_hotline_headline_logo' => [$this, 'block_zen_layout_footer_navigation_hotline_headline_logo'],
            'zen_layout_footer_navigation_hotline_headline' => [$this, 'block_zen_layout_footer_navigation_hotline_headline'],
            'zen_layout_footer_navigation_hotline_icons' => [$this, 'block_zen_layout_footer_navigation_hotline_icons'],
            'zen_layout_footer_navigation_hotline_content' => [$this, 'block_zen_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'zen_layout_footer_social_media_logos' => [$this, 'block_zen_layout_footer_social_media_logos'],
            'zen_layout_footer_bottom_vat' => [$this, 'block_zen_layout_footer_bottom_vat'],
            'zen_layout_footer_bottom_row' => [$this, 'block_zen_layout_footer_bottom_row'],
            'zen_layout_footer_bottom_left' => [$this, 'block_zen_layout_footer_bottom_left'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
            'zen_layout_footer_bottom_right' => [$this, 'block_zen_layout_footer_bottom_right'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        // line 4
        echo "    <div class=\"footer-column-toggle\">
        <span class=\"footer-plus-icon\">
            ";
        // line 6
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 6);
            })())->display(twig_array_merge($context, ["name" => "plus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 6);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-down"]));
        }
        // line 7
        echo "        </span>
        <span class=\"footer-minus-icon\">
            ";
        // line 9
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 9);
            })())->display(twig_array_merge($context, ["name" => "minus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 9);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-up"]));
        }
        // line 10
        echo "        </span>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        // line 15
        echo "    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "newsletter")) {
            // line 16
            echo "        ";
            $context["newsletterHiddenClass"] = "d-md-none";
            // line 17
            echo "        ";
            $context["newsletterFooterLogoClass"] = "newsletter-footer-logo";
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('zen_layout_footer_newsletter', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 342
        echo "
    ";
        // line 343
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_zen_layout_footer_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_newsletter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_newsletter"));

        // line 21
        echo "        ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-position") === "prepend")) {
            // line 22
            echo "            <div class=\"footer-newsletter newsletter-fullwidth ";
            echo sw_escape_filter($this->env, ($context["newsletterFooterLogoClass"] ?? null), "html", null, true);
            echo "\">
                <div class=\"container\">

                    ";
            // line 25
            $this->displayBlock('zen_layout_footer_newsletter_logo', $context, $blocks);
            // line 33
            echo "
                    ";
            // line 34
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 34)->display(twig_array_merge($context, ["action" => "frontend.form.newsletter.register.handle", "submitText" => "newsletter.formSubmit"]));
            // line 38
            echo "
                </div>
            </div>
        ";
        }
        // line 42
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_zen_layout_footer_newsletter_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_newsletter_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_newsletter_logo"));

        // line 26
        echo "                        ";
        // line 27
        echo "                        ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "newsletter")) {
            // line 28
            echo "                            <div class=\"footer-logo\">
                                ";
            // line 29
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 29)->display($context);
            // line 30
            echo "                            </div>
                        ";
        }
        // line 32
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        // line 45
        echo "        <div class=\"container\">
            <div id=\"footerColumns\"
                 class=\"row footer-columns";
        // line 47
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-font-align") === "center") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-font-align") === "center"))) {
            echo " justify-content-center";
        }
        echo "\"
                 data-collapse-footer=\"true\"
                 role=\"list\">

                ";
        // line 51
        $this->displayBlock('zen_layout_footer_navigation_logo', $context, $blocks);
        // line 60
        echo "
                ";
        // line 61
        $this->displayBlock('zen_layout_footer_navigation_newsletter', $context, $blocks);
        // line 116
        echo "
                ";
        // line 117
        $this->displayBlock('zen_layout_footer_navigation_social', $context, $blocks);
        // line 172
        echo "
                ";
        // line 173
        $this->displayBlock('zen_layout_footer_navigation_custom', $context, $blocks);
        // line 224
        echo "
                ";
        // line 225
        $this->displayBlock('zen_layout_footer_navigation_hotline', $context, $blocks);
        // line 287
        echo "
                ";
        // line 288
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 339
        echo "            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_zen_layout_footer_navigation_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_logo"));

        // line 52
        echo "                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "column")) {
            // line 53
            echo "                        <div class=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-col"), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-col-xl"), "html", null, true);
            echo " order-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-order"), "html", null, true);
            echo " footer-column footer-logo-column\">
                            <div class=\"footer-logo-column-inner\">
                                ";
            // line 55
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 55)->display($context);
            // line 56
            echo "                            </div>
                        </div>
                    ";
        }
        // line 59
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_zen_layout_footer_navigation_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter"));

        // line 62
        echo "                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-position") === "column")) {
            // line 63
            echo "                        <div class=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-col"), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-col-xl"), "html", null, true);
            echo " order-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-order"), "html", null, true);
            echo " footer-column js-footer-column footer-newsletter-column footer-newsletter ";
            echo sw_escape_filter($this->env, ($context["newsletterFooterLogoClass"] ?? null), "html", null, true);
            echo "\">

                            ";
            // line 65
            $this->displayBlock('zen_layout_footer_navigation_newsletter_headline_logo', $context, $blocks);
            // line 73
            echo "
                            ";
            // line 75
            echo "                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-newsletter-collapse-state")) {
                // line 76
                echo "                                ";
                $context["newsletterShowClass"] = "show";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "
                            ";
            // line 79
            $this->displayBlock('zen_layout_footer_navigation_newsletter_headline', $context, $blocks);
            // line 99
            echo "
                            ";
            // line 100
            $this->displayBlock('zen_layout_footer_navigation_newsletter_content', $context, $blocks);
            // line 112
            echo "
                        </div>
                    ";
        }
        // line 115
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_zen_layout_footer_navigation_newsletter_headline_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_headline_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_headline_logo"));

        // line 66
        echo "                                ";
        // line 67
        echo "                                ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "newsletter")) {
            // line 68
            echo "                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        ";
            // line 69
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 69)->display($context);
            // line 70
            echo "                                    </div>
                                ";
        }
        // line 72
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_zen_layout_footer_navigation_newsletter_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_headline"));

        // line 80
        echo "                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["newsletterHiddenClass"] ?? null), "html", null, true);
        echo " footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger ";
        echo sw_escape_filter($this->env, ($context["newsletterShowClass"] ?? null), "html", null, true);
        echo "\"
                                     id=\"collapseFooterNewsletterTitle\"
                                     data-target=\"#collapseFooterNewsletter\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterNewsletter\"
                                     role=\"listitem\">
                                    ";
        // line 86
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.footer.newsletterHeadline"));
        echo "
                                    ";
        // line 87
        $this->displayBlock('zen_layout_footer_navigation_newsletter_icons', $context, $blocks);
        // line 97
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_zen_layout_footer_navigation_newsletter_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_icons"));

        // line 88
        echo "                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                ";
        // line 90
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 90);
            })())->display(twig_array_merge($context, ["name" => "plus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 90);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-down"]));
        }
        // line 91
        echo "                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                ";
        // line 93
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 93);
            })())->display(twig_array_merge($context, ["name" => "minus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 93);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-up"]));
        }
        // line 94
        echo "                                            </span>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_zen_layout_footer_navigation_newsletter_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_newsletter_content"));

        // line 101
        echo "                                <div id=\"collapseFooterNewsletter\"
                                     class=\"footer-column-content collapse js-footer-column-content ";
        // line 102
        echo sw_escape_filter($this->env, ($context["newsletterShowClass"] ?? null), "html", null, true);
        echo "\"
                                     aria-labelledby=\"collapseFooterNewsletterTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        ";
        // line 105
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 105)->display(twig_array_merge($context, ["action" => "frontend.form.newsletter.register.handle", "submitText" => "newsletter.formSubmit"]));
        // line 109
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_zen_layout_footer_navigation_social($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social"));

        // line 118
        echo "                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-position") === "column")) {
            // line 119
            echo "                        <div class=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-col"), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-col-xl"), "html", null, true);
            echo " order-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-order"), "html", null, true);
            echo " footer-column js-footer-column footer-social-column\">
                            ";
            // line 121
            echo "                            ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "social")) {
                // line 122
                echo "                                ";
                $context["socialHiddenClass"] = "d-md-none";
                // line 123
                echo "                            ";
            }
            // line 124
            echo "
                            ";
            // line 125
            $this->displayBlock('zen_layout_footer_navigation_social_headline_logo', $context, $blocks);
            // line 133
            echo "
                            ";
            // line 135
            echo "                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-collapse-state")) {
                // line 136
                echo "                                ";
                $context["socialShowClass"] = "show";
                // line 137
                echo "                            ";
            }
            // line 138
            echo "
                            ";
            // line 139
            $this->displayBlock('zen_layout_footer_navigation_social_headline', $context, $blocks);
            // line 159
            echo "
                            ";
            // line 160
            $this->displayBlock('zen_layout_footer_navigation_social_content', $context, $blocks);
            // line 169
            echo "                        </div>
                    ";
        }
        // line 171
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
    public function block_zen_layout_footer_navigation_social_headline_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_headline_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_headline_logo"));

        // line 126
        echo "                                ";
        // line 127
        echo "                                ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "social")) {
            // line 128
            echo "                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        ";
            // line 129
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 129)->display($context);
            // line 130
            echo "                                    </div>
                                ";
        }
        // line 132
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_zen_layout_footer_navigation_social_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_headline"));

        // line 140
        echo "                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["socialHiddenClass"] ?? null), "html", null, true);
        echo " footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger ";
        echo sw_escape_filter($this->env, ($context["socialShowClass"] ?? null), "html", null, true);
        echo "\"
                                     id=\"collapseFooterSocialTitle\"
                                     data-target=\"#collapseFooterSocial\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterSocial\"
                                     role=\"listitem\">
                                    ";
        // line 146
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.footer.socialMediaHeadline"));
        echo "
                                    ";
        // line 147
        $this->displayBlock('zen_layout_footer_navigation_social_icons', $context, $blocks);
        // line 157
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_zen_layout_footer_navigation_social_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_icons"));

        // line 148
        echo "                                        <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 150
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 150);
            })())->display(twig_array_merge($context, ["name" => "plus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 150);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-down"]));
        }
        // line 151
        echo "                                        </span>
                                            <span class=\"footer-minus-icon\">
                                            ";
        // line 153
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 153);
            })())->display(twig_array_merge($context, ["name" => "minus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 153);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-up"]));
        }
        // line 154
        echo "                                        </span>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 160
    public function block_zen_layout_footer_navigation_social_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_social_content"));

        // line 161
        echo "                                <div id=\"collapseFooterSocial\"
                                     class=\"footer-column-content collapse js-footer-column-content ";
        // line 162
        echo sw_escape_filter($this->env, ($context["socialShowClass"] ?? null), "html", null, true);
        echo "\"
                                     aria-labelledby=\"collapseFooterSocialTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        ";
        // line 165
        $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-social.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 165)->display($context);
        // line 166
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 173
    public function block_zen_layout_footer_navigation_custom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom"));

        // line 174
        echo "                    ";
        if ((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customColumnActive") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customColumnTitle")) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customColumnText"))) {
            // line 175
            echo "
                        ";
            // line 176
            $context["customColumn"] = ["translated" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.customColumnTitle", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customColumnTitle")]), "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.customColumnText", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.customColumnText")])]];
            // line 182
            echo "
                        <div class=\"";
            // line 183
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-custom-col"), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-custom-col-xl"), "html", null, true);
            echo " order-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-custom-order"), "html", null, true);
            echo " footer-column js-footer-column footer-custom-column\">

                            ";
            // line 186
            echo "                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-custom-collapse-state")) {
                // line 187
                echo "                                ";
                $context["customShowClass"] = "show";
                // line 188
                echo "                            ";
            }
            // line 189
            echo "
                            ";
            // line 190
            $this->displayBlock('zen_layout_footer_navigation_custom_headline', $context, $blocks);
            // line 211
            echo "
                            ";
            // line 212
            $this->displayBlock('zen_layout_footer_navigation_custom_content', $context, $blocks);
            // line 221
            echo "                        </div>
                    ";
        }
        // line 223
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 190
    public function block_zen_layout_footer_navigation_custom_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_headline"));

        // line 191
        echo "                                <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger ";
        echo sw_escape_filter($this->env, ($context["customShowClass"] ?? null), "html", null, true);
        echo "\"
                                     id=\"collapseFooterCustomTitle\"
                                     data-target=\"#collapseFooterCustom\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterCustom\"
                                     role=\"listitem\">
                                    ";
        // line 197
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["customColumn"] ?? null), "translated", [], "any", false, false, false, 197), "title", [], "any", false, false, false, 197), "html", null, true);
        echo "

                                    ";
        // line 199
        $this->displayBlock('zen_layout_footer_navigation_custom_icons', $context, $blocks);
        // line 209
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 199
    public function block_zen_layout_footer_navigation_custom_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_icons"));

        // line 200
        echo "                                        <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 202
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 202);
            })())->display(twig_array_merge($context, ["name" => "plus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 202);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-down"]));
        }
        // line 203
        echo "                                        </span>
                                            <span class=\"footer-minus-icon\">
                                            ";
        // line 205
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 205);
            })())->display(twig_array_merge($context, ["name" => "minus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 205);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-up"]));
        }
        // line 206
        echo "                                        </span>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 212
    public function block_zen_layout_footer_navigation_custom_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_custom_content"));

        // line 213
        echo "                                <div id=\"collapseFooterCustom\"
                                     class=\"footer-column-content collapse js-footer-column-content ";
        // line 214
        echo sw_escape_filter($this->env, ($context["customShowClass"] ?? null), "html", null, true);
        echo "\"
                                     aria-labelledby=\"collapseFooterCustomTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        ";
        // line 217
        echo sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["customColumn"] ?? null), "translated", [], "any", false, false, false, 217), "text", [], "any", false, false, false, 217);
        echo "
                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 225
    public function block_zen_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline"));

        // line 226
        echo "                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-hotline-position") === "column")) {
            // line 227
            echo "                        <div class=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-hotline-col"), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-hotline-col-xl"), "html", null, true);
            echo " order-";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-hotline-order"), "html", null, true);
            echo " footer-column js-footer-column footer-hotline-column\">
                            ";
            // line 229
            echo "                            ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "hotline")) {
                // line 230
                echo "                                ";
                $context["hotlineHiddenClass"] = "d-md-none";
                // line 231
                echo "                            ";
            }
            // line 232
            echo "
                            ";
            // line 233
            $this->displayBlock('zen_layout_footer_navigation_hotline_headline_logo', $context, $blocks);
            // line 241
            echo "
                            ";
            // line 243
            echo "                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-hotline-collapse-state")) {
                // line 244
                echo "                                ";
                $context["hotlineShowClass"] = "show";
                // line 245
                echo "                            ";
            }
            // line 246
            echo "
                            ";
            // line 247
            $this->displayBlock('zen_layout_footer_navigation_hotline_headline', $context, $blocks);
            // line 267
            echo "
                            ";
            // line 268
            $this->displayBlock('zen_layout_footer_navigation_hotline_content', $context, $blocks);
            // line 284
            echo "                        </div>
                    ";
        }
        // line 286
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 233
    public function block_zen_layout_footer_navigation_hotline_headline_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_headline_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_headline_logo"));

        // line 234
        echo "                                ";
        // line 235
        echo "                                ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-logo-position") === "hotline")) {
            // line 236
            echo "                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        ";
            // line 237
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 237)->display($context);
            // line 238
            echo "                                    </div>
                                ";
        }
        // line 240
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 247
    public function block_zen_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_headline"));

        // line 248
        echo "                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["hotlineHiddenClass"] ?? null), "html", null, true);
        echo " footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger ";
        echo sw_escape_filter($this->env, ($context["hotlineShowClass"] ?? null), "html", null, true);
        echo "\"
                                     id=\"collapseFooterHotlineTitle\"
                                     data-target=\"#collapseFooterHotline\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterHotline\"
                                     role=\"listitem\">
                                    ";
        // line 254
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                                    ";
        // line 255
        $this->displayBlock('zen_layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 265
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 255
    public function block_zen_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_icons"));

        // line 256
        echo "                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                ";
        // line 258
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 258);
            })())->display(twig_array_merge($context, ["name" => "plus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 258);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-down"]));
        }
        // line 259
        echo "                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                ";
        // line 261
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-col-headline-icon") === "plusminus")) {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 261);
            })())->display(twig_array_merge($context, ["name" => "minus"]));
        } else {
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 261);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-up"]));
        }
        // line 262
        echo "                                            </span>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 268
    public function block_zen_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_navigation_hotline_content"));

        // line 269
        echo "                                <div id=\"collapseFooterHotline\"
                                     class=\"footer-column-content collapse js-footer-column-content ";
        // line 270
        echo sw_escape_filter($this->env, ($context["hotlineShowClass"] ?? null), "html", null, true);
        echo "\"
                                     aria-labelledby=\"collapseFooterHotlineTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        <p class=\"footer-contact-hotline\">
                                            ";
        // line 274
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                        </p>
                                    </div>
                                    <div class=\"footer-contact-form\">
                                        ";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 280
        echo "
                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 288
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        // line 289
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 289), "navigation", [], "any", false, false, false, 289), "tree", [], "any", false, false, false, 289));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 290
            echo "                        ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 337
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 290
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        // line 291
        echo "                            <div class=\"";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-navigation-col"), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-navigation-col-xl"), "html", null, true);
        echo " order-";
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-navigation-order"), "html", null, true);
        echo " footer-column js-footer-column\">

                                ";
        // line 294
        echo "                                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-navigation-collapse-state")) {
            // line 295
            echo "                                    ";
            $context["navigationShowClass"] = "show";
            // line 296
            echo "                                ";
        }
        // line 297
        echo "
                                ";
        // line 298
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 316
        echo "
                                ";
        // line 317
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 335
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 298
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        // line 299
        echo "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger ";
        echo sw_escape_filter($this->env, ($context["navigationShowClass"] ?? null), "html", null, true);
        echo "\"
                                         data-target=\"#collapseFooterTitle";
        // line 300
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 300), "html", null, true);
        echo "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 302
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 302), "html", null, true);
        echo "\">

                                        ";
        // line 304
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 304), "type", [], "any", false, false, false, 304) == "folder")) {
            // line 305
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 305), "translated", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
            echo "
                                        ";
        } else {
            // line 307
            echo "                                            <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 307));
            echo "\"
                                               ";
            // line 308
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 308))) {
                echo "target=\"_blank\"";
            }
            // line 309
            echo "                                               title=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 309), "translated", [], "any", false, false, false, 309), "name", [], "any", false, false, false, 309), "html", null, true);
            echo "\">
                                                ";
            // line 310
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 310), "translated", [], "any", false, false, false, 310), "name", [], "any", false, false, false, 310), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        // line 313
        echo "                                        ";
        $this->displayBlock("layout_footer_navigation_information_icons", $context, $blocks);
        echo "
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 317
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        // line 318
        echo "                                    <div id=\"collapseFooter";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 318), "html", null, true);
        echo "\"
                                         class=\"footer-column-content collapse js-footer-column-content ";
        // line 319
        echo sw_escape_filter($this->env, ($context["navigationShowClass"] ?? null), "html", null, true);
        echo "\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 320
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 320), "html", null, true);
        echo "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 322
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 332
        echo "                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 322
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        // line 323
        echo "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 324));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 325
            echo "                                                        ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 325);
            // line 326
            echo "                                                        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 326), "name", [], "any", false, false, false, 326);
            // line 327
            echo "
                                                        ";
            // line 328
            $this->displayBlock("layout_footer_navigation_information_link_item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "                                                </ul>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 343
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        // line 344
        echo "        <div class=\"footer-bottom\">
            <div class=\"container\">
                ";
        // line 346
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 405
        echo "
                ";
        // line 407
        echo "                ";
        $this->displayBlock('zen_layout_footer_social_media_logos', $context, $blocks);
        // line 412
        echo "
                ";
        // line 413
        $this->displayBlock('zen_layout_footer_bottom_vat', $context, $blocks);
        // line 418
        echo "
                ";
        // line 419
        $this->displayBlock('zen_layout_footer_bottom_row', $context, $blocks);
        // line 451
        echo "            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 346
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        // line 347
        echo "                    <div class=\"footer-logos\">
                        ";
        // line 348
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 375
        echo "
                        ";
        // line 376
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 403
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 348
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        // line 349
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 349));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 350
            echo "                                ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 373
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 350
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        // line 351
        echo "                                    ";
        if (sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 351)) {
            // line 352
            echo "                                        <div class=\"footer-logo is-payment\">
                                            ";
            // line 353
            $context["attributes"] = ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 355
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 355), "translated", [], "any", false, false, false, 355), "alt", [], "any", false, false, false, 355)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 355), "translated", [], "any", false, false, false, 355), "alt", [], "any", false, false, false, 355)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 355), "name", [], "any", false, false, false, 355))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 356
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 356), "translated", [], "any", false, false, false, 356), "title", [], "any", false, false, false, 356)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 356), "translated", [], "any", false, false, false, 356), "title", [], "any", false, false, false, 356)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 356), "name", [], "any", false, false, false, 356)))];
            // line 358
            echo "
                                            ";
            // line 360
            echo "                                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.lazyloading")) {
                // line 361
                echo "                                                ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "lazy"]);
                // line 362
                echo "                                            ";
            }
            // line 363
            echo "
                                            ";
            // line 364
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 364);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 365
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 365), "sizes" => ["default" => "100px"], "name" => "footer-payment-image-thumbnails"]));
            // line 370
            echo "                                        </div>
                                    ";
        }
        // line 372
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 376
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        // line 377
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 377));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 378
            echo "                                ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 401
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 378
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        // line 379
        echo "                                    ";
        if (sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 379)) {
            // line 380
            echo "                                        <div class=\"footer-logo is-shipping\">
                                            ";
            // line 381
            $context["attributes"] = ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 383
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 383), "translated", [], "any", false, false, false, 383), "alt", [], "any", false, false, false, 383)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 383), "translated", [], "any", false, false, false, 383), "alt", [], "any", false, false, false, 383)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 383), "name", [], "any", false, false, false, 383))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 384
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 384), "translated", [], "any", false, false, false, 384), "title", [], "any", false, false, false, 384)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 384), "translated", [], "any", false, false, false, 384), "title", [], "any", false, false, false, 384)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 384), "name", [], "any", false, false, false, 384)))];
            // line 386
            echo "
                                            ";
            // line 388
            echo "                                            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.lazyloading")) {
                // line 389
                echo "                                                ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "lazy"]);
                // line 390
                echo "                                            ";
            }
            // line 391
            echo "
                                            ";
            // line 392
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 392);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 393
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 393), "sizes" => ["default" => "100px"], "name" => "footer-shipping-image-thumbnails"]));
            // line 398
            echo "                                        </div>
                                    ";
        }
        // line 400
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 407
    public function block_zen_layout_footer_social_media_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_social_media_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_social_media_logos"));

        // line 408
        echo "                    ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-social-position") === "bottom")) {
            // line 409
            echo "                        ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/component/footer/zen-footer-social.html.twig", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", 409)->display($context);
            // line 410
            echo "                    ";
        }
        // line 411
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 413
    public function block_zen_layout_footer_bottom_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_vat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_vat"));

        // line 414
        echo "                    ";
        if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-bottom-service-navigation") === false) &&  !twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 414), "serviceMenu", [], "any", false, false, false, 414), "elements", [], "any", false, false, false, 414)))) {
            // line 415
            echo "                        ";
            $this->displayBlock("layout_footer_vat", $context, $blocks);
            echo "
                    ";
        }
        // line 417
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 419
    public function block_zen_layout_footer_bottom_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_row"));

        // line 420
        echo "                    <div class=\"footer-bottom-row row align-items-center justify-content-between\">
                        ";
        // line 421
        $this->displayBlock('zen_layout_footer_bottom_left', $context, $blocks);
        // line 437
        echo "
                        ";
        // line 438
        $this->displayBlock('zen_layout_footer_bottom_right', $context, $blocks);
        // line 449
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 421
    public function block_zen_layout_footer_bottom_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_left"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_left"));

        // line 422
        echo "                            <div class=\"footer-bottom-left order-2 order-md-1 col-md-auto\">
                                ";
        // line 423
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 435
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 423
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        // line 424
        echo "                                    <div class=\"footer-copyright\">
                                        ";
        // line 425
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.general.copyright", ["%year%" => twig_date_format_filter($this->env, "now", "Y"), "%shopname%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "%love%" => "<span class=\"icon icon-heart icon-xs\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><path d=\"M16 29.104l-1.938-1.75c-6.875-6.25-11.375-10.313-11.375-15.375 0-4.125 3.188-7.313 7.313-7.313 2.313 0 4.563 1.125 6 2.813 1.438-1.688 3.688-2.813 6-2.813 4.125 0 7.313 3.188 7.313 7.313 0 5.063-4.5 9.188-11.375 15.438z\"></path></svg></span>", "%href%" => "https://themes.zenit.design", "%title%" => "Made with love by Zenit Design", "%name%" => "Zenit Design"]);
        // line 432
        echo "
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 438
    public function block_zen_layout_footer_bottom_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_bottom_right"));

        // line 439
        echo "                            <div class=\"footer-bottom-right order-1 order-md-2 col-md\">
                                ";
        // line 440
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 447
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 440
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        // line 441
        echo "                                    ";
        if (( !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-footer-bottom-service-navigation") === false) &&  !twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 441), "serviceMenu", [], "any", false, false, false, 441), "elements", [], "any", false, false, false, 441)))) {
            // line 442
            echo "                                        ";
            $this->displayBlock("layout_footer_service_menu_content", $context, $blocks);
            echo "
                                    ";
        } else {
            // line 444
            echo "                                        ";
            $this->displayBlock("layout_footer_vat", $context, $blocks);
            echo "
                                    ";
        }
        // line 446
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2093 => 446,  2087 => 444,  2081 => 442,  2078 => 441,  2068 => 440,  2057 => 447,  2055 => 440,  2052 => 439,  2042 => 438,  2030 => 432,  2028 => 425,  2025 => 424,  2015 => 423,  2004 => 435,  2002 => 423,  1999 => 422,  1989 => 421,  1978 => 449,  1976 => 438,  1973 => 437,  1971 => 421,  1968 => 420,  1958 => 419,  1948 => 417,  1942 => 415,  1939 => 414,  1929 => 413,  1919 => 411,  1916 => 410,  1913 => 409,  1910 => 408,  1900 => 407,  1890 => 400,  1886 => 398,  1884 => 393,  1877 => 392,  1874 => 391,  1871 => 390,  1868 => 389,  1865 => 388,  1862 => 386,  1860 => 384,  1859 => 383,  1858 => 381,  1855 => 380,  1852 => 379,  1842 => 378,  1832 => 402,  1818 => 401,  1815 => 378,  1797 => 377,  1787 => 376,  1777 => 372,  1773 => 370,  1771 => 365,  1764 => 364,  1761 => 363,  1758 => 362,  1755 => 361,  1752 => 360,  1749 => 358,  1747 => 356,  1746 => 355,  1745 => 353,  1742 => 352,  1739 => 351,  1729 => 350,  1719 => 374,  1705 => 373,  1702 => 350,  1684 => 349,  1674 => 348,  1663 => 403,  1661 => 376,  1658 => 375,  1656 => 348,  1653 => 347,  1643 => 346,  1631 => 451,  1629 => 419,  1626 => 418,  1624 => 413,  1621 => 412,  1618 => 407,  1615 => 405,  1613 => 346,  1609 => 344,  1599 => 343,  1588 => 330,  1572 => 328,  1569 => 327,  1566 => 326,  1563 => 325,  1546 => 324,  1543 => 323,  1533 => 322,  1521 => 332,  1519 => 322,  1514 => 320,  1510 => 319,  1505 => 318,  1495 => 317,  1481 => 313,  1475 => 310,  1470 => 309,  1466 => 308,  1461 => 307,  1455 => 305,  1453 => 304,  1448 => 302,  1443 => 300,  1438 => 299,  1428 => 298,  1417 => 335,  1415 => 317,  1412 => 316,  1410 => 298,  1407 => 297,  1404 => 296,  1401 => 295,  1398 => 294,  1388 => 291,  1378 => 290,  1368 => 338,  1354 => 337,  1351 => 290,  1333 => 289,  1323 => 288,  1310 => 280,  1308 => 278,  1301 => 274,  1294 => 270,  1291 => 269,  1281 => 268,  1269 => 262,  1251 => 261,  1247 => 259,  1229 => 258,  1225 => 256,  1215 => 255,  1204 => 265,  1202 => 255,  1198 => 254,  1186 => 248,  1176 => 247,  1166 => 240,  1162 => 238,  1160 => 237,  1157 => 236,  1154 => 235,  1152 => 234,  1142 => 233,  1132 => 286,  1128 => 284,  1126 => 268,  1123 => 267,  1121 => 247,  1118 => 246,  1115 => 245,  1112 => 244,  1109 => 243,  1106 => 241,  1104 => 233,  1101 => 232,  1098 => 231,  1095 => 230,  1092 => 229,  1083 => 227,  1080 => 226,  1070 => 225,  1056 => 217,  1050 => 214,  1047 => 213,  1037 => 212,  1025 => 206,  1007 => 205,  1003 => 203,  985 => 202,  981 => 200,  971 => 199,  960 => 209,  958 => 199,  953 => 197,  943 => 191,  933 => 190,  923 => 223,  919 => 221,  917 => 212,  914 => 211,  912 => 190,  909 => 189,  906 => 188,  903 => 187,  900 => 186,  891 => 183,  888 => 182,  886 => 176,  883 => 175,  880 => 174,  870 => 173,  858 => 166,  856 => 165,  850 => 162,  847 => 161,  837 => 160,  825 => 154,  807 => 153,  803 => 151,  785 => 150,  781 => 148,  771 => 147,  760 => 157,  758 => 147,  754 => 146,  742 => 140,  732 => 139,  722 => 132,  718 => 130,  716 => 129,  713 => 128,  710 => 127,  708 => 126,  698 => 125,  688 => 171,  684 => 169,  682 => 160,  679 => 159,  677 => 139,  674 => 138,  671 => 137,  668 => 136,  665 => 135,  662 => 133,  660 => 125,  657 => 124,  654 => 123,  651 => 122,  648 => 121,  639 => 119,  636 => 118,  626 => 117,  614 => 109,  612 => 105,  606 => 102,  603 => 101,  593 => 100,  581 => 94,  563 => 93,  559 => 91,  541 => 90,  537 => 88,  527 => 87,  516 => 97,  514 => 87,  510 => 86,  498 => 80,  488 => 79,  478 => 72,  474 => 70,  472 => 69,  469 => 68,  466 => 67,  464 => 66,  454 => 65,  444 => 115,  439 => 112,  437 => 100,  434 => 99,  432 => 79,  429 => 78,  426 => 77,  423 => 76,  420 => 75,  417 => 73,  415 => 65,  403 => 63,  400 => 62,  390 => 61,  380 => 59,  375 => 56,  373 => 55,  363 => 53,  360 => 52,  350 => 51,  338 => 339,  336 => 288,  333 => 287,  331 => 225,  328 => 224,  326 => 173,  323 => 172,  321 => 117,  318 => 116,  316 => 61,  313 => 60,  311 => 51,  302 => 47,  298 => 45,  288 => 44,  278 => 32,  274 => 30,  272 => 29,  269 => 28,  266 => 27,  264 => 26,  254 => 25,  244 => 42,  238 => 38,  236 => 34,  233 => 33,  231 => 25,  224 => 22,  221 => 21,  211 => 20,  201 => 343,  198 => 342,  196 => 44,  193 => 43,  191 => 20,  188 => 19,  185 => 18,  182 => 17,  179 => 16,  176 => 15,  166 => 14,  154 => 10,  136 => 9,  132 => 7,  114 => 6,  110 => 4,  100 => 3,  77 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/footer/footer.html.twig' %}

{% block layout_footer_navigation_information_icons %}
    <div class=\"footer-column-toggle\">
        <span class=\"footer-plus-icon\">
            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'plus' %}{% else %}{% sw_icon 'arrow-head-down' style {'size': 'sm'} %}{% endif %}
        </span>
        <span class=\"footer-minus-icon\">
            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'minus' %}{% else %}{% sw_icon 'arrow-head-up' style {'size': 'sm'} %}{% endif %}
        </span>
    </div>
{% endblock %}

{% block layout_footer_inner_container %}
    {% if theme_config('zen-footer-logo-position') is same as ('newsletter') %}
        {% set newsletterHiddenClass = 'd-md-none' %}
        {% set newsletterFooterLogoClass = 'newsletter-footer-logo' %}
    {% endif %}

    {% block zen_layout_footer_newsletter %}
        {% if theme_config('zen-footer-newsletter-position') is same as ('prepend') %}
            <div class=\"footer-newsletter newsletter-fullwidth {{ newsletterFooterLogoClass }}\">
                <div class=\"container\">

                    {% block zen_layout_footer_newsletter_logo %}
                        {# footer logo #}
                        {% if theme_config('zen-footer-logo-position') is same as ('newsletter') %}
                            <div class=\"footer-logo\">
                                {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig' %}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig' with {
                        action: 'frontend.form.newsletter.register.handle',
                        submitText: 'newsletter.formSubmit'
                    } %}

                </div>
            </div>
        {% endif %}
    {% endblock %}

    {% block layout_footer_navigation %}
        <div class=\"container\">
            <div id=\"footerColumns\"
                 class=\"row footer-columns{% if theme_config('zen-footer-col-headline-font-align') is same as ('center') and theme_config('zen-footer-col-font-align') is same as ('center') %} justify-content-center{% endif %}\"
                 data-collapse-footer=\"true\"
                 role=\"list\">

                {% block zen_layout_footer_navigation_logo %}
                    {% if theme_config('zen-footer-logo-position') is same as ('column') %}
                        <div class=\"{{ theme_config('zen-footer-logo-col') }} {{ theme_config('zen-footer-logo-col-xl') }} order-{{ theme_config('zen-footer-logo-order') }} footer-column footer-logo-column\">
                            <div class=\"footer-logo-column-inner\">
                                {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig' %}
                            </div>
                        </div>
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_navigation_newsletter %}
                    {% if theme_config('zen-footer-newsletter-position') is same as ('column') %}
                        <div class=\"{{ theme_config('zen-footer-newsletter-col') }} {{ theme_config('zen-footer-newsletter-col-xl') }} order-{{ theme_config('zen-footer-newsletter-order') }} footer-column js-footer-column footer-newsletter-column footer-newsletter {{ newsletterFooterLogoClass }}\">

                            {% block zen_layout_footer_navigation_newsletter_headline_logo %}
                                {# footer logo #}
                                {% if theme_config('zen-footer-logo-position') is same as ('newsletter') %}
                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig' %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {# showClass #}
                            {% if theme_config('zen-footer-newsletter-collapse-state') %}
                                {% set newsletterShowClass = 'show' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_newsletter_headline %}
                                <div class=\"{{ newsletterHiddenClass }} footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger {{ newsletterShowClass }}\"
                                     id=\"collapseFooterNewsletterTitle\"
                                     data-target=\"#collapseFooterNewsletter\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterNewsletter\"
                                     role=\"listitem\">
                                    {{ 'zentheme.footer.newsletterHeadline'|trans|sw_sanitize }}
                                    {% block zen_layout_footer_navigation_newsletter_icons %}
                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'plus' %}{% else %}{% sw_icon 'arrow-head-down' style {'size': 'sm'} %}{% endif %}
                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'minus' %}{% else %}{% sw_icon 'arrow-head-up' style {'size': 'sm'} %}{% endif %}
                                            </span>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block zen_layout_footer_navigation_newsletter_content %}
                                <div id=\"collapseFooterNewsletter\"
                                     class=\"footer-column-content collapse js-footer-column-content {{ newsletterShowClass }}\"
                                     aria-labelledby=\"collapseFooterNewsletterTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig' with {
                                            action: 'frontend.form.newsletter.register.handle',
                                            submitText: 'newsletter.formSubmit'
                                        }%}
                                    </div>
                                </div>
                            {% endblock %}

                        </div>
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_navigation_social %}
                    {% if theme_config('zen-footer-social-position') is same as ('column') %}
                        <div class=\"{{ theme_config('zen-footer-social-col') }} {{ theme_config('zen-footer-social-col-xl') }} order-{{ theme_config('zen-footer-social-order') }} footer-column js-footer-column footer-social-column\">
                            {# footer logo #}
                            {% if theme_config('zen-footer-logo-position') is same as ('social') %}
                                {% set socialHiddenClass = 'd-md-none' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_social_headline_logo %}
                                {# footer logo #}
                                {% if theme_config('zen-footer-logo-position') is same as ('social') %}
                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig' %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {# showClass #}
                            {% if theme_config('zen-footer-social-collapse-state') %}
                                {% set socialShowClass = 'show' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_social_headline %}
                                <div class=\"{{ socialHiddenClass }} footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger {{ socialShowClass }}\"
                                     id=\"collapseFooterSocialTitle\"
                                     data-target=\"#collapseFooterSocial\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterSocial\"
                                     role=\"listitem\">
                                    {{ 'zentheme.footer.socialMediaHeadline'|trans|sw_sanitize }}
                                    {% block zen_layout_footer_navigation_social_icons %}
                                        <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'plus' %}{% else %}{% sw_icon 'arrow-head-down' style {'size': 'sm'} %}{% endif %}
                                        </span>
                                            <span class=\"footer-minus-icon\">
                                            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'minus' %}{% else %}{% sw_icon 'arrow-head-up' style {'size': 'sm'} %}{% endif %}
                                        </span>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block zen_layout_footer_navigation_social_content %}
                                <div id=\"collapseFooterSocial\"
                                     class=\"footer-column-content collapse js-footer-column-content {{ socialShowClass }}\"
                                     aria-labelledby=\"collapseFooterSocialTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-social.html.twig' %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_navigation_custom %}
                    {% if config('zenitPlatformStratus.config.customColumnActive') and config('zenitPlatformStratus.config.customColumnTitle') and config('zenitPlatformStratus.config.customColumnText') %}

                        {% set customColumn = {
                            'translated': {
                                title: \"zentheme.stratus.content.customColumnTitle\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.customColumnTitle')}),
                                text: \"zentheme.stratus.content.customColumnText\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.customColumnText')})
                            }
                        } %}

                        <div class=\"{{ theme_config('zen-footer-custom-col') }} {{ theme_config('zen-footer-custom-col-xl') }} order-{{ theme_config('zen-footer-custom-order') }} footer-column js-footer-column footer-custom-column\">

                            {# showClass #}
                            {% if theme_config('zen-footer-custom-collapse-state') %}
                                {% set customShowClass = 'show' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_custom_headline %}
                                <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger {{ customShowClass }}\"
                                     id=\"collapseFooterCustomTitle\"
                                     data-target=\"#collapseFooterCustom\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterCustom\"
                                     role=\"listitem\">
                                    {{ customColumn.translated.title }}

                                    {% block zen_layout_footer_navigation_custom_icons %}
                                        <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'plus' %}{% else %}{% sw_icon 'arrow-head-down' style {'size': 'sm'} %}{% endif %}
                                        </span>
                                            <span class=\"footer-minus-icon\">
                                            {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'minus' %}{% else %}{% sw_icon 'arrow-head-up' style {'size': 'sm'} %}{% endif %}
                                        </span>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block zen_layout_footer_navigation_custom_content %}
                                <div id=\"collapseFooterCustom\"
                                     class=\"footer-column-content collapse js-footer-column-content {{ customShowClass }}\"
                                     aria-labelledby=\"collapseFooterCustomTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        {{ customColumn.translated.text|raw }}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_navigation_hotline %}
                    {% if theme_config('zen-footer-hotline-position') is same as ('column') %}
                        <div class=\"{{ theme_config('zen-footer-hotline-col') }} {{ theme_config('zen-footer-hotline-col-xl') }} order-{{ theme_config('zen-footer-hotline-order') }} footer-column js-footer-column footer-hotline-column\">
                            {# footer logo #}
                            {% if theme_config('zen-footer-logo-position') is same as ('hotline') %}
                                {% set hotlineHiddenClass = 'd-md-none' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_hotline_headline_logo %}
                                {# footer logo #}
                                {% if theme_config('zen-footer-logo-position') is same as ('hotline') %}
                                    <div class=\"footer-column-headline footer-headline footer-logo\">
                                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig' %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {# showClass #}
                            {% if theme_config('zen-footer-hotline-collapse-state') %}
                                {% set hotlineShowClass = 'show' %}
                            {% endif %}

                            {% block zen_layout_footer_navigation_hotline_headline %}
                                <div class=\"{{ hotlineHiddenClass }} footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger {{ hotlineShowClass }}\"
                                     id=\"collapseFooterHotlineTitle\"
                                     data-target=\"#collapseFooterHotline\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooterHotline\"
                                     role=\"listitem\">
                                    {{ 'footer.serviceHotlineHeadline'|trans|sw_sanitize }}
                                    {% block zen_layout_footer_navigation_hotline_icons %}
                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'plus' %}{% else %}{% sw_icon 'arrow-head-down' style {'size': 'sm'} %}{% endif %}
                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                {% if theme_config('zen-footer-col-headline-icon') is same as ('plusminus') %}{% sw_icon 'minus' %}{% else %}{% sw_icon 'arrow-head-up' style {'size': 'sm'} %}{% endif %}
                                            </span>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block zen_layout_footer_navigation_hotline_content %}
                                <div id=\"collapseFooterHotline\"
                                     class=\"footer-column-content collapse js-footer-column-content {{ hotlineShowClass }}\"
                                     aria-labelledby=\"collapseFooterHotlineTitle\">
                                    <div class=\"footer-column-content-inner\">
                                        <p class=\"footer-contact-hotline\">
                                            {{ 'footer.serviceHotline'|trans|sw_sanitize }}
                                        </p>
                                    </div>
                                    <div class=\"footer-contact-form\">
                                        {{ 'footer.serviceContactLink'|trans({
                                            '%url%': path('frontend.cms.page', { id: config('core.basicInformation.contactPage') })
                                        })|raw }}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block layout_footer_navigation_columns %}
                    {% for root in page.footer.navigation.tree %}
                        {% block layout_footer_navigation_column %}
                            <div class=\"{{ theme_config('zen-footer-navigation-col') }} {{ theme_config('zen-footer-navigation-col-xl') }} order-{{ theme_config('zen-footer-navigation-order') }} footer-column js-footer-column\">

                                {# showClass #}
                                {% if theme_config('zen-footer-navigation-collapse-state') %}
                                    {% set navigationShowClass = 'show' %}
                                {% endif %}

                                {% block layout_footer_navigation_information_headline %}
                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger {{ navigationShowClass }}\"
                                         data-target=\"#collapseFooterTitle{{ loop.index }}\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter{{ loop.index }}\">

                                        {% if root.category.type == 'folder' %}
                                            {{ root.category.translated.name }}
                                        {% else %}
                                            <a href=\"{{ category_url(root.category) }}\"
                                               {% if category_linknewtab(root.category) %}target=\"_blank\"{% endif %}
                                               title=\"{{ root.category.translated.name }}\">
                                                {{ root.category.translated.name }}
                                            </a>
                                        {% endif %}
                                        {{ block('layout_footer_navigation_information_icons') }}
                                    </div>
                                {% endblock %}

                                {% block layout_footer_navigation_information_content %}
                                    <div id=\"collapseFooter{{ loop.index }}\"
                                         class=\"footer-column-content collapse js-footer-column-content {{ navigationShowClass }}\"
                                         aria-labelledby=\"collapseFooterTitle{{ loop.index }}\">
                                        <div class=\"footer-column-content-inner\">
                                            {% block layout_footer_navigation_information_links %}
                                                <ul class=\"list-unstyled\">
                                                    {% for treeItem in root.children %}
                                                        {% set category = treeItem.category %}
                                                        {% set name = category.translated.name %}

                                                        {{ block('layout_footer_navigation_information_link_item') }}
                                                    {% endfor %}
                                                </ul>
                                            {% endblock %}
                                        </div>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block layout_footer_bottom %}
        <div class=\"footer-bottom\">
            <div class=\"container\">
                {% block layout_footer_payment_shipping_logos %}
                    <div class=\"footer-logos\">
                        {% block layout_footer_payment_logos %}
                            {% for paymentMethod in page.salesChannelPaymentMethods %}
                                {% block layout_footer_payment_logo %}
                                    {% if paymentMethod.media %}
                                        <div class=\"footer-logo is-payment\">
                                            {% set attributes = {
                                                'class': 'img-fluid footer-logo-image',
                                                'alt': (paymentMethod.media.translated.alt ?: paymentMethod.translated.name),
                                                'title': (paymentMethod.media.translated.title ?: paymentMethod.translated.name)
                                            } %}

                                            {# ... enables lazy loading for images #}
                                            {% if config('zenitPlatformStratus.config.lazyloading') %}
                                                {% set attributes = attributes|merge({ 'loading': 'lazy' }) %}
                                            {% endif %}

                                            {% sw_thumbnails 'footer-payment-image-thumbnails' with {
                                                media: paymentMethod.media,
                                                sizes: {
                                                    'default': '100px'
                                                }
                                            } %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endfor %}
                        {% endblock %}

                        {% block layout_footer_shipping_logos %}
                            {% for shippingMethod in page.salesChannelShippingMethods %}
                                {% block layout_footer_shipping_logo %}
                                    {% if shippingMethod.media %}
                                        <div class=\"footer-logo is-shipping\">
                                            {% set attributes = {
                                                'class': 'img-fluid footer-logo-image',
                                                'alt': (shippingMethod.media.translated.alt ?: shippingMethod.translated.name),
                                                'title': (shippingMethod.media.translated.title ?: shippingMethod.translated.name)
                                            } %}

                                            {# ... enables lazy loading for images #}
                                            {% if config('zenitPlatformStratus.config.lazyloading') %}
                                                {% set attributes = attributes|merge({ 'loading': 'lazy' }) %}
                                            {% endif %}

                                            {% sw_thumbnails 'footer-shipping-image-thumbnails' with {
                                                media: shippingMethod.media,
                                                sizes: {
                                                    'default': '100px'
                                                }
                                            } %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endfor %}
                        {% endblock %}
                    </div>
                {% endblock %}

                {# Social Media Icons #}
                {% block zen_layout_footer_social_media_logos %}
                    {% if theme_config('zen-footer-social-position') is same as ('bottom') %}
                        {% sw_include '@zenitPlatformStratus/storefront/component/footer/zen-footer-social.html.twig' %}
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_bottom_vat %}
                    {% if theme_config('zen-footer-bottom-service-navigation') is not same as (false) and page.header.serviceMenu.elements is not empty %}
                        {{ block('layout_footer_vat') }}
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_bottom_row %}
                    <div class=\"footer-bottom-row row align-items-center justify-content-between\">
                        {% block zen_layout_footer_bottom_left %}
                            <div class=\"footer-bottom-left order-2 order-md-1 col-md-auto\">
                                {% block layout_footer_copyright %}
                                    <div class=\"footer-copyright\">
                                        {{ 'zentheme.general.copyright'|trans({
                                            '%year%': 'now'|date('Y'),
                                            '%shopname%': config('core.basicInformation.shopName'),
                                            '%love%': '<span class=\"icon icon-heart icon-xs\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><path d=\"M16 29.104l-1.938-1.75c-6.875-6.25-11.375-10.313-11.375-15.375 0-4.125 3.188-7.313 7.313-7.313 2.313 0 4.563 1.125 6 2.813 1.438-1.688 3.688-2.813 6-2.813 4.125 0 7.313 3.188 7.313 7.313 0 5.063-4.5 9.188-11.375 15.438z\"></path></svg></span>',
                                            '%href%': 'https://themes.zenit.design',
                                            '%title%': 'Made with love by Zenit Design',
                                            '%name%': 'Zenit Design'
                                        })|raw }}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block zen_layout_footer_bottom_right %}
                            <div class=\"footer-bottom-right order-1 order-md-2 col-md\">
                                {% block layout_footer_service_menu %}
                                    {% if theme_config('zen-footer-bottom-service-navigation') is not same as (false) and page.header.serviceMenu.elements is not empty %}
                                        {{ block('layout_footer_service_menu_content') }}
                                    {% else %}
                                        {{ block('layout_footer_vat') }}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    {% endblock %}
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/footer/footer.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
