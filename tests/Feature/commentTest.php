<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

class commentTest extends TextCase
{
    public function testComment()
    {
        $this->view("comment", [])
            -assertSeeText("Comment")
            -assertDontSeeText("Diego");
    }
}