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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_f42678aa07197559c03bf359417ccba3 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "  
        <script src=\"";
        // line 16
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
\t\t";
        // line 17
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 18
            yield "\t\t<link href=\"extension/arabic/catalog/view/stylesheet/bootstrap-rtl.css\" rel=\"stylesheet\">
\t\t<link href=\"";
            // line 19
            yield ($context["icons"] ?? null);
            yield "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t<link href=\"extension/arabic/catalog/view/stylesheet/stylesheet-rtl.css\" rel=\"stylesheet\">
\t\t";
        } else {
            // line 22
            yield "        
  <link href=\"";
            // line 23
            yield ($context["bootstrap"] ?? null);
            yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
            // line 24
            yield ($context["icons"] ?? null);
            yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  
\t\t<link href=\"";
            // line 26
            yield ($context["stylesheet"] ?? null);
            yield "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t";
        }
        // line 28
        yield "        
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 30
        if (($context["icon"] ?? null)) {
            // line 31
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 33
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 37);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  <nav id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-4\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item me-3\">";
        // line 54
        yield ($context["currency"] ?? null);
        yield "</li>
            <li class=\"list-inline-item\">";
        // line 55
        yield ($context["language"] ?? null);
        yield "</li>
          </ul>
        </div>
        <div class=\"col text-end\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 60
        yield ($context["contact"] ?? null);
        yield "\"><i class=\"fa-solid fa-phone\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["telephone"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-lg-inline\">";
        // line 63
        yield ($context["text_account"] ?? null);
        yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 65
        if ( !($context["logged"] ?? null)) {
            // line 66
            yield "                    <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 67
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                  ";
        } else {
            // line 69
            yield "                    <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 70
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 71
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 72
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 73
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                  ";
        }
        // line 75
        yield "                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 78
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 79
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 80
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-lg-inline\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-3 col-lg-4\">
          <div id=\"logo\">
            ";
        // line 91
        if (($context["logo"] ?? null)) {
            // line 92
            yield "              <a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/></a>
            ";
        } else {
            // line 94
            yield "              <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
            ";
        }
        // line 96
        yield "          </div>
        </div>
        <div class=\"col-md-5\">";
        // line 98
        yield ($context["search"] ?? null);
        yield "</div>
        <div id=\"cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 99
        yield ($context["cart"] ?? null);
        yield "</div>
      </div>
    </div>
  </header>
  <main>
    ";
        // line 104
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  350 => 104,  342 => 99,  338 => 98,  334 => 96,  326 => 94,  314 => 92,  312 => 91,  294 => 80,  286 => 79,  278 => 78,  273 => 75,  266 => 73,  260 => 72,  254 => 71,  248 => 70,  241 => 69,  234 => 67,  227 => 66,  225 => 65,  220 => 63,  212 => 60,  204 => 55,  200 => 54,  189 => 45,  180 => 43,  175 => 42,  164 => 40,  159 => 39,  150 => 37,  145 => 36,  132 => 34,  127 => 33,  121 => 31,  119 => 30,  115 => 28,  110 => 26,  105 => 24,  101 => 23,  98 => 22,  92 => 19,  89 => 18,  87 => 17,  83 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  
        <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
\t\t{% if direction == \"rtl\" %}
\t\t<link href=\"extension/arabic/catalog/view/stylesheet/bootstrap-rtl.css\" rel=\"stylesheet\">
\t\t<link href=\"{{ icons }}\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t<link href=\"extension/arabic/catalog/view/stylesheet/stylesheet-rtl.css\" rel=\"stylesheet\">
\t\t{% else %}
        
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  
\t\t<link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t{% endif %}
        
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  <nav id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-4\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item me-3\">{{ currency }}</li>
            <li class=\"list-inline-item\">{{ language }}</li>
          </ul>
        </div>
        <div class=\"col text-end\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"{{ contact }}\"><i class=\"fa-solid fa-phone\"></i> <span class=\"d-none d-lg-inline\">{{ telephone }}</span></a></li>
            <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-lg-inline\">{{ text_account }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  {% if not logged %}
                    <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                    <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
                  {% else %}
                    <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                    <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                    <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                    <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                    <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
                  {% endif %}
                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-lg-inline\">{{ text_wishlist }}</span></a></li>
            <li class=\"list-inline-item\"><a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-lg-inline\">{{ text_shopping_cart }}</span></a></li>
            <li class=\"list-inline-item\"><a href=\"{{ checkout }}\" title=\"{{ text_checkout }}\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-lg-inline\">{{ text_checkout }}</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-3 col-lg-4\">
          <div id=\"logo\">
            {% if logo %}
              <a href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/></a>
            {% else %}
              <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
            {% endif %}
          </div>
        </div>
        <div class=\"col-md-5\">{{ search }}</div>
        <div id=\"cart\" class=\"col-md-4 col-lg-3 mb-2\">{{ cart }}</div>
      </div>
    </div>
  </header>
  <main>
    {{ menu }}
", "catalog/view/template/common/header.twig", "/var/www/upload/catalog/view/template/common/header.twig");
    }
}
