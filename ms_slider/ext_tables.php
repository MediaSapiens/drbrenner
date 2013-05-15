<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
  $_EXTKEY,
  'Msslider',
  'Slider'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_msslider';
#$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
#\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_msslider.xml');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Slider');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msslider_domain_model_slider', 'EXT:ms_slider/Resources/Private/Language/locallang_csh_tx_msslider_domain_model_slider.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_msslider_domain_model_slider');
$TCA['tx_msslider_domain_model_slider'] = array(
  'ctrl' => array(
    'title'	=> 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider',
    'label' => 'title',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'dividers2tabs' => TRUE,
    'sortby' => 'sorting',
    'versioningWS' => 2,
    'versioning_followPages' => TRUE,
    'origUid' => 't3_origuid',
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'delete' => 'deleted',
    'enablecolumns' => array(
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
    ),
    'searchFields' => 'title,teaser,image,link,linktext,',
    'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Slider.php',
    'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_msslider_domain_model_slider.gif'
  ),
);


?>