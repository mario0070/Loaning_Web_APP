<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form19.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form21.php");
    } 

?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your credit score?</h2>
            <div class="details">
                <p>"Please estimate your credit score or check your score below."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form20.php" method="post">

            <div class="btn">
                <button name="next">Great 700+</button>
                <button name="next">600-700</button>
                <button name="next">500-600</button>
                <button name="next"><500</button>
                <button name="next">Not sure</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>