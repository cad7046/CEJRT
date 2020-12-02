<nav>
    <div id="hamburgerDiv">
        <img src="assets/images/hamburger.png" onclick="toggleHamburger();" alt="hamburger" height="32" width="32" id="hamburger">
    </div>

    <ul id="outer">
        <li class="nondrop" id="first"><a href="index.php">Homepage</a></li>
        <li class="nondrop"><a href="aboutunix.php">About UNIX</a></li>
        <li class="nondrop"><a href="navigation.php">Navigation</a></li>
        <li class="nondrop"><a href="filesystem.php">File System</a></li>
        <li class="nondrop"><a href="permissions.php">Permissions</a></li>
        <li class="nondrop"><a href="remotetools.php">Remote Tools</a></li>
        <li class="nondrop dropOuter" id="quizzes" onclick="toggleDrop(this);">Quizzes
            <ul class="dropdown">
                <li class="ddli"><a href="navQuiz.php">Navigation</a></li>
                <li class="ddli"><a href="permQuiz.php">Permissions</a></li>
                <li class="ddli"><a href="unixQuiz.php">UNIX</a></li>
                <li class="ddli"><a href="rmtQuiz.php">Remote Tools</a></li>
                <li class="ddli"><a href="filesysQuiz.php">Filesystem</a></li>
            </ul>
        </li>
    </ul>
</nav>
<script src="assets/js/mobileNavTool.js"></script>