<?php require_once('Connections/datacar.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_datacar, $datacar);
$query_datacar = "SELECT * FROM datacar";
$datacar = mysql_query($query_datacar, $datacar) or die(mysql_error());
$row_datacar = mysql_fetch_assoc($datacar);
$totalRows_datacar = mysql_num_rows($datacar);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข้อมูลรถยนต์</title>
</head>

<body>
<h1 align="center">Data Cutomer's Cars</h1>
<table border="1" width="84%" align="center">
  <tr align="center">
    <td width="94">ID Cars</td>
    <td width="95">ID Customers</td>
    <td width="108">Number Cars</td>
    <td width="85"><span id="result_box" lang="en" xml:lang="en">Category Cars</span></td>
    <td width="99">Brand Cars</td>
    <td width="95">Color</td>
    <td width="114">Number <span id="result_box2" lang="en" xml:lang="en">Machine</span></td>
    <td width="109">Number Gas</td>
    <td width="77">Menu</td>
  </tr>
  <?php do { ?>
    <tr align="center">
      <td><?php echo $row_datacar['idcar']; ?></td>
      <td><?php echo $row_datacar['idcus']; ?></td>
      <td><?php echo $row_datacar['numcar']; ?></td>
      <td><?php echo $row_datacar['cag']; ?></td>
      <td><?php echo $row_datacar['brand']; ?></td>
      <td><?php echo $row_datacar['color']; ?></td>
      <td><?php echo $row_datacar['nummec']; ?></td>
      <td><?php echo $row_datacar['numgas']; ?></td>
      <td><a href="incar.php">ADD</a> <a href="editcar.php?idcar=<?php echo $row_datacar['idcar']; ?>">EDIT</a> <a href="delcar.php?idcar=<?php echo $row_datacar['idcar']; ?>">DEL</a></td>
    </tr>
    <?php } while ($row_datacar = mysql_fetch_assoc($datacar)); ?>
</table><br /><br />
<tr>
  <td align="right" width="20%"><a href="index.html">Back To INDEX</a></td></tr>
</body>
</html>
<?php
mysql_free_result($datacar);
?>
