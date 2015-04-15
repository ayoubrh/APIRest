<?php

/* ProfAPIBundle:Personne:new.json.twig */
class __TwigTemplate_e3acad6ed04ed0f8646508ffaf07f8f956a88006e2a2a67e8a6e112c716b2fc5 extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
<form action=\"http://127.0.0.1/APIRest/web/app_dev.php/api/addprofs\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"hidden\" name=\"link\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\" />
    <p>
        <button type=\"submit\">Valider</button>
    </p>
</form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ProfAPIBundle:Personne:new.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
