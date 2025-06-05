<?php

include('config/db_connect.php');

$title = $email = $ingredients = '';

$errors = array('email' => '', 'title' => '', 'ingredients' => '');
if (isset($_POST['submit'])) {

    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be valid';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br/>';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br/>';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be sperated by comma';
        }
    }

    if (array_filter($errors)) {

    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo 'Querry error' . mysqli_error($conn);
        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<div class="row">
    <div class="col s12">
        <div class="breadcrumbs">
            <a href="index.php"><i class="material-icons tiny">home</i> Home</a>
            <span> / </span>
            <span>Create Pizza</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s12 m10 offset-m1 l8 offset-l2">
        <h2 class="page-title">Create Your Signature Pizza</h2>
        <p class="grey-text text-darken-1" style="margin-bottom: 30px;">
            Design your own masterpiece by specifying the ingredients you'd like to include. Our artisan chefs will carefully prepare your creation.
        </p>
        
        <div class="card z-depth-1">
            <div class="card-content">
                <form action="add.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix" style="color: var(--primary-color);">email</i>
                            <input id="email" type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" class="validate">
                            <label for="email">Your Email Address</label>
                            <span class="helper-text" data-error="wrong" data-success="right">
                                <?php if($errors['email']): ?>
                                    <span class="red-text"><?php echo $errors['email']; ?></span>
                                <?php else: ?>
                                    For order confirmation purposes only
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix" style="color: var(--primary-color);">title</i>
                            <input id="title" type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" class="validate">
                            <label for="title">Pizza Name</label>
                            <span class="helper-text">
                                <?php if($errors['title']): ?>
                                    <span class="red-text"><?php echo $errors['title']; ?></span>
                                <?php else: ?>
                                    Name your signature creation
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix" style="color: var(--primary-color);">restaurant</i>
                            <input id="ingredients" type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" class="validate">
                            <label for="ingredients">Ingredients</label>
                            <span class="helper-text">
                                <?php if($errors['ingredients']): ?>
                                    <span class="red-text"><?php echo $errors['ingredients']; ?></span>
                                <?php else: ?>
                                    Separate ingredients with commas (e.g., mozzarella, basil, tomatoes)
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-top: 20px;">
                        <div class="col s12 m6 l7">
                            <p class="grey-text">
                                <i class="material-icons tiny">info</i>
                                By submitting, you agree to share your pizza creation with our customers.
                            </p>
                        </div>
                        <div class="col s12 m6 l5 right-align">
                            <button type="submit" name="submit" value="submit" class="btn brand waves-effect waves-light">
                                <i class="material-icons left">add_circle</i>Add to Menu
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="card-action">
                <a href="index.php" class="btn-flat waves-effect">
                    <i class="material-icons left" style="font-size: 18px;">arrow_back</i>Return to Menu
                </a>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>


</html>