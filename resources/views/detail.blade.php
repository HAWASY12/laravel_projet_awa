<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body style="background:#F0F8FF";> 
         <div class="container">
        <div class="card-header">
            <div style="background:#B0C4DE; border-radius:5px;padding:5px">
                <h1  style="background:#B0C4DE"; class="text-center"><marquee> Détails du projet</marquee> </h1>
            </div>
            <br>
            
            <p style="text-align:center"><span style="font-size:20px; color:#87CEFA; font-weight : bold;">Nom du projet : </span>{{$projet->nom}}</p>
            <p style="text-align:center"><span style="font-size:20px; color:#87CEFA; font-weight : bold;">Description du projet :  </span>{{$projet->description}}</p>
            <p style="text-align:center"><span style="font-size:20px; color:#87CEFA; font-weight : bold;">Date de debut du projet :  </span>{{$projet->date_debut}}</p>
            <p style="text-align:center"><span style="font-size:20px; color:#87CEFA; font-weight : bold;">Date de fin du projet :  </span>{{$projet->date_fin}}</p>
            </p>
            <br>
            <br>
            <p style="text-align:center">
            <a  style="border:1px solid; background:#B0C4DE; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('phase.projet', ['id' =>$projet->id])}}">
            Ajouter une phase</a>
            </p>
            <hr style="border: 1px solid black;">
            <hr style="border: 1px solid black;">
            
            <table class="table table-bordered bg-white" style="background-color:#ADD8E6";>
            <tr class="bg-secondary text-white text-center text-ittalic" > 
                    <td>Nom</td>
                    <td>Durée</td>
                    <td>Priorité</td>
                    <td>Action</td>
                </tr>

                
            @if ($projet->phases->count() > 0)
                        @foreach ($projet->phases as $p) 
                            <tr>
                                <td>{{ $p->nom }}</td>
                                <td> {{ $p->duree }} </td>
                                <td> {{$p->priorite }} </td>
                                <td>
                                    <a style="color:red" href="{{route('supprimer.phase', ['id' =>$p->id])}}">DEL🗑</a>
                                    <a href="{{route('editer.phase', ['id' =>$p->id])}}">UPD✏</a>
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun projet  dans la base</span> 
            @endif 
                
            </table>
            
        </center>
    </body>