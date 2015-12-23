@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <style>
        ul.myErrorClass, input.myErrorClass, textarea.myErrorClass, select.myErrorClass {
            border-width: 1px !important;
            border-style: solid !important;
            border-color: #cc0000 !important;
            background-color: #f3d8d8 !important;
            background-image: url(http://goo.gl/GXVcmC) !important;
            background-position: 50% 50% !important;
            background-repeat: repeat !important;
        }
        ul.myErrorClass input {
            color: #666 !important;
        }
        label.myErrorClass {
            color: red;
            font-size: 11px;
            /*    font-style: italic;*/
            display: block;
        }
    </style>
@stop

<div class="form-group {{ $errors->has('house_code') ? 'has-error' : ''}}">
    {!! Form::label('house_code', 'House Code: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('house_code', null, ['class' => 'form-control', 'placeholder' => 'Please enter house code']) !!}
        {!! $errors->first('house_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lot_number') ? 'has-error' : ''}}">
    {!! Form::label('lot_number', 'Lot Number: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('lot_number', null, ['class' => 'form-control', 'placeholder' => 'Please enter lot number']) !!}
        {!! $errors->first('lot_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zip') ? 'has-error' : ''}}">
    {!! Form::label('zip', 'Zip: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Please enter zip']) !!}
        {!! $errors->first('zip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', 'City: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Please enter city']) !!}
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
    {!! Form::label('street', 'Street: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Please enter street']) !!}
        {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    {!! Form::label('number', 'Number: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Please enter number']) !!}
        {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tax_number') ? 'has-error' : ''}}">
    {!! Form::label('tax_number', 'Tax Number: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('tax_number', null, ['class' => 'form-control', 'placeholder' => 'Please enter tax number']) !!}
        {!! $errors->first('tax_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bank_list') || $errors->has('bank_list.0') ? 'has-error' : ''}}">
    {!! Form::label('bank_list', 'Banks: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('bank_list[]', $banks, null, ['class' => 'form-control', 'multiple']) !!}
        {!! $errors->first('bank_list', '<p class="help-block">The banks field is required.</p>') !!}
        {!! $errors->first('bank_list.0', '<p class="help-block">The banks field is required.</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('built') ? 'has-error' : ''}}">
    {!! Form::label('built', 'Built: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('built', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        {!! $errors->first('built', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date_from') ? 'has-error' : ''}}">
    {!! Form::label('date_from', 'Date From: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('date_from', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        {!! $errors->first('date_from', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date_to') ? 'has-error' : ''}}">
    {!! Form::label('date_to', 'Date To: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('date_to', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        {!! $errors->first('date_to', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript">
        $('select').select2({
            placeholder: "Please select from list"
        });

        $("form").validate({
            onkeyup: false,
            errorClass: "myErrorClass",

            //put error message behind each form element
            errorPlacement: function (error, element) {
                var elem = $(element);
                error.insertAfter(element);
            },

            //When there is an error normally you just add the class to the element.
            // But in the case of select2s you must add it to a UL to make it visible.
            // The select element, which would otherwise get the class, is hidden from
            // view.
            highlight: function (element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass("select2-offscreen")) {
                    $("#s2id_" + elem.attr("id") + " ul").addClass(errorClass);
                } else {
                    elem.addClass(errorClass);
                }
            },

            //When removing make the same adjustments as when adding
            unhighlight: function (element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass("select2-offscreen")) {
                    $("#s2id_" + elem.attr("id") + " ul").removeClass(errorClass);
                } else {
                    elem.removeClass(errorClass);
                }
            }
        });

        //If the change event fires we want to see if the form validates.
        //But we don't want to check before the form has been submitted by the user
        //initially.
        $(document).on("change", ".select2-offscreen", function () {
            if (!$.isEmptyObject(validobj.submitted)) {
                validobj.form();
            }
        });

        //A select2 visually resembles a textbox and a dropdown.  A textbox when
        //unselected (or searching) and a dropdown when selecting. This code makes
        //the dropdown portion reflect an error if the textbox portion has the
        //error class. If no error then it cleans itself up.
        $(document).on("select2-opening", function (arg) {
            var elem = $(arg.target);
            if ($("#s2id_" + elem.attr("id") + " ul").hasClass("myErrorClass")) {
                //jquery checks if the class exists before adding.
                $(".select2-drop ul").addClass("myErrorClass");
            } else {
                $(".select2-drop ul").removeClass("myErrorClass");
            }
        });
    </script>
@stop