<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

class hellotest extends TestCase
{
    public function testHelloWorld(): void
    {
        $this->get(uri: "/world")
            ->assertSeeText(value: "diego");
    }

    public function testHelloview(): void
    {
        $this->view("/hello", ["name" => "diego"])
            ->assertSeeText(value: "diego");
    }

    public function testHelloWorldview(): void
    {
        $this->view("/hello.world", ["name" => "diego"])
            ->assertSeeText(value: "diego");
    }

    public function testHello(): void
    {
        $this->get(uri: "/hello")
            ->assertSeeText(value: "diego");
    }
}
