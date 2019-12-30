@extends ('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li><br>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="mt-5">Products</h1>


       <div class="form-group">
           <form action="{{route('products.store')}}"  enctype="multipart/form-data" method="post">
               @csrf
               Name: <input class="form-control" type="text" name="name"><br>
               Price: <input class="form-control" type="number" name="price"><br>
               Image Preview: <input class="form-control-file" type="file" name="image" accept="image/png, image/jpeg, image/jpg" required><br>
               <br> <button type="submit">Submit</button>
           </form>
       </div>

@endsection
