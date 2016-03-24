=== Plugin Name ===
Contributors: shuvra124
Donate link: #
Tags: widget, social
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: "trunk"
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will let you add custom social links. Simple but flexible.

== Description ==

This is simple plugin but very essential. We have to put social icons e.g facebook, twitter, linkedin as well as links into websites. Most of the time we do it in hard code. This plugin allows you to manage social icons via wordpress widget. You will be able to select image, title and link for each icons!

Each widget generates this code automatically:<br />
< a href="<strong>Your Given Link</strong>" title="<strong>Your Given Title</strong>" >< img src="<strong>Your Selected Image</strong>" alt="<strong>Your Given Title</strong>" /></ a>

<strong>Starting Tag</strong> (optional)<br />
<strong>Social Icon Name</strong> will use as <strong>"a"</strong> tag title and <strong>"img"</strong> tag alt text. (optional)<br />
<strong>Social Link</strong> give your page/account link here. (required)<br />
<strong>Social Icon</strong> upload social icon from here. (required)<br />
<strong>Ending Tag</strong> (optional)<br />

<strong>Add separate widget for each social link.</strong>

i.e: <strong>Starting Tag</strong>< a href="<strong>Social Link</strong>" title="<strong>Social Icon Name</strong>" >< img src="<strong>Social Icon</strong>" alt="<strong>Social Icon Name</strong>" /></ a><strong>Ending Tag</strong>

	i.e: <ul>
			<li><a href="Social Link" title="Social Icon Name"><img src="Social Icon" alt="Social Icon Name" /></a></li> <===First Widget End
			<li><a href="Social Link" title="Social Icon Name"><img src="Social Icon" alt="Social Icon Name" /></a></li> <===Second Widget End
			<li><a href="Social Link" title="Social Icon Name"><img src="Social Icon" alt="Social Icon Name" /></a></li> <===Third Widget End
	    </ul>

Have fun!

== Installation ==

1. Unzip the archive on your computer
2. Upload `custom-social-widget` directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to Widgets section, you can find <strong>"Custom Social Icon"</strong> widget there.

<strong>Add separate widget for each social link.</strong>

== Frequently Asked Questions ==
<strong>Q. Links not working or showing 404 error!</strong><br />
A. Add <strong>"http://"</strong> before your social link.<br /><br />
<strong>Q. Can i add more social icon into same widget?!</strong><br />
A. No, you need separate widget for each social link.

== Screenshots ==
1. Now you can understand everything easily :)

== Changelog ==

= 1.3 =
Compatibility Updated for 4.3
= 1.2 =
Compatibility Updated for 3.7.1
= 1.1 =
<ul>
<li>Fix multiple showing into frontend.</li>
<li>Update social icon adding system.</li>
</ul>