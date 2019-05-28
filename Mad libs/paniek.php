<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paniek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>

<body>
    <div id='container'>
        <div id='container'>
            <?php include "menu.php"; ?>
            <div class='content' id='one' class='one'>
                <h2 class="title">Er heerst paniek...</h2>
                <div class='vragen'>

                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

                        <class="q">Welk dier zou je nooit als huisdier willen?
                            <input class="a" type="text" value="<?php echo $data["vraag1"]; ?>" name="vraag1"><span class="error">*<?php echo $dataErr["vraag1"]; ?></span>
                            <p>

                                <class="q">Wie is de belangrijkste persoon in je leven?
                                    <input class="a" type="text" value="<?php echo $data["vraag2"]; ?>" name="vraag2"><span class="error">*<?php echo $dataErr["vraag2"]; ?></span>
                                    <p>

                                        <class="q">In welk land wil je graag wonen?
                                            <input class="a" type="text" value="<?php echo $data["vraag3"]; ?>" name="vraag3"><span class="error">*<?php echo $dataErr["vraag3"]; ?></span>
                                            <p>

                                                <class="q">Wat doe je als je je verveelt?
                                                    <input class="a" type="text" value="<?php echo $data["vraag4"]; ?>" name="vraag4"><span class="error">*<?php echo $dataErr["vraag4"]; ?></span>
                                                    <p>

                                                        <class="q">Met welk speelgoed speelde je als kind het meest?
                                                            <input class="a" type="text" value="<?php echo $data["vraag5"]; ?>" name="vraag5"><span class="error">*<?php echo $dataErr["vraag5"]; ?></span>
                                                            <p>

                                                                <class="q">Bij welke docent spijbel je het liefst?
                                                                    <input class="a" type="text" value="<?php echo $data["vraag6"]; ?>" name="vraag6"><span class="error">*<?php echo $dataErr["vraag6"]; ?></span>
                                                                    <p>

                                                                        <class="q">Als je €100.000 had, wat zou je dan kopen?
                                                                            <input class="a" type="text" value="<?php echo $data["vraag7"]; ?>" name="vraag7"><span class="error">*<?php echo $dataErr["vraag7"]; ?></span>
                                                                            <p>

                                                                                <class="q">Wat is jou favorite bezigheid?
                                                                                    <input class="a" type="text" value="<?php echo $data["vraag8"]; ?>" name="vraag8"><span class="error">*<?php echo $dataErr["vraag8"]; ?></span>
                                                                                    
                                                                                    <p><input class="a" type="submit" name="submit" value="test">
                    </form>
                </div>





            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
</body>

</html>