{{--Вывод поиска--}}
{!! Form::open(array('method' => 'get','class' => 'form-inline pull-xs-right pull-right')) !!}
    {{ csrf_field() }}
    {!! Form::text('username', null,['class' => 'form-control', 'placeholder'=> 'Введите строку для поиска']) !!}
    {!! Form::button('Поиск',['class' => 'btn btn-success-outline']) !!}
{!! Form::close() !!}