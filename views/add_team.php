<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="w-25 mx-auto mt-5">
        <form action="http://localhost/task_manager/?url=login" method="post">

            <!-- l'Email -->
            <div class="mb-3">
                <label class="form-label">Nom Equipe</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <!-- Mot de passe -->
            <div class="mb-3">
                <label class="form-label">Selectionnez un utilisateur</label>
                <?php foreach($listUser as $user) { ?>
                    <input class="form-check-input" type="checkbox" value="<?= $user
                    ['id'] ?>" id="flexCheckDefault">
                    
                <?php } ?>
            </div>
        
            <button class="btn btn-success">Add</button>
        </form>
    </div>
</div>