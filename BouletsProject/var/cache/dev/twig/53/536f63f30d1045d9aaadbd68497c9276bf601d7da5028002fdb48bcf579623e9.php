<?php

/* BackBundle:Machine:deletemachine.html.twig */
class __TwigTemplate_998234628915686601001843e28f00adb9ecb8bd10cfeccdc6f7a31af20cd565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Machine:deletemachine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_384108fc4841641f5d5c8fcdd8d71f898db8e27aa72b7acd17c5d62d759e27c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384108fc4841641f5d5c8fcdd8d71f898db8e27aa72b7acd17c5d62d759e27c1->enter($__internal_384108fc4841641f5d5c8fcdd8d71f898db8e27aa72b7acd17c5d62d759e27c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Machine:deletemachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384108fc4841641f5d5c8fcdd8d71f898db8e27aa72b7acd17c5d62d759e27c1->leave($__internal_384108fc4841641f5d5c8fcdd8d71f898db8e27aa72b7acd17c5d62d759e27c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54872a0fbda33fa018c129ecd78956076680fbe54b5f8223b577de0c9fed31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54872a0fbda33fa018c129ecd78956076680fbe54b5f8223b577de0c9fed31ae->enter($__internal_54872a0fbda33fa018c129ecd78956076680fbe54b5f8223b577de0c9fed31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:deletemachine.html.twig"));

        // line 6
        echo "    Suppression de machine
";
        
        $__internal_54872a0fbda33fa018c129ecd78956076680fbe54b5f8223b577de0c9fed31ae->leave($__internal_54872a0fbda33fa018c129ecd78956076680fbe54b5f8223b577de0c9fed31ae_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e92f824c0270b7e0c0d52af9a54a0de18e4471eb72a6458486efff46b1931794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92f824c0270b7e0c0d52af9a54a0de18e4471eb72a6458486efff46b1931794->enter($__internal_e92f824c0270b7e0c0d52af9a54a0de18e4471eb72a6458486efff46b1931794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:deletemachine.html.twig"));

        // line 12
        echo "    <div class=\"container\">
        <h1>Page de suppressions de machine </h1>

        <div id=\"container\" class=\"col\">

            <h1>Suppressions de machine</h1>

            <form method=\"POST\" action=\"\">
                Ip :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"IP\"><br><br>
                <input type=\"submit\">

            </form>

            ";
        // line 26
        if (array_key_exists("alerte", $context)) {
            // line 27
            echo "                <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
            ";
        }
        // line 29
        echo "
        </div>

    </div>
";
        
        $__internal_e92f824c0270b7e0c0d52af9a54a0de18e4471eb72a6458486efff46b1931794->leave($__internal_e92f824c0270b7e0c0d52af9a54a0de18e4471eb72a6458486efff46b1931794_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Machine:deletemachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  73 => 27,  71 => 26,  55 => 12,  49 => 11,  41 => 6,  35 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"BackBundle::layout.html.twig\"%}



{%block title%}
    Suppression de machine
{%endblock%}



{% block content %}
    <div class=\"container\">
        <h1>Page de suppressions de machine </h1>

        <div id=\"container\" class=\"col\">

            <h1>Suppressions de machine</h1>

            <form method=\"POST\" action=\"\">
                Ip :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"IP\"><br><br>
                <input type=\"submit\">

            </form>

            {% if alerte is defined %}
                <p>{{ alerte }}</p>
            {% endif %}

        </div>

    </div>
{%endblock%}", "BackBundle:Machine:deletemachine.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/Machine/deletemachine.html.twig");
    }
}
