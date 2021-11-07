<?php
/** @var array $table */

/** @var array $headers */
/** @var array $errors */
//print_r($errors);
//echo "<pre>";
//print_r($headers);
//?>


<table border="1">
    <tr>
        <?php
        foreach ($headers as $key) { ?>

            <th>
                <?= $key['COLUMN_COMMENT'] ?>
                <a href="sortRow?col=<?= $key['COLUMN_NAME'] ?>&type=ASC">🔼</a>
                <a href="sortRow?col=<?= $key['COLUMN_NAME'] ?>&type=DESC">🔽</a>
            </th>

        <?php
        } ?>
    </tr>
    <?php
    foreach ($table as $key) { ?>
        <tr>

            <td><?= $key->getFirstName() ?></td>
            <td><?= $key->getLastName() ?></td>
            <td><?= $key->getDateOfBirth() ?></td>
            <td><?= $key->getIsAvaialable() ?></td>
            <td><?= $key->getSalary() ?></td>

            <td><a href="del?id=<?= $key->getId() ?>">✖️</a></td>
            <td><a href="showEdit?id=<?= $key->getId() ?>">📝</td>
        </tr>
    <?php
    } ?>
</table>


<form action="/add" method="post">
    <label for="first_name"> First Name
        <input type=text name="first_name" value="<?= $_POST['first_name'] ?>">
    </label>

    <?php
    if (isset($errors['first_name'])) {
        echo "<p>" . $errors['first_name'] . "</p>";
    } ?>
    <label for="last_name">
        Last Name <input type=text name="last_name" value="<?= $_POST['last_name'] ?>">
    </label>
    <?php
    if (isset($errors['last_name'])) {
        echo "<p>" . $errors['last_name'] . "</p>";
    } ?>
    <label for="date_of_birth">Date of birth
        <input type=date name="date_of_birth" value="<?= $_POST['date_of_birth'] ?>">
        <?php
        if (isset($errors['date_of_birth'])) {
            echo "<p>" . $errors['date_of_birth'] . "</p>";
        } ?>
    </label>
    <label for="is_avaialable">
        <span>Is avaialable</span>
        <select name="is_avaialable">
            <option name="0">0</option>
            <option name="1">1</option>
        </select>
    </label>
    <label for="salary">Salary
        <input type="text" name="salary" value="<?= $_POST['salary'] ?>">
    </label>
    <?php
    if (isset($errors['salary'])) {
        echo "<p>" . $errors['salary'] . "</p>";
    } ?>
    <input type="submit" value="OK">

</form>