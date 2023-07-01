<?php
include_once 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "UPDATE users SET name='$name', mobile='$mobile', email='$email' WHERE id=$id");

    header("Location: index.php");
    exit();
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $mobile = $user_data['mobile'];
    $email = $user_data['email'];
}
?>

<html>
    <head>
        <title>Edit User Data</title>
    </head>

    <body>
        <a href="index.php">Home</a><br/><br/>

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>