<div class="container-fluid foot my-2">
    <div class="row">
        <div class="col-sm contact m-2">
                <h3 class="text-white my-2">Contact Us</h3>
            <div>
                <ul>
                    <li>Address: Balkhu-Kathmandu, Nepal</li>
                    <li> Phone : 9845564666</li>
                    <li>Email: simran_jl@gmail.com</li>
                </ul>
            </div>
            <div class="links">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="images/fblink.png" class="fb ms-2 me-2">
                </a>
                <a href="https://www.youtube.com" target="_blank">
                    <img src="images/youtubelink.png" class="youtube ms-3 me-3 ">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="images/instalink.jpg" class="insta ms-3 me-3">
                </a>
            </div>
        </div>
        <div class="col-sm m-2">
            <form class ="form-contact pt-2 pb-2" action ="{{route('feedback')}}"method="post">
                @csrf
                <h3 class="text-white my-2">Send Feedback</h3>
                <div class="mb-3">
                    <input type="text" class="form-control  w-75 " placeholder="Email" name="email" value="{{old('email')}}">
                    @error('email')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea class="form-control  w-75" placeholder="Message" name="message" value="{{old('message')}}"></textarea>
                    @error('message')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success text-light float-right">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
