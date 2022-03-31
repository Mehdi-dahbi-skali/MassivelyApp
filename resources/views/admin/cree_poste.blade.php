<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>cree poste</h1>
    <form method="POST" action=" {{route('cree_poste')}} " enctype="multipart/form-data" >
        @csrf
        <input type="text" name="date">
        <input type="text" name="title">
        <textarea name="resume"cols="30" rows="10"></textarea>
        <br><br><br>
        <label for="avatar">Choose a profile picture:</label>
 
        <input type="file"
            id="image" name="image"
            accept="image/png, image/jpeg"><br><br>
 
        <button>CREE</button>
    </form>
</body>
</html>