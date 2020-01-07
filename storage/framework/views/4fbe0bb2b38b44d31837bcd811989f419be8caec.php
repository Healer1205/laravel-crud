<?php $__env->startSection('content'); ?>

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
                    <a href="#">My Part List</a>
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
                                        <form action="<?php echo e(url('/sales')); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

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
                                                        <?php if( Auth::user()->type == "User"): ?>
                                                        <th>Buy Option</th>
                                                        <?php endif; ?>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <?php if( Auth::user()->type == "User"): ?>
                                                    <td><button type="submit" class="btn btn-success" name="part_name" id="part_name" value="<?php echo e($part->part_name); ?>" onclick="alert('Sales Successed')">Sale</button></td>
                                                    <?php endif; ?>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<!-- <script src="<?php echo e(asset('plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
       $('#sales_btn').on('click', function(event){
        event.preventDefault();
        console.log($(this));
        $.ajax({
            url: "<?php echo e(url('/sales')); ?>",
            method: "POST",
            data: $(this).serialize(),
            // data: {'brand': $('#brand option:selected').text(), 'model': $('#model option:selected').text(), 'category': $('#category option:selected').text()},
            dataType: "json",
            success: function(data)
            {
                console.log("success");
            }
        });
       });
    });
</script> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>