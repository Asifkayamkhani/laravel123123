<!-- plugins:js -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/vendors/chart.js')}}/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendors/progressbar.js')}}/progressbar.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/proBanner.js')}}"></script>
  <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    new DataTable('#example');
    $('.vali').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_banner/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.vali1').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_category/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.product').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_product/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.productgellery').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_productgellery/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.order').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_order/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.user').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_user/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.coupan').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_coupan/"+titl;
                }, 500);
            }
        });
    })
})
</script>

<script>
$(document).ready(function() {
    $('.testi').click(function() {
        let titl = $(this).attr("data-id");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                setTimeout(() => {
                    window.location="delete_test/"+titl;
                }, 500);
            }
        });
    })
})
</script>