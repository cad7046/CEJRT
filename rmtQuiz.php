  
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
            <label>Which of these is an FTP program: </label>
            <br />

            <input type="radio" value="A" name="1">
            <label>A. Filezilla</label>
            <br />

            <input type="radio" value="B" name="1">
            <label>B. HTTP</label>
            <br />

            <input type="radio" value="C" name="1">
            <label>C. Github</label>
            <br />

            <input type="radio" value="D" name="1">
            <label>D. Samba</label>
            <br />
        </div>
        <p class="quizans">A</p>

        <label>What command allows you to connect remotely to a shell? </label>
        <input class="ftbquestion quizquest" type="text">
        <p class="quizans">ssh</p>
        <br />

        <input type="submit" value="Check Answers">
    </form>
</main>

<script src="assets/js/quiz.js"></script>

<?php
    include 'assets/inc/footer.php';
?>
