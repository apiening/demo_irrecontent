<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['tt_content']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tt_content']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_demoirrecontent_tt_content = [];
    $tempColumnstx_demoirrecontent_tt_content[$GLOBALS['TCA']['tt_content']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:demo_irrecontent/Resources/Private/Language/locallang_db.xlf:tx_demoirrecontent.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['Ttcontent','Tx_DemoIrrecontent_Ttcontent']
            ],
            'default' => 'Tx_DemoIrrecontent_Ttcontent',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnstx_demoirrecontent_tt_content);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    $GLOBALS['TCA']['tt_content']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tt_content']['ctrl']['label']
);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tt_content']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tt_content']['types']['Tx_DemoIrrecontent_Ttcontent']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tt_content']['types'])) {
    // use first entry in types array
    $tt_content_type_definition = reset($GLOBALS['TCA']['tt_content']['types']);
    $GLOBALS['TCA']['tt_content']['types']['Tx_DemoIrrecontent_Ttcontent']['showitem'] = $tt_content_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tt_content']['types']['Tx_DemoIrrecontent_Ttcontent']['showitem'] = '';
}
$GLOBALS['TCA']['tt_content']['types']['Tx_DemoIrrecontent_Ttcontent']['showitem'] .= ',--div--;LLL:EXT:demo_irrecontent/Resources/Private/Language/locallang_db.xlf:tx_demoirrecontent_domain_model_ttcontent,';
$GLOBALS['TCA']['tt_content']['types']['Tx_DemoIrrecontent_Ttcontent']['showitem'] .= '';

$GLOBALS['TCA']['tt_content']['columns'][$GLOBALS['TCA']['tt_content']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:demo_irrecontent/Resources/Private/Language/locallang_db.xlf:tt_content.tx_extbase_type.Tx_DemoIrrecontent_Ttcontent','Tx_DemoIrrecontent_Ttcontent'];
