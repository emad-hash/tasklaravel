<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Add Books</title>
</head>
<body>
    <div class="w-25 d-flex justify-content-center">
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Book Title</label>
              <input type="text" name="book_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div> 
             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Book Description</label>
              <input type="text" name="book_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>   
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Book Author</label>
              <input name="book_author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Book Image</label>
              <input type="file" name="book_image" class="form-control" id="book_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>