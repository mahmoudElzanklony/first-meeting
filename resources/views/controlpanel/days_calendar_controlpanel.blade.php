<?php
      $list=array();
      $month =  $month;
      $year = $year;
      $days_names = [
          'Sat'=>'السبت',
          'Sun'=>'الأحد',
          'Mon'=>'الأثنين',
          'Tue'=>'الثلاثاء',
          'Wed'=>'الأربعاء',
          'Thu'=>'الخميس',
          'Fri'=>'الجمعه'
          ];
      for($d=1; $d<=31; $d++)
      {
          $time=mktime(12, 0, 0, $month, $d, $year);  
          if (date('m', $time)==$month){      
              $day = explode ('-', date('Y-m-d-D', $time));
              foreach($days_names as $english => $arabic){
                  if($day[3] == $english){
                      $day[3] = $arabic;
                      break;
                  }
              }
              $list[$day[2]]=$day[3];
          }
      }
       $column_number = 0;
       
  ?>
    
    @foreach($list as $dayNumber => $dayName)
     <?php
         if($column_number % 7 == 0){ 
             echo '<tr>';

         }

         if($dayNumber == '01'){
             $firstDay = false;
             foreach($days_names as $Eng => $Ara){
                 if($dayName == $Ara){
                      echo '<td>';
                     
                        if($nav == "photographernav"){
                            echo '<div class="photo">';
                            echo '<span class="photographer_pic">'.$dayNumber.'</span><p>احمد علي</p>';
                        }else{
                            echo '<div class="control">';
                            echo '<span>'.$dayNumber.'</span>';
                            echo'<p>احمد علي</p>
                            <p>شيماء علي</p>
                            <p class="mobile_only">10</p>';
                        }
                        
                        if($nav == "photographernav"){
                            echo '<input name="day[]" type="checkbox">'; 
                         }else{
                            echo'<span><i class="fas fa-compress"></i></span>';
                         }
                    echo'</div>
                 </td>';
                     $column_number++;
                     $inputCursor = ''; 
                     $firstDay = true;
                 }else{
                     if($firstDay == false){
                         echo '<td class="disabled"><div></div></td>';
                         $column_number++;
                     }
                 }
             }
         }else{

             echo '<td>';
                     
                        if($nav == "photographernav"){
                            echo '<div class="photo">';
                            echo '<span class="photographer_pic">'.$dayNumber.'</span><p>احمد علي</p>';
                        }else{
                            echo '<div class="control">';
                            echo '<span>'.$dayNumber.'</span>';
                            echo'<p>احمد علي</p>
                            <p>شيماء علي</p>
                            <p class="mobile_only">10</p>';
                        }
                        if($nav == "photographernav"){
                            echo '<input name="day[]" type="checkbox">'; 
                         }else{
                            echo'<span><i class="fas fa-compress"></i></span>';
                         }
                    echo'</div>
                 </td>';
             $column_number++;
         }
         if($column_number == 7){
             $column_number = 0;
             echo '</tr>';
         }



         ?>
    
    
    @endforeach
    
   