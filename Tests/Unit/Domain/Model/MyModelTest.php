<?php
namespace Demo\DemoIrrecontent\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MyModelTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Demo\DemoIrrecontent\Domain\Model\MyModel
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Demo\DemoIrrecontent\Domain\Model\MyModel();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContentElementsReturnsInitialValueForTtcontent()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getContentElements()
        );
    }

    /**
     * @test
     */
    public function setContentElementsForObjectStorageContainingTtcontentSetsContentElements()
    {
        $contentElement = new \Demo\DemoIrrecontent\Domain\Model\Ttcontent();
        $objectStorageHoldingExactlyOneContentElements = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneContentElements->attach($contentElement);
        $this->subject->setContentElements($objectStorageHoldingExactlyOneContentElements);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneContentElements,
            'contentElements',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addContentElementToObjectStorageHoldingContentElements()
    {
        $contentElement = new \Demo\DemoIrrecontent\Domain\Model\Ttcontent();
        $contentElementsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $contentElementsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($contentElement));
        $this->inject($this->subject, 'contentElements', $contentElementsObjectStorageMock);

        $this->subject->addContentElement($contentElement);
    }

    /**
     * @test
     */
    public function removeContentElementFromObjectStorageHoldingContentElements()
    {
        $contentElement = new \Demo\DemoIrrecontent\Domain\Model\Ttcontent();
        $contentElementsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $contentElementsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($contentElement));
        $this->inject($this->subject, 'contentElements', $contentElementsObjectStorageMock);

        $this->subject->removeContentElement($contentElement);
    }
}
