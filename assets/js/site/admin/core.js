$(document).ready(function() {
  loadBuildings();

  $(document).on('submit', '#newbuildingform', function(e) {

    e.preventDefault();

    var controller = "fadmin/buildings/newBuilding";
    var data       = $(this).serialize();
    var onsuccess  = function(data) {
        if (data.code == 1) {
          swal(
            'Error!',
            data.reply,
            'error'
          )
        }else{
          loadBuildings();
          swal(
            'Success!',
            'New building created',
            'success'
          )
          $(this)[0].reset();
          $(this).modal('hide');
        }
    }

    ajaxCall(controller, data, onsuccess);


  });

  $(document).on('click', '.delbuilding', function(){

    var building      = $(this).attr('id').substr(6);
    var controller  = "fadmin/buildings/deletebuilding";
    var data        = {"building": building};
    var onsuccess   = function() {
        loadBuildings();
        swal(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
    }

    swal({
          title: 'Delete building?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete'
        }).then((result) => {
          if (result.value) {
            ajaxCall(controller, data, onsuccess);
          }
        })

  })

  $(document).on('click', '.editbuilding', function() {

    var building      = $(this).attr('id').substr(4);
    var name          = $(this).closest('tr').find('td:eq(0)').text();
    var desc          = $(this).closest('tr').find('td:eq(1)').text();
    var size          = $(this).closest('tr').find('td:eq(2)').text();

    $('input[name=ebuildingname]').val(name);
    $('textarea[name=ebuildingdesc]').val(desc);
    $('input[name=ebuildingsize]').val(size);
    $('#building').val(building);

    $('#editbuildingmodal').modal('show');


  });

  $(document).on('submit', '#editbuildingform', function(e) {
    e.preventDefault();

    var controller  = "fadmin/buildings/editBuilding";
    var data        = $(this).serialize();
    var onsuccess   = function(data) {
      if (data.code == 1) {
        swal(
          'Error!',
          data.reply,
          'error'
        )
      }else{
        loadBuildings();
        swal(
          'Success!',
          'Building info edited',
          'success'
        )
        $(this)[0].reset();
        $(this).modal('hide');
      }
    }

    ajaxCall(controller, data, onsuccess);


  })

}); //DOCUMENT READY

function loadBuildings() {

  var controller = "fadmin/buildings/loadBuildings";
  var data       = "";
  var onsuccess  = function(data) {

      var append = `<table id="example" class="table table-striped table-bordered dt-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Building Name</th>
                            <th>Building Description</th>
                            <th>Building Size</th>
                            <th style="width:150px !important;text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>`;

      data.forEach(function(building) {

        append += `<tr>
                    <td>${building.building_name}</td>
                    <td>${building.building_desc}</td>
                    <td>${building.building_size}</td>
                    <td style="text-align:center">
                        <button class="btn btn-warning btn-sm editbuilding" data-toggle="tooltip" title="Edit building" id="edit${building.id}">
                          <i class="fa fa-edit" style="color:#FFF"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delbuilding" data-toggle="tooltip" title="Delete building" id="delete${building.id}">
                          <i class="fa fa-trash"></i>
                        </button>

                    </td>
                    </tr>`;

      });

      append += `</tbody>
              </table>`;

      $('.building-view').html(append);
      $("#example").DataTable({});

  }

  ajaxCall(controller, data, onsuccess);

}

function ajaxCall(controller, data, onsuccess, onerror = '', onfailure = ''){

	$.ajax({

		type 	      : "POST",
		url 	      : base_url + controller,
		dataType    : "JSON",
		data 	      : data,

		success	 : function(data){
			onsuccess(data);
		},
		error	 : function(data){
			onerror();
		},
		failure	 : function(data){
			onfailure();
		},

	});

}
