<?php

namespace mssysextending\MsSysextending\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 mediasapiens.co <dev@mediasapiens.co>, mediasapiens
 *  			
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
 * Test case for class \mssysextending\MsSysextending\Domain\Model\PageExtend.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage ms_sysextending
 *
 * @author mediasapiens.co <dev@mediasapiens.co>
 */
class PageExtendTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \mssysextending\MsSysextending\Domain\Model\PageExtend
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \mssysextending\MsSysextending\Domain\Model\PageExtend();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getHerotitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHerotitleForStringSetsHerotitle() { 
		$this->fixture->setHerotitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHerotitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getHeroimageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHeroimageForStringSetsHeroimage() { 
		$this->fixture->setHeroimage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHeroimage()
		);
	}
	
}
?>