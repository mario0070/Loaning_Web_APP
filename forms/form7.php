<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form6.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form8.php");
    } 

?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>How long have you lived at your home?</h2>
            <div class="details">
                <p>"Tell us how long you have lived at your current residence"</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form7.php" method="post">

            <div class="btn">
                <button name="next">5 Years or More</button>
                <button name="next">4 Years</button>
                <button name="next">3 Years</button>
                <button name="next">2 Years</button>
                <button name="next">1 Years or Less</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>