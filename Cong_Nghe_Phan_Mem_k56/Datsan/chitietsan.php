<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="chitietsan.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Đặt sân online</title>
</head>

<body>
	<div class="head">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/san4.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/nenchitietsan.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/sandep2.jpg" alt="First slide">
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
		<div class="tieude">
			<h1><a href="trangchu.php"><i class="fas fa-home"></i></a> Thông tin sân bóng</h1>
		</div>
	</div>
            
	<div class="container">
		<div class="row">
			<div class="col-8 tieudee">
				<p><i class="fas fa-map-marker-alt"></i> Địa chỉ<p>
			</div>
			<div class="col-4 tieudee">
				<p><i class="fas fa-info-circle"></i> Thông tin</p>
			</div>
		</div>
        
		<div class="row">
			<div class="col-8 mapp">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1890.0486443521222!2d105.69787689182951!3d18.65962975501865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cc2d478bbbdb%3A0x73f675fd0b8d59f6!2zU8OibiBCw7NuZyDEkOG6oWkgSOG7jWMgVmluaA!5e0!3m2!1svi!2s!4v1544729297012" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-4 thongtinn">
				<p>Sân Đại học Vinh:</p>
				<img src="img/daihocvinh.jpg">
				<p>rộng rãi, sạch sẽ sân mới xây</p>
				<p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                     Đặt sân
                    </button>
                </p>

<!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-square"></i> ĐẶT SÂN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Họ tên</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                              </div>
                               <div class="form-group">
                                <label for="exampleFormControlInput1">Số điện thoại</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                              </div>
                               <div class="form-group">
                                <label for="exampleFormControlInput1">Địa chỉ</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                              </div>
                                <div class="form-group">
                                <label for="exampleFormControlInput1">Chọn ngày</label>
                                <!--<label for="exampleFormControlSelect1">Chọn ngày</label>-->
                                        <input type="date" name="bday" min="2018-09-05" max="3000-12-31" class="form-control" id="Address">
                                </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn giờ</label>
                                <select class="form-control" id="exampleFormControlSelect1">
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
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Thêm dịch vụ</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Đặt sân</button>
                          </div>
                        </div>
                      </div>
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