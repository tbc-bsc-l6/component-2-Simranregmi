@include('layouts.app')
<div class="container">
    <div>
        <h3>About Us</h3>
        
        <p class= 'about'>
            HYPE STORE an aim to create the largest community of book and cd store in Nepal.
        </p>
    </div>
    <div class="row d-flex">
        <div class="col-sm img m-2">
            <a href="images/books.jpg">
                <img src="images/books.jpg" alt="BOOKS" class="books img-responsive mw-100 h-auto ">
            </a>
        </div>
        <div class="col-sm img m-2">
            <a href="images/cds.jpg">
                <img src="images/cds.jpg" alt="CDS" class="cds img-responsive mw-100 h-auto ">
            </a>
        </div>
    </div>
</div>
@include('layouts.footer')