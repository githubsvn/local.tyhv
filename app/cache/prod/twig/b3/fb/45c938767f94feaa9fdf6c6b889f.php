<?php

/* SMFrontBundle:Default:template-email-to-admin.html.twig */
class __TwigTemplate_b3fb45c938767f94feaa9fdf6c6b889f extends Twig_Template
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
        echo "<b>Hello Admin,</b>
<br />
Vừa có một người dùng đăng ký nhận sản phẩm.<b>
Thông tin email là : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "email"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:template-email-to-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
