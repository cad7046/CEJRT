<!-- ISTE-240 CEJRT Group Project -->
<!-- 10/17/2020 -->

<?php
    include 'assets/inc/header.php';
    include 'assets/inc/nav.php';
    // Possibly add breadcrumbs under nav bar?
?>

<main>
    <h1>Permissions</h1>
    <p>Unix features a permission-centered hierarchical file system, allowing users to fully customize how their stored data is viewable and interactable. There are three commonly used file attributes: read, write and execute. Read (r) signifies that a file can be read, write (w) allows files to be modified and execute (e) allows users to run a file as a program. Directory attributes follow a similar format, with read (r) granting the ability for a user to search through a file directory, write (w) allowing for the creation of deletion from a directory, and execute (e) allowing users to enter a directory and access its files. The file permission system proves itself invaluable when organizing and maintaining information stored in a directory, as it provides users with a meaningful and easy-to-interpret method of assigning permissions to their files and directories. </p>
    <p> In order to change a permission for a file or directory, a user can use the command ‘chmod’ (also known as change mode). Although there are arguably slightly easier methods of modifying these permissions, it is a good habit to learn the absolute permission system.</p>
<p> 0 No permission    ---
<br> 1 Execute permission    --x
<br> 2 Write permission    -w-
<br> 3 Execute and write permission: 1 (execute) + 2 (write) = 3    -wx
<br> 4 Read permission    r--
<br> 5 Read and execute permission: 4 (read) + 1 (execute) = 5     r-x
<br> 6 Read and write permission: 4 (read) + 2 (write) = 6    rw-
<br> 7 All permissions: 4 (read) + 2 (write) + 1 (execute) = 7    rwx</p>
    
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