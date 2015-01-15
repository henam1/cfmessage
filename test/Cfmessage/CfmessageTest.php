<?php

namespace Erogami\Cfmessage;

class CfmessageTest extends \PHPUnit_Framework_TestCase
{
    
    public function testAddMessage(){
    
        $test = new \Erogami\Cfmessage\Cfmessage();
        
        $messages[]=[
            'content' => 'test',
            'type' => 'info',
        ];
        
        $_SESSION['Cfmessage'] = $messages;
        
        $test->addMessage('test', 'info');
        
        $exp = '<div id="message" class="info"><p>test</p></div><div id="message" class="info"><p>test</p></div>';
	
        $res = $test->printMessage();
        
        $this->assertEquals($res, $exp, "Message not matching");

    }
    
    public function testAddError(){
    
        $test = new \Erogami\Cfmessage\Cfmessage();
        $test->addError('test');
        $exp = '<div id="message" class="error"><p><i class="fa fa-times"></i> test</p></div>';
	    $res = $test->printMessage();
        $this->assertEquals($res, $exp, "Message not matching");
    }
    
     public function testAddWarning(){
    
        $test = new \Erogami\Cfmessage\Cfmessage();
        $test->addError('test');
        $exp = '<div id="message" class="warning"><p><i class="fa fa-warning"></i> test</p></div>';
	    $res = $test->printMessage();
        $this->assertEquals($res, $exp, "Message not matching");
    }
    
    public function testAddSuccess(){
    
        $test = new \Erogami\Cfmessage\Cfmessage();
        $test->addError('test');
        $exp = '<div id="message" class="success"><p><i class="fa fa-check"></i> test</p></div>';
	    $res = $test->printMessage();
        $this->assertEquals($res, $exp, "Message not matching");
    }
    
    public function testAddInfo(){
    
        $test = new \Erogami\Cfmessage\Cfmessage();
        $test->addError('test');
        $exp = '<div id="message" class="info"><p><i class="fa fa-info"></i> test</p></div>';
	    $res = $test->printMessage();
        $this->assertEquals($res, $exp, "Message not matching");
    }
    
    public function testClearSession()
    {
		$test = new \Erogami\Cfmessage\Cfmessage();
		$_SESSION['messages'] = 'test';
		$test->clearSession();
		$this->assertNull($_SESSION['messages'], 'SESSION was not cleared');
    }
    

}