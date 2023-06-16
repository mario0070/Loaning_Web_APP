<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form10.php");
    } 

    if(isset($_POST["next"])){
         header("Location: form12.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>what is your current income source?</h2>
            <div class="details">
                <p>"your employment will help you get approved for your loan."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form11.php" method="post">

            <div class="btn">
                <button name="next">Employment</button>
                <button name="next">Benefit</button>
                <button name="next">Self Employment</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>