=== Hook Customizer for WooCommerce ===
Contributors: jrobie23
Tags: Hooks, WooCommerce, Woo, Woo Commerce, Actions, customize woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 5.2
Tested up to: 6.0
Stable tag: 2.0.3
Requires PHP: 7.0


A WYSIWYG solution for adding content to the majority of all WooCommerce Action Hooks.

== Description ==

HookyWoo is a text editing solution for adding content to the majority of all WooCommerce Action Hooks.

1. Use the image to find the location of the hook in which you would like to enter some text.
2. Enter your text or HTML in the text editor section
3. Save your changes.
4. Check your work on the public facing side of the site.

Stylesheet is included for the basic layout of the plugin.
All hook divs have their own class so you can update the CSS however you need to.

Use your browser's inspector to locate the classes for the specific div in which that hook is contained and add your own styling to the content.
The "after cart" and "before product tabs" divs are both set to clear:all; for basic layout reasons. Those, and all others, can be over ridden in your own theme's stylesheet.

Includes "Shop/Archive" , "Single Product", "Cart" and "Checkout" Hooks.

I explained a bit more <a href="https://madcowweb.com/hooky-woo-woocommerce-hooks-customizer/" target="_blank">here</a>.

<a href="https://madcowweb.com/contact-us/" target="_blank">Contact Us</a>
== Installation ==

Activate the plugin through the 'Plugins' menu in WordPress.
Settings page is found under "WooCommerce - HookyWoo Settings".

== Frequently Asked Questions ==

= What about styled text and images? =

You can put any sort of HTML you like in that text area.
For example:

`<p class="my-cool-class">My Awesome Paragraph Styled however I want</p>`
`<img src="/wp-content/uploads/2013/06/cd_3_flat.jpg">`
`<div class="my-cool-div">My Awesome Stuff inside my div</div>`

= Will I lose my changes if I update =

No. The data is stored safely in the database.

== Changelog ==
= 2.0.2 =
* Updated readme/instructions
= 2.0.1 =
* Re-added images.
= 2.0.0 =
* Added Cart and Checkout page functionality
* Updated readme file with more instructions
* Removed images from interface
* Added new elements for cart and checkout - list items - so they display correctly
= 1.1.0 =
* Added tabbed function to better separate page sections
* Updated readme file with more instructions
= 1.3.0 =
* Included Cart and Checkout pages
== Upgrade Notice ==
1.3.0
Including cart and checkout pages
= 1.4.5 =
fix php errors for empty indexes on empty fields