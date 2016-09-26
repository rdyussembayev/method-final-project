<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/partials/nav.htm */
class __TwigTemplate_e6ef184f2a7d7acd5112b21e279e1cd5d72f5703b66d970f4899f92caabe9e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Главная"), "about" => array(0 => "samples/about-us", 1 => "О нас"), "products" => array(0 => "samples/products", 1 => "Предложения"), "contact" => array(0 => "samples/contact-us", 1 => "Контакты"));
        // line 10
        echo "
";
        // line 31
        echo "
";
        // line 32
        $context["nav"] = $this;
        // line 33
        echo "
<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" title=\"Grill Template\" alt=\"Grill Website Template\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"main-menu\">
                    <ul>
                        ";
        // line 45
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"search-box\">  
                    <form role=\"form\" name=\"search_form\" method=\"get\" class=\"search_form\">
                        <input id=\"search\" type=\"text\" />
                        <input type=\"submit\" id=\"search-button\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    // line 11
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 13
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 15
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 16
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 17
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 19
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 20
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 21
                echo "            </a>
            ";
                // line 22
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 23
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 25
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 28
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 28,  123 => 25,  119 => 23,  117 => 22,  114 => 21,  110 => 20,  106 => 19,  100 => 17,  96 => 16,  92 => 15,  84 => 13,  79 => 12,  67 => 11,  48 => 45,  37 => 39,  29 => 33,  27 => 32,  24 => 31,  21 => 10,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/* 	    'home':      ['home', 'Главная'],*/
/* 		'about':     ['samples/about-us', 'О нас'],*/
/* 		'products':  ['samples/products', 'Предложения'],*/
/*         'contact':   ['samples/contact-us', 'Контакты'],*/
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*                 {% if link.sublinks %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu">*/
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <div id="main-header">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div class="logo">*/
/*                     <a href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" title="Grill Template" alt="Grill Website Template" ></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="main-menu">*/
/*                     <ul>*/
/*                         {{ nav.render_menu(links) }}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                 <div class="search-box">  */
/*                     <form role="form" name="search_form" method="get" class="search_form">*/
/*                         <input id="search" type="text" />*/
/*                         <input type="submit" id="search-button" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
