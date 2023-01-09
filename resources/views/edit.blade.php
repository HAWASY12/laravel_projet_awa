<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    </head>
    <body  style="background:#F0F8FF";>
    <div class="container">
        <div class="card-header">
            <div style="background:#B0C4DE; border-radius:10px;padding:5px">
                <h1 style="background:#B0C4DE";  class="text-center"><marquee>Formulaire de modification</marquee></h1>
            </div>
            <br>
            <form method="POST" action="{{ route('update.projet', ['id' =>$projet->id]) }}" class="text-center">
                <div style="background:#B0C4DE;">
                @csrf
                <label for="">NOM</label>
                <br>
                <input type="text" required name="nom" value="{{$projet->nom}}" placeholder="Nom">
                <br>
                <br>
                <label for="">DESCRIPTION</label>
                <br>
                <input type="text" required name="description" value="{{$projet->description}}" placeholder="Description">
                <br>
                <br>
                <label for="">DATE DE DEBUT</label>
                <br>
                <input type="date" required name="date_debut" value="{{$projet->date_debut}}" placeholder="Date de debut">
                <br>
                <br>
                <label for="">DATE DE FIN</label>
                <br>
                <input type="date" required name="date_fin" value="{{$projet->date_fin}}" placeholder="Date de fin">
                <br>
                <br>
                <input type="submit" name="" value="Modifier">
                </div>
            </form>
        
        
       
    </body>
</html>