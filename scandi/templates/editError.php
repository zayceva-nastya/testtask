<?php
/** @var \App\MVC\Model\Worker $worker */

/** @var array $errors */

?>

<form action="/edit" method="post">
    <input type="hidden" name="id" value="<?= $worker->getId() ?>">

    <label for="first_name">First Name
        <input type=text name="first_name" value="<?=$_POST['first_name']?>">
    </label>
    <?php
    if (isset($errors['first_name'])) {
        echo "<p>" . $errors['first_name'] . "</p>";
    } ?>

    <label for="last_name">Last Name
        <input type=text name="last_name" value="<?=$_POST['last_name']?>">
    </label>
    <?php
    if (isset($errors['last_name'])) {
        echo "<p>" . $errors['last_name'] . "</p>";
    } ?>
    <label for="date_of_birth"> Date of birth
        <input type=date name="date_of_birth" value="<?=$_POST['date_of_birth']?>">
    </label>
    <?php
    if (isset($errors['date_of_birth'])) {
        echo "<p>" . $errors['date_of_birth'] . "</p>";
    } ?>
    <label for="is_avaialable">
        <span>Is avaialable</span>
        <select name="is_avaialable">
            <option name="0">0</option>
            <option name="1">1</option>
        </select>
    </label>

    <label for="salary"> Salary
        <input type="text" name="salary" value="<?=$_POST['salary']?>">
    </label>
    <?php
    if (isset($errors['salary'])) {
        echo "<p>" . $errors['salary'] . "</p>";
    } ?>
    <input type="submit" value="OK">
</form>