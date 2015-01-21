<?php

namespace thurex\ThurexTable;

class CSimpleTest extends \PHPUnit_Framework_TestCase{
    
    private $simpleTables;
    
    public function setUp(){
        $arrayToSend = array(array('head1','head2','head3'),
                            array('value1','value2','value3'),
                            array('value4','value5','value6'));
        $this->simpleTables[] = new \thurex\thurexTable\CSimpleTable($arrayToSend, 'defaultStyle');
        $this->simpleTables[] = new \thurex\thurexTable\CSimpleTable($arrayToSend, 'somethingelse');
        $this->simpleTables[] = new \thurex\thurexTable\CSimpleTable($arrayToSend, 'greenStyle');
    }
    
    public function tearDown(){
        
    }

    /**
     * Test 
     *
     * @return void
     *
     */
    public function testCreateElement() {
        $this->assertEquals($this->simpleTables[0]->getHtml(), $this->simpleTables[1]->getHtml(), "No method gives default style");
        $this->assertNotNull($this->simpleTables[0], "Variable null");
        $this->assertNotNull($this->simpleTables[2], "Variable null");
    }
    
    
    /**
     * Test 
     *
     * @expectedException Exception
     *
     * @return void
     *
     */
    /*
    public function testValidationRuleNotFound() 
    {
        $el = new \thurex\thurexTable\CSimpleTable('test');

        $el->validate('no-such-rule');
    }
     * 
     */


    /**
     * Test 
     *
     * @return void
     *
     */    
    /*
    public function testGetValue() 
    {
        $res = $this->simpleTables[0]->getTableContent();
        $exp = 'head1';
        $this->assertEquals($res, $exp, "Form element value missmatch, array syntax.");

        $res = $this->simpleTables[0][1];
        $exp = 'value1';
        $this->assertEquals($res, $exp, "Form element value missmatch, array syntax.");
    }
     * 
     */
}

