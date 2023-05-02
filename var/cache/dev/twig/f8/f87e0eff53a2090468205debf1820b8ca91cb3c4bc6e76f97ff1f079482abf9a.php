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

/* @Installer/installer/requirements.html.twig */
class __TwigTemplate_253336750324ba364bbec24d3d0b35fd34f70f36a417017b02611fae92ac6539 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/requirements.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/requirements.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_header"), "html", null, true);
        echo "</h2>
    </div>

    <div class=\"card__body scrollable\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasError", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <div class=\"alert-hero error\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-warning\"></i>
                </div>
                <h3 class=\"alert-hero-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_error_title"), "html", null, true);
            echo "</h3>
                <div class=\"alert-hero-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_error"), "html", null, true);
            echo "</div>
            </div>
        ";
        } else {
            // line 18
            echo "            <div class=\"alert-hero success\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-checkmark\"></i>
                </div>
                <h3 class=\"alert-hero-title\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_success_title"), "html", null, true);
            echo "</h3>
                <div class=\"alert-hero-text\">";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_success"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 26
        echo "
        <details id=\"pathChecks\" ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasPathError", [], "any", false, false, false, 27)) {
            echo "open";
        }
        echo ">
            <summary>
                <h4 id=\"requirement-group-path\"
                    class=\"requirement-group ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasPathError", [], "any", false, false, false, 30)) {
            echo "success";
        } else {
            echo "error";
        }
        echo "\">
                    <span class=\"requirement-group-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_header_files"), "html", null, true);
        echo " <span class=\"status-indicator\"></span></span>
                    <i class=\"icon-chevron-down\"></i>
                </h4>
            </summary>

            <div>
                <p class=\"requirement-info-text\">
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_files_info"), "html", null, true);
        echo "
                </p>

                <table>
                    <tbody>
                        <tr>
                            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_table_files_col_check"), "html", null, true);
        echo "</th>
                            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_table_files_col_status"), "html", null, true);
        echo "</th>
                        </tr>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "getPathChecks", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["pathCheck"]) {
            // line 48
            echo "                            <tr>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pathCheck"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td>
                                    <span class=\"status-indicator ";
            // line 51
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pathCheck"], "status", [], "any", false, false, false, 51), "success"))) {
                echo "success";
            } else {
                echo "error";
            }
            echo "\"></span>
                                    ";
            // line 52
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pathCheck"], "status", [], "any", false, false, false, 52), "success"))) {
                // line 53
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_status_ready"), "html", null, true);
                echo "
                                    ";
            } else {
                // line 55
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_status_error"), "html", null, true);
                echo "
                                    ";
            }
            // line 57
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pathCheck'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </tbody>
                </table>
            </div>
        </details>

        <details id=\"systemChecks\" ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasSystemError", [], "any", false, false, false, 65)) {
            echo "open";
        }
        echo ">
            <summary>
                <h4 id=\"requirement-group-system\"
                    class=\"requirement-group ";
        // line 68
        if ( !twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasSystemError", [], "any", false, false, false, 68)) {
            echo "success";
        } else {
            echo "error";
        }
        echo "\">
                    <span class=\"requirement-group-title\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_header_system"), "html", null, true);
        echo " <span class=\"status-indicator\"></span></span>
                    <i class=\"icon-chevron-down\"></i>
                </h4>
            </summary>

            <div>
                <p class=\"requirement-info-text\">
                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_php_info"), "html", null, true);
        echo "
                </p>

                <table>
                    <thead>
                    <tr>
                        <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_system_col_check"), "html", null, true);
        echo "</th>
                        <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_system_col_status"), "html", null, true);
        echo "</th>
                        <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_system_col_required"), "html", null, true);
        echo "</th>
                        <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_system_col_found"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "getSystemChecks", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["systemCheck"]) {
            // line 91
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["systemCheck"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                        <td><span class=\"status-indicator ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["systemCheck"], "status", [], "any", false, false, false, 92), "html", null, true);
            echo "\"></span>
                            ";
            // line 93
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["systemCheck"], "status", [], "any", false, false, false, 93), "success"))) {
                // line 94
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_status_ready"), "html", null, true);
                echo "
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 95
$context["systemCheck"], "status", [], "any", false, false, false, 95), "error"))) {
                // line 96
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_status_error"), "html", null, true);
                echo "
                            ";
            } else {
                // line 98
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.requirements_status_warning"), "html", null, true);
                echo "
                            ";
            }
            // line 100
            echo "                        </td>
                        <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["systemCheck"], "requiredValue", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                        <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["systemCheck"], "installedValue", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['systemCheck'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </tbody>
                </table>
            </div>
        </details>
    </div>

    <div class=\"card__footer\">
        <form action=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.requirements");
        echo "\" method=\"post\" class=\"flex-container\">
            <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.language-selection");
        echo "\" class=\"btn btn-default flex-item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.back"), "html", null, true);
        echo "</a>
            <button type=\"submit\" class=\"btn btn-primary flex-item flex-right\" ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["requirementChecks"] ?? null), "hasError", [], "any", false, false, false, 114)) {
            echo "disabled=\"disabled\"";
        }
        echo ">
                ";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.forward"), "html", null, true);
        echo "
            </button>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/requirements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 115,  323 => 114,  317 => 113,  313 => 112,  304 => 105,  295 => 102,  291 => 101,  288 => 100,  282 => 98,  276 => 96,  274 => 95,  269 => 94,  267 => 93,  263 => 92,  258 => 91,  254 => 90,  246 => 85,  242 => 84,  238 => 83,  234 => 82,  225 => 76,  215 => 69,  207 => 68,  199 => 65,  192 => 60,  184 => 57,  178 => 55,  172 => 53,  170 => 52,  162 => 51,  157 => 49,  154 => 48,  150 => 47,  145 => 45,  141 => 44,  132 => 38,  122 => 31,  114 => 30,  106 => 27,  103 => 26,  97 => 23,  93 => 22,  87 => 18,  81 => 15,  77 => 14,  71 => 10,  69 => 9,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.requirements_header\"|trans }}</h2>
    </div>

    <div class=\"card__body scrollable\">
        {% if requirementChecks.hasError %}
            <div class=\"alert-hero error\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-warning\"></i>
                </div>
                <h3 class=\"alert-hero-title\">{{ \"shopware.installer.requirements_error_title\"|trans }}</h3>
                <div class=\"alert-hero-text\">{{ \"shopware.installer.requirements_error\"|trans }}</div>
            </div>
        {% else %}
            <div class=\"alert-hero success\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-checkmark\"></i>
                </div>
                <h3 class=\"alert-hero-title\">{{ \"shopware.installer.requirements_success_title\"|trans }}</h3>
                <div class=\"alert-hero-text\">{{ \"shopware.installer.requirements_success\"|trans }}</div>
            </div>
        {% endif %}

        <details id=\"pathChecks\" {% if requirementChecks.hasPathError %}open{% endif %}>
            <summary>
                <h4 id=\"requirement-group-path\"
                    class=\"requirement-group {% if not requirementChecks.hasPathError %}success{% else %}error{% endif %}\">
                    <span class=\"requirement-group-title\">{{ \"shopware.installer.requirements_header_files\"|trans }} <span class=\"status-indicator\"></span></span>
                    <i class=\"icon-chevron-down\"></i>
                </h4>
            </summary>

            <div>
                <p class=\"requirement-info-text\">
                    {{ \"shopware.installer.requirements_files_info\"|trans }}
                </p>

                <table>
                    <tbody>
                        <tr>
                            <th>{{ \"shopware.installer.requirements_table_files_col_check\"|trans }}</th>
                            <th>{{ \"shopware.installer.requirements_table_files_col_status\"|trans }}</th>
                        </tr>
                        {% for pathCheck in requirementChecks.getPathChecks %}
                            <tr>
                                <td>{{ pathCheck.name }}</td>
                                <td>
                                    <span class=\"status-indicator {% if pathCheck.status == 'success' %}success{% else %}error{% endif %}\"></span>
                                    {% if pathCheck.status == 'success' %}
                                        {{ \"shopware.installer.requirements_status_ready\"|trans }}
                                    {% else %}
                                        {{ \"shopware.installer.requirements_status_error\"|trans }}
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </details>

        <details id=\"systemChecks\" {% if requirementChecks.hasSystemError %}open{% endif %}>
            <summary>
                <h4 id=\"requirement-group-system\"
                    class=\"requirement-group {% if not requirementChecks.hasSystemError %}success{% else %}error{% endif %}\">
                    <span class=\"requirement-group-title\">{{ \"shopware.installer.requirements_header_system\"|trans }} <span class=\"status-indicator\"></span></span>
                    <i class=\"icon-chevron-down\"></i>
                </h4>
            </summary>

            <div>
                <p class=\"requirement-info-text\">
                    {{ \"shopware.installer.requirements_php_info\"|trans }}
                </p>

                <table>
                    <thead>
                    <tr>
                        <th>{{ \"shopware.installer.requirements_system_col_check\"|trans }}</th>
                        <th>{{ \"shopware.installer.requirements_system_col_status\"|trans }}</th>
                        <th>{{ \"shopware.installer.requirements_system_col_required\"|trans }}</th>
                        <th>{{ \"shopware.installer.requirements_system_col_found\"|trans }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    {% for systemCheck in requirementChecks.getSystemChecks %}
                        <td>{{ systemCheck.name }}</td>
                        <td><span class=\"status-indicator {{ systemCheck.status }}\"></span>
                            {% if systemCheck.status == 'success' %}
                                {{ \"shopware.installer.requirements_status_ready\"|trans }}
                            {% elseif systemCheck.status == 'error' %}
                                {{ \"shopware.installer.requirements_status_error\"|trans }}
                            {% else %}
                                {{ \"shopware.installer.requirements_status_warning\"|trans }}
                            {% endif %}
                        </td>
                        <td>{{ systemCheck.requiredValue }}</td>
                        <td>{{ systemCheck.installedValue }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </details>
    </div>

    <div class=\"card__footer\">
        <form action=\"{{ url('installer.requirements') }}\" method=\"post\" class=\"flex-container\">
            <a href=\"{{ url('installer.language-selection') }}\" class=\"btn btn-default flex-item\">{{ \"shopware.installer.back\"|trans }}</a>
            <button type=\"submit\" class=\"btn btn-primary flex-item flex-right\" {% if requirementChecks.hasError %}disabled=\"disabled\"{% endif %}>
                {{ \"shopware.installer.forward\"|trans }}
            </button>
        </form>
    </div>
{% endblock %}
", "@Installer/installer/requirements.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/requirements.html.twig");
    }
}
