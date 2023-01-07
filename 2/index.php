<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tel</title>
    <link rel="stylesheet" href="Untitled-1.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Education is the most powerful weapon which can change the world</h3>
        
          

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p></p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>Dont loose your hope.We will help you in going back to your school again!!</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p></p>
            </div>
          </div>

          <div class="social-media">
            <p></p>
            <div class="social-icons">
              <a href="#">
                
              </a>
              <a href="#">
                
              </a>
              <a href="#">
               
              </a>
              <a href="#">
                
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="insert.php" autocomplete="off" method="POST">
            <h3 class="title">Tell us more ...</h3>
            <div class="input-container">
              <p style="color: white;margin-left: 10px;">Student Name:</p>
              <input type="text" name="name" class="input" />
              
            
            </div>
            <div class="input-container">
                <p style="color: white;margin-left: 10px;">Dropped at Class:</p>
              <input type="number" min="1" max="12" name="class" class="input" />
              
            </div>
            <div class="input-container">
                <p style="color: white;margin-left: 10px;">Phone no:</p>
              <input type="tel" maxlength="10" minlength="10" name="phone" class="input" />
              
              <span>Phone</span>
            </div>
            <div class="input-container">
                <p style="color: white;margin-left: 10px;">State Name:</p>
                <input type="tel" name="statename" class="input" />
                
            </div>
            
            <input type="submit" value="Submit" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>