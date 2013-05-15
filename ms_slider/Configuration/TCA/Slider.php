<?php
if (!defined ('TYPO3_MODE')) {
  die ('Access denied.');
}

$TCA['tx_msslider_domain_model_slider'] = array(
  'ctrl' => $TCA['tx_msslider_domain_model_slider']['ctrl'],
  'interface' => array(
    'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, teaser, image, link, linktext',
  ),
  'types' => array(
    '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, teaser, image, link, linktext,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
  ),
  'palettes' => array(
    '1' => array('showitem' => ''),
  ),
  'columns' => array(
    'sys_language_uid' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
      'config' => array(
        'type' => 'select',
        'foreign_table' => 'sys_language',
        'foreign_table_where' => 'ORDER BY sys_language.title',
        'items' => array(
          array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
          array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
        ),
      ),
    ),
    'l10n_parent' => array(
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array('', 0),
        ),
        'foreign_table' => 'tx_msslider_domain_model_slider',
        'foreign_table_where' => 'AND tx_msslider_domain_model_slider.pid=###CURRENT_PID### AND tx_msslider_domain_model_slider.sys_language_uid IN (-1,0)',
      ),
    ),
    'l10n_diffsource' => array(
      'config' => array(
        'type' => 'passthrough',
      ),
    ),
    't3ver_label' => array(
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
      'config' => array(
        'type' => 'input',
        'size' => 30,
        'max' => 255,
      )
    ),
    'hidden' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
      'config' => array(
        'type' => 'check',
      ),
    ),
    'starttime' => array(
      'exclude' => 1,
      'l10n_mode' => 'mergeIfNotBlank',
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
      'config' => array(
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => array(
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ),
      ),
    ),
    'endtime' => array(
      'exclude' => 1,
      'l10n_mode' => 'mergeIfNotBlank',
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
      'config' => array(
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => array(
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ),
      ),
    ),
    'title' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider.title',
      'config' => array(
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim,required'
      ),
    ),
    'teaser' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider.teaser',
      'config' => array(
        'type' => 'text',
        'cols' => 40,
        'rows' => 15,
        'eval' => 'trim'
      ),
    ),
    'image' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider.image',
      'config' => array(
        'type' => 'group',
        'internal_type' => 'file',
        'uploadfolder' => 'uploads/tx_msslider',
        'show_thumbs' => 1,
        'size' => 1,
        'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
        'disallowed' => '',
      ),
    ),
    'link' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider.link',
      'config' => array(
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim'
      ),
    ),
    'linktext' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:ms_slider/Resources/Private/Language/locallang_db.xlf:tx_msslider_domain_model_slider.linktext',
      'config' => array(
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim'
      ),
    ),
  ),
);






?>