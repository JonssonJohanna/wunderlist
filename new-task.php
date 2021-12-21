<?php
require __DIR__ . '/app/autoload.php';
require __DIR__ . '/general/header.php';
require __DIR__ . '/general/notifications.php';
?>

<!-- Sign me in here -->
<section class="signinout-container">
    <!-- <div class="image-container">
        <img src="/assets/images/main-img-min.webp" alt="">
    </div> -->

    <article>
        <div class="form-content">
            <h1>New task</h1>

            <?php if ($error !== '') : ?>
                <p class="error"><?= $error; ?></p>
            <?php endif; ?>
            <form action="app/lists/store.php" method="post" required>
                <div class="form">
                    <label for="title">Title</label>
                    <input type="title" name="title" id="title" required>
                </div>
                <div class="form">
                    <label for="due_date">Due date</label>
                    <input type="date" name="due_date" id="due_date" required>
                </div>
                <div class="form">
                    <label for="task_notes">Note</label>
                    <textarea type="text" name="task_notes" id="task_notes"></textarea optional>
                </div>

                <button type="submit" name="submit-task" class="btn btn-full">Add new task</button>
            </form>
        </div>
    </article>

</section>
