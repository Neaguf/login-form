<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        border: 3px solid #f1f1f1;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: rgb(56, 85, 158);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      .error {
        color: red;
      }

      button:hover {
        opacity: 0.8;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: rgb(56, 85, 158);
        color: white;
      }

      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <h2>Inregistreaza-te</h2>
      <p class='error'>EXISTA DEJA UN CONT CU ACEST USERNAME</p>
    <form action="<?=base_url('home/register'); ?>" method="post">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" name="username" required />

        <label for="password"><b>Parola</b></label>
        <input type="password" name="password" required />

        <button type="submit">Inregistreaza-te</button>
      </div>

      <div class="container" style="background-color: #f1f1f1">
        <a href="<?=base_url('home'); ?>" class="cancelbtn">Ai deja un cont?</a>
      </div>
    </form>
  </body>
</html>
