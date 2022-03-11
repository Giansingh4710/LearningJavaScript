<?php

  $servername = "sql1.njit.edu";
  $username = "zma4";
  $password = "Z_viper908";
  $dbname = "zma4";
  $con = mysqli_connect($servername, $username, $password, $dbname);

  if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

  $fName = $_POST["firstName"];
  echo $fName;
  $lName = $_POST['lastName'];
  $pass = $_POST['password'];
  $id = $_POST['idNum'];

  $sql = "SELECT * FROM `it3` WHERE `Stylist First Name`='$fName' and `Stylist Last Name`='$lName' and `Stylist Password`='$pass' and `Stylist ID Number`='$id'";
  $result = $con->query($sql);

  $verified = false;

  if (mysqli_num_rows($result) > 0) {

    $verified = false;

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Art Of Hair Salon</title>
    <style>
      body {
        background-image: url("salon.jpg");
      }

      div.box {
        line-height: 2;
        text-align: center;
        margin: auto;
        width: 35%;
        background-color: #ffffff;
        border: 2px solid black;
        opacity: 0.8;
      }
    </style>
  </head>

  <body>
    <div class="box">
      <div class="heading">
        <h1>The Art Of Hair</h1>
      </div>
      <div class="data" style="color: blue; font-weight: bold">
        <form onsubmit="checkValid(event)" method="POST">
          <div>
            <label for="firstName">Stylist's First Name: </label>
            <input
              placeholder="Example: John"
              id="firstName"
              name="firstName"
              type="text"
            />
            Required
          </div>
          <div>
            <label for="lastName">Stylist's Last Name: </label>
            <input
              placeholder="Example: Chris"
              id="lastName"
              name="lastName"
              type="text"
            />
            Required
          </div>
          <div>
            <label for="password">Stylist's Password: </label>
            <input
              placeholder="Example: Stylist!1"
              id="password"
              name="password"
              type="text"
            />
            Required
          </div>
          <div>
            <label for="idNum">Stylist's ID #: </label>
            <input
              placeholder="Example: 12345678"
              id="idNum"
              name="idNum"
              type="text"
            />
            Required
          </div>
          <div>
            <label for="phoneNum">Stylist's Phone #: </label>
            <input
              placeholder="Example: 555-555-5555"
              id="phoneNum"
              name="phoneNum"
              type="text"
            />
            Required
          </div>
          <div>
            <label for="email">Stylist's Email: </label>
            <input
              placeholder="Example: abc@abc.com"
              id="email"
              name="email"
              type="text"
            />
            Only Required for Email Confirmation
          </div>
          <div>
            <input id="conf" name="conf" type="checkbox" />
            <label for="conf"
              >Check the box to request an Email Confirmation</label
            >
          </div>
          <div>
            <label for="transaction"> Select a Transaction:</label>
            <select id="transaction">
              <option value="Search the Stylist's Records">
                Search the Stylist's Records
              </option>
              <option value="Book a Client’s Appointment">
                Book a Client’s Appointment
              </option>
              <option value="Place a Client’s Order">
                Place a Client’s Order
              </option>
              <option value="Update a Client's Order">
                Update a Client's Order
              </option>
              <option value="Cancel a Client's Appointemnt">
                Cancel a Client's Appointemnt
              </option>
              <option value="Create a Client's Account">
                Create a Client's Account
              </option>
            </select>
          </div>
          <br />
          <input type="reset" />
          <input type="submit" id="submit" name="submit" />
        </form>
      </div>
    </div>
    <script>
      function checkValid(event) {
        event.preventDefault();

        //verification

        //declaration
        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const password = document.getElementById("password").value;
        const idNum = document.getElementById("idNum").value;
        const phoneNum = document.getElementById("phoneNum").value;
        const email = document.getElementById("email").value;
        const emailCheck = document.getElementById("conf").checked;

        let transaction = document.getElementById("transaction");
        transaction = transaction.options[transaction.selectedIndex].value;

        //validation
        const namePatternInvalid = /^[0-9]*$/;
        const passPattern =
          /(^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{3,10}$)/;
        const idPattern = /^[0-9]{8}$/;
        const phonePattern = /^\(?([0-9]{3})\)*[- ]([0-9]{3})*[- ]([0-9]{4})$/;
        const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        const regexFirstName = firstName.match(namePatternInvalid);
        const regexLastName = lastName.match(namePatternInvalid);
        const regexPass = password.match(passPattern);
        const regexId = idNum.match(idPattern);
        const regexPhone = phoneNum.match(phonePattern);
        const regexEmail = email.match(emailPattern);

        if (
          firstName == "" ||
          lastName == "" ||
          password == "" ||
          idNum == "" ||
          phoneNum == ""
        ) {
          alert("Fill out the required information!");
        } else {
          var verified;
          // let test=X
          // need to get value of verified from Database.php

          // if (verified) 
            <?php if ($verified): ?>
              alert("Verified");
            <?php else: ?>
              alert(
                "You have passed the validation, but your information was not succesfully verified. Please retry!"
              );
            <?php endif; ?>
          }
        }
      }
    </script>
  </body>
</html>
