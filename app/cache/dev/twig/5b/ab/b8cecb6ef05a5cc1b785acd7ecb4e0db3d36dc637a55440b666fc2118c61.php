<?php

/* ProfAPIBundle:Default:index.html.twig */
class __TwigTemplate_5babb8cecb6ef05a5cc1b785acd7ecb4e0db3d36dc637a55440b666fc2118c61 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!


";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "Nom", array()), "html", null, true);
            echo "
";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "Prenom", array()), "html", null, true);
            echo "
";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "Adresse", array()), "html", null, true);
            echo "
";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "Tele", array()), "html", null, true);
            echo "
";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "Email", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProfAPIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  26 => 4,  19 => 1,);
    }
}
