
<div id="slider" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/slide1.jpg" class="img-responsive" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide2.jpg" class="img-responsive" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide3.jpg" class="img-responsive" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container-fluid">
  <div class="reservation hvr-float-shadow">
    <h4>Make a Reservation</h4><hr>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <p>Pick Date Range</p>
          <div class="input-daterange input-group" id="datepicker">
              <input type="text" class="input-sm form-control" name="start" />
              <span class="input-group-addon">to</span>
              <input type="text" class="input-sm form-control" name="end" />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <p>Number of Guest/s</p>
          <input type="number" class="form-control">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <button class="btn btn-info thmBtn-light form-control mar-1">Book Now</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about">
  <div class="container">
    <h1><span class="thmSpan">A</span>bout Us</h1><hr class="thmHrLeft">
    <div class="row">
      <div class="col-sm-4">
          asdasdasd
      </div>
      <div class="col-sm-4">
          asdfvhgbhjnkjlkm
      </div>
      <div class="col-sm-4">
        astdrytyujlk;l
      </div>
    </div>
  </div>
</div>

<div class="contact">
  <div class="container">
    <h1 align="right"><span class="thmSpan">C</span>ontact Us</h1><hr class="thmHrRight">
    <div class="row">
      <div class="col-sm-4">
          asdasdasd
      </div>
      <div class="col-sm-4">
          asdfvhgbhjnkjlkm
      </div>
      <div class="col-sm-4">
        astdrytyujlk;l
      </div>
    </div>
  </div>
</div>


<script>
$('.input-daterange').datepicker({
  format: "yyyy-mm-dd",
  startDate: "day",
  orientation: "auto",
  todayHighlight: true,
  toggleActive: true,
  clearBtn: true
});
</script>
