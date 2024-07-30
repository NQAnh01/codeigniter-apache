<div class="table-responsive">
	<table class="table table-bordered" id="myTable">
		<a class="nav-link btn btn-success create-new-button" aria-expanded="false" href="admin/users/create">+ <?php echo lang('App.add_user'); ?></a>
		<thead>
			<tr>
				<th> # </th>
				<th> <?php echo lang('App.name'); ?> </th>
				<th> <?php echo lang('App.email'); ?> </th>
				<th> <?php echo lang('App.phone'); ?> </th>
				<th> <?php echo lang('App.state'); ?> </th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php if($users): foreach( $users as $index => $user): ?>
			<tr>
				<td> <?php echo $index + 1; ?> </td>
				<td> <?php echo $user->name; ?> </td>
				<td> <?php echo $user->email; ?> </td>
				<td> <?php echo $user->phone; ?> </td>
				<td> <?php
					if($user->state == 1){
						echo lang('Admin.visible');
					}
					
					if($user->state == 0){
						echo lang('Admin.invisible');
					}

					if($user->state == 2){
						echo lang('Admin.banned');
					}

				?> </td>
				<td class="operation">
					<a href="<?php echo site_url('/admin/users/edit/' . $user->user_id); ?>">
						<span class="mdi mdi-pencil" data-operation="edit" data-item="<?php echo $user->user_id; ?>"></span>
					</a>
					<div onclick="deleteUser(<?php echo $user->user_id; ?>)">
						<span class="mdi mdi-delete" id="delete-primary" data-operation="delete" data-item="<?php echo $user->user_id; ?>"></span>
					</div>
				</td>
			</tr>	
			<?php endforeach; endif; ?>
		</tbody>
	</table>

</div>

<form id="deleteForm" method="post" action="">
</form>

<?php $this->section('pageCss'); ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="assets/vendors/datatables/dataTables.css">
<!-- End plugin css for this page -->
<style>
	/* .operation .mdi{font-size:20px} */
	.operation{
		display: flex;
	}
	[data-operation]{font-size:20px;cursor:pointer;}
	[data-operation="delete"]{color:#FF9999;}
</style>
<?php $this->endSection('pageCss'); ?>

<?php $this->section('script'); ?>
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/datatables/dataTables.js"></script>
<!-- End plugin js for this page -->
<script>
	(function($) {
		'use strict';
		$(function() {
			new DataTable('#myTable',{
				// info: false,
				ordering: false,
				bLengthChange: false,
				language: {
					search: "<?php echo lang('App.search'); ?>",
					infoEmpty: "<?php echo lang('App.datatable.infoEmpty'); ?>"
				}
			});
		});
	})(jQuery);

	function deleteUser(userId) {
        var form = document.getElementById('deleteForm');
        form.action = "admin/users/delete/" + userId;
        form.method = "post";
        form.submit();
    }
</script>
<!-- -->
<?php $this->endSection('script'); ?>
