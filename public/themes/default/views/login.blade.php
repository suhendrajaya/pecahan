<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{  route('auth-login') }} ">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <h2 style="font-size: 30px"><i class="fa fa-medkit"></i> Principal Dasboard</h2>   
                    @if (count($errors) > 0)
                    <div class="pb10">
                        <ul style="color: #ff0000;">
                            @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username  or Phone Number" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default" value="Login"/>
                        <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                        <!--<a class="reset_pass" href="#">Lost your password?</a>-->
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
      <!--                <p class="change_link">New to site?
                        <a href="#signup" class="to_register"> Create Account </a>
                      </p>-->

                        <div class="clearfix"></div>
                        <br />

                        <div>

                            <p>©2016 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form method="post" >
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-medkit"></i> Principal Dasboard</h1>
                            <p>©2016 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>