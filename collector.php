<?php
    $order_name =$_POST['order-name'];
    $order_id = $_POST['order-id'];
    $earned = '$'.$_POST['earning'];
    $gig_type =$_POST['gig-type'];
    $neat_earn = '$'.$_POST['earning'] * 0.8 ;
    $delivered =$_POST['delivered'];
    $status = '';
    if($delivered === 'on'){
        $status = 'delivered';
    }else{
        $status = 'not delivered';
    }

    $path = 'data/';
    $stream = $path. $order_name.'.txt';
    $file = fopen($stream,'w') or die('Failed to create file');

    $table_content = '<tr>
                        <td class="oname">'.$order_name.'</td>
                        <td >'.$order_id.'</td>
                        <td >'.$gig_type.'</td>
                        <td>22/07/2023</td>
                        <td>'.$earned.'</td>
                        <td>'.$neat_earn.'</td>
                        <td>'.$status.'</td>
                    </tr>';

    fwrite($file,$table_content);
    fclose($file);

    
?>