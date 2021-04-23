# Programming school

Page for class AWWW by [Szymon Hryszko](github.com/Shirobachi) and [Piotr Miciak](github.com/ValadaRP)

![Main page](https://i.imgur.com/gXSq6ni.png)
This's starting page of programming school!

This's whole website was made in bootstrap as frontend framework.
The backend is wrote in PHP language.

On the every page you are

- navbar
- slider (optionally)
- content area
- footer

## Navbar

![navar](https://i.imgur.com/PbatmJh.png)

Navbar consist of

- Logo icon
- Page lists
- Login/register or user panel
- Pretty link to [github](https://github.com/Shirobachi/AWWW-project)

### Logo icon

Logo icon redirect always to main page

### Page list

This is list of available page at the time, also page where user is at the time will be highlighted.
Hightlithing system is wrote on PHP and use two parameters to decide if the page should be hightlisted or not:

```php
 function navbarActiv($name){
    $req_uri = $_SERVER['REQUEST_URI'];
    $path = substr($req_uri,0,strrpos($req_uri,'/'));
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

    $wholePath = $path . '/' . $file;

    if($name == 'home' and strrpos($wholePath, '/pages/index/index.php') !== false)
      echo 'active';

    elseif ($name =='contact' and strpos($wholePath, '/pages/contact/index.php') !== false)
      echo 'active';

    elseif ($name == 'offer' and strpos($wholePath, '/pages/offer/index.php') !== false)
      echo 'active';
  }
```

### Login/register or user panel

Depended if user is already logged in or not will show up button Sign in or user panel

#### Registration and loggining in is wrote in PHP and connect to database to save / find user. Also passwords are hashed and we implemented protection from SQL injection!

```php
session_start();

  ini_set('display_errors', '1');
  error_reporting(E_ALL);

  require_once(__DIR__ . "/.dbconnection.php");
  $connection = mysqli_connect($_server, $_login, $_pass, $_db);

  if(!$connection)
    $_SESSION['code'] = 'connectionError';
  else{
    //registration
    if(isset($_POST['rlogin'])){
      if(!preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['rlogin'])){
        $_SESSION['code'] = 'wrongRLogin';
      }//not good login

      elseif(!preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['rpass'])){
        $_SESSION['code'] = 'wrongRPass';
      }//not good pass

      elseif(!preg_match("/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/i", $_POST['rmail'])){
        $_SESSION['code'] = 'wrongRMail';
      }//not good mail

      else{
        $login = $_POST['rlogin'];
        $pass = password_hash($_POST['rpass'], PASSWORD_DEFAULT);
        $mail = $_POST['rmail'];

        $q = "SELECT login FROM _Users WHERE login = '$login' or mail = '$mail'";
        $result = mysqli_query($connection, $q);

        //someone alredy registred with same login or mail
        if(mysqli_num_rows($result) >= 1){
          $row = mysqli_fetch_assoc($result);

          if($row['login'] == $login)
            $_SESSION['code'] = 'addingErrorLogin';
          else
            $_SESSION['code'] = 'addingErrorMail';
        }//if some same login/mail
        else{
          $q = "INSERT INTO _Users VALUES (NULL, '$login', '$pass', '$mail', 'u')";
          $query = mysqli_query($connection, $q);

          if($query)
            $_SESSION['code'] = 'registerSuccess';
          else
            $_SESSION['code'] = 'registerFailure';
        }//else (adding new user to DB)
      }
    }//if isset rlogin

    //loginning in
    elseif(isset($_POST['llogin'])){
      //if login and pass has not danger chars (and fit to login and pass pattern)
      if(preg_match("/^[a-zA-Z0-9]{3,50}$/m", $_POST['llogin']) and preg_match("/^[a-zA-Z0-9]{6,50}$/m", $_POST['lpass'])){
        $login = $_POST['llogin'];
        $pass = $_POST['lpass'];

        $q = "SELECT * FROM _Users WHERE login = '$login'";
        $query = mysqli_query($connection, $q);
        $row = mysqli_fetch_assoc($query);

        //if returned no 1 record(s) (so 0 or > 1 (what should not happened)) or pass not match to hash from db
        if(mysqli_num_rows($query) != 1 or !password_verify($pass, $row['pass']))
          $_SESSION['code'] = 'loginFailure';
        else{
          $_SESSION['code'] = 'loginSuccess';
          $_SESSION['ID'] = $row['ID'];
          // TODO redirect to page after loged in
        }
      }//if good login and pass
      //if some put some danger chars in login/pass field
      else {
        $_SESSION['code'] = 'loginFailure';
      }
    }//if isset llogin

    if(isset($_SESSION['ID'])){
      $ID = $_SESSION['ID'];

      $q = "SELECT * FROM _Users WHERE ID = '$ID'";
      $result = mysqli_query($connection, $q);
      $row = mysqli_fetch_assoc($result);

      $login = $row['login'];
      $mail = $row['mail'];
      $role = $row['role'];
    }//isset(SESSION.id)

    mysqli_close($connection);
  }//if connection is good
```

#### user panel

In user panel user can log out itself and also can manage him account like change the password
![change link](https://i.imgur.com/kEqkDt8.png)

### Pretty link to [github](https://github.com/Shirobachi/AWWW-project)

This little pretty github mascote is waving to user when hovered and redirect to github repository where you're now. The code is made by [Tim Holman](https://tholman.com/)

## Slider

![Slider](https://i.imgur.com/EwmP5PT.png)
The slider is made by premade bootstrap classes. Some images has description! Also slider has buttons what change image if clicked. The images are from [unsplash](https://unsplash.com/) all of them are on [Unplash licence](https://unsplash.com/license) what let us to use for free as long as we not earn of them.

```html
<!-- Slider -->
<div
  id="slider"
  class="carousel slide"
  data-bs-interval="5000"
  data-bs-ride="carousel"
>
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#slider"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#slider"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-bs-target="#slider"
      data-bs-slide-to="2"
      aria-label="Slide 3"
    ></button>
    <button
      type="button"
      data-bs-target="#slider"
      data-bs-slide-to="3"
      aria-label="Slide 3"
    ></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="../../sources/img/zdjecie.jpg"
        class="d-block w-100"
        alt="..."
        height="500"
      />
      <!--<div class="carousel-caption d-none d-md-block">
        <h5>We have best equipment</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>-->
    </div>
    <div class="carousel-item">
      <img
        src="../../sources/img/zdjecie_1.jpg"
        class="d-block w-100"
        alt="Image"
        height="500"
      />
      <div class="carousel-caption d-none d-md-block">
        <h1 class="cien">Best equipment</h1>
        <p style="font-size: 25px; " class="cien">
          On our course you will use best hardware on market!
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="../../sources/img/zdjecie_2.jpg"
        class="d-block w-100"
        alt="Image"
        height="500"
      />
      <div class="carousel-caption d-none d-md-block">
        <h1 class="cien">Third slide</h1>
        <p style="font-size: 25px;" class="cien">Lorem ipsum dolor sit ami.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="../../sources/img/zdjecie_4.jpg"
        class="d-block w-100"
        alt="Image"
        height="500"
      />
      <!-- Photo by <a href="https://unsplash.com/@brookecagle?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Brooke Cagle</a> on <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> -->
      <div class="carousel-caption d-none d-md-block">
        <h1 class="cien">Create new contact</h1>
        <p style="font-size: 25px;" class="cien">
          On our courses you will meet great people. And create new relations
          for whole life.
        </p>
      </div>
    </div>
  </div>

  <!-- Slider button left/right -->
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#slider"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#slider"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
```

### Footer

![Footer](https://i.imgur.com/Qt8DXlr.png)
The footer is quete simple, because it's JUST FOOTER!
Has link to authors' githubs pages and information about rights.

---

### Content

Content depends of page where you are

#### Main page

![Main page's content](https://i.imgur.com/yZn5Prf.png)
Here is sneak peak what should give users boost to check our offer.

#### Offer

![Offer's content](https://i.imgur.com/v2nsLWw.png)
Here new user can see what and by who we are teaching!

#### Contact

![Contact's content](https://i.imgur.com/gnQVwXq.png)
Contact form is made in bootstrap (frontend) and mechanic is made by [formsubmit API](formsubmit.co)
