<?php

namespace App\Livewire;

use App\Models\Siswa;
use Livewire\Component;

class SiswaComponent extends Component
{
    public $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin;

    public function hapus_data($id)
    {
        Siswa::destroy($id);
        redirect()->to('dashboard');
    }
    public function edit_data($id)
    {
        $data = Siswa::find($id);
        $data->update([
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin
        ]);
        redirect()->to('dashboard');
    }

    public function render()
    {
        return view('livewire.siswa-component');
    }
}
