<?php

/* SMAdminBundle:Security:login.html.twig */
class __TwigTemplate_053896ee38a9521b80db8690cace34a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<form class=\"form-horizontal form-login\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_login_check"), "html", null, true);
        echo "\" method=\"post\">
    <fieldset>
        <legend>System Login</legend>
        ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "            <div class=\"alert alert-error\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 11
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"input-prepend\">
                    <span class=\"add-on\">
                        <i class=\"icon-user\"></i>
                    </span>
                        <input class=\"span3\" id=\"username\" type=\"text\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"input-prepend\">
                    <span class=\"add-on\">
                        <i class=\"icon-lock\"></i>
                    </span>
                    <input class=\"span3\" id=\"password\" type=\"password\" placeholder=\"Password\" name=\"_password\" >
                </div>
            </div>
        </div>
        <div>
            <label for=\"remember_me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" />
                Keep me logged in
            </label>
        </div>
    </fieldset>
    <div class=\"form-actions\">
        <button name=\"login\" type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"Loading...\" id=\"form-login-btnLogin\">Login</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
