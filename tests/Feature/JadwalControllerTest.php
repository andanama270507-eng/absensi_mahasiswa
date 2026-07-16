<?php

namespace Tests\Feature;

use Tests\TestCase;

class JadwalControllerTest extends TestCase
{
    public function test_create_form_loads_without_unknown_column_error(): void
    {
        $response = $this->get(route('jadwal.create'));

        $response->assertOk();
    }
}
