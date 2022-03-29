<div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.563180612549!2d107.51469811477298!3d-6.9426917949839595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf870b85bd7b9bad3!2zNsKwNTYnMzMuNyJTIDEwN8KwMzEnMDAuOCJF!5e0!3m2!1sid!2sid!4v1647618346109!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
<footer class="site-footer">

      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Alamat</h3>
            <p>Jl. Cipatik No.19, Bandung Barat, Kota bandung, jawa barat 20013</p>
            <h3 class="footer-heading mb-4 text-white">No. Telp</h3>
            <p>(0831) 144034127</p>
            <h3 class="footer-heading mb-4 text-white">Fax</h3>
            <p>(+62)751/891891</p>
            <h3 class="footer-heading mb-4 text-white">Email</h3>
            <p>derigilangkusumah@gmail.com</p>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Galeri</h3>
                  <ul class="list-unstyled">
                    <div class="row">
                    <?php 
                    $sql=mysqli_query($conn,"SELECT * FROM galeri");
                    foreach ($sql as $value) {
                      ?>
                            <div class="col-md-6">
                              <li><img class="img-fluid" src="images/<?= $value['gambar']; ?>" ></li>
                            </div>
                      <?php
                    }
                     ?>
                     </div>
                  </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Media Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com/" target="_blank" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="https://www.twitter.com/" target="_blank" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/" target="_blank" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="https://www.whatsapp.com/" target="_blank" class="p-2"><span class="icon-whatsapp"></span></a>
                  <a href="https://www.vimeo.com/" target="_blank" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | imperial Hotel <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >deri gilang kusumah</a> | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
            
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>