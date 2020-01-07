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
                    <a href="#">Add Part</a>
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
                            <span class="caption-subject font-purple-intense bold uppercase">General Stats</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if ( Auth::user()->type == "Admin")
                            	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_part" name="add" id="add">Add part</button>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="portlet box grey-cascade">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>Part List Table
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1" class="part_table">
                                            <thead>
                                                <tr>
                                                    <th>Part name</th>
                                                    <th>Part no</th>
                                                    <th>Qty in stock</th>
                                                    <th>Tested</th>
                                                    <th>Item Info</th>
                                                    <th>Condition</th>
                                                    <th>Price</th>
                                                    <th>Photo</th>
                                                    <th>Saler ID</th>
                                                    <th>ADD & SAVE</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            @foreach($parts as $part)
                                            <tr class="odd gradeX">
                                                <td>{{ $part->part_name }}</td>
                                                <td>{{ $part->part_no }}</td>
                                                <td>{{ $part->Qty_in_stock }}</td>
                                                <td>{{ $part->tested }}</td>
                                                <td>{{ $part->item_info }}</td>
                                                <td>{{ $part->condition }}</td>
                                                <td>{{ $part->price}}</td>
                                                <td>
                                                    <div>
                                                        <img alt="" class="img-circle" src='img/{{$part->photo}}'/>                                                        
                                                    </div>
                                                </td>
                                                <td>{{ $part->saler_id }}</td>
                                                <td>{{ $part->add_save }}</td>
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

<div class="modal fade" id="add_part" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Part</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="add_form" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="part_name" class="col-md-3 control-label">Part Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="part_name" id="part_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="part_no" class="col-md-3 control-label">Part No</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="part_no" id="part_no">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty_in_stock" class="col-md-3 control-label">Qty in stock</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="qty_in_stock" id="qty_in_stock">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tested" class="col-md-3 control-label">Tested</label>
                        <div class="col-md-9">
                            <select class="form-control" id="tested" name="tested">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_info" class="col-md-3 control-label">Item Info</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="item_info" id="item_info">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="condition" class="col-md-3 control-label">Condition</label>
                        <div class="col-md-9">
                            <select class="form-control" id="condition" name="condition">
                                <option>NEW Original</option>
                                <option>New Copy</option>
                                <option>Grade A</option>
                                <option>Grade B</option>
                                <option>Grade C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand" class="col-md-3 control-label">Brand</label>
                        <div class="col-md-9">
                            <select class="form-control" name="brand" id="brand">
                                @foreach($brands as $part)
                                <option>{{ $part->brand }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="model" class="col-md-3 control-label">Model</label>
                        <div class="col-md-9">
                            <select class="form-control" name="model" id="model">
                                @foreach($models as $part)
                                <option>{{ $part->model }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 control-label">Category</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category" id="category">
                                @foreach($categorys as $part)
                                <option>{{ $part->part_category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-md-3 control-label">Photo</label>
                        <div class="col-md-9">
                            <input type="file" class="custom-file-input" name="photo" id="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saler_id" class="col-md-3 control-label">Saler ID</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="ADMIN  {{ Auth::user()->id }}" disabled="true">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="add_save" class="col-md-3 control-label">Add & Save</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="add_save" id="add_save">
                        </div>
                    </div> -->
                    <div class="form-group row" align="center">
                        <input type="hidden" name="action" id="action" value="Add" />
                        <button type="button" class="btn default" data-dismiss="modal">Back</button>
                        <button type="submit" class="btn blue" name="submit_button" id="submit_button">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
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

       $('#brand').change(function (){
        alert('sss');
        $.ajax({
            url: "{{ url('/selectbrand') }}",
            method: "GET",
            data: {'brand': $('#brand option:selected').text()},
            dataType: "json",
            success: function(data)
            {
                var modelnames = getUnique(data);
                
                $('#model option').remove();
                var option = '';
                for (var i = 0; i < modelnames.length; i++) {
                    option = '<option>' + modelnames[i].model + '</option>';
                    $('#model').append(option);
                }
            }
        });
       });

       $('#add_form').on('submit', function(event){
        event.preventDefault();
        var action_url = '';

        if ($('#action').val() == 'Add') {
            action_url = "{{ url('/part') }}";
        }
        $.ajax({
            url: action_url,
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(data)
            {
                var html = '';
                if(data.errors)
                {
                    html = '<div class="alert alert-danger">';
                    for(var count = 0; count < data.errors.length; count++){
                        html += '<p>' + data.errors[count] + '</p>';
                    }
                    html += '</div>';
                }
                if (data.success) {
                    html += '<div class="alert alert-success">' + data.success + '</div>';
                    $('#add_form')[0].reset();
                    $('.part_table').DataTable().ajax.reload();
                    $('#add_form').modal("show").on('hide', function() {
                        $('#add_form').modal('hide');
                    }
                }
                $('#form_result').html(html);
            }
        });
       });
    });
</script>

@endsection
