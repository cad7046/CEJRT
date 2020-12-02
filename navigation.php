<!-- ISTE-240 CEJRT Group Project -->
<!-- 10/17/2020 -->

<?php
    include 'assets/inc/header.php';
    include 'assets/inc/nav.php';
    // Possibly add breadcrumbs under nav bar?
?>

<main>
    <h1>Navigation</h1>
    <p>To find out where you are in relation to the location of a file system or directory, the ‘pwd’ (print working directory) command is used. ‘ls’ (or simply list) when ran will print out a directory listing, or map of files in the system you are working in. The ‘cd’ command (also known as change directory) uses a basic syntax of ‘cd [option] [directory]’. It allows users to change the current working directory they are in. In order to do so, there are a few different helpful navigational shortcuts one can use:
        <br> ‘cd /’ = navigates to the root directory
        <br> ‘cd ..’ = navigates to the directory one level above the current one
        <br> ‘cd ~’ = navigates to the home directory
        <br> It is important to fully understand how to navigate through a file system or directory in order to stay organized and focused when creating projects or interacting with information.
        <br> Creating Files/Directories
        <br> The ‘mkdir’ command is used to create a new subdirectory in a Unix directory. The syntax for the command is as follows:
        <br> ‘mkdir [path] [name]’
        <br> By using the ‘-p’ modifier in conjunction with ‘mkdir’ it is possible to create a specific path system. This is helpful for creating new directories in locations that might not have existed previously.
        <br> A basic overview of other helpful file/directory creational commands are as follows:
        <br> ‘rm’ = remove
        <br> ‘rmdir’ = remove empty directories
        <br> ‘cp’ = copy
        <br> ‘mv’ = move
        <br> ‘touch’ = update the access or modification date of a file/directory or create an empty file if the file doesn't exist
    </p>


    <h1>Navigation Tutorial</h1>
    <p>This is a tutorial that will walk you through navigating through your files using UNIX. You will practice using the commands : pwd, cd, and ls.</p>
    <p>First, let's print your working directory to show you where you are using the command:</p>
    <h2>pwd</h2>
    <p>Next, navigate to your home directory if you are not there already. You can do this by using the command: </p>
    <h2>cd</h2>
    <p>Print your working directory again, notice that you are now at your home directory.</p>
    <h2>pwd</h2>
    <p>Now, use the command ls to see directories you can navigate to. </p>
    <h2>ls</h2>
    <img src="assets/images/nav_tutorial.JPG" alt="Nav Tutorial" width="600" height="330">
    <p>You should see something like this. </p>
    <p>Now, choose a directory from the list you find, and navigate to it using the command </p>
    <h2>cd [filename]</h2>
    <p>Do this a couple more times to get yourself into a deeper directory in your system. Next, we will be practicing using dots to navigate through your directories.</p>
    <p>Use the command </p>
    <h2>cd ..</h2>
    <p>Notice that it takes you to your previous directory. You can also use this command to navigate to specific folders and files located underneath your previous directory such as cd../[filename] , cd../[directory name]. You can also combine ../ with another ../ to go up two or more directories. ../ is a very useful command to use when navigating directories</p>
    <p>Another useful cd shortcut is</p>
    <h2>cd - </h2>
    <p>This will take you back to your previous position.</p>
    <p>Now you should be more comfortable using various UNIX navigation commands. The commands we practiced are the most common and useful UNIX navigation commands for web development.</p>

</main>

<?php
    include 'assets/inc/footer.php';
?>
