<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
 <h1>
    Products
 </h1>
 <div>
     @if(session()->has('success'))
         <div>
             {{session('success')}}
         </div>
     @endif
 </div>
 <div>
     add new product <a href="{{route('product.create')}}">create a product </a>
 </div>

 <div>
     <table border="1">
         <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>

         </tr>
         @foreach($products as $product)
             <tr>
                 <td>{{$product->id}}</td>
                 <td>{{$product->name}}</td>
                 <td>{{$product->price}}</td>
                 <td><img src="{{$product->ImageURL}}" alt="{{$product->name}}" width="100"/></td>
                 <td>
                     <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                 </td>
                 <td>
                     <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                     @csrf
                        @method('delete')
                         <input type="submit" value="Delete"/>
                     </form>
                 </td>
             </tr>
         @endforeach
     </table>
 </div>

</body>
</html>


