<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* adminapp/view/template/marketing/marketing_report.twig */
class __TwigTemplate_fc06fc2cac312f96a9d22848c6ff9e83 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 6
        yield ($context["column_account"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_store"] ?? null);
        yield "</th>
        <th>";
        // line 8
        yield ($context["column_country"] ?? null);
        yield "</th>
        <th>";
        // line 9
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["reports"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reports"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 15
                yield "          <tr>
            <td><a href=\"http://www.geoiptool.com/en/?IP=";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 16);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 16);
                yield "</a></td>
            <td class=\"text-end\"><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "filter_ip", [], "any", false, false, false, 17);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "account", [], "any", false, false, false, 17);
                yield "</a></td>
            <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "store", [], "any", false, false, false, 18);
                yield "</td>
            <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "country", [], "any", false, false, false, 19);
                yield "</td>
            <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "date_added", [], "any", false, false, false, 20);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      ";
        } else {
            // line 24
            yield "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 28
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 32
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 33
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminapp/view/template/marketing/marketing_report.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 33,  128 => 32,  122 => 28,  116 => 25,  113 => 24,  110 => 23,  101 => 20,  97 => 19,  93 => 18,  87 => 17,  81 => 16,  78 => 15,  73 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_ip }}</th>
        <th class=\"text-end\">{{ column_account }}</th>
        <th>{{ column_store }}</th>
        <th>{{ column_country }}</th>
        <th>{{ column_date_added }}</th>
      </tr>
    </thead>
    <tbody>
      {% if reports %}
        {% for report in reports %}
          <tr>
            <td><a href=\"http://www.geoiptool.com/en/?IP={{ report.ip }}\" target=\"_blank\">{{ report.ip }}</a></td>
            <td class=\"text-end\"><a href=\"{{ report.filter_ip }}\" target=\"_blank\">{{ report.account }}</a></td>
            <td>{{ report.store }}</td>
            <td>{{ report.country }}</td>
            <td>{{ report.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "adminapp/view/template/marketing/marketing_report.twig", "/var/www/upload/adminapp/view/template/marketing/marketing_report.twig");
    }
}
