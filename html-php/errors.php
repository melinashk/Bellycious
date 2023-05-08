<?php if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
        <p style="color:#ED1515; font-size:18px;font-family:serif; margin-top:-15px; margin-left:105px; padding:12px;"><?php echo $error ?></p>
        <?php endforeach ?>
</div>
<?php endif ?>
