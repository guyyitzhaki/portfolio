<?php include 'header.php';?>
<div class="col-md-9 content">
    <div class="page">
        <article>
            <div class="page-header">
                <h1>Contact</h1>
                <p class="lead"></p>
            </div><!-- end page-header -->
            <div class="google-map">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12456.508849538495!2d178.07118605!3d-38.69192205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d66793d77429fe1%3A0x500ef6143a31480!2sWainui%2C+Gisborne!5e0!3m2!1sen!2s!4v1394940692894" width="770" height="200" frameborder="0"></iframe>-->
                <iframe width="600" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?zoom=12&q=31.765053%2C%2035.206096&key=AIzaSyDr0aIQgJn4DmPunNMxljZ3M8fjMrCk2vE" allowfullscreen>
                </iframe>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-envelope"></i> <a href="mailto:guy@guyyitzhaki.com" target="_blank">guy@guyyitzhaki.com</a></li>
                        <li><i class="fa-li fa fa-phone"></i> +972 54 569 1114</li>
                        <li><i class="fa-li fa fa-facebook"></i> <a href="https://www.facebook.com/guy.yitzhaki">facebook</a></li>
                    </ul>
                </div><!-- end col-md-6 -->
                <div class="col-md-6">
                </div><!-- end col-md-6 -->
            </div><!-- end row -->
            <h2 class="margin-top-50">Send me a message</h2>
            <form role="form" class="form-horizontal form-contact" action="send-message.php" method="post" >
                <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" placeholder="Your Name" required="true" class="form-control" />
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end controls -->
                </div><!-- end form-group -->
                <div class="form-group">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="email" name="email" placeholder="Your Email Address" required="true" class="form-control" />
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end controls -->
                </div><!-- end form-group -->
                <div class="form-group">
                    <label class="control-label" for="msg">Message</label>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-10">
                                <textarea id="msg" name="msg" placeholder="Your Message" class="form-control" required="true" rows="10"></textarea>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end controls -->
                </div><!-- end form-group -->
                <div class="form-actions form-actions-no-bg">
                    <button type="submit" class="btn btn-lg btn-default">Send Message</button>
                </div><!-- end form-actions -->
            </form>
        </article><!-- end article -->
    </div><!-- end page -->
</div><!-- end col -->

<?php include 'footer.php';?>

