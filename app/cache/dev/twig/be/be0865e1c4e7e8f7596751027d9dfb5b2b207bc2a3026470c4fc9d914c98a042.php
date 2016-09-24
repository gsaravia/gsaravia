<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2016452ebf451d175f24781ada48b995e89e59f126fb08bfad690a824d962031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c5779ab906f5fa2b42e4b09a36ca862139b0220e13de400fe1dad1c50d21443 = $this->env->getExtension("native_profiler");
        $__internal_6c5779ab906f5fa2b42e4b09a36ca862139b0220e13de400fe1dad1c50d21443->enter($__internal_6c5779ab906f5fa2b42e4b09a36ca862139b0220e13de400fe1dad1c50d21443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5779ab906f5fa2b42e4b09a36ca862139b0220e13de400fe1dad1c50d21443->leave($__internal_6c5779ab906f5fa2b42e4b09a36ca862139b0220e13de400fe1dad1c50d21443_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bf89717c810754249a02e3f9f6e9d64a9667f418f27fd6c4f8ba19253305a6a = $this->env->getExtension("native_profiler");
        $__internal_7bf89717c810754249a02e3f9f6e9d64a9667f418f27fd6c4f8ba19253305a6a->enter($__internal_7bf89717c810754249a02e3f9f6e9d64a9667f418f27fd6c4f8ba19253305a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bf89717c810754249a02e3f9f6e9d64a9667f418f27fd6c4f8ba19253305a6a->leave($__internal_7bf89717c810754249a02e3f9f6e9d64a9667f418f27fd6c4f8ba19253305a6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_037f8d6d76d7e79e8b6e9fa0585840eeaeb0cbae1e9921a43c6c6b9e17eea13b = $this->env->getExtension("native_profiler");
        $__internal_037f8d6d76d7e79e8b6e9fa0585840eeaeb0cbae1e9921a43c6c6b9e17eea13b->enter($__internal_037f8d6d76d7e79e8b6e9fa0585840eeaeb0cbae1e9921a43c6c6b9e17eea13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_037f8d6d76d7e79e8b6e9fa0585840eeaeb0cbae1e9921a43c6c6b9e17eea13b->leave($__internal_037f8d6d76d7e79e8b6e9fa0585840eeaeb0cbae1e9921a43c6c6b9e17eea13b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae67e922b6999e2c8c3e7861d187a46959e47dcecd8151e879a8b63632e680fd = $this->env->getExtension("native_profiler");
        $__internal_ae67e922b6999e2c8c3e7861d187a46959e47dcecd8151e879a8b63632e680fd->enter($__internal_ae67e922b6999e2c8c3e7861d187a46959e47dcecd8151e879a8b63632e680fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae67e922b6999e2c8c3e7861d187a46959e47dcecd8151e879a8b63632e680fd->leave($__internal_ae67e922b6999e2c8c3e7861d187a46959e47dcecd8151e879a8b63632e680fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
