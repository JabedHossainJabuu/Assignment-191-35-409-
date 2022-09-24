



@include('user.layouts.style')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
{{--Showing the confirmed form message--}}
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss="alert">

            {{ session()->get('message') }}
        </button>

    </div>

@endif








<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1>Welcome to Your CURD<br> Project</h1>

            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="./assets/img/images.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .bg-light -->
<!-- .bg-light -->

<div class="container">
    <form action="{{ url('upload_student') }}" method="POST" class="text-center" enctype="multipart/form-data">
        @csrf

        <div style="padding: 15px;">
            <label for="">Student Name</label>
            <input type="text" style="color: black;" name="name" required="" placeholder="Write the name">
        </div>
        <div style="padding: 15px;">
            <label for="">Phone</label>
            <input type="number" style="color: black;" name="number" required="" placeholder="Write the number">
        </div>



        <div style="padding: 15px;">
            <label for="">Room No</label>
            <input type="text" required="" style="color: black;" name="room" placeholder="Write the room number">
        </div>



        <div style="padding: 15px;">
            <input type="submit" value="SUBMIT" class="btn btn-outline-success">
        </div>

    </form>
    <div style="padding: 15px;">




    </div>

</div>









@include('user.layouts.script')
