<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');

$lang = array_merge($lang, array(
	'PLURAL_RULE'						=> 1,

	'DIGESTS_ALL_FORUMS'				=> 'All',
	'DIGESTS_AM'						=> ' AM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_AUTHOR'					=> 'Author',
	'DIGESTS_BAD_SEND_HOUR'				=> 'User %1$s digest send hour is invalid. It is %2$d. The number should be >= 0 and < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Block images',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Prohibits all images from appearing in your digests, including smilies and images attached to posts or private messages. This can be useful for slower connections, if minimizing bandwidth is a concern or for active boards with lots of images. Text digests never show images.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (Board limit)',
	'DIGESTS_BY'						=> 'By',
	'DIGESTS_CLOSED_QUOTE'				=> '&rdquo;',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Maximum number of posts in the digest',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Enter a number greater than zero if you want to limit the number of posts in the digest.',
	'DIGESTS_DAILY'						=> 'Daily',
	'DIGESTS_DATE'						=> 'Date',
	'DIGESTS_DELIMITER'					=> ' :: ', // Used to help show the hierarchy of forum names from the index on down
	'DIGESTS_DISABLED_MESSAGE'			=> 'To enable fields, select Basics and select a digest type',
	'DIGESTS_DISCLAIMER'				=> 'This digest is being sent to registered members of <a href="%1$s">%2$s</a> forums. You can change or delete your subscription from the forum&rsquo;s <a href="%1$sucp.%3$s">User Control Panel</a>. If you have questions or feedback on your digests please send it to the <a href="mailto:%4$s?subject=Digests">%2$s webmaster</a>.',
	'DIGESTS_EXPLANATION'				=> 'Digests are email summaries of posts that are sent to you periodically. Digests can be sent daily, weekly or monthly at an hour of the day you select. You can specify those particular forums for which you want posts or by default you can elect to receive all posts for all forums for which you can read. You can cancel your digest subscription at any time by simply coming back to this page. Most users find digests to be very useful. We encourage you to give them a try!',
	'DIGESTS_FILTER_ERROR'				=> 'Digests mailer was called with an invalid user_digest_filter_type = %s',
	'DIGESTS_FILTER_FOES'				=> 'Remove posts from my foes',
	'DIGESTS_FILTER_TYPE'				=> 'Types of posts in digest',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML will provide formatting, BBCode and signatures (if allowed). Stylesheets are applied if your email program allows.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML, posts laid out inside tables',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Similar to HTML except topic posts are listed inside of tables',
	'DIGESTS_FORMAT_PLAIN'				=> 'Plain HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Plain HTML does not apply forum styles or colors',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Plain HTML, posts laid out inside tables',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Similar to Plain HTML except topic posts are listed inside of tables',
	'DIGESTS_FORMAT_STYLING'			=> 'Digest styling',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Please note that the styling actually rendered depends on the capabilities of your email program. Move your cursor over the styling type to learn more about each style.',
	'DIGESTS_FORMAT_TEXT'				=> 'Text',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'No HTML will appear in the digest. Only text will be shown.',
	'DIGESTS_FORUMS_WANTED'				=> 'Forums wanted',
	'DIGESTS_FREQUENCY'					=> 'Type of digest wanted',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Weekly digests are sent on %s. Monthly digests are sent on the first of the month. Coordinated Universal Time (UTC) is used for determining the day of the week.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Digest type',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' h',	// see: http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM are used instead if specified in user_dateformat
	'DIGESTS_INTRODUCTION' 				=> 'Here is the latest digest of post from %s forums. Do <em>not</em> reply to this email to reply to topics, posts or private messages. But please <em>do</em> visit the forum and join the discussion! (If the format of the digest looks off, make sure to download all remote content.)',
	'DIGESTS_JUMP_TO_MSG'				=> 'Msg ID',
	'DIGESTS_JUMP_TO_POST'				=> 'Post ID',
	'DIGESTS_LASTVISIT_RESET'			=> 'Reset my last visit date when I am sent a digest',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'If enabled, posts on the forum should appear as read if they were posted before the date and time your digest was created. Selecting this option effectively tells the forum that reading your digest substitutes for reading posts on the forum.',
	'DIGESTS_LINK'						=> 'Link',
	'DIGESTS_MARK_READ'					=> 'Mark as read when they appear in the digest',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximum words to display in a post',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'To ensure consistent rendering, if a post must be truncated the HTML will be removed from the post. Leave blank or set to 0 to allow the full post text to appear. If the &ldquo;Show no post text at all&rdquo; option is checked, this field is ignored and no post text will appear in the digest.',
	'DIGESTS_MAX_SIZE'					=> 'Maximum words to display in a post',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Minimum words required in post for the post to appear in a digest',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'If you leave this blank or set to 0, posts with text of any number of words are included.',
	'DIGESTS_MONTHLY'					=> 'Monthly',
	'DIGESTS_NEW'						=> 'New',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Show new posts only',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'This will filter out any posts posted prior to the date and time you last visited this board. If you visit the board frequently and read most of the posts, this will keep redundant posts from appearing in your digest. It may also mean that you will miss some posts in forums that you did not read.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'There are no new bookmarked posts.',
	'DIGESTS_NO_CONSTRAINT'				=> 'No constraint',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'At least one forum must be checked',
	'DIGESTS_NO_LIMIT'					=> 'No limit',
	'DIGESTS_NO_POSTS'					=> 'There are no new posts.',
	'DIGESTS_NO_POST_TEXT'				=> 'Show no post text at all',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'You have no new or unread private messages.',
	'DIGESTS_NO_TIMEZONE'				=> 'You must <a href="%s">specify your timezone</a> in your profile before you can run digests.',
	'DIGESTS_NONE'						=> 'None (unsubscribe)',
	'DIGESTS_ON'						=> 'on',
	'DIGESTS_OPEN_QUOTE'				=> '&ldquo;',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '"',
	'DIGESTS_PM'						=> ' PM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_PM_SUBJECT'				=> 'Private message subject',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br>(Click on the image to see it full size.)',
	'DIGESTS_POST_TEXT'					=> 'Post Text', 
	'DIGESTS_POST_TIME'					=> 'Post Time', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br>____________________<br>', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'posted to the topic',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'All posts',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'First posts of topics only',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Digests extension for phpBB created by',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Add my unread private messages',
	'DIGESTS_PUBLISH_DATE'				=> 'The digest was published specifically for %1$s on %2$s',
	'DIGESTS_REGISTER'					=> 'Receive digests',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'The board&rsquo;s defaults will be used. You can adjust digest settings or unsubscribe after completing registration.',
	'DIGESTS_REMOVE_YOURS'				=> 'Remove my posts',
	'DIGESTS_REPLY'						=> 'Reply',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Dear',
	'DIGESTS_SELECT_FORUMS'				=> 'Include posts for these forums',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Please note the categories and forums shown are for those you are allowed to read only. Forum selection is disabled when you select bookmarked topics only. Password protected forums are not shown and cannot be selected. If All is unchecked and bookmarks are not selected, then you must select at least one forum to submit successfully.<br><br>Bolded forum names (if any) are forums that the administrator requires to be presented in any digest (other than for bookmarked topics only). You cannot unselect these forums. Forum names that have strikethrough text are disallowed by the administrator for presentation in any digest (other than for bookmarked topics only) and are thus unselected.',
	'DIGESTS_SEND_HOUR' 				=> 'Hour sent',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'The digest arrival time is the time based on the timezone you set in your board preferences.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Send digest if no new messages:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Send a digest if there are no new posts',
	'DIGESTS_SENDER'	 				=> 'Sender',
	'DIGESTS_SENT_TO'					=> 'sent to',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'sent you a private message with the subject',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Show attachments',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'If enabled, attachment images will appear in your digest at the bottom of the post or private message. Non-image attachments appear as links (HTML digests only). The BBCode [img] tag is not affected by this setting.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Show new posts only',
	'DIGESTS_SHOW_PMS' 					=> 'Show my private messages',
	'DIGESTS_SIZE_ERROR'				=> sprintf("This field is a required field. You must enter a positive whole number, less than or equal to the maximum allowed by the Forum Administrator. The maximum allowed is %u. If this value is zero, there is no limit.", $config['phpbbservices_digests_max_items']),
	'DIGESTS_SIZE_ERROR_MIN'			=> 'You must enter a whole number or leave the field blank. If this value is zero, there is no limit.',
	'DIGESTS_SKIP'						=> 'Skip to content',
	'DIGESTS_SORT_BY'					=> 'Post sort order',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'All digests are sorted by category and then by forum, as they are shown on the main index. Sort options apply to how posts are ordered within forums and topics. Traditional Order is the default order used since phpBB 2, which is last topic post time (descending) and then by post time within the topic.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Traditional Order',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Traditional Order, Latest Posts First',
	'DIGESTS_SORT_POST_DATE'			=> 'From oldest to newest',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'From newest to oldest',
	'DIGESTS_SORT_USER_ORDER'			=> 'Use my board display preferences',
	'DIGESTS_SUBJECT_TITLE'				=> '%1$s %2$s Digest',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Notice: content removed for security purposes. Click on the post or topic link to see the complete post content.</strong>',
	'DIGESTS_TITLE'						=> 'Digests',
	'DIGESTS_TRANSLATED_BY'				=> 'translated by',
	'DIGESTS_TRANSLATOR_NAME'			=> '',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> '',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Table of contents',
	'DIGESTS_TOC_EXPLAIN'				=> 'If the board is active, you might want to include a table of contents in your digest. In HTML digests, the table of contents includes links that let you jump to a particular post or private message in the digest.',
	'DIGESTS_UNKNOWN'					=> 'Unknown',
	'DIGESTS_UNREAD'					=> 'Unread',
	'DIGESTS_UPDATED'					=> 'Your digest settings were saved',
	'DIGESTS_USE_BOOKMARKS'				=> 'Bookmarked topics only',
	'DIGESTS_WEEKDAY' 					=> 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
	'DIGESTS_WEEKLY'					=> 'Weekly',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s has private messages',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> '%s&rsquo;s digest options:',
	
	'UCP_DIGESTS'								=> 'Digests',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Additional criteria',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Additional criteria options',
	'UCP_DIGESTS_BASICS'						=> 'Basics',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Basics options',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Forums selection',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Forums selection options',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Digests was called with an invalid mode of %s',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Post filters',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Post filters options',
));
