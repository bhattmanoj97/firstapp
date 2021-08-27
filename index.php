<?php   
$url = "https://08b22714d544265d95b679ec26bdbcaf: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@shopbhatt.myshopify.com/admin/api/2021-07/products.json";
$ch = curl_init();   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($ch, CURLOPT_URL, $url);   
$res = curl_exec($ch);      
<tr> 
 <td> echo $res; </td>
</tr>
?>  
