<?php

namespace App\DataTables;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NoticeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('npdf', function ($query) {
                $pdfUrl = asset($query->npdf);
                return '<a href="' . $pdfUrl . '" target="_blank"><i class="fas fa-file-pdf"></i> Download PDF</a>';
            }, false)
            ->addColumn('created_at', function($query){
                return date('d-m-Y', strtotime($query->created_at));
            })
            ->addColumn('category', function($query){
                return $query->category->name;
            })
            ->addColumn('action', function($query){
                return '<a href="'.route('admin.Notice.edit', $query->id).'" Class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="'.route('admin.Notice.destroy', $query->id).'" Class="btn btn-danger delete-item"><i class="fas fa-trash"></i></a>';
            })
            ->rawColumns(['npdf'=>'npdf'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Notice $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('notice-table')
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
            Column::make('title'),
            Column::make('category'),
            Column::make('created_at'),
            Column::make('npdf')->title('Download'),
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
        return 'Notice_' . date('YmdHis');
    }
}
