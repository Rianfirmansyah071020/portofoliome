<div class="container container-login">    
    <div class="row d-flex justify-content-center align-content-center align-items-center">
        <div class="col-lg-8 col-xl-7 d-lg-block d-xl-block d-none">
            <img src="{{ asset('assets/img/programmer.gif') }}" alt="" class="img-login">
        </div>
        <div class="card col-lg-4 col-xl-4 col-md-5 col-sm-10 col-10 p-4 container-form-login shadow">
            <form action="">
                <div class="mt-5">                    
                    <input type="email" name="email" id="email" autocomplete="off" class="form-control" placeholder="email.." required>
                </div>
                <div class="mt-5">
                    <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="password.." required>
                </div>                
                <div class="mt-5">
                    <hr>
                    <div class="row d-flex justify-content-end align-items-end">                        
                            <button type="submit" class="btn btn-login btn-sm col-2">login</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>