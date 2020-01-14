<?php

namespace App\Exports;

use App\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TasksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Task::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'player_id',
            'task_name',
            'task_desc',
            'task_tag',
            'due',
            'completed',
            'created_at',
            'updated_at'
        ];
    }
}
