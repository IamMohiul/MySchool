<?php

namespace App\DataTables;

use App\Models\slider;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class sliderDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('image', function ($slider) {
            return '<img src="' . asset($slider->image) . '" alt="Slider Image" width="100">';
        })
        ->addColumn('action', function($query){
            return '<a href="'.route('admin.slider.edit', $query->id).'" Class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="'.route('admin.slider.destroy', $query->id).'" Class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
        })
        ->rawColumns(['image', 'action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(slider $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('slider-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->width(60),
            Column::computed('image')
            ->addClass('text-center img-fluid'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(300)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'slider_' . date('YmdHis');
    }
}
