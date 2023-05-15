<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tour Reservation Form</title>
</head>
<body>

    <h1 style="text-align: center;"> 
<div class="container">
        <div class="page-heading"> Tour Reservation Form               
    </h1>     
        <p style="text-align: center;">Let's know what you are interested to see!</p>
     <form class="mx-1 mx-md-4">
</div>
 
<hr>

</body>

<div class="container">
 
  <h2>Full Name</h2>

  <form method="post"class="form-inline" action="/action_page">
    <div class="form-group">
      
      <label for="text">First name</label>
      <input type="text" class="form-control" id="text" placeholder="Enter First name" name="F_name">


  
      <label for="text">Last name</label>
      <input type="text" class="form-control" id="text" placeholder="Enter Last name" name="L_name">



</div>

<div class="container">
 
<br>

 
    <div class="form-group">

      <label for="email">Email</label> 
     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> 

     <label class="form-label" for="phone">Phone number </label> 
      <input type="text" id="phone" class="form-control" placeholder="(000) 000-9999" />
    
   
    


  </form>
</div>
<br>

<form>
  <br>
  <label for="startDate">When are you planning to visit</label>
  <input id="startDate" class="form-control" type="date" />
</form>  

<br>
      <h4>How Many people are in group?</h4>
      <form class="form-inline" action="/action_page.php">
        <div class="form-outline">
          <input type="number" id="typeNumber" class="form-control" />

          <label class="form-label" for="typeNumber"></label>
        </div>
      </form>
<br>
      <h3>Which tours or events are you most interested in?</h3>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Revolution was just the beginning
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Transcendentalism
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Custom
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Ghost in Gloaming
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Gateposts, Grapes & Graveyards
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Tavern Life
        </label>
      </div>
      <h3>What is the best way to contact you?</h3>
   
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Phone
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Email
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
          Either
        </label>
      </div>
      <br>
      <h4> if phone, when is the best time of day for a call-back?</h4>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          8-11 am
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"   >
        <label class="form-check-label" for="flexRadioDefault2">
          12-4 pm
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          6-10 pm
        </label>
      </div>

      <br>
      <br>

      <h3>Anything else we should know?</h3>

      <br>

      <div class="form-outline w-75 mb-4">
        <textarea class="form-control" id="textAreaExample" rows="8">Type here</textarea>
      </div>

      <br>


      <h3>And last, how did you hear about us?</h3>
      <div class="form-outline w-75 mb-4">
        <textarea class="form-control" id="textAreaExample" rows="8">Type here</textarea>
      </div>

      <hr>

      <button style="text-align: center;" type="button" class="btn btn-success">Submit</button>
  </div>
  
  </form>
  </body>
</html>