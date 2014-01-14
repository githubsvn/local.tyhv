<?php

/* SMFrontBundle:Default:form-comment.html.twig */
class __TwigTemplate_14942f1f98d8f74bb50fcd8d6184a3c7 extends Twig_Template
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
        echo "<div class=\"send-comment\">
  <div class=\"heading\">
      <h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comments", array(), "SMFrontBundle"), "html", null, true);
        echo "</h3>
    <div class=\"social\">
      <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Share", array(), "SMFrontBundle"), "html", null, true);
        echo ":</span>
      <ul>
        <li><a href=\"#\" title=\"Facebook\" class=\"wi-icon wi-icon-7\">Facebook</a></li>
        <li><a href=\"#\" title=\"Google Plus\" class=\"wi-icon wi-icon-8\">Google Plus</a></li>
        <li><a href=\"#\" title=\"Twitter\" class=\"wi-icon wi-icon-9\">Twitter</a></li>
      </ul>
    </div>
  </div>
  <form id=\"commentForm\" class=\"comment-frm\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_new_comment"), "html", null, true);
        echo "\" method=\"post\">
    <ul>
        
      <li>
        <label for=\"cmt-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Title", array(), "SMFrontBundle"), "html", null, true);
        echo "</label>
        <span class=\"input-1\">
            <input type=\"text\" id=\"title\" name=\"title\" />
            <input type=\"hidden\" id=\"product\" name=\"product\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "productId"), "html", null, true);
        echo "\"/>
        </span>
<!--        <div class=\"rating\">
          <span>Đánh giá của bạn:</span>
          <ul>
            <li><a href=\"#\" title=\"\" class=\"wi-icon wi-icon-12\"></a></li>
            <li>
              <a href=\"#\" title=\"\" class=\"wi-icon wi-icon-13\"></a>
              <a href=\"#\" title=\"\" class=\"wi-icon wi-icon-13\"></a>
              <a href=\"#\" title=\"\" class=\"wi-icon wi-icon-13\"></a>
              <a href=\"#\" title=\"\" class=\"wi-icon wi-icon-13\"></a>
              <a href=\"#\" title=\"\" class=\"wi-icon wi-icon-13\"></a>
            </li>
          </ul>
        </div>-->
      </li>
      <li>
          <label for=\"cmt-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMFrontBundle"), "html", null, true);
        echo "</label>
          <span class=\"input-1\" style=\"width: 50%;\">
              <input type=\"text\" id=\"name\" name=\"name\" size=\"30\" style=\"width: 50%;\"/>
          </span>
      </li>
<!--      <li>
          <label for=\"cmt-title\">Email</label>
          <span class=\"input-1\" style=\"width: 50%;\">
              <input type=\"text\" id=\"cmt-title\" name=\"email\" size=\"30\" style=\"width: 50%;\"/>
          </span>
      </li>-->
      <li>
        <label for=\"message\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comment", array(), "SMFrontBundle"), "html", null, true);
        echo ":</label>
        <span class=\"textarea-1\">
            <textarea id=\"content\" name=\"content\"></textarea>
        </span>
      </li>
      <li>
        <button type=\"button\" class=\"btn-send\" id=\"btnSendComment\" name=\"send-btn\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send Comment", array(), "SMFrontBundle"), "html", null, true);
        echo "\"></button>
        <div id=\"notice-ajax\" style=\"display: none; float: inside;\"><img src=\"/web/front/images/loading.gif\" width=\"20\" height=\"20\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading", array(), "SMFrontBundle"), "html", null, true);
        echo "</div>
      </li>
    </ul>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:form-comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 56,  96 => 55,  87 => 49,  72 => 37,  52 => 20,  46 => 17,  39 => 13,  28 => 5,  23 => 3,  19 => 1,);
    }
}
