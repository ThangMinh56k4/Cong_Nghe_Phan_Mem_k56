<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="datsan.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Đặt sân online</title>
</head>

<body>
    <div class="bbr">
       <!--  <img src="img/FIFA-18-4K-Wallpaper-1.jpg"> -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/FIFA-18-4K-Wallpaper-1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/nenchitietsan.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/san4.jpg" alt="First slide">
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
    </div>
    <div style="position: absolute;top: 1px;" class="navbar">
            <div class="container-fluid navbar1">
                <div class="row">
                    <div class="col-3 logo">
                        <a href="trangchu.php"><img src="img/logo.jpg"></a>
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
                    <!-- <div class="col-1 user">
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
    <div class="note">
           <h1><i class="fas fa-exclamation-circle"></i> Các sân bóng nổi bật</h1>
    </div>
        <div class="container-fluid">
            <div class="row ">
           
                <?php include "cacsanbong.php"?>
            </div>
        </div>
        <div class=" submittt">
            <a href="xemthem.php"><button type="button" class="btn btn-success">Xem thêm</button></a>
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
                <h1><i class="fas fa-futbol"></i> THỎA MÃN GIẤC MƠ SÂN CỎ <i class="fas fa-futbol"> </i></h1>
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