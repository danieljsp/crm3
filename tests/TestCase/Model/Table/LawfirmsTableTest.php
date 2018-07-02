<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LawfirmsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LawfirmsTable Test Case
 */
class LawfirmsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LawfirmsTable
     */
    public $Lawfirms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lawfirms',
        'app.leads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lawfirms') ? [] : ['className' => LawfirmsTable::class];
        $this->Lawfirms = TableRegistry::getTableLocator()->get('Lawfirms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lawfirms);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
