@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Измненить Имя Пользователя</div>

                <div class="card-body">
                    {!!  Form::open([ 'url' => 'update'])  !!} 
                        <div class="form-group row">
                            {!! Form::label('name', 'Имя:', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => $user->name, 'autofocus' ]) !!}
                                {!! Form::hidden('userId', $user->id, null) !!}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Сохранить', ['class' => 'btn btn-primary ']) !!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection