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

/* @Installer/installer/database-import.html.twig */
class __TwigTemplate_1360f18c10ff4182901b91d6a547739c1c2ec230467b3345274faac796708ae9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/database-import.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/database-import.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-import_header"), "html", null, true);
        echo "</h2>
    </div>

    <div class=\"card__body database-import\">
        ";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "            <div class=\"alert-hero error\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-warning\"></i>
                </div>
                <h3 class=\"alert-hero-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database_import_error_title"), "html", null, true);
            echo "</h3>
                <div class=\"alert-hero-text\">";
            // line 15
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"alert alert-error is--hidden\">
            <h2>Error</h2>
            Received the following error message:
            <p id=\"error-message\"></p>

            Please try to fix this error and restart the installation.
            <h3>Response</h3>
            <pre id=\"error-content\"></pre>
        </div>

        <div id=\"import-container\" class=\"database-import-container\">
            <p class=\"database-import-text\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database-import_info_text"), "html", null, true);
        echo "</p>

            <div class=\"database-import-count\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database_import_install_label"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database_import_install_step_text"), "html", null, true);
        echo "
                <span id=\"offset\" class=\"database-import-count-offset\">0</span>
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database_import_install_from_text"), "html", null, true);
        echo "
                <span id=\"total\" class=\"database-import-count-total\">0</span>
            </div>
            <div id=\"progress\" class=\"progress active\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%\"></div>
            </div>
        </div>

        <div id=\"import-finished\" class=\"database-import-finish is--hidden\">
            <div class=\"alert-hero success\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-checkmark\"></i>
                </div>
                <h3 class=\"alert-hero-title\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.database_import_success"), "html", null, true);
        echo "</h3>
            </div>
        </div>
    </div>

    <div class=\"card__footer flex-container\">
        <a
            href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.database-configuration");
        echo "\"
            id=\"back\"
            class=\"btn btn-default flex-item disabled\"
            onclick=\"if (event.target.classList.contains('disabled')) event.preventDefault();\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.back"), "html", null, true);
        echo "
        </a>
        <a
            href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.configuration");
        echo "\"
            id=\"next\"
            class=\"btn btn-primary flex-item flex-right disabled\"
            onclick=\"if (event.target.classList.contains('disabled')) event.preventDefault();\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.forward"), "html", null, true);
        echo "
        </a>
    </div>

    <script>
        window.addEventListener('beforeunload', preventPageLeave);
        doRequest(0);

        function importFinished() {
            document.getElementById('back').classList.remove('disabled');
            document.getElementById('next').classList.remove('disabled');

            document.getElementById('import-container').classList.add('is--hidden');
            document.getElementById('import-finished').classList.remove('is--hidden');

            const progress = document.getElementById('progress');
            progress.classList.remove('active');

            window.removeEventListener('beforeunload', preventPageLeave);
        }

        function preventPageLeave(event) {
            event.preventDefault();

            return event.returnValue = 'A system installation is running.';
        }

        async function doRequest(offset) {
            const response = await fetch('";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.database-migrate");
        echo "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    offset: offset,
                }),
            })

            if (!response.ok) {
                document.getElementById('alert-error').classList.remove('is--hidden');
                document.getElementById('error-message').innerText = (await response.json()).error;
                document.getElementById('error-content').innerText = await response.text();

                document.getElementById('back').classList.remove('disabled');

                return;
            }

            const data = await response.json();

            document.getElementById('offset').innerText = data.offset;
            document.getElementById('total').innerText = data.total;

            const progress = data.offset / data.total * 100;
            document.getElementById('progress-bar').style.width = progress + '%';

            if (data.isFinished) {
                importFinished();
            } else {
                doRequest(data.offset);
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/database-import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 94,  160 => 66,  153 => 62,  147 => 59,  140 => 55,  130 => 48,  114 => 35,  107 => 33,  101 => 30,  87 => 18,  81 => 15,  77 => 14,  71 => 10,  69 => 9,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.database-import_header\"|trans }}</h2>
    </div>

    <div class=\"card__body database-import\">
        {% if error %}
            <div class=\"alert-hero error\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-warning\"></i>
                </div>
                <h3 class=\"alert-hero-title\">{{ \"shopware.installer.database_import_error_title\"|trans }}</h3>
                <div class=\"alert-hero-text\">{{ error }}</div>
            </div>
        {% endif %}

        <div class=\"alert alert-error is--hidden\">
            <h2>Error</h2>
            Received the following error message:
            <p id=\"error-message\"></p>

            Please try to fix this error and restart the installation.
            <h3>Response</h3>
            <pre id=\"error-content\"></pre>
        </div>

        <div id=\"import-container\" class=\"database-import-container\">
            <p class=\"database-import-text\">{{ \"shopware.installer.database-import_info_text\"|trans }}</p>

            <div class=\"database-import-count\">
                {{ \"shopware.installer.database_import_install_label\"|trans }} {{ \"shopware.installer.database_import_install_step_text\"|trans }}
                <span id=\"offset\" class=\"database-import-count-offset\">0</span>
                {{ \"shopware.installer.database_import_install_from_text\"|trans }}
                <span id=\"total\" class=\"database-import-count-total\">0</span>
            </div>
            <div id=\"progress\" class=\"progress active\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%\"></div>
            </div>
        </div>

        <div id=\"import-finished\" class=\"database-import-finish is--hidden\">
            <div class=\"alert-hero success\">
                <div class=\"alert-hero-icon\">
                    <i class=\"icon-checkmark\"></i>
                </div>
                <h3 class=\"alert-hero-title\">{{ \"shopware.installer.database_import_success\"|trans }}</h3>
            </div>
        </div>
    </div>

    <div class=\"card__footer flex-container\">
        <a
            href=\"{{ url('installer.database-configuration') }}\"
            id=\"back\"
            class=\"btn btn-default flex-item disabled\"
            onclick=\"if (event.target.classList.contains('disabled')) event.preventDefault();\">
            {{ \"shopware.installer.back\"|trans }}
        </a>
        <a
            href=\"{{ url('installer.configuration') }}\"
            id=\"next\"
            class=\"btn btn-primary flex-item flex-right disabled\"
            onclick=\"if (event.target.classList.contains('disabled')) event.preventDefault();\">
            {{ \"shopware.installer.forward\"|trans }}
        </a>
    </div>

    <script>
        window.addEventListener('beforeunload', preventPageLeave);
        doRequest(0);

        function importFinished() {
            document.getElementById('back').classList.remove('disabled');
            document.getElementById('next').classList.remove('disabled');

            document.getElementById('import-container').classList.add('is--hidden');
            document.getElementById('import-finished').classList.remove('is--hidden');

            const progress = document.getElementById('progress');
            progress.classList.remove('active');

            window.removeEventListener('beforeunload', preventPageLeave);
        }

        function preventPageLeave(event) {
            event.preventDefault();

            return event.returnValue = 'A system installation is running.';
        }

        async function doRequest(offset) {
            const response = await fetch('{{ url('installer.database-migrate') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    offset: offset,
                }),
            })

            if (!response.ok) {
                document.getElementById('alert-error').classList.remove('is--hidden');
                document.getElementById('error-message').innerText = (await response.json()).error;
                document.getElementById('error-content').innerText = await response.text();

                document.getElementById('back').classList.remove('disabled');

                return;
            }

            const data = await response.json();

            document.getElementById('offset').innerText = data.offset;
            document.getElementById('total').innerText = data.total;

            const progress = data.offset / data.total * 100;
            document.getElementById('progress-bar').style.width = progress + '%';

            if (data.isFinished) {
                importFinished();
            } else {
                doRequest(data.offset);
            }
        }
    </script>
{% endblock %}
", "@Installer/installer/database-import.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/database-import.html.twig");
    }
}
