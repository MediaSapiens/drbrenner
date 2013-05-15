<?php
namespace mssysextending\MsSysextending\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package ms_sysextending
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class PageExtend extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Hero title
	 *
	 * @var \string
	 */
	protected $herotitle;

	/**
	 * Hero image
	 *
	 * @var \string
	 */
	protected $heroimage;

	/**
	 * Returns the herotitle
	 *
	 * @return \string $herotitle
	 */
	public function getHerotitle() {
		return $this->herotitle;
	}

	/**
	 * Sets the herotitle
	 *
	 * @param \string $herotitle
	 * @return void
	 */
	public function setHerotitle($herotitle) {
		$this->herotitle = $herotitle;
	}

	/**
	 * Returns the heroimage
	 *
	 * @return \string $heroimage
	 */
	public function getHeroimage() {
		return $this->heroimage;
	}

	/**
	 * Sets the heroimage
	 *
	 * @param \string $heroimage
	 * @return void
	 */
	public function setHeroimage($heroimage) {
		$this->heroimage = $heroimage;
	}

}
?>