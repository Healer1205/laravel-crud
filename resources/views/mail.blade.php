@extends('layouts.layout')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
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
                    <a href="#">Mail</a>
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
                        <div class="caption">
                            <i class="icon-cursor font-purple-intense hide"></i>
                            <span class="caption-subject font-purple-intense bold uppercase">Mail List</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet box grey-cascade">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>Mail List Table
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form action="{{ url('/sales') }}" method="POST">
                                            {{ csrf_field() }}
                                            <table class="table table-striped table-bordered table-hover" id="sample_1" class="part_table">
                                                <thead>
                                                    <tr>
                                                        <th>Receivers</th>
                                                        <th>Mail content</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mails as $mail)
                                                    <tr>
                                                        <td>To all users</td>
                                                        <td>{{ $mail->message }}</td>
                                                    </tr>
                                                    @endforeach
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
