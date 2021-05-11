@include('includes.header')



<div class="container ">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">

   <form action="" method="post" enctype="multipart/form-data">
            @csrf
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="text" class="form-control" placeholder="Contact Number">
             <button type="submit" class="btn btn-success" name="Submit">Save</button>




        </div>
    </form>

</div>
</div>
</div>
</div>
@include('includes.footer')

