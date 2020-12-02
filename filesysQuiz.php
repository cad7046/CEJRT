  
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
            <label>Which command will copy a file: </label>
            <br />

            <input type="radio" value="A" name="1">
            <label>A. cp</label>
            <br />

            <input type="radio" value="B" name="1">
            <label>B. mv</label>
            <br />

            <input type="radio" value="C" name="1">
            <label>C. rm</label>
            <br />

            <input type="radio" value="D" name="1">
            <label>D. ls</label>
            <br />
        </div>
        <p class="quizans">A</p>

        <div class="mcquestion quizquest">
            <label>Which command will move/rename a file: </label>
            <br />

            <input type="radio" value="A" name="2">
            <label>A. cp</label>
            <br />

            <input type="radio" value="B" name="2">
            <label>B. mv</label>
            <br />

            <input type="radio" value="C" name="2">
            <label>C. rm</label>
            <br />

            <input type="radio" value="D" name="2">
            <label>D. ls</label>
            <br />
        </div>
        <p class="quizans">B</p>

        <input type="submit" value="Check Answers">
    </form>
</main>

<script src="assets/js/quiz.js"></script>

<?php
    include 'assets/inc/footer.php';
?>
