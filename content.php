<?php include 'validation.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Business Form</title>
    </head>

    <body>
        <form action="content.php" method="post" id="searchUserForm">
            Business Name:
            <input type="text" name="businessName" id="businessName">
            <br>Location of Business:
            <input type="text" name="location" id="location">
            <br>Amount Billed:
            <input type="number" name="amountBilled" id="amountBilled">

            <br><input type="submit" value="Submit" id="submit">

        </form>
    </body>
</html>