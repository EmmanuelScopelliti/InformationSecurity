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

/* @Storefront/storefront/layout/header/actions/currency-widget.html.twig */
class __TwigTemplate_c033af75a000233134fb99c27fc64e95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_currency_widget' => [$this, 'block_layout_header_actions_currency_widget'],
            'layout_header_actions_currency_widget_form' => [$this, 'block_layout_header_actions_currency_widget_form'],
            'layout_header_actions_currency_widget_form_csrf' => [$this, 'block_layout_header_actions_currency_widget_form_csrf'],
            'layout_header_actions_currency_widget_content' => [$this, 'block_layout_header_actions_currency_widget_content'],
            'layout_header_actions_currency_widget_dropdown_toggle' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle'],
            'layout_header_actions_currency_widget_dropdown_toggle_name' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle_name'],
            'layout_header_actions_currency_widget_form_items' => [$this, 'block_layout_header_actions_currency_widget_form_items'],
            'layout_header_actions_currency_widget_form_items_element' => [$this, 'block_layout_header_actions_currency_widget_form_items_element'],
            'layout_header_actions_currency_widget_form_items_element_label' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_label'],
            'layout_header_actions_currency_widget_form_items_element_input' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_input'],
            'layout_header_actions_currency_widget_form_redirect' => [$this, 'block_layout_header_actions_currency_widget_form_redirect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_currency_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_currency_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget"));

        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "currencies", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-currency\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_currency_widget_form', $context, $blocks);
            // line 77
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_layout_header_actions_currency_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 15
        echo "                    ";
        $this->displayBlock('layout_header_actions_currency_widget_form_csrf', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('layout_header_actions_currency_widget_content', $context, $blocks);
        // line 75
        echo "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_layout_header_actions_currency_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_csrf"));

        // line 16
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_header_actions_currency_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_content"));

        // line 20
        echo "                        <div class=\"currencies-menu dropdown\">
                            ";
        // line 21
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle', $context, $blocks);
        // line 34
        echo "
                            ";
        // line 35
        $this->displayBlock('layout_header_actions_currency_widget_form_items', $context, $blocks);
        // line 61
        echo "
                            ";
        // line 62
        $this->displayBlock('layout_header_actions_currency_widget_form_redirect', $context, $blocks);
        // line 73
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_layout_header_actions_currency_widget_dropdown_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle"));

        // line 22
        echo "                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-";
        // line 24
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                        ";
        // line 25
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    ";
        // line 28
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle_name', $context, $blocks);
        // line 32
        echo "                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_layout_header_actions_currency_widget_dropdown_toggle_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle_name"));

        // line 29
        echo "                                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 29), "activeCurrency", [], "any", false, false, false, 29), "symbol", [], "any", false, false, false, 29), "html", null, true);
        echo "
                                        <span class=\"top-bar-nav-text\">";
        // line 30
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "activeCurrency", [], "any", false, false, false, 30), "translated", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_layout_header_actions_currency_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items"));

        // line 36
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"currenciesDropdown-";
        // line 37
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "currencies", [], "any", false, false, false, 38));
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
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 39
            echo "                                        ";
            $this->displayBlock('layout_header_actions_currency_widget_form_items_element', $context, $blocks);
            // line 58
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_layout_header_actions_currency_widget_form_items_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element"));

        // line 40
        echo "                                            <div class=\"top-bar-list-item dropdown-item";
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 40) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 40), "activeCurrency", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40))) {
            echo " item-checked";
        }
        echo "\"
                                                 title=\"";
        // line 41
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 41), "shortName", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                                ";
        // line 42
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_label', $context, $blocks);
        // line 56
        echo "                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_layout_header_actions_currency_widget_form_items_element_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_label"));

        // line 43
        echo "                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 44
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                                                        ";
        // line 45
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_input', $context, $blocks);
        // line 54
        echo "                                                    </label>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_layout_header_actions_currency_widget_form_items_element_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_input"));

        // line 46
        echo "                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"";
        // line 47
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 48
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                ";
        // line 51
        if ((sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 51) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 51), "activeCurrency", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51))) {
            echo " checked";
        }
        echo ">
                                                            ";
        // line 52
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 52), "shortName", [], "any", false, false, false, 52), "html", null, true);
        echo "
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_layout_header_actions_currency_widget_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_redirect"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_redirect"));

        // line 63
        echo "                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"";
        // line 65
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "get", [0 => "_route"], "method", false, false, false, 65), "html", null, true);
        echo "\"/>

                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", [0 => "_route_params"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 68
            echo "                                    <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\"
                                           type=\"hidden\"
                                           value=\"";
            // line 70
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/currency-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  476 => 72,  468 => 70,  462 => 68,  458 => 67,  453 => 65,  449 => 63,  439 => 62,  425 => 52,  419 => 51,  413 => 48,  407 => 47,  404 => 46,  394 => 45,  383 => 54,  381 => 45,  375 => 44,  372 => 43,  362 => 42,  351 => 56,  349 => 42,  345 => 41,  338 => 40,  328 => 39,  317 => 59,  303 => 58,  300 => 39,  283 => 38,  279 => 37,  276 => 36,  266 => 35,  254 => 30,  249 => 29,  239 => 28,  228 => 32,  226 => 28,  220 => 25,  216 => 24,  212 => 22,  202 => 21,  191 => 73,  189 => 62,  186 => 61,  184 => 35,  181 => 34,  179 => 21,  176 => 20,  166 => 19,  153 => 16,  143 => 15,  132 => 75,  130 => 19,  127 => 18,  124 => 15,  117 => 10,  114 => 9,  104 => 8,  92 => 77,  90 => 8,  87 => 7,  85 => 6,  82 => 5,  79 => 4,  76 => 3,  73 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_currency_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.currencies.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-currency\">
            {% block layout_header_actions_currency_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.configure') }}\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    {# @deprecated tag:v6.5.0 - Block layout_header_actions_currency_widget_form_csrf will be removed. #}
                    {% block layout_header_actions_currency_widget_form_csrf %}
                        {{ sw_csrf('frontend.checkout.configure') }}
                    {% endblock %}

                    {% block layout_header_actions_currency_widget_content %}
                        <div class=\"currencies-menu dropdown\">
                            {% block layout_header_actions_currency_widget_dropdown_toggle %}
                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-{{ position }}\"
                                        {{ dataBsToggleAttr }}=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    {% block layout_header_actions_currency_widget_dropdown_toggle_name %}
                                        {{ page.header.activeCurrency.symbol }}
                                        <span class=\"top-bar-nav-text\">{{ page.header.activeCurrency.translated.name }}</span>
                                    {% endblock %}
                                </button>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"currenciesDropdown-{{ position }}\">
                                    {% for currency in page.header.currencies %}
                                        {% block layout_header_actions_currency_widget_form_items_element %}
                                            <div class=\"top-bar-list-item dropdown-item{% if currency.id is same as(page.header.activeCurrency.id) %} item-checked{% endif %}\"
                                                 title=\"{{ currency.translated.shortName }}\">
                                                {% block layout_header_actions_currency_widget_form_items_element_label %}
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"{{ position }}-{{ currency.id }}\">
                                                        {% block layout_header_actions_currency_widget_form_items_element_input %}
                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"{{ position }}-{{ currency.id }}\"
                                                                   value=\"{{ currency.id }}\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                {% if currency.id is same as(page.header.activeCurrency.id) %} checked{% endif %}>
                                                            {{ currency.symbol }} {{ currency.translated.shortName }}
                                                        {% endblock %}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    {% endfor %}
                                </div>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_redirect %}
                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"{{ app.request.get('_route') }}\"/>

                                {% for key, value in app.request.attributes.get('_route_params') %}
                                    <input name=\"redirectParameters[{{ key }}]\"
                                           type=\"hidden\"
                                           value=\"{{ value }}\">
                                {% endfor %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/currency-widget.html.twig");
    }
}
