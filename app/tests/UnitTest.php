<?php

class UnitTest extends TestCase {
/*
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
*/
	public function testIndexPage()
	{
        $this->call('Get', '/');
        $this->assertResponseOk();
    }
    
    public function testAboutPage()
    {
	    $this->call('Get', '/about');
	    $this->assertResponseOk();
    }
    
    public function testContactPage()
    {
	    $this->call('Get', '/contact');
	    $this->assertResponseOk();
    }
    
    public function testResoursePage()
    {
	    $this->call('Get', '/resource');
	    $this->assertResponseOk();
    }
    
    public function testHelpPage()
    {
		$this->call('Get','/help');
		$this->assertResponseOk();
    }
    
}