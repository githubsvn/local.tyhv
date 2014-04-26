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
        return array (  134 => 51,  123 => 49,  119 => 48,  107 => 38,  101 => 36,  98 => 35,  92 => 33,  89 => 32,  83 => 30,  81 => 29,  76 => 27,  69 => 22,  67 => 21,  55 => 14,  49 => 13,  43 => 12,  37 => 11,  28 => 5,  24 => 4,  19 => 1,);
    }
}
