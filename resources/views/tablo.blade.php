<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bloglar</title>
</head>
<body>
    <div class="container mt-2">
    
        <div class="row">
            <h1 class="text-center">Bloglar</h1>
            <div class="col-md-12 mt-5">
                <div class="mb-3"><a href="{{route('insert')}}" class="btn btn-info">Ekle</a></div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Blog Baslik</th>
            <th scope="col">Blog İçerik</th>
            <th scope="col">Blog Sıra</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blog_tablosu as $item)  
          <tr>
             
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->blog_title}}</td>
            <td>{{$item->blog_content}}</td>
            <td>{{$item->blog_must}}</td>
            <td class="text-end"><a href="{{route('updateitem', ["id" => $item->id])}}" class="btn btn-primary">Guncelleme</a></td>
            <td class="text-end"><a  href="{{route('deleteitem', ["id" => $item->id])}}" class="btn btn-danger">Sil</a></td>
        
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
</div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>