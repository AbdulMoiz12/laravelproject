@extends('admin.layouts.master')

@section('content')
        
<div class="page-content"> 
    <div class="content">
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <h4>Manage Sms</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('admin..sms.create') }}" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>                        
                    <br>
                       @if(count($sms))
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </th>
                                <th style="width:40%">Title</th>
                                <th style="width:10%">Category</th>
                                <th style="width:10%">Sms</th>
                                <th style="width:10%">Views</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sms as $msg)
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="chkParamId" name="chkParamId[]" class="checkboxesParamId" type="checkbox" value="">
                                        <label for="chkParamId"></label>
                                    </div>
                                </td>
                                <td>{{ $msg->title }}</td>
                                <td>{{ $msg->Category->title }}</td>
                                <td>{{ $msg->sms_content }}</td>
                                <td>{{ $msg->views }}</td>
                                <td>{{ $msg->status }}</td>
                                <td>
                                    <form action="{{ route('admin..sms.destroy', $msg->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('admin..sms.edit', $msg->id) }}" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>
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
                    <a href="{{ route('admin..sms.create') }}"><button class="btn btn-primary">Add Sms</button></a>
                    @endif
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>

@endsection