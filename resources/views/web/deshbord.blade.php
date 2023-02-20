@include('web/header')
<style>
    .dddddd {
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
        border: none !important;
        float: right;
        font-family: 'Trebuchet MS', sans-serif !important;
        font-weight: 600;
        padding: 7px 25px;
    }

    td.border-s {
        border-bottom: 1px solid #ddd !important;
    }

    th.pay-m {
        border-bottom: 1px solid #ddd !important;
    }
    .buttonsss{
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none !important;
    float: right;
    font-family: 'Trebuchet MS', sans-serif !important;
    font-weight: 600;
    padding: 7px 25px;
    }

</style>
<div class="row">
    <div class="col-xl-12 col-md-12  card-parts">
        <div class=" ">
            @if(\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
            @endif
            <h3 class="mb-0"> welcome</h3>
            <p class="text-muted">
                {{ ucfirst(Session::get('name')) ?? '' }}
            </p>
            <span><?= $notification->msg ?? '' ?></span>
        </div>
    </div>
    @include('web/sidebar')
    <div class="col-xl-9 stretch-card grid-margin">
        <div class="card border-remove">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <h5>Monthly Statics</h5>

                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <i class="mdi mdi-equalizer"></i>
                                    <!--<i class="mdi mdi-chart-bar menu-icon"></i>-->
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <i class="mdi mdi-equalizer"></i>
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <!--<img src="images/baseline_bar_chart_black_24dp.png">-->
                                    <i class="mdi mdi-equalizer"></i>
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body body-card">
                <div class="row">
                    <div class="col-sm-7">
                        <h5>Monthly Statics</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <i class="mdi mdi-equalizer"></i>
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <i class="mdi mdi-equalizer"></i>
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3 mb-sm-0">
                            <div class="card-body py-3 px-4 card-servey">
                                <p class="m-0 survey-head">
                                    <i class="mdi mdi-equalizer"></i>
                                    Today Earnings</p>
                                <span>0</span>
                                <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span>
        <!--<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="#" target="_blank">Gazing Technosoft</a> </span>-->
    </div>
</footer>
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->



<script src="{{ asset('public/web') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('public/web') }}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.resize.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.categories.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.stack.js"></script>
<script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.pie.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('public/web') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('public/web') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('public/web') }}/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('public/web') }}/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->

<script>
    $(function(){
      $('.amountsdd').click(function(){
         var newprice = $('.newprice').val();
         if(newprice==""){
            alert("Please Enter Amount!");
         } else {

            $.ajax({
                url: "{{url('genrateqrcode')}}"+'/'+newprice,
                method:"get",
                success:function(data){
                   $("#results").html(data);
                }
            });

            $('#basicModal3').modal('hide');
            $('#basicModal4').modal('show');
            $(".newprice").val(newprice);
         }


      });
    });
</script>

<script>
    $(function(){
        $('#onclikmydata').submit(function(e){
            e.preventDefault();
            $('.down7913').prop('disabled', true);
            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    setTimeout(function(){
                        alert('Successfull Add!');
                        window.location.reload(1);
                     }, 2000); // show response from the php script.
                }
            });
        });
    });
</script>

<script>
    $(function(){
        $('.showmodel').click(function(){
            $('#basicModal').modal('hide');
            $('#basicModal3').modal('show');
        });
    });
</script>

<script>
    $(".rotate").click(function() {
        $(this).toggleClass("down");
    })

</script>
</body>
</html>




