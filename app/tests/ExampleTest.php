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

	public function testUsernameIsReqired()
	{
		//Create a new User
		$user = new User;
		$user->email = "unittest@unittest.com";
		$user->password = "password";
		$user->password_confirmation = "password";
		
		
		  // User should not save
		  $this->assertFalse($user->save());
		 
		  // Save the errors
		  $errors = $user->errors()->all();
		 
		  // There should be 1 error
		  $this->assertCount(1, $errors);
		 
		  // The username error should be set
		  $this->assertEquals($errors[0], "The username field is required.");
	}
}