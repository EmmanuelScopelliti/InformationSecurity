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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_6c6cfdeea9219cc1f1afb549bce882f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/footer/footer.html.twig"));

        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        // line 2
        echo "    <div class=\"container\">

        ";
        // line 4
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 125
        echo "
        ";
        // line 126
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 173
        echo "
    </div>

    ";
        // line 176
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        // line 5
        echo "            <div id=\"footerColumns\"
                 class=\"row footer-columns\"
                 data-collapse-footer=\"true\"
                 role=\"list\">
                ";
        // line 9
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 50
        echo "
                ";
        // line 51
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 123
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline"));

        // line 10
        echo "                    <div class=\"col-md-4 footer-column js-footer-column\">
                        ";
        // line 11
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 31
        echo "
                        ";
        // line 32
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 48
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_headline"));

        // line 12
        echo "                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 ";
        // line 14
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                ";
        // line 18
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                                ";
        // line 19
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 29
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_icons"));

        // line 20
        echo "                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 22);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 23
        echo "                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            ";
        // line 25
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 25);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 26
        echo "                                        </span>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_content"));

        // line 33
        echo "                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        ";
        // line 38
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 44
        echo "
                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        // line 52
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 52), "navigation", [], "any", false, false, false, 52), "tree", [], "any", false, false, false, 52));
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
            // line 53
            echo "                        ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 121
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
        // line 122
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        // line 54
        echo "                            <div class=\"col-md-4 footer-column js-footer-column\">
                                ";
        // line 55
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 82
        echo "
                                ";
        // line 83
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 119
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        // line 56
        echo "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         ";
        // line 57
        echo sw_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterTitle";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 57), "html", null, true);
        echo "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 59
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 59), "html", null, true);
        echo "\">

                                        ";
        // line 61
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) == "folder")) {
            // line 62
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 62), "translated", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                        ";
        } else {
            // line 64
            echo "                                            <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 64));
            echo "\"
                                               ";
            // line 65
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 65))) {
                echo "target=\"_blank\"";
            }
            // line 66
            echo "                                               title=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 66), "translated", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                                                ";
            // line 67
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 67), "translated", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        // line 70
        echo "                                        ";
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 80
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        // line 71
        echo "                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    ";
        // line 73
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 73);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 74
        echo "                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    ";
        // line 76
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 76);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 77
        echo "                                                </span>
                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        // line 84
        echo "                                    <div id=\"collapseFooter";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 84), "html", null, true);
        echo "\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 86
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 88
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 116
        echo "                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        // line 89
        echo "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 90));
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
            // line 91
            echo "                                                        ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 91);
            // line 92
            echo "                                                        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92);
            // line 93
            echo "
                                                        ";
            // line 95
            echo "                                                        ";
            $context["externalLink"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 95), "externalLink", [], "any", false, false, false, 95);
            // line 96
            echo "
                                                        ";
            // line 97
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 113
            echo "                                                    ";
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
        // line 114
        echo "                                                </ul>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link_item"));

        // line 98
        echo "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 99
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 111
        echo "                                                            </li>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link"));

        // line 100
        echo "                                                                    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 100) == "folder")) {
            // line 101
            echo "                                                                        <div>";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                                                    ";
        } else {
            // line 103
            echo "                                                                        <a class=\"footer-link\"
                                                                           href=\"";
            // line 104
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                                                           ";
            // line 105
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 106
            echo "                                                                           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                                                            ";
            // line 107
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
                                                                        </a>
                                                                    ";
        }
        // line 110
        echo "                                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        // line 127
        echo "            <div class=\"footer-logos\">
                ";
        // line 128
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 149
        echo "
                ";
        // line 150
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 171
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        // line 129
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 129));
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
            // line 130
            echo "                        ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 147
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        // line 131
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 131)) {
            // line 132
            echo "                                <div class=\"footer-logo is-payment\">
                                    ";
            // line 133
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 133);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 134
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 134), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 140
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 140), "translated", [], "any", false, false, false, 140), "alt", [], "any", false, false, false, 140)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 140), "translated", [], "any", false, false, false, 140), "alt", [], "any", false, false, false, 140)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 141
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 141), "translated", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 141), "translated", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)))], "name" => "footer-payment-image-thumbnails"]));
            // line 144
            echo "                                </div>
                            ";
        }
        // line 146
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 150
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        // line 151
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 151));
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
            // line 152
            echo "                        ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 169
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 152
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        // line 153
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 153)) {
            // line 154
            echo "                                <div class=\"footer-logo is-shipping\">
                                    ";
            // line 155
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 155);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 156
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 156), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 162
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 162), "translated", [], "any", false, false, false, 162), "alt", [], "any", false, false, false, 162)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 162), "translated", [], "any", false, false, false, 162), "alt", [], "any", false, false, false, 162)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 163
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 163), "translated", [], "any", false, false, false, 163), "title", [], "any", false, false, false, 163)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 163), "translated", [], "any", false, false, false, 163), "title", [], "any", false, false, false, 163)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 163), "name", [], "any", false, false, false, 163)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 166
            echo "                                </div>
                            ";
        }
        // line 168
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 176
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        // line 177
        echo "        <div class=\"footer-bottom\">
            ";
        // line 178
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 200
        echo "
            ";
        // line 201
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 218
        echo "
            ";
        // line 219
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 225
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        // line 179
        echo "                <div class=\"container\">
                    ";
        // line 180
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 198
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 180
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_content"));

        // line 181
        echo "                        ";
        ob_start();
        // line 182
        echo "                            <ul class=\"footer-service-menu-list list-unstyled\">
                                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 183), "serviceMenu", [], "any", false, false, false, 183));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 184
            echo "                                    ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 194
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                            </ul>
                        ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        echo twig_spaceless($___internal_parse_3_);
        // line 197
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 184
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_item"));

        // line 185
        echo "                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"";
        // line 187
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["serviceMenuItem"] ?? null));
        echo "\"
                                               ";
        // line 188
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["serviceMenuItem"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 189
        echo "                                               title=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 189), "name", [], "any", false, false, false, 189), "html", null, true);
        echo "\">
                                                ";
        // line 190
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 201
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_vat"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_vat"));

        // line 202
        echo "                <div class=\"footer-vat\">
                    ";
        // line 203
        if ((sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 203) == "gross")) {
            // line 204
            echo "                        <p>
                            ";
            // line 205
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 207
            echo "
                        </p>
                    ";
        } else {
            // line 210
            echo "                        <p>
                            ";
            // line 211
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 213
            echo "
                        </p>
                    ";
        }
        // line 216
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        // line 220
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 221
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 221);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 222
        echo "                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1143 => 222,  1135 => 221,  1132 => 220,  1122 => 219,  1111 => 216,  1106 => 213,  1104 => 211,  1101 => 210,  1096 => 207,  1094 => 205,  1091 => 204,  1089 => 203,  1086 => 202,  1076 => 201,  1062 => 190,  1057 => 189,  1053 => 188,  1049 => 187,  1045 => 185,  1035 => 184,  1025 => 197,  1023 => 181,  1019 => 195,  1005 => 194,  1002 => 184,  985 => 183,  982 => 182,  979 => 181,  969 => 180,  958 => 198,  956 => 180,  953 => 179,  943 => 178,  932 => 225,  930 => 219,  927 => 218,  925 => 201,  922 => 200,  920 => 178,  917 => 177,  907 => 176,  897 => 168,  893 => 166,  891 => 163,  890 => 162,  889 => 156,  882 => 155,  879 => 154,  876 => 153,  866 => 152,  856 => 170,  842 => 169,  839 => 152,  821 => 151,  811 => 150,  801 => 146,  797 => 144,  795 => 141,  794 => 140,  793 => 134,  786 => 133,  783 => 132,  780 => 131,  770 => 130,  760 => 148,  746 => 147,  743 => 130,  725 => 129,  715 => 128,  704 => 171,  702 => 150,  699 => 149,  697 => 128,  694 => 127,  684 => 126,  674 => 110,  668 => 107,  663 => 106,  659 => 105,  655 => 104,  652 => 103,  646 => 101,  643 => 100,  633 => 99,  622 => 111,  620 => 99,  617 => 98,  607 => 97,  596 => 114,  582 => 113,  580 => 97,  577 => 96,  574 => 95,  571 => 93,  568 => 92,  565 => 91,  548 => 90,  545 => 89,  535 => 88,  523 => 116,  521 => 88,  516 => 86,  510 => 84,  500 => 83,  488 => 77,  480 => 76,  476 => 74,  468 => 73,  464 => 71,  454 => 70,  443 => 80,  440 => 70,  434 => 67,  429 => 66,  425 => 65,  420 => 64,  414 => 62,  412 => 61,  407 => 59,  400 => 57,  397 => 56,  387 => 55,  376 => 119,  374 => 83,  371 => 82,  369 => 55,  366 => 54,  356 => 53,  346 => 122,  332 => 121,  329 => 53,  311 => 52,  301 => 51,  288 => 44,  286 => 42,  279 => 38,  272 => 33,  262 => 32,  250 => 26,  242 => 25,  238 => 23,  230 => 22,  226 => 20,  216 => 19,  205 => 29,  203 => 19,  199 => 18,  192 => 14,  188 => 12,  178 => 11,  167 => 48,  165 => 32,  162 => 31,  160 => 11,  157 => 10,  147 => 9,  136 => 123,  134 => 51,  131 => 50,  129 => 9,  123 => 5,  113 => 4,  103 => 176,  98 => 173,  96 => 126,  93 => 125,  91 => 4,  87 => 2,  68 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_footer_inner_container %}
    <div class=\"container\">

        {% block layout_footer_navigation %}
            <div id=\"footerColumns\"
                 class=\"row footer-columns\"
                 data-collapse-footer=\"true\"
                 role=\"list\">
                {% block layout_footer_navigation_hotline %}
                    <div class=\"col-md-4 footer-column js-footer-column\">
                        {% block layout_footer_navigation_hotline_headline %}
                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 {{ dataBsTargetAttr }}=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                {{ 'footer.serviceHotlineHeadline'|trans|sw_sanitize }}
                                {% block layout_footer_navigation_hotline_icons %}
                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            {% sw_icon 'plus' %}
                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            {% sw_icon 'minus' %}
                                        </span>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block layout_footer_navigation_hotline_content %}
                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
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
                {% endblock %}

                {% block layout_footer_navigation_columns %}
                    {% for root in page.footer.navigation.tree %}
                        {% block layout_footer_navigation_column %}
                            <div class=\"col-md-4 footer-column js-footer-column\">
                                {% block layout_footer_navigation_information_headline %}
                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         {{ dataBsTargetAttr }}=\"#collapseFooterTitle{{ loop.index }}\"
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
                                        {% block layout_footer_navigation_information_icons %}
                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    {% sw_icon 'plus' %}
                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    {% sw_icon 'minus' %}
                                                </span>
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block layout_footer_navigation_information_content %}
                                    <div id=\"collapseFooter{{ loop.index }}\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle{{ loop.index }}\">
                                        <div class=\"footer-column-content-inner\">
                                            {% block layout_footer_navigation_information_links %}
                                                <ul class=\"list-unstyled\">
                                                    {% for treeItem in root.children %}
                                                        {% set category = treeItem.category %}
                                                        {% set name = category.translated.name %}

                                                        {# @deprecated tag:v6.5.0 - Use \"category.translated.externalLink\" directly or category_url function instead. #}
                                                        {% set externalLink = category.translated.externalLink %}

                                                        {% block layout_footer_navigation_information_link_item %}
                                                            <li class=\"footer-link-item\">
                                                                {% block layout_footer_navigation_information_link %}
                                                                    {% if category.type == 'folder' %}
                                                                        <div>{{ name }}</div>
                                                                    {% else %}
                                                                        <a class=\"footer-link\"
                                                                           href=\"{{ category_url(category) }}\"
                                                                           {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                                                           title=\"{{ name }}\">
                                                                            {{ name }}
                                                                        </a>
                                                                    {% endif %}
                                                                {% endblock %}
                                                            </li>
                                                        {% endblock %}
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
        {% endblock %}

        {% block layout_footer_payment_shipping_logos %}
            <div class=\"footer-logos\">
                {% block layout_footer_payment_logos %}
                    {% for paymentMethod in page.salesChannelPaymentMethods %}
                        {% block layout_footer_payment_logo %}
                            {% if paymentMethod.media %}
                                <div class=\"footer-logo is-payment\">
                                    {% sw_thumbnails 'footer-payment-image-thumbnails' with {
                                        media: paymentMethod.media,
                                        sizes: {
                                            'default': '100px'
                                        },
                                        attributes: {
                                            'class': 'img-fluid footer-logo-image',
                                            'alt': (paymentMethod.media.translated.alt ?: paymentMethod.translated.name),
                                            'title': (paymentMethod.media.translated.title ?: paymentMethod.translated.name)
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
                                    {% sw_thumbnails 'footer-shipping-image-thumbnails' with {
                                        media: shippingMethod.media,
                                        sizes: {
                                            'default': '100px'
                                        },
                                        attributes: {
                                            'class': 'img-fluid footer-logo-image',
                                            'alt': (shippingMethod.media.translated.alt ?: shippingMethod.translated.name),
                                            'title': (shippingMethod.media.translated.title ?: shippingMethod.translated.name)
                                        }
                                    } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}

    </div>

    {% block layout_footer_bottom %}
        <div class=\"footer-bottom\">
            {% block layout_footer_service_menu %}
                <div class=\"container\">
                    {% block layout_footer_service_menu_content %}
                        {% apply spaceless %}
                            <ul class=\"footer-service-menu-list list-unstyled\">
                                {% for serviceMenuItem in page.header.serviceMenu %}
                                    {% block layout_footer_service_menu_item %}
                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"{{ category_url(serviceMenuItem) }}\"
                                               {% if category_linknewtab(serviceMenuItem) %}target=\"_blank\"{% endif %}
                                               title=\"{{ serviceMenuItem.translated.name }}\">
                                                {{ serviceMenuItem.translated.name }}
                                            </a>
                                        </li>
                                    {% endblock %}
                                {% endfor %}
                            </ul>
                        {% endapply %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block layout_footer_vat %}
                <div class=\"footer-vat\">
                    {% if context.taxState == \"gross\" %}
                        <p>
                            {{ \"footer.includeVat\"|trans({
                                '%url%': path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') })
                            })|raw }}
                        </p>
                    {% else %}
                        <p>
                            {{ \"footer.excludeVat\"|trans({
                                '%url%': path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') })
                            })|raw }}
                        </p>
                    {% endif %}
                </div>
            {% endblock %}

            {% block layout_footer_copyright %}
                <div class=\"footer-copyright\">
                    {% sw_icon 'shopware' style {'size':'xs'} %}
                    {{ \"footer.copyrightInfo\"|trans|sw_sanitize }}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/footer/footer.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
