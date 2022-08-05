<html>
<head>
    <style>
        /** Define the margins of your page **/
        @page {
            margin: 150px 75px;
        }

        header {
            position: fixed;
            top: -150px;
            left: 0px;
            right: 0px;
            height: 50px;
        }
    p {
    font-family: Arial, Helvetica, sans-serif   ;
    }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <img src="informe.png" alt="" style="padding-left: rem; width: 100%; opacity: 0.7;">
</header>

<!-- Wrap the content of your PDF inside a main tag -->
<main>
<?php
$date = substr($reports[0]->date, 0, -3);

    $mes = ["", "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
//dd(explode($date, '-'), $date   );
    ?>
    <p style="text-transform: capitalize;"><b>{{ $mes[intval(explode('-', $date)[1]) ] }}  {{ intval(explode('-', $date)[0]) }}</b></p>
    <ul>
    @foreach($reports as $report)

        @if($date != substr($report->date, 0, -3))
            <?php $date = substr($report->date, 0, -3) ?>
            </ul>
            <p style="text-transform: capitalize;"><b>{{ $mes[intval(explode('-', $date)[1]) ] }}  {{ intval(explode('-', $date)[0]) }}</b></p>
            <ul>
        @endif
            <li><p>
                En la fecha {{ $report->date }} se trabajo en el turno {{ $report->turn }} con las siguientes novedades: {{ $report->report }}
            </p></li>
    @endforeach
    </ul>
</main>
</body>
</html>
