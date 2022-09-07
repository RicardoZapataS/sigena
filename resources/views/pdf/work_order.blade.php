<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de trabajo</title>
</head>
<body>
<style>
    table{
        width: 100%; border: solid 1px black; font-family: Arial, Helvetica, sans-serif;
        max-width: 100%;
    }
    tr{
        border: solid 1px black;
    }
    td{
        border: solid 1px black;text-align: center; text-transform: uppercase;
    }
    div{
        text-align: center; text-transform: uppercase;
    }
</style>
<?php
    $manana = $data[0]->turn == 'Mañana 08 a 14' ? $data[0] : $data[1];
    $tarde = $data[1]->turn == 'Tarde 14 a 20' ? $data[1] : $data[0];
?>
<table  cellpadding="pixels"cellspacing="pixels">>
    <tr style="">
        <td  align="position"valign="position" style="width: 10rem"><img src="assets/img/logo_naabol.jpeg" alt="" style="width: 10rem"></td>
        <td  colspan="8" align="position"valign="position" ><div style=" font-weight: bolder">Orden de trabajo <br> Diario</div></td>
    </tr>
    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style=" width: 10rem">Fecha</td>
        <td colspan="8" align="position"valign="position" ><div >
                {{$data[0]->date_work}}</div></td>
    </tr>
    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style="width: 10rem">Trabajo a realizar</td>
        <td colspan="8" align="position"valign="position" >
            <div >
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </div>
        </td>
    </tr>
    <tr style="border: solid 1px black">
        <td rowspan="2" align="position"valign="position" style="width: 10rem">Fecha de inspeccion:</td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">
                08:00
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                16:00
            </div>
        </td>
    </tr>
    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style=" width: 3rem">
            <div>
                INICIO
            </div>
        </td>
        <td  align="position"valign="position" >
            <div >
                @if(!is_null($manana->hour_start))
                    {{$manana->hour_start}}
                @else
                    {{'Sin novedad'}}
                @endif

            </div>
        </td>
        <td  align="position"valign="position" style=" width: 3rem">
            <div>
                FIN
            </div>
        </td>
        <td  align="position"valign="position" >
            <div >
                @if(!is_null($manana->hour_end))
                    {{$manana->hour_end}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td  align="position"valign="position" style=" width: 3rem">
            <div>
                INICIO
            </div>
        </td>
        <td  align="position"valign="position" >
            <div >
                @if(!is_null($tarde->hour_start))
                    {{$tarde->hour_start}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td  align="position"valign="position" style=" width: 3rem">
            <div>
                FIN
            </div>
        </td>
        <td  align="position"valign="position" >
            <div >
                @if(!is_null($tarde->hour_end))
                    {{$tarde->hour_end}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="1" align="position"valign="position" style="width: 10rem">Calle de rodaje:</td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->taxiway))
                    {{$manana->taxiway}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->taxiway))
                    {{$tarde->taxiway}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="2" align="position"valign="position" style="width: 10rem; ">umbral:</td>
        <td colspan="1" align="position"valign="position" >
            <div >
                34
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->threshold34))
                    {{$manana->threshold34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->threshold34))
                    {{$tarde->threshold34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                16
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->threshold16))
                    {{$manana->threshold16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->threshold16))
                    {{$manana->threshold16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="2" align="position"valign="position" style="width: 10rem">als de aproximacion:</td>
        <td colspan="1" align="position"valign="position" >
            <div >
                34
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->als_approximation34))
                    {{$manana->als_approximation34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->als_approximation34))
                    {{$tarde->als_approximation34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                16
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->als_approximation16))
                    {{$manana->als_approximation16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->als_approximation16))
                    {{$manana->als_approximation16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style="width: 10rem">Luces borde de pista:</td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->runway_edge_lice))
                    {{$manana->runway_edge_lice}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->runway_edge_lice))
                    {{$manana->runway_edge_lice}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="2" align="position"valign="position" style="width: 10rem">papi:</td>
        <td colspan="1" align="position"valign="position" >
            <div >
                34
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->papi34))
                    {{$manana->papi34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->papi34))
                    {{$tarde->papi34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                16
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->papi16))
                    {{$manana->papi16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->papi16))
                    {{$manana->papi16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style="width: 10rem">letreros de señalizacion:</td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->signaling_signs))
                    {{$manana->signaling_signs}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->signaling_signs))
                    {{$manana->signaling_signs}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style="width: 10rem">torre <br> (twr):</td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->twr))
                    {{$manana->twr}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->twr))
                    {{$manana->twr}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="3" align="position"valign="position" style="width: 10rem">luces de plataforma:</td>
        <td colspan="1" align="position"valign="position" >
            <div >
                PP
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->platform_lightspp))
                    {{$manana->platform_lightspp}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->platform_lightspp))
                    {{$tarde->platform_lightspp}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                pa
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->platform_lightspapa))
                    {{$manana->platform_lightspapa}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->platform_lightspapa))
                    {{$manana->platform_lightspapa}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                PC1
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->platform_lightspc1))
                    {{$manana->platform_lightspc1}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->platform_lightspc1))
                    {{$manana->platform_lightspc1}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td rowspan="2" align="position"valign="position" style="width: 10rem">manga de viento:</td>
        <td colspan="1" align="position"valign="position" >
            <div >
                16
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->whirlwind16))
                    {{$manana->whirlwind16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div style="text-align: center; text-transform: uppercase;">

                @if(!is_null($tarde->whirlwind16))
                    {{$tarde->whirlwind16}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td colspan="1" align="position"valign="position" >
            <div >
                34
            </div>
        </td>
        <td colspan="3" align="position"valign="position" >
            <div >
                @if(!is_null($manana->whirlwind34))
                    {{$manana->whirlwind34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                @if(!is_null($manana->whirlwind34))
                    {{$manana->whirlwind34}}
                @else
                    {{'Sin novedad'}}
                @endif
            </div>
        </td>
    </tr>

    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style="width: 10rem">nombre del tecnico:</td>
        <td colspan="4" align="position"valign="position" >
            <div >
                {{$manana->user->name}} {{$manana->user->last_name}}
            </div>
        </td>
        <td colspan="4" align="position"valign="position" >
            <div >
                {{$tarde->user->name}} {{$tarde->user->last_name}}
            </div>
        </td>
    </tr>
</table>
</body>
</html>
