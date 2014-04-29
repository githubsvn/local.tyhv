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
        return array (  119 => 48,  107 => 38,  98 => 35,  67 => 21,  81 => 29,  89 => 32,  52 => 14,  46 => 13,  209 => 78,  206 => 77,  199 => 75,  191 => 70,  184 => 68,  179 => 66,  172 => 62,  168 => 61,  156 => 56,  148 => 51,  141 => 49,  127 => 43,  111 => 37,  109 => 36,  106 => 35,  99 => 33,  94 => 30,  83 => 30,  59 => 14,  49 => 13,  92 => 33,  78 => 26,  71 => 22,  64 => 18,  43 => 12,  61 => 18,  120 => 33,  113 => 31,  101 => 36,  97 => 26,  82 => 22,  79 => 23,  76 => 27,  70 => 19,  65 => 16,  55 => 14,  51 => 11,  42 => 9,  24 => 4,  21 => 2,  37 => 11,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 10,  33 => 6,  30 => 5,  25 => 3,  87 => 30,  85 => 30,  73 => 19,  69 => 22,  60 => 15,  54 => 12,  47 => 11,  45 => 10,  38 => 11,  34 => 6,  26 => 4,  22 => 2,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 60,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 51,  125 => 59,  123 => 49,  117 => 41,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 28,  77 => 24,  75 => 28,  63 => 12,  57 => 12,  53 => 15,  48 => 9,  44 => 12,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 4,);
    }
}
