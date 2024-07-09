<?php require_once "includes/navbar.php"; ?>
<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="w-25 mx-auto mt-5">
        <form action="http://localhost/task_manager/?url=login" method="post">
                <!-- L'Email -->
            <div class="mb-3">
                <labelclass="form-label">Email</label>
                <input type="email" name="email" class="form-control" >
            </div>
                <!-- Mot de Passe -->
            <div class="mb-3">
                <labelclass="form-label">Mot de Passe </label>
                <input type="password" name="mdp" class="form-control" >
            </div>
        
            <button class="btn btn-success">Login</button>
        </form>
    </div>
</div>