<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2015 Mark D. Hamill (mark@phpbbservices.com)
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

$lang = array_merge($lang, array(
	'DIGESTS_ALL_FORUMS'				=> 'All',
	'DIGESTS_AUTHOR'					=> 'Author',
	'DIGESTS_BAD_SEND_HOUR'				=> 'User %s digest send hour is invalid. It is %s. The number should be >= 0 and < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Block images',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Prohibits all images from appearing in your digests, including images attached to posts or private messages. This can be useful for slower connections or for active boards with lots of images. Text digests never show non-text content.',
	'DIGESTS_BOARD_LIMIT'				=> '%s (Board limit)',
	'DIGESTS_BY'						=> 'By',
	'DIGESTS_CLOSED_QUOTE'				=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Maximum number of posts in the digest',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Enter a number greater than zero if you want to limit the number of posts in the digest.',
	'DIGESTS_CREATED_FOR'				=> 'created for',
	'DIGESTS_DAILY'						=> 'Daily',
	'DIGESTS_DATE'						=> 'Date',
	'DIGESTS_DISABLED_MESSAGE'			=> 'To enable fields, select Basics and select a digest type',
	'DIGESTS_DISCLAIMER'				=> 'This digest is being sent to registered members of <a href="%s">%s</a> forums. You can change or delete your subscription from the <a href="%sucp.%s">User Control Panel</a>. If you have questions or feedback on the format of this digest please send it to the <a href="mailto:%s">%s Webmaster</a>.',
	'DIGESTS_EXCEPTION'					=> "Uncaught exception while running mail_digests.$phpEx: ",
	'DIGESTS_EXPLANATION'				=> 'Digests are email summaries of posts that are sent to you periodically. Digests can be sent daily, weekly or monthly at an hour of the day you select. You can specify those particular forums for which you want posts (select Forums Selection), or by default you can elect to receive all posts for all forums for which you are allowed access. You can, of course, cancel your digest subscription at any time by simply coming back to this page. Most users find digests to be very useful. We encourage you to give it a try!',
	'DIGESTS_FILTER_ERROR'				=> "mail_digests.$phpEx was called with an invalid user_digest_filter_type = %s",
	'DIGESTS_FILTER_FOES'				=> 'Remove posts from my foes',
	'DIGESTS_FILTER_TYPE'				=> 'Types of posts in digest',
	'DIGESTS_FORMAT_ERROR'				=> "mail_digests.$phpEx was called with an invalid user_digest_format of %s",
	'DIGESTS_FORMAT_FOOTER' 			=> 'Digest Format:',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML will provide formatting, BBCode and signatures (if allowed). Stylesheets are applied if your email program allows.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML, posts laid out inside tables',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Similar to HTML except topic posts are listed inside of tables',
	'DIGESTS_FORMAT_PLAIN'				=> 'Plain HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Plain HTML does not apply styles or colors',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Plain HTML, posts laid out inside tables',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Similar to Plain HTML except topic posts are listed inside of tables',
	'DIGESTS_FORMAT_STYLING'			=> 'Digest styling',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Please note that the styling actually rendered depends on the capabilities of your email program. Move your cursor over the styling type to learn more about each style.',
	'DIGESTS_FORMAT_TEXT'				=> 'Text',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'No HTML will appear in the digest. Only text will be shown.',
	'DIGESTS_FREQUENCY'					=> 'Type of digest wanted',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> "Weekly digests are sent on %s. Monthly digests are sent on the first of the month. Universal Time is used for determining the day of the week.",
	'DIGESTS_FREQUENCY_SHORT'			=> 'Digest type',
	'DIGESTS_INSTALL_MOD_CONFIRM'		=> 'I wish to install phpBB Digests',
	'DIGESTS_INTRODUCTION' 				=> 'Here is the latest digest of messages posted on %s forums. Please come and join the discussion!',
	'DIGESTS_JUMP_TO'					=> 'Jump to', 
	'DIGESTS_LASTVISIT_RESET'			=> 'Reset my last visit date when I am sent a digest',
	'DIGESTS_LINK'						=> 'Link',
	'DIGESTS_MAIL_FREQUENCY' 			=> 'Digest Frequency',
	'DIGESTS_MARK_READ'					=> 'Mark as read when they appear in the digest',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximum words to display in a post',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Notice: To ensure consistent rendering, if a post must be truncated, the HTML will be removed from the post. Leave blank to allow the full post text to appear. If the "Show no post text at all" option is checked, this field is ignored.',
	'DIGESTS_MAX_EXEC_TIME_EXCEEDED'	=> "Warning: some digest subscribers did not receive digests because the maximum time for a PHP process was exceeded. This problem normally occurs because PHP Safe Mode is enabled. If you cannot disable PHP Safe Mode or change the time limit in the php.ini, the problem will probably recur. This problem occurred at %s GMT.",
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Minimum words required in post for the post to appear in a digest',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'If you leave this blank or set to 0, posts with text of any number of words are included',
	'DIGESTS_MONTHLY'					=> 'Monthly',
	'DIGESTS_NEW'						=> 'New',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Show new posts only',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'This will filter out any posts posted prior to the date and time you last visited this board. If you visit the board frequently and read most of the posts, this will keep redundant posts from appearing in your digest. It may also mean that you will miss some posts in forums that you did not read.',
	'DIGESTS_NO_CONSTRAINT'				=> 'No constraint',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'At least one forum must be checked',
	'DIGESTS_NO_LIMIT'					=> 'No limit',
	'DIGESTS_NO_POSTS'					=> 'There are no new posts.',
	'DIGESTS_NO_POST_TEXT'				=> 'Show no post text at all',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'You have no new or unread private messages.',
	'DIGESTS_NONE'						=> 'None (unsubscribe)',
	'DIGESTS_ON'						=> 'on',
	'DIGESTS_OPEN_QUOTE'				=> '"',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br />(Click on the image to see it full size.)',
	'DIGESTS_POST_TEXT'					=> 'Post Text', 
	'DIGESTS_POST_TIME'					=> 'Post Time', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br />____________________<br />', // Place here whatever code (make sure it is valid XHTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'posted to the topic',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'All posts',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'First posts of topics only',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Add my unread private messages',
	'DIGESTS_PUBLISH_DATE'				=> 'The digest was published specifically for %s on %s',
	'DIGESTS_REGISTER'					=> 'Receive digests',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'The board&apos;s defaults will be used. You can adjust digest settings or unsubscribe after completing registration.',
	'DIGESTS_REMOVE_YOURS'				=> 'Remove my posts',
	'DIGESTS_REPLY'						=> 'Reply',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Dear',
	'DIGESTS_SELECT_FORUMS'				=> 'Include posts for these forums',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Please note the categories and forums shown are for those you are allowed to read only. Forum selection is disabled when you select bookmarked topics only. Password protected forums are not shown and cannot be selected. If All is unchecked and bookmarks are not selected, then you must select at least one forum to submit successfully.<br /><br />Bolded forum names, if any, are forums that the administrator requires to be presented in any digest (other than for bookmarked topics only). You cannot unselect these forums. Forum names that have strikethrough text are disallowed by the administrator for presentation in any digest (other than for bookmarked topics only) and are thus unselected.',
	'DIGESTS_SEND_HOUR' 				=> 'Hour sent',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'The digest arrival time is the time based on the time zone and daylight savings/summer time you set in your board preferences.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Send digest if no new messages:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Send a digest if there are no new posts',
	'DIGESTS_SENDER'	 				=> 'Sender',
	'DIGESTS_SENT_TO'					=> 'sent to',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'sent you a private message with the subject',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Show attachments',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'If enabled, attachment images will appear in your digest at the bottom of the post or private message. Non-image attachments appear as links (HTML digests only). The BBCode [img] tag is not affected by this setting.',
	'DIGESTS_SHOW_MY_MESSAGES' 			=> 'Show my posts in the digest:',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Show new posts only',
	'DIGESTS_SHOW_PMS' 					=> 'Show my private messages',
	'DIGESTS_SIZE_ERROR'				=> "This field is a required field. You must enter a positive whole number, less than or equal to the maximum allowed by the Forum Administrator. The maximum allowed is %s. If this value is zero, there is no limit.",
	'DIGESTS_SIZE_ERROR_MIN'			=> 'You must enter a whole number or leave the field blank. If this value is zero, there is no limit.',
	'DIGESTS_SKIP'						=> 'Skip to content',
	'DIGESTS_SORT_BY'					=> 'Post sort order',
	'DIGESTS_SORT_BY_ERROR'				=> "mail_digests.$phpEx was called with an invalid user_digest_sortby = %s",
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'All digests are sorted by category and then by forum, like they are shown on the main index. Sort options apply to how posts are arranged within forums and topics. Traditional Order is the default order used by phpBB 2, which is last topic post time (descending) then by post time within the topic.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Traditional Order',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Traditional Order, Latest Posts First',
	'DIGESTS_SORT_POST_DATE'			=> 'From oldest to newest',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'From newest to oldest',
	'DIGESTS_SORT_USER_ORDER'			=> 'Use my board display preferences',
	'DIGESTS_SQL_PMS'					=> 'SQL used for private messages for %s: %s',
	'DIGESTS_SQL_PMS_NONE'				=> 'No SQL issued for private_messages for %s because the user opted not to show private messages in the digest.',
	'DIGESTS_SQL_POSTS_USERS'			=> 'SQL used for posts for %s: %s',
	'DIGESTS_SQL_USERS'					=> 'SQL used to retrieve users getting digests: %s',
	'DIGESTS_SUBJECT_LABEL'				=> 'Subject',
	'DIGESTS_SUBJECT_TITLE'				=> '%s %s Digest',
	'DIGESTS_SUMMARY'					=> 'Digest Summary',
	'DIGESTS_TERMINATED_ABNORMALLY'		=> "mail_digests.$phpEx terminated abnormally",
	'DIGESTS_TIME_ERROR'				=> "mail_digests.$phpEx calculated a bad digest send hour of %s",
//	'DIGESTS_TITLE'						=> 'Digests',
	'DIGESTS_TOC'						=> 'Table of contents',
	'DIGESTS_TOC_EXPLAIN'				=> 'If the board is active, you might want to include a table of contents in your digest. In HTML digests, the table of contents includes links that let you jump to a particular post or private message in the digest.',
	'DIGESTS_TOTAL_POSTS'				=> 'Total posts in this digest:',
	'DIGESTS_TOTAL_UNREAD_PRIVATE_MESSAGES'	=> 'Total unread private messages:',
	'DIGESTS_UNKNOWN'					=> 'Unknown',
	'DIGESTS_UNREAD'					=> 'Unread',
	'DIGESTS_UPDATED'					=> 'Your digest settings were saved',
	'DIGESTS_USE_BOOKMARKS'				=> 'Bookmarked topics only',
	'DIGESTS_WEEKDAY' => array(
		0	=> 'Sunday',
		1 	=> 'Monday',
		2	=> 'Tuesday',
		3	=> 'Wednesday',
		4	=> 'Thursday',
		5	=> 'Friday',
		6	=> 'Saturday'),
	'DIGESTS_WEEKLY'					=> 'Weekly',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s has private messages',
	'DIGESTS_YOUR_DIGESTS_OPTIONS' 		=> '%s\'s digest options:',
	'UCP_DIGESTS'						=> 'Digests',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'	=> 'Additional Criteria',
	'UCP_DIGESTS_BASICS'				=> 'Basics',
	'UCP_DIGESTS_FORUMS_SELECTION'		=> 'Forums Selection',
	'UCP_DIGESTS_MODE_ERROR'			=> 'Digests was called with an invalid mode of %s',
	'UCP_DIGESTS_POST_FILTERS'			=> 'Post Filters',
				
));
