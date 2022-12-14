<?php $i = 1; ?>
<main class="container py-5">
    <h1>News Dashboard</h1>
    <a href="/dashboard/create" class="btn btn-success">Create News Item</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Link</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
    <?php foreach($allNews as $news): ?>
        <tr>
        <th scope="row"><?= $i++ ?></th>
          <td><?= esc($news["title"]) ?></td>
          <td><a href="dashboard/<?= esc($news['slug']) ?>">Read More</a></td>
          <td>
            <a href="dashboard/edit?id=<?= esc($news['id']) ?>" class="btn btn-primary badge">edit</a>
            <a class="btn btn-danger badge">delete</a>
          </td>
        </tr>
    <?php endforeach ?>
      </tbody>
    </table>
</main>

