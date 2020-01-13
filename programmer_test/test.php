<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test_shippop</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      echo "ข้อ 1 <br><br>";
      echo "1.1";
      echo "<table>";
      for($a=0;$a<=6;$a++){
        echo "<tr>";
        for ($c=6; $c >$a ; $c--) {
            echo '<th></th>';
        }
          for($b=1;$b<=$a;$b++){
              echo "<th>O</th>";
          }
        echo "</tr>";
      }
      echo "</table>";

      echo "<hr>";

      echo "1.2";
      echo "<br>";
      $levels = 6;
      for($i=0;$i<$levels;$i++){
              for($j=0;$j<floor(($levels-$i));$j++)
                      echo "&nbsp;";
              for($j=0;$j<(2*$i)-1;$j++)
                      echo "O";
              echo "<br>";
      }
      echo "<hr>";
      echo "ข้อ 2 ( ทดสอบความเข้าใจ if )";
      echo "<br>";
      echo "<br>";
      echo "ข้อ 2.1";
      echo "<br>";
      echo "ตอบ 10200";
      echo "<hr>";
      echo "ข้อ 2.2";
      echo "<br>";
      echo "<br>";
      echo "ข้อ 2.2.1";
      echo "<br>";
      echo "ตอบ 200";
      echo "<hr>";
      echo "ข้อ 2.2.2";
      echo "<br>";
      echo "ตอบ  Average ";
      echo "<hr>";
      echo "ข้อ 3 (ทดสอบ foreach)";
      echo "<br>";
      echo "<br>";
      echo "ข้อ 3.1";
      echo "<br>";
      echo "ตอบ 15000";
      echo "<hr>";
      echo "ข้อ 3.2 อาร์เรย์หลายมิติ";
      echo "<br>";
      echo "ข้อ 3.2.1. ";
      echo "ตอบ ";
      echo 'echo $marks["mohammad"]["physics"];';
      echo "<hr>";
      echo "ข้อ 3.2.2. ตอบ ";
      echo 'echo $marks["mohammad"]["physics"];
            echo $marks["mohammad"]["maths"];
            echo $marks["mohammad"]["chemisty"];

            echo $marks["qadir"]["physics"];
            echo $marks["qadir"]["maths"];
            echo $marks["qadir"]["chemisty"];

            echo $marks["zara"]["physics"];
            echo $marks["zara"]["maths"];
            echo $marks["zara"]["chemisty"];
      ';
      echo "<hr>";
      echo "ข้อ 4 ทดสอบ HTML และ CSS";
      echo "<br>";
      echo "<br>";
     ?>
     <div class="test_box">
       <div class="box">

       </div>
       <div class="box">

       </div>
       <div class="box">

       </div>
     </div>
     <hr>
     <p>ข้อ 5 </p>
     <p>ข้อ 5.1 ออกแบบฐานข้อมูล</p>
     <img src="test.png" alt="">
     <hr>
     <p>ข้อ 5.2 </p>
     <p>ตอบ INSERT INTO branchs (name_branch)</p>
        <p>VALUES ('เชียงใหม่');</p>
        <p>INSERT INTO branchs (name_branch)</p>
        <p>VALUES ('เชียงราย');</p>
        <p>INSERT INTO branchs (name_branch)</p>
        <p>VALUES ('ภูเก็ต');</p>
        <hr>
      <p>ข้อ 5.3 </p>
      <p>ตอบ DELETE FROM employee
          WHERE position = sale;</p>
      <hr>
      <p>ข้อ 5.4</p>
      <p>ตอบ UPDATE branchs
        SET namebranchs = 'นราธิวาส'
        WHERE namebranchs = 'ปัตตานี';</p>
      <hr>
      <p>ข้อ 5.5</p>
      <p>ตอบ SELECT * FROM employee;</p>
      <hr>
      <p>ข้อ 5.6</p>
      <p>ตอบ SELECT * FROM employee
              WHERE branch IN ('ระยอง', 'กรุงเทพ');</p>
      <hr>
      <p>ข้อ 5.7</p>
      <p>ตอบ -</p>
      <hr>
      <p>ข้อ 5.8</p>
      <p>ตอบ -</p>
      <hr>
      <p>ข้อ 6</p>
      <p>ทำไมถึงอยากเป็นโปรแกรมเมอร์ เป็นเพราะว่าโปรแกรมเมอร์เป็นอาชีพที่มาสามารถฝึกฝน และพัฒนาความสามารถของเราได้
        ตลอด น่าจะเป็นอาชีพที่ผมทำได้ดีเพราะชอบในการเขียนโค้ด อีกทั้งค่าตอบแทนก็คุมค่าในการทำงานอีกด้วย
      </p>
      <hr>
      <p>ข้อ 7</p>
      <p>ปัญหาน่าจะเป็นว่า การเขียนโค้ดนั้นมีแนวทางในการเขียนให้สามารถ run ได้หลายแบบ อีกทั้งผู้ที่มีประสบการน้อย
        อาจจะติดปัญหาบัคแก้ไม่ได้ หรือไม่สามารถเขียนโค้ดได้ตามที่ลูกค้าต้องการ หรือถ้าเขียนได้ก็อาจจะใช่เวลานาน ทั้ง ๆ ที่ถ้าเป็น
        โปรแกรมเมอร์ที่มีประสบการมากก็จะเขียนโค้ดนี้ได้แค่ไม่กี่นาที
      </p>
      <hr>
      <p>ข้อ 8</p>
      <p>
        ระบบ MVC คือจะมีระบบใหญ่ ๆ 3 ส่วนคือ controller, mobel, view ซึ่งทั้ง 3 ส่วนนี้จะมีหน้าที่ที่แตกต่างกันออกไป
        controller จะมีหน้าที่ส่งข้อมูลว่าคำสั่งนี้ควรเข้าไปทำงานในส่วนไหน mobel เป็นส่วนคำนวน, เพิ่ม, ลบ, แก้ไข ข้อมูลต่าง ๆ view
        เป็นส่วนที่แสดงผลทั้งหน้าบ้าน และหลังบ้านเป็นส่วนที่จะนำข้อมูลในฐานข้อมูลออกมาแสดงผล
      </p>
      <hr>
      <p>ข้อ 9</p>
      <p>
        Git คือ ศูนรวมการการส่งงานแบบทำงานเป็นทีมเนื่องจากว่างานเขียนโค้ดไม่สามารถทำคนเดียวได้เราจึงต้องมีทีม
        เพื่อจะทำให้งานนี้สำเร็จได้อย่างรวดเร็วโดยท่าคนในทีมมีการทำงานเสร็จแล้วการสามารถอัพงานผ่าน git ได้จึงทำให้
        คนในทีก็สามารถโหลดส่วนในส่วนที่ทำเสร็จแล้วมาใช่งานให้ทำงานต่อได้โดยไม่ต้องไปของานกันไปมาจึงทำให้งานที่ทำเป็น
        เวอร์ชั่นล่าสุดอยู่ตลอด และอีกอย่างที่สำคัญคือการถอยเวอร์ชั่นถ้าเราเขียนโค้ดแล้วลูกค้าต้องการเปลี่ยนกลับไปเป็นเวอร์ชั่นเดิม
        เราก็สามารถโหลดโค้ดเวอร์ชั่นเดิมออกมาได้จาก Git ที่เราเคยอัพไม่เมืออดีต
      </p>
      <p>Git Lad, Git hub, Git Source Tree </p>
      <hr>
      <p>ข้อ 10</p>
      <p>
        Docker คือ การทำงานแบบจำลองเป็นเครื่อง server
      </p>
      <hr>
      <p>ข้อ 11</p>
      <p>composer คือการโปรแกรมที่สามารถ run php ได้โดยไม่ต้องผ่านเบราว์เซอร์ อีกทั้ง composer ยังสามารถโหลด
        และติดตั้ง library ต่าง ๆ ได้อีกด้วย
      </p>
      <hr>
      <p>ข้อ 12</p>
      <p> Prepros(scss) คือการเขียน css แบบแก้ไขง่าย
      </p>
      <hr>
      <p>ข้อ 13</p>
      <p> มีคนเก่ง 4 คน
      </p>
      <hr>
      <p>ข้อ 14</p>
      <p> ไม่เคยทำ Freelance
      </p>
      <hr>
      <p>ข้อ 15</p>
      <p> ไม่เคยใช่ Framework ที่ทำงานในปัจจุบันใช่ joomla ในการพัฒนาเว็บไซต์
      </p>
      <hr>
      <p>ข้อ 16</p>
      <p> google page speed คือ เว็บที่จะช่วยทดสอบว่าเว็ยไซต์ของเราสามารถโหลดหน้าเว็บได้ในเวลาที่เหมาะสมหรือไม่
        และถ้าช้าเกินไป google page speed ก็จะสามารถแจ้งเตือนได้ว่าหน้าเว็บหน้านี้ที่เราเขียนมีส่วนไหนที่ทำให้โหลดช่าบ้าง
        เช่น หน้านี้มีภาพที่ขนาดใหญ่เกินไปทำให้โหลดช้าเป็นต้น
      </p>
      <hr>
      <p>ข้อ 17</p>
      <p> On page seo คือการทำให้เว็บที่เราเขียนนั้นถูกค้นหาเจอในหัวข้อแรก ๆ ของเว็บเซอร์เอนจิ้น
      </p>

  </body>
</html>
