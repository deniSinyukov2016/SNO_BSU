{{--Вывод поиска--}}
{!! Form::open(array('method' => 'get','class' => 'navbar-form navbar-left')) !!}
<div class="input-group">
    {{ csrf_field() }}
    {!! Form::text('username', null,['class' => 'form-control', 'placeholder'=> 'Введите строку для поиска']) !!}
    <div class="input-group-btn">
        {!! Form::button('<i class="glyphicon glyphicon-search"></i>',['class' => 'btn btn-default']) !!}
    </div>


</div>
{!! Form::close() !!}
{{--<form class="navbar-form navbar-left">--}}
    {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control" placeholder="Search">--}}
        {{--<div class="input-group-btn">--}}
            {{--<button class="btn btn-default" type="submit">--}}
                {{--<i class="glyphicon glyphicon-search"></i>--}}
            {{--</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}