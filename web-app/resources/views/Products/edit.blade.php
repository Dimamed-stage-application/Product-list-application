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
<form method="post" action="{{route('product.update', ['product' => $product])}}">
    @csrf
    @method('put')
 <div>
     <label>Name</label>
     <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
     <label>price</label>
     <input type="number" step="1" name="price" placeholder="Price" value="{{$product->price}}"/>
     <input type="text" name="ImageURL" placeholder="Image URL" value="{{$product->ImageURL}}"/>
 </div>
  <div>
      <input type="submit" value="Update"/>
  </div>
</form>
</body>
</html>
