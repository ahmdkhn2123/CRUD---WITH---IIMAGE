<html>
<head>
    <title>Image Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<h1 class="mt-3 text-center">Update below</h1>
<div class="container">
    <form action="/update/{{$data['id']}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value={{$data['name']}} >
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="text" class="form-control" name="age" value={{$data['age']}} >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>