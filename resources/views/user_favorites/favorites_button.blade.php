    @if (Auth::user()->is_favoritings($micropost->id))
        {!! Form::open(['route' => ['user.unfavorites', $micropost->id], 'method' => 'delete']) !!}
           
            {!! Form::submit('Unfavorite', ['class' => 'btn btn-info btn-xs']) !!}
                  
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorites', $micropost->id]]) !!}
         {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
                    {!! Form::close() !!}
    @endif




