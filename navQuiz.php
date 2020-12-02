  
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
            <label>To switch directories use: </label>
            <br />

            <input type="radio" value="A" name="1">
            <label>A. ls</label>
            <br />

            <input type="radio" value="B" name="1">
            <label>B. pwd</label>
            <br />

            <input type="radio" value="C" name="1">
            <label>C. ip addr</label>
            <br />

            <input type="radio" value="D" name="1">
            <label>D. cd</label>
            <br />
        </div>
        <p class="quizans">D</p>

        <label>What command shows the current directory: </label>
        <input class="ftbquestion quizquest" type="text">
        <p class="quizans">pwd</p>
        <br />

        <div class="mcquestion quizquest">
            <label>To make mkdir create a full path that doesn't yet exist use: </label>
            <br />

            <input type="radio" value="A" name="2">
            <label>A. -p</label>
            <br />

            <input type="radio" value="B" name="2">
            <label>B. -f</label>
            <br />

            <input type="radio" value="C" name="2">
            <label>C. --FORCE</label>
            <br />

            <input type="radio" value="D" name="2">
            <label>D. -r</label>
            <br />
        </div>
        <p class="quizans">A</p>

        <div class="mcquestion quizquest">
            <label>What character represents the home directory: </label>
            <br />

            <input type="radio" value="A" name="3">
            <label>A. -</label>
            <br />

            <input type="radio" value="B" name="3">
            <label>B. ~</label>
            <br />

            <input type="radio" value="C" name="3">
            <label>C. =</label>
            <br />

            <input type="radio" value="D" name="3">
            <label>D. ^</label>
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
