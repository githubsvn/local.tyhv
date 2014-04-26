<?php

/* SMFrontBundle:Default:left-ads.html.twig */
class __TwigTemplate_3128f944c8a3a7a5265d40761eb5fb6b extends Twig_Template
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
        echo "<div id=\"divAdRight\" style=\"display: block; position: fixed; top: 0px;\">
        <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["rightLink"]) ? $context["rightLink"] : $this->getContext($context, "rightLink")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["rightImg"]) ? $context["rightImg"] : $this->getContext($context, "rightImg")), "html", null, true);
        echo "\" width=\"125\" /></a>
    </div>
    <div id=\"divAdLeft\" style=\"display: block; position: fixed; top: 0px;\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["leftLink"]) ? $context["leftLink"] : $this->getContext($context, "leftLink")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["leftImg"]) ? $context["leftImg"] : $this->getContext($context, "leftImg")), "html", null, true);
        echo "\" width=\"125\" /></a>
    </div>
    <script>
        function FloatTopDiv()
        {
            startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
            startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
            var d = document;
            function ml(id)
            {
                var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                el.x = startRX;
                el.y = startRY;
                return el;
            }
            function m2(id)
            {
                var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                e2.x = startLX;
                e2.y = startLY;
                return e2;
            }
            window.stayTopLeft=function()
            {
                if (document.documentElement && document.documentElement.scrollTop)
                    var pY =  document.documentElement;
                else if (document.body)
                    var pY =  document.body;
                if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
                ftlObj.y += (pY+startRY-ftlObj.y)/16;
                ftlObj.sP(ftlObj.x, ftlObj.y);
                ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
                ftlObj2.sP(ftlObj2.x, ftlObj2.y);
                setTimeout(\"stayTopLeft()\", 1);
            }
            ftlObj = ml(\"divAdRight\");
            //stayTopLeft();
            ftlObj2 = m2(\"divAdLeft\");
            stayTopLeft();
        }
        function ShowAdDiv()
        {
            var objAdDivRight = document.getElementById(\"divAdRight\");
            var objAdDivLeft = document.getElementById(\"divAdLeft\");
            if (document.body.clientWidth < 1000)
            {
                objAdDivRight.style.display = \"none\";
                objAdDivLeft.style.display = \"none\";
            }
            else
            {
                objAdDivRight.style.display = \"block\";
                objAdDivLeft.style.display = \"block\";
                FloatTopDiv();
            }
        }
    </script>
    <script>
    document.write(\"<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\\/script>\");
    </script>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:left-ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  22 => 2,  19 => 1,);
    }
}
