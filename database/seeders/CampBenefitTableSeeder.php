<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstact Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'I Mac 2021',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Video',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Jobs Opportunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certification',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Video',
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
