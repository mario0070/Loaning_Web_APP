<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form7.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form9.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>Are You a Home Owner?</h2>
            <div class="details">
                <p>"you maybe eligible for better rates and terms."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form8.php" method="post">

            <div class="btn">
                <button name="next">Own</button>
                <button name="next">Rent</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>