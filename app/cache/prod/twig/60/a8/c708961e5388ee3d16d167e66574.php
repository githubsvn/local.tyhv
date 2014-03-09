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
              <a href=\"#\" title=\"Tôi yêu hàng việt\" class=\"logo\"><img src=\"/web/front/images/logo-toi-yeu-hang-viet-2.png\" alt=\"Tôi yêu hàng việt\" /></a>
              <ul>
                <li class=\"col-1\">
                  <h3>TOI YEU VIET NAM COMPANY</h3>
                  <address>
                    <strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add", array(), "SMFrontBundle"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "footerAdd"), "html", null, true);
        echo "<br />
                    <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phone", array(), "SMFrontBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "phone"), "html", null, true);
        echo " - <strong>
                        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fax", array(), "SMFrontBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "fax"), "html", null, true);
        echo "<br />
                    <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMFrontBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "infoEmail"), "html", null, true);
        echo "
                  </address>
                </li>
                
                <li class=\"col-2\">
                  <nav>
                    <ul>
                      ";
        // line 19
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:footerMenu", array(), array());
        // line 20
        echo "                    </ul>
                  </nav>
                </li>
                
                <li class=\"col-3\">
                  <h3><span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Follow us", array(), "SMFrontBundle"), "html", null, true);
        echo "</span></h3>
                  <ul class=\"social\">
                    ";
        // line 27
        if (($this->getContext($context, "facebookPage") != "")) {
            // line 28
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "facebookPage"), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-4\">Facebook</a></li>
                    ";
        }
        // line 30
        echo "                    ";
        if (($this->getContext($context, "twitterPage") != "")) {
            // line 31
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "twitterPage"), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-5\">Twitter</a></li>
                    ";
        }
        // line 33
        echo "                    ";
        if (($this->getContext($context, "youtubePage") != "")) {
            // line 34
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "youtubePage"), "html", null, true);
            echo "\" title=\"Facebook\" class=\"wi-icon wi-icon-6\">Youtube</a></li>
                    ";
        }
        // line 36
        echo "                  </ul>
                </li>
              </ul>
            </div>
          </div><!-- end footer-top -->
          <div class=\"footer-bottom\">
            <div class=\"inner\">
              <div class=\"counter\">Visitors counter:<img src=\"/web/front/images/img-counter.png\" alt=\"\" /></div>
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
        return array (  99 => 36,  93 => 34,  90 => 33,  84 => 31,  81 => 30,  75 => 28,  73 => 27,  68 => 25,  61 => 20,  59 => 19,  47 => 12,  41 => 11,  35 => 10,  29 => 9,  19 => 1,);
    }
}
