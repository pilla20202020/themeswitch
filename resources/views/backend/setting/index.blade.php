@extends('backend.layouts.admin.admin')

@section('title', 'Setting')

@section('content')
    <section>
        {{ Form::open(['route'=>'setting.update','class'=>'form form-validate','method'=>'PUT','files'=>true,'novalidate']) }}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <header>General Settings</header>
                        <div class="tools">
                            <input type="submit" class="btn btn-primary" value="Save All">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>Theme Template</header>
                                </div>
                                <div class="card-body tab-content">
                                    <div class="tab-pane active">
                                        <div class="form-group">
                                            {{ Form::text('setting[title]', old('setting.title') ?: setting('title'), ['class'=>'form-control','required']) }}
                                            {{ Form::label('setting[title]', 'title') }}
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-radio">
                                                <input type="radio" id="theme1" value="theme1" name="setting[theme]"
                                                     class="custom-control-input" @if($theme->value == "theme1") checked @endif > 
                                                     
                                                <label class="custom-control-label"
                                                    for="theme1">Theme 1</label>
                                            </div>

                                            <div class="custom-radio">
                                                <input type="radio" id="theme2" value="theme2" name="setting[theme]"
                                                    class="custom-control-input" @if($theme->value == "theme2") checked @endif >
                                                <label class="custom-control-label"
                                                    for="theme2">Theme 2</label>
                                            </div>
                                        
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
           
        </div>
        </div>
        {{ Form::close() }}
    </section>
@stop

@push('styles')
    <link href="{{ asset('css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/libs/dropify/dropify.min.js') }}"></script>
@endpush
