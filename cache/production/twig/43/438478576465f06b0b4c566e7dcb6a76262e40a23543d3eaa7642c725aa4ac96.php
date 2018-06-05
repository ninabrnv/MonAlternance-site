<?php

/* forumlist_body.html */
class __TwigTemplate_3e42dc6d567c1836c8158554c97ed51fcae9c5e67b26bf056295993884fbc1ee extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 12
                echo "\t\t<div class=\"forabg category-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) == 0)) {
                    echo " elegant";
                }
                echo "\" data-hide-description=\"";
                echo $this->getAttribute(($context["definition"] ?? null), "HIDE_FORUM_DESCRIPTION", array());
                echo "\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" data-id=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t";
                // line 19
                if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) != 0)) {
                    // line 20
                    echo "\t\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 21
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                    // line 22
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                    echo "</span></dd>
\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 30
            echo "\t";
            // line 31
            echo "
\t";
            // line 32
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 33
                echo "\t\t";
                // line 34
                echo "\t\t<li class=\"row forum-";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">
\t\t\t";
                // line 35
                // line 36
                echo "\t\t\t";
                ob_start();
                // line 37
                echo "\t\t\t";
                if (((($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) == 0) &&  !$this->getAttribute($context["forumrow"], "CLICKS", array())) &&  !$this->getAttribute($context["forumrow"], "S_IS_LINK", array()))) {
                    // line 38
                    echo "\t\t\t\t<div class=\"forum-statistics\">
\t\t\t\t\t<span class=\"dfn\">";
                    // line 39
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "</span><span class=\"comma\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                    echo "</span>
\t\t\t\t\t<span class=\"dfn\">";
                    // line 40
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <span class=\"value\">";
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "</span>
\t\t\t\t</div>
\t\t\t";
                }
                // line 43
                echo "\t\t\t";
                $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
                $context['definition']->set('EXTRA_DESC', $value);
                // line 44
                echo "\t\t\t<dl class=\"row-item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                if (twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array()))) {
                    echo " elegant-row";
                }
                echo "\">
\t\t\t\t<dt title=\"";
                // line 45
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 47
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 48
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 50
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 51
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 56
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\" data-id=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 57
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<div class=\"forum-description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</div>";
                }
                // line 58
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array());
                echo "
\t\t\t\t\t\t";
                // line 59
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 60
                    echo "\t\t\t\t\t\t\t<div class=\"forum-moderators\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<div class=\"subforums-list\">
\t\t\t\t\t\t\t";
                    // line 64
                    // line 65
                    echo "\t\t\t\t\t\t\t<strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                        // line 69
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 70
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " icon-red";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo "<span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                            echo "</span>";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                    // line 74
                    // line 75
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 77
                echo "
\t\t\t\t\t\t";
                // line 78
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 79
                    echo "\t\t\t\t\t\t";
                    if ((twig_trim_filter($this->getAttribute(($context["definition"] ?? null), "EXTRA_DESC", array())) == "")) {
                        // line 80
                        echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 81
                        if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                            // line 82
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        } elseif (( !$this->getAttribute(                        // line 83
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                            echo "</strong>
\t\t\t\t\t\t\t";
                        }
                        // line 86
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t";
                    if (( !$this->getAttribute($context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array()))) {
                        // line 89
                        echo "\t\t\t\t\t\t\t<div class=\"forum-lastpost\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<span><strong>";
                        // line 90
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong> <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                        echo "\" class=\"lastsubject\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a></span>
\t\t\t\t\t\t\t\t<span>";
                        // line 91
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo ", ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 97
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 98
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 99
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 100
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute(($context["definition"] ?? null), "STANDARD_FORUMS_LAYOUT", array()) != 0)) {
                        // line 101
                        echo "\t\t\t\t\t<dd class=\"topics\">";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                        // line 102
                        echo $this->getAttribute($context["forumrow"], "POSTS", array());
                        echo " <dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</dfn></dd>
\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 106
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 108
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 110
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\" class=\"forum-mcplink\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 112
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 116
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 118
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 119
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 123
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 125
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                        echo "<br />&nbsp;
\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 135
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 137
                echo "\t\t\t</dl>
\t\t\t";
                // line 138
                // line 139
                echo "\t\t</li>
\t\t";
                // line 140
                // line 141
                echo "\t";
            }
            // line 142
            echo "
\t";
            // line 143
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 144
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 148
                // line 149
                echo "\t";
            }
            // line 150
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 152
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 154
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 154,  535 => 152,  529 => 150,  526 => 149,  525 => 148,  519 => 144,  517 => 143,  514 => 142,  511 => 141,  510 => 140,  507 => 139,  506 => 138,  503 => 137,  499 => 135,  494 => 132,  488 => 130,  482 => 128,  476 => 125,  469 => 124,  467 => 123,  460 => 122,  450 => 120,  448 => 119,  446 => 118,  441 => 117,  439 => 116,  435 => 114,  429 => 112,  422 => 111,  420 => 110,  415 => 108,  408 => 107,  406 => 106,  402 => 104,  395 => 102,  388 => 101,  385 => 100,  383 => 99,  375 => 98,  373 => 97,  369 => 95,  366 => 94,  356 => 91,  345 => 90,  342 => 89,  339 => 88,  335 => 86,  326 => 84,  324 => 83,  316 => 82,  314 => 81,  311 => 80,  308 => 79,  306 => 78,  303 => 77,  299 => 75,  298 => 74,  295 => 73,  288 => 71,  270 => 70,  253 => 69,  250 => 68,  246 => 67,  239 => 65,  238 => 64,  235 => 63,  232 => 62,  223 => 60,  221 => 59,  216 => 58,  210 => 57,  201 => 56,  194 => 55,  185 => 51,  175 => 50,  172 => 49,  170 => 48,  167 => 47,  161 => 46,  157 => 45,  149 => 44,  145 => 43,  135 => 40,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  115 => 35,  110 => 34,  108 => 33,  106 => 32,  103 => 31,  101 => 30,  95 => 26,  94 => 25,  91 => 24,  86 => 22,  82 => 21,  77 => 20,  75 => 19,  61 => 18,  58 => 17,  57 => 16,  44 => 12,  41 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}
