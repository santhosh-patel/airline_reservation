<!DOCTYPE html>
<html lang="en">
<head>
  <?php

  ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanel.css">
    <title>admin panel</title>
</head>
<body>
    <header >
        <div class="logo">
          <img src="" class="logo" id="" alt="" />
        </div>
        <nav class="d-flex">
          <ul class="d-flex">
            <li>country: <span class="small">India</span></li>
            <li>admin: <span class="small"><?php$usr?></span></li>
            <li><button> <a href="index.html"> logout</a></button></li>     
          </ul>
        </nav>
      </header>
      
      <section >
        <aside class="left-aside">
          <ul>
            <li>Dashboard</li>
            <h3>Visual</h3>
            <li>Layouts</li>
            <li>Pages</li>
            <h3>Content</h3>
            <li>forms</li>      
          </ul>
        </aside>
        <div class="content">
          <div class="table">
          <table>
            <tr>
              <th> ticket</th>
              <th> Name</th>
              <th> Type</th>
              <th> Flight</th>
              <th> via</th>
              <th> Origin</th>
              <th> Status</th>
            </tr>
            <tr>
              <td>01</td>
              <td>Joe Mackcarthy</td>
              <td>STD</td>
              <td> - </td>
              <td>Exploration</td>
              <td>USA</td>
              <td class="status-inactive">Inactive</td>
            </tr>
            <tr>
              <td>02</td>
              <td>Isabel Ferreira</td>
              <td>STD</td>
              <td> - </td>
              <td>Collector</td>
              <td>BR</td>
              <td class="status-inactive">Inactive</td>
            </tr>
            <tr>
              <td>03</td>
              <td>Rodrigo Viera</td>
              <td>STD</td>
              <td> - </td>
              <td>Defense</td>        
              <td>BR</td>
              <td class="status-active">active</td>
            </tr>
          </table>
          <div class="buttons">
            <button>Insert</button>
            <button>Options</button>
            <button>Filters</button>
            <button>Clear All</button>
          </div>
        </div>
          
        </div>
      </section>
      
      
</body>
</html>