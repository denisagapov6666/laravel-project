<?php $request = app('Illuminate\Http\Request'); ?>

<?php $__env->startSection('title', __('labels.backend.tests.title').' | '.app_name()); ?>

<?php $__env->startSection('content'); ?>


    <div class="card">
        <div class="card-header">
            <h3 class="page-title d-inline"><?php echo app('translator')->get('labels.backend.tests.title'); ?></h3>
        </div>
        <div class="card-body table-responsive">
            
            <?php if(request('course_id') != "" || request('show_deleted') == 1): ?>


            <table id="myTable"
                   class="table table-bordered table-striped <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_delete')): ?> <?php if( request('show_deleted') != 1 ): ?> dt-select <?php endif; ?> <?php endif; ?>">
                <thead>
                <tr>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_delete')): ?>
                        <?php if( request('show_deleted') != 1 ): ?>
                            <th style="text-align:center;"><input type="checkbox" class="mass" id="select-all"/>
                            </th><?php endif; ?>
                    <?php endif; ?>
                    <th><?php echo app('translator')->get('labels.general.sr_no'); ?></th>
                    <th><?php echo app('translator')->get('labels.general.id'); ?></th>
                    <th><?php echo app('translator')->get('labels.backend.tests.fields.course'); ?></th>
                    <th><?php echo app('translator')->get('labels.backend.tests.fields.title'); ?></th>
                    <th><?php echo app('translator')->get('labels.backend.tests.fields.questions'); ?></th>
                    <th><?php echo app('translator')->get('labels.backend.tests.fields.published'); ?></th>
                </tr>
                </thead>

                <tbody id='shotingTest'>

                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script>

        $(document).ready(function () {
            
            $(function() {
                $('#shotingTest').sortable({
                    update: function(event, ui) {
                    }
                });
            });
           

            var route = '<?php echo e(route('admin.orders.get_tests_by_course')); ?>';

            <?php
                
                $course_id = (request('course_id') != "") ? request('course_id') : 0;
            $route = route('admin.orders.get_tests_by_course',['user_id'=> request('user_id'), 'course_id' => $course_id]);
            ?>

            route = '<?php echo e($route); ?>';
            route = route.replace(/&amp;/g, '&');

            <?php if(request('show_deleted') == 1 ||  request('course_id') != ""): ?>

            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5,6]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5,6]
                        }
                    },
                    'colvis'
                ],
                ajax: route,
                columns: [
                        <?php if(request('show_deleted') != 1): ?>
                    {
                        "data": function (data) {
                            return '<input type="checkbox" class="single" name="id[]" value="' + data.id + '" />';
                        }, "orderable": false, "searchable": false, "name": "id"
                    },
                        <?php endif; ?>
                    {data: "DT_RowIndex", name: 'DT_RowIndex', searchable: false, orderable: false},
                    {data: "id", name: 'id'},
                    {data: "course", name: 'course'},
                    {data: "title", name: 'title'},
                    {data: "questions", name: "questions"},
                    {data: "published", name: "published"},
                ],
                <?php if(request('show_deleted') != 1): ?>
                columnDefs: [
                    {"width": "5%", "targets": 0},
                    {"className": "text-center", "targets": [0]}
                ],
                <?php endif; ?>

                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
                language:{
                    url : '<?php echo e(asset('plugins/jquery-datatable/lang/'.config('app.locale').'.json')); ?>',
                    buttons :{
                        colvis : '<?php echo e(trans("datatable.colvis")); ?>',
                        pdf : '<?php echo e(trans("datatable.pdf")); ?>',
                        csv : '<?php echo e(trans("datatable.csv")); ?>',
                    }
                }
            });

            <?php endif; ?>

        });

    </script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\04_01_24\resources\views/backend/orders/tests.blade.php ENDPATH**/ ?>