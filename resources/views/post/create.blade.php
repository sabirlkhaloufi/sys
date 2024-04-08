<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


 </head>
 <body>


    <div class="container">
        <h1>Add New POST</h1>

        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="titre">titre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>



            <div class="form-group">
                <label for="localisation">Address</label>
                <input type="text" class="form-control" id="localisation" name="localisation">
            </div>

            <button type="submit" class="btn btn-primary">Add post</button>
        </form>
    </div>


</body>
</html>
