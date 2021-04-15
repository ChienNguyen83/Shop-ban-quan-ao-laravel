
              <h3 class="title">
                Giỏ Hàng
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Hình ảnh
                    </th>
                    <th>
                      Chi tiết
                    </th>
                    <th>
                      Giá
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                      Tổng Giá
                    </th>
                    <th>
                      Xóa
                    </th>
                  </tr>
                </thead>
                <tbody>
                   @if(Session::has('Cart') != null)
                   @foreach(Session::get('Cart')->products as $item)
                  <tr>
                    <td>
                      <img src="{{$item['productInfo']->AnhNen}}" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          {{$item['productInfo']->TenSP}}
                        </div>
                        <p>
                          <img alt="" src="images/star.png">
                          <a class="review_num" href="#">
                            02 Review(s)
                          </a>
                        </p>
                        <!-- <div class="color-choser">
                          <span class="text">
                            Product Color : 
                          </span>
                          <ul>
                            <li>
                              <a class="black-bg " href="#">
                                black
                              </a>
                            </li>
                            <li>
                              <a class="red-bg" href="#">
                                light red
                              </a>
                            </li>
                          </ul>
                        </div> -->
                       <!--  <p>
                          Product Code : 
                          <strong class="pcode">
                            Dress 120
                          </strong>
                        </p> -->
                      </div>
                    </td>
                    <td>
                      <h5>
                        {{$item['productInfo']->Gia}}
                      </h5>
                    </td>
                    <td>
                      <!-- <select name="">
                        <option selected value="1">
                          1
                        </option>
                        <option value="1">
                          2
                        </option>
                        <option value="1">
                          3
                        </option>
                      </select> -->

                      <input type="number" style="width: 80%" data-id="{{$item['productInfo']->MaSP}}" data-gia ="{{$item['productInfo']->Gia}}" value="{{$item['quanty']}}" class="input-change">
                    </td>
                    <td>
                      <h5>
                        <strong class="red" id="tong{{$item['productInfo']->MaSP}}">
                          {{$item['price']}}
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="javascript:" class="xoacart" data-id = "{{$item['productInfo']->MaSP}}">
                        <img src="public/fontend_lib/images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                   @endif
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        Tiếp tục mua sắm
                      </button>
                      <button class="pull-right thanhtoan">
                        Cập nhật
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <!-- <div class="shippingbox">
                    <h5>
                      Estimate Shipping And Tax
                    </h5>
                    <form>
                      <label>
                        Select Country *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <label>
                        State / Province *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <label>
                        Zip / Post Code *
                      </label>
                      <select class="">
                        <option value="AL">
                          Alabama
                        </option>
                        <option value="AK">
                          Alaska
                        </option>
                        <option value="AZ">
                          Arizona
                        </option>
                        <option value="AR">
                          Arkansas
                        </option>
                        <option value="CA">
                          California
                        </option>
                        <option value="CO">
                          Colorado
                        </option>
                        <option value="CT">
                          Connecticut
                        </option>
                        <option value="DE">
                          Delaware
                        </option>
                        <option value="DC">
                          District Of Columbia
                        </option>
                        <option value="FL">
                          Florida
                        </option>
                        <option value="GA">
                          Georgia
                        </option>
                        <option value="HI">
                          Hawaii
                        </option>
                        <option value="ID">
                          Idaho
                        </option>
                        <option selected="" value="IL">
                          Illinois
                        </option>
                        <option value="IN">
                          Indiana
                        </option>
                        <option value="IA">
                          Iowa
                        </option>
                        <option value="KS">
                          Kansas
                        </option>
                        <option value="KY">
                          Kentucky
                        </option>
                        <option value="LA">
                          Louisiana
                        </option>
                        <option value="ME">
                          Maine
                        </option>
                        <option value="MD">
                          Maryland
                        </option>
                        <option value="MA">
                          Massachusetts
                        </option>
                        <option value="MI">
                          Michigan
                        </option>
                        <option value="MN">
                          Minnesota
                        </option>
                        <option value="MS">
                          Mississippi
                        </option>
                        <option value="MO">
                          Missouri
                        </option>
                        <option value="MT">
                          Montana
                        </option>
                        <option value="NE">
                          Nebraska
                        </option>
                        <option value="NV">
                          Nevada
                        </option>
                        <option value="NH">
                          New Hampshire
                        </option>
                        <option value="NJ">
                          New Jersey
                        </option>
                        <option value="NM">
                          New Mexico
                        </option>
                        <option value="NY">
                          New York
                        </option>
                        <option value="NC">
                          North Carolina
                        </option>
                        <option value="ND">
                          North Dakota
                        </option>
                        <option value="OH">
                          Ohio
                        </option>
                        <option value="OK">
                          Oklahoma
                        </option>
                        <option value="OR">
                          Oregon
                        </option>
                        <option value="PA">
                          Pennsylvania
                        </option>
                        <option value="RI">
                          Rhode Island
                        </option>
                        <option value="SC">
                          South Carolina
                        </option>
                        <option value="SD">
                          South Dakota
                        </option>
                        <option value="TN">
                          Tennessee
                        </option>
                        <option value="TX">
                          Texas
                        </option>
                        <option value="UT">
                          Utah
                        </option>
                        <option value="VT">
                          Vermont
                        </option>
                        <option value="VA">
                          Virginia
                        </option>
                        <option value="WA">
                          Washington
                        </option>
                        <option value="WV">
                          West Virginia
                        </option>
                        <option value="WI">
                          Wisconsin
                        </option>
                        <option value="WY">
                          Wyoming
                        </option>
                      </select>
                      <div class="clearfix">
                      </div>
                      <button>
                        Get A Qoute
                      </button>
                    </form>
                  </div> -->
                </div>
                <div class="col-md-4 col-sm-6">
                 <!--  <div class="shippingbox">
                    <h5>
                      Discount Codes
                    </h5>
                    <form>
                      <label>
                        Enter your coupon code if you have one
                      </label>
                      <input type="text" name="">
                      <div class="clearfix">
                      </div>
                      <button>
                        Get A Qoute
                      </button>
                    </form>
                  </div> -->
                </div>
                <div class="col-md-4 col-sm-6" id="tinhtien">
                  <div class="shippingbox">
                    @if(Session::has('Cart') != null)
                    <div class="subtotal">
                      <h5 style="font-size: 100%">
                        Tổng Số lượng :
                      </h5>
                      <span>
                        {{Session::get('Cart')->totalQuanty}}
                      </span>
                    </div>
                      
                    <div class="grandtotal">
                      <h5>
                        Tổng tiền
                      </h5>
                      <span>
                        {{Session::get('Cart')->totalPrice}}
                      </span>
                    </div>
                    @endif
                    <button style="float: right;">
                      Đặt hàng
                    </button>
                  </div>
                </div>
              </div>
