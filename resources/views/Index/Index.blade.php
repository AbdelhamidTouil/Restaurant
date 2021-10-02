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

   @include('Index.MainBanner')

    @include('Index.About')

   @include('Index.Food')

    @include('Index.Chef')

    @include('Index.Reservation')

   @include('Index.Week')
    @include('Base.Footer')
   @include('Base.Script')
  </body>
</html>