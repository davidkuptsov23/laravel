@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
@stop

<div class="form-group {{ $errors->has('bank_name') ? 'has-error' : ''}}">
    {!! Form::label('bank_name', 'Bank Name: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('bank_name', null, ['class' => 'form-control', 'placeholder' => 'Please enter bank name']) !!}
        {!! $errors->first('bank_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bank_address') ? 'has-error' : ''}}">
    {!! Form::label('bank_address', 'Bank Address: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('bank_address', null, ['class' => 'form-control', 'placeholder' => 'Please enter bank address']) !!}
        {!! $errors->first('bank_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('account_number') ? 'has-error' : ''}}">
    {!! Form::label('account_number', 'Account Number: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('account_number', null, ['class' => 'form-control', 'placeholder' => 'Please enter account number']) !!}
        {!! $errors->first('account_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('account_types_id') ? 'has-error' : ''}}">
    {!! Form::label('account_types_id', 'Account Types Id: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('account_types_id', $accounttypes,null, ['class' => 'form-control', 'placeholder' => 'Please select from list']) !!}
        {!! $errors->first('account_types_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('house_list.0') ? 'has-error' : ''}}">
    {!! Form::label('house_list', 'Houses: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('house_list[]', $houses,null, ['class' => 'form-control', 'multiple']) !!}
        {!! $errors->first('house_list.0', '<p class="help-block">The houses field is required.</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('selenium') ? 'has-error' : ''}}">
    {!! Form::label('selenium', 'Selenium: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        <div class="checkbox">
            <label>{!! Form::radio('selenium', '1') !!} Yes</label>
            <label>{!! Form::radio('selenium', '0', true) !!} No</label>
        </div>
        {!! $errors->first('selenium', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script type="text/javascript">
        $('select').select2({
            placeholder: "Please select from list"
        });
    </script>
@stop