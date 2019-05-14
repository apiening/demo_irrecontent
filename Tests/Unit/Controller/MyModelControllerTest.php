<?php
namespace Demo\DemoIrrecontent\Tests\Unit\Controller;

/**
 * Test case.
 */
class MyModelControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Demo\DemoIrrecontent\Controller\MyModelController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Demo\DemoIrrecontent\Controller\MyModelController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMyModelsFromRepositoryAndAssignsThemToView()
    {

        $allMyModels = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $myModelRepository = $this->getMockBuilder(\Demo\DemoIrrecontent\Domain\Repository\MyModelRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $myModelRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMyModels));
        $this->inject($this->subject, 'myModelRepository', $myModelRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('myModels', $allMyModels);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
