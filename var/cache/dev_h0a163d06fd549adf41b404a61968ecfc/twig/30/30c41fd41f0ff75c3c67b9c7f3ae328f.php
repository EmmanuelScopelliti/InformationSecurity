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

/* @Profiling/Collector/script_traces.html.twig */
class __TwigTemplate_b70da1996b87cbb296e2940a36fa734a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiling/Collector/script_traces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiling/Collector/script_traces.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Profiling/Collector/script_traces.html.twig", 1);
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
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 6
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "scriptCount", [], "any", false, false, false, 6), "html", null, true);
        echo " in ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "took", [], "any", false, false, false, 6), "html", null, true);
        echo " ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["status"] = (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "deprecationCount", [], "any", false, false, false, 9) > 0)) ? ("yellow") : (""));
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Hooks</b>
            ";
        // line 15
        echo "            <span>";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hookCount", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Scripts</b>
            <span>";
        // line 20
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "scriptCount", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Script time</b>
            <span>";
        // line 25
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "took", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 28
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "deprecationCount", [], "any", false, false, false, 28) > 0)) {
            // line 29
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 31
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "deprecationCount", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 34
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
    ";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 41
        echo "    ";
        // line 42
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
        <strong>Scripts</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    ";
        // line 50
        echo "    <h2>Scripts</h2>

    ";
        // line 52
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "hookCount", [], "any", false, false, false, 52) > 0)) {
            // line 53
            echo "        <div class=\"sf-tabs\" data-proccessed=\"true\">
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["hook"] => $context["scripts"]) {
                // line 55
                echo "                <div class=\"tab\">
                    ";
                // line 56
                $context["deprecationCount"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->reduce($context["scripts"], function ($__count__, $__script__) use ($context, $macros) { $context["count"] = $__count__; $context["script"] = $__script__; return (($context["count"] ?? null) + twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["script"] ?? null), "deprecations", [], "any", false, false, false, 56))); });
                // line 57
                echo "                    <h3 class=\"tab-title\">";
                echo sw_escape_filter($this->env, $context["hook"], "html", null, true);
                echo " <span class=\"badge ";
                echo (((($context["deprecationCount"] ?? null) > 0)) ? ("status-warning") : (""));
                echo "\">";
                echo sw_escape_filter($this->env, twig_length_filter($this->env, $context["scripts"]), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 60
                if ((($context["deprecationCount"] ?? null) > 0)) {
                    // line 61
                    echo "                            <h2>Deprecations</h2>
                            <table class=\"deprecations\" data-filters>
                                <thead>
                                <tr>
                                    <th>Script</th>
                                    <th>Count</th>
                                    <th class=\"full-width\">Deprecation Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["scripts"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                        // line 72
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, $context["script"], "deprecations", [], "any", false, false, false, 72));
                        foreach ($context['_seq'] as $context["deprecation"] => $context["count"]) {
                            // line 73
                            echo "                                        <tr class=\"log-status-warning\">
                                            <td class=\"font-normal text-small text-bold nowrap\">";
                            // line 74
                            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["script"], "name", [], "any", false, false, false, 74), "html", null, true);
                            echo "</td>
                                            <td class=\"text-normal nowrap\">";
                            // line 75
                            echo sw_escape_filter($this->env, $context["count"], "html", null, true);
                            echo "</td>
                                            <td>";
                            // line 76
                            echo sw_escape_filter($this->env, $context["deprecation"], "html", null, true);
                            echo "</td>
                                        </tr>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['deprecation'], $context['count'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 83
                echo "                        ";
                if ((twig_length_filter($this->env, $context["scripts"]) > 0)) {
                    // line 84
                    echo "                            <h2>Debug</h2>
                            <table class=\"scripts\" data-filters>
                                <thead>
                                    <tr>
                                        <th>Script</th>
                                        <th>Took</th>
                                        <th class=\"full-width\">Output</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["scripts"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                        // line 95
                        echo "                                        <tr>
                                            <td class=\"font-normal text-small text-bold nowrap\">";
                        // line 96
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["script"], "name", [], "any", false, false, false, 96), "html", null, true);
                        echo "</td>
                                            <td class=\"text-normal nowrap\">";
                        // line 97
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["script"], "took", [], "any", false, false, false, 97), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 98
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, sw_get_attribute($this->env, $this->source, $context["script"], "output", [], "any", false, false, false, 98));
                        echo "</td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                                </tbody>
                            </table>
                        ";
                } else {
                    // line 104
                    echo "                            <div class=\"empty\">
                                <p>No scripts called for this hook.</p>
                            </div>
                        ";
                }
                // line 108
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['hook'], $context['scripts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </div>
    ";
        } else {
            // line 113
            echo "        <div class=\"empty\">
            <p>No hooks called.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Profiling/Collector/script_traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 113,  334 => 111,  326 => 108,  320 => 104,  315 => 101,  306 => 98,  302 => 97,  298 => 96,  295 => 95,  291 => 94,  279 => 84,  276 => 83,  271 => 80,  265 => 79,  256 => 76,  252 => 75,  248 => 74,  245 => 73,  240 => 72,  236 => 71,  224 => 61,  222 => 60,  211 => 57,  209 => 56,  206 => 55,  202 => 54,  199 => 53,  197 => 52,  193 => 50,  191 => 49,  181 => 48,  167 => 43,  164 => 42,  162 => 41,  152 => 40,  140 => 36,  137 => 35,  134 => 34,  128 => 31,  124 => 29,  122 => 28,  116 => 25,  108 => 20,  99 => 15,  95 => 12,  93 => 11,  90 => 10,  88 => 9,  85 => 8,  78 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/event.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.scriptCount }} in {{ collector.took }} ms</span>
    {% endset %}

    {% set status = collector.deprecationCount > 0 ? 'yellow' %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Hooks</b>
            {# @var collector \\Shopware\\Core\\Framework\\Script\\Debugging\\ScriptTraces #}
            <span>{{ collector.hookCount }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Scripts</b>
            <span>{{ collector.scriptCount }}</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Script time</b>
            <span>{{ collector.took }}</span>
        </div>

        {% if collector.deprecationCount > 0 %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.deprecationCount }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}
{% endblock %}


{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
        <strong>Scripts</strong>
    </span>
{% endblock %}

{% block panel %}
    {# Optional, for showing the most details. #}
    <h2>Scripts</h2>

    {% if collector.hookCount > 0 %}
        <div class=\"sf-tabs\" data-proccessed=\"true\">
            {% for hook, scripts in collector.data %}
                <div class=\"tab\">
                    {% set deprecationCount = scripts|reduce((count, script) => count + script.deprecations|length) %}
                    <h3 class=\"tab-title\">{{ hook }} <span class=\"badge {{ deprecationCount > 0 ? 'status-warning' }}\">{{ scripts|length }}</span></h3>

                    <div class=\"tab-content\">
                        {% if deprecationCount > 0 %}
                            <h2>Deprecations</h2>
                            <table class=\"deprecations\" data-filters>
                                <thead>
                                <tr>
                                    <th>Script</th>
                                    <th>Count</th>
                                    <th class=\"full-width\">Deprecation Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for script in scripts %}
                                    {% for deprecation, count in script.deprecations %}
                                        <tr class=\"log-status-warning\">
                                            <td class=\"font-normal text-small text-bold nowrap\">{{ script.name }}</td>
                                            <td class=\"text-normal nowrap\">{{ count }}</td>
                                            <td>{{ deprecation }}</td>
                                        </tr>
                                    {% endfor %}
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                        {% if scripts|length > 0 %}
                            <h2>Debug</h2>
                            <table class=\"scripts\" data-filters>
                                <thead>
                                    <tr>
                                        <th>Script</th>
                                        <th>Took</th>
                                        <th class=\"full-width\">Output</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for script in scripts %}
                                        <tr>
                                            <td class=\"font-normal text-small text-bold nowrap\">{{ script.name }}</td>
                                            <td class=\"text-normal nowrap\">{{ script.took }}</td>
                                            <td>{{ dump(script.output) }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        {% else %}
                            <div class=\"empty\">
                                <p>No scripts called for this hook.</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No hooks called.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Profiling/Collector/script_traces.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Profiling/Resources/views/Collector/script_traces.html.twig");
    }
}
