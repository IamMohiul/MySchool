<?php

namespace App\DataTables;

use App\Models\Sectionmake;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SectionmakeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('class_id', function($query){
            return $query->getClass->name;
        })
        ->addColumn('action', function($query){
            return '<a href="'.route('admin.Sectionmake.edit', $query->id).'" Class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="'.route('admin.Sectionmake.destroy', $query->id).'" Class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
        })
        ->rawColumns(['npdf'=>'npdf'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Sectionmake $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('sectionmake-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('class_id')->title('Class'),
            Column::make('section')->title('Section'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(200)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Sectionmake_' . date('YmdHis');
    }
}
