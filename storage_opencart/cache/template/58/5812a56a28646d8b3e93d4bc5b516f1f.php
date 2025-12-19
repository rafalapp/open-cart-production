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

/* adminapp/view/template/marketing/marketing_form.twig */
class __TwigTemplate_8a13d04c9fab734d2166eb02b966921f extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-marketing\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-marketing\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 28
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 30
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 35
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"";
        // line 37
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-description\" class=\"form-control\">";
        yield ($context["description"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 41
        yield ($context["entry_code"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 43
        yield ($context["code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_code"] ?? null);
        yield "\" id=\"input-code\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 44
        yield ($context["help_code"] ?? null);
        yield "</div>
                  <div id=\"error-code\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-example\" class=\"col-sm-2 col-form-label\">";
        // line 49
        yield ($context["entry_example"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"example1\" value=\"\" placeholder=\"";
        // line 51
        yield ($context["entry_example"] ?? null);
        yield "\" id=\"input-example1\" class=\"form-control\"/>
                  <br/>
                  <input type=\"text\" name=\"example2\" value=\"\" placeholder=\"";
        // line 53
        yield ($context["entry_example"] ?? null);
        yield "\" id=\"input-example2\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 54
        yield ($context["help_example"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 60
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 61
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"marketing_id\" value=\"";
        // line 65
        yield ($context["marketing_id"] ?? null);
        yield "\" id=\"input-marketing-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-code').on('keyup', function(e) {
    \$('#input-example1').attr('value', '";
        // line 73
        yield ($context["store"] ?? null);
        yield "?tracking=' + \$('#input-code').val());

    \$('#input-example2').attr('value', '";
        // line 75
        yield ($context["store"] ?? null);
        yield "index.php?route=common/home&tracking=' + \$('#input-code').val());
});

\$('#input-code').trigger('keyup');

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 86
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminapp/view/template/marketing/marketing_form.twig";
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
        return array (  224 => 86,  210 => 75,  205 => 73,  194 => 65,  187 => 61,  183 => 60,  174 => 54,  170 => 53,  165 => 51,  160 => 49,  152 => 44,  146 => 43,  141 => 41,  132 => 37,  127 => 35,  117 => 30,  112 => 28,  104 => 23,  100 => 22,  95 => 20,  90 => 18,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-marketing\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-marketing\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-description\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"description\" rows=\"5\" placeholder=\"{{ entry_description }}\" id=\"input-description\" class=\"form-control\">{{ description }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-code\" class=\"col-sm-2 col-form-label\">{{ entry_code }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"{{ code }}\" placeholder=\"{{ entry_code }}\" id=\"input-code\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_code }}</div>
                  <div id=\"error-code\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-example\" class=\"col-sm-2 col-form-label\">{{ entry_example }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"example1\" value=\"\" placeholder=\"{{ entry_example }}\" id=\"input-example1\" class=\"form-control\"/>
                  <br/>
                  <input type=\"text\" name=\"example2\" value=\"\" placeholder=\"{{ entry_example }}\" id=\"input-example2\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_example }}</div>
                </div>
              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"marketing_id\" value=\"{{ marketing_id }}\" id=\"input-marketing-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-code').on('keyup', function(e) {
    \$('#input-example1').attr('value', '{{ store }}?tracking=' + \$('#input-code').val());

    \$('#input-example2').attr('value', '{{ store }}index.php?route=common/home&tracking=' + \$('#input-code').val());
});

\$('#input-code').trigger('keyup');

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
{{ footer }}", "adminapp/view/template/marketing/marketing_form.twig", "/var/www/upload/adminapp/view/template/marketing/marketing_form.twig");
    }
}
