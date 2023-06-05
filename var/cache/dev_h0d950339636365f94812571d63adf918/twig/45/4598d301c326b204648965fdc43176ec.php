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

/* @Elasticsearch/Collector/elasticsearch.html.twig */
class __TwigTemplate_9ce1a8ef07a40a6b0a5567c8ec094992 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Elasticsearch/Collector/elasticsearch.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Elasticsearch/Collector/elasticsearch.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Elasticsearch/Collector/elasticsearch.html.twig", 1);
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
        $context["time"] = ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 4)) ? (twig_sprintf("%0.0f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 4))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@Elasticsearch/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo sw_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        ";
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 12)) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Request Time</b>
                <span>";
            // line 15
            echo sw_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Requests</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAmount", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Name</b>
                <span class=\"sf-toolbar-status\">";
            // line 23
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clusterInfo", [], "any", false, false, false, 23), "cluster_name", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status\">";
            // line 27
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clusterInfo", [], "any", false, false, false, 27), "status", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Node(s)</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clusterInfo", [], "any", false, false, false, 31), "number_of_nodes", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
            </div>
        ";
        } else {
            // line 34
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Elasticsearch</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">disabled</span>
            </div>
        ";
        }
        // line 39
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
    ";
        // line 41
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 45
        echo "    <span class=\"label ";
        echo (((0 == sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAmount", [], "any", false, false, false, 45))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 46
        echo twig_include($this->env, $context, "@Elasticsearch/Collector/icon.svg");
        echo "</span>
        <strong>Elasticsearch</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 52
        echo "    ";
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 52)) {
            // line 53
            echo "        <h2>Query Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo sw_escape_filter($this->env, twig_sprintf("%0.2f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 57)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Query Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 61
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clusterInfo", [], "any", false, false, false, 61), "number_of_nodes", [], "any", false, false, false, 61), "html", null, true);
            echo "</span>
                <span class=\"label\">Node(s)</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "indices", [], "any", false, false, false, 65)), "html", null, true);
            echo "</span>
                <span class=\"label\">Indices</span>
            </div>
        </div>

        <h2>Queries</h2>

        ";
            // line 72
            if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAmount", [], "any", false, false, false, 72) == 0)) {
                // line 73
                echo "            <div class=\"empty\">
                <p>No queries were performed.</p>
            </div>
        ";
            } else {
                // line 77
                echo "            <table class=\"queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Execution Time<span></span></th>
                    <th style=\"width: 100%\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries\">
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requests", [], "any", false, false, false, 86));
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
                foreach ($context['_seq'] as $context["key"] => $context["query"]) {
                    // line 87
                    echo "                    <tr id=\"queryNo-";
                    echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                        <td class=\"nowrap\">";
                    // line 88
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 89
                    echo sw_escape_filter($this->env, twig_sprintf("%0.2f", (sw_get_attribute($this->env, $this->source, $context["query"], "time", [], "any", false, false, false, 89) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            <strong>Request:</strong>
                            <div>
                                <pre>";
                    // line 93
                    echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(sw_get_attribute($this->env, $this->source, $context["query"], "request", [], "any", false, false, false, 93)), "html", null, true);
                    echo "</pre>
                            </div>
                            <div class=\"font-normal text-small\">
                                <strong>Item count</strong>: ";
                    // line 96
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["query"], "response", [], "any", false, false, false, 96), "hits", [], "any", false, false, false, 96), "total", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96), "html", null, true);
                    echo "<br />

                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    // line 98
                    echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted request\">View formatted request</a>
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    // line 99
                    echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "-response\" data-toggle-alt-content=\"Hide formatted response\">View formatted response</a>

                                ";
                    // line 101
                    if (sw_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 101)) {
                        // line 102
                        echo "                                    &nbsp;
                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#swag-query-backtrace-";
                        // line 103
                        echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                ";
                    }
                    // line 105
                    echo "                            </div>

                            <div id=\"formatted-query-";
                    // line 107
                    echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                <code>
                                    <pre>POST ";
                    // line 109
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["query"], "url", [], "any", false, false, false, 109), "html", null, true);
                    echo "
    Accept: application/json
    Content-Type: application/json

    ";
                    // line 113
                    if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["query"], "request", [], "any", false, true, false, 113), "body", [], "any", true, true, false, 113)) {
                        // line 114
                        echo "    ";
                        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["query"], "request", [], "any", false, false, false, 114), "body", [], "any", false, false, false, 114), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                        echo "
    ";
                    }
                    // line 116
                    echo "                                    </pre>
                                </code>
                            </div>

                            <div id=\"formatted-query-";
                    // line 120
                    echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "-response\" class=\"sql-runnable hidden\">
                                <code>
                                    <pre>";
                    // line 122
                    echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(sw_get_attribute($this->env, $this->source, $context["query"], "response", [], "any", false, false, false, 122), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                    echo "</pre>
                                </code>
                            </div>

                            ";
                    // line 126
                    if (sw_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 126)) {
                        // line 127
                        echo "                                <div id=\"swag-query-backtrace-";
                        echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" class=\"sql-runnable hidden\">
                                    <code><pre>";
                        // line 128
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 128), "html", null, true);
                        echo "</pre></code>
                                </div>
                            ";
                    }
                    // line 131
                    echo "                        </td>
                    </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                </tbody>
            </table>

            <h2>Cluster Status</h2>

            <pre>";
                // line 139
                echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clusterInfo", [], "any", false, false, false, 139), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                echo "</pre>

            <h2>Indices</h2>

            <table class=\"indices-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">Name<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Status<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Replication (pri, rep)<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Doc Count<span></span></th>
                </tr>
                </thead>
                <tbody>
                    ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "indices", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 154
                    echo "                        <tr>
                            <td>";
                    // line 155
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["index"], "index", [], "any", false, false, false, 155), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 156
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["index"], "status", [], "any", false, false, false, 156), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 157
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["index"], "pri", [], "any", false, false, false, 157), "html", null, true);
                    echo ", ";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["index"], "rep", [], "any", false, false, false, 157), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 158
                    echo sw_escape_filter($this->env, (($__internal_compile_0 = $context["index"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["docs.count"] ?? null) : null), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                </tbody>
            </table>
        ";
            }
            // line 164
            echo "    ";
        } else {
            // line 165
            echo "        <div class=\"empty\">
            <p>Elasticsearch was not enabled in this request.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Elasticsearch/Collector/elasticsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 165,  442 => 164,  437 => 161,  428 => 158,  422 => 157,  418 => 156,  414 => 155,  411 => 154,  407 => 153,  390 => 139,  383 => 134,  367 => 131,  361 => 128,  356 => 127,  354 => 126,  347 => 122,  342 => 120,  336 => 116,  330 => 114,  328 => 113,  321 => 109,  316 => 107,  312 => 105,  307 => 103,  304 => 102,  302 => 101,  297 => 99,  293 => 98,  288 => 96,  282 => 93,  275 => 89,  271 => 88,  266 => 87,  249 => 86,  238 => 77,  232 => 73,  230 => 72,  220 => 65,  213 => 61,  206 => 57,  200 => 53,  197 => 52,  187 => 51,  173 => 46,  168 => 45,  158 => 44,  146 => 41,  143 => 40,  140 => 39,  133 => 34,  127 => 31,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  95 => 13,  92 => 12,  90 => 11,  87 => 10,  81 => 7,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.time ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@Elasticsearch/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        {% if collector.enabled %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Request Time</b>
                <span>{{ time }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Requests</b>
                <span class=\"sf-toolbar-status\">{{ collector.requestAmount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Name</b>
                <span class=\"sf-toolbar-status\">{{ collector.clusterInfo.cluster_name }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status\">{{ collector.clusterInfo.status }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Node(s)</b>
                <span class=\"sf-toolbar-status\">{{ collector.clusterInfo.number_of_nodes }}</span>
            </div>
        {% else %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Elasticsearch</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">disabled</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ 0 == collector.requestAmount ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Elasticsearch/Collector/icon.svg') }}</span>
        <strong>Elasticsearch</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.enabled %}
        <h2>Query Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Query Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.clusterInfo.number_of_nodes }}</span>
                <span class=\"label\">Node(s)</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.indices|length }}</span>
                <span class=\"label\">Indices</span>
            </div>
        </div>

        <h2>Queries</h2>

        {% if collector.requestAmount == 0 %}
            <div class=\"empty\">
                <p>No queries were performed.</p>
            </div>
        {% else %}
            <table class=\"queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Execution Time<span></span></th>
                    <th style=\"width: 100%\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries\">
                {% for key, query in collector.requests %}
                    <tr id=\"queryNo-{{ key }}\">
                        <td class=\"nowrap\">{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(query.time * 1000) }}&nbsp;ms</td>
                        <td>
                            <strong>Request:</strong>
                            <div>
                                <pre>{{ query.request|json_encode }}</pre>
                            </div>
                            <div class=\"font-normal text-small\">
                                <strong>Item count</strong>: {{ query.response.hits.total.value }}<br />

                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ key }}\" data-toggle-alt-content=\"Hide formatted request\">View formatted request</a>
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ key }}-response\" data-toggle-alt-content=\"Hide formatted response\">View formatted response</a>

                                {% if query.backtrace is defined %}
                                    &nbsp;
                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#swag-query-backtrace-{{ key }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                {% endif %}
                            </div>

                            <div id=\"formatted-query-{{ key }}\" class=\"sql-runnable hidden\">
                                <code>
                                    <pre>POST {{ query.url }}
    Accept: application/json
    Content-Type: application/json

    {% if query.request.body is defined %}
    {{ query.request.body|json_encode(constant('JSON_PRETTY_PRINT')) }}
    {% endif %}
                                    </pre>
                                </code>
                            </div>

                            <div id=\"formatted-query-{{ key }}-response\" class=\"sql-runnable hidden\">
                                <code>
                                    <pre>{{ query.response|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
                                </code>
                            </div>

                            {% if query.backtrace is defined %}
                                <div id=\"swag-query-backtrace-{{ key }}\" class=\"sql-runnable hidden\">
                                    <code><pre>{{ query.backtrace }}</pre></code>
                                </div>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <h2>Cluster Status</h2>

            <pre>{{ collector.clusterInfo|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>

            <h2>Indices</h2>

            <table class=\"indices-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">Name<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Status<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Replication (pri, rep)<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">Doc Count<span></span></th>
                </tr>
                </thead>
                <tbody>
                    {% for index in collector.indices %}
                        <tr>
                            <td>{{ index.index }}</td>
                            <td>{{ index.status }}</td>
                            <td>{{ index.pri }}, {{ index.rep }}</td>
                            <td>{{ index['docs.count'] }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>Elasticsearch was not enabled in this request.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Elasticsearch/Collector/elasticsearch.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/elasticsearch/Resources/views/Collector/elasticsearch.html.twig");
    }
}
