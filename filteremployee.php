<?php
include("app/model/config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'Pagination.class.php';
$baseURL = 'filteremployee.php';
$offset = !empty($_POST['page'])?$_POST['page']:0;
$limit = 10;

if($_POST['search'] !=''){
	$queryAll = $conn->query("SELECT COUNT(*)as num_rows FROM user_details WHERE name LIKE '%".$_POST['search']."%' OR designation LIKE '%".$_POST['search']."%' OR designation LIKE '%".$_POST['search']."%' OR mobile LIKE '%".$_POST['search']."%' OR email LIKE '%".$_POST['search']."%' OR address LIKE '%".$_POST['search']."%' OR dob LIKE '%".$_POST['search']."%' OR doj LIKE '%".$_POST['search']."%' OR blood_group LIKE '%".$_POST['search']."%'");
	$rowAll = $queryAll->fetch_assoc();
	$allNumRows = $rowAll['num_rows'];
	
	$ResEmployee = $conn->query("SELECT * FROM user_details WHERE name LIKE '%".$_POST['search']."%' OR designation LIKE '%".$_POST['search']."%' OR designation LIKE '%".$_POST['search']."%' OR mobile LIKE '%".$_POST['search']."%' OR email LIKE '%".$_POST['search']."%' OR address LIKE '%".$_POST['search']."%' OR dob LIKE '%".$_POST['search']."%' OR doj LIKE '%".$_POST['search']."%' OR blood_group LIKE '%".$_POST['search']."%' ORDER BY id DESC LIMIT $offset,$limit");
} else {
	$queryAll = $conn->query("SELECT COUNT(*)as num_rows FROM user_details");
	$rowAll = $queryAll->fetch_assoc();
	$allNumRows = $rowAll['num_rows'];
	
	$ResEmployee = $conn->query("SELECT * FROM user_details ORDER BY id DESC LIMIT $offset,$limit");
}
// Initialize pagination class
$pagConfig = array(
	'baseURL' => $baseURL,
	'totalRows' => $allNumRows,
	'perPage' => $limit,
	'currentPage' => $offset,
	'contentDiv' => 'postContent',
	'link_func' => 'filteremployee'
);
$pagination =  new Pagination($pagConfig);
?>
<table>
	<thead>
		<tr>
			<th>Sl</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>Date of Birth</th>
			<th>Date of Joining</th>
			<th>Blood Group</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if($ResEmployee->num_rows >0)
		{
			while($ResultsEmployee=$ResEmployee->fetch_object())
			{
			?>
			<tr>
				<td><?php echo ++$offset;?></td>
				<td><?php echo $ResultsEmployee->name;?></td>
				<td><?php echo $ResultsEmployee->designation;?></td>
				<td><?php echo $ResultsEmployee->mobile;?></td>
				<td><?php echo $ResultsEmployee->email;?></td>
				<td><?php echo $ResultsEmployee->address;?></td>
				<td><?php echo date('d-m-Y',strtotime($ResultsEmployee->dob));?></td>
				<td><?php echo date('d-m-Y',strtotime($ResultsEmployee->doj));?></td>
				<td><?php echo $ResultsEmployee->blood_group;?></td>
				<td>
					<a type="button" class="btn btn-secondary" href="add-user?edited=<?php echo $ResultsEmployee->id;?>">Edit</a>
					<a type="button" class="btn btn-danger" href="javascript:void(0)" onclick="deleteuser(<?php echo $ResultsEmployee->id;?>)">Delete</a>
				</td>
			</tr>
		<?php } } else { ?>
			<tr><td style="color:red;text-align:center;" colspan="11">No list found !</td></tr>
	<?php } ?>
	</tbody>
</table>
<?php echo $pagination->createLinks(); ?>
