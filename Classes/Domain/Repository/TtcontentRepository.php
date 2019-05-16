<?php
namespace Demo\DemoIrrecontent\Domain\Repository;

/***
 *
 * This file is part of the "Demo tt_content IRRE relations" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/
/**
 * The repository for Ttcontents
 */
class TtcontentRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $objectType = '\Demo\DemoIrrecontent\Domain\Model\Ttcontent';

    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];
}
