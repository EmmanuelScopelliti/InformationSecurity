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

/* @Enqueue/Profiler/panel.html.twig */
class __TwigTemplate_258f4f099ce9831bcea33f5040427f75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Enqueue/Profiler/panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Enqueue/Profiler/panel.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Enqueue/Profiler/panel.html.twig", 1);
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
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "count", [], "any", false, false, false, 4) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Enqueue/Icon/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 8
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "count", [], "any", false, false, false, 8), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 10
            echo "
        ";
            // line 11
            ob_start();
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 14
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "count", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "
        ";
            // line 18
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 23
        echo "    <span class=\"label ";
        echo (( !sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "count", [], "any", false, false, false, 23)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 24
        echo twig_include($this->env, $context, "@Enqueue/Icon/icon.svg");
        echo "</span>
        <strong>Message Queue</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 30
        echo "    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "count", [], "any", false, false, false, 30) > 0)) {
            // line 31
            echo "    <h2>Sent messages</h2>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sentMessages", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["clientName"] => $context["sentMessages"]) {
                // line 33
                echo "            ";
                if ((twig_length_filter($this->env, $context["sentMessages"]) > 0)) {
                    // line 34
                    echo "                <h3>Client: ";
                    echo sw_escape_filter($this->env, $context["clientName"], "html", null, true);
                    echo "</h3>
                <table>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Topic</th>
                        <th>Command</th>
                        <th>Message</th>
                        <th>Priority</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sentMessages"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["sentMessage"]) {
                        // line 48
                        echo "                        <tr>
                            <td>";
                        // line 49
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 50
                        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, $context["sentMessage"], "topic", [], "any", true, true, false, 50)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, $context["sentMessage"], "topic", [], "any", false, false, false, 50), null)) : (null)), "html", null, true);
                        echo "</td>
                            <td>";
                        // line 51
                        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, $context["sentMessage"], "command", [], "any", true, true, false, 51)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, $context["sentMessage"], "command", [], "any", false, false, false, 51), null)) : (null)), "html", null, true);
                        echo "</td>
                            <td style=\"width: 70%\" class=\"metadata\">
                                <span>
                                    ";
                        // line 54
                        $context["body"] = sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "ensureString", [0 => sw_get_attribute($this->env, $this->source, $context["sentMessage"], "body", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                        // line 55
                        echo "                                    ";
                        echo sw_escape_filter($this->env, (((twig_length_filter($this->env, ($context["body"] ?? null)) > 40)) ? ((twig_slice($this->env, ($context["body"] ?? null), 0, 40) . "...")) : (($context["body"] ?? null))), "html", null, true);
                        echo "
                                </span>
                                ";
                        // line 57
                        if ((twig_length_filter($this->env, ($context["body"] ?? null)) > 40)) {
                            // line 58
                            echo "                                    <a class=\"btn btn-link text-small sf-toggle\"
                                       data-toggle-selector=\"#message-body-";
                            // line 59
                            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
                            echo "\"
                                       data-toggle-alt-content=\"Hide body\"
                                    >Show body</a>
                                    <div id=\"message-body-";
                            // line 62
                            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
                            echo "\"
                                         class=\"context sf-toggle-content sf-toggle-hidden\">
                                        <pre>";
                            // line 64
                            echo sw_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
                            echo "</pre>
                                    </div>
                                ";
                        }
                        // line 67
                        echo "                            <td>
                                <span title=\"";
                        // line 68
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["sentMessage"], "priority", [], "any", false, false, false, 68), "html", null, true);
                        echo "\">";
                        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "prettyPrintPriority", [0 => sw_get_attribute($this->env, $this->source, $context["sentMessage"], "priority", [], "any", false, false, false, 68)], "method", false, false, false, 68), "html", null, true);
                        echo "</span>
                            </td>
                            <td style=\"white-space:nowrap;\">
                                ";
                        // line 71
                        echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, $context["sentMessage"], "sentAt", [], "any", false, false, false, 71), "i:s.v"), "html", null, true);
                        echo "
                            </td>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sentMessage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    </tbody>

                </table>
            ";
                }
                // line 79
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['sentMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        } else {
            // line 81
            echo "        <div class=\"empty\">
            <p>No messages were sent.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Enqueue/Profiler/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 81,  292 => 80,  286 => 79,  280 => 75,  262 => 71,  254 => 68,  251 => 67,  245 => 64,  240 => 62,  234 => 59,  231 => 58,  229 => 57,  223 => 55,  221 => 54,  215 => 51,  211 => 50,  207 => 49,  204 => 48,  187 => 47,  170 => 34,  167 => 33,  163 => 32,  160 => 31,  157 => 30,  147 => 29,  133 => 24,  128 => 23,  118 => 22,  105 => 18,  102 => 17,  96 => 14,  92 => 12,  90 => 11,  87 => 10,  82 => 8,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.count > 0 %}
        {% set icon %}
            {{ include('@Enqueue/Icon/icon.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.count }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.count }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.count ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Enqueue/Icon/icon.svg') }}</span>
        <strong>Message Queue</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.count > 0 %}
    <h2>Sent messages</h2>
        {% for clientName, sentMessages in collector.sentMessages %}
            {% if sentMessages|length > 0 %}
                <h3>Client: {{ clientName }}</h3>
                <table>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Topic</th>
                        <th>Command</th>
                        <th>Message</th>
                        <th>Priority</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for sentMessage in sentMessages %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td>{{ sentMessage.topic|default(null) }}</td>
                            <td>{{ sentMessage.command|default(null) }}</td>
                            <td style=\"width: 70%\" class=\"metadata\">
                                <span>
                                    {% set body = collector.ensureString(sentMessage.body) %}
                                    {{ body|length > 40 ? body|slice(0, 40) ~ '...' : body  }}
                                </span>
                                {% if body|length > 40 %}
                                    <a class=\"btn btn-link text-small sf-toggle\"
                                       data-toggle-selector=\"#message-body-{{ loop.index }}\"
                                       data-toggle-alt-content=\"Hide body\"
                                    >Show body</a>
                                    <div id=\"message-body-{{ loop.index }}\"
                                         class=\"context sf-toggle-content sf-toggle-hidden\">
                                        <pre>{{ body }}</pre>
                                    </div>
                                {% endif %}
                            <td>
                                <span title=\"{{ sentMessage.priority }}\">{{ collector.prettyPrintPriority(sentMessage.priority) }}</span>
                            </td>
                            <td style=\"white-space:nowrap;\">
                                {{ sentMessage.sentAt|date('i:s.v') }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>

                </table>
            {% endif %}
        {% endfor %}
    {% else %}
        <div class=\"empty\">
            <p>No messages were sent.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Enqueue/Profiler/panel.html.twig", "/var/www/html/InformationSecurity/vendor/enqueue/enqueue-bundle/Resources/views/Profiler/panel.html.twig");
    }
}
