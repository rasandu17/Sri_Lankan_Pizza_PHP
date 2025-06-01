<?php

$conn = mysqli_connect("localhost", "rukiee", "pizza123", "pizza_shop");

if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}

$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

//explode(',', $pizzas[0]['ingredients']);

?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>
<h4 class="center">Pizzas!!!</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) { ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                        <div>
                            <ul>
                                <?php foreach (explode(',', $pizza['ingredients']) as $ing) { ?>
                                    <li><?php echo htmlspecialchars($ing) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">more info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('templates/footer.php') ?>


</html>