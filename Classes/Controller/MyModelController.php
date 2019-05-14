<?php
namespace Demo\DemoIrrecontent\Controller;


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
 * MyModelController
 */
class MyModelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * myModelRepository
     * 
     * @var \Demo\DemoIrrecontent\Domain\Repository\MyModelRepository
     * @inject
     */
    protected $myModelRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $myModels = $this->myModelRepository->findAll();
        $this->view->assign('myModels', $myModels);
    }
}
