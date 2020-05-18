<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem deserunt beatae tempore praesentium facere, accusantium fugiat odit ullam ipsum iste iure, ducimus et quo itaque voluptatibus reiciendis! Quos, illum at.';

        $search_word = $_GET["search"];
    ?>    

    <main>
        <h1>The text is:</h1>
        <p> 
            <?php echo $text; ?>
        </p>

        <p>
            The length is: <strong><?php echo strlen($text);?></strong>.
        </p>

        <p>
            The search word is "<strong><?php echo $search_word;?></strong>"".
        </p>

        <p>
            Now each occurance of "search_word" is replaced by "***":<br><br>
            <?php echo str_replace($search_word, '***', $text); ?>
        </p>
    </main>
</body>
</html>
