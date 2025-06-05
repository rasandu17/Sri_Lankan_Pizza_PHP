<?php


include('config/db_connect.php');

$pizza = null;

if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id=$id_to_delete";

    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }else{  
        echo "Query error" . mysqli_error($conn);
    }
}



if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
    
}


?>


<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>

<?php if($pizza): ?>
    <div class="row">
        <div class="col s12">
            <div class="breadcrumbs">
                <a href="index.php"><i class="material-icons tiny">home</i> Home</a>
                <span> / </span>
                <span>Pizza Details</span>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">
            <div class="card z-depth-1">
                <div class="card-image red darken-3">
                    <div style="height: 200px; display: flex; align-items: center; justify-content: center; position: relative;">
                        <i class="material-icons white-text" style="font-size: 80px;">local_pizza</i>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.5); padding: 24px 16px;">
                            <h4 class="white-text" style="margin: 0;"><?php echo htmlspecialchars($pizza['title'])?></h4>
                        </div>
                    </div>
                </div>
                
                <div class="card-content">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col s12 m6">
                            <div class="info-block" style="margin-bottom: 0;">
                                <h6 style="margin-top: 0; margin-bottom: 5px; font-weight: 500;">Created By</h6>
                                <div style="display: flex; align-items: center;">
                                    <i class="material-icons" style="margin-right: 8px; color: var(--primary-color);">person</i>
                                    <span style="font-weight: 400;"><?php echo htmlspecialchars($pizza['email'])?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="info-block" style="margin-bottom: 0;">
                                <h6 style="margin-top: 0; margin-bottom: 5px; font-weight: 500;">Date Added</h6>
                                <div style="display: flex; align-items: center;">
                                    <i class="material-icons" style="margin-right: 8px; color: var(--primary-color);">event</i>
                                    <span style="font-weight: 400;"><?php echo date('F j, Y', strtotime($pizza['created_at']))?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <div style="margin: 30px 0;">
                        <h5 style="font-weight: 500; color: var(--text-dark); margin-bottom: 20px;">
                            Ingredients
                        </h5>
                        
                        <div class="ingredients-container">
                            <div class="chips">
                                <?php foreach (explode(',', $pizza['ingredients']) as $ing) : 
                                    if(trim($ing) != ''):
                                ?>
                                    <div class="chip" style="margin-bottom: 8px;">
                                        <span><?php echo htmlspecialchars(trim($ing)) ?></span>
                                    </div>
                                <?php 
                                    endif;
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="divider"></div>
                </div>
                
                <div class="card-action" style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="index.php" class="btn-flat waves-effect" style="margin-right: 0;">
                        <i class="material-icons left" style="font-size: 18px;">arrow_back</i>Back to Menu
                    </a>
                    
                    <form action="details.php" method="POST" style="margin: 0; padding: 0; background: none; box-shadow: none;">
                        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
                        <button type="submit" name="delete" class="btn red darken-1 waves-effect waves-light" 
                        onclick="return confirm('Are you sure you want to delete this pizza?')">
                            <i class="material-icons left">delete</i>Remove
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col s12">
            <div class="breadcrumbs">
                <a href="index.php"><i class="material-icons tiny">home</i> Home</a>
                <span> / </span>
                <span>Not Found</span>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 40px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="info-block center" style="padding: 40px 20px;">
                <i class="material-icons medium" style="color: var(--primary-color);">error_outline</i>
                <h4 style="font-weight: 500; margin: 20px 0;">Menu Item Not Found</h4>
                <p class="grey-text text-darken-1" style="margin-bottom: 30px;">The pizza you're looking for is no longer available or may have been removed from our menu.</p>
                <a href="index.php" class="btn brand waves-effect waves-light">
                    <i class="material-icons left">arrow_back</i>Return to Menu
                </a>
            </div>
        </div>
    </div>
</div>
<?php endif?>
</div>
<?php include('templates/footer.php') ?>
</html>
