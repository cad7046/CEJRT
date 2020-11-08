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
‘cd /’ = navigates to the root directory
‘cd ..’ = navigates to the directory one level above the current one
‘cd ~’ = navigates to the home directory
It is important to fully understand how to navigate through a file system or directory in order to stay organized and focused when creating projects or interacting with information.*
Creating Files/Directories
    The ‘mkdir’ command is used to create a new subdirectory in a Unix directory. The syntax for the command is as follows:
                    ‘mkdir [path] [name]’
    By using the ‘-p’ modifier in conjunction with ‘mkdir’ it is possible to create a specific path system. This is helpful for creating new directories in locations that might not have existed previously.
    A basic overview of other helpful file/directory creational commands are as follows:
                                                              ‘rm’ = remove
                                                ‘rmdir’ = remove empty directories
                                                                       ‘cp’ = copy
                                                                       ‘mv’ = move
                          ‘touch’ = update the access or modification date of a file/directory
</p>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</main>

<?php
    include 'assets/inc/footer.php';
?>