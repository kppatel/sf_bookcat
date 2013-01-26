<div id="sf_admin_container">

	<h2>Book List</h2>

	<div id="sf_admin_content">
		<div class="sf_admin_list">
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Category</th>
						<th>Is Read</th>
						<th colspan="3">Actions</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($books as $book): ?>
					<tr>
						<td><?php echo $book['title'] ?></td>
						<td><?php echo $book['author'] ?></td>
						<td><?php echo $book['category'] ?></td>
						<td><?php echo $book['is_read'] ?></td>
						<td><?php echo link_to('Show', 'books/show?id='.$book['id']) ?></td>
						<td><?php echo link_to('Edit', 'books/edit?id='.$book['id']) ?></td>
						<td><?php echo link_to('Delete', 'books/delete?id='.$book['id'], array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<a href="<?php echo url_for('books/new') ?>">New</a>
		</div>
	</div>
</div>
