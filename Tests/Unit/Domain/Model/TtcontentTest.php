<?php
namespace Demo\DemoIrrecontent\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TtcontentTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Demo\DemoIrrecontent\Domain\Model\Ttcontent
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Demo\DemoIrrecontent\Domain\Model\Ttcontent();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
