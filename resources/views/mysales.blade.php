@extends('layouts.layout')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                         Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">My Sales</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <label class="control-label"><h4>Login as <span style="color: red">{{ Auth::user()->email }}</span></h4></label>
            </div>
        </div>
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <label class="control-label"><h3>User Id Sales Page (user id = <span style="color: red">{{ Auth::user()->id }}</span>)</h3></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-cursor font-purple-intense hide"></i>
                            <span class="caption-subject font-purple-intense bold uppercase">Your Sales List</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet box grey-cascade">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>Part List Table
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form action="{{ url('/sales') }}" method="POST">
                                            {{ csrf_field() }}
                                            <table class="table table-striped table-bordered table-hover" id="sample_1" class="part_table">
                                                <thead>
                                                    <tr>
                                                        @if ( Auth::user()->type == "Admin")
                                                        <th>User</th>
                                                        @endif
                                                        <th>Part name</th>
                                                        <th>Item Info</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                @if ( Auth::user()->type == "User")
                                                @foreach($parts as $part)
                                                <tr class="odd gradeX">
                                                    <td>{{ $part->partname }}</td>
                                                    <td>{{ $part->item_info}}</td>
                                                    <td>{{ $part->brand }}</td>
                                                    <td>{{ $part->model }}</td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                @if ( Auth::user()->type == "Admin")
                                                @foreach($admins as $admin)
                                                <tr class="odd gradeX">
                                                    <td>{{ $admin->username }}</td>
                                                    <td>{{ $admin->partname }}</td>
                                                    <td>{{ $admin->item_info}}</td>
                                                    <td>{{ $admin->brand }}</td>
                                                    <td>{{ $admin->model }}</td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                            </table>
                                        </form>
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

@endsection
