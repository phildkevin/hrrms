
<div class="card">
  <div class="card-header thmBg t-white">
    <i class="<?= $icon ?>"></i> <?= $title; ?>
  </div>
  <div class="card-body">

    <ul class="nav nav-tabs" id="profileTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="reserve-tab" data-toggle="tab" href="#reserve" role="tab" aria-controls="reserve" aria-selected="true">Reservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-controls="past" aria-selected="false">Past Reservations</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="reserve" role="tabpanel" aria-labelledby="reserve-tab">
        <h1>Reservation Table</h1>
      </div>
      <div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
        <h1>Past Reservation</h1>
      </div>
    </div>

  </div>
</div>
