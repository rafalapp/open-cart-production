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

/* extension/opencart/admin/view/template/report/customer_search_list.twig */
class __TwigTemplate_a7f3a9fa85cdcbd5567bcd5e394ec1db extends Template
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
        yield ($context["column_keyword"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 6
        yield ($context["column_products"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 7
        yield ($context["column_category"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 8
        yield ($context["column_customer"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 9
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 10
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        if (($context["searches"] ?? null)) {
            // line 15
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["searches"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
                // line 16
                yield "          <tr>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "keyword", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "products", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "category", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-start\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "customer", [], "any", false, false, false, 20);
                yield "</td>
            <td class=\"text-start\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "ip", [], "any", false, false, false, 21);
                yield "</td>
            <td class=\"text-start\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["search"], "date_added", [], "any", false, false, false, 22);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['search'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "      ";
        } else {
            // line 26
            yield "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 27
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 30
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 34
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 35
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
        return "extension/opencart/admin/view/template/report/customer_search_list.twig";
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
        return array (  136 => 35,  132 => 34,  126 => 30,  120 => 27,  117 => 26,  114 => 25,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  82 => 16,  77 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">{{ column_keyword }}</th>
        <th class=\"text-start\">{{ column_products }}</th>
        <th class=\"text-start\">{{ column_category }}</th>
        <th class=\"text-start\">{{ column_customer }}</th>
        <th class=\"text-start\">{{ column_ip }}</th>
        <th class=\"text-start\">{{ column_date_added }}</th>
      </tr>
    </thead>
    <tbody>
      {% if searches %}
        {% for search in searches %}
          <tr>
            <td class=\"text-start\">{{ search.keyword }}</td>
            <td class=\"text-start\">{{ search.products }}</td>
            <td class=\"text-start\">{{ search.category }}</td>
            <td class=\"text-start\">{{ search.customer }}</td>
            <td class=\"text-start\">{{ search.ip }}</td>
            <td class=\"text-start\">{{ search.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "extension/opencart/admin/view/template/report/customer_search_list.twig", "/var/www/upload/extension/opencart/admin/view/template/report/customer_search_list.twig");
    }
}
