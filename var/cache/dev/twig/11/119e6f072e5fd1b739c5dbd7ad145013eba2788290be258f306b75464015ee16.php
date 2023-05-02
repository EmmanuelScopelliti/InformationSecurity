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

/* @Installer/installer/language-selection.html.twig */
class __TwigTemplate_2306d6f333eb6c92edba0dc708ff390a50b23e02c722cd3748733900054cb137 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/language-selection.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/language-selection.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.language-selection_header"), "html", null, true);
        echo "</h2>
    </div>

    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.language-selection");
        echo "\" method=\"get\">
        <div class=\"card__body is--align-center\">

            <div class=\"welcome-illustration\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/installer/assets/images/welcome.svg", "asset"), "html", null, true);
        echo "\" alt=\"\">
            </div>

            <div class=\"welcome-container\">
                <h1 class=\"welcome-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.language-selection_welcome_title"), "html", null, true);
        echo "</h1>

                <p class=\"welcome-intro-message\">";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.language-selection_welcome_message");
        echo "</p>

                <label for=\"language\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.language-selection_select_language"), "html", null, true);
        echo "
                    <a class=\"help-badge\"
                       href=\"#\"
                       data-tooltip=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.language-selection_info_message"), "html", null, true);
        echo "\">
                        <i class=\"icon-help\"></i>
                    </a>
                </label>

                <div class=\"select-wrapper language\">
                    <img class=\"language-flag\"
                         src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/installer/assets/images/flags/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "locale", [], "any", false, false, false, 31)) . ".png"), "asset"), "html", null, true);
        echo "\"
                         alt=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                    <select id=\"language\" name=\"language\" class=\"language-selection\" onchange=\"this.form.submit();\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supportedLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "locale", [], "any", false, false, false, 35), $context["language"]))) {
                echo "selected";
            }
            echo ">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("shopware.installer.select_language_" . $context["language"])), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
                </div>
            </div>
        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.requirements");
        echo "\" class=\"btn btn-primary flex-item flex-right\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.forward"), "html", null, true);
        echo "</a>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/language-selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  140 => 39,  131 => 36,  122 => 35,  118 => 34,  113 => 32,  109 => 31,  99 => 24,  93 => 21,  87 => 18,  82 => 16,  75 => 12,  68 => 8,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.language-selection_header\"|trans }}</h2>
    </div>

    <form action=\"{{ url('installer.language-selection') }}\" method=\"get\">
        <div class=\"card__body is--align-center\">

            <div class=\"welcome-illustration\">
                <img src=\"{{ asset('bundles/installer/assets/images/welcome.svg', 'asset') }}\" alt=\"\">
            </div>

            <div class=\"welcome-container\">
                <h1 class=\"welcome-title\">{{ \"shopware.installer.language-selection_welcome_title\"|trans }}</h1>

                <p class=\"welcome-intro-message\">{{ \"shopware.installer.language-selection_welcome_message\"|trans|raw }}</p>

                <label for=\"language\">
                    {{ \"shopware.installer.language-selection_select_language\"|trans }}
                    <a class=\"help-badge\"
                       href=\"#\"
                       data-tooltip=\"{{ \"shopware.installer.language-selection_info_message\"|trans }}\">
                        <i class=\"icon-help\"></i>
                    </a>
                </label>

                <div class=\"select-wrapper language\">
                    <img class=\"language-flag\"
                         src=\"{{ asset('bundles/installer/assets/images/flags/' ~ app.request.locale ~ '.png', 'asset') }}\"
                         alt=\"{{ app.request.locale }}\">
                    <select id=\"language\" name=\"language\" class=\"language-selection\" onchange=\"this.form.submit();\">
                        {% for language in supportedLanguages %}
                            <option value=\"{{ language }}\" {% if app.request.locale == language %}selected{% endif %}>
                                {{ (\"shopware.installer.select_language_\" ~ language) | trans }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"{{ url('installer.requirements') }}\" class=\"btn btn-primary flex-item flex-right\">{{ \"shopware.installer.forward\"|trans }}</a>
        </div>
    </form>
{% endblock %}
", "@Installer/installer/language-selection.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/language-selection.html.twig");
    }
}
