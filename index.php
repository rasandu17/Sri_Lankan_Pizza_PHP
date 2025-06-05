<?php

include('config/db_connect.php');

$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);



?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>
<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="breadcrumbs">
                <span><i class="material-icons tiny">home</i> Home</span>
            </div>
            <h2 class="page-title">Our Menu</h2>
            <p class="grey-text text-darken-1" style="max-width: 700px; margin-bottom: 30px;">
                Explore our curated selection of handcrafted artisan pizzas made with premium ingredients and traditional techniques. Each pizza represents the perfect balance of flavors and textures.
            </p>
        </div>
    </div>

    <div class="row">
        <?php if(empty($pizzas)): ?>
            <div class="col s12 center-align">
                <div class="info-block">
                    <span class="grey-text text-darken-2">
                        <i class="material-icons left">info</i>
                        Our menu is currently being updated. Please check back soon or create your own signature pizza.
                    </span>
                </div>
                <a href="add.php" class="btn brand waves-effect waves-light" style="margin-top: 15px;">
                    <i class="material-icons left">add_circle</i>Create Pizza
                </a>
            </div>
        <?php else: ?>
            <?php foreach ($pizzas as $pizza) : ?>
                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-image">                            <?php 
                                // Red maroon-based color scheme
                                $colors = ['red darken-4', 'red darken-3', 'deep-orange darken-3', 'brown darken-2'];
                                $color = $colors[array_rand($colors)];
                            ?>
                            <div class="<?php echo $color; ?>" style="height: 160px; display: flex; align-items: center; justify-content: center; position: relative;">
                                <i class="material-icons white-text" style="font-size: 50px;">local_pizza</i>
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.4); padding: 16px;">
                                    <span class="card-title" style="margin: 0; font-size: 18px; line-height: 1.2;"><?php echo htmlspecialchars($pizza['title']) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h6 class="text-darken-2" style="font-weight: 500; margin-bottom: 12px;">Ingredients</h6>
                            <div class="ingredients-container">
                                <div class="chips">
                                    <?php 
                                        $ingredients = explode(',', $pizza['ingredients']);
                                        foreach ($ingredients as $ing) : 
                                            if(trim($ing) != ''):
                                    ?>
                                        <div class="chip">
                                            <?php echo htmlspecialchars(trim($ing)) ?>
                                        </div>
                                    <?php 
                                            endif;
                                        endforeach; 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <a class="waves-effect btn-flat" href="details.php?id=<?php echo $pizza['id']?>">
                                <i class="material-icons left" style="font-size: 18px;">visibility</i>View Details
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php include('templates/footer.php') ?>


</html>