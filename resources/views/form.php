<form action="" method="post">

    <?= csrf_field() ?>

    <label for="">Name</label><br>
    <input type="text" name='name' value="<?= htmlspecialchars($record->name) ?>">
    <br>
    <label for="">Code</label><br>
    <input type="text" name='code' value="<?= htmlspecialchars($record->code) ?>">
    

    <input type="submit" value="+">

    

   
</form>