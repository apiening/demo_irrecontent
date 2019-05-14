<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Demo.DemoIrrecontent',
            'List',
            [
                'MyModel' => 'list'
            ],
            // non-cacheable actions
            [
                'MyModel' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    list {
                        iconIdentifier = demo_irrecontent-plugin-list
                        title = LLL:EXT:demo_irrecontent/Resources/Private/Language/locallang_db.xlf:tx_demo_irrecontent_list.name
                        description = LLL:EXT:demo_irrecontent/Resources/Private/Language/locallang_db.xlf:tx_demo_irrecontent_list.description
                        tt_content_defValues {
                            CType = list
                            list_type = demoirrecontent_list
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'demo_irrecontent-plugin-list',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:demo_irrecontent/Resources/Public/Icons/user_plugin_list.svg']
			);
		
    }
);
