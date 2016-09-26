<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/products.htm */
class __TwigTemplate_5709c5df099b9bc200c73f2a1f103d9b489a275ce209fcb953f9ad6702821760 extends Twig_Template
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
        // line 1
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Our Products</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("samples/products");
        echo "\">Products</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"products-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"product-heading\">
                    <h2>Hungry ?</h2>
                    <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
\t\t\t</div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    <li><span class=\"filter\" data-filter=\".ginger\">Ginger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                    <li><span class=\"filter\" data-filter=\".pasta\">Pasta</span></li>
                    <li><span class=\"filter\" data-filter=\".drink\">Drink</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                </ul>
            </div>
        </div>
    

    ";
        // line 38
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 39
        echo "
        <div class=\"row\" id=\"Container\">    
            
      <div class=\"col-md-12\">
           ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "          
            <div class=\"col-md-4 col-sm-6 pull-right\">
                <h3><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

                    <p class=\"info\">
                        Posted
                        ";
            // line 50
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 51
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 53
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                    </p>

                    <p class=\"excerpt\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                        <div class=\"portfolio-wrapper\">                
                            <div class=\"portfolio-thumb\">
                            
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 62
                echo "                                <img src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" alt=\"\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                            
                           
                            </div>
                        </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </div>
        </div>
       
   \t</div>
</div>
    

            
    
\t\t<div class=\"pagination\">
\t\t\t<div class=\"row\">   
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">>></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 70,  161 => 64,  152 => 62,  148 => 61,  141 => 57,  134 => 54,  120 => 53,  111 => 52,  93 => 51,  89 => 50,  80 => 46,  76 => 44,  72 => 43,  66 => 39,  64 => 38,  43 => 20,  27 => 7,  19 => 1,);
    }
}
/* <div id="heading">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="heading-content">*/
/*                     <h2>Our Products</h2>*/
/*                     <span>Home / <a href="{{ 'samples/products'|page }}">Products</a></span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="products-post">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div id="product-heading">*/
/*                     <h2>Hungry ?</h2>*/
/*                     <img src="{{ 'assets/images/under-heading.png'|theme }}" alt="" >*/
/*                 </div>*/
/* 			</div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="filters col-md-12 col-xs-12">*/
/*                 <ul id="filters" class="clearfix">*/
/*                     <li><span class="filter" data-filter="all">All</span></li>*/
/*                     <li><span class="filter" data-filter=".ginger">Ginger</span></li>*/
/*                     <li><span class="filter" data-filter=".pizza">Pizza</span></li>*/
/*                     <li><span class="filter" data-filter=".pasta">Pasta</span></li>*/
/*                     <li><span class="filter" data-filter=".drink">Drink</span></li>*/
/*                     <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     */
/* */
/*     {% set posts = blogPosts.posts %}*/
/* */
/*         <div class="row" id="Container">    */
/*             */
/*       <div class="col-md-12">*/
/*            {% for post in posts %}*/
/*           */
/*             <div class="col-md-4 col-sm-6 pull-right">*/
/*                 <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>*/
/* */
/*                     <p class="info">*/
/*                         Posted*/
/*                         {% if post.categories.count %} in {% endif %}*/
/*                         {% for category in post.categories %}*/
/*                             <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                         {% endfor %}*/
/*                         on {{ post.published_at|date('M d, Y') }}*/
/*                     </p>*/
/* */
/*                     <p class="excerpt">{{ post.summary }}</p>*/
/*                         <div class="portfolio-wrapper">                */
/*                             <div class="portfolio-thumb">*/
/*                             */
/*                             {%for  image  in post.featured_images  %}*/
/*                                 <img src="{{image.path |raw }}" alt="">*/
/*                             {%endfor%}*/
/*                             */
/*                            */
/*                             </div>*/
/*                         </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*        */
/*    	</div>*/
/* </div>*/
/*     */
/* */
/*             */
/*     */
/* 		<div class="pagination">*/
/* 			<div class="row">   */
/* 				<div class="col-md-12">*/
/* 					<ul>*/
/* 						<li><a href="#">1</a></li>*/
/* 						<li><a href="#">2</a></li>*/
/* 						<li><a href="#">3</a></li>*/
/* 						<li><a href="#">>></a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
