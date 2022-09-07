<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de conocimiento</title>
</head>
<body>
<style>
    table{
        width: 100%; border: solid 1px black; font-family: Arial, Helvetica, sans-serif;
        max-width: 100%;
        font-size: .5rem;
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

<table  cellpadding="pixels"cellspacing="pixels">>
    <tr style="">
        <td  align="position"valign="position" style="width: 10rem"><img src="assets/img/logo_naabol.jpeg" alt="" style="width: 10rem"></td>
        <td  colspan="9" align="position"valign="position" ><div style=" font-weight: bolder">Base de conocimiento </div></td>
    </tr>
    <tr style="border: solid 1px black">
        <td  align="position"valign="position" style=" width: 10rem">Fecha</td>
        <td colspan="9" align="position"valign="position" ><div >
                {{$di}} - {{ $de }}</div></td>
    </tr>

    <tr style="border: solid 1px black">
        <td align="position"valign="position" style="font-weight: bolder">Equipo</td>
        <td align="position"valign="position" style="font-weight: bolder">Tiempo del evento</td>
        <td align="position"valign="position" style="font-weight: bolder">tipo de falla</td>
        <td align="position"valign="position" style="font-weight: bolder">fecha de atencion</td>
        <td align="position"valign="position" style="font-weight: bolder">tiempo de atencion</td>
        <td align="position"valign="position" style="font-weight: bolder">tiempo de rehabilitacion</td>
        <td align="position"valign="position" style="font-weight: bolder">accion realizada</td>
        <td align="position"valign="position" style="font-weight: bolder">pieza reemplazada
        <td align="position"valign="position" style="font-weight: bolder">notam</td>
        <td align="position"valign="position" style="font-weight: bolder">tecnico</td>
    </tr>
    @foreach($reports as $report)
        <tr style="border: solid 1px black">
            <td align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->team))
                        {{$report->team}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td  align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->time_event))
                        {{$report->time_event}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td  align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->type_fail))
                        {{$report->type_fail}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td  align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->date_attention))
                        {{$report->date_attention}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td  align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->time_attention))
                        {{$report->time_attention}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td  align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->time_rehabilitation))
                        {{$report->time_rehabilitation}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->performed_action))
                        {{$report->performed_action}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->replaced))
                        {{$report->replaced}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    @if(!is_null($report->notam))
                        {{$report->notam}}
                    @else
                        {{'----'}}
                    @endif
                </div>
            </td>
            <td align="position"valign="position" >
                <div style="text-align: center; text-transform: uppercase;">

                    {{$report->user->name}} {{$report->user->last_name}}
                </div>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
