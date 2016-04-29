@extends('admin.layouts.master')

@section('content')
        
<div class="page-content"> 
    <div class="content">
        <div class="col-md-14">
                    <h2><b>Manage Category</b></h2>
            
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('admin..category.create') }}" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>                        
                    <br>
                       <table class="table table-bordered table-hover">
                       @if(count($categories))
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </th>
                                <th style="width:30%">Title</th>
                                <th style="width:10%">Id</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Sms(s)</th>
                                <th style="width:10%">Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($categories as $category)
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="chkParamId" name="chkParamId[]" class="checkboxesParamId" type="checkbox" value="">
                                        <label for="chkParamId"></label>
                                    </div>
                                </td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->status }}</td>
                                <td>{{ $category->sms->count() }}</td>
                                <td>
                                <form action="{{ route('admin..category.destroy', $category->id) }}" method="POST">
                                <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('admin..category.edit', $category->id) }}" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <button class="label btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>    
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                    <a href="{{ route('admin..category.create') }}"><button class="btn btn-primary">Add new category</button></a>
                    @endif
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>

@endsection