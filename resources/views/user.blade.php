<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
    <div class="container">
        <input type="text" id="start_date" placeholder="Start Date" class="form-control datepicker">
        <input type="text" id="end_date" placeholder="End Date" class="form-control datepicker">

        <input type="text" id="user_id" placeholder="User ID" class="form-control mb-3">
        <input type="text" id="name" placeholder="name" class="form-control mb-3">
        <input type="text" id="description" placeholder="description" class="form-control mb-3">
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    {!! $dataTable->scripts(attributes: ['type' => 'module']) !!}

    <script>
        $('.datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        $('#start_date, #end_date').on('change', function () {
            window.LaravelDataTables['user-table'].draw();
        });

        
        $(document).ready(function() {
            setTimeout(() => {
                console.log(window.LaravelDataTables['user-table']);
                let dtable = window.LaravelDataTables['user-table'];
                $('#name').on('keyup', function() {
                    let name = $(this).val();
                    dtable.column(0).search(name);
                    dtable.draw();
                });
                $('#description').on('keyup', function() {
                    let description = $(this).val();
                    dtable.column(1).search(description);
                    dtable.draw();
                });
            }, 1000);            
        });
    </script>
</body>
</html>
