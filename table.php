<html>
<head>
    <title>Tabledit usando Datatable con PHP Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
</head>
<body>
<div class="container">
    <h3 align="left">Tabledit usando Datatable con PHP Ajax</h3>
    <br />
    <div class="panel panel-primary">
        <div class="panel-heading">Sample Data</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="personal" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>nombre</th>
                        <th>nombre</th>
                        <th>nombre</th>
                        <th>nombre</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br />
<br />
</body>
</html>
<script>
    $(document).ready(function(){

        var dataTable = $('#personal').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"./app/webhook/lista-cursos.php",
                type:"POST"
            }
        });

        $('#personal').on('draw.dt', function(){
            $('#personal').Tabledit({
                url:'edicion.php',
                dataType:'json',
                columns:{
                    identifier : [0, 'nombre'],
                    editable:[[1, 'nombre'], [2, 'nombre'], [3, 'nombre']]
                },
                restoreButton:false,
                onSuccess:function(data, textStatus, jqXHR)
                {
                    if(data.action == 'delete')
                    {
                        $('#' + data.idp).remove();
                        $('#personal').DataTable().ajax.reload();
                    }
                }
            });
        });

    });
</script>