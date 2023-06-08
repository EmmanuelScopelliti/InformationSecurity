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

/* @Profiling/Collector/rules.html.twig */
class __TwigTemplate_420dddea1996d4337a2dc80e4de277e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiling/Collector/rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiling/Collector/rules.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Profiling/Collector/rules.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "matchingRuleCount", [], "any", false, false, false, 6), "html", null, true);
        echo " active rules</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "matchingRuleCount", [], "any", false, false, false, 9) > 0)) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 11));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 12
                echo "                ";
                if ((sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12) <= 3)) {
                    // line 13
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 14
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "name", [], "any", false, false, false, 14), "html", null, true);
                    echo "</b>
                        <span>";
                    // line 15
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "priority", [], "any", false, false, false, 15), "html", null, true);
                    echo "</span>
                    </div>
                ";
                }
                // line 18
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            ";
            // line 20
            if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "matchingRuleCount", [], "any", false, false, false, 20) > 3)) {
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span class=\"sf-toolbar-status\">+";
                // line 22
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "matchingRuleCount", [], "any", false, false, false, 22) - 3), "html", null, true);
                echo " more</span>
                </div>
            ";
            }
            // line 25
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "    ";
        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Active Rules</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        // line 42
        echo "    <h2>Active Rules</h2>

    ";
        // line 44
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "matchingRuleCount", [], "any", false, false, false, 44) > 0)) {
            // line 45
            echo "        <table class=\"active-rules\" data-filters>
            <thead>
            <tr>
                <th>Priority</th>
                <th>Name</th>
                <th>ID</th>
                <th>Module types</th>
                <th class=\"full-width\">Description</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 57
                echo "                <tr>
                    <td class=\"text-normal nowrap\">";
                // line 58
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "priority", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                    <td class=\"font-normal text-small text-bold nowrap\">";
                // line 59
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                    <td class=\"text-normal nowrap\"><span class=\"badge text-small\">";
                // line 60
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "</span></td>
                    <td class=\"text-normal nowrap\">";
                // line 61
                if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["rule"], "moduleTypes", [], "any", false, true, false, 61), "types", [], "any", true, true, false, 61)) {
                    echo sw_escape_filter($this->env, twig_join_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["rule"], "moduleTypes", [], "any", false, false, false, 61), "types", [], "any", false, false, false, 61), ", "), "html", null, true);
                }
                echo "</td>
                    <td class=\"font-normal text-small\">";
                // line 62
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["rule"], "description", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>No active rules.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Profiling/Collector/rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 68,  268 => 65,  259 => 62,  253 => 61,  249 => 60,  245 => 59,  241 => 58,  238 => 57,  234 => 56,  221 => 45,  219 => 44,  215 => 42,  213 => 41,  203 => 40,  189 => 35,  186 => 34,  184 => 33,  174 => 32,  162 => 28,  159 => 27,  156 => 26,  153 => 25,  147 => 22,  144 => 21,  142 => 20,  139 => 19,  125 => 18,  119 => 15,  115 => 14,  112 => 13,  109 => 12,  91 => 11,  88 => 10,  86 => 9,  83 => 8,  78 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/form.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.matchingRuleCount }} active rules</span>
    {% endset %}

    {% if collector.matchingRuleCount > 0 %}
        {% set text %}
            {% for rule in collector.data %}
                {% if loop.index <= 3 %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>{{ rule.name }}</b>
                        <span>{{ rule.priority }}</span>
                    </div>
                {% endif %}
            {% endfor %}

            {% if collector.matchingRuleCount > 3 %}
                <div class=\"sf-toolbar-info-piece\">
                    <span class=\"sf-toolbar-status\">+{{ collector.matchingRuleCount - 3 }} more</span>
                </div>
            {% endif %}
        {% endset %}
    {% endif %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}
{% endblock %}


{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/form.svg') }}</span>
        <strong>Active Rules</strong>
    </span>
{% endblock %}

{% block panel %}
    {# Optional, for showing the most details. #}
    <h2>Active Rules</h2>

    {% if collector.matchingRuleCount > 0 %}
        <table class=\"active-rules\" data-filters>
            <thead>
            <tr>
                <th>Priority</th>
                <th>Name</th>
                <th>ID</th>
                <th>Module types</th>
                <th class=\"full-width\">Description</th>
            </tr>
            </thead>
            <tbody>
            {% for rule in collector.data %}
                <tr>
                    <td class=\"text-normal nowrap\">{{ rule.priority }}</td>
                    <td class=\"font-normal text-small text-bold nowrap\">{{ rule.name }}</td>
                    <td class=\"text-normal nowrap\"><span class=\"badge text-small\">{{ rule.id }}</span></td>
                    <td class=\"text-normal nowrap\">{% if rule.moduleTypes.types is defined %}{{ rule.moduleTypes.types|join(', ') }}{% endif %}</td>
                    <td class=\"font-normal text-small\">{{ rule.description }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No active rules.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Profiling/Collector/rules.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Profiling/Resources/views/Collector/rules.html.twig");
    }
}
