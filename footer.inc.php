<?php
 $title = array(
         'Python3',
         'SQL',
         'Java',
         'CSS'
 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer block</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="footer.css" />
</head>
<body>
        <section>
            <div calss="container">
                <div calss="row">
                    <div class="row">
                        <?php
                        foreach ($title as $name)
                        { ?>
                            <div class="col-md-6">
                         <div class="main-iner">
                                <div class="row">
                                    <div class="col-7">
                                    <div class="image">
                                        <img src="img/12.jpg">
                                    </div>
                                    </div>
                                    <div class="col-5">
                                    <div class="iner-title">
                                        <h4><?php echo $name; ?></h4>
                                    </div>
                                    <div class="iner-text">
                                        <p>Тут должно быть много текста</p>
                                    </div>
                                    <div class="iner-ancor">
                                        <a href="#">Далее</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <?php
                        }
                        ?>
            </div>
        </section>
</body>


