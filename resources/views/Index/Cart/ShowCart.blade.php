<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<base href="/assets">
@include('Base.Head')

    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
   @include('Base.Navbar')
   <div id="top">
    <table align="center" bgcolor="orange">
        <tr>
            <th  style="padding: 30px;">Food Name</th>
            <th  style="padding: 30px;">Price</th>
            <th  style="padding: 30px;">Quantity</th>
            <th  style="padding: 30px;">Action</th>
        </tr>
        
<form action="{{ url('orderconfirm') }}" method="post">
@csrf
@foreach ($data as $data)
        <tr align="center">
           
            <td> 
                <input type="text" name="foodname[]" value="{{ $data->name }}" hidden="">
                {{ $data->name }}
            </td>
            <td>
                 <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                {{ $data->price }}
            </td>
            <td>
                 <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                {{ $data->quantity }}
            </td>
            
        </tr>
 @endforeach
 @foreach ($data2 as $data2)
 <td>
    <a class="btn btn-danger" href="{{route('DeleteCart',$data2->id)}}">Delete</a>
</td>
 @endforeach

 
    </table>
    <div align="center" style="padding: 10px">
        <button class="btn btn-primary" id="order" type="button">Order Now </button>
    </div>

    <div id="appear" align="center" style="padding:30px; display:none">
        <div style="padding: 10px">
            <label for="Name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div style="padding: 10px">
            <label for="phone">phone</label>
            <input type="text" name="phone" id="phone" placeholder="phone">
        </div>
        <div style="padding: 10px">
            <label for="Addresse">addresse</label>
            <input type="text" name="addresse" id="addresse" placeholder="Addresse">
        </div>

        <div style="padding: 10px">
         
            <input class="btn btn-success" type="submit"  value="Confirm">
            <input id="close" class="btn btn-danger"  value="Close">
        </div>
    </div>
</form>
</div>



   
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

$("#order").click(
    function()
    {
        $("#appear").show();
    }
);

$("#close").click(
    function()
    {
        $("#appear").hide();
    }
);
    
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>