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
                    <a href="#">Admin Setting</a>
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
                            <span class="caption-subject font-purple-intense bold uppercase">User List</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" name="send_msg" id="send_msg" data-toggle="modal" data-target="#send">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div class="portlet box grey-cascade">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>User List Table
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1" class="part_table">
                                            <thead>
                                                <tr>
                                                    <th>user name</th>
                                                    <th>Last name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Postal Code</th>
                                                    <th>City</th>
                                                    <th>Country</th>
                                                    <th>Tel</th>
                                                    <th>Whatsapp</th>
                                                    <th>Company Name</th>
                                                    <th>Company Register Nr</th>
                                                    <th>Tax_nr</th>
                                                    <th>Bank Account Nr</th>
                                                    <th>Bank Account Receiver Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $part)
                                                <tr class="odd gradeX">
                                                    <td>{{ $part->name }}</td>
                                                    <td>{{ $part->last_name }}</td>
                                                    <td>{{ $part->email }}</td>
                                                    <td>{{ $part->address }}</td>
                                                    <td>{{ $part->postal_code }}</td>
                                                    <td>{{ $part->city }}</td>
                                                    <td>{{ $part->country }}</td>
                                                    <td>{{ $part->tel }}</td>
                                                    <td>{{ $part->whatsapp }}</td>
                                                    <td>{{ $part->company_name }}</td>
                                                    <td>{{ $part->company_register_nr }}</td>
                                                    <td>{{ $part->tax_nr }}</td>
                                                    <td>{{ $part->bank_account_nr }}</td>
                                                    <td>{{ $part->bank_account_receiver_name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

<div class="modal fade" id="send" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Send Message</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="add_form" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea type="text" class="form-control" name="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group row" align="center">
                        <input type="hidden" name="action" id="action" value="Send" />
                        <button type="button" class="btn default" data-dismiss="modal">Back</button>
                        <button type="submit" class="btn blue" name="submit_button" id="submit_button">Send</button>
                    </div>
                </form>
            </div>
        <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>

<script src="{{ asset('plugins/jquery.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
       // $('#add').click(function() {
       //      $('#add_part').modal(true);
       // });
       $('#add_form').on('submit', function(event){
        event.preventDefault();
        var action_url = '';

        if ($('#action').val() == 'Send') {
            action_url = "{{ url('/message') }}";
        }
        $.ajax({
            url: action_url,
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(data)
            {
                console.log('success');
            }
        });
       });
    });
</script>

@endsection
