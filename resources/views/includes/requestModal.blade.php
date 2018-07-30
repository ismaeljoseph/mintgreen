<div class="modal fade" id="myRequest" tabindex="-1" role="dialog" aria-labelledby="myRequestLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myRequestLabel">Request a Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(array('url' => 'requests/store', 'class' => 'request-form')) !!}
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4 offset-sm-2">
              {!! Form::text('requests_first_name', old('requests_first_name'), array('class'=>'form-control', 'placeholder' => 'First Name')) !!}
            </div>
            <div class="col-sm-4">
              {!! Form::text('requests_last_name', old('requests_last_name'), array('class'=>'form-control', 'placeholder' => 'Last Name')) !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-sm-4 offset-sm-2">
              {!! Form::email('requests_email', old('requests_email'), array('class'=>'form-control', 'placeholder' => 'E-mail')) !!}
            </div>
            <div class="col-sm-4">
              {!! Form::text('requests_phone', old('requests_phone'), array('class'=>'form-control', 'placeholder' => 'Phone')) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4 offset-sm-2">
              <select class="" name="">
              @foreach(Khsing\World\World::Countries() as $country)
                <option value="{{ $country->code }}">{{ $country->emoji }} {{ $country->name }}</option>
              @endforeach
            </select>
              {!! Form::text('requests_country', old('requests_country'), array('class'=>'form-control', 'placeholder' => 'Country')) !!}
            </div>
            <p class="test2">test2</p>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-8 offset-sm-2">
              {!! Form::text('requests_address_line_1', old('requests_address_line_1'), array('class'=>'form-control', 'placeholder' => 'Address Line 1')) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-8 offset-sm-2">
              {!! Form::text('requests_address_line_2', old('requests_address_line_2'), array('class'=>'form-control', 'placeholder' => 'Address Line 2')) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3 offset-sm-2">
              {!! Form::text('requests_city', old('requests_city'), array('class'=>'form-control', 'placeholder' => 'City')) !!}
            </div>
            <div class="col-sm-3">
              {!! Form::text('requests_province', old('requests_province'), array('class'=>'form-control', 'placeholder' => 'Province / State')) !!}
            </div>
            <div class="col-sm-2">
              {!! Form::text('requests_postal', old('requests_postal'), array('class'=>'form-control', 'placeholder' => 'Postal / ZIP')) !!}
            </div>
          </div>
        </div>
        {{--<div class="form-group">
          <div class="row">
            <div class="col-sm-4 offset-sm-2">
              {!! Form::select('product_id', $product, old('product_id'), array('class'=>'form-control', 'placeholder' => 'Choose your model')) !!}
            </div>
          </div>
        </div>
        --}}
        <div class="form-group">
          <div class="row">
            {!! Form::label('requests_comment', 'Additional comments to help us with your request', array('class'=>'col-sm-5 offset-sm-2 control-label')) !!}
            <div class="col-sm-5 offset-sm-2">
              {!! Form::textarea('requests_comment', old('requests_comment'), array('class'=>'form-control', 'rows'=>'4')) !!}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit( 'Submit' , array('class' => 'btn btn-primary')) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
