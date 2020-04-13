<?php

namespace Tests\Feature\Household;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnlistFamilyTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function listAllFamilyMembersSuccessfully()
    {
        $lguAdmin = factory(User::class)->create();

        $payload = [
            "last_name" => "family",
        ];

        $reponse = $this->actingAs($lguAdmin)
            ->from(route('household.form'))
            ->post(route('household.store'), $payload);

        $reponse->assertRedirect(route('household.listing'));
        $this->assertDatabaseHas('households', $payload);
    }
}
