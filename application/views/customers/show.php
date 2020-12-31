<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<title>Customer</title>
</head>
<body>

	<a href="<?= base_url('customers/create')?>">Add</a>

	<table>
		<?php
            $i = 1;
            echo "<tr>";
            echo "<td>Sr#</td>";
            echo "<td>ID</td>";
            echo "<td>Name</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<tr>";

        foreach ($records as $row) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $row->id . "</td>";
            echo "<td>" . $row->name . "</td>";
            echo "<td><a href = '" . base_url('customers/edit') . $row->id . "'>Edit</a></td>";
            echo "<td><a href = '" . base_url('customers/destroy') . $row->id . "'>Delete</a></td>";
            echo "<tr>";
        }
        ?>
	</table>

</body>

</html>
