@extends('layouts.main')
@section('content')
<div class="site-section" id="section-how-it-works">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 col-lg-4 mb-lg-0 " data-aos="fade" data-aos-delay="300">
                <form id='endround' method="POST" hidden class="p-5 bg-blue" action="{{ route('all.players.store') }}">
                    @csrf
                    {!! Form::hidden('data', json_encode($data)) !!}
                    {!! Form::hidden('leader', json_encode($leader)) !!}
                    {!! Form::hidden('current', json_encode($current)) !!}
                    {!! Form::hidden('topic_players', json_encode($topic_players)) !!}
                    <div class="row form-group">
                        <div class="col-md-12 col-lg-12">
                            <h3 class="text-center mb-4">Переходите к обсуждению и голосованию!</h3>
                            <div class="row justify-content-center">
                                <input type="submit" onclick="ShowCard();" value="Следующий раунд" class="btn btn-primary bg-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box_holder">
                    <div class="front">
                        <form class="p-5 bg-blue">
                            <div class="row form-group">
                                <div class="col-md-12 col-lg-12">
                                    <h3 id='name' class="text-center mb-4"></h3>
                                    <div class="row justify-content-center">
                                        <input type="button" onclick="ShowCard();" value="Показать" class="btn btn-primary bg-primary py-2 px-4 text-white">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="back">
                        <form class="p-5 bg-green">
                            <div class="row form-group">
                                <div class="col-md-12 col-lg-12">
                                    <h3 id='topic' class="text-center text-green mb-4"></h3>
                                    <div class="row justify-content-center">
                                        <input type="button" value="Понятно" onclick="Ok();" class="btn btn-primary bg-primary py-2 px-4 text-white">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection