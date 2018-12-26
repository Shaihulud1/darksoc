<?require_once("header.php");?>
<div class="profile-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-side-wrapper">
                    <div class="ava-wrapper">
                        <img src="images/ava.jpg" clas="ava-img" alt="">
                    </div>
                    <div class="menu-wrapper">
                        <div class="navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <div class="my-name">
                                    <h4>Shaihulud</h2>
                                </div>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="far fa-edit"></i> My Profile<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-envelope"></i> Messages <span class="new-mess">(4)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-plus-square"></i> Followers <span class="new-mess">(1)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-user-friends"></i> Friends</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-image"></i> Photos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Exit</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="right-side-wrapper">
                    <div class="name-wrapper">
                        <h2>Shaihulud</h2>
                        <p>Subscribers: 25</p>
                        <p>Friends: 4</p>
                        <p class="status">Lorem ipsum dolor sit amet</p>
                        <button type="button" class="btn btn-primary btn-lg">Subscribe</button>
                        <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Send Message</button>
                    </div>
                    <div class="posts-wrapper">
                        <div class="new-post" style="display: none;">
                            <form class="sign-in-form auth" action="index.html" method="post">
                                <div class="form-group">
                                    <label for="usr">Post Name:</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Text:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="img-upl">Upload Image</label>
                                    <input type="file" class="img-upl" id="img-upl">
                                </div>
                                <button href="#" class="btn">Create Post</button>
                            </form>
                        </div>
                        <div class="post-item">
                            <h4 class="media-heading">Post lorem ipsum</h4>
                            <p class="date">12-12-2018</p>
                            <img class="post-img" src="images/wallpaper-2.jpg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                            Aliquam in felis sit amet augue.</p>
                            <p class="rating">
                                <a class="like">
                                    <i class="far fa-thumbs-up"></i> 4
                                </a>
                                <a class="dislike">
                                    <i class="far fa-thumbs-down"></i> 5
                                </a>
                                <a class="comments" href="#">
                                    <i class="far fa-comments"></i> (65)</a>
                            </p>
                        </div>
                        <div class="post-item">
                            <h4 class="media-heading">Post lorem ipsum</h4>
                            <p class="date">12-12-2018</p>
                            <img class="post-img" src="images/wallpaper-2.jpg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                            Aliquam in felis sit amet augue.</p>
                            <p class="rating">
                                <a class="like">
                                    <i class="far fa-thumbs-up"></i> 4
                                </a>
                                <a class="dislike">
                                    <i class="far fa-thumbs-down"></i> 5
                                </a>
                                <a class="comments" href="#">
                                    <i class="far fa-comments"></i> (65)</a>
                            </p>
                        </div>
                        <div class="post-item">
                            <h4 class="media-heading">Post lorem ipsum</h4>
                            <p class="date">12-12-2018</p>
                            <img class="post-img" src="images/wallpaper-2.jpg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                            Aliquam in felis sit amet augue.</p>
                            <p class="rating">
                                <a class="like">
                                    <i class="far fa-thumbs-up"></i> 4
                                </a>
                                <a class="dislike">
                                    <i class="far fa-thumbs-down"></i> 5
                                </a>
                                <a class="comments" href="#">
                                    <i class="far fa-comments"></i> (65)</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?require_once("footer.php");?>
