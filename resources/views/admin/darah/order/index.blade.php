@extends('admin/template')
@section('content')  
<!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Order Darah</h6>
      </div>
      <div class="card-body">
          <br>
          <div class="form-group row select-kebutuhan">
            <label for="inputEmail3" class="col-sm-5 col-form-label">Silakan Memilih Kebutuhan Terlebih dahulu Untuk Order Darah</label>
            <div class="col-sm-7">
                <select name="cars" class="custom-select select-method mb-3">
                  <option selected id="not_selected" >Pilih Kebutuhan ...</option>
                  <option value="click_perorangan" id="click_perorangan">Transfusi Darah (Pasien)</option>
                  <option value="click_orangbanyak" id="click_orangbanyak">Dropping Darah</option>
                </select>
            </div>
          </div>
            @include('admin.darah.order.step')
            @include('admin.darah.order.perorangan')
            @include('admin.darah.order.droping')
            <br>
      </div>
    </div>
  </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script>
      $(document).ready(function() {
        $('.show-steper').hide();
        $('.click-proses').click(function(event) {
          $('.show-steper').show();
          $('.show_orangbanyak').hide();
          $('.show_perorangan').hide();
          $('.select-kebutuhan').hide();
        });
        $('.select-method').change(function(){
          var val = $(this).val();
          if(val == 'click_perorangan'){
              $('.show_perorangan').show();
              $('.show_orangbanyak').hide();
          }else if(val == 'click_orangbanyak'){
              $('.show_orangbanyak').show();
              $('.show_perorangan').hide();
          }else{
            $('.show_perorangan').hide();
            $('.show_orangbanyak').hide();
          }
          // console.log('halo ' + val)
        });

          $('.show_perorangan').hide();
          $('.show_orangbanyak').hide();  
  
         
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        
        setProgressBar(current);
        
        $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
          'display': 'none',
          'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
          duration: 500
        });
          setProgressBar(++current);
        });
        
        $(".previous").click(function(){
        
          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();
          //Remove class active
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
          //show the previous fieldset
          previous_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
          step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;
          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
            previous_fs.css({'opacity': opacity});
          },
            duration: 500
          });
          setProgressBar(--current);
        });
        
        function setProgressBar(curStep){
          var percent = parseFloat(100 / steps) * curStep;
          percent = percent.toFixed();
          $(".progress-bar")
          .css("width",percent+"%")
        }
        
        $(".submit").click(function(){
          return false;
        })
      });
    </script>
  
        <!-- Pie Chart -->
    <!-- /.container-fluid -->
  @endsection
  