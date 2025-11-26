=== Clean External Links ===
Contributors: bonnyelangbam
Donate link: https://bonnyelangbam.com/donate
Tags: external links, nofollow, target blank, seo, link management
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.0
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically adds target="_blank" and rel="nofollow noreferrer" to all external links with domain whitelisting support.

== Description ==

Clean External Links is a lightweight WordPress plugin that automatically enhances your external links with target="_blank" (opens in new tab) and rel="nofollow noreferrer noopener" attributes. This helps improve user experience by keeping visitors on your site while browsing external resources.

= Key Features =

* Automatically detects and modifies external links
* Adds target="_blank" to open links in new tabs
* Adds rel="nofollow noreferrer noopener" for SEO and security
* Domain whitelist to exclude trusted sites
* JavaScript-based implementation (works with all caching plugins)
* Zero performance impact on page load
* No database modifications
* Compatible with page builders and dynamic content

= How It Works =

The plugin uses client-side JavaScript to scan all links on your pages. When it finds a link pointing to an external domain (not matching your site's hostname), it automatically adds the appropriate attributes. Whitelisted domains can be excluded from this behavior through the settings page.

= Perfect For =

* Bloggers who frequently link to external resources
* Content-heavy websites with multiple outbound links
* Sites wanting to improve SEO with nofollow on external links
* Publishers who want visitors to stay on their site longer

= Technical Implementation =

Unlike PHP-based solutions that modify content in the database, Clean External Links uses DOM manipulation in the browser. This means:

* Works perfectly with caching plugins
* No risk of breaking HTML or page builder content
* Lightweight and efficient
* Real-time link processing

== Installation ==

1. Upload the `clean-external-links` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings > Clean External Links to configure whitelist domains (optional)

== Frequently Asked Questions ==

= Does this plugin modify my post content in the database? =

No. The plugin uses JavaScript to modify links in real-time when pages load. Your post content remains untouched.

= What if I want some external links to NOT have nofollow? =

Simply add those domains to the whitelist in Settings > Clean External Links. Enter one domain per line.

= Does this work with page builders like Elementor, Divi, or WPBakery? =

Yes! Since it works via JavaScript after the page loads, it's compatible with all page builders and dynamic content.

= Will this slow down my website? =

No. The JavaScript file is minimal and runs after the DOM is loaded, causing zero noticeable performance impact.

= Can I customize which attributes are added? =

Currently the plugin adds target="_blank" and rel="nofollow noreferrer noopener". Future versions may include more customization options.

= Does it work with caching plugins? =

Yes, perfectly! Since it's client-side JavaScript, it works with all caching solutions including WP Rocket, W3 Total Cache, and WP Super Cache.

= What about affiliate links? =

External affiliate links will get the nofollow attribute unless you add the affiliate domain to your whitelist.

== Screenshots ==

1. Settings page showing domain whitelist configuration
2. Example of external links automatically modified with target and rel attributes

== Changelog ==

= 1.0 =
* Initial release
* Automatic target="_blank" for external links
* Automatic rel="nofollow noreferrer noopener" for external links
* Domain whitelist functionality
* Settings page in WordPress admin

== Upgrade Notice ==

= 1.0 =
Initial release of Clean External Links. Automatically manage external link attributes with zero configuration needed.

== Additional Information ==

For support, feature requests, or bug reports, please visit [bonnyelangbam.com/clean-external-links](https://bonnyelangbam.com/clean-external-links)

**Developer:** Bonny Elangbam
**Author Profile:** [profile.wordpress.org/bonnyelangbam](https://profile.wordpress.org/bonnyelangbam)
