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

/* extension/opencart/admin/view/template/report/customer_search.twig */
class __TwigTemplate_330827e8425b21ac3d4714a335ad642a extends Template
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
        yield "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 4
        yield ($context["text_filter"] ?? null);
        yield "</div>
      <div class=\"card-body\">
      <form id=\"form-filter\">
        <div class=\"mb-3\">
          <label for=\"input-customer\" class=\"form-label\">";
        // line 8
        yield ($context["entry_customer"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 9
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\"/>
          <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-keyword\" class=\"form-label\">";
        // line 13
        yield ($context["entry_keyword"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"filter_keyword\" value=\"";
        // line 14
        yield ($context["filter_keyword"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_keyword"] ?? null);
        yield "\" id=\"input-keyword\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">";
        // line 17
        yield ($context["entry_date_start"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"";
        // line 18
        yield ($context["filter_date_start"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_start"] ?? null);
        yield "\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">";
        // line 21
        yield ($context["entry_date_end"] ?? null);
        yield "</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"";
        // line 22
        yield ($context["filter_date_end"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_end"] ?? null);
        yield "\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-ip\" class=\"form-label\">";
        // line 25
        yield ($context["entry_ip"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 26
        yield ($context["filter_ip"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ip"] ?? null);
        yield "\" id=\"input-ip\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 29
        yield ($context["button_filter"] ?? null);
        yield "</button>
          <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 30
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 38
        yield ($context["heading_title"] ?? null);
        yield "</div>
      <div id=\"customer-search\" class=\"card-body\">";
        // line 39
        yield ($context["list"] ?? null);
        yield "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-search').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#customer-search').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_keyword = \$('#input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_date_start = \$('#input-date_start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date_end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#customer-searc').load('index.php?route=extension/opencart/report/customer_search.list&user_token=";
        // line 83
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 89
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/customer_search.twig";
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
        return array (  190 => 89,  181 => 83,  134 => 39,  130 => 38,  119 => 30,  115 => 29,  107 => 26,  103 => 25,  95 => 22,  91 => 21,  83 => 18,  79 => 17,  71 => 14,  67 => 13,  58 => 9,  54 => 8,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
      <div class=\"card-body\">
      <form id=\"form-filter\">
        <div class=\"mb-3\">
          <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
          <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\"/>
          <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-keyword\" class=\"form-label\">{{ entry_keyword }}</label>
          <input type=\"text\" name=\"filter_keyword\" value=\"{{ filter_keyword }}\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">{{ entry_date_start }}</label>
          <input type=\"date\" name=\"filter_date_start\" value=\"{{ filter_date_start }}\" placeholder=\"{{ entry_date_start }}\" id=\"input-date-start\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">{{ entry_date_end }}</label>
          <input type=\"date\" name=\"filter_date_end\" value=\"{{ filter_date_end }}\" placeholder=\"{{ entry_date_end }}\" id=\"input-date-end\" class=\"form-control\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-ip\" class=\"form-label\">{{ entry_ip }}</label>
          <input type=\"text\" name=\"filter_ip\" value=\"{{ filter_ip }}\" placeholder=\"{{ entry_ip }}\" id=\"input-ip\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
          <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> {{ heading_title }}</div>
      <div id=\"customer-search\" class=\"card-body\">{{ list }}</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer-search').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#customer-search').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_keyword = \$('#input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_date_start = \$('#input-date_start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date_end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#customer-searc').load('index.php?route=extension/opencart/report/customer_search.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(item['label']);
    }
});
//--></script>
", "extension/opencart/admin/view/template/report/customer_search.twig", "/var/www/upload/extension/opencart/admin/view/template/report/customer_search.twig");
    }
}
