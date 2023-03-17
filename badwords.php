<!-- PHP -->
<?php

$normal_text = $_GET['paragraph'];
// var_dump($_GET);

$normal_lenght = strlen($normal_text);
// var_dump($_GET);

$bad_word = $_GET['badword'];
// var_dump($_GET);

$censored_text = str_replace($bad_word,'****',$normal_text);

$censored_length = strlen($censored_text);
?>

<!-- HTML -->
<section class="section">
    <div class="container-head">
        <h1 class="main-title">php badwords</h1>
    </div>

    <div class="container row">
        <div class="row-item">
            <p class="title">normal text:</p>
            <div class="items">
                <p class="printed-normal row-item"><?php echo $normal_text ?></p>
                <p class="pararaph-length"><?php echo $normal_lenght?></p>
            </div>
        </div>

        <div class="row-item">
            <p class="title">censored word:</p>
            <p class="censor row-item"><?php echo $bad_word ?></p>
        </div>

        <div class="row-item">
            <p class="title">censored text:</p>
            <div class="items">
                <p class="printed-censor row-item"><?php echo $censored_text ?></p>
                <p class="pararaph-length"><?php echo $censored_length?></p>
            </div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.section {
    padding: 3rem;
}

.container-head {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3rem;
    border: 2px solid rgb(35, 255, 189);
    background-color: rgba(222, 245, 255, 0.5)
}

.main-title {
    text-transform: uppercase;
    text-align: center;
    color: rgb(101, 255, 199);
}

.row {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.row-item {
    flex-basis: 30%;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.items {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.title {
    text-transform: uppercase;
    color: rgb(75, 178, 129);
    font-style: italic;
}

.printed-normal {
    padding: 0.5rem;
    border: 1px solid rgba(50, 50, 255, 1);
    background-color: rgba(50, 50, 255, 0.5);
    color: white;
    flex-grow: 1;
}

.pararaph-length {
    padding: 0.5rem;
    color: white;
    border: 1px solid rgba(50, 50, 255, 1);
    background-color: rgba(50, 50, 255, 0.5);
}

.printed-censor {
    padding: 0.5rem;
    border: 1px solid rgba(50, 50, 255, 1);
    background-color: rgba(50, 50, 255, 0.5);
    color: white;
    flex-grow: 1;
}

.censor {
    color: green;
    padding: 0.5rem;
    border: 1px solid rgba(50, 50, 255, 1);
    background-color: rgba(50, 50, 255, 0.5);
    color: white;
}
</style>