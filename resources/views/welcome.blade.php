<!DOCTYPE html>
<html>
<head>
    <title>Free SMS Message</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        /* Flaired edges */

            hr.style-three 
            {
                height: 30px;
                border-style: solid;
                border-color: black;
                border-width: 1px 0 0 0;
                border-radius: 20px;
                }
                hr.style-three:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: black;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }
            body
            {
                //background: linear-gradient(to bottom, #33ccff 0%, #ccff66 100%);
            }
    </style>    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
             </div>
             <div class="col-md-4">
                <h2 class="text-center text-secondary my-3">Free SMS Message</h2>
                <hr class="style-three">
                <form method="POST" action="{{route('sendMessage')}}">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="text-secondary">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number" placeholder="Enter your phone number...." required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="text-secondary">Message</label>
                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Enter your message...." required=""></textarea>
                  </div>
                  <button type="submit" class="btn btn-secondary">Send Message</button>
                </form>
             </div>
             <div class="col-md-4">
             </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card text-center mt-2">
                  <div class="card-header text-secondary">
                    Developed By MinHeinKhant
                  </div>
                  <div class="card-body">
                    <a href="https://www.facebook.com/profile.php?id=100031235323468" class="btn btn-secondary">Go To Developer Facebook Account</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>