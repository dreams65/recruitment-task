<div class="container">
    <table class="table">
        <tbody>
            <tr>
                <td class="table__title">Name</td>
                <td class="table__title">Username</td>
                <td class="table__title">Email</td>
                <td class="table__title">Adress</td>
                <td class="table__title">Phone</td>
                <td class="table__title">Company</td>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user["name"] ?></td>
                    <td><?= $user["username"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["address"]["street"]?><?= $user["address"]["zipcode"]?><?= $user["address"]["city"]?></td>
                    <td><?= $user["phone"] ?></td>
                    <td><?= $user["company"]["name"]?></td>
                    <td>
                        <form action='' method='POST'>
                            <button class='btn btn-danger' name='del' data-id='<?= $user["id"] ?>' value='<?= $user["id"] ?>'>delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">Add New Record</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">add new record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" required>
                <label for="userName">Username</label>
                <input type="text" name="username" required>
                <label for="email">Email</label>
                <input type="email" name="email" required>
                <label for="address">Address</label>
                <input type="text" name="address">
                <label for="phone">Phone</label>
                <input type="text" name="phone">
                <label for="company">Company</label>
                <input type="text" name="company">
                <button class="btn btn-primary submit" name="add">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
