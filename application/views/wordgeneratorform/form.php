<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Word Generator - Coding Dojo Assignment</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Random Word Generator - Coding Dojo Assignment</h1>

    <h2>Random Word (attempt # <?php
    if($this->session->userdata('counter'))
    {
        echo $this->session->userdata('counter');
    }
    else
    {
        echo 0;
    }
    ?>)</h2>

    <div id="random-word">
        <?php
        if($this->session->userdata('rand_word'))
        {
            echo $this->session->userdata('rand_word');
        }
        else
        {
            echo 'Click button below to generate random here!';
        }
        ?>
    </div>

    <form action="wordgenerators/generateword" method="post">
        <input type="hidden" value="generate"/>
        <input type="submit" value="Generate Random Word"/>
    </form>

    <hr />

    <form action="wordgenerators/reset" method="post">
        <input type="hidden" value="reset"/>
        <input type="submit" value="Destroy Session"/>
    </form>

</div>

</body>
</html>