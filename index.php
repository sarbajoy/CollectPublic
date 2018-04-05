<html>
<head>
<title> New User Form </title>
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: none;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    width: 710px;
    font-family: 'Objective';
    font-size: 18px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: hidden;
    border-top: none;
    font-family: 'Objective';
}
</style>
</head>
<body>
  <div id="headerTable" align="center">
    <div id="logo">
      <img src="SiteImage/collectLogo.png"  width="1024"/>
    </div>

<!-- Tab links -->
    <div class="tab">
      <button class="tablinks" onclick="openForm(event, 'LogIn')" id="defaultOpen">Log In</button>
      <button class="tablinks" onclick="openForm(event, 'SignUp')">Sign Up</button>
    </div>

    <!-- Tab content -->
    <div id="LogIn" class="tabcontent">
      <h3>      </h3>
      <form action="findUser.php" method="post">
        Email:<br>
        <input type="email" name="x_email" font-family="Objective" required><br>
        <p>      </p>

        Password:<br>
        <input type="password" name="x_password" required><br>
        <p>      </p>
        <input type="submit" value="Submit" ><br>
      </form>
    </div>

    <div id="SignUp" class="tabcontent">
      <h3>     </h3>
      <form action="addUser.php" method="post">
         Email:<br>
        <input type="email" name="u_email" required><br>
        <p>      </p>

        First Name:<br>
        <input type="text" name="u_fname" required><br>
        <p>      </p>

        Last Name:<br>
        <input type="text" name="u_lname" required><br>
        <p>      </p>

        Password:<br>
        <input type="password" name="password" required><br>
        <p>      </p>

        Confirm Password:<br>
        <input type="password" name="cPassword" required><br>
        <p>      </p>


        <input type="submit" value="Submit" ><br>

      </form>
    </div>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openForm(evt, formName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(formName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
