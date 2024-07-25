<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'home',
        'favorite',
        'star',
        'check_box_outline_blank',
        'radio_button_unchecked',
        'bolt',
        'key',
        'done_outline',
        'settings_accessibility',
        'cycle',
        'deployed_code',
        'blind',
        'eyeglasses',
        'footprint',
        'social_leaderboard',
        'weather_hail',
        'raven',
        'deceased',
        'helicopter',
        'syringe',
        'lock_open',
        'photo_camera',
        'electrical_services',
        'fire_truck',
        'castle',
        'pet_supplies'
    ];

    #[Computed(persist: true)]
    public function letters(): array
    {
        shuffle($this->symbols);
        
        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
