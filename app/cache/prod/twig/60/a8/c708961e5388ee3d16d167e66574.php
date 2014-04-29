<?php

/* SMFrontBundle:Default:footer.html.twig */
class __TwigTemplate_60a8c708961e5388ee3d16d167e66574 extends Twig_Template
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
        echo "<footer id=\"footer\">
          <div class=\"footer-top\">
            <div class=\"inner\">
              <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["logoFooterLink"]) ? $context["logoFooterLink"] : $this->getContext($context, "logoFooterLink")), "html", null, true);
        echo "\" title=\"Tôi yêu hàng việt\" class=\"logo\">
                  <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["logoFooterImg"]) ? $context["logoFooterImg"] : $this->getContext($context, "logoFooterImg")), "html", null, true);
        echo "\" alt=\"Tôi yêu hàng việt\" width=\"225px;\" height=\"105px;\"/>
              </a>
              <ul>
                <li class=\"col-1\">
                  <h3>TOI YEU VIET NAM COMPANY</h3>
                  <address>
                    <strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add", array(), "SMFrontBundle"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, (isset($context["footerAdd"]) ? $context["footerAdd"] : $this->getContext($context, "footerAdd")), "html", null, true);
        echo "<br />
                    <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phone", array(), "SMFrontBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo " - <strong>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fax", array(), "SMFrontBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "<br />
                    <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMFrontBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, (isset($context["infoEmail"]) ? $context["infoEmail"] : $this->getContext($context, "infoEmail")), "html", null, true);
        echo "
                  </address>
                </li>
                
                <li class=\"col-2\">
                  <nav>
                    <ul>
                      ";
        // line 21
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footerMenu", array(), array());
        // line 22
        echo "                    </ul>
                  </nav>
                </li>
                
                <li class=\"col-3\">
                  <h3><span>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Follow us", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></h3>
                  <ul class=\"social\">
                    ";
        // line 29
        if (((isset($context["facebookPage"]) ? $context["facebookPage"] : $this->getContext($context, "facebookPage")) != "")) {
            // line 30
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["facebookPage"]) ? $context["facebookPage"] : $this->getContext($context, "facebookPage")), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-4\">Facebook</a></li>
                    ";
        }
        // line 32
        echo "                    ";
        if (((isset($context["twitterPage"]) ? $context["twitterPage"] : $this->getContext($context, "twitterPage")) != "")) {
            // line 33
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["twitterPage"]) ? $context["twitterPage"] : $this->getContext($context, "twitterPage")), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-5\">Twitter</a></li>
                    ";
        }
        // line 35
        echo "                    ";
        if (((isset($context["youtubePage"]) ? $context["youtubePage"] : $this->getContext($context, "youtubePage")) != "")) {
            // line 36
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["youtubePage"]) ? $context["youtubePage"] : $this->getContext($context, "youtubePage")), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-6\">Youtube</a></li>
                    ";
        }
        // line 38
        echo "                  </ul>
                </li>
              </ul>
            </div>
          </div><!-- end footer-top -->
          <div class=\"footer-bottom\">
            <div class=\"inner\">
              <div class=\"counter\">
                  <span>Visitors counter:</span>
                    <p>
                      ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrCounter"]) ? $context["arrCounter"] : $this->getContext($context, "arrCounter")));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 49
            echo "                        <span class=\"number number-";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</span>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </p>
              </div>
              
              <div class=\"copyright\">© 2012 Toi Yeu Viet Nam. All rights reserved</div>
            </div>
          </div>
        </footer>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  107 => 38,  98 => 35,  67 => 21,  81 => 29,  89 => 32,  52 => 14,  46 => 13,  209 => 78,  206 => 77,  199 => 75,  191 => 70,  184 => 68,  179 => 66,  172 => 62,  168 => 61,  156 => 56,  148 => 51,  141 => 49,  127 => 43,  111 => 37,  109 => 36,  106 => 35,  99 => 33,  94 => 30,  83 => 30,  59 => 14,  49 => 13,  92 => 33,  78 => 26,  71 => 22,  64 => 18,  43 => 12,  61 => 18,  120 => 33,  113 => 31,  101 => 36,  97 => 26,  82 => 22,  79 => 23,  76 => 27,  70 => 19,  65 => 16,  55 => 14,  51 => 14,  42 => 11,  24 => 4,  21 => 2,  37 => 11,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 10,  33 => 6,  30 => 9,  25 => 4,  87 => 30,  85 => 30,  73 => 19,  69 => 22,  60 => 15,  54 => 12,  47 => 11,  45 => 8,  38 => 11,  34 => 6,  26 => 4,  22 => 2,  19 => 1,  39 => 10,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 60,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 51,  125 => 59,  123 => 49,  117 => 41,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 28,  77 => 24,  75 => 28,  63 => 12,  57 => 14,  53 => 15,  48 => 9,  44 => 12,  40 => 7,  36 => 10,  29 => 5,  20 => 1,  31 => 4,  28 => 5,);
    }
}
