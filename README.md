=== POP! Call to Action Plugin for Wordpress ===

Contributors: POP.co
License: MIT
License URI: https://opensource.org/licenses/MIT
Tags: Call to action, Calls to Action, CTA, CTA button, inbound marketing, call outs, ad management, pop cta, pop call to action
Requires at least: 3.8
Tested up to: 4.2
Stable Tag: 1.0

A plugin to create reusable custom call to action sections to your pages and posts by adding a simple shortcode. Perfect for helping boost conversions.
You can create and manage your own custom CTA templates.


== Description ==

Turn your blog or website's visitors into active leads or email list subscribers in no time!

POP! Call to Action Plugin is a drop dead easy way to add custom, reusable templates to your existing Wordpress pages and posts.

You simply create any number of HTML templates and include them in your pages or posts by using our custom bound shortcode, `[pop-cta]`.

The intended usage of this plugin is allow for code reuse to match your brand messaging. If you need to update your messaging, you only
need to update individual templates and not have to bother with updating each and every one of your pages or posts.

Currently there is no support for A/B testing. Only static HTML files are allowed for templates, but you can easily drop JavaScript embed 
codes in them if you wish to utilize third party libraries.

== Usage ==

Usage is easy. To create new CTA templates, simply add new HTML files to the plugin directory `wp-content/plugins/wp-pop-cta/templates/`. 

Keep your template names lowercase and only use alphanumerics, dashes, and underscores. Here's some valid template names and their accompany shortcodes:

* `default.html` -> `[pop-cta]` or `[pop-cta name="default"]`
* `upsell.html` -> `[pop-cta name="upsell"]`
* `download-cta.html` -> `[pop-cta name="download-cta"]

== About POP! ==

POP helps you [get your idea, portfolio, startup, or business online fast](https://pop.co/?utm_source=wp-pop-cta&utm_medium=wp-plugin&utm_campaign=wp-plugin)! Get a domain name, custom email address, and landing page. No technical skills required!

We are the easiest way to build your online presence. You can start from scratch and be up and running in a minute.

Go ahead, [get your domain name, custom email address, and landing page now](https://pop.co/?utm_source=wp-pop-cta&utm_medium=wp-plugin&utm_campaign=wp-plugin).

[@POPdotco on Twitter](https://twitter.com/popdotco)
[+PopCo on Google Plus](https://plus.google.com/+PopCo/posts)
[POPdotco on Facebook](https://www.facebook.com/popdotco)

== Installation ==

1. Upload the `wp-pop-cta` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

==== Can I use A/B testing? ====
Currently, templates do not support A/B testing out of the box. You may be able to come up with your own JavaScript embedded solution within your
templates for Optimizely or an equivalent, however.

==== Can I use dynamic templates with PHP? ====
Not at the moment. If you'd like to customize the plugin, you can easily change the static template include from HTML to PHP. 

== Screenshots ==

1. Convert more web traffic with calls to action to drive the visitor into a landing page or capture their email address right in the call to action
2. Create Popup Calls to action and capture more emails
3. Easy to use templates
4. Visual fronted editing to see live changes on the fly
5. Choose from a ton of pre-made templates, use your existing design, or design your own call to action template. The system is a framework that allows for as many templates as you want.
6. Track conversion rates and continuously improve your marketing
7. Easy placement within pages/posts/custom post types
8. Global placements via your sites sidebar

== Changelog ==

==== 1.0.0 ====

Initial release.
