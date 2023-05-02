<?php

use Twig\Environment;
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

/* @Installer/installer/shop-configuration.html.twig */
class __TwigTemplate_f60452ae8168dbac111476cd51331d63fc00eaf62c09795815c10c4c291394d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Installer/installer/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/shop-configuration.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/shop-configuration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 4
        echo "    <div class=\"card__title\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_header"), "html", null, true);
        echo "</h2>
    </div>

    <form id=\"shop-configuration\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.configuration");
        echo "\" method=\"post\">
        <div class=\"card__body\">
            ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                <div class=\"alert alert-error\">
                    <pre>";
            // line 12
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</pre>
                </div>
            ";
        }
        // line 15
        echo "
            <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_text"), "html", null, true);
        echo "</p>

            <p>
                <label for=\"config_shopName\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_name"), "html", null, true);
        echo "</label>
                <input type=\"text\"
                       value=\"";
        // line 21
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shopName", [], "any", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shopName", [], "any", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shopName", [], "any", false, false, false, 21), "html", null, true))) : (print ("")));
        echo "\"
                       name=\"config_shopName\"
                       id=\"config_shopName\"
                       required=\"required\"
                       autofocus/>
            </p>

            <p>
                <label for=\"config_mail\">
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_mail"), "html", null, true);
        echo "
                    <a class=\"help-badge\"
                       href=\"#\"
                       data-tooltip=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_email_help_text"), "html", null, true);
        echo "\">
                        <i class=\"icon-help\"></i>
                    </a>
                </label>
                <input type=\"email\"
                       value=\"";
        // line 38
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_mail", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_mail", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_mail", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\"
                       name=\"config_mail\"
                       id=\"config_mail\"
                       required=\"required\"/>
            </p>

            <div class=\"form-group form-group--50\">
                <div class=\"input-group\">
                    <label for=\"config_shop_language\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_language"), "html", null, true);
        echo "</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_language\" id=\"config_shop_language\">
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languageIsos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iso"]) {
            // line 50
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shop_language", [], "any", false, false, false, 50), $context["iso"]))) {
                echo "selected";
            }
            echo ">
                                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("shopware.installer.select_language_" . twig_slice($this->env, $context["iso"], 0, 2))), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </select>
                    </div>
                </div>

                <div class=\"input-group\">
                    <label for=\"config_shop_currency\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_currency"), "html", null, true);
        echo "</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_currency\"
                                id=\"config_shop_currency\"
                                onchange=\"toggleDefaultCurrency()\">
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencyIsos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iso"]) {
            // line 65
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare((((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shop_currency", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shop_currency", [], "any", false, false, false, 65)))) ? (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_shop_currency", [], "any", false, false, false, 65)) : ("")), $context["iso"]))) {
                echo "selected";
            }
            echo ">
                                    ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("shopware.installer.configuration_admin_currency_" . twig_lower_filter($this->env, $context["iso"]))), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </select>
                    </div>
                    <span class=\"help-block\" style=\"display: none\">
                        ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_currency_info"), "html", null, true);
        echo "
                    </span>
                </div>

                <div class=\"input-group\">
                    <label for=\"config_shop_country\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_sconfig_country"), "html", null, true);
        echo "</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_country\" id=\"config_shop_country\">
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countryIsos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 81
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "iso3", [], "any", false, false, false, 81), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["country"], "default", [], "any", false, false, false, 81)) {
                echo "selected";
            }
            echo ">
                                    ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                        </select>
                    </div>
                </div>
            </div>

            <div class=\"alert alert-warning\">
                <span class=\"icon-warning\"></span>
                ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_defaults_warning"), "html", null, true);
        echo "
            </div>

            <p class=\"available-currencies__headline\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_currency_headline"), "html", null, true);
        echo "</p>
            <p class=\"available-currencies__text\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_currency_text"), "html", null, true);
        echo "</p>

            <div class=\"available-currencies__container\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencyIsos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iso"]) {
            // line 100
            echo "                    <div class=\"custom-checkbox\">
                        <input type=\"checkbox\"
                               class=\"currency-toggle\"
                               id=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["iso"]), "html", null, true);
            echo "\"
                               name=\"available_currencies[]\"
                               value=\"";
            // line 105
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo "\"
                               onclick=\"event.target.classList.add('toggled')\"
                        />
                        <label for=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["iso"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("shopware.installer.configuration_admin_currency_" . twig_lower_filter($this->env, $context["iso"]))), "html", null, true);
            echo "</label>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            </div>

            <hr>

            <p>
                <label for=\"config_admin_email\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_mail"), "html", null, true);
        echo "</label>
                <input type=\"email\"
                       value=\"";
        // line 118
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_email", [], "any", true, true, false, 118) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_email", [], "any", false, false, false, 118)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_email", [], "any", false, false, false, 118), "html", null, true))) : (print ("")));
        echo "\"
                       name=\"config_admin_email\"
                       id=\"config_admin_email\"
                       required=\"required\"/>
            </p>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"config_admin_firstName\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_firstName"), "html", null, true);
        echo "</label>
                    <input type=\"text\"
                           value=\"";
        // line 128
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_firstName", [], "any", true, true, false, 128) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_firstName", [], "any", false, false, false, 128)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_firstName", [], "any", false, false, false, 128), "html", null, true))) : (print ("")));
        echo "\"
                           name=\"config_admin_firstName\"
                           id=\"config_admin_firstName\"
                           required=\"required\"/>
                </p>

                <p>
                    <label for=\"config_admin_lastName\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_lastName"), "html", null, true);
        echo "</label>
                    <input type=\"text\"
                           value=\"";
        // line 137
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_lastName", [], "any", true, true, false, 137) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_lastName", [], "any", false, false, false, 137)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_lastName", [], "any", false, false, false, 137), "html", null, true))) : (print ("")));
        echo "\"
                           name=\"config_admin_lastName\"
                           id=\"config_admin_lastName\"
                           required=\"required\"/>
                </p>
            </div>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"config_admin_username\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_username"), "html", null, true);
        echo "</label>
                    <input type=\"text\"
                           value=\"";
        // line 148
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_username", [], "any", true, true, false, 148) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_username", [], "any", false, false, false, 148)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_username", [], "any", false, false, false, 148), "html", null, true))) : (print ("")));
        echo "\"
                           name=\"config_admin_username\"
                           id=\"config_admin_username\"
                           required=\"required\"/>
                </p>

                <p>
                    <label for=\"config_admin_password\">";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.configuration_admin_password"), "html", null, true);
        echo "</label>
                    <input type=\"password\"
                           value=\"";
        // line 157
        (((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_password", [], "any", true, true, false, 157) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_password", [], "any", false, false, false, 157)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "config_admin_password", [], "any", false, false, false, 157), "html", null, true))) : (print ("")));
        echo "\"
                           name=\"config_admin_password\"
                           id=\"config_admin_password\"
                           required=\"required\"/>
                </p>
            </div>
        </div>


        <div class=\"card__footer flex-container\">
            <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.database-import");
        echo "\" class=\"btn btn-default flex-item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.back"), "html", null, true);
        echo "</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('shop-configuration').classList.add('is--submitted')\">
            ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.forward"), "html", null, true);
        echo "
            </button>
        </div>
    </form>


    <script>
        toggleDefaultCurrency();
        function toggleDefaultCurrency() {
            const toggles = document.getElementsByClassName('currency-toggle');
            for (let toggle of toggles) {
                if (toggle.getAttribute('disabled') === null) {
                    // skip all toggles that were previously not the default
                    continue;
                }

                toggle.removeAttribute('disabled');
                toggle.classList.remove('is--selected');
                if (!toggle.classList.contains('toggled')) {
                    // only uncheck if it was not manually toggled
                    toggle.removeAttribute('checked');
                }
            }

            const newDefaultToggle = document.getElementById(
                document.getElementById('config_shop_currency').value.toLowerCase()
            );
            newDefaultToggle.setAttribute('checked', '');
            newDefaultToggle.setAttribute('disabled', '');
            newDefaultToggle.classList.add('is--selected');
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/shop-configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 171,  385 => 167,  372 => 157,  367 => 155,  357 => 148,  352 => 146,  340 => 137,  335 => 135,  325 => 128,  320 => 126,  309 => 118,  304 => 116,  297 => 111,  286 => 108,  280 => 105,  275 => 103,  270 => 100,  266 => 99,  260 => 96,  256 => 95,  250 => 92,  241 => 85,  232 => 82,  223 => 81,  219 => 80,  213 => 77,  205 => 72,  200 => 69,  191 => 66,  182 => 65,  178 => 64,  170 => 59,  163 => 54,  154 => 51,  145 => 50,  141 => 49,  135 => 46,  124 => 38,  116 => 33,  110 => 30,  98 => 21,  93 => 19,  87 => 16,  84 => 15,  78 => 12,  75 => 11,  73 => 10,  68 => 8,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.configuration_header\"|trans }}</h2>
    </div>

    <form id=\"shop-configuration\" action=\"{{ url('installer.configuration') }}\" method=\"post\">
        <div class=\"card__body\">
            {% if error %}
                <div class=\"alert alert-error\">
                    <pre>{{ error }}</pre>
                </div>
            {% endif %}

            <p>{{ \"shopware.installer.configuration_sconfig_text\"|trans }}</p>

            <p>
                <label for=\"config_shopName\">{{ \"shopware.installer.configuration_sconfig_name\"|trans }}</label>
                <input type=\"text\"
                       value=\"{{ parameters.config_shopName ?? '' }}\"
                       name=\"config_shopName\"
                       id=\"config_shopName\"
                       required=\"required\"
                       autofocus/>
            </p>

            <p>
                <label for=\"config_mail\">
                    {{ \"shopware.installer.configuration_sconfig_mail\"|trans }}
                    <a class=\"help-badge\"
                       href=\"#\"
                       data-tooltip=\"{{ \"shopware.installer.configuration_email_help_text\"|trans }}\">
                        <i class=\"icon-help\"></i>
                    </a>
                </label>
                <input type=\"email\"
                       value=\"{{ parameters.config_mail ?? '' }}\"
                       name=\"config_mail\"
                       id=\"config_mail\"
                       required=\"required\"/>
            </p>

            <div class=\"form-group form-group--50\">
                <div class=\"input-group\">
                    <label for=\"config_shop_language\">{{ \"shopware.installer.configuration_sconfig_language\"|trans }}</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_language\" id=\"config_shop_language\">
                            {% for iso in languageIsos %}
                                <option value=\"{{ iso }}\" {% if parameters.config_shop_language == iso %}selected{% endif %}>
                                    {{ (\"shopware.installer.select_language_\" ~ (iso|slice(0, 2))) |trans }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <div class=\"input-group\">
                    <label for=\"config_shop_currency\">{{ \"shopware.installer.configuration_sconfig_currency\"|trans }}</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_currency\"
                                id=\"config_shop_currency\"
                                onchange=\"toggleDefaultCurrency()\">
                            {% for iso in currencyIsos %}
                                <option value=\"{{ iso }}\" {% if parameters.config_shop_currency ?? '' == iso %}selected{% endif %}>
                                    {{ (\"shopware.installer.configuration_admin_currency_\" ~ (iso|lower)) |trans }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <span class=\"help-block\" style=\"display: none\">
                        {{ \"shopware.installer.configuration_sconfig_currency_info\"|trans }}
                    </span>
                </div>

                <div class=\"input-group\">
                    <label for=\"config_shop_country\">{{ \"shopware.installer.configuration_sconfig_country\"|trans }}</label>
                    <div class=\"select-wrapper\">
                        <select name=\"config_shop_country\" id=\"config_shop_country\">
                            {% for country in countryIsos %}
                                <option value=\"{{ country.iso3 }}\" {% if country.default %}selected{% endif %}>
                                    {{ country.translated }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"alert alert-warning\">
                <span class=\"icon-warning\"></span>
                {{ \"shopware.installer.configuration_defaults_warning\"|trans }}
            </div>

            <p class=\"available-currencies__headline\">{{ \"shopware.installer.configuration_admin_currency_headline\"|trans }}</p>
            <p class=\"available-currencies__text\">{{ \"shopware.installer.configuration_admin_currency_text\"|trans }}</p>

            <div class=\"available-currencies__container\">
                {% for iso in currencyIsos %}
                    <div class=\"custom-checkbox\">
                        <input type=\"checkbox\"
                               class=\"currency-toggle\"
                               id=\"{{ iso|lower }}\"
                               name=\"available_currencies[]\"
                               value=\"{{ iso }}\"
                               onclick=\"event.target.classList.add('toggled')\"
                        />
                        <label for=\"{{ iso|lower }}\">{{ (\"shopware.installer.configuration_admin_currency_\" ~ (iso|lower)) |trans }}</label>
                    </div>
                {% endfor %}
            </div>

            <hr>

            <p>
                <label for=\"config_admin_email\">{{ \"shopware.installer.configuration_admin_mail\"|trans }}</label>
                <input type=\"email\"
                       value=\"{{ parameters.config_admin_email ?? '' }}\"
                       name=\"config_admin_email\"
                       id=\"config_admin_email\"
                       required=\"required\"/>
            </p>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"config_admin_firstName\">{{ \"shopware.installer.configuration_admin_firstName\"|trans }}</label>
                    <input type=\"text\"
                           value=\"{{ parameters.config_admin_firstName ?? '' }}\"
                           name=\"config_admin_firstName\"
                           id=\"config_admin_firstName\"
                           required=\"required\"/>
                </p>

                <p>
                    <label for=\"config_admin_lastName\">{{ \"shopware.installer.configuration_admin_lastName\"|trans }}</label>
                    <input type=\"text\"
                           value=\"{{ parameters.config_admin_lastName ?? '' }}\"
                           name=\"config_admin_lastName\"
                           id=\"config_admin_lastName\"
                           required=\"required\"/>
                </p>
            </div>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"config_admin_username\">{{ \"shopware.installer.configuration_admin_username\"|trans }}</label>
                    <input type=\"text\"
                           value=\"{{ parameters.config_admin_username ?? '' }}\"
                           name=\"config_admin_username\"
                           id=\"config_admin_username\"
                           required=\"required\"/>
                </p>

                <p>
                    <label for=\"config_admin_password\">{{ \"shopware.installer.configuration_admin_password\"|trans }}</label>
                    <input type=\"password\"
                           value=\"{{ parameters.config_admin_password ?? '' }}\"
                           name=\"config_admin_password\"
                           id=\"config_admin_password\"
                           required=\"required\"/>
                </p>
            </div>
        </div>


        <div class=\"card__footer flex-container\">
            <a href=\"{{ url('installer.database-import') }}\" class=\"btn btn-default flex-item\">{{ \"shopware.installer.back\"|trans }}</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('shop-configuration').classList.add('is--submitted')\">
            {{ \"shopware.installer.forward\"|trans }}
            </button>
        </div>
    </form>


    <script>
        toggleDefaultCurrency();
        function toggleDefaultCurrency() {
            const toggles = document.getElementsByClassName('currency-toggle');
            for (let toggle of toggles) {
                if (toggle.getAttribute('disabled') === null) {
                    // skip all toggles that were previously not the default
                    continue;
                }

                toggle.removeAttribute('disabled');
                toggle.classList.remove('is--selected');
                if (!toggle.classList.contains('toggled')) {
                    // only uncheck if it was not manually toggled
                    toggle.removeAttribute('checked');
                }
            }

            const newDefaultToggle = document.getElementById(
                document.getElementById('config_shop_currency').value.toLowerCase()
            );
            newDefaultToggle.setAttribute('checked', '');
            newDefaultToggle.setAttribute('disabled', '');
            newDefaultToggle.classList.add('is--selected');
        }
    </script>
{% endblock %}
", "@Installer/installer/shop-configuration.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/shop-configuration.html.twig");
    }
}
