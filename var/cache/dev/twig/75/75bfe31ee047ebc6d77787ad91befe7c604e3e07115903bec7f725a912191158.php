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

/* @Installer/installer/database-configuration.html.twig */
class __TwigTemplate_2b99c19367e6c469bd27a65ee154b375b92c52457efe5c9117af5d3e201b7a17 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/database-configuration.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/database-configuration.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_header"), "html", null, true);
        echo "</h2>
    </div>

    <form
        action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.database-configuration");
        echo "\"
        method=\"post\"
        id=\"database-configuration\">

        <div class=\"card__body\">
            ";
        // line 14
        if (($context["error"] ?? null)) {
            // line 15
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["error"] ?? null)), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 19
        echo "
            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_info"), "html", null, true);
        echo "</p>

            <p>
                <label for=\"hostname\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_host"), "html", null, true);
        echo "</label>
                <input type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "hostname", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "hostname", [], "any", false, false, false, 24), "localhost")) : ("localhost")), "html", null, true);
        echo "\" name=\"hostname\" id=\"hostname\" required=\"required\" />
            </p>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_user"), "html", null, true);
        echo "</label>
                    <input type=\"text\" value=\"";
        // line 30
        (((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "username", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "username", [], "any", false, false, false, 30)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "username", [], "any", false, false, false, 30), "html", null, true))) : (print ("")));
        echo "\" name=\"username\" id=\"username\" required=\"required\" />
                </p>

                <p>
                    <label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" value=\"";
        // line 35
        (((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "password", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "password", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "password", [], "any", false, false, false, 35), "html", null, true))) : (print ("")));
        echo "\" name=\"password\" id=\"password\" />
                </p>
            </div>

            <details ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "hasAdvancedSetting", [], "any", false, false, false, 39)) {
            echo "open";
        }
        echo ">
                <summary>
                    <div class=\"custom-checkbox\">
                        <input
                            type=\"checkbox\"
                            name=\"advanced-settings\"
                            id=\"advanced\"
                            onchange=\"this.parentElement.click();\"
                            ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "hasAdvancedSetting", [], "any", false, false, false, 47)) {
            echo "checked";
        }
        echo "/>
                        <label for=\"advanced\" class=\"toggle\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_advanced_settings"), "html", null, true);
        echo "
                        </label>
                    </div>
                </summary>

                <div id=\"advanced-settings\">
                    <p>
                        <label for=\"port\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_port"), "html", null, true);
        echo "</label>
                        <input type=\"text\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "port", [], "any", false, false, false, 57), "html", null, true);
        echo "\" name=\"port\" id=\"port\" required=\"required\" />
                    </p>

                    <p>
                        <label for=\"sslCaPath\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_ssl_ca_path"), "html", null, true);
        echo "</label>
                        <input type=\"text\" value=\"";
        // line 62
        (((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCaPath", [], "any", true, true, false, 62) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCaPath", [], "any", false, false, false, 62)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCaPath", [], "any", false, false, false, 62), "html", null, true))) : (print ("")));
        echo "\" name=\"sslCaPath\" id=\"sslCaPath\" />
                    </p>

                    <p>
                        <label for=\"sslCertPath\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_ssl_cert_path"), "html", null, true);
        echo "</label>
                        <input type=\"text\" value=\"";
        // line 67
        (((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertPath", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertPath", [], "any", false, false, false, 67)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertPath", [], "any", false, false, false, 67), "html", null, true))) : (print ("")));
        echo "\" name=\"sslCertPath\" id=\"sslCertPath\" />
                    </p>

                    <p>
                        <label for=\"sslCertKeyPath\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_ssl_cert_key_path"), "html", null, true);
        echo "</label>
                        <input type=\"text\" value=\"";
        // line 72
        (((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertKeyPath", [], "any", true, true, false, 72) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertKeyPath", [], "any", false, false, false, 72)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslCertKeyPath", [], "any", false, false, false, 72), "html", null, true))) : (print ("")));
        echo "\" name=\"sslCertKeyPath\" id=\"sslCertKeyPath\" />
                    </p>


                    <div class=\"custom-checkbox\">
                        <input type=\"checkbox\"
                               id=\"sslDontVerifyServerCert\"
                               name=\"sslDontVerifyServerCert\"
                               ";
        // line 80
        echo ((twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "sslDontVerifyServerCert", [], "any", false, false, false, 80)) ? ("checked") : (""));
        echo "/>
                        <label for=\"sslDontVerifyServerCert\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_ssl_dont_verify_cert"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </details>

            <p>
                <label for=\"databaseName\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_database"), "html", null, true);
        echo "</label>
                <input
                    type=\"text\"
                    value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "databaseName", [], "any", false, false, false, 90), "html", null, true);
        echo "\"
                    name=\"databaseName\"
                    id=\"databaseName\"
                    required=\"required\"
                    onfocus=\"fetchDatabaseInformation();\"
                />
            </p>
            <div id=\"non-empty-db-warning\" class=\"alert alert-warning is--hidden\">
                <span class=\"icon-warning\"></span>
                ";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_non_empty_database"), "html", null, true);
        echo "
            </div>
            <p>
                <div class=\"custom-checkbox create_database\">
                    <input
                        id=\"database_create_schema_new\"
                        type=\"checkbox\"
                        onchange=\"
                            document.getElementById('databaseName').disabled = this.checked;
                            document.getElementById('databaseName_new').disabled =!this.checked;

                            if (!this.checked) {
                                document.getElementById('databaseName_new').value = '';
                            }
                        \"/>
                    <label for=\"database_create_schema_new\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-configuration_field_new_database"), "html", null, true);
        echo "</label>
                </div>

                <input type=\"text\" name=\"databaseName\" id=\"databaseName_new\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["connectionInfo"] ?? null), "databaseName", [], "any", false, false, false, 117), "html", null, true);
        echo "\" disabled/>
            </p>

        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.license");
        echo "\" class=\"btn btn-default flex-item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.back"), "html", null, true);
        echo "</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('database-configuration').classList.add('is--submitted')\">
                ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.start_installation"), "html", null, true);
        echo "
            </button>
        </div>
    </form>

    <script>
        async function fetchDatabaseInformation() {
            const form = new FormData(document.getElementById('database-configuration'));
            const response = await fetch('";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.database-information");
        echo "', {
                method: 'POST',
                body: form,
            })

            if (!response.ok) {
                return;
            }

            const data = await response.json();

            if (Object.entries(data).length === 0) {
                return;
            }

            const oldValue = document.getElementById('databaseName').value;

            createSelectFieldWithOptions(data, oldValue);
        }

        function createSelectFieldWithOptions(data, oldValue) {
            const element = document.createElement('div');
            element.classList.add('select-wrapper');

            const select = document.createElement('select');
            select.id = 'databaseName';
            select.name = 'databaseName';
            select.onchange = function(event) {
                const selectedDatabase = event.target.value;

                if (data[selectedDatabase] !== undefined && data[selectedDatabase]) {
                    document.getElementById('non-empty-db-warning').classList.remove('is--hidden');
                } else {
                    document.getElementById('non-empty-db-warning').classList.add('is--hidden');
                }
            };
            element.appendChild(select);

            let hasOldValue = false;
            Object.entries(data).forEach(function([key, value]) {
                const option = document.createElement('option');
                option.value = key;
                option.text = key;
                if (key === oldValue) {
                    hasOldValue = true;
                    option.selected = true;
                }

                select.appendChild(option);
            });

            // default to the first empty database
            if (!hasOldValue) {
                for(const option of select.options) {
                    if (data[option.value] !== undefined && !data[option.value]) {
                        select.value = option.value;
                        break;
                    }
                }
            }

            select.dispatchEvent(new Event('change'));

            document.getElementById('databaseName').replaceWith(element);
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/database-configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 135,  282 => 127,  273 => 123,  264 => 117,  258 => 114,  240 => 99,  228 => 90,  222 => 87,  213 => 81,  209 => 80,  198 => 72,  194 => 71,  187 => 67,  183 => 66,  176 => 62,  172 => 61,  165 => 57,  161 => 56,  151 => 49,  144 => 47,  131 => 39,  124 => 35,  120 => 34,  113 => 30,  109 => 29,  101 => 24,  97 => 23,  91 => 20,  88 => 19,  82 => 16,  79 => 15,  77 => 14,  69 => 9,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.database-configuration_header\"|trans }}</h2>
    </div>

    <form
        action=\"{{ url('installer.database-configuration') }}\"
        method=\"post\"
        id=\"database-configuration\">

        <div class=\"card__body\">
            {% if error %}
                <div class=\"alert alert-error\">
                    {{ error|trans }}
                </div>
            {% endif %}

            <p>{{ \"shopware.installer.database-configuration_info\"|trans }}</p>

            <p>
                <label for=\"hostname\">{{ \"shopware.installer.database-configuration_field_host\"|trans }}</label>
                <input type=\"text\" value=\"{{ connectionInfo.hostname|default('localhost') }}\" name=\"hostname\" id=\"hostname\" required=\"required\" />
            </p>

            <div class=\"form-group form-group--50\">
                <p>
                    <label for=\"username\">{{ \"shopware.installer.database-configuration_field_user\"|trans }}</label>
                    <input type=\"text\" value=\"{{ connectionInfo.username ?? '' }}\" name=\"username\" id=\"username\" required=\"required\" />
                </p>

                <p>
                    <label for=\"password\">{{ \"shopware.installer.database-configuration_field_password\"|trans }}</label>
                    <input type=\"password\" value=\"{{ connectionInfo.password ?? '' }}\" name=\"password\" id=\"password\" />
                </p>
            </div>

            <details {% if connectionInfo.hasAdvancedSetting %}open{% endif %}>
                <summary>
                    <div class=\"custom-checkbox\">
                        <input
                            type=\"checkbox\"
                            name=\"advanced-settings\"
                            id=\"advanced\"
                            onchange=\"this.parentElement.click();\"
                            {% if connectionInfo.hasAdvancedSetting %}checked{% endif %}/>
                        <label for=\"advanced\" class=\"toggle\">
                            {{ \"shopware.installer.database-configuration_advanced_settings\"|trans }}
                        </label>
                    </div>
                </summary>

                <div id=\"advanced-settings\">
                    <p>
                        <label for=\"port\">{{ \"shopware.installer.database-configuration_field_port\"|trans }}</label>
                        <input type=\"text\" value=\"{{ connectionInfo.port }}\" name=\"port\" id=\"port\" required=\"required\" />
                    </p>

                    <p>
                        <label for=\"sslCaPath\">{{ \"shopware.installer.database-configuration_field_ssl_ca_path\"|trans }}</label>
                        <input type=\"text\" value=\"{{ connectionInfo.sslCaPath ?? ''}}\" name=\"sslCaPath\" id=\"sslCaPath\" />
                    </p>

                    <p>
                        <label for=\"sslCertPath\">{{ \"shopware.installer.database-configuration_field_ssl_cert_path\"|trans }}</label>
                        <input type=\"text\" value=\"{{ connectionInfo.sslCertPath ?? ''}}\" name=\"sslCertPath\" id=\"sslCertPath\" />
                    </p>

                    <p>
                        <label for=\"sslCertKeyPath\">{{ \"shopware.installer.database-configuration_field_ssl_cert_key_path\"|trans }}</label>
                        <input type=\"text\" value=\"{{ connectionInfo.sslCertKeyPath ?? '' }}\" name=\"sslCertKeyPath\" id=\"sslCertKeyPath\" />
                    </p>


                    <div class=\"custom-checkbox\">
                        <input type=\"checkbox\"
                               id=\"sslDontVerifyServerCert\"
                               name=\"sslDontVerifyServerCert\"
                               {{ connectionInfo.sslDontVerifyServerCert ? 'checked' : ''}}/>
                        <label for=\"sslDontVerifyServerCert\">{{ \"shopware.installer.database-configuration_field_ssl_dont_verify_cert\"|trans }}</label>
                    </div>
                </div>
            </details>

            <p>
                <label for=\"databaseName\">{{ \"shopware.installer.database-configuration_field_database\"|trans }}</label>
                <input
                    type=\"text\"
                    value=\"{{ connectionInfo.databaseName }}\"
                    name=\"databaseName\"
                    id=\"databaseName\"
                    required=\"required\"
                    onfocus=\"fetchDatabaseInformation();\"
                />
            </p>
            <div id=\"non-empty-db-warning\" class=\"alert alert-warning is--hidden\">
                <span class=\"icon-warning\"></span>
                {{ \"shopware.installer.database-configuration_non_empty_database\"|trans }}
            </div>
            <p>
                <div class=\"custom-checkbox create_database\">
                    <input
                        id=\"database_create_schema_new\"
                        type=\"checkbox\"
                        onchange=\"
                            document.getElementById('databaseName').disabled = this.checked;
                            document.getElementById('databaseName_new').disabled =!this.checked;

                            if (!this.checked) {
                                document.getElementById('databaseName_new').value = '';
                            }
                        \"/>
                    <label for=\"database_create_schema_new\">{{ \"shopware.installer.database-configuration_field_new_database\"|trans }}</label>
                </div>

                <input type=\"text\" name=\"databaseName\" id=\"databaseName_new\" value=\"{{ connectionInfo.databaseName }}\" disabled/>
            </p>

        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"{{ url('installer.license') }}\" class=\"btn btn-default flex-item\">{{ \"shopware.installer.back\"|trans }}</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('database-configuration').classList.add('is--submitted')\">
                {{ \"shopware.installer.start_installation\"|trans }}
            </button>
        </div>
    </form>

    <script>
        async function fetchDatabaseInformation() {
            const form = new FormData(document.getElementById('database-configuration'));
            const response = await fetch('{{ url('installer.database-information') }}', {
                method: 'POST',
                body: form,
            })

            if (!response.ok) {
                return;
            }

            const data = await response.json();

            if (Object.entries(data).length === 0) {
                return;
            }

            const oldValue = document.getElementById('databaseName').value;

            createSelectFieldWithOptions(data, oldValue);
        }

        function createSelectFieldWithOptions(data, oldValue) {
            const element = document.createElement('div');
            element.classList.add('select-wrapper');

            const select = document.createElement('select');
            select.id = 'databaseName';
            select.name = 'databaseName';
            select.onchange = function(event) {
                const selectedDatabase = event.target.value;

                if (data[selectedDatabase] !== undefined && data[selectedDatabase]) {
                    document.getElementById('non-empty-db-warning').classList.remove('is--hidden');
                } else {
                    document.getElementById('non-empty-db-warning').classList.add('is--hidden');
                }
            };
            element.appendChild(select);

            let hasOldValue = false;
            Object.entries(data).forEach(function([key, value]) {
                const option = document.createElement('option');
                option.value = key;
                option.text = key;
                if (key === oldValue) {
                    hasOldValue = true;
                    option.selected = true;
                }

                select.appendChild(option);
            });

            // default to the first empty database
            if (!hasOldValue) {
                for(const option of select.options) {
                    if (data[option.value] !== undefined && !data[option.value]) {
                        select.value = option.value;
                        break;
                    }
                }
            }

            select.dispatchEvent(new Event('change'));

            document.getElementById('databaseName').replaceWith(element);
        }
    </script>
{% endblock %}
", "@Installer/installer/database-configuration.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/database-configuration.html.twig");
    }
}
