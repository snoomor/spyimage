@extends('layouts.main')
@section('content')
<div class="site-section" id="section-how-it-works">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 col-lg-4 mb-lg-0 " data-aos="fade" data-aos-delay="300">
                <form class="p-5 bg-blue" action="{{ route('create.topic.store') }}" method="POST">
                    {!! Form::hidden('data', json_encode($data)) !!}
                    {!! Form::hidden('leader', json_encode($leader)) !!}
                    <div class="row form-group">
                        <div class="col-md-12 col-lg-12">
                            <h3>{{$data[$leader]}}</h3>
                            <label class="text-grey"><b>Введите ассоциацию</b></label>
                            <input id="topic" type="text" class="form-control" name="topic">
                            @error('topic')
                            <p class='text-danger'> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" value="Вперед" class="btn btn-primary bg-primary py-2 px-4 text-white">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection