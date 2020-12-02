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
    
    <h1>Permissions Tutorials</h1>
    <p>'chmod' changes the permissions for a directory or file.  The following commands will
        change the permissions for the owner, group, and user.</p>
    <h2>chmod 777 file</h2>
    <p>No restrictions on any permissions for anyone (rwxrwxrwx)</p>
    <h2>chmod 755 file</h2>
    <p>The owner of the file may read, write, and execute the file.  The group and user may read and execute
        the file (rwxr-xr-x)</p>
    <h2>chmod 700 file</h2>
    <p>The owner of the file may read, write, and execute the file.  Only the owner has permissions to do anything.
        (rwx------)</p>
    <h2>chmod 666 file</h2>
    <p>Owner, group, and user are able to only read and write the file. (rw-rw-rw-)</p>
    <h2>chmod 644 file</h2>
    <p>The owner may read and write a file, whereas the others can only read (rw-r--r--)</p>
    <h2>chmod 600 file</h2>
    <p>The owner may read and write a file while the others are unable to do anything at all (rw-------)</p>
    <br>
    <h2>chmod 777 directory</h2>
    <p>There are no restrictions for any groups.  Anyone can list files and create and delete files.</p>
    <h2>chmod 755 directory</h2>
    <p>The directory owner has full access while the other groups can list the directory but not create or delete files.</p>
    <h2>chmod 700 directory</h2>
    <p>The directory owner has full access while no one else has any permissions.</p>
</main>

<?php
    include 'assets/inc/footer.php';
?>