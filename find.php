<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM user";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
 <table class="table table-striped table-hover">
	<tr>
        <th>Code</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Class</th>
        <th>Class Code</th>
        <th>Status</th>
        <th colspan="2" align="center"><em class="fa fa-cog"></em></th>
    </tr>
';
if ($total_row > 0) {
    foreach ($result as $row) {
        $output .= '
		<tr>
			<td>' . $row["code"] . '</td>
			<td>' . $row["name"] . '</td>
			<td>' . $row["username"] . '</td>
			<td>' . $row["password"] . '</td>
			<td>' . $row["classes"] . '</td>
			<td>' . $row["classes_code"] . '</td>
			<td>' . $row["status"] . '</td>
			<td>
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="' . $row["id"] . '">Edit</button>
			</td>
			<td>
				<button type="button" name="delete_btn" data-id8="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete"><span class="fa fa-trash"></span></button>
			</td>
		</tr>
		';
    }
} else {
    $output .= '
	<tr>
		<td colspan="9" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>