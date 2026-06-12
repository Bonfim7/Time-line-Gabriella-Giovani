<?php

namespace Tests\Feature;

use Tests\TestCase;

class TimelineTest extends TestCase
{
    public function test_homepage_renders_the_timeline(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Feliz Dia dos Namorados');
        $response->assertSee('O pedido de namoro');
        $response->assertSee('images/timeline/pedido-de-namoro.jpeg');
    }
}
