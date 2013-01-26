<div id="sf_admin_container">

  <h2>Show Book</h2>

  <div id="sf_admin_content">
    <table>
      <tbody>
        <tr>
          <th>Title:</th>
          <td><?php echo $book->getTitle() ?></td>
        </tr>
        <tr>
          <th>Author:</th>
          <td><?php echo $book->getAuthorId() ?></td>
        </tr>
        <tr>
          <th>Category:</th>
          <td><?php echo $book->getCategoryId() ?></td>
        </tr>
        <tr>
          <th>Reading status:</th>
          <td><?php echo $book->getIsRead() ?></td>
        </tr>
        <tr>
          <th>Rating:</th>
          <td><?php echo $book->getRating() ?></td>
        </tr>
        <tr>
          <th>Description:</th>
          <td><?php echo $book->getDescription() ?></td>
        </tr>
        <tr>
          <th>Created at:</th>
          <td><?php echo $book->getCreatedAt() ?></td>
        </tr>
        <tr>
          <th>Updated at:</th>
          <td><?php echo $book->getUpdatedAt() ?></td>
        </tr>
      </tbody>
    </table>

    <hr />

    <a href="<?php echo url_for('books/edit?id='.$book->getId()) ?>">Edit</a>

    <a href="<?php echo url_for('books/index') ?>">Back to List</a>
  </div>
</div>
