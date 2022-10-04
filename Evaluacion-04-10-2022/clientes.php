<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   
    <title>Clientes</title>
</head>
<body>
<div class="container">
        <h1>Consulta de Cliente</h1>
        <div class="col-6">
            <button type="button" id="btnConsultar" class="btn btn-primary btn-block">Consultar</button>
        </div>
        <br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Razon Social</th>
                    <th scope="col">Tipo Doc.</th>
                    <th scope="col">N Documento</th>
                    <th scope="col">Direccion</th>
                    </tr>
                </thead>
                <tbody id="tblData">
                    
                </tbody>

            </table>

    </div>
    <script src='assets/js/clientes.js'></script>
</body>
</html>