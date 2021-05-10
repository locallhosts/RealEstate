@section('container')

<div class="banner-search">
    <div class="container">
      <!-- banner -->
      <h3>Buy, Sale & Rent</h3>
      <div class="searchbar">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <input type="text" class="form-control" placeholder="Search of Properties">
            <div class="row">
              <div class="col-lg-3 col-sm-3 ">
                <select class="form-control">
                  <option>Buy</option>
                  <option>Rent</option>
                  <option>Sale</option>
                </select>
              </div>
              <div class="col-lg-3 col-sm-4">
                <select class="form-control">
                  <option>Price</option>
                  <option>$150,000 - $200,000</option>
                  <option>$200,000 - $250,000</option>
                  <option>$250,000 - $300,000</option>
                  <option>$300,000 - above</option>
                </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                  <option>Property</option>
                  <option>Apartment</option>
                  <option>Building</option>
                  <option>Office Space</option>
                </select>
                </div>
                <div class="col-lg-3 col-sm-4">
                <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
                </div>
            </div>


          </div>
          <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
            <p>Join now and get updated with all the properties deals.</p>
            <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
