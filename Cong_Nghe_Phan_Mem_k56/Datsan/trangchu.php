<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="trangchu.css"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Đặt sân online</title>
</head>
<body>
	<div class="bacgrouk">
            <!--<img src="img/bacgrouk.png">-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/thumb-1920-932703.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/san4.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/bacgrouk.png" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
         <!--    <h1><i class="fas fa-futbol"></i> THỎA MÃN GIẤC MƠ SÂN CỎ <i class="fas fa-futbol"> </i></h1> -->
    </div>
    <div style="position: absolute;top: 1px;" class="navbar">
            <div class="container-fluid navbar1">
                <div class="row">
                    <div class="col-3 logo">
                        <img src="img/logo.jpg">
                    </div>
                    <div class="col-5 search">
                        <input type="text" placeholder="Nhập nội dung cần tìm">
                        <i style="color: white" class="fas fa-search"></i>
                    </div>
                    <div class="col-1">
                        <div data-toggle="modal" data-target="#exampleModal6">
                            <a data-toggle="modal" data-target="#exampleModal6" style="color: white" href=""><i class="fas fa-shopping-cart"></i> </a>
                        </div>
                        <!-- modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cart-plus"></i> CÁC SÂN ĐÃ ĐẶT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h6><i class="fas fa-comment-alt"></i> Mời bạn đăng nhập!!!</h6>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- kết thúc -->
                    </div>
                    <div class="col-3 user">
                        <div data-toggle="modal" data-target="#exampleModal" class="icon">
                            <a style="margin-left: 40%;" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="far fa-user"></i> ĐĂNG NHẬP
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-users"></i> ĐĂNG NHẬP</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Tên đăng nhập</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                                    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất cứ ai khác.</small>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>
                                     </div>
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                 </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                   <!--  <div class="col-1 user">
                        <div class="icon">
                            <a  href="#"> <i class="fas fa-envelope"></i> GMAIL</a>
                        </div>
                    </div>
                    <div class="col-1 user">
                        <div class="icon">
                            <a  href="#"><i class="fab fa-facebook-square"></i> FACEBOOK</a>
                        </div>
                    </div> -->
                </div>
            </div>
    </div>
    <div style="position: absolute;top:30%;" class="container">
    	<div class="row">
            <div class="col-12 taitlee">
    		   <h1><i class="fas fa-futbol"></i> THỎA MÃN GIẤC MƠ SÂN CỎ <i class="fas fa-futbol"> </i></h1>
            </div>
    	</div>
    	<div class="row bangchon">
    		<div class="col-6">
    			<div class="click">
                    <div class=" boder">
                        <a href="datsan.php"><p><i class="fas fa-mouse-pointer"></i> Click chuột để cảm nhận</p></a>
                    </div>
                </div>
    		</div>
    		<div class="col-6">
                <div class="formss">
                    <form>
                        <table>
                            <tr>
                                <td>
                                    <p>Chọn ngày:</p>
                                </td>
                                <td>
                                    <div class="form-group">
                                <!--<label for="exampleFormControlSelect1">Chọn ngày</label>-->
                                        <input type="date" name="bday" min="2018-09-05" max="3000-12-31" class="form-control" id="Address">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Chọn giờ:</p>
                                </td>
                                <td>
                                    <div class="form-group">
                                <!--<label for="exampleFormControlSelect1">Chọn giờ</label>-->
                                        <select class="form-control" id="FormControlSelect1">
                                        <option>00:00</option>
                                        <option>00:30</option>
                                        <option>01:00</option>
                                        <option>01:30</option>
                                        <option>02:00</option>
                                        <option>02:30</option>
                                        <option>03:00</option>
                                        <option>03:30</option>
                                        <option>04:00</option>
                                        <option>04:30</option>
                                        <option>05:00</option>
                                        <option>05:30</option>
                                        <option>06:00</option>
                                        <option>06:30</option>
                                        <option>07:00</option>
                                        <option>07:30</option>
                                        <option>08:00</option>
                                        <option>08:30</option>
                                        <option>09:00</option>
                                        <option>09:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                        <option>18:30</option>
                                        <option>19:00</option>
                                        <option>19:30</option>
                                        <option>20:00</option>
                                        <option>20:30</option>
                                        <option>21:00</option>
                                        <option>21:30</option>
                                        <option>22:00</option>
                                        <option>22:30</option>
                                        <option>23:00</option>
                                        <option>23:30</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Chọn sân:</p>
                            </td>
                            <td>
                                <div class="form-group">
                                <!--<label for="exampleFormControlSelect2">Tên sân</label>-->
                                    <select multiple class="form-control" id="FormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>                        
                    </table>
                     <div class="sbm">
                   <!--  <input STYLE=" margin-left: 100px;
                           background-color: #676166;
                        color: white"

                            type="submit" value="Tìm sân"> -->
                            <!-- Button trigger modal -->
                       <!--  <button style="margin-left: 100px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                          Tìm sân
                        </button> -->
                        <button style="margin-left: 100px" type="button" class="btn btn-secondary"data-toggle="modal" data-target="#exampleModal2">Tìm sân</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-comment"></i> THÔNG BÁO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <H6><i class="far fa-times-circle"></i> KHÔNG TÌM ĐƯỢC SÂN !!!</H6>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    	</div>
    </div>
	<div class="container-fluid tail">
        <div class="row">
            <div class="col-3">
                <h2>Liên hệ với chúng tôi:</h2>
                <p><i class="fab fa-facebook"></i>  Facebook</p>
                <p><i class="far fa-envelope"></i>  Gmail</p>
                <p><i class="fas fa-phone-square"></i>  01642242611</p>
            </div>
            <div class="col-9">
                <h1><i class="fas fa-futbol"></i> ĐẶT SÂN BÓNG ONLINE NHANH CHÓNG DỄ DÀNG <i class="fas fa-futbol"> </i></h1>
            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>