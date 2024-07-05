<?php

namespace Database\Factories\Central;

use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Tenant::class;

    public function definition(): array
    {
        return [
            'id'                        => $this->faker->numerify('###########'),
            'tenant_representante_id'   => 1,
            'razao_social'              => $this->faker->company . ' ' . $this->faker->companySuffix . ' ' . $this->faker->numberBetween(1, 1000000),
            'fantasia'                  => $this->faker->companySuffix . ' ' . $this->faker->numberBetween(1, 1000000) . ' ' . $this->faker->company,
            'proprietario'              => $this->faker->name,
            'gerente'                   => $this->faker->name,
            'status'                    => $this->faker->boolean,
            'integrada'                 => $this->faker->boolean,
            'telefone'                  => $this->faker->phoneNumber,
            'celular'                   => $this->faker->phoneNumber,
            'email'                     => $this->faker->numberBetween(1, 1000000) . ' ' . $this->faker->email,
            'endereco_id'               => 1,
            'end_num'                   => $this->faker->numberBetween(1, 1000),
            'complemento'               => $this->faker->secondaryAddress,
            'inscricao_estadual'        => $this->faker->numerify('#########'),
            'inscricao_municipal'       => $this->faker->numerify('#########'),
            'abastecer_preco'           => $this->faker->boolean,
            'farmacia_popular_id'       => 1,
        ];
    }
}
