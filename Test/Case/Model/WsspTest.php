<?php
App::uses('WsspUser', 'Wssp.Model');

class MylogTest extends BaserTestCase {
    public $fixtures = array(
        'plugin.wssp.Default/WsspUser',
    );

    public function setUp() {
        parent::setUp();
        $this->WsspUser = ClassRegistry::init('Wssp.WsspUser');
    }

    public function testRecord(){
        $result = $this->WsspUser->record('1', 'test');
        $this->assertTrue($result);
    }

}