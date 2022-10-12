<!doctype html>



<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <link rel="icon" href="<?=base_url();?>assets/img/Logo_Horizontal.png" type="image/png">
  <meta name="googlebot" content="index,follow,snippet,archive">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if($this->uri->segment(1)=='layanan'){
    $metaTittle = ' | Services';
  }else if($this->uri->segment(1)=='fitur'){
     $metaTittle = ' | Fitur';
  }else if($this->uri->segment(1)=='berita'){
     $metaTittle = ' | News';
  }else if($this->uri->segment(1)=='kontak'){
     $metaTittle = ' | Contact';
  }else if($this->uri->segment(1)=='career'){
     $metaTittle = ' | Career';
  }else if($this->uri->segment(1)=='thank_you'){
     $metaTittle = ' | Thank You';
  }else{
     $metaTittle = '';
  }
  ?>
  <?php if ($this->uri->segment(2)!='baca') {?>
  <title>ProgiToken.com</title>
  <?php } ?>
  <!-- Bootstrap CSS -->
    <?php
    if($this->uri->segment(2)=='baca'){
    $meta=$this->db->get_where('tbl_posts',array('slug'=>$this->uri->segment(3)))->row();
    echo '<title>'.$website->metaTitle.' | '.strtoupper($meta->metaTitle).'</title>
    <meta name="keywords" content="'.$meta->metaKeywords.$website->metaKeywords.'">
    <meta name="description" content="'.$meta->metaDescription.$website->metaDescription.'">
    <meta property="og:title" content="'.$meta->Title.'" />
    <meta property="og:description" content="'.$meta->metaDescription.$website->metaDescription.'" />
    <meta property="og:image" content="https://digitalindo.co.id/admin/upload/news_post/'.$meta->image.'" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="'.base_url().'Berita/baca/'.$meta->slug.'">
    <meta name="twitter:title" content="'.$meta->Title.'">
    <meta name="twitter:description" content="'.$meta->metaDescription.$website->metaDescription.'">
    <meta name="twitter:image" content="https://digitalindo.co.id/admin/upload/news_post/'.$meta->image.'">';
    } 
  ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/> -->

  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.css"> -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/vendors/flaticon/flaticon.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/slick/slick-theme.css">
  <link href="<?=base_url();?>assets/css/aos.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/util.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/modal.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/user.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/tambahan.css" rel="stylesheet">
   <link href="<?=base_url();?>assets/css/whatsapp_chat.css" rel="stylesheet">


    <link href="<?=base_url();?>assets/css/jquery-ui.min.css" rel="stylesheet">
   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- main css -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
  <!-- select2-->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />


    <!---fancy box-->
  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


  <!----frame corousel--->
  <link rel="stylesheet" href="<?=base_url();?>assets/frame-carousel/jquery.frame-carousel.min.css">

  


</head>

<body>

  <!--================Header Menu Area =================-->
  <header class="header_area" style="margin-bottom:-2%">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="<?=base_url()?>"><img style="width: 100%" src="<?=base_url();?>assets/img/Logo_Vertical.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo_h2" href="<?=base_url()?>"><img src="<?=base_url();?>assets/img/Logo_Vertical.png" alt="" style="width:100%" ></a>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class='nav-link' href="<?=base_url()?>#about">Tentang Progi</a></li>
              <!--<li class="nav-item"><a class='nav-link' href="<?=base_url()?>#how">Our Token</a></li>-->
              <li class="nav-item"><a class='nav-link' href="<?=base_url()?>#features">Fitur</a></li>
              <li class="nav-item"><a class='nav-link' href="<?=base_url()?>#roadmap">Roadmap</a></li>
              <li class="nav-item"><a class='nav-link' href="<?=base_url()?>#blog">Berita</a></li>
              <li class="nav-item"><a class='nav-link' href="<?=base_url()?>#whitepaper">Whitepaper</a></li>
              <li class="nav-item download"><a class='nav-link' href="<?=base_url()?>#downloads">Download</a></li>

            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
              <li class="nav-item <?php if($this->uri->segment(1)=="Free trial"){echo "active";}?>"><a href="#daftar" data-toggle="modal" data-target="#theModal" class="primary_btn text-uppercase">free trial</a></li>
            </ul> -->
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
 

    <!--CSS Spinner-->
<!-- <div class="spinner-wrapper">
<div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
</div> -->


<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 50%;margin-top: 8%;max-width: 100%">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <!-- <span aria-hidden="true">&times;</span> -->
            </button>
      </div>
      
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- <div class="bs-example"> -->
    <!-- Button HTML (to Trigger Modal) -->
    
    
    <!-- Modal HTML -->
    <!-- <div id="myModal" class="modal fade">
        <div class="modal-dialog" style="width: 50%;margin-top: 8%;max-width: 100%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">YouTube Video</h4>
                </div>
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div> -->
<!-- </div>  -->



<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="theModal">
                <div class="modal-dialog" style="width: 80%;margin-top: 8%;max-width: 100%">
                  <div class="modal-content">
                    <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" style="margin-top: 5px"></button>
              
                      <h3 class="modal-title" id="exampleModalLabel">Daftar</h3>
                    </div>
                    <div class="modal-body">
                      <form id="daftar" method="post" class="form-horizontal" action="<?php echo base_url(). 'Welcome/add_user'; ?>">
                        <table class="table table-bordered table-striped" width="100%">
                          <th width="50%">
                            <div class="form-group"> 
                          <label class="col-sm-4 control-label">Nama</label>
                          <div class="col-sm-8">
                            <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-4 control-label">No. Telp</label>
                          <div class="col-sm-8">
                            <input type="text" name="telp" placeholder="No. Telp" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-4 control-label">Nama Logistics</label>
                          <div class="col-sm-8">
                            <input type="text" name="namaLogistics" placeholder="Nama Logistics" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Alamat</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                          </div>
                        </div>
                          </th>
                          <th width="50%">
                             <div class="form-group">
                          <label class="col-sm-4 control-label">E-mail</label>
                          <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Domisili</label>
                          <div class="col-sm-8">
                            <input type="text" name="domisili" class="form-control" placeholder="Domisili" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-12 control-label">Dari mana Anda mengetahui informasi tentang Digitalindo?</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
                          </div>
                        </div>
                           <div class="form-group">
                         
                          <div class="col-sm-8">
                            <div id="recaptcha" class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>" data-callback="enableBtn"></div> 
                          </div>
                          
                          </th>
                        </table>
                        
                       
                      </div>
                      <div class="modal-footer">
                       
                        <button type="submit" id="btn-validate" class="btn btn-primary" disabled="true">Save changes</button>

                      </form>
                    </div>
                  </div>
                </div>
              </div>



        <!--================Contact Area =================-->
<style type="text/css">
    button[disabled].btn-primary,
    button[disabled].btn-primary:hover,
    button[disabled].btn-primary:active,
    button[disabled].btn-primary:focus { 
    background: #CCCCCC;
    box-shadow: none;
    outline: none;
    opacity: 0.5;
    text-decoration: none;
    color:#222222;
    border-color: #222222;
    }
    
</style>
 <script>
 function enableBtn(){
    document.getElementById("btn-validate").disabled = false;
   }


// $(document).ready(function(){
//     var url = $("#cartoonVideo").attr('src');
    
    
//     $("#myModal").on('hide.bs.modal', function(){
//         $("#cartoonVideo").attr('src', '');
//     });
    
   
//     $("#myModal").on('show.bs.modal', function(){
//         $("#cartoonVideo").attr('src', url);
//     });
// });

// function autoPlayYouTubeModal() {
//   var trigger = $('.trigger');
//   trigger.click(function(e) {
//     e.preventDefault();
//     var theModal = $(this).data("target");
//     var videoSRC = $(this).attr("src");
//     var videoSRCauto = videoSRC + "?autoplay=1";
//     $(theModal + ' iframe').attr('src', videoSRCauto);
//     $(theModal).on('hidden.bs.modal', function(e) {
//       $(theModal + ' iframe').attr('src', '');
//     });
//   });
// };
$('.close').click(function () {
  $('#video').hide();
  $('#video iframe').attr("src", jQuery("#video iframe").attr("src"));
});


</script>

