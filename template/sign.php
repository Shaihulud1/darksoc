<?require_once("header.php");?>
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
<?require_once("footer.php");?>
