<?php require_once 'db.php' ?>
<?php  require_once 'get_users.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- ========== Start Section ========== -->
    <section class="table_users">
        <div class="container">
            <div class="row">
                <table class="get_users table">
                    <thead class="table_header">
                    <tr>
                        <th class="table_header_element">Id</th>
                        <th class="table_header_element">FIO</th>
                        <th class="table_header_element">username</th>
                        <th class="table_header_element">email</th>
                        <th class="table_header_element">Action</th>
                    </tr>
                    </thead>
                    <tbody class="table_body_users">
                    <?php  foreach ($users as $user): ?>
                        <tr>
                            <td class="table_body_elem"><?= htmlspecialchars($user['id'])?></td>
                            <td class="table_body_elem"><?= htmlspecialchars($user['fio'])?></td>
                            <td class="table_body_elem"><?= htmlspecialchars($user['username'])?></td>
                            <td class="table_body_elem"><?= htmlspecialchars($user['email'])?></td>
                            <td class="table_body_elem">

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<!-- ========== End Section ========== -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>