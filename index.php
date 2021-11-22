<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Prueba Dialog jQueryUI</title>
        <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="ventana">
            <p>¿Está seguro de cerrar esta ventana?</p>
        </div>
        <p><a id="abrir">Abrir ventana</a></p>
        <script type="text/javascript" src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

        <script>
           $("#ventana").dialog({
                width: 300,
                title: "Mi ventana de diálogo",
                resizable: false,
                draggable: false,
                modal: true,
                buttons: {
                    "Sí": function(){
                        $(this).dialog("close");
                    },
                    "No": function(){
                        alert("Puedes cerrarme cuando quieras");
                    }
                },
                autoOpen: false
            });
            $("#abrir").click(function(event){
                $("#ventana").dialog("open");
            });
        </script>
    </body>
</html>