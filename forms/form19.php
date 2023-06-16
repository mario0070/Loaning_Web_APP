<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form18.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form20.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>Do you have a direct deposit?</h2>
            <div class="details">
                <p>"Lenders are significantly more likely to fund accounts with direct deposit."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form19.php" method="post">

            <div class="btn">
                <button name="next">Yes</button>
                <button name="next">No</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>