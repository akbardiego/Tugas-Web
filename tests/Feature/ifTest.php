<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

class ifTest extends TextCase
{
    public function testif()
    {
        $this->view("if", ["hobbies" => []] )
            ->assertSeeText("I don't have any hobbies!");
        
        $this->view("if", ["hobbies" => ["Coding"]] )
            ->assertSeeText("I have one hobby!");
        
        $this->view("if", ["hobbies" => ["Coding", "Gaming"]] )
            ->assertSeeText("I don't have any hobbies!");
    }
}