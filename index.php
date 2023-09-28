<?php 

include './inc/db.php';

include './inc/form.php';

include './inc/select.php';

include './inc/db_close.php';

?>


<!DOCTYPE.html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
    <style>
        #demo{
            color: #0d6efd;
            padding: 10px;
        }
        #cards{
            display: none;
        }
    </style>
</head>
<body>
    
    <div class="container">
       
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal"> اكسب الان</h1>
                <p class="lead fw-normal">
                    انا احمد شعبان مطور ويب 
                </p>
                                <h3 id="demo"></h3>
                <a class="btn btn-outline-secondary" href="#">قريبا</a>
            </div>

        </div>
        
        <!--
        <ul class="list-group list-group-flush">
  <li class="list-group-item"> شرح كورسات html </li>
  <li class="list-group-item"> شرح كورسات الواجهه الاماميه</li>
  <li class="list-group-item"> شرح كورسات الواجهه الخلفيه</li>
  <li class="list-group-item"> كورسات مجانيه</li>
  <li class="list-group-item">تطبيقات عمليه علي القوالب</li>
</ul>
        -->
        
        <div class="position-relative overflow-hidden text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form  action="<?php
        $_SERVER['PHP_SELF']
        ?>"   method="POST">
            <h3> الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label"> الاسم الاول</label>
    <input type="text"  name="firstName"  class="form-control" id="firstName" value="<?php  echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"> <?php echo $errors['firstNameError']?>
    </div>
  </div>
  
  
    <div class="mb-3">
    <label for="lastName" class="form-label"> الاسم الثاني</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error">
        <?php echo $errors['lastNameError']?>
    </div>
  </div>


  <div class="mb-3">
    <label for="email" class="form-label error"> البريد الإلكتروني </label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php
    echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error">
        <?php echo $errors['emailError']?>
    </div>
  </div>

 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        </div>
        
        
        
        
        
        <!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#modal" >
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

                          <h5 class="modal-title" id="modalLabel"> الرابح في المسابقه</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $user) : ?>
              <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']).' '.htmlspecialchars($user['lastName']); ?></h1>
            <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>





    <div id="cards" class="row mb-5 pb-5">

    

   
    </div>
    
    
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
//choice the winner
const win =document.querySelector("#winner");


var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
});

win.addEventListener('click',function(){

setTimeout(function(){
    myModal.show();
},3000);

});



</script>



    
<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>



