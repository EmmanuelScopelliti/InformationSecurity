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

/* @Storefront/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_4668c25de578897832ab39a9a546b1c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_language_widget' => [$this, 'block_layout_header_actions_language_widget'],
            'layout_header_actions_language_widget_form' => [$this, 'block_layout_header_actions_language_widget_form'],
            'layout_header_actions_language_widget_form_csrf' => [$this, 'block_layout_header_actions_language_widget_form_csrf'],
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/language-widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/language-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_language_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_language_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget"));

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
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "languages", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-language\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_language_widget_form', $context, $blocks);
            // line 74
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_layout_header_actions_language_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.switch-language");
        echo "\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 15
        echo "                    ";
        $this->displayBlock('layout_header_actions_language_widget_form_csrf', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('layout_header_actions_language_widget_content', $context, $blocks);
        // line 72
        echo "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_layout_header_actions_language_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form_csrf"));

        // line 16
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.switch-language");
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_header_actions_language_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        // line 20
        echo "                        ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "activeLanguage", [], "any", false, false, false, 20), "translationCode", [], "any", false, false, false, 20), "code", [], "any", false, false, false, 20)), "-");
        // line 21
        echo "                        ";
        // line 22
        echo "                        ";
        $context["language"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_0 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) : ((($__internal_compile_1 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null)));
        // line 23
        echo "                        ";
        $context["country"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_2 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)) : ((($__internal_compile_3 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)));
        // line 24
        echo "
                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-";
        // line 28
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                    ";
        // line 29
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-";
        // line 32
        echo sw_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\"></div>
                                <span class=\"top-bar-nav-text\">";
        // line 33
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "activeLanguage", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "</span>
                            </button>
                            ";
        // line 35
        $this->displayBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 64
        echo "                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 66
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "get", [0 => "_route"], "method", false, false, false, 66), "html", null, true);
        echo "\"/>

                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", [0 => "_route_params"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 69
            echo "                            <input name=\"redirectParameters[";
            echo sw_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" type=\"hidden\" value=\"";
            echo sw_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_layout_header_actions_languages_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        // line 36
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"languagesDropdown-";
        // line 37
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "languages", [], "any", false, false, false, 38));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "                                        <div class=\"top-bar-list-item dropdown-item";
            if ((sw_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 39) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "activeLanguage", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39))) {
                echo " item-checked";
            }
            echo "\"
                                             title=\"";
            // line 40
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["language"], "translated", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\">

                                            ";
            // line 42
            $this->displayBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 60
            echo "                                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_layout_header_actions_languages_widget_form_items_flag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        // line 43
        echo "                                                ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 43), "code", [], "any", false, false, false, 43)), "-");
        // line 44
        echo "                                                ";
        // line 45
        echo "                                                ";
        $context["flagLanguage"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_4 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) : ((($__internal_compile_5 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null)));
        // line 46
        echo "                                                ";
        $context["flagCountry"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) ? ((($__internal_compile_6 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null)) : ((($__internal_compile_7 = ($context["isoCode"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)));
        // line 47
        echo "
                                                <label class=\"top-bar-list-label\"
                                                       for=\"";
        // line 49
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                                                    <input id=\"";
        // line 50
        echo sw_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\"
                                                           class=\"top-bar-list-radio\"
                                                           value=\"";
        // line 52
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\"
                                                           name=\"languageId\"
                                                           type=\"radio\"
                                                        ";
        // line 55
        if ((sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 55) === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 55), "activeLanguage", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55))) {
            echo " checked";
        }
        echo ">
                                                    <div class=\"top-bar-list-icon language-flag country-";
        // line 56
        echo sw_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
        echo " language-";
        echo sw_escape_filter($this->env, ($context["flagLanguage"] ?? null), "html", null, true);
        echo "\"></div>
                                                    ";
        // line 57
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "
                                                </label>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  375 => 57,  369 => 56,  363 => 55,  357 => 52,  350 => 50,  344 => 49,  340 => 47,  337 => 46,  334 => 45,  332 => 44,  329 => 43,  319 => 42,  308 => 62,  293 => 60,  291 => 42,  286 => 40,  279 => 39,  262 => 38,  258 => 37,  255 => 36,  245 => 35,  235 => 71,  224 => 69,  220 => 68,  215 => 66,  211 => 64,  209 => 35,  204 => 33,  198 => 32,  192 => 29,  188 => 28,  182 => 24,  179 => 23,  176 => 22,  174 => 21,  171 => 20,  161 => 19,  148 => 16,  138 => 15,  127 => 72,  125 => 19,  122 => 18,  119 => 15,  112 => 10,  109 => 9,  99 => 8,  87 => 74,  85 => 8,  82 => 7,  80 => 6,  77 => 5,  74 => 4,  71 => 3,  68 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_language_widget%}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if  page.header.languages.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-language\">
            {% block layout_header_actions_language_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.switch-language') }}\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    {# @deprecated tag:v6.5.0 - Block layout_header_actions_language_widget_form_csrf will be removed. #}
                    {% block layout_header_actions_language_widget_form_csrf %}
                        {{ sw_csrf('frontend.checkout.switch-language') }}
                    {% endblock %}

                    {% block layout_header_actions_language_widget_content %}
                        {% set isoCode = page.header.activeLanguage.translationCode.code|lower|split('-') %}
                        {# @deprecated tag:v6.5.0 - Remove else cases, to maintain correct split of isoCode #}
                        {% set language = feature('v6.5.0.0') ? isoCode[0] : isoCode[1] %}
                        {% set country = feature('v6.5.0.0') ? isoCode[1] : isoCode[0] %}

                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-{{ position }}\"
                                    {{ dataBsToggleAttr }}=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-{{ country }} language-{{ language }}\"></div>
                                <span class=\"top-bar-nav-text\">{{ page.header.activeLanguage.name }}</span>
                            </button>
                            {% block layout_header_actions_languages_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"languagesDropdown-{{ position }}\">
                                    {% for language in  page.header.languages %}
                                        <div class=\"top-bar-list-item dropdown-item{% if language.id is same as(page.header.activeLanguage.id) %} item-checked{% endif %}\"
                                             title=\"{{ language.translated.name }}\">

                                            {% block layout_header_actions_languages_widget_form_items_flag %}
                                                {% set isoCode = language.translationCode.code|lower|split('-') %}
                                                {# @deprecated tag:v6.5.0 - Remove else cases, to maintain correct split of isoCode #}
                                                {% set flagLanguage = feature('v6.5.0.0') ? isoCode[0] : isoCode[1] %}
                                                {% set flagCountry = feature('v6.5.0.0') ? isoCode[1] : isoCode[0] %}

                                                <label class=\"top-bar-list-label\"
                                                       for=\"{{ position }}-{{ language.id }}\">
                                                    <input id=\"{{ position }}-{{ language.id }}\"
                                                           class=\"top-bar-list-radio\"
                                                           value=\"{{ language.id }}\"
                                                           name=\"languageId\"
                                                           type=\"radio\"
                                                        {% if language.id is same as(page.header.activeLanguage.id) %} checked{% endif %}>
                                                    <div class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></div>
                                                    {{ language.name }}
                                                </label>
                                            {% endblock %}
                                        </div>
                                    {% endfor %}
                                </div>
                            {% endblock %}
                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"{{ app.request.get('_route') }}\"/>

                        {% for key, value in app.request.attributes.get('_route_params') %}
                            <input name=\"redirectParameters[{{ key }}]\" type=\"hidden\" value=\"{{ value }}\">
                        {% endfor %}
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/language-widget.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
