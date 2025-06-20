<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Found my Items?</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<style>
  html {
  height: 100%;
  width: 100%;
}

#Form{
  color:white; 
}

</style>
</head>

<body class="bg-primary">

  <div class="container p-5">
  </div>

  <section id="Form">
  <h1 class="text-white ms-5">THANK YOU FOR FINDING MY LOST ITEM! </h1>
  <div class="container p-3">
     <h2>Kindly fill out the form provided below.</h2>
  </div>

  <form class="" action="send.php" method="post">
      <!-- put index.php here -->
      <!-- put PHPmailer folders and contents too at open editors -->

        <div class="container p-2"></div>
        <label> Email Address </label>
        <input type="email" name="email"   id="email" class="form-control" value= ""><br>
        <div class="container p-2"></div>
        <label> Item Found </label>
        <input type="text" name="item" id="item" class="form-control" value=""><br>
        <div class="container p-2"></div>
        <label> Place Found </label>
        <input type="text" name="place" id="place" class="form-control" value=""><br>
        <div class="container p-2"></div>
        <label> Date and Time Found </label>
        <input type="text" name="datetime" id="datetime" class="form-control" value=""><br>
        <div class="container p-2"></div> 
        <label> Name of Finder </label>
        <input type="text" name="finder" id="finder" class="form-control" value=""><br>
        <div class="container p-2"></div>
        <input type="submit" name="send" value="Send" class="btn btn-light">
        <div class="container p-2"></div>
  </form>

    <h1 ps-3>Note:</h1>
    <h3>If you found the item within the premises of the University of the Philippines Los Banos please contact the UPLB Security Office.  </h3>
    <div class="container p-5"></div>
    <h3> Please call +63 XXX XXX XX <!-- +63 919 686 3183 / +63 218 960 8280  -->  to contact the owner. </h3>
  </section>

  <div class="container p-5"></div>
  <div class="container p-5"></div>
  <section class="bg-white">
  <div class="container p-5"></div>

    <h2 class="text-center"> Thank you for returning!
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0        0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
       </svg>
    </h2>

  <div class="container p-5"></div>
  <div class="container p-5"></div>
  <div class="container p-5"></div>

    <h2 class="text-danger text-center">
      Theft by finding is a violation of Article 729 of the Civil Code of the Philippines: 
      Whoever finds a movable, which is not treasure, must return it to its previous possessor. 
      If the latter is unknown, the finder shall immediately deposit it with the mayor of the 
      city or municipality where the finding has taken place.
    </h2>
  </section>

</body>

</html>
