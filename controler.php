<?php
                
				

				function query($q)
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cms";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    $conn->set_charset("utf8");
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    
                    $result = mysqli_query($conn, $q);
                    return $result;
                }



    ?>