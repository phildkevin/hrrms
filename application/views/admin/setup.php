
<div class="card">
  <div class="card-header thmBg t-white">
    <i class="<?= $icon ?>"></i> <?= $title ?>
  </div>
  <div class="card-body">

    <ul class="nav nav-tabs" id="profileTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="bab-tab" data-toggle="tab" href="#bab" role="tab" aria-controls="bab" aria-selected="false">Buildings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="db-tab" data-toggle="tab" href="#db" role="tab" aria-controls="db" aria-selected="false">Database</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade  show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
          <div class="col-md-6">

            <label for="cname"><strong><h5>Company Name</h5></strong></label>
            <input type="text" name="cname" class="form-control" placeholder="Company Name">
            <br>
            <label for="cname"><strong><h5>Company Picture</h5></strong></label>
            <input type="file" name="cname" class="form-control" placeholder="Company Name">
            <br>
            <div class="input-group">
              <input type="password" class="form-control" name="apassword" placeholder="Admin password">
              <input type="button" class="btn btn-info btn-sm input-group-addon" value="Update">
            </div>

          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="bab" role="tabpanel" aria-labelledby="bab-tab">
        <div  align="right">
          <input type="button" name="newbranch" value="New Building" class="btn btn-info btn-sm" data-toggle="modal" data-target="#newbuildingmodal">
        </div>
        <br>
        <div class="building-view">

        </div>
      </div>
      <div class="tab-pane fade" id="db" role="tabpanel" aria-labelledby="db-tab">
        database to
      </div>
    </div>

  </div>
</div>
<<<<<<< HEAD
=======


<!-- Modal -->
<div id="newbuildingmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="newbuildingform">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create new building</h4>
        </div>
        <div class="modal-body">

          <label>Building Name</label>
          <input type="text" name="buildingname" class="form-control" placeholder="Building Name" required> <br>

          <label>Building Description</label>
          <textarea name="buildingdesc" rows="5" class="form-control" required></textarea> <br>

          <label>Building Size</label>
          <input type="text" name="buildingsize" class="form-control" placeholder="Building Size" required>

        </div>
        <div class="modal-footer">
          <button type="submit" name="newbranch" class="btn btn-info">New Building</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>

  </div>
</div>

<!-- Modal -->
<div id="editbuildingmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form id="editbuildingform">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit building info</h4>
        </div>
        <div class="modal-body">

          <label>Building Name</label>
          <input type="text" name="ebuildingname" class="form-control" placeholder="Building Name" required> <br>

          <label>Building Description</label>
          <textarea name="ebuildingdesc" rows="5" class="form-control" required></textarea> <br>

          <label>Building Size</label>
          <input type="text" name="ebuildingsize" class="form-control" placeholder="Building Size" required>

          <input type="hidden" id="building" value="">

        </div>
        <div class="modal-footer">
          <button type="submit" name="newbranch" class="btn btn-info">Edit Building</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>

  </div>
</div>
>>>>>>> df440f2910cca452957de9ebfe34c4967e9d215e
