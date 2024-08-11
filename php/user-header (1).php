<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/carousel-style.css">
    <link rel="stylesheet" href="../pages/admin_dashboard_1.css" >
    <link rel="stylesheet" href="../pages/admin_dashboard.css" >
    <link rel="stylesheet" href="../php/book_details.css" />

    <script type="text/javascript">
        <?php if (isset($message)): ?>
            alert("<?php echo $message; ?>");
        <?php endif; ?>
    </script>
    

    <style>

      .search{
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
      }

       .group-1171276977 {
    position: relative;
    width: 100%;
    box-sizing: border-box;
  }

        .container-16 {
    box-shadow: 0px -3px 19.2px 0px rgba(45, 94, 100, 0.15);
    background: #FFFFFF;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 18px 25.4px 18px 24.4px;
    width: 100%;
    height: fit-content;
    box-sizing: border-box;
  }

  .container-14 {
    margin: 5px 0 4px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 101.5px;
    height: fit-content;
    box-sizing: border-box;
  }

  .container-8 {
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
  }

  .container-19 {
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }

  .container-20 {
    margin-top: 2px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }

  .group-1171276972 {
    border-radius: 23px;
    background: #F18231;
    position: relative;
    /* margin-right: 30.5px; */
    display: flex;
    padding: 11px;
    width: 46px;
    height: 46px;
    box-sizing: border-box;
  }

  .container-7 {
    margin: 5px 31.9px 4px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }

  .container-10 {
    margin: 5px 0 4px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-sizing: border-box;
  }

  .search-for-2 {
    overflow-wrap: break-word;
    font-family: 'Poppins';
    font-weight: 600;
    font-size: 14px;
    color: #fff;
    background-color: #F18231;
    padding: 3% 40%;
    margin: 0px auto;
    border-radius: 20px;
    margin-bottom: 20px;
  }

  .container-13 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin: 0 20px 15px 20px;
  padding: 15px 22px;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-6 {
  margin: 0 20px 15px 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-21 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin-right: 24px;
  display: flex;
  padding: 15px 79.6px 15px 0;
  flex-grow: 1;
  flex-basis: 163px;
  box-sizing: border-box;
}

.container-17 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  display: flex;
  padding: 15px 91.1px 15px 0;
  flex-grow: 1;
  flex-basis: 163px;
  box-sizing: border-box;
}

.container-12 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin: 0 20px 15px 20px;
  padding: 10px 22px 95px 22px;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-11 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin: 0 20px 14px 20px;
  padding: 15px 22px;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-9 {
  margin: 0 20px 32px 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-23 {
  border-radius: 15px;
  background: #F18231;
  position: relative;
  margin-right: 24px;
  display: flex;
  padding: 15px 18.8px 15px 17px;
  flex-grow: 1;
  flex-basis: 163px;
  box-sizing: border-box;
}

.search-for-3 {
  margin: 0 20px 14px 20px;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Poppins';
  font-weight: 600;
  font-size: 14px;
  color: #000000;
}

.container-18 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin: 0 20px 15px 20px;
  padding: 15px 22px;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-3 {
  box-shadow: 0px 0px 8.9px 0px rgba(0, 0, 0, 0.11);
  border-radius: 15px;
  background: #FFFFFF;
  position: relative;
  margin: 0 20px 15px 20px;
  padding: 15px 22px 93px 22px;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.container-24 {
  border-radius: 20px;
  background: #F18231;
  position: relative;
  margin: 0 20px 19px 20px;
  display: flex;
  padding: 19px 0.7px 18px 0;
  width: calc(100% - 40px);
  box-sizing: border-box;
}

.search-for-1 {
  margin: 0 20px 10px 20px;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Poppins';
  font-weight: 600;
  font-size: 16px;
  color: #0A0A0A;
}
.container-33{
    display: flex;
    flex-direction: column;
}

.search-for-13 {
  overflow-wrap: break-word;
  font-family: 'Poppins';
  font-weight: 600;
  font-size: 16px;
  color: #FFFFFF;
  border: none;
  background-color: #F18231;
 
}

.ellipse-9 a{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px auto;
      }
      i{
        font-size: 25px;
        /* padding-left: 8px; */
      }

      

  
    </style>
</head>
<body>
    <div class="admin-dashboard">
        <div class="status-bar">
        </div>
        <div class="container-15">
            <div class="container">
                <div class="container-4">
                    <div class="container-5">
                        <div class="group-1171276968">
                            <div class="group">
                                <img class="vector" src="../assets/vectors/vector_64_x2.svg" />
                            </div>
                            <div class="group-1">
                                <img class="vector-1" src="../assets/vectors/vector_75_x2.svg" />
                            </div>
                            <div class="group-2">
                                <img class="vector-2" src="../assets/vectors/vector_59_x2.svg" />
                            </div>
                        </div>
                        <div class="welcome">
                            <div class="hello-welcome">
                                Hello, Welcome 👋
                            </div>
                            <span class="oseinti">
                                Guest
                            </span>
                        </div>
                    </div>
                    <div class="group-1171276967">
                        <div class="ellipse-9">
                            <a href="../pages/login.php">
                               
                                    <i style="font-size: 32px;display: flex;
        justify-content: center;
        align-items: center;padding-left: 6px;" class="fa-regular fa-user"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="frame-1171276967">
                <div class="container-2">

    <div class="search-for">
        <form action="search_results.php" method="GET" class="search">
            <input type="text" name="query" placeholder="Search Books" required>
            <button type="submit" style="display:none;"></button>
            <img class="fill-1" src="../assets/vectors/fill_17_x2.svg" alt="Search" onclick="document.querySelector('form').submit();" style="cursor:pointer;">
        </form>
    </div>
</div>

                    <div class="filter">
                        <img class="fill-11" src="../assets/vectors/fill_120_x2.svg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
