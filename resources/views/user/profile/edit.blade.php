@extends ('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))

        <div  class="alert alert-success"  role="alert">

            {{  session('message')  }}
        </div>

    @endif
    @foreach($users as $user)
        @if($user->id == Auth::user()->id)
                <form action="{{ route('user.profile.update', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" type="text"
                           placeholder="{{ $user->name }}" autocomplete="off" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Email" autocomplete="off" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" autocomplete="off" value="{{ $user->password }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>







        @endif
    @endforeach
@endsection
