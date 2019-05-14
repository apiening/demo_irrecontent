<?php
namespace Demo\DemoIrrecontent\Domain\Model;


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
 * MyModel
 */
class MyModel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * contentElements
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Demo\DemoIrrecontent\Domain\Model\Ttcontent>
     * @cascade remove
     */
    protected $contentElements = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->contentElements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Adds a Ttcontent
     * 
     * @param \Demo\DemoIrrecontent\Domain\Model\Ttcontent $contentElement
     * @return void
     */
    public function addContentElement(\Demo\DemoIrrecontent\Domain\Model\Ttcontent $contentElement)
    {
        $this->contentElements->attach($contentElement);
    }

    /**
     * Removes a Ttcontent
     * 
     * @param \Demo\DemoIrrecontent\Domain\Model\Ttcontent $contentElementToRemove The Ttcontent to be removed
     * @return void
     */
    public function removeContentElement(\Demo\DemoIrrecontent\Domain\Model\Ttcontent $contentElementToRemove)
    {
        $this->contentElements->detach($contentElementToRemove);
    }

    /**
     * Returns the contentElements
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Demo\DemoIrrecontent\Domain\Model\Ttcontent> $contentElements
     */
    public function getContentElements()
    {
        return $this->contentElements;
    }

    /**
     * Sets the contentElements
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Demo\DemoIrrecontent\Domain\Model\Ttcontent> $contentElements
     * @return void
     */
    public function setContentElements(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contentElements)
    {
        $this->contentElements = $contentElements;
    }
}
