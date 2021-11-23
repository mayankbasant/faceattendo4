<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>app screen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>FACEATTENDO</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <a href="logout.php"><button>logout</button></a>
                    
                </ul>
            </nav>
        </div>
        <div class="sub-page2">
          <div class="overlay"></div>
           <div class="text">
               <p>FACE<br>ATTENDO</p>
            </div>
        </div>
        <div id='attendance-page' class="attendance-page">
            <div class="attendance-box">
                <span onclick="document.getElementById('attendance-sheet').style.display='none'" class="close">&times;</span>
                <div class="form2">
                    <form class = textarea, action="validate.php", method="post">
                        <left><h1 class="main-heading2">ATTENDANCE</h1></left>
                        <br>
                        <br>
                           <div class="h2">PARIDHI</h2>
                           <br>
                           <br>

<table>
  <tr>
    <th>DATE</th>
    <th>ENTRY TIME</th>
    <th>RESULT</th>
  </tr>
  <tr>
    <td>19/10/2021</td>
    <td>10.02</td>
    <td>true</td>
  </tr>
  <tr>
    <td>19/10/2021</td>
    <td>10.06</td>
    <td>true</td>
  </tr>
</table>

				        
				    </form>
                </div>
            </div>
        </div>
        
    </div>

    
</body>
</html>