<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "sort";

// Connect
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <style>
  
      body {
        font-family: "Segoe UI", Arial, sans-serif;
        text-align: center;
        background: white;
        margin: 0;
        padding: 0;
      }

  
      header {
        position: relative;
        background: pink;
        color: white;
        padding: 20px;
        z-index: 1;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
      }

      header h2 {
        position: relative;
        z-index: 2;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        font-size: 50px;
        margin: 10px 0;
      }

      header p {
        font-size: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        margin-bottom: 0;
      }

      .header-content {
  display: flex;
  align-items: center;
  justify-content: space-between; 
  position: relative;
  padding: 0 40px;
}

.logo {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.left-logo {
  margin-right: auto;
}

.right-logo {
  margin-left: auto;
}

.header-text {
  flex: 1;
  text-align: center;
}




      form {
        margin-top: 30px;
      }

      select, button {
        padding: 10px 15px;
        margin: 10px;
        font-size: 16px;
        border-radius: 8px;
        border: none;
        outline: none;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      button {
        background-color: #ff69b4;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
      }

      button:hover {
        background-color: #e75480;
      }


      img {
        width: 400px;
        margin-top: 20px;
        border-radius: 15px;
        border: 3px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      }

      .artist-name {
  font-size: 26px;
  color: #ff69b4;
  font-weight: bold;
  margin-top: 15px;
  margin-bottom: 10px;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
}


      audio {
        margin-top: 15px;
      }

     
      .table-container {
        width: 90%;
        margin: 40px auto;
        overflow-x: auto;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: white;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        min-width: 400px;
      }

      th, td {
        padding: 15px;
        border-top: 1px solid #f4a6c1;
        font-size: 16px;
        text-align: center;
      }

      
      .note-container {
        margin: 30px auto;
        width: 80%;
        background: #ffe4ec;
        border-left: 6px solid #ff69b4;
        padding: 15px 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        font-size: 16px;
        color: #b30059;
        text-align: center;
        font-weight: 500;
        animation: fadeIn 0.5s ease-in;
      }

      @keyframes fadeIn {
        from {
           opacity: 0; transform: translateY(10px);
           }
        to { 
          opacity: 1; transform: translateY(0); 
        }
      }


      footer {
        margin-top: 100px;
        padding: 25px 10px;
        background: pink;
        color: white;
        font-size: 14px;
        box-shadow: 0 -4px 10px rgba(0,0,0,0.2);
      }

   

      /* Tablets */
      @media (max-width: 1024px) {
        header h2 { 
          font-size: 40px;
         }
        header p { 
          font-size: 18px;
         }
        img { 
          width: 320px; 
        }
      }

      /* Mobile (medium) */
      @media (max-width: 768px) {
        header h2 {
           font-size: 32px; 
          }
        header p { 
          font-size: 16px;
         }

        select, button {
          font-size: 14px;
          padding: 6px 10px;
        }

        form {
          display: flex;
          flex-direction: column;
          align-items: center;
        }

        img { 
          width: 260px; }
        th, td { 
          padding: 10px; font-size: 14px;
         }

        .note-container { 
          width: 90%; font-size: 14px;
         }

         .header-content {
    flex-direction: column;
    gap: 10px;
    padding: 10px;
  }

  .logo {
    width: 70px;
    height: 70px;
  }

      }

      /* Small mobile (down to 320px) */
      @media (max-width: 480px) {
        header h2 { 
          font-size: 24px;
         }
        header p { 
          font-size: 13px; 
        }

        select, button {
          width: 90%;
          font-size: 13px;
          padding: 8px;
          margin-top: 10px;
        }

        img {
          width: 200px;
        }

        .table-container {
          width: 95%;
          overflow-x: auto;
        }

        table {
          min-width: 300px;
        }

        th, td {
          font-size: 12px;
          padding: 8px;
        }

        .note-container {
          width: 90%;
          padding: 10px;
          font-size: 13px;
        }

        footer {
          font-size: 12px;
          padding: 20px 5px;
        }
      }

      /* Tiny phones (below 340px) */
      @media (max-width: 340px) {
        header h2 {
           font-size: 20px;
           }
        header p { 
          font-size: 12px; 
        }
        select, button {
           font-size: 12px; padding: 6px;
           }
        img { 
          width: 180px;
         }
        table {
           min-width: 280px;
           }
        th, td {
           font-size: 11px; 
          }
        footer {
           font-size: 11px; 
          }
      }
    </style>
  </head>

  <body>
<header>
  <div class="header-content">
    <img src="images/gf.jpg" alt="Left Logo" class="logo left-logo">

    <div class="header-text">
      <h2>Artist Finder</h2>
      <p>Where you know who are my favorites!</p>
    </div>

    <img src="images/sabi.jpg" alt="Right Logo" class="logo right-logo">
  </div>
</header>


    <form method="POST">
      <select name="artist" required>
        <option value="All">All Artists</option>
        <option value="Avril Lavigne">Avril Lavigne</option>
        <option value="Lady Gaga">Lady Gaga</option>
        <option value="Sabrina Carpenter">Sabrina Carpenter</option>
      </select>
      <button type="submit" name="search">Search</button>
    </form>

    <?php
      $artist = isset($_POST['artist']) ? $_POST['artist'] : 'All';

if ($artist == "Avril Lavigne") {
  echo "<img src='images/what.jpg' alt='Avril Lavigne'>";
  echo "<h3 class='artist-name'>Avril Lavigne</h3>";
  echo "<audio controls autoplay>
          <source src='audio/GIRLFRIEND.mp3' type='audio/mpeg'>
        </audio>";
} elseif ($artist == "Lady Gaga") {
  echo "<img src='images/abracadabra.jpg' alt='Lady Gaga'>";
  echo "<h3 class='artist-name'>Lady Gaga</h3>";
  echo "<audio controls autoplay>
          <source src='audio/poker.mp3' type='audio/mpeg'>
        </audio>";
} elseif ($artist == "Sabrina Carpenter") {
  echo "<img src='images/mans.jpg' alt='Sabrina Carpenter'>";
  echo "<h3 class='artist-name'>Sabrina Carpenter</h3>";
  echo "<audio controls autoplay>
          <source src='audio/mans.mp3' type='audio/mpeg'>
        </audio>";
} else {
  echo "<img src='images/all.jpg' alt='All Artists'>";
  echo "<h3 class='artist-name'>All Artists</h3>";
}

    ?>

    <div class="table-container">
      <table>
        <tr>
          <th>SONG ID</th>
          <th>SONG NAME</th>
          <th>ALBUM NAME</th>
          <th>DATE RELEASE</th>
        </tr>

        <?php
          if ($artist == "All") {
            $sql = "SELECT * FROM songs";
            $result = $conn->query($sql);
          } else {
            $sql = "SELECT * FROM songs WHERE Name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $artist);
            $stmt->execute();
            $result = $stmt->get_result();
          }

          if ($result && $result->num_rows > 0) {
            $rowCount = 0;
            while ($row = $result->fetch_assoc()) {
              $rowCount++;
              $bgColor = ($rowCount % 2 == 0) ? '#ffe4ec' : '#ffffff';
              echo "<tr style='background-color: $bgColor;'>
                      <td>{$row['Song_ID']}</td>
                      <td>{$row['Song_Name']}</td>
                      <td>{$row['Album_Name']}</td>
                      <td>{$row['Date_Release']}</td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='4'>No songs found for this artist.</td></tr>";
          }
        ?>
      </table>
    </div>

    <?php
      if ($artist != "All") {
        echo '
        <div class="note-container">
          <p>🎵The highlighted row shows the song that’s currently playing.</p>
        </div>';
      }
    ?>

    <footer>
      <p>Made by: Gail Flores</p>
    </footer>
  </body>
</html>
