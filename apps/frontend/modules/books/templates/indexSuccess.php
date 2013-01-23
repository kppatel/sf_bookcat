<h2>Books List</h2>

<table cellspacing="0" width="100%" border="1">
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Category</th>
			<th>Reading status</th>
			<th colspan="3">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($books as $book): ?>
		<tr>
			<td><?php echo $book['title'] ?></td>
			<td><?php echo $book['Author'] ?></td>
			<td><?php echo $book['Category'] ?></td>
			<td><?php echo $book['reading_status'] ?></td>
			<td><?php echo link_to('Show', 'books/show?id='.$book['id']) ?></td>
			<td><?php echo link_to('Edit', 'books/edit?id='.$book['id']) ?></td>
			<td><?php echo link_to('Delete', 'books/delete?id='.$book['id'], array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="<?php echo url_for('books/new') ?>">New</a>
