@extends('layouts.main')
@section('content')
<div class="site-section" id="section-how-it-works">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 col-lg-4 mb-lg-0 " data-aos="fade" data-aos-delay="300">
                <form method="POST" class="p-5 bg-blue" action="{{ route('all.players.store') }}">
                    @csrf
                    {!! Form::hidden('data', json_encode($data)) !!}
                    {!! Form::hidden('leader', json_encode($leader)) !!}
                    <div class="row form-group">
                        <div class="col-md-12 col-lg-12">
                            <div class="b-pass">
                                <label class="text-grey"><b>Введите имя нового игрока</b></label>
                                <p>Первый добавленный игрок загадывает ассоциацию!</p>
                                <input id="add_name" type="text" class="form-control" name="add_name" value="{{ old('add_name') }}">
                            </div>
                            <div class="l-pass">
                                <input id="plus" readonly onclick="AddPlayer();" class="plus form-control">
                            </div>
                            @error('add_name')
                            <p class='text-danger'> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div id="name_pattern" class="hide">
                        <div id="name_0" class="row form-group">
                            <div class="col-md-12">
                                <div class="b-pass">
                                    <input type="text" class="form-control" name="name[]" readonly>
                                </div>
                                <div class="l-pass">
                                    <input id="delete" readonly class="delete form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id ='all_names'></div>

                    <div class="row justify-content-center">
                        <input type="submit" value="Вперед" class="btn btn-primary bg-primary py-2 px-4 text-white">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection