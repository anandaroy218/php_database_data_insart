<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            list-style: none;
            scroll-behavior: smooth;
        }
      body{
        background: #F9DF6D;
      }
        .hader{
        display: flex;
        justify-content: space-between;
        padding: 1rem;
      }

      .hader > .sub_menu{
        padding-right: 5rem;
        display: flex;
        gap: 3rem;

      }
      input{
        width: 100vh;
        height: 5vh;
        margin-bottom: 1rem;
        border-color: white;
      }

      #author{
        width: 40vh;
        margin-top: 1rem;
      }
      #description{
        height: 20vh;
        width: 100vh;
        border-color: white;
        
      }
      .conrent_box{
      margin-top: 10rem;
      margin-left: 26rem;
      }
      button{
        width: 57vh;
        height: 5vh;
        background: black;
        color: white;
        margin-left: 1rem;

      }
      h2{
        margin-left: 17rem;
        margin-bottom: 2rem;
      }

    </style>
</head>
<body>
    

        <div class="hader">
            <div class="logo">
                <h1>Ananda Roy</h1>
            </div>
            <div class="sub_menu">
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </div>

        </div>

        <div class="conrent_box">
            <form action="./action.php" method="post" >
              <h2><u>Create a Post</u></h2>
                <input type="text" id="title" name="title" placeholder="Post Title..."><br>
                <textarea name="description" id="description"  >Description</textarea><br>
                <input type="text" id="author" name="author" placeholder="Author Name">
                <button>Create Post</button>
              </form> 
              
        </div>






   
</body>
</html>