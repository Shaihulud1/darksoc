<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="main-wrapper">
            <div class="upper-head logo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>NEON STYLE</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-in-wrapper" id="sign-in-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="nav nav-pills nav-justified sign-in-nav">
                              <a class="nav-item nav-link" v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]" href="#">Log In</a>
                              <a class="nav-item nav-link" v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]" href="#">Sign In</a>
                            </nav>
                            <form class="sign-in-form auth" v-if="activetab === 1" action="index.html" method="post">
                                  <div class="form-group row">
                                      <label for="inputLogin" class="col-sm-2 col-form-label">Login/Email</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputLogin" placeholder="Login/Email">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                      </div>
                                 </div>
                                 <a href="#" class="btn btn-sign-in auth">Log In</a>
                            </form>
                            <form class="sign-in-form regist" v-if="activetab === 2" action="index.html" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                  <div class="form-group row">
                                      <label for="inputLogin" class="col-sm-2 col-form-label">Login</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputLogin" placeholder="Login">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                      </div>
                                 </div>
                                 <a href="#" class="btn btn-sign-in regist">Sign In</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/vue-components.js"></script>
    </body>
</html>
