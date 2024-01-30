<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'npm' => $this->faker->biasedNumberBetween($min = 10000000, $max = 1111111, $function = 'sqrt'),
            'password' => $this->faker->password,
            'nama' => $this->faker->name,
            'kelas' => $this->faker->year,
            'jurusan'=> $this->faker->cityPrefix,
            'lokasi_kampus'=> "depok",
            'tempat_tanggal_lahir'=> $this->faker->monthName,
            'jenis_kelamin' => $this->faker->title,
            'alamat'=> $this->faker->address,
            'nohp' => $this->faker->biasedNumberBetween($min = 10000000, $max = 1111111, $function = 'sqrt'),
            'email'=> $this->faker->email,
            'posisi' => "Programmer",
            'ipk' => $this->faker->buildingNumber,
            'file' => $this->faker->fileExtension
        ];
    }
}
