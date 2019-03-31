<div class="section text-center">
        <h2 class="title">Follow Us</h2>

        <div class="team">
                <div class="row">
                        <div class="col-md-3">
                                <div class="team-player">
                                        <i class="fa fa-twitter fa-4x"></i>
                                        <h4 class="title">Twitter</h4>										
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="team-player">
                                        <i class="fa fa-facebook fa-4x"></i>
                                        <h4 class="title">Facebook</h4>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="team-player">
                                        <i class="fa fa-linkedin fa-4x"></i>
                                        <h4 class="title">Linkedin</h4>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="team-player">
                                        <i class="fa fa-youtube fa-4x"></i>
                                        <h4 class="title">Youtube</h4>
                                </div>          
                        </div>
                </div>
        </div>

</div>


<div class="section landing-section " id="contact">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center title">Talk to Us</h2>
                <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
        <form class="contact-form"  method="POST" action="/">
                {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group label-floating">
                                                <label class="control-label">Your Name</label>
                                                <input type="text" class="form-control" name="name">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group label-floating">
                                                <label class="control-label">Your Email</label>
                                                <input type="email" class="form-control" name="email">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group label-floating">
                                                <label class="control-label">Your Phone</label>
                                                <input type="phone" class="form-control" name="phone">
                                </div>
                        </div>
                        </div>

                                <div class="form-group label-floating">
                                                <label class="control-label">Your Messge</label>
                                                <textarea class="form-control" name="Message" rows="4"></textarea>
                                </div>

                        <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-gold btn-raised" type="submit" data-toggle="tooltip" data-placement="top" title="Send Message">
                                                Send Message
                                </button>
                        </div>
                        </div>
        </form>
        </div>
</div>

</div>