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
              <h3><b>&nbsp; Edit Category</b></h3>
                <div class="col-md-6">
                <form action="{{ route('admin..category.update', $category->id )}}" method="POST">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <input type="hidden" name="_method" value="PUT"> 
                    <div class="row form-row">
                      <div class="col-md-12 form-group {{ $errors->has('title') ? 'has-error' :  null }}">
                      <label for="" class="control-label"><b>Title</b></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}"
                        <span class="help-block">{{ $errors->first('title') }}</span>
                      </div>
                    </div>
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : null }}">
                    <label for="" class="control-label"><b>Status</b></label>
                        <select name="status" id="status" class="form-control">
                        	<option value="">:: Category Status ::</option>
                        	<option value="Active" {{ ($category->status == 'Active') ? 'selected=selected' : null }} >Active</option>
                        	<option value="Deactive" {{ ($category->status == 'Deactive') ? 'selected=selected' : null }} >Deactive</option>
                        </select>
                        <span class="help-block">{{ $errors->first('status') }}</span>
                    </div>
                </div>
              </div>
                <div class="form-group">
                    <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-edit"></i> Edit Category </button>
                </div>
                </form>
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