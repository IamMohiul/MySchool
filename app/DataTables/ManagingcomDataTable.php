<?php

namespace App\DataTables;

use App\Models\Managingcom;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ManagingcomDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('image', function($query){
            return '<img src="'.asset($query->image).'" style="width:100px" />';
        })
        ->addColumn('action', function($query){
            return '<a href="'.route('admin.Managingcom.edit', $query->id).'" Class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="'.route('admin.Managingcom.destroy', $query->id).'" Class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
        })
        ->rawColumns(['image','action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Managingcom $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('managingcom-table')
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
            Column::make('id')->width(40),
            Column::make('image')->title('Photo')->width(100),
            Column::make('title')->title('Name'),
            Column::make('position')->title('Postion'),
            Column::make('mobile')->title('Mobile'),
            Column::make('email')->title('E-Mail'),
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
        return 'Managingcom_' . date('YmdHis');
    }
}
