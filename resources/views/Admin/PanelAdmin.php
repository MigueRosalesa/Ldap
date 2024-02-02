<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/solicitarRol.css">

    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Contenido -->
    <main class="page">
        <div class="container">...</div>
    </main>
    <form class="form-horizontal" role="form">
    <table class="table">
    <thead>
        <tr>
            <th>Nombre del user</th>
            <th>Permisos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Fila 1, Celda 1</td>
            <td><div class="checkbox">
                <label>
                    <input type="checkbox" value="opcion-01"> Representante del Proyecto
                </label>
                <label>
                    <input type="checkbox" value="opcion-02"> Representante Docente
                </label>
                <label>
                    <input type="checkbox" value="opcion-03"> DFA
                </label>     
                </div>
            </td>
            
        </tr>
        <tr>
            <td>Fila 2, Celda 1</td>
            <td><div class="checkbox">
                <label>
                    <input type="checkbox" value="opcion-01"> Representante del Proyecto
                </label>
                <label>
                    <input type="checkbox" value="opcion-02"> Representante Docente
                </label>
                <label>
                    <input type="checkbox" value="opcion-03"> DFA
                </label>     
            </div></td>
            
        </tr>
        <tr>
            <td>Fila 3, Celda 1</td>
            <td><div class="checkbox">
                <label>
                    <input type="checkbox" value="opcion-01"> Representante del Proyecto
                </label>
                <label>
                    <input type="checkbox" value="opcion-02"> Representante Docente
                </label>
                <label>
                    <input type="checkbox" value="opcion-03"> DFA
                </label>     
            </div></td>
           
        </tr>
    </tbody>
    </table>
    <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button class="btn btn-primary pull-right" type="submit">Habilitar Permisos</button>
                </div>
            </div>
    </form>
    <!-- JS -->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>

</body>

</html>