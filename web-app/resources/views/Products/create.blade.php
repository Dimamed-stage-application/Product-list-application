<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
  <h1>
     Create Product
  </h1>
  <div>
      @if($errors->any())
          <div>
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
          </div>
      @endif
  </div>
<form method="post" action="{{route('product.store')}}">
    @csrf
    @method('POST')
 <div>
     <label>Name</label>
     <input type="text" name="name" placeholder="Name"/>
     <label>price</label>
     <input type="number" step="1" name="price" placeholder="Price"/>
     <input type="text" name="ImageURL" placeholder="Image URL"/>
 </div>
  <div>
      <input type="submit" value="Save"/>
  </div>
</form>
</body>
</html>
