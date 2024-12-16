<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Siswa;

class TabelSiswa extends DataTableComponent
{
    protected $model = Siswa::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()->collapseAlways(),
            Column::make("Nama", 'nama')->sortable()->searchable(),
            Column::make("Tempat Lahir", 'tempat_lahir')->sortable()->searchable(),
            Column::make("Tanggal Lahir", 'tanggal_lahir')->sortable()->searchable(),
            Column::make("Jenis Kelamin", 'jenis_kelamin')->sortable()->searchable(),
            Column::make("Aksi")->label(
                fn($row, Column $column) => view('components.action-column')->with(['id' => $row->id])
            )->html(),
        ];
    }
}
