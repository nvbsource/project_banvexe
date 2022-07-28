<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div style="background-color:#1365af;padding:15px 5px 15px">
      <div class="adM"></div>
      <div style="max-width:600px;margin:0 auto;font-family:Arial,sans-serif">
        <div class="adM"></div>
        <div style="background-color:#fff">
          <div class="adM"></div>
          <div style="padding:15px 0;text-align:center">
            <div class="adM"></div>
            <img src="https://ci6.googleusercontent.com/proxy/ITxr2HrxGLjMjXuJdSfu9tmIuE5I2tHin1lVye9s__Js37KsoZVNd8UoKDj6PzwTijp41U2Yv4dWfs1vTQ-_Uw=s0-d-e1-ft#https://static.vexere.com/images/logo-bgw.jpg" alt="logo" width="200px" class="CToWUd" data-bit="iit">
          </div>
          <div>
            <img src="https://ci6.googleusercontent.com/proxy/xzqK7eT3jtq920-KusEninFa_vtRUjCQq2wO0Ab65ep5talHqA5qK4e022SU-T-dplOSiWZsCG_DyEsnpcQR=s0-d-e1-ft#https://static.vexere.com/images/divider.png" alt="divider" width="100%" style="max-height:40px" class="CToWUd" data-bit="iit">
          </div>
          <div style="padding:5px 25px">
            <div style="font-family:Helvetica,Arial,sans-serif;font-weight:bold;font-size:18px;color:#1e62a3;text-align:center;padding:10px 0"> Xin chào {{$mailData["nameStaff"]}}</div>
            <p style="font-size:12px;margin:5px 0">Bạn đã chính thức làm nhân viên của công ty nhà xe {{$mailData["nameCompany"]}}
            </p>
          </div>
          <div>
            <img src="https://ci6.googleusercontent.com/proxy/xzqK7eT3jtq920-KusEninFa_vtRUjCQq2wO0Ab65ep5talHqA5qK4e022SU-T-dplOSiWZsCG_DyEsnpcQR=s0-d-e1-ft#https://static.vexere.com/images/divider.png" alt="divider" width="100%" style="max-height:40px" class="CToWUd" data-bit="iit">
          </div>
          <div></div>
          <div style="padding:10px 25px;font-family:arial,sans-serif;font-size:14px;line-height:24px">
            <div style="border:1px solid #1e62a3;border-radius:5px;width:100%">
              <div style="border-top-left-radius:5px;border-top-right-radius:5px;background-color:#1d65b1;width:100%">
                <table style="width:100%">
                  <tbody>
                    <tr>
                      <td style="width:100%">
                        <div style="float:left;padding:5px">
                          <img src="https://ci5.googleusercontent.com/proxy/KZ2s0KnE1GwcjCS0TOps7ZBpwXMZlaNCQ5tgxFdAJPqbojrYOmhpgR9YtxEBp6wUcHefopuupHyiXiFm=s0-d-e1-ft#https://static.vexere.com/images/logo.jpg" alt="vexere.com" height="40px" class="CToWUd" data-bit="iit">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div style="background-color:#fff;padding-bottom:15px">
                <div style="padding-left:15px;padding-right:15px">
                  <h3 style="font-size:1.7em;color:#1e62a3;text-align:center;margin:10px 0">Thông tin nhân viên </h3>
                  <table style="width:100%;vertical-align:text-top;font-size:13px;color:#000;line-height:20px;font-family:Arial,sans-serif">
                    <tbody>
                      <tr>
                        <td style="width:35%;padding:5px">Hãng xe:</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["nameCompany"]}}</b>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:35%;padding:5px">Nhân viên:</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["nameStaff"]}}</b>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:35%;padding:5px">Văn phòng</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["addressOffice"]}}</b>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:35%;padding:5px">Chức vụ</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["roleName"]}}</b>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:35%;padding:5px">Tài khoản</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["username"]}}</b>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:35%;padding:5px">Mật khẩu</td>
                        <td style="width:65%;padding:5px">
                          <b>{{$mailData["password"]}}</b>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <div style="text-align:center;margin-top:10px">
                    <a href="https://localhost:8000/admin/login" style="margin:5px;border:2px solid #ff9900;border-radius:5px;font-weight:bold;font-size:1.2em;background-color:#ffdd00;color:#000;padding:8px 16px;display:inline-block;vertical-align:middle;overflow:hidden;text-decoration:none;text-align:center;white-space:nowrap" target="_blank">Truy cập trang quản trị</a>
                  </div>
                </div>
              </div>
              <div style="background-color:#1d65b1;color:#ffffff;line-height:24px;padding:5px 15px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;font-size:12px">
                <table style="width:100%">
                  <tbody>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div>
            <img src="https://ci6.googleusercontent.com/proxy/xzqK7eT3jtq920-KusEninFa_vtRUjCQq2wO0Ab65ep5talHqA5qK4e022SU-T-dplOSiWZsCG_DyEsnpcQR=s0-d-e1-ft#https://static.vexere.com/images/divider.png" alt="divider" width="100%" style="max-height:40px" class="CToWUd" data-bit="iit">
          </div>
          <div style="padding:10px 25px;font-size:12px;text-align:justify;color:#000"></div>
          <div class="adL"></div>
        </div>
        <div class="adL"></div>
      </div>
      <div class="adL"></div>
    </div>
  </body>
</html>