<?php

/* SMFrontBundle:Default:video.html.twig */
class __TwigTemplate_09d335be72ab745c521eaab17275829d extends Twig_Template
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
        echo "<!--<div class=\"video-block\">
    <iframe width=\"208\" height=\"153\" src=\"http://www.youtube.com/embed/u2IDsSL0OHg?wmode=transparent\"></iframe>
</div>-->

<div class=\"video-block-list yt_holder\">
    <div id=\"ytvideo\"></div>
    <ul class=\"demo1\">
        <li>
            <a href=\"http://www.youtube.com/watch?v=QBBWKvY-VDc\" title=\"Video 1Video 1Video 1Video 1\">
              <div class=\"content\">
                <p>Video 1Video 1Video 1Video 1</p>
              </div>
            </a>
        </li>
        <li>
            <a href=\"http://www.youtube.com/watch?v=ZXMQqLnRhRI\" title=\"Video 1Video 1Video 1Video 1\">
              <div class=\"content\">
                <p>Video 1Video 1Video 1Video 1</p>
              </div>
            </a>
        </li>
        <li>
            <a href=\"http://www.youtube.com/watch?v=Wvo-g_JvURI\" title=\"Video 1Video 1Video 1Video 1\">
              <div class=\"content\">
                <p>Video 1Video 1Video 1Video 1</p>
              </div>
            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
