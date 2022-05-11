<!DOCTYPE html>
<html>
    
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
 
       <section class="container " >
        <div class="jumbotron w-50 mt-5  ">
        <h2>bilgilerinizi giriniz </h2>
            <form method="post" name="frm1" id="frm1" action="login.php" onsubmit="return kontrolet()">
            <fieldset>

            <ul>
            <li>
        Email: <input type="text" id="email" name="email"placeholder="örnek:b1812100001@sakarya.edu.tr"  ><br>
            </li>
            <li>
            Password: <input type="password" id="password" name="password"placeholder="b1812100001" ><br>
            </li>
            <li>
            <input type="submit" value="Login">
                        <input
                          type="button"
                          onclick="resetfun()"
                          value="Reset">
            </li>

            </ul>
       
        </fieldset>
        
    </form>

       


        </div>


       </section>
       <script>
      //
      function kontrolet() {
        var email = document.forms["frm1"]["email"].value;
        var pass = document.forms["frm1"]["password"].value;
        var posta =
          /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (pass==""|| email == "" ) {
          alert("alanlar boşluk içermemeli");
          return false;
        } else if (mailformat.test(email) == false) {
          alert("Geçersiz Mail Adresi!");
          return false;
        }
        
       
      
      }

      function submitfun() {
        document.getElementById("frm1").submit();
      }
      function resetfun() {
        document.getElementById("frm1").reset();
      }
    </script>
 
</body>
</html>