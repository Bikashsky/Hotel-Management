<?php
    include_once ("../model/Customer.php");
    include_once ("../controller/CustomerController.php");

    if (isset($_POST['create'])) {
        $fname = $_POST['fn'];
        $lname = $_POST['ln'];
        $username = $_POST['un'];
        $contact = $_POST['con'];
        $address = $_POST['add'];
        $no_of_persons = $_POST['no'];
        $password = $_POST['pass'];

        $cu = new Customer();
        $cu -> setCustomerId(NULL);
        $cu -> setFirstName($fname);
        $cu -> setLastName($lname);
        $cu -> setUsername($username);
        $cu -> setAddress($address);
        $cu -> setContact($contact);
        $cu -> setNoOfPerson($no_of_persons);
        $cu -> setPassword($password);

        $u = new CustomerController();
        $res = $u -> register($cu);

        if ($res > 0) {
            echo $res;
            ?>
                <script>
                    alert("Successfulll");
                </script>
            <?php
        } else {
            echo $res;
            ?>
                <script>
                    alert("something went wrong");
                </script>
            <?php
        }

    }

?>

<html>
<head>
    <title>Hotel Reservation</title>
</head>
<body>


<div class="account">

    <fieldset>
        <legend> <h2><b>Create new Account</b></h2> </legend>

        <form action="#" method="post">
            <table border="0" width="800">
                <tr>
                    <td><b>First Name</b></td>
                    <td><input type="text" name="fn" placeholder="First Name" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td><input type="text" name="ln" placeholder="Last Name"class="text" required="required"  /></td>
                </tr>
                <tr>
                    <td><b>Username</b></td>
                    <td><input type="text"  name="un" placeholder="Username" class="text" required="required" /></td>
                </tr>
                <tr>
                    <td><b>Contact   </b></td>
                    <td><input type="text"  name="con" placeholder="Contact" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td><input type="text"  name="add" placeholder="Address" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>No of persons   </b></td>
                    <td><input type="number"  name="no" placeholder="No of person" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="password"  name="pass" placeholder="password" class="text" required="required"/></td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b></td>
                    <td><input type="password" name="repass" placeholder="confirm password" class="text" required="required" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit"  name="create" class="btncreate" value="Join"/></td>
                </tr>
            </table>
        </form>
        <center>Already a member&nbsp;<a href="login.php">LOGIN</a></center>
    </fieldset>
</div>



</body>


</html>