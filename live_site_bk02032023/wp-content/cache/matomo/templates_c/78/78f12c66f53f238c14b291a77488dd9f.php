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

/* @CoreAdminHome/home.twig */
class __TwigTemplate_497a89d0eb1001cf61a34893efebc2b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_MenuGeneralSettings"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Feedback", "action" => "index"]), "html", null, true);
        echo "\">Learn more</a>
            </div>
        </div>
    ";
        $context["feedbackHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    ";
        // line 19
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        <div class=\"row\">
            ";
            // line 21
            if (((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 21, $this->source); })()) || (isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 21, $this->source); })()))) {
                // line 22
                echo "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 22, $this->source); })())) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 23
                if ((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 23, $this->source); })())) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>";
                }
                // line 24
                echo "                    ";
                if ((isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 24, $this->source); })())) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>";
                }
                // line 25
                echo "                </div>
            ";
            }
            // line 27
            echo "            ";
            if (((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 27, $this->source); })()) || (isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 27, $this->source); })()))) {
                // line 28
                echo "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 28, $this->source); })())) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 29
                if ((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 29, $this->source); })())) {
                    // line 30
                    echo "                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    ";
                }
                // line 32
                echo "                    ";
                if ((isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 32, $this->source); })())) {
                    // line 33
                    echo "                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    ";
                }
                // line 35
                echo "                </div>
            ";
            }
            // line 37
            echo "            <div class=\"col s12 m4\">
            ";
            // line 38
            if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 38, $this->source); })())) {
                // line 39
                echo "                ";
                echo (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 39, $this->source); })());
                echo "
            ";
            }
            // line 41
            echo "            </div>
        </div>
    ";
        } elseif (        // line 43
(isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        ";
            echo (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 44, $this->source); })());
            echo "
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ((((isset($context["hasPremiumFeatures"]) || array_key_exists("hasPremiumFeatures", $context) ? $context["hasPremiumFeatures"] : (function () { throw new RuntimeError('Variable "hasPremiumFeatures" does not exist.', 47, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 47, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 47, $this->source); })()))) {
            // line 48
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    ";
        }
        // line 50
        echo "    ";
        if ((((isset($context["hasNewPlugins"]) || array_key_exists("hasNewPlugins", $context) ? $context["hasNewPlugins"] : (function () { throw new RuntimeError('Variable "hasNewPlugins" does not exist.', 50, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 50, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        echo $this->env->getFunction('postEvent')->getCallable()("Template.adminHome");
        echo "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 67
        if (((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 67, $this->source); })()) || (isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "        <div class=\"row\">
            ";
            // line 69
            if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 69, $this->source); })())) {
                // line 70
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 70, $this->source); })())) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            ";
            }
            // line 74
            echo "            ";
            if (((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 74, $this->source); })()) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 74, $this->source); })()))) {
                // line 75
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 75, $this->source); })())) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            ";
            }
            // line 79
            echo "        </div>
    ";
        }
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  223 => 79,  213 => 75,  210 => 74,  200 => 70,  198 => 69,  195 => 68,  193 => 67,  177 => 54,  174 => 53,  170 => 51,  167 => 50,  163 => 48,  161 => 47,  158 => 46,  152 => 44,  150 => 43,  146 => 41,  140 => 39,  138 => 38,  135 => 37,  131 => 35,  127 => 33,  124 => 32,  120 => 30,  118 => 29,  109 => 28,  106 => 27,  102 => 25,  97 => 24,  93 => 23,  84 => 22,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  67 => 14,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div piwik-content-block content-title=\"Need help?\">
            <div>
                There are different ways you can get help. There is free support via the Matomo Community and paid support
                provided by the Matomo team and partners of Matomo. Or maybe do you have a bug to report or want to suggest a new
                feature?
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">Learn more</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            {% if hasQuickLinks or hasSystemSummary %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasQuickLinks %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>{% endif %}
                    {% if hasSystemSummary %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>{% endif %}
                </div>
            {% endif %}
            {% if hasDiagnostics or hasTrackingFailures %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasDiagnostics %}
                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    {% endif %}
                    {% if hasTrackingFailures %}
                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"col s12 m4\">
            {% if isFeedbackEnabled %}
                {{ feedbackHelp|raw }}
            {% endif %}
            </div>
        </div>
    {% elseif isFeedbackEnabled %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if hasPremiumFeatures and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    {% endif %}
    {% if hasNewPlugins and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog and isInternetEnabled %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
", "@CoreAdminHome/home.twig", "/home/u657051008/domains/buildnetic.com/public_html/wp-content/plugins/matomo/app/plugins/CoreAdminHome/templates/home.twig");
    }
}
