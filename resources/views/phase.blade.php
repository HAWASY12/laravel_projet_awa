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
    <body  style="background:#F0F8FF;"> 
    <div class="container">
        <div class="card-header">
        <div style="background:#B0C4DE; border-radius:5px;padding:5px">
                <h1 style="background:#B0C4DE"; class="text-center"><marquee>Formulaire Ajout Phase</marquee></h1>
            </div>
            <br>
            <form method="POST" action="{{route('store.phase')}}" class="text-center">
                <div style="background:#B0C4DE;" class="text-center">
                @csrf
            
                <input type="hidden" name="id" value="{{$id}}">

                <label for="">Nom</label>
                <br>
                <input type="text" required name="nom" placeholder="Nom">
                <br>
                <br>
                <label for="">Duree</label>
                <br>
                <input type="number"required  name="duree" placeholder="duree">
                <br>
                <br>
                <label for="">Priorite</label>
                <br>
                <input type="text" required name="priorite" placeholder="priorite">
                <br>
                <br>
                <input type="submit" name="" value="Ajouter">
                </div>
            </form>
        
        
       
    </body>
</html>