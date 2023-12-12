@include('frontend.master')
@section('content')



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($menus as $menu)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img height="130px" src="{{url('/food/image/'.$menu->image)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{$menu->food_name}}</h4>
                    <p class="food-price"> {{$menu->food_price .'.'. 'BTD'}}</p>
                    <p class="food-detail">
                    {{$menu->food_type}}
                    </p>
                    <br>

                    <a href="{{route('order.food')}}" class="btn btn-primary"> Order Now </a>
                </div>
            </div>
            @endforeach
            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here 

     social Section Starts Here 
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    social Section Ends Here 
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Burhan Uddin Rana</a></p>
        </div>
    </section>
    footer Section Ends Here -->

</body>
</html>