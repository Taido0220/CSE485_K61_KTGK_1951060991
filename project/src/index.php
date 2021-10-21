<?php
    include 'header.php';
  
?>

<main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->
        Danh sách bệnh nhân
    <a href="indexfull.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Chi tiết</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Nhóm máu</th>
                </tr>
            </thead>
            
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT patientid, firstname, lastname, dateofbirth, gender,blood_type FROM patient";
                    
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả

                    if(mysqli_num_rows($result)>0){
                       
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row['patientid'].'</td>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '</tr>';
                        }
                    }

                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
