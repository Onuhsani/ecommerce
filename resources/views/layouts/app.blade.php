<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin-head')
    <!-- Toastr -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('layouts.admin-header')
        @include('layouts.admin-aside')

        <div class="dashboard-wrapper">
            @include('layouts.admin-section')
            @include('layouts.admin-footer')
        </div>
    </div>

    @include('layouts.admin-scripts')

    <script>
        $(document).ready(function() {
            $('.DataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-warning btn-rounded btn-sm'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-success btn-rounded btn-sm'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-info btn-rounded btn-sm'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-danger btn-rounded btn-sm',
    
                    },
                ],
    
            });
    
        });
    </script>


</body>

<script>
    $(document).ready(function() {
    @if(Session::has('message'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
      toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
      toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
      toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
      toastr.warning("{{ session('warning') }}");
    @endif
  });	
  </script>
</html>