  <?php 
session_start();

if(!isset($_SESSION['gold'])){
	$_SESSION['gold'] = 0;
}

if(!isset($_SESSION['activities'])){
	$_SESSION['activities'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ninja Game</title>

        <link rel="stylesheet" href="style.less">
    </head>
    <body>
        <div class="container">	
            <header class='head'>
                <h2>Your Gold: </h2>
                <span> <?= $_SESSION['gold'] ?></span>
            </header>

            <div class="submission">
                <form action="gold.php" method="post" />
                    <input type="hidden" name="building" value="farm" />
                    <h2>Farm</h2>
                    <p>(earns 10 - 20 golds)</p>
                    <input type="submit" value="Find Gold!"/>
                </form>
                <div class='wrap'>
                <form action="gold.php" method="post" />
                    <input type="hidden" name="building" value="cave" />
                    <h2>Cave</h2>
                    <p>(earns 5 - 10 golds)</p>
                    <input type="submit" value="Find Gold!"/>
                </form>
                </div>

                <div class='wrap'>
                <form action="gold.php" method="post" />
                    <input type="hidden" name="building" value="house" />
                    <h2>House</h2>
                    <p>(earns 2 - 5 golds)</p>
                    <input type="submit" value="Find Gold!"/>
                </form>
                </div>

                <div class='cas'>
                <form action="gold.php" method="post" />
                    <input type="hidden" name="building" value="casino" />
                    <h2>Casino!</h2>
                    <p>(earns/takes 0 - 50 golds)</p>
                    <input type="submit" value="Find Gold!"/>
                </form>
                </div>
            </div>

                <fieldset class='bottom'>
                <legend>Activities:</legend>
                <div>
    <?php 			for ($i = count($_SESSION['activities'])-1; $i>=0; $i--)
                    {	
                        if($_SESSION['activities'][$i]['gold'] < 0)
                        {
                            $add_on="... Ouch.."; ?>
                            <p class="red"> 
    <?php 				}
                        else 
                        {
                            $add_on="."?>
                            <p class="green">
    <?php 				} ?>
                        You entered a <?= $_SESSION['activities'][$i]['location']?> and earned <?= $_SESSION['activities'][$i]['gold'] ?> golds<?= $add_on ?> (<?= $_SESSION['activities'][$i]['time'] ?>)</p>
    <?php 			} ?>	
                        </fieldset>
                </div>
            </div>
            <form class='porm' action="gold.php" method="post">
                <input type="hidden" name="reset" value="clear">
                <button>Reset</button>
            </form>
        </div>
    </body>
</html>