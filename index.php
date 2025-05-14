<?php 
require_once 'view/header.php'; 
require 'core/SessionClass.php';
// require 'core/MessageClass.php';
require 'core/ValidationClass.php';
?>

<div class="my-5">
    <h2 class="text-center mb-4">Enter Session</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="controller/AddController.php" method="post">
                <div class="mb-3">
                    <label for="key" class="form-label">Key</label>
                    <input type="text" name="key" class="form-control" id="name" >
                </div>
                <div class="mb-3">
                    <label for="value" class="form-label">Value</label>
                    <input type="text" name="value" class="form-control" id="value"  >
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary w-100">Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container mt-5">
    <h3 class="text-center mb-4">Session Data</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-striped text-center shadow-sm bg-white">
                <thead class="table-dark">
                    
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
$data = ClsSession::get_all();
if (!empty($data)):
    foreach($data as $key => $value){
?>
                <tbody>
                    <tr>
                        <td><?= $key  ?></td>
                        <td><?= $value ?></td>
                        <td>
                            <a href="controller/RmoveController.php?key=<?=$key ?>" class="btn btn-outline-danger btn-sm">Delete</a>

                        </td>
                        <?php
    }
 endif;
 ?>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <a href="controller/RemoveAllController.php" class="btn btn-danger">Destroy All Sessions</a>
            </div>
        </div>
    </div>
</div>


<?php require_once 'view/footer.php'; ?>

<!-- git remote add origin https://github.com/elkhokh/SessionOOP.git
git branch -M master
git push -u origin master -->
