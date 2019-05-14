<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Demo.DemoIrrecontent',
            'List',
            'List MyModel entries'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('demo_irrecontent', 'Configuration/TypoScript', 'Demo tt_content IRRE relations');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_demoirrecontent_domain_model_mymodel', 'EXT:demo_irrecontent/Resources/Private/Language/locallang_csh_tx_demoirrecontent_domain_model_mymodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_demoirrecontent_domain_model_mymodel');

    }
);
