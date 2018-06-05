<?php

/* viewtopic_body.html */
class __TwigTemplate_68553da40dab51ccf5385005710d6b0faff14a2c166c553e7a299c4197b150c8 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">



<h2 class=\"topic-title\">";
        // line 8
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 9
        // line 10
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 11
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["MODERATORS"] ?? null)) {
            // line 14
            echo "<p>
\t<strong>";
            // line 15
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 18
        echo "
";
        // line 19
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 20
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 23
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 24
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 26
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 27
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 29
            echo "
\t\t</div>
\t</div>
";
        }
        // line 33
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 35
        // line 36
        echo "
\t";
        // line 37
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 38
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 39
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 40
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 44
            echo "\t\t</a>
\t";
        }
        // line 46
        echo "
\t";
        // line 47
        // line 48
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 49
        echo "\t";
        // line 50
        echo "
\t";
        // line 51
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 52
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 53
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 55
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 59
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 60
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 62
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 69
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 70
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 71
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 72
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 72)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 73
                echo "\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 76
            echo "\t\t</div>
\t";
        }
        // line 78
        echo "\t";
        // line 79
        echo "</div>

";
        // line 81
        // line 82
        echo "
";
        // line 83
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 84
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 90
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 91
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 95
                echo "\t\t\t\t";
                // line 96
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 97
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 98
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 99
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 100
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 102
                // line 103
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 105
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 110
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 111
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 113
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 116
            echo "
\t\t\t";
            // line 117
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 118
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 120
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 123
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 128
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 129
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 135
        echo "
";
        // line 136
        // line 137
        echo "
";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 139
            echo "\t";
            // line 140
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 141
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 143
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 146
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 147
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 149
            // line 150
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 151
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 152
                echo "\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t";
            // line 154
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 155
            // line 156
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            // line 157
            echo "\t\t\t\t";
            // line 158
            echo "\t\t\t</dt>

\t\t\t";
            // line 160
            // line 161
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</dd>";
            }
            // line 162
            echo "\t\t\t";
            // line 163
            echo "
\t\t";
            // line 164
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 165
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 166
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 167
            echo "
\t\t";
            // line 168
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 169
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 170
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 172
            echo "
\t\t";
            // line 173
            // line 174
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 175
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 176
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 178
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t";
            // line 180
            echo "
\t\t";
            // line 181
            // line 182
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 183
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 184
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 186
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 187
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 193
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 194
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 195
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 199
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 201
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 210
            echo "\t\t";
            // line 211
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 215
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 216
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 217
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 218
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 219
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 221
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 222
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 223
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 224
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 227
                echo "\t\t\t";
            }
            // line 228
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 230
            // line 231
            echo "\t\t\t<h3 ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 233
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 234
            echo "\t\t";
            // line 235
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 236
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", array())) {
                    // line 237
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 238
                    // line 239
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        // line 240
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 241
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 242
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 246
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        // line 247
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 248
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 249
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 253
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        // line 254
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 255
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 256
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 260
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        // line 261
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 262
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 263
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 267
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        // line 268
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 269
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 270
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 274
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 275
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 276
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 277
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 281
                    echo "\t\t\t\t\t";
                    // line 282
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 284
                echo "\t\t";
            }
            // line 285
            echo "\t\t";
            // line 286
            echo "
\t\t\t";
            // line 287
            // line 288
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 289
            if (($context["S_IS_BOT"] ?? null)) {
                // line 290
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 292
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 293
                if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST", array());
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "
\t\t\t</p>
\t\t\t";
            // line 298
            // line 299
            echo "
\t\t\t";
            // line 300
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 301
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-question icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                // line 304
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 305
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 306
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 307
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 308
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 311
$context["postrow"], "S_POST_DELETED", array())) {
                // line 312
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 314
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 315
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 316
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 318
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 319
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 320
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 324
            echo "
\t\t\t";
            // line 325
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 326
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 327
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 330
            echo "
\t\t\t<div class=\"content\">";
            // line 331
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 333
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 334
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 336
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 339
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 343
            echo "
\t\t\t";
            // line 344
            // line 345
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 346
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 347
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 348
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 349
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 350
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 351
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 352
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 353
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 354
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 355
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 357
            echo "
\t\t\t";
            // line 358
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 359
            echo "\t\t\t";
            // line 360
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>";
            }
            // line 361
            echo "
\t\t\t";
            // line 362
            // line 363
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 367
            // line 368
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 369
            // line 370
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 372
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 374
            // line 375
            echo "\t\t</div>
\t\t";
            // line 376
            // line 377
            echo "
\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 382
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "
";
        // line 385
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 386
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 386)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 388
        echo "
";
        // line 389
        // line 390
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 391
        // line 392
        echo "
\t";
        // line 393
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 394
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 395
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 396
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 398
                echo "\t\t\t\t<span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 400
            echo "\t\t</a>
\t";
        }
        // line 402
        echo "\t";
        // line 403
        echo "
\t";
        // line 404
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 404)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 405
        echo "
\t";
        // line 406
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 407
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 408
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 408)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 409
            echo "\t\t</form>
\t";
        }
        // line 411
        echo "
\t";
        // line 412
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 413
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 414
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 415
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 421
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 422
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 423
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 429
        echo "
\t";
        // line 430
        // line 431
        echo "
\t";
        // line 432
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 433
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 434
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 435
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 436
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 436)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 437
                echo "\t\t\t";
            } else {
                // line 438
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 440
            echo "\t\t</div>
\t";
        }
        // line 442
        echo "</div>

";
        // line 444
        // line 445
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 445)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 446
        echo "
";
        // line 447
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 448
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 449
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 450
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 453
        echo "




</div>
</div>
</div>

";
        // line 462
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 462)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1559 => 462,  1548 => 453,  1542 => 450,  1536 => 449,  1533 => 448,  1531 => 447,  1528 => 446,  1516 => 445,  1515 => 444,  1511 => 442,  1507 => 440,  1501 => 438,  1498 => 437,  1485 => 436,  1483 => 435,  1479 => 434,  1476 => 433,  1474 => 432,  1471 => 431,  1470 => 430,  1467 => 429,  1461 => 425,  1446 => 423,  1442 => 422,  1438 => 421,  1429 => 415,  1425 => 414,  1420 => 413,  1418 => 412,  1415 => 411,  1411 => 409,  1399 => 408,  1394 => 407,  1392 => 406,  1389 => 405,  1377 => 404,  1374 => 403,  1372 => 402,  1368 => 400,  1362 => 398,  1356 => 396,  1354 => 395,  1343 => 394,  1341 => 393,  1338 => 392,  1337 => 391,  1334 => 390,  1333 => 389,  1330 => 388,  1316 => 386,  1314 => 385,  1311 => 384,  1306 => 382,  1299 => 377,  1298 => 376,  1295 => 375,  1294 => 374,  1289 => 372,  1283 => 370,  1282 => 369,  1279 => 368,  1278 => 367,  1272 => 363,  1271 => 362,  1268 => 361,  1259 => 360,  1257 => 359,  1251 => 358,  1248 => 357,  1244 => 355,  1235 => 354,  1231 => 353,  1228 => 352,  1226 => 351,  1223 => 350,  1214 => 349,  1210 => 348,  1207 => 347,  1204 => 346,  1197 => 345,  1196 => 344,  1193 => 343,  1189 => 341,  1180 => 339,  1176 => 338,  1171 => 336,  1167 => 334,  1165 => 333,  1160 => 331,  1157 => 330,  1149 => 327,  1146 => 326,  1144 => 325,  1141 => 324,  1134 => 320,  1130 => 319,  1125 => 318,  1119 => 316,  1117 => 315,  1113 => 314,  1107 => 312,  1105 => 311,  1099 => 308,  1095 => 307,  1091 => 306,  1087 => 305,  1083 => 304,  1076 => 301,  1074 => 300,  1071 => 299,  1070 => 298,  1060 => 296,  1048 => 293,  1041 => 292,  1029 => 290,  1027 => 289,  1024 => 288,  1023 => 287,  1020 => 286,  1018 => 285,  1015 => 284,  1011 => 282,  1009 => 281,  1002 => 277,  996 => 276,  993 => 275,  990 => 274,  983 => 270,  977 => 269,  974 => 268,  971 => 267,  964 => 263,  958 => 262,  955 => 261,  952 => 260,  945 => 256,  939 => 255,  936 => 254,  933 => 253,  926 => 249,  920 => 248,  917 => 247,  914 => 246,  907 => 242,  901 => 241,  898 => 240,  895 => 239,  894 => 238,  891 => 237,  888 => 236,  885 => 235,  883 => 234,  880 => 233,  853 => 231,  852 => 230,  842 => 228,  839 => 227,  833 => 224,  829 => 223,  824 => 222,  822 => 221,  817 => 219,  813 => 218,  808 => 217,  805 => 216,  803 => 215,  797 => 211,  795 => 210,  788 => 205,  782 => 204,  778 => 202,  776 => 201,  769 => 199,  751 => 198,  747 => 196,  744 => 195,  740 => 194,  737 => 193,  733 => 192,  725 => 187,  721 => 186,  715 => 184,  712 => 183,  709 => 182,  708 => 181,  705 => 180,  703 => 179,  697 => 178,  686 => 176,  683 => 175,  678 => 174,  677 => 173,  674 => 172,  666 => 170,  663 => 169,  661 => 168,  658 => 167,  648 => 166,  638 => 165,  621 => 164,  618 => 163,  616 => 162,  605 => 161,  604 => 160,  600 => 158,  598 => 157,  589 => 156,  588 => 155,  585 => 154,  583 => 153,  580 => 152,  567 => 151,  564 => 150,  563 => 149,  548 => 147,  540 => 146,  512 => 143,  502 => 141,  499 => 140,  497 => 139,  493 => 138,  490 => 137,  489 => 136,  486 => 135,  477 => 129,  473 => 128,  466 => 124,  463 => 123,  455 => 120,  451 => 118,  449 => 117,  446 => 116,  440 => 113,  436 => 111,  434 => 110,  425 => 107,  418 => 105,  415 => 104,  409 => 103,  408 => 102,  395 => 100,  372 => 99,  346 => 98,  334 => 97,  314 => 96,  312 => 95,  308 => 94,  294 => 91,  290 => 90,  280 => 84,  278 => 83,  275 => 82,  274 => 81,  270 => 79,  268 => 78,  264 => 76,  258 => 74,  255 => 73,  242 => 72,  240 => 71,  229 => 70,  226 => 69,  224 => 68,  221 => 67,  213 => 62,  208 => 60,  202 => 59,  197 => 57,  193 => 56,  189 => 55,  184 => 53,  181 => 52,  179 => 51,  176 => 50,  174 => 49,  161 => 48,  160 => 47,  157 => 46,  153 => 44,  147 => 42,  141 => 40,  139 => 39,  128 => 38,  126 => 37,  123 => 36,  122 => 35,  118 => 33,  112 => 29,  107 => 27,  102 => 26,  94 => 24,  92 => 23,  83 => 20,  81 => 19,  78 => 18,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  51 => 11,  48 => 10,  47 => 9,  39 => 8,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
