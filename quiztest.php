<!-- ISTE-240 CEJRT Group Project -->
<!-- 10/17/2020 -->

<?php
    include 'assets/inc/header.php';
    include 'assets/inc/nav.php';
    // Possibly add breadcrumbs under nav bar?
?>

<main>
    <form id="qform">
        <div class="mcquestion quizquest">
            <label>This is a Multiple Choice Question.</label>
            <br />

            <input type="radio" value="A" name="1">
            <label>A. This is Answer A.</label>
            <br />

            <input type="radio" value="B" name="1">
            <label>B. This is Answer B.</label>
            <br />

            <input type="radio" value="C" name="1">
            <label>C. This is Answer C.</label>
            <br />

            <input type="radio" value="D" name="1">
            <label>D. This is Answer D.</label>
            <br />
        </div>
        <p class="quizans">A</p>

        <label>This is a Fill in the Blank Question: </label>
        <input class="ftbquestion quizquest" type="text">
        <p class="quizans">testans</p>
        <br />

        <input type="submit" value="Check Answers">
    </form>
</main>

<script src="assets/js/quiz.js"></script>

<?php
    include 'assets/inc/footer.php';
?>