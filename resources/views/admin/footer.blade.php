<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Sandhyapan</a> 2022</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->

</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('public/admin') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('public/admin') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('public/admin') }}/js/custom.min.js"></script>
<script src="{{ asset('public/admin') }}/vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('public/admin') }}/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('public/admin') }}/vendor/apexchart/apexchart.js"></script>
<script src="{{ asset('public/admin') }}/vendor/owl-carousel/owl.carousel.js"></script>

<!-- Dashboard 2 -->
<script src="{{ asset('public/admin') }}/js/dashboard/dashboard-4.js"></script>
<script src="{{ asset('public/admin') }}/js/deznav-init.js"></script>
<script src="{{ asset('public/admin') }}/js/demo.js"></script>
{{--  <script src="{{ asset('public/admin') }}/js/styleSwitcher.js"></script>  --}}
<!-- Datatable -->
<script src="{{ asset('public/admin') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('public/admin') }}/js/plugins-init/datatables.init.js"></script>

<script>
jQuery(document).ready(function(){
     setTimeout(function(){
        dezSettingsOptions.version = 'dark';
        new dezSettings(dezSettingsOptions);
    }, 200);

});

function carouselReview(){
    jQuery('.testimonial-one').owlCarousel({
        loop:true,
        autoplay:true,
        margin:20,
        nav:false,
        rtl:true,
        dots: false,
        navText: ['', ''],
        responsive:{
            0:{
                items:3
            },
            450:{
                items:4
            },
            600:{
                items:5
            },
            991:{
                items:5
            },

            1200:{
                items:7
            },
            1601:{
                items:5
            }
        }
    })
}
jQuery(window).on('load',function(){
    setTimeout(function(){
        carouselReview();
    }, 1000);
});
</script>
</body>
</html>
