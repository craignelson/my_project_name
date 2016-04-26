<?php

/* base.html.twig */
class __TwigTemplate_1e1d57987a1aa700e47f8413fcef538829a533183c0c3b5d37a5e0148ca5e136 extends Twig_Template
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
        $__internal_a8a9662519292973144ff3c9d834d6289d004ddc354d137158894eb1cf5d2a40 = $this->env->getExtension("native_profiler");
        $__internal_a8a9662519292973144ff3c9d834d6289d004ddc354d137158894eb1cf5d2a40->enter($__internal_a8a9662519292973144ff3c9d834d6289d004ddc354d137158894eb1cf5d2a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a8a9662519292973144ff3c9d834d6289d004ddc354d137158894eb1cf5d2a40->leave($__internal_a8a9662519292973144ff3c9d834d6289d004ddc354d137158894eb1cf5d2a40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49ac1c690a6c7c3ac11db311127a5dd44ea37bd9c61dcfe153881d28fbc671d1 = $this->env->getExtension("native_profiler");
        $__internal_49ac1c690a6c7c3ac11db311127a5dd44ea37bd9c61dcfe153881d28fbc671d1->enter($__internal_49ac1c690a6c7c3ac11db311127a5dd44ea37bd9c61dcfe153881d28fbc671d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_49ac1c690a6c7c3ac11db311127a5dd44ea37bd9c61dcfe153881d28fbc671d1->leave($__internal_49ac1c690a6c7c3ac11db311127a5dd44ea37bd9c61dcfe153881d28fbc671d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6cec6413a0d1c9ff513db9d64d584ce66d61c638c7fc52b9e387daf5070c1a0 = $this->env->getExtension("native_profiler");
        $__internal_d6cec6413a0d1c9ff513db9d64d584ce66d61c638c7fc52b9e387daf5070c1a0->enter($__internal_d6cec6413a0d1c9ff513db9d64d584ce66d61c638c7fc52b9e387daf5070c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6cec6413a0d1c9ff513db9d64d584ce66d61c638c7fc52b9e387daf5070c1a0->leave($__internal_d6cec6413a0d1c9ff513db9d64d584ce66d61c638c7fc52b9e387daf5070c1a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d8742b9bb1e659f0ea9698e15bacd58350dd72e55c33e3bf5fddbf7649d3451 = $this->env->getExtension("native_profiler");
        $__internal_4d8742b9bb1e659f0ea9698e15bacd58350dd72e55c33e3bf5fddbf7649d3451->enter($__internal_4d8742b9bb1e659f0ea9698e15bacd58350dd72e55c33e3bf5fddbf7649d3451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d8742b9bb1e659f0ea9698e15bacd58350dd72e55c33e3bf5fddbf7649d3451->leave($__internal_4d8742b9bb1e659f0ea9698e15bacd58350dd72e55c33e3bf5fddbf7649d3451_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5339c782ef062d4c920032fc10d4dbec4190b38c182077c52516afef2042b94a = $this->env->getExtension("native_profiler");
        $__internal_5339c782ef062d4c920032fc10d4dbec4190b38c182077c52516afef2042b94a->enter($__internal_5339c782ef062d4c920032fc10d4dbec4190b38c182077c52516afef2042b94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5339c782ef062d4c920032fc10d4dbec4190b38c182077c52516afef2042b94a->leave($__internal_5339c782ef062d4c920032fc10d4dbec4190b38c182077c52516afef2042b94a_prof);

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
