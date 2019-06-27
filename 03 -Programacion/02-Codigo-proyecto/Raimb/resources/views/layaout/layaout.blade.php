<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.6/dist/semantic.min.css">
</head>
<body>


@yield('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.6/dist/semantic.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        setTimeout(function() {
            $('.ui.segment')
                .transition({
                    animation: 'drop in',
                    duration: '0.8s',
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
    });
</script>
</body>
</html>
