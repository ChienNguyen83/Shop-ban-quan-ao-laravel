
@extends('layout.index')
@section('homecontent')
      
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 class="title contact-title">
                Kết nối với chúng tôi
              </h5>
              <div class="clearfix">
              </div>
              <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.764230655701!2d105.81853395035627!3d21.00208598594412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7dbfbdcdbf%3A0x85d8837c4ab9ad4f!2sHanoi-Aptech!5e0!3m2!1svi!2s!4v1618559884089!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="contact-infoormation">
                    <h5>
                      Thông tin liên hệ
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur ad ipis cing elit. Suspendisse at sapien mascsa. Lorem ipsum dolor sit amet, consectetur se adipiscing elit. Sed fermentum, sapien scele risque volutp at tempor, lacus est sodales massa, a hendrerit dolor slase turpis non mi. 
                    </p>
                    <ul>
                      <li>
                        <span class="icon">
                          <img src="images/message.png" alt="">
                        </span>
                        <p>
                          contact@michaeldesign.me
                          <br>
                          support@michaeldesign.me
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="images/phone.png" alt="">
                        </span>
                        <p>
                          084. 93 668 2236
                          <br>
                          084. 93 668 6789
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="images/address.png" alt="">
                        </span>
                        <p>
                          No.86 ChuaBoc St, DongDa Dt,
                          <br>
                          Hanoi, Vietnam
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="ContactForm">
                    <h5>
                      Gửi phản hồi
                    </h5>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <label>
                            Họ và tên
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input class="inputfild" type="text" name="">
                        </div>
                        <div class="col-md-6">
                          <label>
                            Email
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input class="inputfild" type="email" name="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>
                            Lời nhắn
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <textarea class="inputfild" rows="8" name="">
                          </textarea>
                        </div>
                      </div>
                      <button class="pull-right">
                        Gửi
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
      
        </div>
      </div>
      <div class="clearfix">
      </div>
@endsection

@section ('script')

<script>
     $(document).ready(function(){
         $('#type2').hide();
       });

</script>

@endsection
