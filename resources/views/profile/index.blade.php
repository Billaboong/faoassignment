<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yajra table</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Yajra Data Table</h2>
  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th>Sr No</th>
       <th>Email</th>
        <th>User</th>

        <th width="100px">Action</th>
      </tr>
    </thead>
    <tbody>
      
     
    </tbody>
  </table>
</div>

<script type="text/javascript">
 $(function () {
       
     var table = $('.data-table').DataTable({
         processing: true,
         serverSide: true,
          /*ordering: false,*/
          iDisplayLength: 25,
          retrieve: true,
         ajax: "{{ route('users.index') }}",
         columns: [

              {data: "DT_RowIndex", name: 'DT_RowIndex',searchable: false, orderable: false},
             {data: 'id', name: 'id'},
              {data: 'name' , name: 'name'},
             {data: 'action', name: 'action'},
         ],
     });
       
   });
</script>
</body>
</html>