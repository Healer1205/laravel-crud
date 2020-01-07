<?php $__env->startSection('content'); ?>

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
                    <a href="#">Search Part</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <label class="control-label"><h4>Login as <span style="color: red"><?php echo e(Auth::user()->email); ?></span></h4></label>
            </div>
        </div>
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Search for Swap Part
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <form action="<?php echo e(url('/result')); ?>" class="form-horizontal" method="GET">
                                <label class="control-lable col-md-1" style="width: 8%"><h4>Select Brand</h4></label>
                                <div class="col-md-1">
                                <select class="form-control" id="brand">
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($part->brand); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>
                                <label class="control-lable col-md-1" style="width: 10%"><h4>Select Model</h4></label>
                                <div class="col-md-1">
                                    <select class="form-control" id="model">
                                        <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option><?php echo e($part->model); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <label class="control-lable col-md-1" style="width: 10%"><h4>Select Category</h4></label>
                                <div class="col-md-1">
                                    <select class="form-control" id="category">
                                        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option><?php echo e($part->part_category); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-circle blue" id="search">Search</button>
                                </div>
                            </form>
                        </div>
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
                            <span class="caption-subject font-purple-intense bold uppercase">General Stats</span>
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
                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo e($part->part_name); ?></td>
                                                    <td><?php echo e($part->part_no); ?></td>
                                                    <td><?php echo e($part->Qty_in_stock); ?></td>
                                                    <td><?php echo e($part->tested); ?></td>
                                                    <td><?php echo e($part->item_info); ?></td>
                                                    <td><?php echo e($part->condition); ?></td>
                                                    <td><?php echo e($part->price); ?></td>
                                                    <td><?php echo e($part->photo); ?></td>
                                                    <td><?php echo e($part->saler_id); ?></td>
                                                    <td><?php echo e($part->add_save); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script src="<?php echo e(asset('plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script>

    function getUnique(array){
            var uniqueArray = [];
            
            // Loop through array values
            for(var value of array){
                if(uniqueArray.indexOf(value) === -1){
                    uniqueArray.push(value);
                }
            }

            return uniqueArray;
        }
    
    jQuery(document).ready(function() {
       // $('#add').click(function() {
       //      $('#add_part').modal(true);
       // });

       $('#brand').change(function (){
        var bra = $('#brand').val();
        $.ajax({
            url: "<?php echo e(url('/select')); ?>",
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

       $('#search').on('click', function(event){
        event.preventDefault();

        $('#sample_1 tbody tr').remove();

        $.ajax({
            url: "<?php echo e(url('/result')); ?>",
            method: "GET",
            data: {'brand': $('#brand option:selected').text(), 'model': $('#model option:selected').text(), 'category': $('#category option:selected').text()},
            dataType: "json",



            success: function(data)
            {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html = '<tr class="odd gradeX">';
                    html += '<td>' + data[i].part_name + '</td>';
                    html += '<td>' + data[i].part_no + '</td>';
                    html += '<td>' + data[i].Qty_in_stock + '</td>';
                    html += '<td>' + data[i].tested + '</td>';
                    html += '<td>' + data[i].item_info + '</td>';
                    html += '<td>' + data[i].condition + '</td>';
                    html += '<td>' + data[i].price + '</td>';
                    html += '<td>' + data[i].photo + '</td>';
                    html += '<td>' + data[i].saler_id + '</td>';
                    html += '<td>' + data[i].add_save + '</td>';
                    html += '</tr>';

                    $('#sample_1 tbody').append(html);
                }
            }
        });
       });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>