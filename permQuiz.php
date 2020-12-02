  
<!-- ISTE-240 CEJRT Group Project -->
<!-- 11/28/2020 -->

<?php
    include 'assets/inc/header.php';
    include 'assets/inc/nav.php';
    // Possibly add breadcrumbs under nav bar?
?>

<main>
    <form id="qform">
        <div class="mcquestion quizquest">
            <label>What hex value symbolizes fully open permissions: </label>
            <br />

            <input type="radio" value="A" name="1">
            <label>A. 888</label>
            <br />

            <input type="radio" value="B" name="1">
            <label>B. 555</label>
            <br />

            <input type="radio" value="C" name="1">
            <label>C. 777</label>
            <br />

            <input type="radio" value="D" name="1">
            <label>D. 000</label>
            <br />
        </div>
        <p class="quizans">C</p>

        <label>What command changes permissions: </label>
        <input class="ftbquestion quizquest" type="text">
        <p class="quizans">chmod</p>
        <br />

        <input type="submit" value="Check Answers">
    </form>
</main>

<script src="assets/js/quiz.js"></script>

<?php
    include 'assets/inc/footer.php';
?>
