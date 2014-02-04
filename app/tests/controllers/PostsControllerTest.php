<?php
 
# app/tests/controllers/PostsControllerTest.php
 
class PostsControllerTest extends TestCase {
 
  public function testIndex()
  {
      $this->call('GET', 'posts');
  }
 
}