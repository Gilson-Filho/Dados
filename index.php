<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Atualizar DIV de segundos em segundos utilizando  AJAX</title>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	    <script type="text/javascript">


        
        function atualizar()
        {
            
            $.post('ajax/atualizar.php', function (programador) {

                
                $('#programador').html('<b>' + programador.nome + programador.sobrenome +'</b><br />');

            }, 'JSON');
        }

        
        setInterval("atualizar()", 2000);

        
        $(function() {
           
            atualizar();
        });

    </script>

</head>

<body>

<div class="container">

    <h1>Atualizar DIV de segundos em segundos utilizando  AJAX</h1>

    <div id="programador"></div>

</div>

</body>
</html>
