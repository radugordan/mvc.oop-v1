<div>
<?php if(isset($_SESSION['isLogged'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_URL ?>shares/add">Share Something</a>
<?php endif; ?>
    <?php foreach ($viewmodel as $item) :  ?>
        <div class="card">
        <div class="card-header">
            <?php echo $item['create_date']; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"> <?php echo $item['title']; ?></h5>
            <p class="card"
            <p class="card-text"> <?php echo $item['body']; ?></p>
            <a href="<?php echo $item['link']; ?>" class="btn btn-primary">Website</a>
        </div>
        </div>
    <?php endforeach; ?>
</div>