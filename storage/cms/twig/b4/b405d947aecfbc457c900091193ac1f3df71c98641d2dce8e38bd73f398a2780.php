<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/partials/latest-blog.htm */
class __TwigTemplate_da4e6afbaa913ac1fd0ff31ba1cbeab714ab1898e6ec606467ea08b5ef0024bd extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Предложения</h2>
                <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
    
     ";
        // line 11
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 12
        echo "
        <div class=\"row\" id=\"Container\">    
            
      <div class=\"col-md-12\">
           ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "          
            <div class=\"col-md-4 col-sm-6 pull-right\">
                <h3><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

                    <p class=\"info\">
                        Posted
                        ";
            // line 23
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 24
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
                // line 25
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
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
            // line 27
            echo "                        on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                    </p>

                    <p class=\"excerpt\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                        <div class=\"portfolio-wrapper\">                
                            <div class=\"portfolio-thumb\">
                            
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 35
                echo "                                <img src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" alt=\"\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            
                           
                            </div>
                        </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
       
       <div class=\"pagination\">
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
\t\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/partials/latest-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  131 => 37,  122 => 35,  118 => 34,  111 => 30,  104 => 27,  90 => 26,  81 => 25,  63 => 24,  59 => 23,  50 => 19,  46 => 17,  42 => 16,  36 => 12,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="heading-section">*/
/*                 <h2>Предложения</h2>*/
/*                 <img src="{{ 'assets/images/under-heading.png'|theme }}" alt="" >*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*      {% set posts = blogPosts.posts %}*/
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
/*        <div class="pagination">*/
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
/* */
/* </div>*/
