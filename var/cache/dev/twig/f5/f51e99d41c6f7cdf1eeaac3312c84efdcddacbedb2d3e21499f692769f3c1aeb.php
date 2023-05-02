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

/* @Installer/installer/base.html.twig */
class __TwigTemplate_ae757d2080b1a0e281847d4a42976cc80806ed7e6b9c57e58516c774ee7dd672 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.header_title"), "html", null, true);
        echo " | Shopware 6</title>

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/images/favicon/favicon-16x16.png", "asset"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/images/favicon/favicon-32x32.png", "asset"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/styles/reset.css", "asset"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "version", [], "any", false, false, false, 15), "html", null, true);
        echo "\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/styles/fonts.css", "asset"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "version", [], "any", false, false, false, 16), "html", null, true);
        echo "\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/styles/icons.css", "asset"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "version", [], "any", false, false, false, 17), "html", null, true);
        echo "\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/styles/style.css", "asset"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "version", [], "any", false, false, false, 18), "html", null, true);
        echo "\" media=\"all\"/>
    </head>
    <body>
        <header class=\"header-main\">
            <div class=\"header-main__branding\">
                <img class=\"header-main__logo\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/images/sw-logo-blue.svg", "asset"), "html", null, true);
        echo "\" width=\"148\" alt=\"Shopware\">
                <div class=\"header-main__title\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.header_title"), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"version--notice\">
                ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.version_text"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "version", [], "any", false, false, false, 30), "html", null, true);
        echo "
            </div>
        </header>

        <div class=\"page--wrap\">
            <div class=\"content--wrapper\">
                <nav class=\"navigation--main\">
                    <ul class=\"navigation--list\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 39
            echo "                            <li class=\"navigation--entry ";
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "active", [], "any", false, false, false, 39)) {
                echo "is--active";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "isCompleted", [], "any", false, false, false, 39)) {
                echo "is--complete";
            }
            echo "\">
                                <span class=\"navigation--link\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("shopware.installer.menuitem_" . twig_get_attribute($this->env, $this->source, $context["entry"], "label", [], "any", false, false, false, 40))), "html", null, true);
            echo "</span>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </ul>
                </nav>

                <main class=\"content--main\">
                    ";
        // line 47
        $this->displayBlock('base_content', $context, $blocks);
        // line 48
        echo "                </main>
            </div>
        </div>

        <footer class=\"footer-main\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supportedLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "                <a href=\"?language=";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["language"]), "html", null, true);
            echo "\"
                   class=\"language-item ";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 55), "locale", [], "any", false, false, false, 55), $context["language"]))) {
                echo "is--active";
            }
            echo "\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["language"]), "html", null, true);
            echo "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </footer>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 47,  186 => 59,  177 => 56,  171 => 55,  166 => 54,  162 => 53,  155 => 48,  153 => 47,  147 => 43,  138 => 40,  127 => 39,  123 => 38,  110 => 30,  102 => 25,  97 => 23,  87 => 18,  81 => 17,  75 => 16,  69 => 15,  62 => 11,  58 => 10,  53 => 8,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{{ \"shopware.installer.header_title\"|trans }} | Shopware 6</title>

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('bundles/installer/assets/images/favicon/favicon-16x16.png', 'asset') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('bundles/installer/assets/images/favicon/favicon-32x32.png', 'asset') }}\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/installer/assets/styles/reset.css', 'asset') }}?v={{ shopware.version }}\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/installer/assets/styles/fonts.css', 'asset') }}?v={{ shopware.version }}\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/installer/assets/styles/icons.css', 'asset') }}?v={{ shopware.version }}\" media=\"all\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/installer/assets/styles/style.css', 'asset') }}?v={{ shopware.version }}\" media=\"all\"/>
    </head>
    <body>
        <header class=\"header-main\">
            <div class=\"header-main__branding\">
                <img class=\"header-main__logo\" src=\"{{ asset('bundles/installer/assets/images/sw-logo-blue.svg', 'asset') }}\" width=\"148\" alt=\"Shopware\">
                <div class=\"header-main__title\">
                    {{ \"shopware.installer.header_title\"|trans }}
                </div>
            </div>

            <div class=\"version--notice\">
                {{ \"shopware.installer.version_text\"|trans }} {{ shopware.version }}
            </div>
        </header>

        <div class=\"page--wrap\">
            <div class=\"content--wrapper\">
                <nav class=\"navigation--main\">
                    <ul class=\"navigation--list\">
                        {% for entry in menu %}
                            <li class=\"navigation--entry {% if entry.active %}is--active{% endif %} {% if entry.isCompleted %}is--complete{% endif %}\">
                                <span class=\"navigation--link\">{{ (\"shopware.installer.menuitem_\" ~ entry.label)|trans }}</span>
                            </li>
                        {% endfor %}
                    </ul>
                </nav>

                <main class=\"content--main\">
                    {% block base_content %}{% endblock %}
                </main>
            </div>
        </div>

        <footer class=\"footer-main\">
            {% for language in supportedLanguages %}
                <a href=\"?language={{ language|lower }}\"
                   class=\"language-item {% if app.request.locale == language %}is--active{% endif %}\">
                    {{ language|upper }}
                </a>
            {% endfor %}
        </footer>
    </body>
</html>
", "@Installer/installer/base.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/base.html.twig");
    }
}
