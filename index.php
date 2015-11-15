<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" /> 
<title>ExclusiveBlog.ru</title> 
</head> 
<body> 
<form name="add" method="post">
 <input type="submit" name="print" value="Распечатать" /> 
 <?php $fn = "counter.txt"; // путь к файлу со значением счетчика 
 $file = fopen($fn,"r"); 
 // открываем файл на чтение 
 $c = fread($file, filesize($fn));
 // записываем текущее значение 
 fclose($file);
 // закрываем файл
 echo "Распечатано ".$c." раз(a)"; 
 // выводим значение ?> 
 </form>
 <?php if (isset($_POST['print'])) // проверяем нажатие кнопки 
 { $file = fopen($fn,"w"); 
 // открываем файл на запись
 $c++; 
 // увеличиваем значение на 1
 fputs($file,$c);
 // записываем значение 
 fclose($file);
 // закрываем файл ?> 
 <script language="JavaScript1.1" type="text/javascript"> window.print(); 
 // вызываем печать текущего документа </script> <?php } ?> 
 </body> 
 </html>