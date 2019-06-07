@extends('layouts.default')

@section('body')
    <!--Top of Page-->
    <div class="top-phrase w-100" style="background-image: url({{ asset('aged.jpg')}}); background-size: 100%; background-repeat: no-repeat">
        <div class="transparent-cover">
            <h1 class="display-4 text-center text-white">Contact Us</h1>
        </div>
    </div>

    <!--Main body-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 border rounded p-4">
                <h3>Send Us A Message</h3>
                <form action="#" style="width: 80%">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="FULL NAME">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="EMAIL">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="tel" placeholder="MOBILE NUMBER">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Send">
                    
                    
                </form>
            </div>

            <div class="col-md-5">
                <h3>Contact Details</h3>

                <p>email@email.com</p>
                <p>0553489228</p>

                <a href="#" style="color:#3b5998"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="ml-4" style="color:#1da1f2"><i class="fab fa-twitter"></i></i></a>
                <a href="#" class="ml-4" style="color:#25d366"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="ml-4" style="color:#FF0000"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
@endsection

