<!-- ISTE-240 CEJRT Group Project -->
<!-- 10/17/2020 -->

<?php
    include 'assets/inc/header.php';
    include 'assets/inc/nav.php';
    // Possibly add breadcrumbs under nav bar?
?>

<main>
    <h1>UNIX Filesystem</h1>
    <p><br> Creating Files/Directories
        <br> The ‘mkdir’ command is used to create a new subdirectory in a Unix directory. The syntax for the command is as follows:
        <br> ‘mkdir [path] [name]’
        <br> By using the ‘-p’ modifier in conjunction with ‘mkdir’ it is possible to create a specific path system. This is helpful for creating new directories in locations that might not have existed previously.
        <br> A basic overview of other helpful file/directory creational commands are as follows:
        <br> ‘rm’ = remove
        <br> ‘rmdir’ = remove empty directories
        <br> ‘cp’ = copy
        <br> ‘mv’ = move
        <br> ‘touch’ = update the access or modification date of a file/directory</p>
    <br />
    <br />
    
    
    <h1>Filesystem Tutorial</h1>
    <p>Now that you are comfortable with navigating through your files using UNIX, let's make a directory to practice with.</p>
    <p>From your home directory, navigate to a directory where you want to store your projects. </p>
    <p>For example, you might want to navigate to your documents folder.</p>
    <h2>cd documents</h2>
    <p>Now, you can create the directory using the command </p>
    <h2>mkdir [directory name]</h2>
    <p>Now that you have made the directory, you can navigate to that directory using</p>
    <h2>cd [directory name]</h2>
    <p>Now you can make files in this directory. Make a file using the command</p>
    <h2>touch [filename]</h2>
    <p>This will make an empty file in your current directory.</p>
    <p>To copy a file to another file, to copy a file to a directory, or to copy a directory to another directory. The command is always in the format cd [source] [target] and the target file or directory may or may not exist. If the file already exists, it will replace the content of the target file with the source file.</p>
    <p>Let's try to copy this file we just made using the command to a new file.</p>
    <h2>cp [filename] [secondfilename]</h2>
    <p>Now, let's make another directory inside of the directory you just made using the same command</p>
    <h2>mkdir [directory name]</h2>
    <p>Now you have another directory inside of the one you made previously - we will be using this to practice copying and moving files.</p>
    <p>To move the file you just made to a different directory, you can use the command</p>
    <h2>mv [filename] [directory name]/[filename]</h2>
    <p>This essentially creates a new file with the same filename in the directory specified and removes the one in your current directory. You can also use this command in other ways such as</p>
    <h2>mv [filename] [newfilename]</h2>
    <p>This will rename the file in your current directory.</p>
    <p>You can also use this command to copy over multiple files to a target directory using</p>
    <h2>cp [filename] [secondfilename] [directory name]</h2>
    <p>Now, let's practice removing files and directories. Let's remove the directory you just placed the files into. Try using the command</p>
    <h2>rmdir [directory name]</h2>
    <p>You will get an error, because rmdir is only used to remove empty directories! Let's remove the files first.</p>
    <h2>cd [directory name]</h2>
    <h2>rm [filename]</h2>
    <h2>rm [secondfilename]</h2>
    <h2>cd ../</h2>
    <p>Now that you removed the files from the directory, we should be able to use the command now.</p>
    <h2>rmdir [directory name]</h2>
    <p>That was a lot of work, right? Luckily, you can just use the command</p>
    <h2>rm [directory name]</h2>
    <p>This will remove the directory and it's contents!</p>
    <p>Now you should be more comfortable with making, moving, and removing files and directories.</p>
</main>

<?php
    include 'assets/inc/footer.php';
?>