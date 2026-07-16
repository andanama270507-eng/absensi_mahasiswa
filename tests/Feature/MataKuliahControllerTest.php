<?php

namespace Tests\Feature;

use Tests\TestCase;

class MataKuliahControllerTest extends TestCase
{
    public function test_create_form_uses_expected_field_names_for_store(): void
    {
        $response = $this->get(route('mata-kuliah.create'));

        $response->assertOk();
        $response->assertSee('name="kode_mk"', false);
        $response->assertSee('name="nama_mk"', false);
        $response->assertSee('name="sks"', false);
    }
}
