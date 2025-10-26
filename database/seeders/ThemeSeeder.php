<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    public function run(): void
    {
        $themes = [
            [
                'name' => 'Dark Mode',
                'primary_color_class' => 'bg-gray-900 text-white',
                'accent_color_class' => 'text-amber-500',
            ],
            [
                'name' => 'Light Mode',
                'primary_color_class' => 'bg-white text-black',
                'accent_color_class' => 'text-blue-500',
            ],
            [
                'name' => 'Sunset',
                'primary_color_class' => 'bg-orange-200 text-gray-900',
                'accent_color_class' => 'text-red-500',
            ],
            [
                'name' => 'Forest',
                'primary_color_class' => 'bg-green-900 text-white',
                'accent_color_class' => 'text-lime-400',
            ],
            [
                'name' => 'Ocean',
                'primary_color_class' => 'bg-blue-800 text-white',
                'accent_color_class' => 'text-cyan-400',
            ],
        ];

        foreach ($themes as $theme) {
            Theme::create($theme);
        }
    }
}
