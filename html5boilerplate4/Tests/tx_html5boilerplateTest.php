<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 html5boilerplate for TYPO3-Team <http://forge.typo3.org/projects/extension-html5boilerplate>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for class tx_html5boilerplate
 *
 * @package TYPO3
 * @subpackage EXT:html5boilerplate
 */
class tx_html5boilerplateTest extends tx_phpunit_testcase {

	/**
	 * Enable backup of global and system variables
	 *
	 * @var boolean
	 */
	protected $backupGlobals = TRUE;

	/**
	 * Instance of tx_html5boilerplate which
	 * will be tested in this unit test
	 * 
	 * @var tx_html5boilerplate
	 */
	protected $instance = null;
	
	/**
	 * Instance of t3lib_PageRenderer
	 * 
	 * @var t3lib_PageRenderer
	 */
	protected $pageRenderer = null;
	
	/**
	 * Default values
	 * 
	 * @var array
	 */
	protected $incommingParams = array();
	
	public function setUp() {
		$this->instance = new tx_html5boilerplate();
		$this->pageRenderer = new t3lib_PageRenderer();
		$this->incommingParams = array(
			'htmlTag' => '<html lang="en">',
			'metaCharsetTag' => '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">',
		);
	}
	
	public function tearDown() {
		unset($this->instance);
	}

	/**
	 * Data provider for underscoredToLowerCamelCase
	 *
	 * @return array expected, input string
	 */
	/*
	public function underscoredToLowerCamelCaseDataProvider() {
		return array(
			'single word' => array('minimalvalue', 'minimalvalue'),
			'multiple words' => array('minimalValue', 'minimal_value'),
		);
	}
	*/

	/**
	 * @test
	 *     bla dataProvider underscoredToLowerCamelCaseDataProvider
	/
	public function underscoredToLowerCamelCase($expected, $inputString) {
		$this->assertEquals($expected, t3lib_div::underscoredToLowerCamelCase($inputString));
	}
	*/
	
	/**
	 * @test
	 */
	public function setCustomHtmlTag() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'htmlTag' => '<html lang="en" class="unit-test">'
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('htmlTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['htmlTag'], $params['htmlTag']);
		$this->assertNotEquals($this->incommingParams['htmlTag'], $params['htmlTag']);
	}
	
	/**
	 * @test
	 */
	public function getDefaultHtmlTag() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'htmlTag' => ''
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('htmlTag', $params);
		$this->assertEquals($this->incommingParams['htmlTag'], $params['htmlTag']);
		$this->assertNotEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['htmlTag'], $params['htmlTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomMetaCharsetTag() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'metaCharsetTag' => '<meta charset="|">'
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertNotEquals($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function getDefaultMetaCharsetTag() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'metaCharsetTag' => ''
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertEquals($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertNotEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomMetaCharsetTagInsertAfter() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'metaCharsetTag.' => array(
				'insertAfter' => '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'
			)
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertContains($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag.']['insertAfter'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomHtmlTagAndMetaCharsetTag() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'htmlTag' => '<html lang="en" class="unit-test">',
			'metaCharsetTag' => '<meta charset="|">'
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('htmlTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['htmlTag'], $params['htmlTag']);
		$this->assertNotEquals($this->incommingParams['htmlTag'], $params['htmlTag']);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertNotEquals($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomHtmlTagAndMetaCharsetTagInsertAfter() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'htmlTag' => '<html lang="en" class="unit-test">',
			'metaCharsetTag.' => array(
				'insertAfter' => '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'
			)
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('htmlTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['htmlTag'], $params['htmlTag']);
		$this->assertNotEquals($this->incommingParams['htmlTag'], $params['htmlTag']);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertContains($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag.']['insertAfter'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomHtmlTagAndMetaCharsetTagAndMetaCharsetTagInsertAfter() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'htmlTag' => '<html lang="en" class="unit-test">',
			'metaCharsetTag' => '<meta charset="|">',
			'metaCharsetTag.' => array(
				'insertAfter' => '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'
			)
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('htmlTag', $params);
		$this->assertEquals($GLOBALS['TSFE']->config['config']['html5boilerplate.']['htmlTag'], $params['htmlTag']);
		$this->assertNotEquals($this->incommingParams['htmlTag'], $params['htmlTag']);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertNotContains($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
		
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag.']['insertAfter'], $params['metaCharsetTag']);
	}
	
	/**
	 * @test
	 */
	public function setCustomMetaCharsetTagAndMetaCharsetTagInsertAfter() {
		$GLOBALS['TSFE']->config['config']['html5boilerplate.'] = array(
			'metaCharsetTag' => '<meta charset="|">',
			'metaCharsetTag.' => array(
				'insertAfter' => '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'
			)
		);
		$params = $this->instance->pageRendererPostProcessHook($this->incommingParams, $this->pageRenderer);
		
		$this->assertArrayHasKey('metaCharsetTag', $params);
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag'], $params['metaCharsetTag']);
		$this->assertNotContains($this->incommingParams['metaCharsetTag'], $params['metaCharsetTag']);
		
		$this->assertContains($GLOBALS['TSFE']->config['config']['html5boilerplate.']['metaCharsetTag.']['insertAfter'], $params['metaCharsetTag']);
	}
}
?>