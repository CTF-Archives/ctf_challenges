<?php
class action extends mysql{
	public function get_show_msg($url,$show="�����ѳɹ�"){
		$msg='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<div>
<table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" style="margin-top:100px">
<tr><th align="center" style="background:#cef">��Ϣ��ʾ</th></tr>
<tr><td><p>'.$show.'<br />
2��󷵻�ָ�����棡<br />
���������޷���ת��<a href="'.$url.'">�����˴�</a>.</p>
</td></tr>
</table>
</div>
</body>
</html>';
echo $msg;
exit();
	}
}
?>