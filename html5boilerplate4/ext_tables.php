<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * Include TypoScript "HTML5 Boilerplate (config)"
 * 
 * Full blown example config of a TYPO3 website with html5boilerplate
 * Includes RealUrl, Indexed Search, english and UTF-8 as standard,
 * html5-doctype, conditional classes for <html>-tag, multidomain setup,
 * javascript and css optimization and disabled prefix comments 
 * 
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate4_config/', 'HTML5 Boilerplate v4 (config)');

/**
 * Include TypoScript "HTML5 Boilerplate (includes)"
 * 
 * Adds html5boilerplate libraries / files to main PAGE object (called 'page')
 * Includes Modernizr (http://www.modernizr.com/), JQuery (http://jquery.com/)
 * and html5boilerplate javascript and css file
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/html5boilerplate4_includes/', 'HTML5 Boilerplate v4 (includes)');

/**
 * Include TypoScript "Mobile HTML5 Boilerplate (config)"
 * 
 * Full blown example config of a TYPO3 website with html5boilerplate mobile version
 * Includes RealUrl, english and UTF-8 as standard,
 * html5-doctype, conditional classes for <html>-tag, multidomain setup,
 * javascript and css optimization and disabled prefix comments
 * 
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/mobile_html5boilerplate4_config/', 'Mobile HTML5 Boilerplate v4 (config)');

/**
 * Include TypoScript "Mobile HTML5 Boilerplate (includes)"
 * 
 * Adds html5boilerplate libraries / files to main PAGE object (called 'page')
 * Includes Modernizr (http://www.modernizr.com/), JQuery (http://jquery.com/)
 * and html5boilerplate javascript and css file
 */
t3lib_extMgm::addStaticFile($_EXTKEY,'static/mobile_html5boilerplate4_includes/', 'Mobile HTML5 Boilerplate v4 (includes)');
?>