<div class="card">
  <div class="card-header thmBg t-white">
    <i class="<?= $icon ?>"></i> <?= $title; ?>
  </div>
  <div class="card-body">

    <ul class="nav nav-tabs" id="roomTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="room-tab" data-toggle="tab" href="#room" role="tab" aria-controls="room" aria-selected="false">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="categ-tab" data-toggle="tab" href="#categ" role="tab" aria-controls="categ" aria-selected="true">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="feat-tab" data-toggle="tab" href="#feat" role="tab" aria-controls="feat" aria-selected="false">Features</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="room" role="tabpanel" aria-labelledby="room-tab">
        Rooms
      </div>
      <div class="tab-pane fade" id="categ" role="tabpanel" aria-labelledby="categ-tab">
        Category
      </div>
      <div class="tab-pane fade" id="feat" role="tabpanel" aria-labelledby="feat-tab">
        Features
      </div>
    </div>

  </div>
</div>
