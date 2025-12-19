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

/* extension/opencart/admin/view/template/report/sale_shipping_list.twig */
class __TwigTemplate_3195a3cd5cf4fd5903a3be2222f0c952 extends Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">";
        // line 5
        yield ($context["column_date_start"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 6
        yield ($context["column_date_end"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 7
        yield ($context["column_title"] ?? null);
        yield "</td>
        <th class=\"text-end\">";
        // line 8
        yield ($context["column_orders"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 9
        yield ($context["column_total"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["orders"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 15
                yield "          <tr>
            <td class=\"text-start\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_start", [], "any", false, false, false, 16);
                yield "</td>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_end", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-end\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orders", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-end\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 20);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
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
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/sale_shipping_list.twig";
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
        return array (  128 => 33,  124 => 32,  118 => 28,  112 => 25,  109 => 24,  106 => 23,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  78 => 15,  73 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">{{ column_date_start }}</th>
        <th class=\"text-start\">{{ column_date_end }}</th>
        <th class=\"text-start\">{{ column_title }}</td>
        <th class=\"text-end\">{{ column_orders }}</th>
        <th class=\"text-end\">{{ column_total }}</td>
      </tr>
    </thead>
    <tbody>
      {% if orders %}
        {% for order in orders %}
          <tr>
            <td class=\"text-start\">{{ order.date_start }}</td>
            <td class=\"text-start\">{{ order.date_end }}</td>
            <td class=\"text-start\">{{ order.title }}</td>
            <td class=\"text-end\">{{ order.orders }}</td>
            <td class=\"text-end\">{{ order.total }}</td>
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
</div>", "extension/opencart/admin/view/template/report/sale_shipping_list.twig", "/var/www/upload/extension/opencart/admin/view/template/report/sale_shipping_list.twig");
    }
}
