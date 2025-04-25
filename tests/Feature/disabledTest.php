<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

class disabledTest extends TestCase
{
    public function textDisabled()
    {
        $this->view("disabled", ["name" => "Diego"])
            ->assertDontSeeText("Diego")
            ->assertSeeText('Hello {{ $name }}');
    }
}