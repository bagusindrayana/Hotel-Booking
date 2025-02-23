@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.bookings.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.bookings.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    
                    {!! Form::label('customer_id', trans('quickadmin.bookings.fields.customer').' *', ['class' => 'control-label']) !!}
                    {!! Form::select('customer_id', $customers, old('customer_id'), ['class' => 'form-control select2']) !!}
                    <input type="checkbox" id="add-new-costomer" name="new_customer"> <label for="add-new-costomer"> Add New Customer</label>
                    <p class="help-block"></p>
                    @if($errors->has('customer_id'))
                        <p class="help-block">
                            {{ $errors->first('customer_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row" id="add-new-costomer-form" style="display: none;">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Customer
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('first_name', trans('quickadmin.customers.fields.first-name').'*', ['class' => 'control-label']) !!}
                                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '','disabled' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('first_name'))
                                        <p class="help-block">
                                            {{ $errors->first('first_name') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('last_name', trans('quickadmin.customers.fields.last-name').'*', ['class' => 'control-label']) !!}
                                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '','disabled' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('last_name'))
                                        <p class="help-block">
                                            {{ $errors->first('last_name') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('address', trans('quickadmin.customers.fields.address').'*', ['class' => 'control-label']) !!}
                                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '','disabled' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('address'))
                                        <p class="help-block">
                                            {{ $errors->first('address') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('phone', trans('quickadmin.customers.fields.phone').'', ['class' => 'control-label']) !!}
                                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '','disabled' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('phone'))
                                        <p class="help-block">
                                            {{ $errors->first('phone') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('email', trans('quickadmin.customers.fields.email').'*', ['class' => 'control-label']) !!}
                                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '','disabled' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('email'))
                                        <p class="help-block">
                                            {{ $errors->first('email') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('room_id', trans('quickadmin.bookings.fields.room').'', ['class' => 'control-label']) !!}
                    {!! Form::select('room_id', $rooms, old('room_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('room_id'))
                        <p class="help-block">
                            {{ $errors->first('room_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time_from', trans('quickadmin.bookings.fields.time-from').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_from', old('time_from'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_from'))
                        <p class="help-block">
                            {{ $errors->first('time_from') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time_to', trans('quickadmin.bookings.fields.time-to').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_to', old('time_to'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_to'))
                        <p class="help-block">
                            {{ $errors->first('time_to') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('additional_information', trans('quickadmin.bookings.fields.additional-information').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('additional_information', old('additional_information'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('additional_information'))
                        <p class="help-block">
                            {{ $errors->first('additional_information') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Precio',trans('quickadmin.bookings.fields.amount').'*') !!}
                    {!! Form::text('amount', old('amount'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('additional_information'))
                        <p class="help-block">
                            {{ $errors->first('additional_information') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker').datetimepicker({
            format: "YYYY-MM-DD HH:mm"
        });

        $(document).ready(function(){
            $("#add-new-costomer").click(function(){
                $("#add-new-costomer-form").toggle();
                if($(this).is(":checked")){
                    $("#add-new-costomer-form").find("input").prop("disabled", false);
                    $("#customer_id").prop("disabled", true);
                } else {
                    $("#add-new-costomer-form").find("input").prop("disabled", true);
                    $("#customer_id").prop("disabled", false);
                }
            });
        });
    </script>
@stop