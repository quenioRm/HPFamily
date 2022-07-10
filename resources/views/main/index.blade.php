@extends('layouts.main')

@section('title', 'Resumo Geral')

@section('content')
    <!-- Scroll - Vertical table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Resumo de pagamentos</h5>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="autofill" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Observações</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll - Vertical table end -->
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    loadData()
});
function loadData(){
    setTimeout(function() {
        // [ Autofill ]
        $('#autofill').DataTable({
            autoFill: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "processing" : true,
            "ajax" : {
                "url" : '{{route('Cadastro1GetGeneralJson')}}',
                "type" : "GET"
            },
            "columns" : [
                {
                    "data" : "name"
                }, 
                {
                    "data" : "observations"
                }, 
                { 
                    data: function(row){

                        var urlEdit = '{{ route("Cadastro1IndexGeneralView", ":id") }}';
                        urlEdit = urlEdit.replace(':id', row.id);

                        return '<a class="btn btn-info btn-xs edit" href="'+urlEdit+'"><i class="fa fa-eye"></i>Ver</a>' 
                    }
                }
            ]
        });
        // [ KeyTable Integration ]
        $('#key-intergration').DataTable({
            keys: true,
            autoFill: true
        });
        // [ Column Selector ]
        $('#confirm-table').DataTable({
            autoFill: {
                alwaysAsk: true
            }
        });
        $('#colum-select').DataTable({
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [
                [1, 'asc']
            ],
            autoFill: {
                columns: ':not(:first-child)'
            }
        });
        // [ scroll fill ] 
        var safill = $('#scroll-fill').dataTable({
            scrollY: 400,
            scrollCollapse: true,
            paging: false,
            autoFill: true
        });
    }, 350);
}
</script>
@endpush
