<?php
include_once 'dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Thêm khách hàng</a>
</div>
<div class="clearfix"></div><br />
<div class="container">
	 <table class='table table-bordered table-responsive'>
     <tr>
     <th>ID</th>
     <th>Tên</th>
     <th>Họ</th>
     <th>Email</th>
     <th>Số điện thoại</th>
     <th colspan="2" align="center"><center>Hành động</center></th>
     </tr>
     <?php
		$query = "SELECT * FROM tbl_users";       
		$records_per_page=9;
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="7" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
</div>
<?php include_once 'footer.php'; ?>