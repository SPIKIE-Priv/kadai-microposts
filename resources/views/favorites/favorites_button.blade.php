@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_favorite($user->id))
        {!! Form::open(['route' => ['user.unFavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.addFavorite', $user->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-info btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif