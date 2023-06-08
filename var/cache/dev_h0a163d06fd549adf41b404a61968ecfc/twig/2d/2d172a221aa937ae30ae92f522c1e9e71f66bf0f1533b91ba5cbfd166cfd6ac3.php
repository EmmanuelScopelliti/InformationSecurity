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

/* @zenitPlatformStratus/storefront/component/zen-social-icons.html.twig */
class __TwigTemplate_cc8f48c5baa7be8bbe99271c05f74bcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'zen_component_social_icons' => [$this, 'block_zen_component_social_icons'],
            'zen_component_social_icons_items' => [$this, 'block_zen_component_social_icons_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig"));

        // line 1
        $this->displayBlock('zen_component_social_icons', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_zen_component_social_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_social_icons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_social_icons"));

        // line 2
        echo "    ";
        $context["social"] = ["translated" => ["facebookUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialFacebookUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialFacebookUrl")]), "twitterUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialTwitterUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialTwitterUrl")]), "youtubeUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialYoutubeUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialYoutubeUrl")]), "vimeoUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialVimeoUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialVimeoUrl")]), "pinterestUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialPinterestUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialPinterestUrl")]), "instagramUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialInstagramUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialInstagramUrl")]), "flickrUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialFlickrUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialFlickrUrl")]), "linkedInUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialLinkedInUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialLinkedInUrl")]), "xingUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialXingUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialXingUrl")]), "whatsappUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialWhatsappUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialWhatsappUrl")]), "amazonUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialAmazonUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialAmazonUrl")]), "tikTokUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialTikTokUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialTikTokUrl")]), "RSSUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.stratus.content.socialRSSUrl", ["%placeholder%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialRSSUrl")])]];
        // line 19
        echo "
    ";
        // line 20
        $context["hasSocial"] = false;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "        ";
            if ( !twig_test_empty($context["item"])) {
                // line 23
                echo "            ";
                $context["hasSocial"] = true;
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if (($context["hasSocial"] ?? null)) {
            // line 28
            echo "        <div class=\"";
            echo sw_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo " social-icons\">
            ";
            // line 29
            $this->displayBlock('zen_component_social_icons_items', $context, $blocks);
            // line 160
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_zen_component_social_icons_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_social_icons_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_social_icons_items"));

        // line 30
        echo "                ";
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialFacebookUrl"))) {
            // line 31
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 31), "facebookUrl", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 32
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 33
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Facebook\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Facebook\">
                        ";
            // line 36
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 36);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "facebook"]));
            // line 37
            echo "                    </a>
                ";
        }
        // line 39
        echo "
                ";
        // line 40
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialTwitterUrl"))) {
            // line 41
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 41), "twitterUrl", [], "any", false, false, false, 41), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 42
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 43
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Twitter\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Twitter\">
                        ";
            // line 46
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 46);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "twitter"]));
            // line 47
            echo "                    </a>
                ";
        }
        // line 49
        echo "
                ";
        // line 50
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialYoutubeUrl"))) {
            // line 51
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 51), "youtubeUrl", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 52
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 53
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Youtube\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Youtube\">
                        ";
            // line 56
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 56);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "youtube"]));
            // line 57
            echo "                    </a>
                ";
        }
        // line 59
        echo "
                ";
        // line 60
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialVimeoUrl"))) {
            // line 61
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 61), "vimeoUrl", [], "any", false, false, false, 61), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 62
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 63
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Vimeo\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Vimeo\">
                        ";
            // line 66
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 66);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "vimeo"]));
            // line 67
            echo "                    </a>
                ";
        }
        // line 69
        echo "
                ";
        // line 70
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialPinterestUrl"))) {
            // line 71
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 71), "pinterestUrl", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 72
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 73
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Pinterest\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Pinterest\">
                        ";
            // line 76
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 76);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "pinterest"]));
            // line 77
            echo "                    </a>
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialInstagramUrl"))) {
            // line 81
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 81), "instagramUrl", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 82
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 83
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Instagram\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Instagram\">
                        ";
            // line 86
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 86);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "instagram"]));
            // line 87
            echo "                    </a>
                ";
        }
        // line 89
        echo "
                ";
        // line 90
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialFlickrUrl"))) {
            // line 91
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 91), "flickrUrl", [], "any", false, false, false, 91), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 92
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 93
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Flickr\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Flickr\">
                        ";
            // line 96
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 96);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "flickr"]));
            // line 97
            echo "                    </a>
                ";
        }
        // line 99
        echo "
                ";
        // line 100
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialLinkedInUrl"))) {
            // line 101
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 101), "linkedInUrl", [], "any", false, false, false, 101), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 102
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 103
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on LinkedIn\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"LinkedIn\">
                        ";
            // line 106
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 106);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "linkedin"]));
            // line 107
            echo "                    </a>
                ";
        }
        // line 109
        echo "
                ";
        // line 110
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialXingUrl"))) {
            // line 111
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 111), "xingUrl", [], "any", false, false, false, 111), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 112
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 113
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Xing\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Xing\">
                        ";
            // line 116
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 116);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "xing"]));
            // line 117
            echo "                    </a>
                ";
        }
        // line 119
        echo "
                ";
        // line 120
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialWhatsappUrl"))) {
            // line 121
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 121), "whatsappUrl", [], "any", false, false, false, 121), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 122
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 123
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Whatsapp\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Whatsapp\">
                        ";
            // line 126
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 126);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "whatsapp"]));
            // line 127
            echo "                    </a>
                ";
        }
        // line 129
        echo "
                ";
        // line 130
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialAmazonUrl"))) {
            // line 131
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 131), "amazonUrl", [], "any", false, false, false, 131), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 132
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 133
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on Amazon\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Amazon\">
                        ";
            // line 136
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 136);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "amazon"]));
            // line 137
            echo "                    </a>
                ";
        }
        // line 139
        echo "
                ";
        // line 140
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialTikTokUrl"))) {
            // line 141
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 141), "tikTokUrl", [], "any", false, false, false, 141), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 142
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 143
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " on TikTok\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"TikTok\">
                        ";
            // line 146
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 146);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "tiktok"]));
            // line 147
            echo "                    </a>
                ";
        }
        // line 149
        echo "
                ";
        // line 150
        if (twig_length_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialRSSUrl"))) {
            // line 151
            echo "                    <a href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["social"] ?? null), "translated", [], "any", false, false, false, 151), "RSSUrl", [], "any", false, false, false, 151), "html", null, true);
            echo "\"
                       class=\"social-icon icon-style-";
            // line 152
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.socialIconStyle"), "html", null, true);
            echo "\"
                       title=\"";
            // line 153
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo " RSS Feed\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"RSS\">
                        ";
            // line 156
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", 156);
            })())->display(twig_array_merge($context, ["pack" => "social", "namespace" => "zenitPlatformStratus", "name" => "rss"]));
            // line 157
            echo "                    </a>
                ";
        }
        // line 159
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  540 => 159,  536 => 157,  528 => 156,  522 => 153,  518 => 152,  513 => 151,  511 => 150,  508 => 149,  504 => 147,  496 => 146,  490 => 143,  486 => 142,  481 => 141,  479 => 140,  476 => 139,  472 => 137,  464 => 136,  458 => 133,  454 => 132,  449 => 131,  447 => 130,  444 => 129,  440 => 127,  432 => 126,  426 => 123,  422 => 122,  417 => 121,  415 => 120,  412 => 119,  408 => 117,  400 => 116,  394 => 113,  390 => 112,  385 => 111,  383 => 110,  380 => 109,  376 => 107,  368 => 106,  362 => 103,  358 => 102,  353 => 101,  351 => 100,  348 => 99,  344 => 97,  336 => 96,  330 => 93,  326 => 92,  321 => 91,  319 => 90,  316 => 89,  312 => 87,  304 => 86,  298 => 83,  294 => 82,  289 => 81,  287 => 80,  284 => 79,  280 => 77,  272 => 76,  266 => 73,  262 => 72,  257 => 71,  255 => 70,  252 => 69,  248 => 67,  240 => 66,  234 => 63,  230 => 62,  225 => 61,  223 => 60,  220 => 59,  216 => 57,  208 => 56,  202 => 53,  198 => 52,  193 => 51,  191 => 50,  188 => 49,  184 => 47,  176 => 46,  170 => 43,  166 => 42,  161 => 41,  159 => 40,  156 => 39,  152 => 37,  144 => 36,  138 => 33,  134 => 32,  129 => 31,  126 => 30,  116 => 29,  104 => 160,  102 => 29,  97 => 28,  95 => 27,  92 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  72 => 21,  70 => 20,  67 => 19,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block zen_component_social_icons %}
    {% set social = {
        'translated': {
            facebookUrl: \"zentheme.stratus.content.socialFacebookUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialFacebookUrl')}),
            twitterUrl: \"zentheme.stratus.content.socialTwitterUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialTwitterUrl')}),
            youtubeUrl: \"zentheme.stratus.content.socialYoutubeUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialYoutubeUrl')}),
            vimeoUrl: \"zentheme.stratus.content.socialVimeoUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialVimeoUrl')}),
            pinterestUrl: \"zentheme.stratus.content.socialPinterestUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialPinterestUrl')}),
            instagramUrl: \"zentheme.stratus.content.socialInstagramUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialInstagramUrl')}),
            flickrUrl: \"zentheme.stratus.content.socialFlickrUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialFlickrUrl')}),
            linkedInUrl: \"zentheme.stratus.content.socialLinkedInUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialLinkedInUrl')}),
            xingUrl: \"zentheme.stratus.content.socialXingUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialXingUrl')}),
            whatsappUrl: \"zentheme.stratus.content.socialWhatsappUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialWhatsappUrl')}),
            amazonUrl: \"zentheme.stratus.content.socialAmazonUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialAmazonUrl')}),
            tikTokUrl: \"zentheme.stratus.content.socialTikTokUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialTikTokUrl')}),
            RSSUrl: \"zentheme.stratus.content.socialRSSUrl\"|trans({\"%placeholder%\": config('zenitPlatformStratus.config.socialRSSUrl')})
        }
    } %}

    {% set hasSocial = false %}
    {% for item in social.translated %}
        {% if item is not empty %}
            {% set hasSocial = true %}
        {% endif %}
    {% endfor %}

    {% if hasSocial %}
        <div class=\"{{ classes }} social-icons\">
            {% block zen_component_social_icons_items %}
                {% if config('zenitPlatformStratus.config.socialFacebookUrl')|length %}
                    <a href=\"{{ social.translated.facebookUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Facebook\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Facebook\">
                        {% sw_icon 'facebook' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialTwitterUrl')|length %}
                    <a href=\"{{ social.translated.twitterUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Twitter\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Twitter\">
                        {% sw_icon 'twitter' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialYoutubeUrl')|length %}
                    <a href=\"{{ social.translated.youtubeUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Youtube\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Youtube\">
                        {% sw_icon 'youtube' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialVimeoUrl')|length %}
                    <a href=\"{{ social.translated.vimeoUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Vimeo\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Vimeo\">
                        {% sw_icon 'vimeo' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialPinterestUrl')|length %}
                    <a href=\"{{ social.translated.pinterestUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Pinterest\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Pinterest\">
                        {% sw_icon 'pinterest' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialInstagramUrl')|length %}
                    <a href=\"{{ social.translated.instagramUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Instagram\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Instagram\">
                        {% sw_icon 'instagram' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialFlickrUrl')|length %}
                    <a href=\"{{ social.translated.flickrUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Flickr\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Flickr\">
                        {% sw_icon 'flickr' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialLinkedInUrl')|length %}
                    <a href=\"{{ social.translated.linkedInUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on LinkedIn\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"LinkedIn\">
                        {% sw_icon 'linkedin' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialXingUrl')|length %}
                    <a href=\"{{ social.translated.xingUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Xing\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Xing\">
                        {% sw_icon 'xing' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialWhatsappUrl')|length %}
                    <a href=\"{{ social.translated.whatsappUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Whatsapp\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Whatsapp\">
                        {% sw_icon 'whatsapp' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialAmazonUrl')|length %}
                    <a href=\"{{ social.translated.amazonUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on Amazon\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"Amazon\">
                        {% sw_icon 'amazon' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialTikTokUrl')|length %}
                    <a href=\"{{ social.translated.tikTokUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} on TikTok\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"TikTok\">
                        {% sw_icon 'tiktok' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}

                {% if config('zenitPlatformStratus.config.socialRSSUrl')|length %}
                    <a href=\"{{ social.translated.RSSUrl }}\"
                       class=\"social-icon icon-style-{{ config('zenitPlatformStratus.config.socialIconStyle') }}\"
                       title=\"{{ config('core.basicInformation.shopName') }} RSS Feed\"
                       target=\"_blank\" rel=\"noopener\"
                       aria-label=\"RSS\">
                        {% sw_icon 'rss' style {'pack': 'social',  'namespace': 'zenitPlatformStratus'} %}
                    </a>
                {% endif %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@zenitPlatformStratus/storefront/component/zen-social-icons.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/component/zen-social-icons.html.twig");
    }
}
