<section class="section">
    <div class="container-head">
        <h1 class="main-title">php badwords</h1>
    </div>

    <div class="container">
        <form class="row" action="badwords.php" method="GET">
            <textarea class="row-item" name="paragraph" id="" cols="30" rows="10" placeholder="Type a message"></textarea>
            <input class="row-item" type="text" name="badword" placeholder="word censor">
            <button class="row-item" type="submit">Send</button>
        </form>
    </div>
</section>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

textarea, input, button {
    outline-style: none;
    border-style: none;
    font-size: 1rem;
    padding: 0.5rem;
    color:white;
    background-color: rgba(50, 50, 255, 0.5);
    border: 2px solid rgba(50, 50, 255, 1);
}

button {
    cursor: pointer;
}

button:hover {
    background-color: rgba(193, 92, 255, 0.5);
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
}
</style>