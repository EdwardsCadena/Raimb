<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $titulo !!}</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.6/dist/semantic.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script type = "text / javascript" src = "https://www.gstatic.com/charts/loader.js" > </script>
    <script type = "text / javascript" > google . gráficos . load ( 'current' , { packages : [ 'corechart' ]}); google . gráficos . setOnLoadCallback ( drawChart ); ... </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
</head>
<body>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.6/dist/semantic.min.js"></script>

<script type="text/javascript" src="js/graficoTorta1.js"></script>
<script type="text/javascript" src="js/controlColorBotones.js"></script>
<script type="text/javascript" src="js/graficoTorta2.js"></script>
<script type="text/javascript" src="js/graficoBarras1.js"></script>
<script type="text/javascript" src="js/graficoBarras2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        setTimeout(function() {
            $('.ui.segment')
                .transition({
                    animation: 'drop in',
                    duration: '0.2s',
                    onComplete: function() {
                        $('.ui.bottom.attached.button')
                            .removeClass('hidden');
                        setTimeout(function() {
                            $('#flip-label')
                                .transition({
                                    animation: 'fade in',
                                    duration: '0.8s'
                                });
                        }, 1000);
                    }
                });
        }, 500);

        $('.shape').shape();
        $('#flip-label')
            .state()
            .click(function() {
                $('#flip-label').transition({
                    animation: 'fade out',
                    duration: '300ms',
                    onComplete: function() {
                        if ($('#flip-label').hasClass('active')) {
                            $('#flip-label').html('Espera, tienes una cuenta!');
                        } else {
                            $('#flip-label').html('¿No eres miembro todavía?');
                        };
                        $('.shape').shape('flip over');
                        setTimeout(function() {
                            $('#flip-label').transition({
                                animation: 'fade in',
                                duration: '300ms'
                            });
                        }, 700);
                    }
                });
            });
        $('#click_me').click(function(){
            $('.ui.basic.vertical.modal').modal("show");
        });
    });
</script>
</body>
</html>
