<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 mt-4">
                <div class="footer-address text-green">
                    <h2><?= $website->name; ?></h2>
                    <h4>Cabang 1</h4>
                    <?= $website->address; ?>
                    <h4>Cabang 2</h4>
                    <?= $website->address2; ?>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <h2>Jam Buka</h2>
                            <p>Setiap Hari</p>
                            <p><?= $website->working_hours; ?> WIB</p>
                        </div>
                        <?php
                        $number = $website->phone;
                        $n1 = substr($number, 0, 4);
                        $n2 = substr($number, 4, 4);
                        $n3 = substr($number, 8, 4);
                        $wa = $n1 . '-' . $n2 . '-' . $n3;
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <h2>Telepon</h2>
                            <div class="btn-green-light mt-3">
                                <a href="https://wa.wizard.id/2bfa2f" target="_blank"><i class="fa fa-whatsapp me-1"
                                        aria-hidden="true"></i> <?= $wa; ?></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $website->map; ?>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <?= $website->map2; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="copyright">
    <div class="container">
        <div class="row justify-content-center text-center mx-0">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-11">
                <p>Copyright © 2022 - <a href="https://progimedia.com/">PROGIMEDIA</a> All Rights Reserved.
                    Powered by <a href="https://digitalindo.co.id/">Digitalindo</a></p>
            </div>
        </div>
    </div>
</div>


<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="assets/imagenew/arrow-up.svg" alt="alternative">
</button>
<!-- end of back to top button -->
<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animate__animated animate__bounceOutDown"
        style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animate__animated animate__fadeIn" style="display: block;">
            <div class="header-section"
                style="background: radial-gradient(100% 100% at 50% 0%, #00E18F 1.94%, #008454 100%)">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.sehat-refleksi.com/upload/wa_image/<?= $sec1->image; ?>">
                    </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                    <div class="avatar">
                        <img class="avatar"
                            src="https://admin103.sehat-refleksi.com/upload/wa_image/<?= $sec2->image; ?>">
                    </div>
                    <div class="profile">
                        <p class="position">Customer Service </p>
                        <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                        <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                        <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } else { ?>
                        <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } ?>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
        <div class="chat-section animate__animated animate__fadeIn" id="customer_chat_<?= $sec3->id; ?>"
            style="display: none;">
            <div class="header-section"
                style="background:radial-gradient(100% 100% at 50% 0%, #00E18F 1.94%, #008454 100%)">
                <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png"
                    onclick="backListChat(<?= $sec3->id; ?>);">
                <div class="header-avatar-section">
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin103.sehat-refleksi.com/upload/wa_image/<?= $sec3->image; ?>">
                    </div>
                </div>
                <div class="header-desc-section">
                    <h3><?= $sec3->nama; ?></h3>
                    <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                    <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                </div>
            </div>
            <div class="inside-chat-section">
                <div class="chat">
                    <div class="inside-chat">
                        <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari Sehat Refleksi.</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
                <div class="chat">
                    <div class="inside-chat">
                        <span>Ada yang bisa saya bantu ?</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
            </div>
            <div class="box-chat-section">
                <div class="text">
                    <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                        value="<?= $sec3->phone; ?>">
                    <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                        name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                </div>
                <div class="button-send">
                    <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                            src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>

<!-- Scripts -->
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
<script src="assets/js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
<script src="assets/js/scripts.js"></script> <!-- Custom scripts -->

<script type="text/javascript">
function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceOutDown')) {
        cek_class.classList.remove("animate__bounceOutDown");
        cek_class.classList.add("animate__bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}

function chatCustomer(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}

function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceInUp')) {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}

function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}

function textChatWhatsapp(id) {
    var link_wa = 'https://api.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}
</script>


</body>

</html>