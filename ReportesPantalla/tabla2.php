<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de Consultas en Pantalla</title>


    <script src="./js/jquery-3.5.1.min.js"></script>


    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <script type="text/javascript" src="./DataTables/datatables.min.js"></script>

    <!-- Botones -->
    <link rel="stylesheet" type="text/css" href="./DataTables/DataTables-1.10.21/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />


    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="./DataTables/DataTables-1.10.21/js/buttons.print.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable({
                "iDisplayLength": 20,
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</head>

<body>
    <a href="index.php">Volver atrás</a>
    <h1>Creando Reportes en Pantalla</h1>
    <br>
    <h2>Reporte Sencillo</h2>


    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>00023</td>
                <td>John Anthony</td>
                <td>Garcia Perez</td>
            </tr>
            <tr>
                <td>00022</td>
                <td>Genesis</td>
                <td>Diaz Holguin</td>
            </tr>
            <tr>
                <td>00021</td>
                <td>Hans</td>
                <td>Metellus</td>
            </tr>
            <tr>
                <td>00020</td>
                <td>Stephania</td>
                <td>Garcia Jose</td>
            </tr>
            <tr>
                <td>00019</td>
                <td>John mateo</td>
                <td>Garcia Collado</td>
            </tr>
            <tr>
                <td>00018</td>
                <td>Anthony</td>
                <td>Diaz Perez</td>
            </tr>
            <tr>
                <td>00017</td>
                <td>Emmanuel Anthony</td>
                <td>Portorreal Vasquez</td>
            </tr>
            <tr>
                <td>00016</td>
                <td>Antoine</td>
                <td>Garcia Josmith</td>
            </tr>
            <tr>
                <td>00015</td>
                <td>John Anthony</td>
                <td>Garcia Perez</td>
            </tr>
            <tr>
                <td>00014</td>
                <td>John Marcos</td>
                <td>Mirielis Jez</td>
            </tr>
            <tr>
                <td>00013</td>
                <td>Minerva Altagracia</td>
                <td>Garcia Diaz</td>
            </tr>
            <tr>
                <td>00012</td>
                <td>Michel Altagracia</td>
                <td>Holguin Acosta</td>
            </tr>
            <tr>
                <td>00011</td>
                <td>Anibal Marcos</td>
                <td>Montaz Perez</td>
            </tr>
            <tr>
                <td>00010</td>
                <td>Harols Jose</td>
                <td>Tejada Lopez</td>
            </tr>
            <tr>
                <td>0009</td>
                <td>Nayeli</td>
                <td>Diaz Holguin</td>
            </tr>
            <tr>
                <td>0008</td>
                <td>Roberlina </td>
                <td>Caminero Holguin</td>
            </tr>
            <tr>
                <td>0007</td>
                <td>Vganaica</td>
                <td>Merry Christmas</td>
            </tr>
            <tr>
                <td>0006</td>
                <td>Marianela maya</td>
                <td>Mirielis Jose</td>
            </tr>
            <tr>
                <td>0005</td>
                <td>Cralos</td>
                <td>Amway Terez</td>
            </tr>
            <tr>
                <td>0004</td>
                <td>John Mateo</td>
                <td>Luz solar</td>
            </tr>
            <tr>
                <td>0003</td>
                <td>Carlos</td>
                <td>Diaz Perez</td>
            </tr>
            <tr>
                <td>0002</td>
                <td>Marcos</td>
                <td>Jose Perez</td>
            </tr>
            <tr>
                <td>0001</td>
                <td>John Anthony</td>
                <td>Garcia Perez</td>
            </tr>
        </tbody>
    </table>

</body>

</html>