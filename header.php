<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      #logo {
        width: 300px;
        height: 62px;
        margin-right: 20px;
        float: left;
      }
      #capture {
        width: 150px;
        height: 60px;
        margin-right: 20px;
        margin-top: 25px;
        margin-left: 40px;
        display: inline-block;
        float: left;
      }
      #data {
        width: 150px;
        height: 60px;
        margin-right: 0px;
        margin-top: 25px;
        margin-left: 20px;
        float: left;
      }
      #logout {
        width: 150px;
        height: 60px;
        margin-right: 0px;
        margin-top: 25px;
        margin-left: 20px;
        float: left;
      }
    </style>
  </head>

  <body>
    <div id="headerTable" align="center">
      <div id="logo">
        <a href="http://localhost:8888/Collect/local-mainPage.php">
          <img src="SiteImage/collectLogo.png" height="62" width="300"/>
        </a>
      </div>

      <div id="capture">
        <a href="http://localhost:8888/Collect/imageDisplay.php">
          <img src="SiteImage/capturedHeader.png" />
        </a>
      </div>

      <div id="data">
        <a href="https://collect-fydp.herokuapp.com/dataTable.php">
          <img src="SiteImage/dataHeader.png" />
        </a>
      </div>

      <div id="logout">
        <a href="logout.php">
          <img src="SiteImage/logoutHeader.png" />
        </a>
      </div>

    </div>
  </body>
</html>
