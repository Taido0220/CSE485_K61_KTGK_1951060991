<?php
    include 'header.php';
  
?>

<main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Bệnh nhân</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">SDT</th>
                    <th scope="col">email</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col">Ngày cập nhật</th>
                    
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * FROM patient";
                    
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
                            echo '<td>'.$row['mobile'].'</td>';

                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['height'].'</td>';
                            echo '<td>'.$row['weightt'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['modified_on'].'</td>';
                            echo '<td><a href="edit.php?id='.$row['patientid'].'"><i class="fas fa-user-edit"></i></a></td>';
                            echo '<td><a href="delete.php?id='.$row['patientid'].'"><i class="fas fa-user-times"></i></a></td>';
                            echo '</tr>';
                        }
                    }
               
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
