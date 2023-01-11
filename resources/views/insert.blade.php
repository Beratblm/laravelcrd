<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center">Blog Ekle</h1>
         @if(session()->has("status"))
   
         <div id="removeElement" class="alert alert-success">{{session("status")}}</div>    
 
         @endif
        @if($errors->all())
         <div class="bg-danger mb-3 rounded" id="removeElement">
              <ul>
                @foreach($errors->all() as $error)
                   
                <li class="text-white">{{$error}}</li>
                     
                @endforeach
              </ul>
         </div>
       @endif
    <form method="POST" action="{{route('insertpost')}}">
        <div class="mb-3"><a class="btn btn-info" href="{{route('table')}}">Bloglar</a></div>
        
        @csrf
       
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Blog Başlık</label>
          <input type="text" class="form-control" name="blog_title" id="exampleInputEmail1" aria-describedby="emailHelp">
    
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Blog içerik</label>
          <input type="text" class="form-control" name="blog_content" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
           <label for="" class="form-label">Blog Sıra</label>
          <input type="number" name="blog_must" class="form-control" id="exampleCheck1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </div>
</div>

<script>
    $(document).ready(function(){
        element = $("#removeElement");
        setTimeout(() => {
        element.remove();
      }, 6000);
    });
</script>


</body>
</html>