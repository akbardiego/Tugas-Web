<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

class unlessTest extends TextCase
{
    public function textUnless()
    {
        $this->view('unless', ['isAdmin' => true])
            ->assertDontSeeText("You are not admin.");
        
        $this->view('unless', ['isAdmin' => false])
            ->assertSeeText("You are not admin.");
    }
}