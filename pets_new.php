<?php require('layout/header.php');?>
<?php require('lib/functions.php');?>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'] ?? '';
    $breed = $_POST['breed'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $bio = $_POST['bio'] ?? '';
    

    $pets = get_pets();
    $newPet = array(
        'name'=> $name,
        'breed' => $breed,
        'weight' => $weight,
        'bio' => $bio,
        'age' => '',
        'image' => '',
    );

    $pets[] = $newPet;

    save_pets($pets);

    header('Location: /');
    }
   
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add your Pet! Squirrel!</h1>
            <form action="/pets_new.php" method="POST">
                <div class="form-group">
                    <label for="pet-name" class="control-label">Pet Name</label>
                    <input type="text" name="name" id="pet-name" class="form-control" />
                </div>
                
                <div class="form-group">
                    <label for="pet-breed" class="control-label">Breed</label>
                    <input type="text" name="breed" id="pet-breed" class="form-control" />
                </div>
                
                <div class="form-group">
                    <label for="pet-weight" class="control-label">weight (lbs)</label>
                    <input type="number" name="weight" id="pet-weight" class="form-control" />
                </div>
                
                <div class="form-group">
                    <label for="pet-bio" class="control-label">Pet Bio</label>
                    <textarea name="bio" id="pet-bio" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart"></span>
                    Add
                </button>
            </form>
        </div>
    </div>
</div>
<?php require('layout/footer.php'); ?>