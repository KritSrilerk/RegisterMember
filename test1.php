<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register Member</h1>
    <hr>
    <form action="./register_member.php" method="POST" enctype="multipart/form-data">
        ชื่อ : <input type="text" name="m_name" id="">
        <br><br>
        วัน/เดือน/ปี : <input type="date" name="m_born" id="">
        <br><br>
        เพศ :
        <input type="radio" name="m_sex" id="" value="m"> ชาย
        <input type="radio" name="m_sex" id="" value="f"> หญิง
        <input type="radio" name="m_sex" id="" value="o"> เพศทางเลือก
        <br><br>
        จบการศึกษาสูงสุด :
        <select name="m_education" id="">
            <option value="1">ม.ต้น</option>
            <option value="2">ม.ปลาย</option>
            <option value="3" selected> ปริญญาตรี</option>
            <option value="4">ปริญญาโท</option>
            <option value="5">ปริญญาเอก</option>
        </select>
        <br><br>
        งานอดิเรก : 
        <input type="checkbox" name="m_job1" id="" value="เล่นกีฬา"> เล่นกีฬา
        <input type="checkbox" name="m_job2" id="" value="ฟังเพลง"> ฟังเพลง
        <input type="checkbox" name="m_job3" id="" value="อ่านหนังสือ"> อ่านหนังสือ
        <input type="checkbox" name="m_job4" id="" value="ท่องเที่ยว"> ท่องเที่ยว
        <br><br>
        รูปภาพ : <input type="file" name="m_image" id="" accept=".image">
        <br><br>
        ไฟล์ประวัติส่วนตัว (PDF file) : <input type="file" name="m_resume" id="" accept=".pdf">
        <hr>
        ชื่อผู้ใช้ : <input type="text" name="m_username" id="">
        <br><br>
        รหัสผ่าน : <input type="password" name="m_password" id="">
        <input type="hidden" name="m_status" value="ปกติ">
        <?php
            date_default_timezone_set('Asia/Bangkok');
            $m_dateregister = date("d-M-Y h:i:s");
            //echo $m_dateregister;
        ?>
        <input type="hidden" name="m_dateregister" value="<?php echo $m_dateregister; ?>">
        <hr>
        <input type="submit" value="ตกลง">
        <input type="reset" value="ยกเลิก">


    </form>

</body>

</html>