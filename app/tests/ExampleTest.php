<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

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
}