<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      #logo {
        width: 300px;
        height: 62px;
        margin-right: 0px;
        float: left;
      }
      #collected {
        width: 150px;
        height: 60px;
        margin-right: 50px;
        margin-top: 5px;
        margin-left: 44px;
        display: inline-block;
        float: left;
      }
      #pictures {
        width: 150px;
        height: 60px;
        margin-right: 0px;
        margin-top: 5px;
        margin-left: 44px;
        display: inline-block;
        float: left;
      }
      #data {
        width: 150px;
        height: 60px;
        margin-right: 0px;
        margin-top: 5px;
        margin-left: 44px;
        float: left;
      }
      #logout {
        width: 150px;
        height: 60px;
        margin-right: 0px;
        margin-top: 5px;
        margin-left: 44px;
        float: left;
      }
    </style>
  </head>

  <body>
    <div id="headerTable" align="center">
      <div id="logo">
        <a href="http://localhost:8888/Collect/local-mainPage.php">
          <img src="SiteImage/collect_grey.png" height="62" width="300"/>
        </a>
      </div>

      <div id="collected">
        <a href="http://localhost:8888/Collect/imageDisplay.php">
          <img src="SiteImage/collected_black.png" height="62" width="250" />
        </a>

      </div>
      <div id="pictures">
        <a href="http://localhost:8888/Collect/imageDisplay-unprocessed.php">
          <img src="SiteImage/pictures_grey.png" height="62" width="250" />
        </a>
      </div>

      <div id="data">
        <a href="https://collect-fydp.herokuapp.com/dataTable.php">
          <img src="SiteImage/data_grey.png" height="62" width="250" />
        </a>
      </div>

      <div id="logout">
        <a href="logout.php">
          <img src="SiteImage/logout_grey.png" height="62" width="250" />
        </a>
      </div>

    </div>
  </body>
</html>
