<?php

/* XiaomeiXiaomeiBundle:Cours:register.html.twig */
class __TwigTemplate_574fe1d7bddfb2f27f75c90dbc7f27920f0ba50a518a0358a9c8c525d5a716f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - inscription au cours
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Inscription au cours</h1>

<div class=\"col\">

                     ";
        // line 12
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 13
            echo "                     Veuillez confirmer votre inscription au cours; 
                     vous êtres connécté comme :session username:

                     <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_inscriptioncoursconfirmer", array("id" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))), "html", null, true);
            echo "\">Confirmer</a>

                     
                    ";
        } else {
            // line 20
            echo "                    <h3>Vous n'êtres pas connecté;merci de faire inscirption ou connexiton
                    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
                    <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_register");
            echo "\">Inscription</a></li>
                ";
        }
        // line 23
        echo "     
</div>

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  113 => 39,  77 => 21,  170 => 60,  167 => 59,  129 => 6,  124 => 63,  76 => 36,  90 => 27,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 51,  143 => 11,  135 => 7,  119 => 42,  102 => 32,  71 => 23,  67 => 20,  63 => 15,  59 => 18,  38 => 7,  94 => 28,  89 => 25,  85 => 24,  75 => 23,  68 => 22,  56 => 17,  87 => 40,  21 => 2,  26 => 6,  93 => 26,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 8,  136 => 56,  121 => 46,  117 => 40,  105 => 51,  91 => 27,  62 => 23,  49 => 13,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 19,  69 => 34,  47 => 12,  40 => 7,  37 => 18,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 43,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 31,  98 => 31,  96 => 31,  83 => 25,  74 => 24,  66 => 15,  55 => 29,  52 => 14,  50 => 27,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 50,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 54,  109 => 37,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 41,  86 => 26,  82 => 39,  80 => 19,  73 => 23,  64 => 21,  60 => 16,  57 => 11,  54 => 16,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
