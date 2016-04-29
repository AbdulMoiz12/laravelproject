@extends('admin.layouts.master')

      @section('content')
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="page-content"> 
    <div class="content">
        <div class="col-md-14">
              <div class="grid simple">                
                <div class="grid-body no-border">
                  <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
              <h3><b>&nbsp; Add Category</b></h3>
                <div class="col-md-6">
                {{ Form::open(['route' => 'admin..category.store', 'method' => 'POST']) }}
                    <div class="row form-row">
                      <div class="col-md-12 form-group {{ $errors->has('title') ? 'has-error' :  null }}">
                      <label for="" class="control-label"><b>Title</b></label>
                        {{ Form::text('title', null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('title') }}</span>
                      </div>
                    </div>
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : null }}">
                    <label for="" class="control-label"><b>Status</b></label>
                        {{ Form::select('status', ['' => ':: Category Status', 'Active' => 'Active', 'Deactive' => 'Deactive'], null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('status') }}</span>
                    </div>
                </div>
              </div>
                <div class="form-group">
                    <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                </div>
                {{ Form::close() }}
            </div>
          </div>
      
        </div>
      </div>
                </div>
              </div>
        </div>

      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>

  @endsection