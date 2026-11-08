/**
 *
 * External Links Open in New Window extension for the phpBB Forum Software package
 *
 * @copyright (c) 2014 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

(function($) { // Avoid conflicts with other libraries

	'use strict';

	function siteHostname(hostname)
	{
		hostname = hostname.toLowerCase().replace(/\.$/, '');
		return window.tldts.getDomain(hostname, { allowPrivateDomains: true }) || hostname;
	}

	var source = siteHostname(location.hostname);
	var externalLinks = 'a[href^="http://"], a[href^="https://"], a[href^="ftp://"]';

	// Links that other scripts handle (lightboxes, share buttons and the like)
	var ignoreClasses = [
		'posterip',
		'share-button',
		'fancybox',
		'lightbox',
		'colorbox',
		'global-button'
	];

	/**
	 * Whether a link leads to another site than the board's own.
	 */
	function isExternal(link)
	{
		return link.hostname && siteHostname(link.hostname) !== source;
	}

	/**
	 * Whether a link is driven by a script of its own and must be left alone.
	 */
	function isIgnored(link)
	{
		if (link.hasAttribute('onclick'))
		{
			return true;
		}

		for (var i = 0; i < ignoreClasses.length; i++)
		{
			if ($(link).hasClass(ignoreClasses[i]))
			{
				return true;
			}
		}

		return false;
	}

	/**
	 * DOM READY
	 */
	$(function() {

		// Mark external links in posts and signatures
		$(externalLinks).each(function() {
			if ($(this).closest('.content, .signature').length && isExternal(this))
			{
				$(this).attr('title', elonw_title).addClass('elonw');
			}
		});

		// Open every external link in a new window
		$(document).on('click', externalLinks, function() {
			if (isExternal(this) && !isIgnored(this))
			{
				window.open($(this).attr('href'), '_blank', 'noopener,noreferrer');
				return false;
			}
		});

	});

})(jQuery); // Avoid conflicts with other libraries
