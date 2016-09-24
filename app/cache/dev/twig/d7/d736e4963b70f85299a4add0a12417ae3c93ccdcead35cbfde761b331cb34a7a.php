<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_617c46ab8959362747453033b304325f2be63fc522644f2d54bbaef198710cf9 = $this->env->getExtension("native_profiler");
        $__internal_617c46ab8959362747453033b304325f2be63fc522644f2d54bbaef198710cf9->enter($__internal_617c46ab8959362747453033b304325f2be63fc522644f2d54bbaef198710cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_617c46ab8959362747453033b304325f2be63fc522644f2d54bbaef198710cf9->leave($__internal_617c46ab8959362747453033b304325f2be63fc522644f2d54bbaef198710cf9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af10c0c32c2530988185f7d8df87c5ba959e2b38a25e905986809bf106576b00 = $this->env->getExtension("native_profiler");
        $__internal_af10c0c32c2530988185f7d8df87c5ba959e2b38a25e905986809bf106576b00->enter($__internal_af10c0c32c2530988185f7d8df87c5ba959e2b38a25e905986809bf106576b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af10c0c32c2530988185f7d8df87c5ba959e2b38a25e905986809bf106576b00->leave($__internal_af10c0c32c2530988185f7d8df87c5ba959e2b38a25e905986809bf106576b00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0019b815993572fd6e8434a94cf8c6a73fca9710d02872ddc6457e88a6ed79f7 = $this->env->getExtension("native_profiler");
        $__internal_0019b815993572fd6e8434a94cf8c6a73fca9710d02872ddc6457e88a6ed79f7->enter($__internal_0019b815993572fd6e8434a94cf8c6a73fca9710d02872ddc6457e88a6ed79f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0019b815993572fd6e8434a94cf8c6a73fca9710d02872ddc6457e88a6ed79f7->leave($__internal_0019b815993572fd6e8434a94cf8c6a73fca9710d02872ddc6457e88a6ed79f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c473409e07257ae449c80383fcd5861561094ea9c387483b67103aa239844962 = $this->env->getExtension("native_profiler");
        $__internal_c473409e07257ae449c80383fcd5861561094ea9c387483b67103aa239844962->enter($__internal_c473409e07257ae449c80383fcd5861561094ea9c387483b67103aa239844962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c473409e07257ae449c80383fcd5861561094ea9c387483b67103aa239844962->leave($__internal_c473409e07257ae449c80383fcd5861561094ea9c387483b67103aa239844962_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca15409a664fa1018cd0ade01bd3223c9eec5ee5dcf5ec911f3a2ab7090b9acd = $this->env->getExtension("native_profiler");
        $__internal_ca15409a664fa1018cd0ade01bd3223c9eec5ee5dcf5ec911f3a2ab7090b9acd->enter($__internal_ca15409a664fa1018cd0ade01bd3223c9eec5ee5dcf5ec911f3a2ab7090b9acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca15409a664fa1018cd0ade01bd3223c9eec5ee5dcf5ec911f3a2ab7090b9acd->leave($__internal_ca15409a664fa1018cd0ade01bd3223c9eec5ee5dcf5ec911f3a2ab7090b9acd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
