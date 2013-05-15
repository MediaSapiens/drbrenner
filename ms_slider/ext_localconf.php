<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
  'ms.' . $_EXTKEY,
  'Msslider',
  array(
    'Slider' => 'list',

  ),
  // non-cacheable actions
  array(
    'Slider' => '',
  )
);

?>