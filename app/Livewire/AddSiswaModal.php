<?php

namespace App\Livewire;

use App\Models\Siswa;
use Livewire\Component;

class AddSiswaModal extends Component
{
    public $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin;
    protected $rules = [
        'nama' => 'required|string|max:255',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'jenis_kelamin' => 'required'
    ];

    public function store()
    {
        $this->validate();
        Siswa::create([
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin
        ]);
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.add-siswa-modal');
    }
}
