<?php

/* ProfAPIBundle:Mail:noteemail.txt.twig */
class __TwigTemplate_ea44bc8ac0c5af38180fcf8a6bd712eadbc0709e4b91a4e4d307dbedce50bf65 extends Twig_Template
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
        echo "Bonjour,

Vos note :

- Controle n°1 : ";
        // line 5
        echo $this->getAttribute((isset($context["etd"]) ? $context["etd"] : $this->getContext($context, "etd")), "NoteC1", array());
        echo "
- Controle n°2 : ";
        // line 6
        echo $this->getAttribute((isset($context["etd"]) ? $context["etd"] : $this->getContext($context, "etd")), "NoteC2", array());
        echo "
- Autre        : ";
        // line 7
        echo $this->getAttribute((isset($context["etd"]) ? $context["etd"] : $this->getContext($context, "etd")), "Autre", array());
        echo "
- Examen       : ";
        // line 8
        echo $this->getAttribute((isset($context["etd"]) ? $context["etd"] : $this->getContext($context, "etd")), "NoteEx", array());
        echo "

-> La Note Finale est : ";
        // line 10
        echo $this->getAttribute((isset($context["etd"]) ? $context["etd"] : $this->getContext($context, "etd")), "NoteF", array());
        echo "

";
        // line 12
        echo $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "Nom", array());
        echo " ";
        echo $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "Prenom", array());
        echo ".";
    }

    public function getTemplateName()
    {
        return "ProfAPIBundle:Mail:noteemail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
