<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteka</title>
    <style>
        body{
            background-color:darkblue;
            color: white;
        }
        input{
            color: darkblue;
            width: 250px;
            height: 25px;
            font-size: 18px;
            font-style: bold; 
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h2>Biblioteka</h2>

    <form method="get" action="addBook">
        <label for="name">Nazwa książki:</label><br>
        <input type="text" name="name" id="name" value="{{old('name')}}" autofocus>
        @error('name')
            {{$message}}
        @enderror

        <br><br>

        <label for="author">Autor książki:</label><br>
        <input type="text" name="author" id="author" value="{{old('author')}}">
        @error('author')
            {{$message}}
        @enderror

        <br><br>

        <label for="pages">Ilość stron:</label><br>
        <input type="text" name="pages" id="pages" value="{{old('pages')}}">
        @error('pages')
            {{$message}}
        @enderror

        <br><br>

        <input type="submit" value="Dodaj książkę">
    </form>
</body>
</html>