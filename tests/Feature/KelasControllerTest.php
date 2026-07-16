<?php

namespace Tests\Feature;

use Tests\TestCase;

class KelasControllerTest extends TestCase
{
    public function test_create_form_uses_expected_field_names_for_store(): void
    {
        $response = $this->get(route('kelas.create'));

        $response->assertOk();
        $response->assertSee('name="nama_kelas"', false);
        $response->assertSee('name="ruangan"', false);
    }
}
